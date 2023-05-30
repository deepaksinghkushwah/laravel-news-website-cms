<div class="widget latest-post">
    <h5 class="widget-header">Latest Post</h5>
    <!-- Post -->
    @foreach ($news as $row )
    <div class="media">
        <img src="{{ asset('/images/'.$row->image) }}" class="img-fluid" style="width: 100%; max-width: 100px" alt="post-thumb">
        <div class="media-body">
            <h6><a href="{{ route('page.index', $row->id) }}"> {{ $row->title}} </a></h6>
            <p href="#"><span class="fa fa-calendar"></span>{{ date('d M Y', strtotime($row->created_at)) }}</p>
        </div>
    </div>
    @endforeach

    <!-- Post -->

</div>
