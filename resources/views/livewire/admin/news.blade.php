<div>
    @if($items==="active")
    <table class="table table-hover">
        <tr><th>#</th><th>News title</th><th>News text</th><th>News owner</th><th>Coments</th><th>Control</th></tr>
        @foreach($news as $n)
            <tr >
                <td>{{ $n->id }}</td><td>{{ $n->title }}</td>
                <td>{{ $n->text }}</td><td>{{ $n->user->name }}</td>
                <td>{{ $n->comments->count() }}</td>
                <td>
                    <div class="btn-group">
                        <button wire:click="update({{ $n->id }})" class="btn btn-sm btn-primary">Update</button>
                        <button wire:click="delete({{ $n->id }})" class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $news->links() }}
    @endif


    @if($update==='active')
        <livewire:admin.update :news="$item" >
    @endif
</div>
