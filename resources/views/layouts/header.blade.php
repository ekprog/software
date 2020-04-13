<header class="w-100 ">
    <div id="social-contacts" class="d-flex flex-row justify-content-around py-3 px-5 ">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <a href="facebook" class="px-2"><i class="fab fa-facebook-f"></i></a>
            <a href="twitter" class="px-2"><i class="fab fa-twitter"></i></a>
            <a href="googleplus" class="px-2"><i class="fab fa-google-plus-g"></i></a>
            <p class="my-0 mx-2"><span class="clock-icon mx-1"><i class="fa fa-clock-o"></i></span>Monday - Friday :
                10:00-17:00</p>
            <p class="my-0 mx-2"><span class="email-icon mx-1"><i class="fa fa-envelope"></i> </span>
                studysoon@gmail.com</p>
        </div>
        <div>
            <p class="my-0 mx-2"><span class="login-icon mx-1"><i class="fas fa-sign-in-alt"></i></span>
                @auth
                    You are logged in!
                @else
                    <a class="text-white" href="{{ route('login') }}">Log in </a>
                @endauth
            </p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around ">
        <a class="navbar-brand ml-5 h-100 my-0 py-0" href="#"><img class="h-100" src="{{asset('img/logo.png')}}" alt=""
                                                                   width="88" height="85"></a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mr-5" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto  mt-lg-0">
                <li class="nav-item {{\Request::route()->getName() == "home"?"active":""}}">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item {{\Request::route()->getName() == "services"?"active":""}}">
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item {{\Request::route()->getName() == "programs"?"active":""}}">
                    <a class="nav-link" href="{{route('programs')}}">Programs</a>
                </li>
                <li class="nav-item {{\Request::route()->getName() == "gallery"?"active":""}}">
                    <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                </li>
            </ul>

        </div>
    </nav>
</header>
