@extends("layouts.main")
@section("title", $page->title);
@section("content")
<div class="block">
    <article class="blog-post single">
        <div class="post-thumb">
            <img src="{{ asset('/images/'.$page->image) }}" alt="post-image" class="img-fluid">
        </div>
        <div class="post-content">
            <div class="date">
                <h4>{{ date('d',strtotime($page->created_at)) }}<span>{{ date('M',strtotime($page->created_at)) }}</span></h4>
            </div>
            <div class="post-title">
                <h3>{{ $page->title }}</h3>
            </div>
            <div class="post-meta">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <i class="fa fa-user-o"></i>
                        <a href="#">Admin</a>
                    </li>
                    <li class="list-inline-item">
                        <i class="fa fa-heart-o"></i>
                        <a href="#">350</a>
                    </li>
                    <li class="list-inline-item">
                        <i class="fa fa-comments-o"></i>
                        <a href="#">30</a>
                    </li>
                </ul>
            </div>
            <div class="post-details">
                {!! $page->content !!}
                <div class="share-block">
                    <div class="tag">
                        <p>
                            Tags:
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Event,</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Conference,</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Business</a>
                            </li>
                        </ul>
                    </div>
                    <div class="share">
                        <p>
                            Share:
                        </p>
                        <ul class="social-links-share list-inline">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('page.comment-list',['comments' => $page->comments])
        @auth
        @include('page.comment-form',['pageID' => $page->id])
        @endauth

    </article>

</div>
@endsection
