@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Tony the tiger gets hit by a train</strong> <a href="{{ route('admin.edit', ['id' => 1]) }}">Edit</a></p>
        </div>
    </div>
@endsection