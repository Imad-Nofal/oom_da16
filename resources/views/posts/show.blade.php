<html>
<head>
    <title>Post Details</title>
</head>
<body>
    @if(isset($post))
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <p>Created At: {{ $post->created_at->diffForHumans() }}</p>
    @else
        <p>Post not found.</p>
    @endif
</body>
</html>