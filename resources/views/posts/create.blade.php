<x-app-layout>
     <div class="max-w-2xl mx-auto">
        <h1 class="font-bold text-lg my-5 text-center">投稿作成画面</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="">
                <div class="w-full mx-auto flex justify-center mb-5 items-center">
                    <label class="w-1/6" for="title">タイトル</label>
                    <input class="w-2/3" type="text" name="title">
                </div>
                <div class="w-full mx-auto flex justify-center items-center">
                    <label class="w-1/6" for="content">内容</label>
                    <textarea class="w-2/3 h-60" name="content" id=""></textarea>
                </div>
            </div>
            <div class="block text-center">
            <button class="px-5 py-2 rounded mt-5 text-white   bg-blue-400" type="submit">投稿する</button>
            </div>
        </form>
    </div>
</x-app-layout>