<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEPL DEV - projets d'etudiants</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="projets__header">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/La section web/Projets d'etudiant</p>
    <h1 class="header__title">Les projets des etudiants</h1>
    <p class="header__excerpt">Lors de la formation les étudiants ont des projets a realiser. Cette page permet de les regrouper tous et de montrer ce qu’on apprend à faire à la hepl en section web.</p>
</header>
<main class="main">
    <section class="main__cta-projects projects">
        <h2 class="projects__title hidden">Des projets D’étudiants</h2>
        <x-commons.projectsCards></x-commons.projectsCards>
        <a href="/section/projets" class="projects__link button">Voir plus</a>
    </section>
</main>
</body>
<x-commons.footer></x-commons.footer>
</html>
