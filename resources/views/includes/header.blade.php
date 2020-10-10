<header>
    <!-- Header Start -->
    <div class="header-area header-transparent header-color" style="background: #3B74FF;">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{url('home')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            @guest
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="categori.html">Categories</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="{{url('contact')}}">contact</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                                @if (Route::has('register'))
                                                   <li><a href="{{url('login')}}">Log in</a></li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Browse Jobs by
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item text-primary" href="{{route('browse.jobs.cats')}}">Category</a>
                                                        <a class="dropdown-item text-primary" href="{{route('browse.jobs.cities')}}">City</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-primary" href="{{route('browse.jobs.jobtitle', Auth::user()->job_title)}}">your job title</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a  class="dropdown-item text-primary" href="{{ route('profile', Auth::user()->id) }}"
                                                        >
                                                            {{ __('profile') }}
                                                        </a>

                                                        <a  class="dropdown-item text-primary" href="{{ route('saved.jobs', Auth::user()->id) }}"
                                                        >
                                                            {{ __('saved jobs') }}
                                                        </a>
                                                        <a  class="dropdown-item text-primary" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>



                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>

                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-65">
                                    <a href="{{url('job/create')}}" class="border-btn">Post a Job</a>
                                </div>
                                @endguest
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<!-- header end -->