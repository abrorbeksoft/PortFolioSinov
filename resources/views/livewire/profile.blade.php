<div>
    <div class="w-50 mx-auto">
        <img class="w-100" src="{{ asset('/storage') }}/{{ $file->name }}" alt="">
    </div>
    <div class="col-md-8 mx-auto">
        <form wire:submit.prevent="update">
            <div class="form-group">
                <label for="name">Name</label>
                <input wire:model="name" type="text" id="name" class="@error('name') is-invalid @enderror form-control">
                @error('name')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input wire:model="surname" type="text" id="surname" class="@error('surname') is-invalid @enderror form-control">
                @error('surname')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input wire:model="login" type="text" id="login" class="form-control">
                @error('login')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input wire:model="password" type="password" id="password" class="@error('password') is-invalid @enderror form-control">
                @error('password')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input wire:model="img" type="file" id="img" class="@error('img') is-invalid @enderror form-control">
                @error('file')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary">Send</button>
        </form>
    </div>

</div>
