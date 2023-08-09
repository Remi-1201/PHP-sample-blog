<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>
    
    <body>
    <h1>Blogs</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td> 
            <td>{{ $blog->content }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    </body>
</html>