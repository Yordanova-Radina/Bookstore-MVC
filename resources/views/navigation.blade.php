<nav class="navbar navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Светлина</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Начало</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'aboutus' ? 'active' : '' }}">
                    <a href="{{ route('aboutus') }}">За нас</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'posts.add' ? 'active' : '' }}">
                    <a href="{{ route('posts.add') }}">Добави отзив</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                    <a href="{{ route('register') }}">Регистрация</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                    <a href="{{ route('login') }}">Вход</a>
                </li>
            </ul>
        </div>
    </div>
</nav>