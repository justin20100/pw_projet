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
<header class="forum__header">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>Le forum</strong></p>
    <h1 class="header__title">Le forum</h1>
    <p class="header__excerpt">Bienvenue sur notre forum ! </br>Vous pouvez trouver pleins de sujets qui parlerons principalement du développement web, de notre section web ainsi que des sujets attachés au web. Si vous souhaitez poser des questions il vous faudra créer un compte gratuit sur ce site.</p>
{{--    <a href="#" class="header__link button">Poser une question</a>--}}
</header>
<main class="main">
    <section class="main__subjects subjects">
        <h2 class="subjects__title hidden">Les subjects</h2>
        <x-commons.filterForm></x-commons.filterForm>
        <div class="subjects__container">
            <article class="subjects__article subject">
                <ul class="subject__tags">
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">mobile</li>
                </ul>
                <h3 class="subject__title">Je cherche a adapter mon site pour les smartphones. Quelle est la meilleur des facons?</h3>
                <p class="subject__excerpt">La courte description du sujet qui donne une idée a l'utilisateur de ce qu'est le sujet</p>
                <div class="subject__auth">
                    <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="subject__auth-img">
                    <p class="subject__auth-name">Par <a href="#">Anthony Debone</a> le <time class="subject__date" datetime="2022-05-22">20 mai 2022</time></p>
                </div>
            </article>
            <article class="subjects__article subject">
                <ul class="subject__tags">
                    <li class="subject__tag">CSS</li>
                </ul>
                <h3 class="subject__title">Comment centrer une div ?</h3>
                <p class="subject__excerpt">Il existe plusieur facons de centrer une div. Certaines méthodes sont très vieilles mais fonctionnent encore très bien. D'autres sont plus simple à mettre en place et plus efficace.</p>
                <div class="subject__auth">
                    <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="subject__auth-img">
                    <p class="subject__auth-name">Par <a href="#">Anthony Debone</a> le <time class="subject__date" datetime="2022-05-22">20 mai 2022</time></p>
                </div>
            </article>
            <article class="subjects__article subject">
                <ul class="subject__tags">
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">Mobile</li>
                    <li class="subject__tag">HTML</li>
                    <li class="subject__tag">JS</li>
                </ul>
                <h3 class="subject__title">Comment centrer une div ?</h3>
                <p class="subject__excerpt">Il existe plusieur facons de centrer une div. Certaines méthodes sont très vieilles mais fonctionnent encore très bien. D'autres sont plus simple à mettre en place et plus efficace.</p>
                <div class="subject__auth">
                    <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="subject__auth-img">
                    <p class="subject__auth-name">Par <a href="#">Anthony Debone</a> le <time class="subject__date" datetime="2022-05-22">20 mai 2022</time></p>
                </div>
            </article>
            <article class="subjects__article subject">
                <ul class="subject__tags">
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">CSS</li>
                </ul>
                <h3 class="subject__title">Comment centrer une div ?</h3>
                <p class="subject__excerpt">Il existe plusieur facons de centrer une div. Certaines méthodes sont très vieilles mais fonctionnent encore très bien. D'autres sont plus simple à mettre en place et plus efficace.</p>
                <div class="subject__auth">
                    <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="subject__auth-img">
                    <p class="subject__auth-name">Par <a href="#">Anthony Debone</a> le <time class="subject__date" datetime="2022-05-22">20 mai 2022</time></p>
                </div>
            </article>
            <article class="subjects__article subject">
                <ul class="subject__tags">
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">CSS</li>
                </ul>
                <h3 class="subject__title">Comment centrer une div ?</h3>
                <p class="subject__excerpt">Il existe plusieur facons de centrer une div. Certaines méthodes sont très vieilles mais fonctionnent encore très bien. D'autres sont plus simple à mettre en place et plus efficace.</p>
                <div class="subject__auth">
                    <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="subject__auth-img">
                    <p class="subject__auth-name">Par <a href="#">Anthony Debone</a> le <time class="subject__date" datetime="2022-05-22">20 mai 2022</time></p>
                </div>
            </article>
            <article class="subjects__article subject">
                <ul class="subject__tags">
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">CSS</li>
                    <li class="subject__tag">CSS</li>
                </ul>
                <h3 class="subject__title">Comment centrer une div ?</h3>
                <p class="subject__excerpt">Il existe plusieur facons de centrer une div. Certaines méthodes sont très vieilles mais fonctionnent encore très bien. D'autres sont plus simple à mettre en place et plus efficace.</p>
                <div class="subject__auth">
                    <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="subject__auth-img">
                    <p class="subject__auth-name">Par <a href="#">Anthony Debone</a> le <time class="subject__date" datetime="2022-05-22">20 mai 2022</time></p>
                </div>
            </article>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
