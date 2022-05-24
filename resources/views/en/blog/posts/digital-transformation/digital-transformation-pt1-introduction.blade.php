@section('title', 'Digital Transformation Series Pt. 1 - Introduction')
@section('description', 'Welcome to the first part of our 4 part series on digital transformation. Let\'s dive in, and start with what digital transformation actually means.')
@section('preview_image', asset('media/blog/cover-digital-transformation-1-en.png'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digital Transformation Pt. 1 - Introduction</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-06-25 12:00:00">Jun 25th, 2019</time> &middot; 4 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Welcome to the first part of our 4 part series on digital transformation. If you're looking for a specific article in the series, here are the links to each post:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><strong>Part 1 - Introduction</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt2-company-culture']) }}">Part 2 - Company Culture</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt3-business-processes']) }}">Part 3 - Business Processes</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt4-it']) }}">Part 4 - Information Technology</a></li>
                            </ul>
                            <p>Let's dive in, and start with what digital transformation really means. Because of the word 'digital', most people associate with the shift away from analogue systems. But <a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt4-it']) }}">this is only a tiny fraction of digital transition</a>.</p>
                            <p>For us, digital transformation is about the pace a company can innovate and adapt to new technology. It's about how open they are to change and how quickly they are able to implement these changes.</p>
                            <p>Business is changing faster than ever. It seems like a new buzzword pops up every week or so: IoT, big data, industry 4.0, actionable analytics&hellip;</p>
                            <p class="has-margin-b60">Companies who are not prepared to embrace new change are going to be left behind. There are countless examples of companies who missed the boat: Blockbuster, Nokia or RadioShack.</p>
                            <h2 class="heading-3 has-margin-b30">Don't be like Kodak</h2>
                            <p>But my favourite example is that of Kodak. Kodak's core business was that of selling film and post-processing services. They were known to hand out cameras in exchange to getting people hooked on paying to develop their own "Kodak moments". When digital cameras and later camera phones came around, people stopped printing pictures and starting sharing online. Kodak filed for bankruptcy in 2012.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-kodak.jpg') }}" alt="Kodak's core business was that of selling film, but they suffered death-by-digital" />
                                <figcaption>Kodak's core business was that of selling film, but they suffered death-by-digital</figcaption>
                            </figure>
                            <p>Their downfall wasn't because they didn't try to develop new technology. The prototype for the first ever digital camera was created in 1975 by Steve Sasson, an engineer who worked for&hellip; Kodak. In a <a href="http://www.nytimes.com/2008/05/02/technology/02kodak.html" target="_blank">2008 interview</a> for The New York Times he told that the Kodak management's reaction was: "that's cute – but don't tell anyone about it".</p>
                            <p class="has-margin-b60">It's clear that Kodak's downfall wasn't because of technology. It was because they were blinded by their own success and didn't take into account the ever changing digital world we live in. They weren't prepared for change.</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt2-company-culture']) }}">Pt. 2 - Company Culture &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Digital Transformation Pt. 1 - Introduction'])
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
    "datePublished": "2019-06-25T12:00:00",
    "dateModified": "2019-06-25T12:00:00",
    "description": "Welcome to the first part of our 4 part series on digital transformation. Let's dive in, and start with what digital transformation actually means.",
    "headline": "Digital Transformation Pt. 1 - Introduction",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-digital-transformation-1-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital Transformation",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Digital Transformation Pt. 1 - Introduction",
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
                "name": "Digital Transformation Pt. 1 - Introduction"
            }
        }
    ]
}
</script>
@endpush
