<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'vedd-meg-a-szoftvered']) }}">
        <img src="{{ asset('media/blog/thumb-protect-your-software.png') }}" alt="Hogyan védhetjük meg a szoftverünk szellemi tulajdonát?" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elmagyarazva']) }}">
            Elmagyarázva
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'vedd-meg-a-szoftvered']) }}">
                Védd meg a szoftvered!
            </a>
        </h3>
        <p class="post__excerpt">
            Mi a szoftverjog? Mi a különbség a szoftverjog és a szabadalom között? El kellene indulni mindkettő irányában, vagy sem? Melyik védi jobban a szoftvered? Olvass tovább és a cikkünkből megtudhatod.
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'vedd-meg-a-szoftvered']) }}">
            Tovább &raquo;
        </a>
    </div>
</div>