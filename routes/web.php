<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Models\Item;


Route::get('/master', function() {
    return view('layouts.master');
})->name('master');

Route::view('/partials/header', 'partials.header_partial')->name('header');

Route::view('/about', 'other.about')->name('about');

// admin page:
Route::prefix('admin')->group(function () {
    Route::get('/admin/index', function () {
        //alle item selecteren
        $items = Item::all();
        return view('admin.index', ['items' => $items]);
    })->name('admin.index');

    Route::post('/edit/{ad_id}', function ($ad_id, Illuminate\Http\Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|min:4|max:255',
            'content' => 'required',
        ]);

        $title = $validatedData['title'];
        $content = $validatedData['content'];

        return redirect()->route('admin.index')->with('success', 'Item edited successfully.');
    });

    Route::get('/edit/{ad_id}', function ($ad_id) {
        return view('admin.edit', ['ad_id' => $ad_id]);
    })->name('admin.edit');

    Route::post('/create', function (Illuminate\Http\Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|min:4|max:255',
            'content' => 'required',
        ]);

        $item = new Item;
        $item->title = $validatedData['title'];
        $item->content = $validatedData['content'];
        $item->save();

        return redirect()->route('admin.index')->with('success', 'Item created successfully.');
    })->name('admin.store');

    Route::get('/create', function () {
        return view('admin.create');
    })->name('admin.create');
});


Route::view('/partials/admin', 'partials.admin-header')->name('header_admin');

Route::group(['groep' => 'admin'], function() {
    Route::view('/admin/index','admin.index');
    Route::view('/', 'content.index')->name('index');
});


Route::get('/item/{ad_id}', function($ad_id) {
    $ad_dec = [];
    
    if ($ad_id === 'card1') {
        $ad_dec = [
            'Naam' => 'zoekertje 1',
            'Bescrijving' => 'dit is zoekertje 1',
        ];
    } elseif ($ad_id === 'card2') {
        $ad_dec = [
            'Naam' => 'zoekertje 2',
            'Bescrijving' => 'dit is zoekertje 2',
        ];
    } elseif ($ad_id === 'card3') {
        $ad_dec = [
            'Naam' => 'zoekertje 3',
            'Bescrijving' => 'dit is zoekertje 3',
        ];
    }
    return view('content.item', ['ad_id' => $ad_id, 'ad_dec' => $ad_dec]);
});

Route::get('items', [ItemController::class, 'getItems'])->name('admin.item');

?>