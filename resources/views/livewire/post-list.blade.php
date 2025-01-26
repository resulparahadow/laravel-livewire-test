<div>
    <div class="">
        <div class="">
            <div class="mt-20 text-3xl font-bold">Posts</div>
            <a class="text-xl text-blue-500 decoration-solid" href="{{ route('posts.create') }}">Back</a>
            <div class="mt-8 grid grid-cols-2 gap-3 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <div wire:key="{{ $post->id }}" class="flex flex-col rounded border border-gray-200 p-2">
                        <div class="text-xl font-bold"><span class="text-base font-bold">Content:</span>
                            {{ $post->content }}</div>
                        <div><span class="text-base font-bold">Schedule Time:</span>{{ $post->schedule_time }}</div>
                        <div><span class="text-base font-bold">Account Id:</span>{{ $post->account_id }}</div>
                        <div class="break-words"><span class="text-base font-bold">File Path:</span>
                            <span class="text-blue-400">{{ $post->file }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{ $posts->links() }}
    </div>
</div>
