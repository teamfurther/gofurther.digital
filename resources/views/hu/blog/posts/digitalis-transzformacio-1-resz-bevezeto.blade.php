@section('title', 'Digitális transzformáció sorozat 1. rész – Bevezető')
@section('description', 'Üdvözlünk a digitális átalakulással kapcsolatos sorozatunk első részében. Merüljünk is el a témában, és kezdjük a digitális átalakulás valós jelentésével.')
@section('preview_image', asset('media/blog/cover-digital-transformation-1-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-digital-transformation.png') }}" srcset="{{ asset('media/blog/featured-digital-transformation-768w.png') }} 768w, {{ asset('media/blog/featured-digital-transformation-1000w.png') }} 1000w" sizes="100vw" alt="Digitális transzformáció sorozat 1. rész – Bevezető" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digitális transzformáció 1. rész – Bevezető</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-06-25 12:00:00">2019 június 25</time> &middot; 4 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Üdvözlünk a digitális transzformációval kapcsolatos sorozatunk első részében. Ha egy bizonyos cikket keresel a sorozatból, akkor itt megtalálod a linkeket:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><strong>1. rész – Bevezető</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">2. rész – Vállalati kultúra</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}">3. rész – Üzleti folyamatok</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}">4. rész – Technológia</a></li>
                            </ul>
                            <p>Merüljünk is el a témában, és kezdjük a digitális átalakulás valós jelentésével. A „digitális” szó kapcsán a legtöbb embernek az analóg rendszerektől való elhatárolódás jut az eszébe. De <a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}">ez csak egy kis része</a> a digitális transzformációnak.</p>
                            <p>Számunkra a digitális átalakulás a cég innovációs készségét és az új technológiákhoz való alkalmazkodási képességét jelenti. Tehát azt jelenti, hogy mennyire nyitott a változásokra, és milyen gyorsan képes végrehajtani ezeket a változásokat.</p>
                            <p>Az üzlet gyorsabban változik, mint valaha. Úgy tűnik, hogy minden héten egy új kifejezés lesz felkapott: IoT, Big Data, Ipar 4.0, gépi tanulás, stb.</p>
                            <p class="has-margin-b60">Egyszerűen lemaradnak azok a vállalatok, amelyek nem nyitottak az új változások bevezetésére. Számtalan példa van olyan cégekre, amelyek elszalasztották az esélyüket emiatt: a Blockbuster, a Nokia vagy a RadioShack.</p>
                            <h2 class="heading-3 has-margin-b30">Ne járjon úgy, mint a Kodak</h2>
                            <p>A kedvenc példám azonban a Kodak. A Kodak fő tevékenysége a film- és az utófeldolgozási szolgáltatások értékesítése volt. Arról voltak híresek, hogy ingyen fényképezőgépeket osztogattak annak érdekében, hogy az emberek rákattanjanak a saját „Kodak pillanatok" előhívására. Amikor megjelentek a digitális fényképezőgépek és később a kamerás telefonok, az emberek abbahagyták a képek nyomtatását és elkezdték az online megosztást. A Kodak 2012-ben csődeljárást indított.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-kodak.jpg') }}" alt="A Kodak alaptevékenysége a film értékesítése volt, de a digitalizálás halálra ítélte" />
                                <figcaption>A Kodak alaptevékenysége a film értékesítése volt, de a digitalizálás halálra ítélte</figcaption>
                            </figure>
                            <p>A bukásuk nem amiatt következett be, hogy nem próbáltak új technológiákat fejleszteni. 1975-ben az első digitális fényképezőgép prototípusát Steve Sasson dolgozta ki, aki pont a Kodaknál dolgozott mérnökként. A The New York Times-nak 2008-ban adott <a href="http://www.nytimes.com/2008/05/02/technology/02kodak.html" target="_blank">interjújában elmondta</a>, hogy a Kodak menedzsment reakciója erre ez volt: „aranyos ötlet – de ne mondd el senkinek”.</p>
                            <p class="has-margin-b60">Nyilvánvaló, hogy a Kodak bukása nem a technológia miatt volt. Mindez azért következett be, mert a saját sikerük elvakította őket, és nem vették figyelembe az állandóan változó digitális világot, amelyben élünk. Nem voltak felkészülve a változásra.</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">2. rész – Vállalati kultúra &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Digitális transzformáció 1. rész – Bevezető'])
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "datePublished": "2019-06-25T12:00:00",
    "dateModified": "2019-06-25T12:00:00",
    "description": "Üdvözöljük a digitális átalakulással kapcsolatos 4 részes sorozatunk első részében. Merüljünk is el a temába, és kezdjük a digitális átalakulás valós jelentésével.",
    "headline": "Digitális transzformáció sorozat 1. rész – Bevezető",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-digital-transformation-1-hu.jpg') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális transzformáció, Digitális átalakulás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Digitális transzformáció sorozat 1. rész – Bevezető",
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
                "name": "Digitális transzformáció sorozat 1. rész – Bevezető"
            }
        }
    ]
}
</script>
@endpush
