<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'improve-how-you-code-by-using-a-rubber-duck']) }}">
        <img src="{{ asset('media/blog/thumb-improve-how-you-code-by-using-a-rubber-duck.png') }}" alt="Improve how you code by using a rubber duck" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'development']) }}">
            Development
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'improve-how-you-code-by-using-a-rubber-duck']) }}">
                Improve how you code by using a rubber duck!
            </a>
        </h3>
        <p class="post__excerpt">
            Did you run into a programming snag you can't figure out? Find a rubber duck and start talking to it. Sound silly? Let me explain.</p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'improve-how-you-code-by-using-a-rubber-duck']) }}">
            Read on &raquo;
        </a>
    </div>
</div>