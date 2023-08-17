<x-layout>

    <h1>New Blog</h1>

    <!-- @if (count($errors)>0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

    {{-- formの送信先をblogsと指定し、データの送信方法としてpostを定義 --}}
    <form action="{{ route('blogs.store') }}" method="post">        

        {{-- CSRF対策を行うためのトークンを発行するために必要なコード --}}
        @csrf

        @if ($errors->has('title'))
            <p>{{ $errors->first('title') }}</p>
        @endif

        <p><label>Title:<input type="text" name="title" size="30"/></label></p>

        @if ($errors->has('content'))
            <p>{{ $errors->first('content') }}</p>
        @endif

        <p><label>Content:<textarea name="content" cols="32" rows="8"></textarea></label></p>

        <input type="submit" value="Create Blog">
    </form>

    {{-- blogsを指定して、一覧画面に戻るためのリンクを記述 --}}
    <p><a href="{{ route('blogs.index') }}">Back</a></p>

</x-layout>
