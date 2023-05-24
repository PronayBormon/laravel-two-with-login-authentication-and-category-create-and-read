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
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- content part start here  -->
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Slug</th>
                    <th>description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ ($item->id) }}</td>
                    <td>{{ ($item->name) }}</td>
                    <td>{{($item->slug)}}</td>
                    <td>{{($item->description)}}</td>
                    <td>{{($item->image)}}</td>
                    <td>{{($item->status == true? 'Active':'Inactive')}}</td>
                    <td>
                        <a href="edit">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
   
    </div>
</div>
@endsection