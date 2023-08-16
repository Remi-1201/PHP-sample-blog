<tr>
    <td>{{ $blog->title }}</td>
    <td>{{ $blog->content }}</td>
    <td><a href="{{ route('blogs.show', $blog) }}">Detail</a></td>
    <td><a href="{{ route('blogs.edit', $blog) }}">Edit</a></td>
    <td><a href="{{ route('blogs.delete', $blog) }}">Delete</a></td>
</tr>