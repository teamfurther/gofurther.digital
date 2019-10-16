@extends('en.site')

@section('title', 'Blog')
@section('description', 'Thoughts and insights from the Further team. This is where we share news and moments from our life and across technology, design, innovation and culture.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Our Thoughts and Insights</h1>
                </div>
            </div>
            <div class="posts">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'going-paperless-how-to-digitise-your-business']) }}"><img src="{{ asset('media/blog/thumb-going-paperless.jpg') }}" alt="Going paperless: how to digitise your business?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'going-paperless-how-to-digitise-your-business']) }}">Going paperless: how to digitise your business?</a></h3>
                                <p class="post__excerpt">There's a lot of talk about paperless businesses nowadays. But how can your turn your business fully paperless?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'going-paperless-how-to-digitise-your-business']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-choose-the-right-crm']) }}"><img src="{{ asset('media/blog/thumb-how-to-choose-the-right-crm.jpg') }}" alt="How to choose the right CRM for your business?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'how-to-choose-the-right-crm']) }}">How to choose the right CRM for your business?</a></h3>
                                <p class="post__excerpt">In this article, we'll write about all the things you need to take into consideration when choosing the CRM for your business.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-choose-the-right-crm']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-choose-the-right-crm']) }}"><img src="{{ asset('media/blog/thumb-how-to-choose-the-right-crm.jpg') }}" alt="How to choose the right CRM for your business?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'how-to-choose-the-right-crm']) }}">How to choose the right CRM for your business?</a></h3>
                                <p class="post__excerpt">In this article, we'll write about all the things you need to take into consideration when choosing the CRM for your business.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-choose-the-right-crm']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'when-is-it-time-to-use-a-crm']) }}"><img src="{{ asset('media/blog/thumb-when-is-it-time-to-use-a-crm.jpg') }}" alt="When is it time to use a CRM?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'when-is-it-time-to-use-a-crm']) }}">When is it time to use a CRM?</a></h3>
                                <p class="post__excerpt">Most companies go through the same stages regarding their customer management processes. In this article we'll show you when it is the right time to finally invest in a CRM software.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'when-is-it-time-to-use-a-crm']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt4-it']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-4-en.jpg') }}" alt="Digital Transformation Pt. 4 - IT" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt4-it']) }}">Digital Transformation Pt. 4 - IT</a></h3>
                                <p class="post__excerpt">In this final part, we'll tackle the final piece of the puzzle and look at what technology you can leverage to take your business one step further.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt4-it']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt3-business-processes']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-3-en.jpg') }}" alt="Digital Transformation Pt. 3 - Business Processes" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt3-business-processes']) }}">Digital Transformation Pt. 3 - Business Processes</a></h3>
                                <p class="post__excerpt">In the third part of the series, we take a look at how implementing BPM and Agile helps support digital transformation.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt3-business-processes']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-2-en.jpg') }}" alt="Digital Transformation Pt. 2 - Company Culture" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">Digital Transformation Pt. 2 - Company Culture</a></h3>
                                <p class="post__excerpt">In the first part of the series we saw how digital killed Kodak. But they made efforts to change their company culture and have risen from their ashes.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt1-introduction']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-1-en.jpg') }}" alt="Digital Transformation Pt. 1 - Introduction" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt1-introduction']) }}">Digital Transformation Pt. 1 - Introduction</a></h3>
                                <p class="post__excerpt">Welcome to the first part of our 4 part series on digital transformation. Let's dive in, and start with what digital transformation actually means.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt1-introduction']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}"><img src="{{ asset('media/blog/thumb-laraconeu-madrid-2019.png') }}" alt="Further@LaraconEU Madrid 2019" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}">Further@LaraconEU Madrid 2019</a></h3>
                                <p class="post__excerpt">The 23rd of May was a special day for us, as we attended our first Laracon in Madrid. Laracon has always been high up on our conferences bucket list, but it just didn't work out for us. Until now.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'the-story-behind-our-rebranding']) }}"><img src="{{ asset('media/blog/thumb-rebranding.png') }}" alt="The story behind our rebranding" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'the-story-behind-our-rebranding']) }}">The story behind our rebranding</a></h3>
                                <p class="post__excerpt">We took the shot and decided to rebrand our company not only because change is necessary to grow, but the main reason behind the rebrand was that the old brand did not represent us well anymore.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'the-story-behind-our-rebranding']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'what-makes-a-good-agile-software-specification']) }}"><img src="{{ asset('media/blog/thumb-agile-software-specification.jpg') }}" alt="What makes a good (agile) software specification?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'what-makes-a-good-agile-software-specification']) }}">What makes a good (agile) software specification?</a></h3>
                                <p class="post__excerpt">In the waterfall model, to ensure the quality and timely delivery of a software product, you needed to create a detailed software specification. But what if we're using agile methodologies on our projects?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'what-makes-a-good-agile-software-specification']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}"><img src="{{ asset('media/blog/thumb-custom-development-vs-ootb.jpg') }}" alt="Custom Development vs. Out-of-the-Box Software" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}">Custom Development vs. Out-of-the-Box Software</a></h3>
                                <p class="post__excerpt">At one stage, each company reaches a point when they need to invest in their software infrastructure in order to grow. We will try to help you decide if a custom-built solution or out-of-the-box software is right for you.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}">Read on &raquo;</a>
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
    "keywords": "Custom software development, Web design, Technology, Design, Company culture",
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
