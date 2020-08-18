<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}">
        <img src="{{ asset('media/blog/thumb-dont-try-to-build-the-perfect-product.png') }}" alt="Ne próbálj tökéletes terméket építeni!" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elmagyarazva']) }}">
            Elmagyarázva
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}">
                Ne próbálj tökéletes terméket építeni!
            </a>
        </h3>
        <p class="post__excerpt">
            A mai cikkben egy konkrét példán keresztül szemléltetjük majd azt, hogy miért nem érdemes tökéletes terméket építeni.
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}">
            Tovább &raquo;
        </a>
    </div>
</div>