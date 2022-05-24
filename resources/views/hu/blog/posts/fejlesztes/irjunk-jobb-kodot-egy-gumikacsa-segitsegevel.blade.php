@section('title', 'Gumikacsa hibakeresési módszer: Hogyan segít a tanítás a tanulásban')
@section('description', 'Belefutottál egy olyan programozási gubancba, amelyet nem tudsz megoldani? Csak keress egy gumikacsát, és kezdj el hozzá beszélni a problémáiról. Hadd magyarázzam meg.')
@section('preview_image', asset('media/blog/cover-improve-how-you-code-by-using-a-rubber-duck-hu.png'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Írjunk jobb kódot… egy gumikacsa segítségével</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-01-04 12:00:00">2021 január 4</time> &middot; 3 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Történt már veled olyan, hogy a kódolás közben elakadtál és segítséget kértél egy tapasztaltabb kollégától, de ahogy magyaráztad neki a kódodat úgy válaszoltad meg magadnak a saját kérdéseid?</p>
                            <p>Bevallom őszintén velem már előfordult és ilyenkor mindig cikinek éreztem, hogy lényegében feleslegesen zavartam meg a kollégámat. Ha kicsit hátradöltem volna és elolvastam volna a kódot, magamtól is megtaláltam volna a helyes válaszokat.</p>
                            <p>Néha nagyon bele tudunk merülni a kódolásba, ilyenkor bekerülünk a "zónába" és csak írunk és írunk… de lényegében alig gondolkozunk azon, hogy mit miért is teszünk. Csak akkor kezdjük el jobban szemügyre venni a sorainkat, amikor valamit nem értünk, hogy miért nem működik, vagy amikor egy kis manó meg nem szólal a fejünkben, hogy "azért ezt csak nem így kéne csinálni", vagy "biztos van ennél elegánsabb megoldás".</p>
                            <p>Ilyenkor hátra kell dőlni, kilépni a zónából és megkeresni a régi gyerekkori barátunkat, a jó öreg gumikacsát. Gumikacsát?! Igen! Nem kötelező gumikacsa legyen, megteszi bármilyen tárgy ami egy kis időre a kollégánk lesz és csakúgy mint egy code review keretén belül, elmagyarázzuk neki, hogy mit miért tettünk.</p>
                            <p>Ilyenkor születnek azok az "Aha!" gondolatok, amikor lényegében saját magunk code review-oljuk a kódunkat. Ez a módszer nem helyettesíti a tényleges code review-t, mert ez a kód mégis a saját gyerekünk és mint minden jó szülőknek, a mi kódunk lesz számunkra is a legszebb és a legjobb, de nem árt egy kicsit nekünk is szemügyre venni még mielőtt másokkal is átnézetnénk a kódunkat.</p>
                            <p class="has-margin-t60">
                                <em>A code review vagy peer review egy olyan szoftver minőségbiztosítási módszer, amelynek során egy vagy több személy átnézi egy szoftvernek a részleges vagy teljes kódbázisát. Legalább az egyik személy más kell legyen mint a kód szerzője.</em>
                            </p>
                            <p>
                                <em>A code review célja a kód minőségének és karbantarthatóságának javítása, a szoftverhibák felderítése, a tudás átadása kollégák közt, illetve a kollektív felelősségérzet erősítése.</em>
                            </p>
                            <figure>
                                <img src="{{ asset('media/blog/improve-how-you-code-by-using-a-rubber-duck-rubber-duckies.jpg') }}" alt="A gumikacsa hibakeresési módszer egy kód hibakeresési módszer" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Szóval mi is ez a gumikacsa metódus (rubber duck debugging)?</h2>
                            <ul class="list has-margin-b30">
                                <li><b>1.</b> Vegyél, kérj kölcsön vagy lopj egy kollégától egy gumikacsát</li>
                                <li><b>2.</b> Rakd az asztalodra az új "kollégát"</li>
                                <li><b>3.</b> Ha úgy érzed, hogy elvesztél a kód rengetegben, hívd segítségül és kezd el neki magyarázni részletesen, hogy mit miért is tettél.</li>
                            </ul>
                            <p class="has-margin-b60">Egy jó tanács: ha irodában dolgozol több kollégával, előtte jobb ha szólsz nekik.</p>
                            <h2 class="heading-2 has-margin-b30">De miért működik?</h2>
                            <p>A miértre a válasz egyszerű. A szoftverfejlesztés komplex folyamatok összegzése, amit nagyon nehéz egy idő után követni. Amikor már messze elkalandoztunk és már úgy érezzük, hogy mi se értjük pontosan, hogy mit miért is csinálunk, akkor segít ha az elejétől kezdjük újra átgondolni, hogy mi is a célunk és mit és hogyan valósítottunk meg eddig.</p>
                            <p>Annál jobb metódus nincs is mint, hogy megpróbáljuk elmagyarázni a szoftver jelenlegi működését egy olyan "kollégának" aki semmit sem tud a szoftverről.</p>
                            <p>Neki egészen részletesen el kell magyarázni a projektet és ilyenkor lényegében magunknak is magyarázunk. Mi más felelne meg ennek a legjobban mint egy olyan "kolléga" aki aztán tényleg semmit nem tud a kódról (például egy gumikacsa)? Figyeljük meg, hogy amint sorról sorra magyarázzuk a kódot, egyre inkább kezd tisztulni a kép a saját fejünkben is.</p>
                            <p>Ha leblokkoltál és már tényleg nem tudod, hogy hogyan tovább, hívd segítségül a jó öreg gumikacsát, ő megoldja majd a problémát. Egy próbát megér.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Írjunk jobb kódot… egy gumikacsa segítségével'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.csongorur')
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
        "name": "Peter Illes"
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
    "datePublished": "2021-01-04T12:00:00",
    "dateModified": "2021-01-04T12:00:00",
    "description": "Belefutottál egy olyan programozási gubancba, amelyet nem tudsz megoldani? Csak keress egy gumikacsát, és kezdj el hozzá beszélni a problémáiról. Hadd magyarázzam meg.",
    "headline": "Gumikacsa hibakeresési módszer: Hogyan segít a tanítás a tanulásban",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-improve-how-you-code-by-using-a-rubber-duck-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Rubber duck debugging, Debugging method, Debugging, Debugging method names, ",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Gumikacsa hibakeresési módszer: Hogyan segít a tanítás a tanulásban",
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
                "name": "Főoldal"
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
                "name": "Gumikacsa hibakeresési módszer: Hogyan segít a tanítás a tanulásban"
            }
        }
    ]
}
</script>
@endpush
