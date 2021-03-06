
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-lg-around ">
    <!-- Brand -->
    <a class="navbar-brand" href="{{route('teleconsult.index')}}"><img src="{{ URL::to('/images/ghs_logo.png') }}" height="40">  Teleconsult</a>

{{--    links--}}
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{route('covid.index')}}" class="nav-link" >COVID Teleconsult</a>
        </li>
        @if(auth()->user()->role === "admin")
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register User</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('users')}}">All User(s)</a>
            </li>
        @endif
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endguest
        @auth()
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-capitalize" href="#" id="navbardrop" data-toggle="dropdown">
                {{ auth()->user()->name}}
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('password.change')}}">Change Password</a>

                <form action="{{ route('logout')}}" method="post" class="dropdown-item">
                    @csrf
                    <button type="submit" style="background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;">Log out</button>
                </form>

            </div>
        </li>
        @endauth
    </ul>
</nav>
{{--<nav class="navbar navbar-light bg-light justify-content-between">--}}
{{--    <a class="navbar-brand" href="{{route('index')}}">Teleconsult</a>--}}
{{--    <ul class="navbar-nav mr-auto">--}}
{{--        <li class="nav-item active">--}}
{{--            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#">Features</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#">Pricing</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}
