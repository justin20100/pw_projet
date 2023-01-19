<div class="projects__cards">
    @foreach ($projects as $project)
    <div class="projects__card">
        <img class="projects-card__img" src="{{url('/images/index/portfolio.jpg')}}" alt="">
        <p class="projects-card__title">{{$project['title']}}</p>
        <ul class="projects-card__tag-list">
            @foreach($project['tags'] as $tag)
            <li class="projects-card__tag-item"><a href="">{{$tag['name']}}</a></li>
            @endforeach
        </ul>
        <ul class="projects-card__auth-list">
            <li class="projects-card__auth-item">
                <a href="#"><img src="{{url('/images/index/avis1.jpeg')}}" alt="" class="projects-card__auth-img"></a>
                <a href="#"><p class="projects-card__auth-name">{{$project['lastname'].' '.$project['firstname']}}</p></a>
            </li>
        </ul>
    </div>
    @endforeach
</div>

