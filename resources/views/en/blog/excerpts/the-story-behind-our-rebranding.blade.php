<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'the-story-behind-our-rebranding']) }}">
        <img src="{{ asset('media/blog/thumb-rebranding.png') }}" alt="The story behind our rebranding" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'life-at-further']) }}">
            Life at Further
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'the-story-behind-our-rebranding']) }}">
                The story behind our rebranding
            </a>
        </h3>
        <p class="post__excerpt">
            We took the shot and decided to rebrand our company not only because change is necessary to grow, but the main reason behind the rebrand was that the old brand did not represent us well anymore.
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'the-story-behind-our-rebranding']) }}">
            Read on &raquo;
        </a>
    </div>
</div>