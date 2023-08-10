<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>
    <body>
        <h1>Editing Blog</h1>
        <form action="{{ url("blogs/$blog->id") }}" method="post">
            @method('put')
            @csrf
            <p><label>Title:<input type="text" name="title" size="30" value="{{ $blog->title }}"/></label></p>
            
            <p><label>Content:<textarea name="content" cols="32" rows="8">{{ $blog->content }}</textarea></label></p>
            
            <input type="submit" value="Update">
        </form>
        <p>
            <a href="{{ url('/blogs', $blog->id) }}">Detail</a> | 
            <a href="/blogs">Back</a>
        </p>
    </body>
</html>