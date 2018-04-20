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
                        @if ( Auth::user()->isAdmin())
                            <li><a href="{{ url('/admin') }}" class="text-dark">Admin Panel</a></li>
                        @elseif ( Auth::user()->isSecretary())
                            <li><a href="{{ url('/secretary') }}" class="text-dark">Secretary Panel</a></li>
                        @elseif ( Auth::user()->isDoctor())
                            <li><a href="{{ url('/doctor') }}" class="text-dark">Doctor Panel</a></li>
                        @else
                            <li><a href="{{ url('/user') }}" class="text-dark">User Panel</a></li>
                        @endif
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
