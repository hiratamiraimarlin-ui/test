<x-app-layout>
    <div class="max-w-2xl mx-auto">
<h1 class="mt-5 bg-blue-200 text-center rounded py-2 ">投稿編集</h1>

<form action="{{ route('posts.update',$post->id) }}" method="POST">

@csrf
@method('PUT')

<div class="flex mt-5 w-full justify-center">
    <label class="w-1/5" for="title">タイトル</label>
    <input class="w-2/3" type="text" name="title" value="{{ $post->title }}">
</div>
<div class="flex mt-5 w-full justify-center">
<label class="w-1/5" for="content">内容</label>
<textarea class="w-2/3 h-40" type="text" name="content" value="{{ $post->content }}">
</textarea>

</div>
<div class="mt-5 w-1/2 mx-auto flex justify-end pb-10">
<button class="mx-auto px-3 py-2 bg-blue-500 text-white font-bold text-sm rounded" type="submit">更新する</button>
</div>
</form>

</div>
</x-app-layout>