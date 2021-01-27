<div class="post">
    <a class="post__image" href="{{ localizedRoute('blog.show', ['slug' => 'protect-your-software']) }}">
        <img src="{{ asset('media/blog/thumb-protect-your-software.png') }}" alt="Protect your software" />
    </a>
    <div class="post__content">
        <a class="post__tag" href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'explained']) }}">
            Explained
        </a>
        <h3 class="post__title">
            <a href="{{ localizedRoute('blog.show', ['slug' => 'protect-your-software']) }}">
                Protect your software! Why should you?
            </a>
        </h3>
        <p class="post__excerpt">
            What is software copyright? What is the difference between software copyright and a patent? Should you go for both or not? Read on and find out.
        </p>
        <a class="post__read-more" href="{{ localizedRoute('blog.show', ['slug' => 'protect-your-software']) }}">
            Read on &raquo;
        </a>
    </div>
</div>