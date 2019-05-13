<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{URL::asset('/dashboard')}}">ArcadiaHub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <form class="form-inline mr-auto ">
                <input class="form-control mr-auto" style="padding-right:200px;margin-left:100px;" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" style="padding:9px;padding-left:15px;padding-right:15px;" type="submit">Search</button>
            </form>

        </ul>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    {{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>

            @endif
            @else

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="nav-link js-scroll-trigger" href="{{URL::asset('/posts')}}"><i class="fa fa-address-book" aria-hidden="true"></i> Profile</a>
                    <a class="nav-link js-scroll-trigger" href="{{URL::asset('/StartupContacts')}}"><i class="fa fa-envelope" aria-hidden="true"></i> Contacts</a>
                    <a class="nav-link js-scroll-trigger" href="{{URL::asset('/StartupSettings')}}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" aria-hidden="true"></i>

                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>


            </li>
            @endguest

        </ul>


    </div>
</nav>

