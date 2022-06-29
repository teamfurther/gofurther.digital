<a class="post-box"
   href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}"
>
    <img class="post-box__image" src="{{ asset('img/blog-' . mt_rand(1, 10) . '.jpg') }}" alt="Don't Try to Build the Perfect Product!" />
    <div class="post-box__image__overlay">
        <span class="post-box__tag">Startups and Product Development</span>
        <h1 class="post-box__title">Don't Try to Build the Perfect Product!</h1>
        <div class="post-box__author">
            <img class="post-box__author__picture" src="{{ asset('img/team-peter-illes.png') }}" alt="Peter Illés" />
            <div class="post-box__author__info">
                <h3 class="post-box__author__name">Peter Illés</h3>
                <span class="post-box__author__date">July 14th, 2020</span>
            </div>
        </div>
    </div>
    <div class="post-box__excerpt">
        I recently had an experience which once again made me realized the importance of idea validation. Here's my story.
    </div>
</a>