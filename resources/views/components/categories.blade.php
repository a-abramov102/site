<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Animedia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">На главную</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('news.index')}}">Категории</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('queue.parse')}}" class="nav-link" aria-current="page">Добавить в очередь</a>
                    </li>
                    @if(Auth::check() && Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" tabindex="-1" aria-disabled="true" href="/admin">Админка</a>
                        </li>
                    @endif
                    @if(Auth::check())

                        <li class="nav-item">
                            <a class="nav-link" tabindex="-1" aria-disabled="true" href="{!! route('account') !!}">Личный кабинет</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" tabindex="-1" aria-disabled="true" href="{!! route('logout') !!}">Выход</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" tabindex="-1" aria-disabled="true" href="{!! route('register') !!}">Регистрация</a>
                            <!-- Button trigger modal -->
                            <!--<button type="button" class="nav-link registration" data-bs-toggle="modal" data-bs-target="#exampleModal">Регистрация</button>-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" tabindex="-1" aria-disabled="true" href="{!! route('login') !!}">Вход</a>
                        </li>
                    @endif
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>