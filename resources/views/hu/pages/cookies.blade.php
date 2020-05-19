@extends('hu.site')

@section('title', 'Cookie szabályzat')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Cookie szabályzat</h1>
                    <p>Az oldal látogatása cookie-kat vagy webes jelzőket generálhat, amelyek a számítógépén vagy a mobileszközén tárolódnak. A munkamenet-cookie-jai  "memóriájaként" szolgálnak a honlapnak, így egyetlen alkalommal történik az adatlekérdezés, és ez a böngészési munkamenet emlékeztetőjeként tárolódik.</p>
                    <p>Elemzésekhez (analytics) szükséges cookie-kat használunk annak érdekében, hogy megértsük, hány ember látogatja honlapunkat, mit néznek, hogyan találnak meg minket, és hogyan teljesít a honlapunk. Ez névtelen adat, és nem használható fel az egyének azonosítására.</p>
                    <p>Az alábbiakban az általunk használt cookie-k típusát olvashatja a felhasználási céljukkal:</p>
                    <table class="table is-fixed has-margin-b60">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">Szolgáltató</th>
                                <th scope="col" style="width: 15%;">Cookie</th>
                                <th scope="col" style="width: 15%;">Lejárati idő</th>
                                <th scope="col" style="width: 45%;">Magyarázat</th>
                                <th scope="col" style="width: 20%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Provider" rowspan="3">Further</td>
                                <td data-label="Cookie">laravel_session<span class="is-hidden-tablet">, laravel_token, XSRF_TOKEN</span></td>
                                <td data-label="Expiration" rowspan="3">2 óra<br />(vagy a jelenlegi böngésző session)</td>
                                <td rowspan="3">Ezek olyan session cookie-k, amelyek honlapunk számára szükségesek az oldalbetöltések közötti adatátadáshoz</td>
                                <td class="is-hidden-mobile" rowspan="3"></td>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td scope="row" data-label="Cookie">laravel_token</td>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td scope="row" data-label="Cookie">XSRF_TOKEN</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Provider" rowspan="2">Google Analytics</td>
                                <td scope="row" data-label="Cookie">_ga<span class="is-hidden-tablet">, _gid</span></td>
                                <td scope="row" data-label="Expiration">2 év<span class="is-hidden-tablet">, 24 óra</span></td>
                                <td scope="row" rowspan="2">A látogatók holnapfelhasználásáról információt gyűjtünk és a Google Analytics szolgáltatást használjuk a honlap javítása érdekében. A cookie-kat névtelen formában gyűjtjük, beleértve a honlap látogatóinak számát, milyen oldalról találtak a látogatók erre a honlapra és a meglátogatott oldalakat.</td>
                                <td scope="row" rowspan="2">Ha le szeretnéd tiltani azt, hogy a Google Analytics nyomon kövessen az összes honlapon, akkor látogass el <a href="http://tools.google.com/dlpage/gaoptout" target="_blank">erre a linkre</a>.</td>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td scope="row" data-label="Cookie">_gid</td>
                                <td scope="row" data-label="Expiration">24 óra</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="heading-2">A cookie-k kikapcsolása</h2>
                    <p>Minden modern böngésző lehetővé teszi a cookie-beállítások módosítását. Az alábbi linkek hasznosak lehetnek abban, hogy megértsd, hogyan frissítheted a böngésző cookie-beállításait:</p>
                    <ul class="list has-bullets">
                        <li><a href="https://support.google.com/chrome/answer/95647?hl=en" target="_blank">Cookie-beállítások Chrome-ban</a></li>
                        <li><a href="https://support.mozilla.com/en-US/kb/enable-and-disable-cookies-website-preferences" target="_blank">Cookie-beállítások Firefox-ban</a></li>
                        <li><a href="https://www.opera.com/help/tutorials/security/privacy/" target="_blank">Cookie-beállítások Operaban</a></li>
                        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank">Cookie-beállítások Safariban</a></li>
                        <li><a href="https://privacy.microsoft.com/en-us/windows-10-microsoft-edge-and-privacy" target="_blank">Cookie-beállítások Edge-ben</a></li>
                        <li><a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Cookie-beállítások Internet Explorerben</a></li>
                    </ul>
                    <p>Ha közvetlenül kapcsolatba szeretnél lépni velünk a cookie-k felhasználásával kapcsolatban, kérjük, írjál nekünk a következő címre: <a href="mailto:hello@gofurther.digital">hello@gofurther.digital</a>.</p>
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
                "@id": "{{ localizedRoute('cookies') }}",
                "name": "Cookie szabályzat"
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
    "headline": "Cookie szabályzat",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('cookies') }}",
    "name": "Cookie szabályzat",
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
                "@id": "{{ localizedRoute('cookies') }}",
                "name": "Cookie szabályzat"
            }
        }
    ]
}
</script>
@endpush
