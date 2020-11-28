<div class="col-md-7 mx-auto" >
    <form  wire:submit.prevent="save">
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" wire:model="title" type="text" class="@error('title') is-invalid @enderror form-control">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea id="text" wire:model="text" type=" text" class="@error('text') is-invalid @enderror form-control" rows="3"></textarea>
            @error('text')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input id="image" wire:model="image" type="file" class="@error('image') is-invalid @enderror form-control">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</div>
