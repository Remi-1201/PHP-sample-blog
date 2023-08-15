<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>

    <body>
        <h1>{{ $blog->title }}</h1>
        @if (session('notice'))
            <div>
                {{ session('notice') }}
            </div>
        @endif
        <p>
            <strong>Title:</strong>
            {{ $blog->title }}
        </p>

        <p>
            <strong>Content:</strong>
            {{ $blog->content }}
        </p>
        <p> 
            <a href="{{ route('blogs.index') }}">Back</a> |
            <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
        </p>
    </body>
</html>