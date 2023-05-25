@extends('layouts.master')

@section('content')
    <h1>Ad Details</h1>
    <p>dit is de zoekertjes van <strong>{{ $ad_id }}</strong>.</p>

    @if($ad_dec)
        <h2>{{ $ad_dec['Naam'] }}</h2>
        <p>{{ $ad_dec['Bescrijving'] }}</p>
    @endif
@endsection
