<header class="header-fourth wow fadeInDown">

        <!-- Main Navigation Start -->
        <nav class="header-fullpage navbar navbar-expand-lg">
            <div class="container">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand rounded-bottom light-bg" href="index.html">
                        <img src="{{ asset('assets/images/logo_3.png')}}" alt="">
                    </a>
                </div>
                <!-- Topbar Request Quote Start -->
                <div class="d-inline-flex request-btn order-lg-last">
                    <!-- Toggle Button Start -->
                    <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Button End -->
                </div>
                <!-- Topbar Request Quote End -->

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li  class="{{ Request::is('/') ? 'current' : '' }} nav-item ">
                            <a class="nav-link" href="{{url('/')}}"  aria-expanded="false">Home</a>
                        </li>
                        <li class="{{ Request::is('about-us') ? 'current' : '' }}  nav-item">
                            <a class="nav-link" href="{{url('about-us')}}" aria-expanded="false">About Us </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">Operations <i
                                class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="project-grid.html">Projects Grid</a></li>
                                <li><a class="dropdown-item" href="project-masonary.html">Projects Masonary</a></li>
                                <li><a class="dropdown-item" href="project-single.html">Projects Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">Sustainability <i
                                class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                                <li><a class="dropdown-item" href="blog-standard.html">Blog Standard</a></li>
                                <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#"  aria-expanded="false">Contact Us</a>
                        </li>

                    </ul>
                    <!-- Main Navigation End -->
                </div>
            </div>
        </nav>
        <!-- Main Navigation End -->
    </header>
