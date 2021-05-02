<div>
    <div class="flex {{ $post->id === $countPosts ? 'bg-green-200' : 'bg-info-200' }} p-4">
        <div class="mr-4">
            <div class="h-10 w-10 flex justify-center items-center">
                @if($post->user->image_confirmation)
                    <img class="w-10 h-10 rounded-full mr-4" src="{{url('/imgs/'.$post->user->image_confirmation)}}" alt="Avatar of Writer">
                @else
                    <img class="w-10 h-10 rounded-full mr-4" src="instaLogo.png" alt="Avatar of Writer">
                @endif
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
                <span>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans(null, true).' ago'}}</span> |
                <span style="color: #ff11a0"><a>{{ $post->likes }} {{ $post->likes > 1 ? 'likes' : 'like' }}</span></a>
            </div>
        </div>
    </div>
</div>
