<div class=" mx-auto col-md-7 py-4">

    @if($custom_error)

        <div  class="error_message row justify-content-between" >
            <div>{{ $custom_error }}</div> <span  class="ml-1 exit" wire:click="clearError" >Ok</span>
        </div>

    @endif

    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="">Password</label>
            <input wire:model="password" type="password" class="@error('password') is-invalid @enderror form-control">
            @error('password')
            <div class="invalid-feedback" >
                {{ $message }}
            </div>
            @enderror
        </div> <div class="form-group">
            <label for="">Username</label>
            <input wire:model="login" type="text" class="@error('login') is-invalid @enderror form-control">
            @error('login')
            <div class="invalid-feedback" >
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary">Send</button>

    </form>
</div>
