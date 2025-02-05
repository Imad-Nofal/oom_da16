<html>
<head><title>Post Details</title></head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p>Created At: {{ $post->created_at->diffForHumans() }}</p>

    @auth
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    @endauth

    <a href="{{ route('posts.index') }}">Back to Posts</a>
</body>
</html>
