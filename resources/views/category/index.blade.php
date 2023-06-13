@extends('layouts.main')
@section("title","News")
@section("content")
<div class="row">
    @foreach ($pages as $row)
    <div class="col-md-6 col-sm-8 col-10 m-auto">
        <div class="blog-post">
            <div class="post-thumb">
                <a href="{{ route('page.index', $row->id)}}">
                    <img src="{{ asset('/images/'.$row->image) }}" alt="post-image" class="img-fluid">
                </a>
            </div>
            <div class="post-content">
                <div class="date">
                    <h4>{{ date('d', strtotime($row->created_at)) }}<span>{{ date('M', strtotime($row->created_at)) }}</span></h4>
                </div>
                <div class="post-title">
                    <h2><a href="{{ route('page.index', $row->id)}}"> {{$row->title}}  </a></h2>
                </div>
                <div class="post-meta">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-o"></i>
                            <a href="#">Admin</a>
                        </li>

                        <li class="list-inline-item">
                            <i class="fa fa-comments-o"></i>
                            <a href="#">{{ count($row->comments) }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach


</div>
<div class="row">
    <div class="col-12">
        {{ $pages->withQueryString()->links() }}
    </div>
</div>
@endsection
