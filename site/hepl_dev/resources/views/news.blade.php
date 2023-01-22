<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEPL DEV - News</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="forum__header">
    <x-commons.navigation></x-commons.navigation>
    <p class="header__arian-thread">/<strong>Les  news</strong></p>
    <h1 class="header__title">Les news</h1>
    <p class="header__excerpt">Cette page regroupe des d'informations liées aux web qui peuvent etre intéressantes a approfondir. Des nouvelles de la section web peuvent aussi apparaitre ici. </p>
    {{--    <a href="#" class="header__link button">Poser une question</a>--}}
</header>
<main>
    <form class="news__form">
        <label for="sort" class="filter__sort-label"> Trier par &nbsp;&nbsp;
            <select name="sort" class="filter__sort-select">
                <option class="filter__sort-option">Le plus recent</option>
                <option class="filter__sort-option">Le plus ancien</option>
                <option class="filter__sort-option">Aléatoirement</option>
            </select>
            <svg class="filter__sort-select__svg" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12">
                <path id="Polygone_1" data-name="Polygone 1" d="M5.272,2.962a2,2,0,0,1,3.455,0l3.518,6.031A2,2,0,0,1,10.518,12H3.482A2,2,0,0,1,1.755,8.992Z" transform="translate(14 12) rotate(180)" fill="#fff"/>
            </svg>
        </label>
    </form>
    <Section class="news">
        <h2 class="news__title hidden">News</h2>
        <div class="news__cards">
            <div class="news__card">
                <div class="news__card-left">
                    <img src="{{url('/images/index/creer-onglets-google-chrome.jpg')}}" alt="" class="news__img">
                </div>
                <div class="news__card-right">
                    <p class="news__card-title">Photoshop : 5 nouveautés dévoilées par Adobe</p>
                    <p class="news__excerpt">Paris Web existe depuis 2006. Toutes les personnes qui ont assisté aux conférences et ateliers ces seize dernières années peuvent témoigner combien ça leur a apporté. Mais si vous n’avez jamais participé à Paris Web, peut-être avez-vous besoin d’être convaincu.</p>
                </div>
            </div>
            <div class="news__card">
                <div class="news__card-left">
                    <img src="{{url('/images/index/creer-onglets-google-chrome.jpg')}}" alt="" class="news__img">
                </div>
                <div class="news__card-right">
                    <p class="news__card-title">Photoshop : 5 nouveautés dévoilées par Adobe</p>
                    <p class="news__excerpt">Paris Web existe depuis 2006. Toutes les personnes qui ont assisté aux conférences et ateliers ces seize dernières années peuvent témoigner combien ça leur a apporté. Mais si vous n’avez jamais participé à Paris Web, peut-être avez-vous besoin d’être convaincu.</p>
                </div>
            </div>
            <div class="news__card">
                <div class="news__card-left">
                    <img src="{{url('/images/index/creer-onglets-google-chrome.jpg')}}" alt="" class="news__img">
                </div>
                <div class="news__card-right">
                    <p class="news__card-title">Photoshop : 5 nouveautés dévoilées par Adobe</p>
                    <p class="news__excerpt">Paris Web existe depuis 2006. Toutes les personnes qui ont assisté aux conférences et ateliers ces seize dernières années peuvent témoigner combien ça leur a apporté. Mais si vous n’avez jamais participé à Paris Web, peut-être avez-vous besoin d’être convaincu.</p>
                </div>
            </div>
        </div>
    </Section>
</main>
</body>
<x-commons.footer></x-commons.footer>
</html>
