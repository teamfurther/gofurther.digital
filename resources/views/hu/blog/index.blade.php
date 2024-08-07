@extends('hu.site')

@section('title', 'Blog')
@section('description', 'Gondolatok és írások a Further csapatától. Blogunkban osztunk meg híreket és pillanatokat mindennapjainkról, technológiáról, designról, innovációról és kultúráról.')

@section('content')
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="blog__tag-selector">
                        <nav>
                            <a class="is-active" href="{{ route(getLang() . '.blog') }}">
                                Összes
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'startup-es-termekfejlesztes']) }}">
                                Startup és termékfejlesztés
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'ux']) }}">
                                UX
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'fejlesztes']) }}">
                                Fejlesztés
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'digitalis-transzformacio']) }}">
                                Digitális transzformáció
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elmagyarazva']) }}">
                                Elmagyarázva
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'tavmunka']) }}">
                                Távmunka
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elet-a-furthernel']) }}">
                                Élet a Furthernél
                            </a>
                        </nav>
                        <select>
                            <option selected value="{{ route(getLang() . '.blog') }}">
                                Szűrés címke szerint
                            </option>
                            <option selected value="{{ route(getLang() . '.blog') }}">
                                Összes
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'startup-es-termekfejlesztes']) }}">
                                Startup és termékfejlesztés
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'ux']) }}">
                                UX
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'fejlesztes']) }}">
                                Fejlesztés
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'digitalis-transzformacio']) }}">
                                Digitális transzformáció
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elmagyarazva']) }}">
                                Elmagyarázva
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'tavmunka']) }}">
                                Távmunka
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'elet-a-furthernel']) }}">
                                Élet a Furthernél
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="posts">
                <div class="columns is-multiline">
                    @foreach($posts as $post)
                        <div class="column is-flex is-6-tablet is-4-widescreen is-hidden">
                        @include(getLang() . '.blog.excerpts.' . $post['path'] . '.' . $post['slug'])
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="blog__pagination">
                        <span class="blog__pagination__current"></span> / <span class="blog__pagination__total"></span> cikk
                        <div class="blog__pagination__bar"><span></span></div>
                        <a class="blog__pagination__btn btn is-cobalt">További cikkek betöltése&hellip;</a>
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
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, Digitális transzformáció",
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
