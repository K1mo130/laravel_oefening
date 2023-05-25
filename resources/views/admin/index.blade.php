@extends('layouts.admin')

@section('content')
<div>
    @foreach ($items as $item)
    <div id="zk{{ $item->id }}">
        <h1>{{ $item->title }}</h1>
        <p>{{ $item->content }}</p>
        <a href="{{ route('admin.edit', ['ad_id' => $item->id]) }}">edit</a>
        <hr>
    </div>
    @endforeach
</div>
    <button type="submit" onclick="location.href='{{ route('admin.create') }}'">Create Item</button>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@endsection