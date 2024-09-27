<div class="mt-4">
    <h2>Comments:</h2>
    @foreach ($tweet->comments as $comment)
        <div class="comment">
            <p>{{ $comment->comment }}</p>
            <p>Posted by: {{ $comment->user->name }}</p>
            <p>Likes: {{ $comment->likes_count }}</p> <!-- いいね数の表示 -->
        </div>
    @endforeach
</div>
