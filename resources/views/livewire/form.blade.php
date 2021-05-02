<div>
    <form method="post" class="mb-4" wire:submit.prevent="createPost">
        @csrf

        <div class="form-group">
            <textarea name="body" id="body" cols="30" rows="3" class="form-control @error('body') is-invalid @enderror" wire:model="body"></textarea>
            @error('body')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"  class="bg-gray-100 hover:bg-blue-dark font-bold py-2 px-4 rounded">
            Create
        </button>
    </form>
</div>
