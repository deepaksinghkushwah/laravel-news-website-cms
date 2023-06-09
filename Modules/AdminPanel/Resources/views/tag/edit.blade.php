@extends('adminpanel::layouts.master')

@section('content')
<div class="card">
    <div class="card-heading">
        <h1>Update: {{ $item->title }}</h1>
    </div>
    <div class="card-body">

        <form action="{{ route('admin.tag.edit', $item->id) }}" method="post">
            @csrf
            @method("patch")
            @include("adminpanel::layouts.form-errors")
            <table class="table">

                <tr>
                    <th><input class="form-control" type="text" name="title" value="{{ $item->title }}"></th>
                </tr>

                <tr>
                    <th><input class="form-control" type="text" name="alias" value="{{ $item->alias }}"></th>
                </tr>

                <tr>
                    <th><button type="submit" class="btn btn-primary">Save </button></th>
                </tr>

            </table>
        </form>

    </div>
</div>
@endsection
