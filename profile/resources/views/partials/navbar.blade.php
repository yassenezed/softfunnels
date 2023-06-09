<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route('backadmin.dashboard')}}" class="navbar-brand mx-4">
                        <img src="{{asset('img/navbar/softpages.png')}}" alt="" class="src" style="
                        width: 180px;
                        height: auto;
                    "> 
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        {{-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> --}}
                        {{-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> --}}
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('backadmin.dashboard') }}" class="nav-item nav-link{{ request()->is('home') ? ' active' : '' }}">
                        <i class="fa fa-home" aria-hidden="true"></i> Home
                    </a>                    
                    <a href="{{ route('landingpageslist.index') }}" class="nav-item nav-link{{ request()->is('landingpages') ? ' active' : '' }}">
                        <i class="fa-regular fa-file-lines"></i> Mes Pages
                    </a>
                    <a href="{{route('commandes.show')}}" class="nav-item nav-link{{ request()->is('commandes') ? ' active' : '' }}"><i class="fa-brands fa-wpforms"></i>Formulaires</a>
                    @php
                        $role = auth()->user()->role;
                    @endphp

                        @if ($role === 'admin') 
                            <a href="{{ route('users.show') }}" class="nav-item nav-link{{ request()->is('utilisateurs') ? ' active' : '' }}">
                                <i class="fa-solid fa-users-viewfinder"></i>Utlisateurs
                            </a>
                        @endif
                    <a href="{{route('clients.show')}}" class="nav-item nav-link{{ request()->is('clients') ? ' active' : '' }}"><i class="fa fa-user"></i>Clients</a>
                    <a href="{{route('backadmin.dashboard')}}" class="nav-item nav-link"><i class="fa-solid fa-chart-simple"></i>Analytiques</a>
                    <a href="{{route('support.show')}}" class="nav-item nav-link{{ request()->is('support') ? ' active' : '' }}"><i class="fas fa-comments"></i>Support</a>
                    {{-- <a href="{{route('users.editpage')}}" class="nav-item nav-link"><i class="fa fa-cog" aria-hidden="true"></i>Parametres</a> --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i>Parametres</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{route('users.editpage')}}" class="dropdown-item">Modifier Mes Informations</a>
                                <a href="{{route('users.password')}}" class="dropdown-item">Modifier le Mot de passe</a>
                            </div>
                        </div>
                    </div>
            </nav>

        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                {{-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> --}}
                <div class="navbar-nav align-items-center ms-auto">
               
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">{{ auth()->user()->firstname }}</span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mon Profile</a>
                            <a href="{{route('users.editpage')}}" class="dropdown-item">Parametres</a>
                            <a href="{{route('logout.index')}}" class="dropdown-item">Se Déconnecter</a>
                        </div>
                    </div>
                </div>
            </nav>
<!-- Navbar End -->