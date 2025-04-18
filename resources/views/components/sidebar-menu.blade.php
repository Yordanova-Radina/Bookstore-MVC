<div class="list-group">
    @foreach ($posts as $post)
    <a href="{{ route('post.show', $post->id) }}" class="listgroup-item">
        {{ $post->title }}
    </a>
    @endforeach
</div>