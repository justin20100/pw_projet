<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEPL DEV - Nos enseignants</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header>
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/La section web/Enseignants</p>
    <h1 class="header__title">Qui sont nos enseignants ?</h1>
    <p class="header__excerpt">Nos enseignants sont des personnes de confiance et très bien qualifiées. Il s’agit de professionnels du web, ils pratiquent tous très souvent et sont toujours a jour au niveau des nouvelles tendances.</p>
</header>
<main class="main__enseignants enseignants">
    <section class="enseignants__cards">
        <h2 class="enseignants__title hidden">Les enseigants</h2>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
        <div class="enseignants__card">
            <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="enseignants__img">
            <p class="enseignants__name">Dominique Vilain</p>
            <p class="enseignants__short-desc">Enseigne une introduction au design web, php, laravel,… </p>
        </div>
    </section>
</main>
</body>
<x-commons.footer></x-commons.footer>
</html>
