<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog App</title>
    </head>
    
    <body>
    <h1>Blogs</h1>
    @if (session('notice'))
        <div>
            {{ session('notice') }}
        </div>
    @endif
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
                <td>{{ $blog['title'] }}</td>
                <td>{{ $blog['content'] }}</td>
                <td><a href="{{ route('blogs.show', $blog) }}">Detail</a></td> 
                <td><a href="{{ route('blogs.edit', $blog) }}">Edit</a></td>
                <td><a href="{{ route('blogs.delete', $blog) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="/blogs/create">New Blog</a>
    </body>
</html>