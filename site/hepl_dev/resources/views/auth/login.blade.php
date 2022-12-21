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
    <title>HEPL DEV - Login</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header__login">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>Login</strong></p>
    <h1 class="header__title">Connectez-vous</h1>
    <p class="header__excerpt">Nous sommes content de vous revoir !
        De nouvelles questions vous attendent surement.</p>
</header>
<main class="main">
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')"/>

    <section class="main__loginForm loginForm">
        <h2 class="loginForm__title hidden">Le formulaire de connection</h2>
        <form method="POST" action="{{ route('login') }}" class="loginForm__form">
            @csrf

            <!-- Email Address -->
            <div class="loginForm__email">
                <x-input-label for="email" :value="__('Email')" class="loginForm__label"/>

                <x-text-input id="email" class="loginForm__input" type="email" name="email" placeholder="monadressemail@gmail.com" :value="old('email')"
                              required autofocus/>

                <x-input-error :messages="$errors->get('email')" class="loginForm__errorMessage"/>
            </div>

            <!-- Password -->
            <div class="loginForm__password">
                <x-input-label for="password" :value="__('Mot de passe')" class="loginForm__label"/>

                <x-text-input id="password" class="loginForm__input"
                              type="password"
                              name="password"
                              placeholder="Votre mot de passe"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="loginForm__errorMessage"/>
            </div>

            <div class="loginForm__remember-forget">
                <!-- Remember Me -->
                <label for="remember_me" class="loginForm__remember-label">
                    <input id="remember_me" type="checkbox"
                           class=""
                           name="remember">
                    <span class="loginForm__label">{{ __('Se souvenir de moi') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="LoginForm__link"
                       href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié') }}
                    </a>
                @endif
            </div>
            <div class="">
                <x-primary-button class="loginForm__button button">
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
