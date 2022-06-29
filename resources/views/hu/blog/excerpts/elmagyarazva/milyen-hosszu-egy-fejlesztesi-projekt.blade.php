<a class="post-box"
   href="{{ localizedRoute('blog.show', ['slug' => 'milyen-hosszu-egy-fejlesztesi-projekt']) }}"
>
    <img class="post-box__image" src="{{ asset('img/blog-' . mt_rand(1, 10) . '.jpg') }}" alt="Milyen hosszú egy fejlesztési projekt?" />
    <div class="post-box__image__overlay">
        <span class="post-box__tag">Elmagyarázva</span>
        <h1 class="post-box__title">Milyen hosszú egy fejlesztési projekt?</h1>
        <div class="post-box__author">
            <img class="post-box__author__picture" src="{{ asset('img/team-peter-illes.png') }}" alt="Illés Péter" />
            <div class="post-box__author__info">
                <h3 class="post-box__author__name">Illés Péter</h3>
                <span class="post-box__author__date">2020 március 4</span>
            </div>
        </div>
    </div>
    <div class="post-box__excerpt">
        Ma egy gyakran feltett kérdést próbálunk körbejárni: milyen hosszú ideig tart egy fejlesztés és milyen buktatókra érdemes odafigyelni, hogy ne húzódjon el a projekt?
    </div>
</a>