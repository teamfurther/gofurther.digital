@extends('hu.site')

@section('title', 'Adatvédelmi szabályzat')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Adatvédelmi szabályzat</h1>
                    <h2 class="heading-2 has-margin-b30">Bevezető</h2>
                    <p>A C4WEB STUDIO SRL (Further Digital Solutions) szigorúan tiszteletben tartja a személyes adatok bizalmasságát. Kérjük, vedd fel velünk a kapcsolatot, ha bármilyen kérdésed vagy észrevételed van az adatvédelmi szabályzattal kapcsolatban.</p>
                    <p class="has-margin-b60">A jelen adatvédelmi szabályzat meghatározza, hogy a Further Digital Solutions hogyan dolgozza fel a személyes adatokat, és kizárólag a Further Digital Solutions által a Further honlapon gyűjtött személyes adatokra vonatkozik. A jelen adatvédelmi szabályzat nem vonatkozik a Further által bármilyen más eszközzel vagy más honlapon keresztül gyűjtött személyes adatokra. A Further Digital Solutions által gyűjtött összes személyes adatot a hatályos adatvédelmi jogszabályoknak megfelelően használja.</p>
                    <h2 class="heading-2 has-margin-b30">Adatkezelő</h2>
                    <p>A Further weboldal adatkezelője:</p>
                    <p>{{ config('site.company.name') }}<br />
                        {{ config('site.company.address.postal_code') }} {{ config('site.company.address.city') }} ({{ config('site.company.address.country') }}), {{ config('site.company.address.street_address') }}<br />
                        Cégjegyzékszám: {{ config('site.company.regno') }}<br />
                        Adószám: {{ config('site.company.vatno') }}
                    </p>
                    <p class="has-margin-b60">A Further Digital Solutions társaságnál személyes adataid csak a menedzsment csapat számára hozzáférhetők. Személyes adataid nem lesznek elérhetők harmadik felek vagy adatfeldolgozók számára.</p>
                    <h2 class="heading-2 has-margin-b30">Személyes adatok felhasználása</h2>
                    <p>A Further honlap által a Further Digital Solutions társaságnak szolgáltatott személyes adatokat a gyűjtés időpontjában megjelölt célokra használják. Továbbá a személyes adatok felhasználhatók statisztikai elemzésekhez.</p>
                    <p>A Further Digital Solutions a következő célokra gyűjti és dolgozza fel a személyes adatokat:</p>
                    <ul class="list has-bullets has-margin-b60">
                        <li>termékek és szolgáltatások nyújtása, beleértve marketing szolgáltatások, hirdetések és kedvezmények, kivéve ha a felhasználó letiltja az ilyen jellegű értesítéseket;</li>
                        <li>az önéletrajzok és az állásokra jelentkezők adatbázisának felépítése (karrier oldal).</li>
                    </ul>
                    <h2 class="heading-2 has-margin-b30">Beleegyezés</h2>
                    <p class="has-margin-b60">A felhasználók a Further Digital Solutions társaságnak tett személyes adatszolgáltatás által beleegyeznek ezen adatok feldolgozásába a Further Digital Solutions által a jelen adatvédelmi szabályzat szerint.</p>
                    <h2 class="heading-2 has-margin-b30">A személyes adatok ellenőrzése, frissítése és módosítása</h2>
                    <p>A következő jogaid vannak a személyes adataival kapcsolatban:</p>
                    <ul class="list has-bullets">
                        <li>megnézni, milyen esetleges adataink vannak rólad;</li>
                        <li>módosítani/ frissíteni az adataidat;</li>
                        <li>töröltetni a veled kapcsolatos összes adatot;</li>
                        <li>adatátviteli kérelmet tenni;</li>
                        <li>kifejezni bármilyen aggodalmat az adatai használatával kapcsolatban.</li>
                    </ul>
                    <p>Ha bármikor kérdésed van a fentiekkel kapcsolatban, akkor egyszerűen küldd el a kérést e-mailben a következő címre: <a href="mailto:{{ config('mail.to') }}">{{ config('mail.to') }}</a>.</p>
                    <p class="has-margin-b60">A személyes adatok ellenőrzése, frissítése vagy módosítása a kérelem megérkezésétől számított 40 napon belül történik.</p>
                    <h2 class="heading-2 has-margin-b30">Linkek harmadik felek honlapjaira</h2>
                    <p>A jelen adatvédelmi szabályzat kizárólag a Further Digital Solutions által gyűjtött személyes adatokra vonatkozik, és nem vonatkozik harmadik felek honlapjaira, amelyekhez a felhasználók hozzáférhetnek a jelen honlapról.</p>
                    <p class="has-margin-b60">A Further Digital Solutions nem vállal felelősséget harmadik felek honlapjainak adatvédelmi szabályzataiért. A Further Digital Solutions azt tanácsolja a felhasználóknak, hogy a személyes adatok regisztrálása előtt olvassák el a honlapok adatvédelmi szabályzatait.</p>
                    <h2 class="heading-2 has-margin-b30">Értesítés a változásokról</h2>
                    <p>A Further Digital Solutions értesíti az összes tagot az adatvédelmi szabályzat összes változásáról. Ha a Further Digital Solutions úgy dönt, hogy megváltoztatja az adatvédelmi szabályzatát, akkor ezeket a változásokat a jelen oldalon közli annak érdekében, hogy a felhasználó mindig tudja, hogyan kerülnek felhasználásra személyes adatai a Further Digital Solutions által.</p>
                    <p>Ha közvetlenül kapcsolatba szeretnél lépni velünk az adatvédelmi szabályzattal kapcsolatban, kérjük, írjál nekünk a következő címre: <a href="mailto:{{ config('mail.to') }}">{{ config('mail.to') }}</a>.</p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact')
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "author": {
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
    "breadcrumb": {
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
                "@id": "{{ localizedRoute('privacy') }}",
                "name": "Adatvédelmi szabályzat"
                }
            }
        ]
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
    "headline": "Adatvédelmi szabályzat",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('privacy') }}",
    "name": "Adatvédelmi szabályzat",
    "publisher": {
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
                "@id": "{{ localizedRoute('privacy') }}",
                "name": "Adatvédelmi szabályzat"
            }
        }
    ]
}
</script>
@endpush
