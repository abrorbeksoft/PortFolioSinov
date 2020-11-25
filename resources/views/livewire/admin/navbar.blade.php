<div class="container">
    <div class="row mt-2 badge-dark text-white">
        <div class="col-md-3">
            <a class="navbar-logo" href="#">Logo</a>
        </div>
        <div class="col-md-9 ">
            <div class="row justify-content-end">

                @auth
                    <div class="list-item"><a class="list-link" href="{{ url('/admin/news') }}">News</a></div>
                    <div class="list-item"><a class="list-link" href="{{ url('/admin/profile') }}">Profile</a></div>
                    <div class="list-item"><div class="list-link" wire:click="logout" >Logout</div></div>
                @endauth
            </div>
        </div>
    </div>
</div>
