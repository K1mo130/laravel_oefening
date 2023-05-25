@extends('layouts.admin')

@section('content')

@foreach($items as $item)
    <div>
        <h3>{{ $item['Naam'] }}</h3>
        <p>{{ $item['Bescrijving'] }}</p>
    </div>
@endforeach

@endsection