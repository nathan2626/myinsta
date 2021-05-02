<div>

    @if(session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($posts as $post)
        <livewire:post :post="$post" :key="$post->id" />
    @endforeach
</div>
