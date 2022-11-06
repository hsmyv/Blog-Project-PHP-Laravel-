@props(['comment'])
<div class="display-comment">
    <a href="" id="reply"></a>
    <form method="post" action="{{route("reply.add")}}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $comment->post->id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            <input type="hidden" name="commentable_user" value="{{ $comment->author->name }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
</div>


