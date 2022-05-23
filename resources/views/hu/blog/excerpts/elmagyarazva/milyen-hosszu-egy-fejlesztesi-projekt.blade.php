<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'milyen-hosszu-egy-fejlesztesi-projekt']) }}">
        <img src="{{ asset('media/blog/thumb-how-long-is-a-development-project.png') }}" alt="Milyen hosszú egy fejlesztési projekt?" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elmagyarazva']) }}">
            Elmagyarázva
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'milyen-hosszu-egy-fejlesztesi-projekt']) }}">
                Milyen hosszú egy fejlesztési projekt?
            </a>
        </h3>
        <p class="post__excerpt">
            Ma egy gyakran feltett kérdést próbálunk körbejárni: milyen hosszú ideig tart egy fejlesztés és milyen buktatókra érdemes odafigyelni, hogy ne húzódjon el a projekt?
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'milyen-hosszu-egy-fejlesztesi-projekt']) }}">
            Tovább &raquo;
        </a>
    </div>
</div>