<nav class="navbar nav-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/home') }}">Stomadmin</a>
    <div class="float-right justify-content-end">
        @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a> |
                    <a href="{{ route('register') }}">Register</a>
                @endauth
        @endif
        <!-- <a class="nav-link active" href="#">/a/</a> -->
        <!-- <a class="nav-link active" href="#">/b/</a> -->
        <!-- <a class="nav-link active" href="#">/c/</a> -->
    </div>
</nav>
