@extends('adminpanel::layouts.master')

@section('content')

@if($pages)

<div class="card">
    <div class="card-heading">
        <div class="d-flex justify-content-between">
            <h1>All Pages Listing</h1>
            <div><a class="btn btn-primary" href="{{ url('/adminpanel/pages/create') }}">Create Page</a></div>
        </div>

    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <tr>
                <th width="10%">ID</th>
                <th width="60%">Title</th>
                <th width="10%">Keywords</th>
                <th width="20%">Action</th>
            </tr>

            @foreach ($pages as $row)
            <tr class="{{ $row->deleted_at != '' ? 'bg-warning' : '' }}">
                <th scope="row">{{ $row->id }}</th>
                <th>{{ $row->title }}</th>
                <th>{{ $row->keywords }}</th>
                <th>

                    <form class="inline" method="post" action="{{ url('/adminpanel/pages/'.$row->id) }}">
                        @method("delete")
                        @csrf
                        <a href="{{ url('/adminpanel/pages/'.$row->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach

        </table>

    </div>
</div>
@endif

@endsection
