<div>
    <div class=" mx-auto col-md-7 py-4">

        @if($custom_error)

            <div  class="error_message row justify-content-between" >
                <div>{{ $custom_error }}</div> <span  class="ml-1 exit" wire:click="clearError" >Ok</span>
            </div>

        @endif

        <form wire:submit.prevent="update" >
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
                <textarea class="form-control @error('text') is-invalid @enderror" id="text" wire:model="text" cols="30" rows="3">
                </textarea>
                @error('text')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="w-50" >
                <img class="w-100" src="{{ asset('/storage') }}/{{ $image->name }}" alt="">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('img_tmp') is-invalid @enderror" id="image" wire:model="img_tmp" >
                </input>
                @error('img_tmp')
                <div class="invalid-feedback" >
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn btn-primary">Edit</button>
        </form>
    </div>

    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Text</th>
        </tr>
        @foreach($news->comments as $coment)
            <tr><td>{{ $coment->id }}</td><td>{{ $coment->title }}</td><td>{{ $coment->text }}</td></tr>
        @endforeach
    </table>

</div>


