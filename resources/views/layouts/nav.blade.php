<nav class="navbar nav-dark bg-dark">
    <div class="container-fluid">
        <a class="text-white navbar-brand" href="{{ url('/home') }}">{{ config('app.name', 'Stomadmin') }}</a>
        <div class="float-right justify-content-end">
            @if (Route::has('login'))
                @auth
                <li class="dropdown">
                    <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/home') }}" class="text-dark">Home</a></li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a href="{{ route('logout') }}" class="text-dark"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <a href="{{ route('login') }}" class="text-white">Login</a> |
                <a href="{{ route('register') }}" class="text-white">Register</a>
                @endauth
            @endif
        </div>
    </div>
</nav>
