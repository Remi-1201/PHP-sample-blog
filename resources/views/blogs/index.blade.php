<x-layout>
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
            <x-blogTableRaw :blog="$blog"></x-blogTableRaw>
        @endforeach
    </table>
    <br>
    <a href="{{ route('blogs.create') }}">New Blog</a>
</x-layout>