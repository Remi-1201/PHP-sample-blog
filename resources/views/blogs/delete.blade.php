<x-layout>

    <h1>Delete Blog</h1>

    <x-blog :blog="$blog"></x-blog>

    <form action="{{ route('blogs.destroy', $blog) }}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete">
    </form>
    <p><a href="{{ route('blogs.index') }}">Back</a></p>

</x-layout>