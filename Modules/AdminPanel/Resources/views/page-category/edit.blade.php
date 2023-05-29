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
            @include("adminpanel::layouts.form-errors")
            <table class="table">
                <tr>
                    <th>
                        <select class="form-control" name="parent_id">
                            <option {{ $category->parent_id == 0 ? 'selected="selected"' : ''}}  value="0">Root Category</option>
                            @foreach ($categories as $cat)
                            <option {{ $cat->id == $category->parent_id ? 'selected="selected"' : ''}} value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>
                    </th>
                </tr>
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
