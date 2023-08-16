<x-layout>    
    <x-blog :blog="$blog"></x-blog>
    
    <p> 
        <a href="{{ route('blogs.index') }}">Back</a> |
        <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
    </p>
</x-layout>