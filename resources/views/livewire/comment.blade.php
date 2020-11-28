



<form class="mt-1" wire:submit.prevent="commit" >
    <div class="form-group">
        <textarea  class=" @error('comment') is-invalid @enderror form-control" wire:model="comment" id=""  rows="2"></textarea>
        @error('comment')
        <div class="invalid-feedback" >
            {{ $message }}
        </div>
        @enderror
        <button class="btn btn-sm btn-primary mt-1">Comment</button>
    </div>
</form>
