@extends('en.site', ['showFooter' => false, 'showNav' => false])

@section('title', 'Linktree')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet is-6-widescreen is-offset-3-widescreen">
                    <h1 class="heading-3 has-text-centered">For digital transformers</h1>
                    <ul class="linktree is-cobalt">
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt1-introduction']) }}" target="_blank">
                                Digital Transformation - An Introduction
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'why-you-cant-afford-to-delay-digital-transformation']) }}" target="_blank">
                                Why You Can't Afford to Delay Digital Transformation
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'how-does-digitalization-change-workplaces']) }}" target="_blank">
                                How Digitalization Changes Our Workplaces?
                            </a>
                        </li>
                    </ul>

                    <h1 class="heading-3 has-text-centered">For start-ups & product developers</h1>
                    <ul class="linktree is-pearl">
                        <li>
                            <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}" target="_blank">
                                FREEBIE: Lean Validation Cheat Sheet
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}" target="_blank">
                                Don't Try to Build the Perfect Product
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">
                                Lean Validation Steps in Product Development
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('projects.show', ['slug' => 'centralized']) }}" target="_blank">
                                CASE STUDY: Centralized
                            </a>
                        </li>
                    </ul>

                    @if (count(config('blog.posts')) >= 3)
                    <h1 class="heading-3 has-text-centered">Latest blog posts</h1>
                    <div class="posts has-margin-b60">
                        <div class="columns is-multiline">
                        @foreach(array_slice(config('blog.posts'), 0, 3) as $post)
                            <div class="column is-12-tablet">
                                @include(getLang() . '.blog.excerpts.' . $post[getLang()]['slug'])
                            </div>
                        @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="social-icons">
                        <a href="{{ config('site.social.linkedin') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--linkedin"></span></a>
                        <a href="{{ config('site.social.instagram') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--instagram"></span></a>
                        <a href="{{ config('site.social.facebook') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--facebook"></span></a>
                        <a href="{{ config('site.social.twitter') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--twitter"></span></a>
                        <a href="{{ config('site.social.github') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--github"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription', [
        'headingText' => 'Want more?<br /><strong>Subscribe now!</strong>'
    ])
@endsection
