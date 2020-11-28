<div>
    @if($newsPanel=='active')
    @foreach($news as $n=>$value)
        <div class="col-md-9 mx-auto">
            <div class="card mb-3">
                <img style="height: 300px" class="card-img-top" src="{{ asset('/storage') }}/{{ $value->image->name }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $value->title }}
                    </h5>
                    <div class="card-text">
                        {{ \Illuminate\Support\Str::limit($value->text,150) }}
                    </div>
                    <div class="row m-0 justify-content-between">
                        <div class="btn-group mt-2">
                            <button wire:click="update({{ $value->id}})" class="btn btn-sm btn-primary">Update</button>
                            <button wire:click="delete({{ $value->id }})" class="btn btn-sm btn-danger">Delete</button>
                        </div>
                        <div>
                           {{ $value->comments->count() }} comments
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    {{ $news->links() }}
    @endif

    @if($updatePanel=="active")
        <div class="col-md-9 mx-auto">
            <form wire:submit.prevent="save">
                <div class="form-group">
                    <input wire:model="titleTemp"  type="text" class="form-control @error('titleTemp') is-invalid @enderror">
                    @error('titleTemp')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea wire:model="textTemp" cols="4" type="text" class="form-control @error('textTemp') is-invalid @enderror"></textarea>
                    @error('textTemp')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input wire:model="file" type="file" class="form-control @error('file') is-invalid @enderror">
                    @error('file')
                    <div class="invalid-feedback" >
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
        <table class="table-hover mt-3 table">
            <tr>
                <th>#</th>
                <th>title</th>
                <th>text</th>
            </tr>
            @foreach($unews->comments as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->text }}</td>
                </tr>
            @endforeach
        </table>

    @endif
</div>
