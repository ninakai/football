<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> .is-invalid {
            color: red;
        } </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">*+:｡.｡ 𝔀𝓸𝓼𝓸 ⋆.ೃ࿔*:･</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/games" id="navbarDarkDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Games</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/games') }}">Games</a></li>
                            <li><a class="dropdown-item" href="{{ url('/game/create') }}">Add a game</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/teams') }}">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/players') }}">Players</a>
                    </li>

                </ul>
                @if(!Auth::user())
                    <form class="d-flex" method="post" action={{url('auth')}}>
                        @csrf
                        <input class="form-control me-2" type="text" placeholder="email" name="email" aria-label="Login"
                               value="{{ old('email') }}"/>
                        <input class="form-control me-2" type="password" placeholder="Password" name="password"
                               aria-label="Password"
                               value="{{ old('password') }}"/>
                        <button class="btn btn-outline-success" type="submit">Log in</button>
                    </form>
                @else
                    <ul class="navbar-nav">
                        <a class="nav-link active" href="#"><i class="fa fa-user"
                                                               style="font-size:20px;color:white;"></i>
                            <span> </span>{{ Auth::user()->name }}</a>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('logout')}}">Log out</a>
                    </ul>
                @endif

            </div>
        </div>

    </nav>
</header>

{{--    @if(!Auth::user())--}}
{{--    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">--}}
{{--        <h3>Регистрация</h3>--}}
{{--        <form method="post" action="{{ url('register') }}">--}}
{{--            @csrf--}}

{{--            <label>E-mail (имя пользователя)</label>--}}
{{--            <input type="text" name="email" value="{{ old('email') }}"/>--}}
{{--            @error('email')--}}
{{--            <div class="is-invalid">{{ $message }}</div>--}}
{{--            @enderror--}}
{{--            <br>--}}
{{--            <label>Пароль</label>--}}
{{--            <input type="password" name="password"/>--}}
{{--            @error('password')--}}
{{--            <div class="is-invalid">{{ $message }}</div>--}}
{{--            @enderror--}}
{{--            <br>--}}
{{--            <label>Подтвердите Пароль</label>--}}
{{--            <input type="password" name="password_confirmation"/>--}}
{{--            @error('password_confirmation')--}}
{{--            <div class="is-invalid">{{ $message }}</div>--}}
{{--            @enderror--}}
{{--            <br>--}}
{{--            <input type="submit" value="Зарегистрироваться">--}}
{{--        </form>--}}
{{--        @error('error')--}}
{{--        <div class="is-invalid">{{ $message }}</div>--}}
{{--        @enderror--}}
{{--    @endif--}}
{{--</div>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
