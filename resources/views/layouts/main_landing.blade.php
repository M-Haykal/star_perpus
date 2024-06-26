<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StarLibrary</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/pplg.png') }}">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css">
    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top px-4 py-0">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="" data-toggle="tooltip" data-placement="top">
                <i class="bi bi-star"></i> StarLibrary
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#book">Book</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        @guest
                        <a href="#" class="nav-link text-white" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Sign In</span>
                        </a>
                        @else
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(auth()->user()->profile_picture)
                            <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Avatar Logo" style="width: 30px " class="rounded-pill" />
                            @else
                            <img src="https://i.pinimg.com/236x/ad/73/1c/ad731cd0da0641bb16090f25778ef0fd.jpg" alt="Avatar Logo" style="width: 30px" class="rounded-pill" />
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item text-black" href="{{ route('profil') }}">Profile</a></li>
                            @if(Route::currentRouteName() == 'online_book')
                                <li><a class="dropdown-item text-black" href="{{ route('dashboard_costumer') }}">Dashboard</a></li>
                            @else
                                <li><a class="dropdown-item text-black" href="{{ route('online_book') }}">Online Book</a></li>
                            @endif
                            <li>
                                <form id="logout-form" method="POST" action="{{ route('logout_user') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-black">
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>

                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    @yield('content')

    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright: StarLibrary
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
        <script src="../assets/lib/chart/chart.min.js"></script>
        <script src="../assets/lib/easing/easing.min.js"></script>
        <script src="../assets/lib/waypoints/waypoints.min.js"></script>
        <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
        <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="../assets/js/main.js"></script>
        <script>
            $(document).ready(function(){
                $('#logout-form button[type="submit"]').click(function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: 'Yakin ingin logout?',
                        text: "Anda akan keluar dari akun Anda.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, Logout',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#logout-form').submit();
                        }
                    });
                });
            });
        </script>
        @stack('scripts')
</body>
</html>
