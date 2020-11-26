<div>
    <div class=" mx-auto col-md-7 py-4">

        @if($custom_error)

            <div  class="error_message row justify-content-between" >
                <div>{{ $custom_error }}</div> <span  class="ml-1 exit" wire:click="clearError" >Ok</span>
            </div>

        @endif

        <form wire:submit.prevent="save" >
            <div class="form-group">
                <label for="title">Title</label>
                <input placeholder="Name" id="title" wire:model="title"  type="text" class=" @error('title') is-invalid @enderror form-control">
                @error('title')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea class="form-control @error('text') is-invalid @enderror" id="" wire:model="text" cols="30" rows="3">
                </textarea>
                @error('text')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="img">Img</label>
                <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" wire:model="img" >
                </input>
                @error('img')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn btn-primary">save</button>
        </form>
    </div>

</div>


