@extends('layouts.master')
@section('content')
<div class="card m-4">
    <div class="card-header">
        <h1>Check</h1>
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
        <form action="{{ url('admin/check') }}" method="post" enctype="multipart/form-data">
            <!-- {{method_field('post')}} -->
            @csrf 
            <div class="mb-2">
                <label for="name">FullName</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="Email">Email <Address></Address></label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-2">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <label for="image">image</label>
                <input type="file" class="form-control" name="image" placeholder="Enter your name">
            </div>
            <div class="mt-2">
                <button class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection