<div>
    {{ $name }} {{ $post->user->name }}
    : {{ $post->body }}
    : {{\Carbon\Carbon::parse($post->created_at)->diffForHumans(null, true).' ago'}}
    : with {{ $post->likes }} {{ $post->likes > 1 ? 'likes' : 'like' }}
</div>
