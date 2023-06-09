@extends('adminpanel::layouts.master')

@section('content')
<div class="card">
    <div class="card-heading">
        <h1>Create Page</h1>
    </div>
    <div class="card-body">

        <form action="{{ url('/adminpanel/pages') }}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <tr>
                    <td>Category</td>
                    <th>
                        <select class="form-control" name="cat_id">
                               @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                               @endforeach
                        </select>
                    </th>
                </tr>
                <tr>
                    <td>Tags</td>
                    <td>
                        <div class="row">
                            @foreach ($tags as $item)
                            <div class="col-sm-2">
                                <input type="checkbox" name="tags[]" id="tags" value="{{ $item->id }}"> {{ $item->title }}
                            </div>

                            @endforeach
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <th><input class="form-control" type="text" name="title" value=""></th>
                </tr>
                <tr>
                    <th>Description</th>
                    <th>

                        <input class="form-control" type="text" name="description" value="">
                    </th>
                    </th>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <th>
                        <input class="form-control" type="text" name="keywords" value="">
                    </th>
                    </th>
                </tr>
                <tr>
                    <th>Content</th>
                    <th>
                        <textarea class="form-control ckeditor" name="content" id="" cols="30" rows="10"></textarea>
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
                    <th><button type="submit" class="btn btn-primary">Craete Page</button></th>
                </tr>

            </table>
        </form>

    </div>
</div>
@endsection
