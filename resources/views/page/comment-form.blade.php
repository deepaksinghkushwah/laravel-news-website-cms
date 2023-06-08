<div class="comment-form">
    <h5>Leave A Comment</h5>
    <form action="{{ route("page.store.comment") }}" class="row" method="post">
        @csrf
        <input type="hidden" name="page_id" value="{{ $pageID }}">
        <div class="col-12">
            <textarea class="form-control main" name="content" id="content" rows="10" placeholder="Your Review"></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-main-md" type="submit">Submit Now</button>
        </div>
    </form>
</div>
