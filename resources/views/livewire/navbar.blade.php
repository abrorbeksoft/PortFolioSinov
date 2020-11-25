<div class="container">
    <div class="row mt-2 badge-dark text-white">
        <div class="col-md-3">
            <a class="navbar-logo" href="#">Logo</a>
        </div>
        <div class="col-md-9 ">
            <div class="row justify-content-end">
                @guest
                    <div class="list-item"><a class="list-link" href="{{ route('login') }}">Login</a></div>
                    <div class="list-item"><a class="list-link" href="{{ route('register') }}">Register</a></div>
                    <div class="list-item"><a class="list-link" href="{{ url('/news') }}">News</a></div>

                @endguest

                @auth
                    <div class="list-item"><a class="list-link" href="{{ url('/news') }}">News</a></div>
                    <div class="list-item"><a class="list-link" href="{{ url('/myposts') }}">My posts</a></div>
                    <div class="list-item"><a class="list-link" href="{{ url('/profile') }}">Profile</a></div>
                    <div class="list-item"><div class="list-link" wire:click="logout" >Logout</div></div>
                @endauth
            </div>
        </div>
    </div>
</div>
