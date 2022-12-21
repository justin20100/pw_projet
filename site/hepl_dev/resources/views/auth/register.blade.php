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
    <title>HEPL DEV - Forum</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header__login">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>Login</strong></p>
    <h1 class="header__title">Enregistrez-vous</h1>
    <p class="header__excerpt">Nous sommes content de compter parmi nous !
        L’inscription vous permettra d’échanger sur le forum avec les autres utilisateurs. Ceci vous laissera l’occasion de poser toutes sortes de questions à des personnes qui pourront y trouver réponse facilement. </p>
    {{--    <a href="#" class="header__link button">Poser une question</a>--}}
</header>
<main class="main">
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')"/>

    <section class="main__registerForm registerForm">
        <h2 class="loginForm__title hidden">Le formulaire de connection</h2>
        <form method="POST" action="{{ route('register') }}" class="registerForm__form" enctype="multipart/form-data">
            @csrf

            <!-- avatar -->
            <div class="registerForm__element">
                <x-input-label for="avatar" :value="__('avatar')" class="registerForm__label"/>
                <x-text-input id="avatar" class="registerForm__input" type="file" name="avatar" :value="old('avatar')" required autofocus />
                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
            </div>

            <!-- firstname -->
            <div class="registerForm__element">
                <x-input-label for="firstname" :value="__('Prenom')" class="registerForm__label"/>
                <x-text-input id="firstname" class="registerForm__input" type="text" name="firstname" placeholder="Louis" :value="old('firstname')" required autofocus />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

            <!-- lastname -->
            <div class="registerForm__element">
                <x-input-label for="lastname" :value="__('Nom')" class="registerForm__label"/>
                <x-text-input id="lastname" class="registerForm__input" type="text" name="lastname" placeholder="Dubois" :value="old('lastname')" required autofocus />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="registerForm__element">
                <x-input-label for="email" :value="__('Email')" class="registerForm__label"/>
                <x-text-input id="email" class="registerForm__input" type="email" name="email" placeholder="louis.dubois@gmail.com" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="registerForm__element">
                <x-input-label for="password" :value="__('Mot de passe')" class="registerForm__label"/>

                <x-text-input id="password" class="registerForm__input"
                              type="password"
                              name="password"
                              placeholder="Mot de passe"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="registerForm__element">
                <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="registerForm__label"/>

                <x-text-input id="password_confirmation" class="registerForm__input"
                              type="password"
                              placeholder="Mot de passe"
                              name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="">
                <a class="" href="/{{app()->getLocale()}}/login">
                    {{ __("J'ai deja un compte") }}
                </a>

                <x-primary-button class="registerForm__button button">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
