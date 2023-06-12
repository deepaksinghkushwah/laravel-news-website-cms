<div class="widget category">
    <!-- Widget Header -->
    <h5 class="widget-header">Categories</h5>
    <ul class="category-list m-0 p-0">
        @foreach ($categories as $row)
        <li><a href="{{ route('category.index',['cat_id' => $row->id])}}">{{ $row->title }} <span class="float-right">({{ count($row->pages) }})</span></a></li>
        @endforeach
    </ul>
</div>
