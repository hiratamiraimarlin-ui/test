<x-app-layout>
    <h1>投稿作成画面</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label for="title">タイトル</label>
        <input type="text" name="title">

        <label for="content">内容</label>
        <textarea name="content" id=""></textarea>

        <button type="submit">投稿する</button>
    </form>
</x-app-layout>