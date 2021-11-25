@extends('hu.site', ['showFooter' => false, 'showNav' => false])

@section('title', 'Linkek')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet is-6-widescreen is-offset-3-widescreen">
                    <h1 class="heading-3 has-text-centered">Digitális transzformátoroknak</h1>
                    <ul class="linktree is-cobalt">
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}" target="_blank">
                                Digitális Transzformáció - Bevezetés
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'miert-ne-halogasd-a-digitalis-transzformaciot']) }}" target="_blank">
                                Miért nem halogathatod a digitális transzformációt?
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-valtoztatja-meg-a-digitalizacio-a-munkahelyeinket']) }}" target="_blank">
                                Hogyan változtatja meg a digitalizáció a munkahelyeinket?
                            </a>
                        </li>
                    </ul>

                    <h1 class="heading-3 has-text-centered">Startupoknak és termékfejlesztőknek</h1>
                    <ul class="linktree is-pearl">
                        <li>
                            <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}" target="_blank">
                                INGYENES ANYAG: A lean validáció 4 lépése
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}" target="_blank">
                                Ne próbálj tökéletes terméket építeni!
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">
                                Lean validáció a termékfejlesztésben
                            </a>
                        </li>
                        <li>
                            <a href="{{ localizedRoute('projects.show', ['slug' => 'centralized']) }}" target="_blank">
                                ESETTANULMÁNY: Centralized
                            </a>
                        </li>
                    </ul>

                    @if (count(config('blog.posts')) >= 3)
                    <h1 class="heading-3 has-text-centered">Legfrissebb cikkeink</h1>
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
        'headingText' => 'Többet szeretnél?<br /><strong>Iratkozz fel most!</strong>'
    ])
@endsection
