@extends('adminpanel::layouts.master')

@section('content')
<div class="card">
    <div class="card-heading">
        <h1>Create Category</h1>
    </div>
    <div class="card-body">

        <form action="{{ route('admin.page-category.create') }}" method="post">
            @csrf
            <table class="table">
                <tr>
                    <th><input class="form-control" type="text" name="title"></th>
                </tr>
                <tr>
                    <th>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th><button type="submit" class="btn btn-primary">Save Category</button></th>
                </tr>

            </table>
        </form>

    </div>
</div>
@endsection
