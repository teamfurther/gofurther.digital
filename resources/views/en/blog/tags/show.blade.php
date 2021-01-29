@extends('en.site')

@section('title', $tag->name . ' Articles')
@section('description', $tag->description)

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">{{ $tag->name }}</h1>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <p class="blog__tag__description">{!! $tag->description !!}</p>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="blog__tag-selector">
                        <nav>
                            <a href="{{ route(getLang() . '.blog') }}">
                                All
                            </a>
                            <a @if ($tag->slug === 'digital-transformation') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'digital-transformation']) }}"
                            >
                                Digital Transformation
                            </a>
                            <a @if ($tag->slug === 'start-up') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'start-up']) }}">
                                Start-up
                            </a>
                            <a @if ($tag->slug === 'explained') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'explained']) }}">
                                Explained
                            </a>
                            <a @if ($tag->slug === 'remote-work') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'remote-work']) }}">
                                Remote work
                            </a>
                            <a @if ($tag->slug === 'agile') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'agile']) }}">
                                Agile
                            </a>
                            <a @if ($tag->slug === 'development') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'development']) }}">
                                Development
                            </a>
                            <!-- <a @if ($tag->slug === 'ux') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'ux']) }}">
                                UX
                            </a> -->
                            <a @if ($tag->slug === 'life-at-further') class="is-active" @endif
                                href="{{ route(getLang() . '.blog.tags.show', ['slug' => 'life-at-further']) }}">
                                Life at Further
                            </a>
                        </nav>
                        <select>
                            <option value="{{ route(getLang() . '.blog') }}">
                                Filter by category
                            </option>
                            <option value="{{ route(getLang() . '.blog') }}">
                                All
                            </option>
                            <option @if ($tag->slug === 'digital-transformation') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'digital-transformation']) }}"
                            >
                                Digital Transformation
                            </option>
                            <!-- <option @if ($tag->slug === 'start-up') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'start-up']) }}"
                            >
                                Start-up
                            </option> -->
                            <option @if ($tag->slug === 'explained') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'explained']) }}"
                            >
                                Explained
                            </option>
                            <option @if ($tag->slug === 'remote-work') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'remote-work']) }}"
                            >
                                Remote work
                            </option>
                            <option @if ($tag->slug === 'agile') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'agile']) }}"
                            >
                                Agile
                            </option>
                            <!-- <option @if ($tag->slug === 'development') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'development']) }}"
                            >
                                Development
                            </option> -->
                            <!-- <option @if ($tag->slug === 'ux') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'ux']) }}"
                            >
                                UX
                            </option> -->
                            <option @if ($tag->slug === 'life-at-further') selected @endif
                                value="{{ route(getLang() . '.blog.tags.show', ['slug' => 'life-at-further']) }}"
                            >
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
