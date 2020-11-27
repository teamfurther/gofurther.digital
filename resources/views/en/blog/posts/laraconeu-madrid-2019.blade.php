@section('title', 'Highlights from our visit to LaraconEU Madrid 2019')
@section('description', 'The 23rd of May was a special day for us, as we attended our first Laracon in Madrid. Laracon has always been high up on our conferences bucket list, but it just didn\'t work out for us. Until now.')
@section('preview_image', asset('media/blog/cover-laraconeu-madrid-2019.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-laraconeu-madrid-2019.png') }}" srcset="{{ asset('media/blog/featured-laraconeu-madrid-2019-768w.png') }} 768w, {{ asset('media/blog/featured-laraconeu-madrid-2019-1000w.png') }} 1000w" sizes="100vw" alt="Further@LaraconEU Madrid 2019" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Further@LaraconEU Madrid 2019</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-05-29 12:00:00">May 29th, 2019</time> &middot; 5 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>The 23rd of May was a special day for us, as we attended our first Laracon in Madrid. We've been using Laravel since 2014 (version 4.2), and since it is part of our main <a href="{{ localizedRoute('tech-stack') }}">tech stack</a> and we're also trying to take active part in the local community, Laracon has always been high up on our conferences bucket list, but it just didn't work out for us until now.</p>
                            <p>We arrived early on the 22nd, and after a long walk exploring Madrid and some awesome paella, we dropped by Teatros Luchana for an evening of networking, drinks and tapas, sponsored by <a href="https://twitter.com/Cyberduck_uk" target="_blank">Cyber Duck</a>. It was great to meet new people who think alike and are all excited about Laravel, the same way we are.</p>
                            <figure>
                                <img src="{{ asset('media/blog/laraconeu-madrid-2019-teatros-luchana.jpg') }}" alt="Teatros Luchana was an awesome venue, with a really cool industrial design" />
                                <figcaption>Teatros Luchana was an awesome venue, with a really cool industrial design</figcaption>
                            </figure>
                            <p>The actual conference kicked off the next morning. After a quick breakfast and some more mingling, <a href="https://twitter.com/freekmurze" target="_blank"><strong>Freek Van der Herten</strong></a> started the talks with his piece called "Supercharging Common Controllers". After going through some of best practices to keep your code clean, Freek presented some (more) awesome packages they developed at <a href="https://spatie.be" target="_blank">Spatie</a>. Their work in the Laravel open-source space is quite unparalelled and it was nice to talk to them during the breaks.</p>
                            <blockquote class="twitter-tweet has-margin-b60" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Here are the slides I used during my talk on Supercharging common controllers at <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> Madrid<a href="https://t.co/bZ6eNMP2Bf">https://t.co/bZ6eNMP2Bf</a><a href="https://twitter.com/hashtag/laraconeu?src=hash&amp;ref_src=twsrc%5Etfw">#laraconeu</a> <a href="https://t.co/QX57ful4My">pic.twitter.com/QX57ful4My</a></p>&mdash; Freek Van der Herten 🎆 (@freekmurze) <a href="https://twitter.com/freekmurze/status/1131475826824884224?ref_src=twsrc%5Etfw">May 23, 2019</a></blockquote>
                            <p class="has-margin-t60">Next up was <a href="https://twitter.com/christophrumpel" target="_blank"><strong>Christoph Rumpel</strong></a> of Laravel Core Adventures with a deep-dive on how the internals of the Laravel framework functions. Some really good content, and maybe a subscription is in order?</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Thanks, <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> for another awesome conference and for having me as a speaker. I had a wonderful time and enjoyed being part of this lovely community. ❤<br><br>Here are the slides from my talk Laravel&#39;s core.<a href="https://t.co/FpZCCra9bZ">https://t.co/FpZCCra9bZ</a></p>&mdash; Christoph Rumpel  🤠 (@christophrumpel) <a href="https://twitter.com/christophrumpel/status/1133268788772786176?ref_src=twsrc%5Etfw">May 28, 2019</a></blockquote>
                            <p class="has-margin-t60"><a href="https://twitter.com/krystalcampioni" target="_blank"><strong>Krystal Campioni</strong></a> raised awareness about accessibility issues on modern websites and showed us how to use colour theory to circumnavigate some of them. Sprinkled with some VueJS awesomeness of course.</p>
                            <p>There's no Laracon without a new package being presented and <a href="https://twitter.com/SandervHooft" target="_blank"><strong>Sander van Hooft</strong></a> did exactly that. He talked about a new Cashier integration for Mollie, which brings European country-specific payment gateways to Laravel.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">For the folks who watched my talk today about accessible color schemes with <a href="https://twitter.com/hashtag/VueJS?src=hash&amp;ref_src=twsrc%5Etfw">#VueJS</a> at <a href="https://twitter.com/hashtag/LaraconEU?src=hash&amp;ref_src=twsrc%5Etfw">#LaraconEU</a>, you can find the slides + examples code here: <a href="https://t.co/r5aXBXZb6w">https://t.co/r5aXBXZb6w</a></p>&mdash; Krystal Campioni (@krystalcampioni) <a href="https://twitter.com/krystalcampioni/status/1131518459400138752?ref_src=twsrc%5Etfw">May 23, 2019</a></blockquote>
                            <p class="has-margin-t60"><a href="https://twitter.com/enunomaduro" target="_blank"><strong>Nuno Maduro</strong></a> wrapped up the morning session with his talk "Writing Effective PHP", in which he spoke about the importance of defensive programming <em>"only when it's needed"</em> and why everybody should integrate static analysis tools like PHPStan in their deployment processes. He also presented <a href="https://github.com/nunomaduro/phpinsights">PHPInsights</a>, another static analysis tool he develops and maintains. Make sure you check it out, we'll definitely be going to use it.</p>
                            <p><a href="https://twitter.com/marcelpociot" target="_blank"><strong>Marcel Pociot</strong></a> was given the tough job of following a lavish tapas-fueled lunch, but he delivered, by repeating his Laracon Online presentation about building "Realtime Applications with Laravel".</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">If you want to learn more about the internals of <a href="https://twitter.com/freekmurze?ref_src=twsrc%5Etfw">@freekmurze</a> and my WebSocket package, check out our blog post that dives into a lot of code of the package. It's probably one of the most polished packages I've ever worked on. <a href="https://t.co/kf0NLRnFXv">https://t.co/kf0NLRnFXv</a></p>&mdash; Marcel Pociot 🎆 (@marcelpociot) <a href="https://twitter.com/marcelpociot/status/1131539634335473664?ref_src=twsrc%5Etfw">May 23, 2019</a></blockquote>
                            <p class="has-margin-t60">Next up was a frontend talk by <strong>Vitor Caneco</strong> talking about Tailwind CSS and the use of utility-first CSS frameworks, followed by <a href="https://twitter.com/dimsav" target="_blank"><strong>Dimitris Savvopoulos</strong></a> with a demo on event sourcing in Laravel.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">In case you want to play with <a href="https://twitter.com/hashtag/eventSourcing?src=hash&amp;ref_src=twsrc%5Etfw">#eventSourcing</a> and <a href="https://twitter.com/hashtag/php?src=hash&amp;ref_src=twsrc%5Etfw">#php</a> here is the demo app from my talk at <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> <a href="https://t.co/bB4MtfBEwV">https://t.co/bB4MtfBEwV</a></p>&mdash; Dimitris Savvopoulos (@dimsav) <a href="https://twitter.com/dimsav/status/1132046177954717696?ref_src=twsrc%5Etfw">May 24, 2019</a></blockquote>
                            <p class="has-margin-t60">After a short break <a href="https://twitter.com/anamus_" target="_blank"><strong>Antti Rössi</strong></a> followed with probably the best talk of the day. He raised some serious issues about software security and how to avoid them. I bet a lot of people were checking their source codes for vulnerabilities after this.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Here are the slides from my <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> presentation yesterday.<br><br>Link to Github repo with readme &amp; instructions (+ a bonus exploit that wasn&#39;t included in the presentation yesterday 😉) coming in a little while - stay tuned.<a href="https://t.co/zH5fYwKQDA">https://t.co/zH5fYwKQDA</a></p>&mdash; Antti Rössi (@anamus_) <a href="https://twitter.com/anamus_/status/1131849869675651072?ref_src=twsrc%5Etfw">May 24, 2019</a></blockquote>
                            <p class="has-margin-t60">Up next was <a href="https://twitter.com/julienbourdeau" target="_blank"><strong>Julien Bourdeau</strong></a> speaking about multi-tenant and multi-domain Laravel apps. The final talk was by <a href="https://twitter.com/adamwathan" target="_blank"><strong>Adam Wathan</strong></a> with yet another fine demo on how to design advanced components on VueJS.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Just uploaded the source code for my &quot;Advanced Vue Component Design&quot; talk at <a href="https://twitter.com/hashtag/LaraconEU?src=hash&amp;ref_src=twsrc%5Etfw">#LaraconEU</a> 🤙🏻<a href="https://t.co/7tGwgoah3K">https://t.co/7tGwgoah3K</a></p>&mdash; Adam Wathan (@adamwathan) <a href="https://twitter.com/adamwathan/status/1131921220767768576?ref_src=twsrc%5Etfw">May 24, 2019</a></blockquote>
                            <p class="has-margin-t60">We've been to a couple of conferences before, and there's always some talks that are just sub-par, but I can honestly say, it wasn't the case here. The quality of the speakers was excellent, all-round.</p>
                            <p>The venue was also really cool. An awesome movie theatre with a funky industrial design interior. It wasn't big, but it's coziness really added to the friendly atmosphere. The tapas was also great, in fact each meal in Madrid was mouth-watering. I guess that's one of the perks of being in Spain.</p>
                            <p>Best of all was the community. Everybody was really open-minded, talkative and just good people to hang out with. We made some new friends and found out a lot about the communities and projects around Europe. We can't wait to see them again. One thing's for sure: we'll definitely be back next year (we actually got our tickets this morning!)</p>
                            <figure>
                                <img src="{{ asset('media/blog/laraconeu-madrid-2019-tshirts.jpg') }}" alt="It was a nice surprise to see that the Laracon t-shirts had our company colours" />
                                <figcaption>It was a nice surprise to see that the Laracon t-shirts had our company colours.</figcaption>
                            </figure>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Further@LaraconEU Madrid 2019'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.peterilles')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription')
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "author": {
        "@type": "Person",
        "name": "Peter Illés"
    },
    "copyrightHolder": {
        "@type": "Corporation",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "{{ config('site.company.address.country') }}",
            "addressLocality": "{{ config('site.company.address.city') }}",
            "postalCode": "{{ config('site.company.address.postal_code') }}",
            "streetAddress": "{{ config('site.company.address.street_address') }}"
        },
        "alternateName": "{{ config('site.company.name') }}",
        "description": "{{ config('site.description.' . config('app.locale')) }}",
        "email": "{{ config('site.contact.email') }}",
        "founder": "Peter Illés and Norbert Zsombori",
        "foundingDate": "2013",
        "foundingLocation": "{{ config('site.company.address.city') }}, {{ config('site.company.address.country') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions",
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "datePublished": "2019-05-29T12:00:00",
    "dateModified": "2019-05-29T12:00:00",
    "description": "The 23rd of May was a special day for us, as we attended our first Laracon in Madrid. Laracon has always been high up on our conferences bucket list, but it just didn't work out for us. Until now.",
    "headline": "Further@LaraconEU Madrid 2019",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-rebranding.jpg') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Further Digital Solutions, Further, Laracon, Laravel",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Further@LaraconEU Madrid 2019",
    "publisher": {
        "@type": "Organization",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions"
    }
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "{{ localizedRoute('home') }}",
                "name": "Homepage"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('blog') }}",
                "name": "Blog"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}",
                "name": "Further@LaraconEU Madrid 2019"
            }
        }
    ]
}
</script>
@endpush



@push('content-scripts')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush
