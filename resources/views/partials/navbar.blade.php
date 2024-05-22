<nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">Logo.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('submission/index') ? 'active' : '' }}"
                            href="{{ route('submission.index') }}">Our Submission</a>
                    </li>
                @endauth
            </ul>
            @guest
                <a href="{{ route('login') }}" class="btn btn-dark btn-sm mx-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-dark btn-sm mx-2">Registration</a>
            @endguest
            @auth
                <li class="nav-item dropdown list-unstyled ">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li>
                                <button class="dropdown-item">Logout</button>
                            </li>
                        </form>
                    </ul>
                </li>
            @endauth

        </div>
    </div>
</nav>
