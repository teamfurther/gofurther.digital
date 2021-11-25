<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">
        <img src="{{ asset('media/blog/thumb-dont-try-to-build-the-perfect-product.png') }}" alt="Don't Try to Build the Perfect Product!" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'startup']) }}">
            startup
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">
                Don't Try to Build the Perfect Product!
            </a>
        </h3>
        <p class="post__excerpt">
            I recently had an experience which once again made me realized the importance of idea validation. Here's my story.
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">
            Read on &raquo;
        </a>
    </div>
</div>