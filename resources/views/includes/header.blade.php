<header>
    <!-- Header Start -->
    <div class="header-area header-transparent header-color" style="background: #3B74FF;">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center" style="height:100px">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            @guest
                                            <li><a href="{{route('home')}}">{{__('messages.Home')}}</a></li>
                                                    <li><a href="#">{{__('messages.Languages')}}</a>
                                                    <ul class="submenu">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li>  
                                                            <a class="dropdown-item text-primary" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>

                                                      @endforeach
                                                    </ul>
                                                </li>


                                                <li><a href="{{route('browse.jobs.cats')}}">{{__('messages.Categories')}}</a></li>
                                            <li><a href="#">{{__('messages.Pages')}}</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('contact')}}">{{__('messages.contact')}}</a></li>
{{--                                                    <li><a href="blog.html">Blog</a></li>--}}
{{--                                                    <li><a href="blog_details.html">Blog Details</a></li>--}}
{{--                                                    <li><a href="elements.html">Element</a></li>--}}
                                                </ul>
                                            </li>
                                                @if (Route::has('register'))
                                                   <li><a href="{{url('login')}}">{{__('messages.Log in')}}</a></li>
                                                @endif
                                            @else
                          

                                                <li><a href="#">{{__('messages. Browse Jobs by')}}</a>
                                                    <ul class="submenu">
                                                        <li>     
                                                             <a class="dropdown-item text-primary" align="{{__('messages.align')}} == right ? pull-left : pull-right" href="{{route('browse.jobs.cats')}}">{{__('messages.Category')}}</a>
                                                        </li>
                                                       <li>  
                                                             <a class="dropdown-item text-primary" align="{{__('messages.align')}}" href="{{route('browse.jobs.cities')}}">{{__('messages.City')}}</a>
                                                       </li>
                                                       @if(!Auth::user()->job_title == null)
                                                          <li><a class="dropdown-item text-primary" href="{{route('browse.jobs.jobtitle', Auth::user()->job_title)}}">{{__('messages.your job title')}}</a></li>
                                                        @else
                                                            <li><a class="dropdown-item text-primary" href="{{ route('profile', Auth::user()->id) }}">{{__('messages.update your profile')}}</a></li>
                                                        @endif
                                                      
                                                    </ul>
                                                </li>

                                                <li><a href="{{route('home')}}">{{__('messages.Home')}}</a></li>
                                                <li><a href="#">{{__('messages.Languages')}}</a>
                                                <ul class="submenu">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>  
                                                        <a class="dropdown-item text-primary" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>

                                                  @endforeach
                                                </ul>
                                            </li>

                                            <li>
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre class="dropdown-item text-primary">
                                                {{ Auth::user()->name }}
                                                </a>
                                                <ul class="submenu">
                                                    <li> <a  class="dropdown-item text-primary" href="{{ route('profile.for.public', Auth::user()->id) }}"
                                                        >
                                                            {{ __('messages.profile') }}
                                                        </a>
                                                    <li> 
                                                        @if(Auth::user()->type == "Company")
                                                            <li> <a  class="dropdown-item text-primary" href="{{ route('my.jobs', Auth::user()->id) }}"
                                                                    >
                                                                        {{ __('messages.my jobs details') }}
                                                                    </a>
                                                            <li> 
                                                        @endif        

                                                    {{-- <li><a  class="dropdown-item text-primary" href="{{ route('my.jobs', Auth::user()->id) }}"
                                                            >
                                                                {{ __('messages.profile') }}
                                                        </a>
                                                    <li>  --}}
                                                   
                                                    <li> <a  class="dropdown-item text-primary" href="{{ route('profile', Auth::user()->id) }}"
                                                        >
                                                            {{ __('messages.Edit Profile') }}
                                                        </a>
                                                    <li>  <a  class="dropdown-item text-primary" href="{{ route('profile.update.image.get', Auth::user()->id) }}"
                                                        >
                                                            {{ __('messages.update image') }}
                                                        </a>
                                                    </li>
                                                    <li><a  class="dropdown-item text-primary" href="{{route('saved.jobs', Auth::user()->id)}}"
                                                        >
                                                            {{ __('messages.saved jobs') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a  class="dropdown-item text-primary" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                            {{ __('messages.Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>


                                                {{-- <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a  class="dropdown-item text-primary" href="{{ route('profile', Auth::user()->id) }}"
                                                        >
                                                            {{ __('messages.profile') }}
                                                        </a>

                                                        <a  class="dropdown-item text-primary" href="{{ route('profile.update.image.get', Auth::user()->id) }}"
                                                        >
                                                            {{ __('messages.update image') }}
                                                        </a>

                                                        <a  class="dropdown-item text-primary" href="{{route('saved.jobs', Auth::user()->id)}}"
                                                        >
                                                            {{ __('messages.saved jobs') }}
                                                        </a>
                                                        <a  class="dropdown-item text-primary" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('messages.Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li> --}}

                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                @if(Auth::user()->type == "Company")
                                    <div class="header-right-btn d-none d-lg-block ml-65">
                                        <a href="{{route('create.job')}}" class="border-btn">{{__('messages.Post a Job')}}</a>
                                    </div>

                               
                                  
                                @endif  
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