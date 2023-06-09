@extends('adminpanel::layouts.master')

@section('content')
<div class="card">
    <div class="card-heading">
        <h1>Create</h1>
    </div>
    @include('adminpanel::layouts.form-errors')
    <div class="card-body">

        <form action="{{ route('admin.tag.create') }}" method="post">
            @csrf
            <table class="table">

                <tr>
                    <th><input class="form-control" type="text" name="title"></th>
                </tr>
                <tr>
                    <th><input class="form-control" type="text" name="alias"></th>
                </tr>

                <tr>
                    <th><button type="submit" class="btn btn-primary">Save</button></th>
                </tr>

            </table>
        </form>

    </div>
</div>
@endsection
