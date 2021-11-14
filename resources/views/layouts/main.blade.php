<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>БЛОГ</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/js/loader.js') }} "></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-2">
            <li class="nav-link">
                <a class="navbar-brand" href="{{ route('main.index') }}"><i class="fas fa-home p-2"></i>На главную</a>
            </li>

            <li class="nav-link d-flex">
                @auth()
                    <a class="navbar-brand" href="{{ route('personal.main.index') }}"><i class="fas fa-user-shield p-2"></i>Личный кабинет</a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input class="btn btn-outline-primary" type="submit" value="Выйти">
                    </form>
                @endauth

                @guest()
                        <a class="navbar-brand" href="{{ route('personal.main.index') }}">Войти</a>
                    @endguest
            </li>

            </ul>
        </nav>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
    </div>
</header>

@yield('content')


<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <p class="mb-0">© Блог 2021. Чадаев & Юрташкина.</p>
        </div>


</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
