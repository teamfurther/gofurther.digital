<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'pivot-vagy-nem-pivot']) }}">
        <img src="{{ asset('media/blog/thumb-to-pivot-or-not-to-pivot.png') }}" alt="Pivot vagy nem pivot: az itt a kérdés " />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'startup']) }}">
            Startup
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'pivot-vagy-nem-pivot']) }}">
                Pivot vagy nem pivot: az itt a kérdés
            </a>
        </h3>
        <p class="post__excerpt">
            Mi az a pivot? Hány fajtája van? Mikor pivotoljunk? Tartsatok velünk, hogy mindezt megtudjátok!
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'pivot-vagy-nem-pivot']) }}">
            Tovább &raquo;
        </a>
    </div>
</div>
