<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">
        <img src="{{ asset('media/blog/thumb-dont-try-to-build-the-perfect-product.png') }}" alt="Don't try to build the perfect product!" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'explained']) }}">
            Explained
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">
                Don't try to build the perfect product!
            </a>
        </h3>
        <p class="post__excerpt">
            In today’s article, we will illustrate through a concrete example why it is not worth building a perfect product.
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">
            Read on &raquo;
        </a>
    </div>
</div>