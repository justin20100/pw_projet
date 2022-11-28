<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEPL DEV - La section</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="section__header">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>La section web</strong></p>
    <h1 class="header__title">Qu’est ce que la section web ?</h1>
</header>
<main class="main__section section">
    <section class="section__section">
        <div class="section__left">
            <img src="{{url('/images/section/parc-des-marets.jpg')}}" alt="" class="section__img">
        </div>
        <div class="section__right">
            <h2 class="section__subtitle">La HEPL</h2>
            <p class="section__text">La HEPL est la haute école de la province de liège. Cette haute école possède 11 implantations reparties sur Liège et sa Province. Elle propose 70 formations dans 12 domaines. Elle contient plus ou moins 1200 encadrants et offre a 10 000 étudiants une formation combinant aspects théoriques et experiences pratiques.
                </br>La section web est implantée au parc des Marêts à Seraing avec d’autre bacheliers en liens avec l’informatique.</p>
            <a href="https://hepl.be" target="_blank" class="section__link button">Visiter le site de la HEPL</a>
        </div>
    </section>
    <section class="section__section">
        <div class="section__left">
            <img src="{{url('/images/section/section-web.jpg')}}" alt="" class="section__img">
        </div>
        <div class="section__right">
            <h2 class="section__subtitle">La section web</h2>
            <p class="section__text">La section web est issue d’un bachelier en infographie de 3ans. La premiere année de ce bachelier est une introduction a l’infographie en générale. Découverte de la 3D (Maya), Découverte de la 2D (illustrator, photoshop) et du web (HTML, CSS). En 2e et 3e en web on va approfondir les connaissances en HTML, CSS et introduire pleins de nouvelles notions. Apprentissage de javascript, MySQL, PHP, Wordpress, Laravel, Flutter, Dart, ...</p>
            <a href="/section/valeurs" class="section__link button">Découvrir nos valeurs</a>
        </div>
    </section>
    <section class="section__section">
        <div class="section__left">
            <img src="{{url('/images/section/metier.jpg')}}" alt="" class="section__img">
        </div>
        <div class="section__right">
            <h2 class="section__subtitle">Que peut-on devenir ?</h2>
            <p class="section__text">
                - Designer Web et mobile</br>
                - Designer d’interfaces (UI Designer)</br>
                - Designer d’expérience utilisateur (UX Designer)</br>
                - Designer multimédia</br>
                - Développeur Web</br>
                - Développeur mobile</br>
                - Développeur multimédia</br>
                - Développeur Web front-end et back-end</p></br>
            <a href="/section/alumnis" class="section__link button">Découvrir nos alumnis</a>
        </div>
    </section>
    <section class="section__section">
        <div class="section__left">
            <img src="{{url('/images/section/enseignants.jpg')}}" alt="" class="section__img">
        </div>
        <div class="section__right">
            <h2 class="section__subtitle">Nos enseignants</h2>
            <p class="section__text">La section web compte pas moins de 7 enseignants. Il s’agit tous de professionnels du web. Certains sont enseignants à temps pleins, certains sont développeurs web dans une agence et certains sont même chef d’entreprise. Le point commun entre tous c’est qu’il sont la pour enseigner la qualité web car ils en sont passionnés.</p>
            <a href="/section/enseignants" class="section__link button">Découvrir les enseignants</a>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
