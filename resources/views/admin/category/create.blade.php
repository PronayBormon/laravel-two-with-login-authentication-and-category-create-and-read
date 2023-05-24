@extends('layouts.master')
@section('content')
<div class="card m-4">
    <div class="card-header d-flex">
        <div>
            <h1>Category </h1>
        </div>
        <div class="ms-auto">
            <a href="{{ url('admin/add_category') }}" class="btn btn-secondary">New Category</a>
        </div>
    </div>
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form action="{{ url('admin/add_category') }}" method="post" enctype="multipart/form-data">
            {{method_field('post')}}
            @csrf 
            <div class="mb-2">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="slug">slug <Address></Address></label>
                <input type="slug" class="form-control" name="slug" placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="mb-2">
                <label for="image">image</label>
                <input type="file" class="form-control" name="image" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="metaTitle">Meta Title</label>
                <input type="text" class="form-control" name="meta_title" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="description">Meta Description</label>
                <textarea class="form-control" name="meta_description" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="mb-2">
                <label for="keyword">Meat keyword</label>
                <input type="text" class="form-control" name="meta_keyword" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="nav status">nav status </label>
                <input type="checkbox" class="form" name="nav_status" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="status">Status  </label>
                <input type="checkbox" class="form" name="status" placeholder="Enter your name">
            </div>
            <div class="mt-2">
                <button class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection