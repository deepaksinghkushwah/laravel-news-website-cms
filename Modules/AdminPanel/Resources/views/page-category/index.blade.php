@extends('adminpanel::layouts.master')

@section('content')

@if($categories)

<div class="card">
    <div class="card-heading">
        <div class="d-flex justify-content-between">
        <h1>All Category Listing</h1>
        <div><a class="btn btn-primary" href="{{ route('admin.page-category.create') }}">Create Category</a></div>
        </div>

    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <tr>
                <th width="10%">ID</th>
                <th width="40%">Title</th>
                <th width="20%">Parent</th>
                <th width="10%">Status</th>
                <th width="20%">Action</th>
            </tr>

            @foreach ($categories as $row)
            <tr class="{{ $row->deleted_at != '' ? 'bg-warning' : '' }}">
                <th scope="row">{{ $row->id }}</th>
                <th>{{ $row->title }}</th>
                <th>{{ $row->parent_id == 0 ? 'Root' : $row->parent->title }}</th>
                <th>{{ $row->status == 1 ? 'Active' : 'Inactive' }}</th>
                <th>
                    <a href="{{ route('admin.page-category.edit',$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('admin.page-category.delete',$row->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </th>
            </tr>
            @endforeach

        </table>

    </div>
</div>
@endif

@endsection
