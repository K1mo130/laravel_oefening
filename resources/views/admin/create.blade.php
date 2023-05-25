@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="content">Content</label><br>
        <textarea name="content" id="content"></textarea>
    </div>

    <button type="submit">Submit</button>
</form>
@endsection
