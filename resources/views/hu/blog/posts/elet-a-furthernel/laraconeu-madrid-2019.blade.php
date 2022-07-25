@section('title', 'Élményeink a 2019-es LaraconEU Madrid konferenciáról')
@section('description', 'Május 23-a különleges nap volt számunkra, mivel részt vettünk az első Laracon találkozónkon Madridban. A Laracon mindig is ott volt a konferencia bakancslistánkon, de nem sikerült eljutnunk... egészen mostanáig.')
@section('preview_image', route('generate-cover', ['title' => 'Élménybeszámoló a LaraconEU Madrid 2019-ről']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Élménybeszámoló a LaraconEU Madrid 2019-ről</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-05-29 12:00:00">2019 május 29</time> &middot; 5 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Május 23-a különleges nap volt számunkra, mivel részt vettünk az első Laracon találkozónkon Madridban. 2014 óta használjuk a Laravelt (4.2-es verzió), az egyik <a href="{{ localizedRoute('about') }}#laravel-vue">legkedveltebb technológiánk</a>, és mi is aktívan részt veszünk a helyi közösségben, ezért a Laracon mindig is ott volt a konferencia bakancslistánkon, de mostanáig nem sikerült eljutnunk.</p>
                            <p>Május 22-én korán érkeztünk, egy hosszú séta során felfedeztük Madridot és megkóstoltunk néhány fantasztikus paellát. Ezután elmentünk a Teatros Luchanaba egy kapcsolatépítési estre, a remek italokat és tapast a <a href="https://twitter.com/Cyberduck_uk" target="_blank">Cyber Duck</a> finanszírozta. Nagyszerű volt találkozni olyan új emberekkel, akik hasonlóan gondolkodnak és ugyannyira kedvelik a Laravelt, mint mi.</p>
                            <figure>
                                <img src="{{ asset('media/blog/laraconeu-madrid-2019-teatros-luchana.jpg') }}" alt="A Teatros Luchana fantasztikus helyszín volt, nagyszerű ipari formatervezéssel" />
                                <figcaption>A Teatros Luchana fantasztikus helyszín volt, nagyszerű ipari formatervezéssel</figcaption>
                            </figure>
                            <p>A tényleges konferencia a következő reggel kezdődött. Gyors reggeli és néhány további ismerkedési kör után, <a href="https://twitter.com/freekmurze" target="_blank"><strong>Freek Van der Herten</strong></a> kezdte a beszédek sorát a Supercharging Common Controllers témával. Néhány a tiszta kódot érintő „best practice" után Freek három szuper csomagot mutatott be, amit a <a href="https://spatie.be" target="_blank">Spatie-nél</a> fejlesztettek. Amit ők a Laravel open-source közösségért tesznek fantasztikus és nagyon kellemes volt elbeszélgetni velük a szünetek alatt.</p>
                            <blockquote class="twitter-tweet has-margin-b60" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Here are the slides I used during my talk on Supercharging common controllers at <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> Madrid<a href="https://t.co/bZ6eNMP2Bf">https://t.co/bZ6eNMP2Bf</a><a href="https://twitter.com/hashtag/laraconeu?src=hash&amp;ref_src=twsrc%5Etfw">#laraconeu</a> <a href="https://t.co/QX57ful4My">pic.twitter.com/QX57ful4My</a></p>&mdash; Freek Van der Herten 🎆 (@freekmurze) <a href="https://twitter.com/freekmurze/status/1131475826824884224?ref_src=twsrc%5Etfw">May 23, 2019</a></blockquote>
                            <p class="has-margin-t60">Ezután <a href="https://twitter.com/christophrumpel" target="_blank"><strong>Christoph Rumpel</strong></a> következett a Laravel Core Adventurest képviselve, beszéde egy részletes betekintés volt a Laravel keretrendszer belső részeinek működésébe. Egy kiváló előadás volt, és talán itt az ideje egy előfizetésnek is.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Thanks, <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> for another awesome conference and for having me as a speaker. I had a wonderful time and enjoyed being part of this lovely community. ❤<br><br>Here are the slides from my talk Laravel&#39;s core.<a href="https://t.co/FpZCCra9bZ">https://t.co/FpZCCra9bZ</a></p>&mdash; Christoph Rumpel  🤠 (@christophrumpel) <a href="https://twitter.com/christophrumpel/status/1133268788772786176?ref_src=twsrc%5Etfw">May 28, 2019</a></blockquote>
                            <p class="has-margin-t60"><a href="https://twitter.com/krystalcampioni" target="_blank"><strong>Krystal Campioni</strong></a> felhívta a figyelmet a hozzáférhetőséggel kapcsolatos kérdésekre a modern weboldalakon, és megmutatta nekünk, hogyan használjuk a színelméletet néhány probléma elkerüléséhez, feldobva egy kis VueJS-e.</p>
                            <p>Nincs Laracon új csomag bemutatása nélkül és <a href="https://twitter.com/SandervHooft" target="_blank"><strong>Sander van Hooft</strong></a> pontosan ezt tette. Beszélt egy új Laravel Cashier integrációról a Mollie-hoz, amely európai országspecifikus fizetési lehetőséget nyújt.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">For the folks who watched my talk today about accessible color schemes with <a href="https://twitter.com/hashtag/VueJS?src=hash&amp;ref_src=twsrc%5Etfw">#VueJS</a> at <a href="https://twitter.com/hashtag/LaraconEU?src=hash&amp;ref_src=twsrc%5Etfw">#LaraconEU</a>, you can find the slides + examples code here: <a href="https://t.co/r5aXBXZb6w">https://t.co/r5aXBXZb6w</a></p>&mdash; Krystal Campioni (@krystalcampioni) <a href="https://twitter.com/krystalcampioni/status/1131518459400138752?ref_src=twsrc%5Etfw">May 23, 2019</a></blockquote>
                            <p class="has-margin-t60"><a href="https://twitter.com/enunomaduro" target="_blank"><strong>Nuno Maduro</strong></a> zárta a reggeli részt a Hatékony PHP írásabeszéddel, amelyben a védekező programozás fontosságáról beszélt „csak akkor, amikor szükség van rá", és arról, hogy miért kellene mindenkinek a telepítési folyamatokba integrálni a statikus elemző eszközöket, mint a PHPStan. Bemutatta a <a href="https://github.com/nunomaduro/phpinsights">PHPInsights-ot</a> is, egy másik statikus elemző eszközt, amelyet ő fejleszt és karbantart. Ajánljuk, hogy mindenki nézzen utána, mert mi biztosan használni fogjuk.</p>
                            <p><a href="https://twitter.com/marcelpociot" target="_blank"><strong>Marcel Pociot-nak</strong></a> nehéz dolga volt első előadóként a pazar tapas ebéd után, de megbírkózott a feladattal, a Laracon Online bemutatóját ismételte meg a Valós idejű applikációk építéséről a Laravelben.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">If you want to learn more about the internals of <a href="https://twitter.com/freekmurze?ref_src=twsrc%5Etfw">@freekmurze</a> and my WebSocket package, check out our blog post that dives into a lot of code of the package. It's probably one of the most polished packages I've ever worked on. <a href="https://t.co/kf0NLRnFXv">https://t.co/kf0NLRnFXv</a></p>&mdash; Marcel Pociot 🎆 (@marcelpociot) <a href="https://twitter.com/marcelpociot/status/1131539634335473664?ref_src=twsrc%5Etfw">May 23, 2019</a></blockquote>
                            <p class="has-margin-t60">A következőkben <strong>Vitor Caneco</strong> beszélt a Tailwind CSS-ről és a utiliy-first CSS keretrendszerek előnyeiről, majd őt követette <a href="https://twitter.com/dimsav" target="_blank"><strong>Dimitris Savvopoulos</strong></a> egy event-sourcing a Laravelben bemutatóval.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">In case you want to play with <a href="https://twitter.com/hashtag/eventSourcing?src=hash&amp;ref_src=twsrc%5Etfw">#eventSourcing</a> and <a href="https://twitter.com/hashtag/php?src=hash&amp;ref_src=twsrc%5Etfw">#php</a> here is the demo app from my talk at <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> <a href="https://t.co/bB4MtfBEwV">https://t.co/bB4MtfBEwV</a></p>&mdash; Dimitris Savvopoulos (@dimsav) <a href="https://twitter.com/dimsav/status/1132046177954717696?ref_src=twsrc%5Etfw">May 24, 2019</a></blockquote>
                            <p class="has-margin-t60">Rövid szünet után <a href="https://twitter.com/anamus_" target="_blank"><strong>Antti Rössi</strong></a> következett valószínűleg a nap legjobb beszédével. Komoly problémákat vetett fel a szoftverbiztonsággal és ezek elkerülésével kapcsolatosan. Fogadok, hogy ezután sokan ellenőrizték a forráskódjaikat a biztonsági réseket illetően.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Here are the slides from my <a href="https://twitter.com/LaraconEU?ref_src=twsrc%5Etfw">@LaraconEU</a> presentation yesterday.<br><br>Link to Github repo with readme &amp; instructions (+ a bonus exploit that wasn&#39;t included in the presentation yesterday 😉) coming in a little while - stay tuned.<a href="https://t.co/zH5fYwKQDA">https://t.co/zH5fYwKQDA</a></p>&mdash; Antti Rössi (@anamus_) <a href="https://twitter.com/anamus_/status/1131849869675651072?ref_src=twsrc%5Etfw">May 24, 2019</a></blockquote>
                            <p class="has-margin-t60">A következő <a href="https://twitter.com/julienbourdeau" target="_blank"><strong>Julien Bourdeau</strong></a> volt, aki multi-tenant és multi-domain Laravel alkalmazásokról beszélt. Az utolsó előadást <a href="https://twitter.com/adamwathan" target="_blank"><strong>Adam Wathan</strong></a> tartotta egy újabb csodás bemutatóval komplex VueJS  komponensek tervezéséről.</p>
                            <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en"><p lang="en" dir="ltr">Just uploaded the source code for my &quot;Advanced Vue Component Design&quot; talk at <a href="https://twitter.com/hashtag/LaraconEU?src=hash&amp;ref_src=twsrc%5Etfw">#LaraconEU</a> 🤙🏻<a href="https://t.co/7tGwgoah3K">https://t.co/7tGwgoah3K</a></p>&mdash; Adam Wathan (@adamwathan) <a href="https://twitter.com/adamwathan/status/1131921220767768576?ref_src=twsrc%5Etfw">May 24, 2019</a></blockquote>
                            <p class="has-margin-t60">Már voltunk néhány konferencián, és mindig volt egy pár átlagon aluli beszéd, de őszintén kijelenthetem, hogy ez nem volt így ebben az esetben. Az előadók minősége kiváló volt az egész esemény idején.</p>
                            <p>A helyszín is nagyon vagány volt. Egy fantasztikus filmszínház eredeti ipari formatervezéssel. Nem volt nagy, de a barátságos légköre igazán kellemes volt. A tapasok is zseniálisan jók voltak, sőt Madridban minden étkezés csodás volt. Azt hiszem, ez az egyik előnye, hogy Spanyolországban van az ember.</p>
                            <p>A legjobb az egészben a közösség volt. Mindenki igazán nyitott, beszédes volt és szuper emberekkel találkoztunk. Pár új barátot is szereztünk, és sokat tudtunk meg az európai közösségekről és projektekről. Alig várjuk, hogy újra találkozhassunk velük. Egy dolog biztos: jövőre mindenképpen visszajövünk (mi több, ma reggel meg is vettük a jegyeinket!)</p>
                            <figure>
                                <img src="{{ asset('media/blog/laraconeu-madrid-2019-tshirts.jpg') }}" alt="Kellemes meglepetés volt, hogy a Laracon pólók cégünk színeit viselik" />
                                <figcaption>Kellemes meglepetés volt, hogy a Laracon pólók cégünk színeit viselik.</figcaption>
                            </figure>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Élménybeszámoló a LaraconEU Madrid 2019-ről'])
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
    "description": "Május 23-a különleges nap volt számunkra, mivel részt vettünk az első Laracon találkozónkon Madridban. A Laracon mindig is ott volt a konferencia bakancslistánkon, de nem sikerült eljutnunk... egészen mostanáig.",
    "headline": "Élménybeszámoló a LaraconEU Madrid 2019-ről",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-rebranding.jpg') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Further Digital Solutions, Further, Rebranding",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Élménybeszámoló a LaraconEU Madrid 2019-ről",
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
                "name": "Élménybeszámoló a LaraconEU Madrid 2019-ről"
            }
        }
    ]
}
</script>
@endpush



@push('content-scripts')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush
