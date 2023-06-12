<form method="get" action="{{ route('category.index') }}" id="searchForm">
  @csrf
  <div class="widget search p-0">
    <div class="input-group">
      <input type="text" name="term" class="form-control main m-0" id="expire" placeholder="Search...">
      <span onclick="$('#searchForm').submit();" class="input-group-addon"><i class="fa fa-search"></i></span>
    </div>
  </div>
</form>
