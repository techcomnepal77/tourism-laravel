
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-end">
            <div class="container">
                <a class="navbar-brand logo" href="{{ route('root') }}">Sailour</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-end" id=" navbarNav">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item active px-10 mb-sm-0_5">
                            <a class="nav-link py-0" href="#">About</a>
                        </li>
                        <li class="nav-item px-10 mb-sm-0_5">
                            <a class="nav-link py-0" href="#">Features</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav w-100 d-flex justify-content-end">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item px-0_4 mb-sm-0_5">
                            <a class="nav-link btn-outline-primary" href="{{route('login')}}">Sign In</a>
                        </li>
                        <li class="nav-item px-0_4">
                            <a class="nav-link btn-outline-primary" href="{{ route('register') }}">Sign Up</a>
                        </li>
                        
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @can('manage-users')
                                    <a class="dropdown-item" href="{{route('admin.users.index')}}">
                                        User Management
                                    </a>
                                    <a class="dropdown-item" href="{{route('tripdetail.index')}}">
                                        trip detail
                                    </a>
                                    @endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>