<main>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="{{URL::asset('/')}}">ArcadiaHub</a>
                    <div class="search-container">
                        <form action="Search.html">
                            <input type="text" placeholder="Search.." name="search">
                            <!--<button type="submit"><i class="fa fa-search"></i></button>-->
                        </form>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{URL::asset('/StartupDash')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{URL::asset('/posts')}}"><i class="fa fa-address-book" aria-hidden="true"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{URL::asset('/StartupContacts')}}"><i class="fa fa-envelope" aria-hidden="true"></i> Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{URL::asset('/StartupSettings')}}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navigation -->
        </main>