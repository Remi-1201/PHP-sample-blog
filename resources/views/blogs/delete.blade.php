<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>
    <body>
        <h1>Delete Blog</h1>
        <p>
            <strong>Title:</strong>
            {{ $blog->title }}
        </p>

        <p>
            <strong>Content:</strong>
            {{ $blog->content }}
        </p>
        <form action="{{ route('blogs.destroy', $blog) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Delete">
        </form>
        <p><a href="{{ route('blogs.index') }}">Back</a></p>
    </body>
</html>