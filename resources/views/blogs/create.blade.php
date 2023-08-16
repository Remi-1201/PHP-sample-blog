<x-layout>

    <h1>New Blog</h1>

    {{-- formの送信先をblogsと指定し、データの送信方法としてpostを定義 --}}
    <form action="{{ route('blogs.store') }}" method="post">        
        {{-- CSRF対策を行うためのトークンを発行するために必要なコード --}}
        @csrf
        <p><label>Title:<input type="text" name="title" size="30"/></label></p>

        <p><label>Content:<textarea name="content" cols="32" rows="8"></textarea></label></p>

        <input type="submit" value="Create Blog">
    </form>

    {{-- blogsを指定して、一覧画面に戻るためのリンクを記述 --}}
    <p><a href="{{ route('blogs.index') }}">Back</a></p>

</x-layout>
