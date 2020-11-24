<div class=" mx-auto col-md-7 py-4">

    @if($custom_error)

        <div  class="error_message row justify-content-between" >
            <div>{{ $custom_error }}</div> <span  class="ml-1 exit" wire:click="clearError" >Ok</span>
        </div>

    @endif

    <form wire:submit.prevent="save" >

        <div class="form-group">
            <input placeholder="Name" wire:model="name"  type="text" class=" @error('name') is-invalid @enderror form-control">
            @error('name')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input placeholder="Surname" wire:model="surname" type="text" class="@error('surname') is-invalid @enderror form-control">
            @error('surname')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input placeholder="Email" wire:model="email" type="email" class="@error('email') is-invalid @enderror form-control">
            @error('email')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input placeholder="Login" wire:model="login" type="text" class="@error('login') is-invalid @enderror form-control">
            @error('login')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input placeholder="Password" wire:model="password" type="password" class="@error('password') is-invalid @enderror form-control">
            @error('password')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Send</button>
    </form>
</div>
