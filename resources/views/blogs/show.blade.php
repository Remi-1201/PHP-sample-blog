<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>

    <body>
        <p>
            <strong>Title:</strong>
            {{ $blog['title'] }}
        </p>

        <p>
            <strong>Content:</strong>
            {{ $blog['content'] }}
        </p>
        <p><a href="/blogs">Back</a></p>
    </body>
</html>