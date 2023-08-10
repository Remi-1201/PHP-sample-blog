<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>

    <body>
        <h1>{{ $blog->title }}</h1>
        <p>
            <strong>Title:</strong>
            {{ $blog->title }}
        </p>

        <p>
            <strong>Content:</strong>
            {{ $blog->content }}
        </p>
        <p> 
            <a href="/blogs">Back</a> | 
            <a href="{{ url("/blogs/$blog->id/edit") }}">Edit</a>
        </p>
    </body>
</html>