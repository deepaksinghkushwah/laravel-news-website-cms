@extends('adminpanel::layouts.master')

@section('content')
<div class="card">
    <div class="card-heading">
        <h1>Update Page: {{ $page->title }}</h1>
    </div>
    <div class="card-body">

        <form action="{{ url('/adminpanel/pages', $page->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("patch")
            @include("adminpanel::layouts.form-errors")
            <table class="table">
            <tr>
                    <td>Category</td>
                    <th>
                        <select class="form-control" name="cat_id">
                               @foreach ($categories as $cat)
                                    <option {{ $cat->id == $page->cat_id ? 'selected="selected"' : '' }} value="{{ $cat->id }}">{{ $cat->title }}</option>
                               @endforeach
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Title</th>
                    <th><input class="form-control" type="text" name="title" value="{{ $page->title }}"></th>
                </tr>
                <tr>
                    <th>Description</th>
                    <th>

                        <input class="form-control" type="text" name="description" value="{{ $page->description }}">
                    </th>
                    </th>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <th>
                        <input class="form-control" type="text" name="keywords" value="{{ $page->keywords }}">
                    </th>
                    </th>
                </tr>
                <tr>
                    <th>Content</th>
                    <th>
                        <textarea class="form-control ckeditor" name="content" id="" cols="30" rows="10">{{ $page->content }}</textarea>
                    </th>
                    </th>
                </tr>
                <tr>
                    <th>Image</th>
                    <th>
                        <input class="form-control" type="file" name="image">
                    </th>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th><button type="submit" class="btn btn-primary">Save Page</button></th>
                </tr>

            </table>
        </form>

    </div>
</div>
@endsection
