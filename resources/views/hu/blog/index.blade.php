@extends('hu.site')

@section('title', 'Blog')
@section('description', 'Gondolatok és írások a Further csapatától. Blogunkban osztunk meg híreket és pillanatokat mindennapjainkról, technológiáról, designról, innovációról és kultúráról.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Gondolatok és firkálások</h1>
                </div>
            </div>
            <div class="posts">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}"><img src="{{ asset('media/blog/thumb-laraconeu-madrid-2019.png') }}" alt="Élménybeszámoló a LaraconEU Madrid 2019-ről" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}">Élménybeszámoló a LaraconEU Madrid 2019-ről</a></h3>
                                <p class="post__excerpt">Május 23-a különleges nap volt számunkra, mivel részt vettünk az első Laracon találkozónkon Madridban. A Laracon mindig is ott volt a konferenciák kívánságlistánkon, de nem sikerült eljutnunk... egészen mostanáig.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'uj-kontosben-koszontjuk-a-nyarat']) }}"><img src="{{ asset('media/blog/thumb-rebranding.png') }}" alt="Új köntösben köszöntjük a nyarat" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'uj-kontosben-koszontjuk-a-nyarat']) }}">Új köntösben köszöntjük a nyarat</a></h3>
                                <p class="post__excerpt">Nemcsak azért döntöttünk cégünk arculatváltása mellett, mert ez elengedhetetlen a növekedéshez, hanem főleg azért, mert a régi arculat már nem képviselt minket eléggé.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'uj-kontosben-koszontjuk-a-nyarat']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'mitol-lesz-jo-egy-agilis-szoftverspecifikacio']) }}"><img src="{{ asset('media/blog/thumb-agile-software-specification.jpg') }}" alt="Mitől lesz jó egy (agilis) szoftverspecifikáció?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'mitol-lesz-jo-egy-agilis-szoftverspecifikacio']) }}">Mitől lesz jó egy (agilis) szoftverspecifikáció?</a></h3>
                                <p class="post__excerpt">A vízesés modell esetében egy szoftver minőségi és időben történő szállításának biztosítása érdekében ki kellett dolgozni a szoftverspecifikációt a legutolsó részletig. De mi a helyzet ha agilis környezetben fejlesztünk?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'mitol-lesz-jo-egy-agilis-szoftverspecifikacio']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}"><img src="{{ asset('media/blog/thumb-custom-development-vs-ootb.jpg') }}" alt="Egyedi fejlesztés vagy dobozos szoftver?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Egyedi fejlesztés vagy dobozos szoftver?</a></h3>
                                <p class="post__excerpt">Valamikor minden vállalat eléri azt a pontot, amikor a növekedés érdekében be kell fektetnie a szoftveres infrastruktúrájába. Megpróbálunk Önnek segíteni abban, hogy eldöntse, hogy az egyedi fejlesztés vagy egy dobozos megoldás a megfelelő vállalatának.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
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
                    "@id": "{{ localizedRoute('blog') }}",
                    "name": "Blog"
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
    "description": "Gondolatok és írások a Further csapatától. Blogunkban osztunk meg híreket és pillanatokat mindennapjainkról, technológiáról, designról, innovációról és kultúráról.",
    "headline": "Blog",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Web design, Webfejlesztés",
    "mainEntityOfPage": "{{ localizedRoute('blog') }}",
    "name": "Blog",
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
                "@id": "{{ localizedRoute('blog') }}",
                "name": "Blog"
            }
        }
    ]
}
</script>
@endpush
