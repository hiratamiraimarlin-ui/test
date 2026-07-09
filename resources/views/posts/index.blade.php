<x-app-layout>

    <div class="max-full mx-auto">
        @foreach ($posts as $post)
        <h1>投稿一覧</h1>
        <table class="w-full mx-auto">
            <tr class="flex w-full">
                <th class="w-1/6 text-xs text-center">タイトル</th>
                <th class="w-1/5 text-xs">内容</th>
                <th class="w-1/4 text-xs">ID</th>
            </tr>
            <tr class=" flex w-full border border-gray-500 border-collapse">
                <td class="border-r border-gray-500 bg-white w-1/5 text-center">
                   <div class="border-b border-gray-500 text-xs text-left content-center h-1/5 pl-2">{{ $post->title }}</div>
                   </td>
                   <td class="border-r border-gray-500 bg-white w-1/5 text-center">
                  {{ $post->content }}
                    </td>
                    <td class="border-r border-gray-500 bg-white w-1/5 text-center">
                    </td>
                    </tr>
        </table>
        @endforeach
    </div>
</x-app-layout>