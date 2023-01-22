<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEPL DEV - Nos alumnis</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="forum__header">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">La section web / <strong>Nos alumnis</strong></p>
    <h1 class="header__title">Nos alumnis</h1>
    <p class="header__excerpt">Vous retouverez ici tout les élèves qui ont été diplomé dans notre section Web. Si vous voulez en savoir plus sur un d'eux ils ont une page personnel sur ce site.</p>
</header>
<main>
    <section class="alumnis">
        <h2 class="alumnis__title hidden">Les alumnis</h2>
        <div class="alumnis__year">
            <h3 class="alumnis__year-title">Alumnis 2022</h3>
            <div class="alumnis__cards">
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
            </div>
        </div>
        <div class="alumnis__year">
            <h3 class="alumnis__year-title">Alumnis 2021</h3>
            <div class="alumnis__cards">
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
            </div>
        </div>
        <div class="alumnis__year">
            <h3 class="alumnis__year-title">Alumnis 2020</h3>
            <div class="alumnis__cards">
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
            </div>
        </div>
        <div class="alumnis__year">
            <h3 class="alumnis__year-title">Alumnis 2019</h3>
            <div class="alumnis__cards">
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
                <div class="alumnis__card">
                    <img src="{{url('/images/enseignants/enseignant.jpg')}}" alt="" class="alumnis__img">
                    <p class="alumnis__name">Julien Dubois</p>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
<x-commons.footer></x-commons.footer>
</html>
