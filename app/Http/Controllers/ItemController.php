<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Item;

class ItemController extends Controller {
    public function getItems() {
        $itemModel = new Item();
        $items = $itemModel->getItems();

        return view('admin.item', compact('items'));
    }
    
}
