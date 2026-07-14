<x-app-layout>

    <div class="max-w-5xl mx-auto">
       
        <h1 class="font-bold text-xl text-center my-5">投稿一覧</h1>
        <table class="w-full mx-auto">
            <tr class="flex w-full">
                <th class="w-1/3 text-xs text-center">タイトル</th>
                <th class="w-1/2 text-xs text-center">内容</th>
                <th class="w-1/6 text-xs text-center">ID</th>
                <th class="w-1/6 text-xs text-center">投稿編集・削除</th>
            </tr>
             @foreach ($posts as $post)
            <tr class=" flex w-full border border-gray-500 border-collapse">
                <td class="border-r border-gray-500 bg-white w-1/3 text-center py-3">
                {{ $post->title }}
                   </td>
                   <td class="border-r border-gray-500 bg-white w-1/2 text-center py-3">
                  {{ $post->content }}
                    </td>
                    <td class="border-r border-gray-500 bg-white w-1/6 text-center py-3">{{ $post->id }}
                    </td>
                    <td class="border-r border-gray-500 bg-white w-1/6 text-center py-3">
                        <a href="{{ route('posts.edit',$post) }}">編集</a>
                        <form action="{{ route('posts.destroy',$post) }}" method="POST" nsubmit="return confirm('本当に削除しますか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">削除</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
        </table>
        <div class="p-5">
        {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>