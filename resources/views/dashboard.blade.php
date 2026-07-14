<x-app-layout>

    <div class="max-full bg-white min-h-screen">
        <h1 class="text-center py-5 font-bold text-lg">なにをする？</h1>

        <div class="flex max-w-2xl mx-auto gap-5">
        <a class="w-1/2 text-center bg-blue-400 text-white px-5 py-2 rounded" href="{{ route('posts.index') }}">投稿一覧を見る</a>
        <a class="w-1/2 text-center  bg-blue-400 text-white px-5 py-2 rounded" href="{{ route('posts.create') }}">投稿する</a>
        </div>
    </div>
</x-app-layout>
