<form wire:submit.prevent="update">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    Author_id: <input wire:model="post.author_id" type="text">
    @error('post.title')<p class="text-red-500 text-xs">{{ $message }}</p>@enderror
    Title: <input wire:model="post.title" type="text">
    Content: <input wire:model="post.content" type="text">

    <button>Save</button>
</form>
