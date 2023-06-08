<div class="comments">
  <h5>Comments ({{ count($comments) }})</h5>
  @foreach ($comments as $comment)
    <!-- Comment -->
    <div class="media comment">
      <div class="media-body">
        <h6>{{ $comment->user->name }}</h6>
        <ul class="list-inline">
          <li class="list-inline-item"><span
              class="fa fa-calendar"></span>{{ date('d M Y H:i', strtotime($comment->created_at)) }}</li>
        </ul>
        <p>
          {!! $comment->content !!}
        </p>
      </div>
    </div>
  @endforeach
</div>
