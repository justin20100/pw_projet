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
    <title>HEPL DEV - S'enregister</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header__register">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>S'enregistrer</strong></p>
    <h1 class="header__title">S'enregistrer</h1>
    <p class="header__excerpt">L’inscription vous permettra d’échanger sur le forum avec les autres utilisateurs. Ceci vous laissera l’occasion de poser toutes sortes de questions à des personnes qui pourront y trouver réponse
        facilement. </p>
</header>
<main class="main">
    <section class="main__registerForm registerForm">
        <h2 class="registerForm__title hidden">Le formulaire d'enregistrement</h2>
        <div class="registerForm__container">
            <form action="/register" method="post" class="registerForm__form" enctype="multipart/form-data">
                @csrf

                <div class="registerForm__element">
                    <label class="custom-file-upload" for="avatar">
                        Importer un photo de profile
                    </label>
                    <input  id="avatar" name="avatar" type="file"/>
                </div>

                <div class="registerForm__element">
                    <label for="firstname" class="@error('firstname') @enderror registerForm__label">Prénom</label>
                    @error('firstname')
                    <div class="registerForm__errorMessage">{{ $message }}</div>
                    @enderror
                    <input id="firstname" type="text" name="firstname"
                           class="@error('firstname')  @enderror registerForm__input" value="{{old('firstname')}}"
                           placeholder="henry">
                </div>

                <div class="registerForm__element">
                    <label for="lastname" class="@error('lastname') @enderror registerForm__label">Nom</label>
                    @error('lastname')
                    <div class="registerForm__errorMessage">{{ $message }}</div>
                    @enderror
                    <input id="lastname" type="text" name="lastname"
                           class="@error('lastname')  @enderror registerForm__input" value="{{old('lastname')}}"
                           placeholder="dubois">
                </div>

                <div class="registerForm__element">
                    <label for="email" class="@error('email') @enderror registerForm__label">Email</label>
                    @error('email')
                    <div class="registerForm__errorMessage">{{ $message }}</div>
                    @enderror
                    <input id="email" type="text" name="email" class="@error('email')  @enderror registerForm__input"
                           value="{{old('email')}}" placeholder="henry.dubois@gmail.com">
                </div>

                <div class="registerForm__element">
                    <label for="password" class=" @error('password') @enderror registerForm__label">Mot de passe</label>
                    @error('password')
                    <div class="registerForm__errorMessage">{{ $message }}</div>
                    @enderror
                    <input name="password" type="password" id="password"
                           class=" @error('password') @enderror registerForm__input" value="{{old('password')}}"
                           placeholder="votre mot de passe">
                </div>

                <div class="registerForm__element">
                    <label for="validate_password" class=" @error('validate_password') @enderror registerForm__label">Confirmez
                        votre mot de passe</label>
                    @error('validate_password')
                    <div class="registerForm__errorMessage">{{ $message }}</div>
                    @enderror
                    <input name="validate_password" type="password" id="validate_password"
                           class=" @error('validate_password') @enderror registerForm__input"
                           value="{{old('validate_password')}}" placeholder="votre mot de passe une nouvelle fois">
                </div>
                <button type="submit" class="registerForm__button button">S'enregistrer</button>
                <p class="registerForm__link"><a href="/login">J'ai déja un compte</a></p>
            </form>
        </div>
    </section>
</main>
<x-commons.footer/>
</body>
</html>
