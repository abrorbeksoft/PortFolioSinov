<div>
@foreach($news as $n=>$value)
    <div class="col-md-9 mx-auto">
        <div class="card mb-3">
            <img style="height: 300px" class="card-img-top" src="{{ asset('/storage') }}/{{ $value->image->name }}" alt="">
            <div class="card-body">
                <div class="card-title">
                    {{ $value->title }}
                </div>
                <div class="card-text">
                    {{ $value->text }}
                </div>
                <div class="text-right" >
                    {{ $value->comments->count() }} <span class="ml-1" >comments</span>
                </div>
                @livewire('comment', ['news'=>$value] )
            </div>
        </div>
    </div>
@endforeach

{{ $news->links() }}
</div>
