@extends('adminpanel::layouts.master')

@section('content')

@if($tags)

<div class="card">
    <div class="card-heading">
        <div class="d-flex justify-content-between">
        <h1>All Listing</h1>
        <div><a class="btn btn-primary" href="{{ route('admin.tag.create') }}">Create</a></div>
        </div>

    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <tr>
                <th width="10%">ID</th>
                <th width="70%">Title</th>
                <th>Action</th>

            </tr>

            @foreach ($tags as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <th>{{ $row->title }}</th>

                <th>

                    <a href="{{ route('admin.tag.edit',$row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('admin.tag.delete',$row->id) }}" class="btn btn-sm btn-danger">Delete</a>

                </th>
            </tr>
            @endforeach

        </table>

    </div>
</div>
@endif

@endsection
