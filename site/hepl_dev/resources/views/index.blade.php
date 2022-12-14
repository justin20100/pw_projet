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
    <title>HEPL DEV - Acceuil</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header">
    <h1 class="header__title hidden">HEPL DEV - acceuil</h1>
    <x-commons.navigation></x-commons.navigation>
    <div class="header__cta cta">
        <div class="cta__left">
            <p class="cta__title">{{__('index.cta__title')}}</p>
            <p class="cta__description">{{__('index.cta__description')}}</p>
            <a href="/section" class="cta__link button">{{__('index.cta__link')}}</a>
        </div>
        <div class="cta__right">
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis1.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Louis Delaroche</p>
                <p class="person-card__comment">«&nbsp;Deux mois de stage Chez Whitecube a suffit pour qu’ils me
                    proposent une place au sain de leur équipe de designer.&nbsp;»</p>
            </div>
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis2.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Maxime Lareu</p>
                <p class="person-card__comment">«&nbsp;Après la fin de mon stage en 3e année l’agence dans laquelle je
                    l’ai fait m’a envoyé une offre d’emploi que j’ai accepté.&nbsp;»</p>
            </div>
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis3.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Isabelle Dubois</p>
                <p class="person-card__comment">«&nbsp;Deux mois de stage Chez Whitecube a suffit pour qu’ils me
                    proposent une place au sain de leur équipe de designer.&nbsp;»</p>
            </div>
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis4.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Theo Fondant</p>
                <p class="person-card__comment">«&nbsp;Deux mois de stage Chez Whitecube a suffit pour qu’ils me
                    proposent une place au sain de leur équipe de designer.&nbsp;»</p>
            </div>
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis5.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Charle Sacré</p>
                <p class="person-card__comment">«&nbsp;Deux mois de stage Chez Whitecube a suffit pour qu’ils me
                    proposent une place au sain de leur équipe de designer.&nbsp;»</p>
            </div>
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis7.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Etienne Van Basten</p>
                <p class="person-card__comment">«&nbsp;Graphiste de formation une envie de web comblée par la HEPL.&nbsp;»</p>
            </div>
            <div class="cta__person-card person-card">
                <img src="{{url('/images/index/avis9.jpeg')}}" alt="" class="person-card__img">
                <p class="person-card__name">Sophie Omnibus</p>
                <p class="person-card__comment">«&nbsp;Tout juste diplomée et déja engagée en tant que designer ui ux&nbsp;»</p>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <section class="main__cta-news cta-news">
        <h2 class="cta-news__title">{{__('index.cta-news__title')}}</h2>
        <div class="cta-news__cards">
            <div class="cta-news__card news-card">
                <a class="cta-news__link" href="#">
                    <div class="news-card__image-view">
                        <img src="{{url('/images/index/creer-onglets-google-chrome.jpg')}}" alt="" class="news-card__img">
                    </div>
                    <p class="news-card__title">Chrome : comment créer et sauvegarder des groupes d’onglets</p>
                    <p class="news-card__excerpt">Pour y voir plus clair dans votre navigation sur Chrome : créez,
                        modifiez
                        et enregistrez vos groupes d’onglets ...</p>

                </a>
            </div>
            <div class="cta-news__card news-card">
                <a class="cta-news__link" href="#">
                    <div class="news-card__image-view">
                        <img src="{{url('/images/index/pantone-adobe-abonnement-payant.jpg')}}" alt="" class="news-card__img">
                    </div>
                    <p class="news-card__title">Adobe : les couleurs Pantone désormais payantes sur Photoshop,
                        Illustrator
                        et InDesign</p>
                    <p class="news-card__excerpt">Les couleurs Pantone ne sont plus accessibles librement sur les
                        logiciels
                        de la suite Adobe. © Pantone ...</p>
                </a>
            </div>
            <div class="cta-news__card news-card">
                <a class="cta-news__link" href="#">
                    <div class="news-card__image-view">
                        <img src="{{url('/images/index/raisons-utiliser-gestionnaire-flux-e-commerce.jpg')}}" alt=""
                             class="news-card__img">
                    </div>
                    <p class="news-card__title">E-commerce : 5 raisons d’utiliser un gestionnaire de flux produits</p>
                    <p class="news-card__excerpt">Un gestionnaire de flux e-commerce permet de diffuser vos produits sur
                        tous les canaux : marketplaces, plateformes publicitaires, comparateurs de prix ...</p>
                </a>
            </div>
        </div>
        <a href="/news" class="cta-news__link button">{{__('index.cta-news__link')}}</a>
    </section>
    <section class="main__cta-projects projects">
        <h2 class="projects__title">{{__('index.projects__title')}}</h2>
        <x-commons.projectsCards></x-commons.projectsCards>
        <a href="/section/projets" class="projects__link button">{{__('index.projects__link')}}</a>
    </section>
    <section class="main__cta-blog cta-blog">
        <h2 class="cta-blog__title">{{__('index.cta-blog__title')}}</h2>
        <p class="cta-blog__excerpt">{{__('index.cta-blog__excerpt')}}</p>
        <a href="/blog" class="cta-blog__link button">{{__('index.cta-blog__link')}}</a>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
