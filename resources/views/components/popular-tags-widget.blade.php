<h5 class="widget-header">Popular Tags</h5>
<ul class="list-inline">
  @foreach ($tags as $row)
    <li class="list-inline-item"><a href="{{ route('category.index', ['tag_id' => $row->id]) }}">{{ $row->title }}</a>
    </li>
  @endforeach
</ul>
