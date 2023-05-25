@extends('layouts.master')

@section('content')
<div>
    <div id="card1">
        <h5 style="font-family: 'Courier New', Courier, monospace; color:red;">zoekertje 1</h5>
        <p id="bes1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, velit neque ipsa ipsam maiores quod corrupti laudantium voluptatibus perferendis eos sint cupiditate nostrum quisquam ullam sit atque? Eveniet, est sed.</p>
        <a href="{{ url('/item/card1') }}">Details</a>
        <hr>
    </div>
    <div id="card2">
        <h5 style="'font-family: Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: yellowgreen;">zoekertje 2</h5>
        <p id="bes2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, velit neque ipsa ipsam maiores quod corrupti laudantium voluptatibus perferendis eos sint cupiditate nostrum quisquam ullam sit atque? Eveniet, est sed.</p>
        <a href="{{ url('/item/card2') }}">Details</a>
        <hr>
    </div>
    <div id="card3">
        <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:blue;">zoekertje 3</h5>
        <p id="bes3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, velit neque ipsa ipsam maiores quod corrupti laudantium voluptatibus perferendis eos sint cupiditate nostrum quisquam ullam sit atque? Eveniet, est sed.</p>
        <a href="{{ url('/item/card3') }}">Details</a>
        <hr>
    </div>
</div>
@endsection
