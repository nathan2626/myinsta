<div>
    <div class="flex {{ $post->id === $countPosts ? 'bg-green-200' : 'bg-info-200' }} p-4">
        <div class="mr-4">
            <div class="h-10 w-10 text-white bg-green-600 rounded-full flex justify-center items-center">
                <i class="material-icons">done</i>
            </div>
        </div>
        <div class="flex justify-between w-full">
            <div class="{{ $post->id === $countPosts ? 'text-green-600' : 'text-info-600' }}">
                <p class="mb-2 font-bold">
                    {{ $post->user->name }}
                </p>
                <p class="text-xs">
                    {{ $post->body }}
                </p>
            </div>
            <div class="text-sm text-gray-500">
                <span>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans(null, true).' ago'}}</span>
                <span>{{ $post->likes }} {{ $post->likes > 1 ? 'likes' : 'like' }}</span>
            </div>
        </div>
    </div>
</div>
