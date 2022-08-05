        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Sahrul Gunawan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if (auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            @if (auth()->check())
                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            @else
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @endif
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->