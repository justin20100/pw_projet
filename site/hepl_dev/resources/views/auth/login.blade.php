<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Présentation du bachelier section web de la haute école de Liège"/>
    <meta name="keywords" content="web, bachelier, hepl, formation, etude, blog"/>
    <meta name="author" content="Vincent Justin"/>
    <meta name="copyright" content="Vincent Justin"/>
    <title>HEPL DEV - Se connecter</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header__login">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>Se connecter</strong></p>
    <h1 class="header__title">Se connecter</h1>
    <p class="header__excerpt">Nous sommes content de vous revoir! De nouvelles questions vous attendent surement.</p>
</header>
<main class="main">
    <section class="main__loginForm loginForm">
        <h2 class="loginForm__title hidden">Le formulaire de connection</h2>
            <div class="loginForm__container">
                <form action="/login" method="post" class="loginForm__form">
                    @csrf
                    <div class="loginForm__email">
                        <label for="email" class="@error('email') @enderror loginForm__label">Email</label>
                        @error('email')
                        <div class="loginForm__errorMessage">{{ $message }}</div>
                        @enderror
                        <input id="email" type="text" name="email" class="@error('email')  @enderror loginForm__input" value="{{old('email')}}" placeholder="henry.dubois@gmail.com">
                    </div>

                    <div class="loginForm__password">
                        <label for="password" class=" @error('password') @enderror loginForm__label">Mot de passe</label>
                        @error('password')
                        <div class="loginForm__errorMessage">{{ $message }}</div>
                        @enderror
                        <input name="password" type="password" id="password" class=" @error('password') @enderror loginForm__input" value="{{old('password')}}" placeholder="votre mot de passe">
                    </div>
                    <button type="submit" class="LoginForm__button button">Login</button>
                    <p class="LoginForm__link"><a href="/register">Mot de passe oublié</a></p>
                    <p class="LoginForm__link"><a href="/register">Je n'ai pas de compte</a></p>
                </form>
            </div>
    </section>
</main>
<x-commons.footer/>
</body>
</html>
