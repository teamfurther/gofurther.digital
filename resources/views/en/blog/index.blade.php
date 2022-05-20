@extends('en.site')

@section('title', 'Blog Articles')
@section('description', 'Thoughts and insights from the Further team. This is where we share news and moments from our life and across technology, design, innovation and culture.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="blog__tag-selector">
                        <nav>
                            <a class="is-active" href="{{ route(getLang() . '.blog') }}">
                                All
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'startups-and-product-development']) }}">
                                Startups and Product Development
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'explained']) }}">
                                Explained
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'remote-work']) }}">
                                Remote work
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'agile']) }}">
                                Agile
                            </a>
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'development']) }}">
                                Development
                            </a>
                            <!-- <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'ux']) }}">
                                UX
                            </a> -->
                            <a href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'life-at-further']) }}">
                                Life at Further
                            </a>
                        </nav>
                        <select>
                            <option selected value="{{ route(getLang() . '.blog') }}">
                                Filter by category
                            </option>
                            <option value="{{ route(getLang() . '.blog') }}">
                                All
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'startups-and-product-development']) }}">
                                Startups and Product Development
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'explained']) }}">
                                Explained
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'remote-work']) }}">
                                Remote work
                            </option>
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'agile']) }}">
                                Agile
                            </option>
                            <!-- <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'development']) }}">
                                Development
                            </option> -->
                            <!-- <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'ux']) }}">
                                UX
                            </option> -->
                            <option value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'life-at-further']) }}">
                                Life at Further
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="posts">
                <div class="columns is-multiline">
                    @foreach($posts as $post)
                    <div class="column is-full-tablet is-half-widescreen is-hidden">
                        @include(getLang() . '.blog.excerpts.' . $post['slug'])
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="blog__pagination">
                        You are viewing <span class="blog__pagination__current"></span> out of <span class="blog__pagination__total"></span> posts
                        <div class="blog__pagination__bar"><span></span></div>
                        <a class="blog__pagination__btn btn is-cobalt">Load more&hellip;</a>
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
    "breadcrumb": {
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
    "description": "Thoughts and insights from the Further team. This is where we share news and moments from our life and across technology, design, innovation and culture.",
    "headline": "Blog",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, Digital product development, MVP development, Digital transformation, Technology, Design, Company culture",
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
        }
    ]
}
</script>
@endpush
