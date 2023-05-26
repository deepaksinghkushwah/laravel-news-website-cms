@extends('adminpanel::layouts.master')

@section('content')
<div class="card">
    <div class="card-heading">
        <h1>Update Category: {{ $category->title }}</h1>
    </div>
    <div class="card-body">

        <form action="{{ route('admin.page-category.edit', $category->id) }}" method="post">
            @csrf
            @method("patch")
            <table class="table">
                <tr>
                    <th><input class="form-control" type="text" name="title" value="{{ $category->title }}"></th>
                </tr>
                <tr>
                    <th>
                        <select class="form-control" name="status" id="status">
                            <option value="1" {{ $category->status == 1 ? 'selected="selected"' : '' }}>Active</option>
                            <option value="0" {{ $category->status == 0 ? 'selected="selected"' : '' }}>Inactive</option>
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
