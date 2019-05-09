@extends('hu.site')

@section('title', 'Terms of Use')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Felhasználási feltételek</h1>
                    <p>A honlapon található információ kizárólag általános tájékoztató jellegű a C4WEB STUDIO SRL (Further Digital Solutions) társaságról, partnereiről és az általuk kínált szolgáltatásokról.</p>
                    <p>Annak ellenére, hogy megtettük az összes intézkedést a megadott információ pontossága érdekében, ez nem képez semmilyen formájú tanácsadást, ajánlást, képviseletet, jóváhagyását vagy megegyezést a Further Digital Solutions részéről.</p>
                    <p>A bemutatott információ megbízhatónak tekinthető, de bármikor módosítható előzetes értesítés nélkül. A Further Digital Solutions nem garantál ennek teljességéért vagy pontosságáért. A honlaphoz való hozzáférés által Ön elfogadja, hogy a Further Digital Solutions nem vállal felelősséget semmilyen közvetlen, közvetett vagy következményes kárért, amely a honlapon található információ és tartalmak használatából, vagy a honlapon levő linkeken keresztül elért más internetes tartalmak hozzáféréséből származik.</p>
                    <p>A honlapon található tartalom szerzői jogai a Further Digital Solutions társaságot illeti. Bárki lemásolhatja a tartalom bármely részét, az alábbi feltételek mellett:</p>
                    <ul class="list has-bullets">
                        <li>A tartalmat kizárólag nem kereskedelmi célokra szabad felhasználni;</li>
                        <li>A másolatoknak hivatkozniuk kell az eredeti tartalomban található összes szerzői jogra vagy egyéb szellemi tulajdonjogra;</li>
                        <li>A jelen honlapon leírt termékek a Further Digital Solutions vagy más harmadik felek által fenntartott szellemi tulajdonjogok tárgyát képezhetik. Ezen szellemi tulajdonjogok tekintetében nem nyújtunk semmilyen licencet;</li>
                        <li>A honlapon levő képek, fotók, videók, logók és grafikák szerzői jogvédelem alatt állnak, és a tulajdonos(ok) írásos engedélye nélkül semmilyen módon nem másolhatók és nem tulajdoníthatók el.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
                "@id": "{{ localizedRoute('terms') }}",
                "name": "Felhasználási feltételek"
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
    "headline": "Felhasználási feltételek",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Web design, Webfejlesztés",
    "mainEntityOfPage": "{{ localizedRoute('terms') }}",
    "name": "Terms of Use",
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
                "@id": "{{ localizedRoute('terms') }}",
                "name": "Felhasználási feltételek"
            }
        }
    ]
}
</script>
@endpush
