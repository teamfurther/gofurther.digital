@extends('en.site')

@section('title', 'Blog, articles')
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
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'long-distance-relationship-in-a-corporate-environment']) }}"><img src="{{ asset('media/blog/thumb-remote-corporate-culture-5-en.png') }}" alt="Can a long-distance relationship work in a corporate environment?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'long-distance-relationship-in-a-corporate-environment']) }}">Can a long-distance relationship work in a corporate environment?</a></h3>
                                <p class="post__excerpt">What makes a remote team a truly cohesive team and how can we contribute to building a successful remote corporate culture?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'long-distance-relationship-in-a-corporate-environment']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-stay-motivated-when-you-work-remotely']) }}"><img src="{{ asset('media/blog/thumb-remote-corporate-culture-4-en.png') }}" alt="How to stay motivated when you work remotely?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'how-to-stay-motivated-when-you-work-remotely']) }}">How to stay motivated when you work remotely?</a></h3>
                                <p class="post__excerpt">One of the biggest challenges of working from home is losing motivation. What can we do on our part to regain our initial enthusiasm?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-stay-motivated-when-you-work-remotely']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-build-a-remote-company-culture']) }}"><img src="{{ asset('media/blog/thumb-remote-corporate-culture-3-en.png') }}" alt="How to build a remote company culture?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'how-to-build-a-remote-company-culture']) }}">How to build a remote company culture?</a></h3>
                                <p class="post__excerpt">Why is a good corporate culture so important and how you can achieve it within a remote company? Read on to see what tips and tricks we're using at Further to improve company culture.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-build-a-remote-company-culture']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-hire-remote-talent']) }}"><img src="{{ asset('media/blog/thumb-remote-corporate-culture-2-en.png') }}" alt="How to hire remote talent?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'how-to-hire-remote-talent']) }}">How to hire remote talent?</a></h3>
                                <p class="post__excerpt">In this article, we'll show you how to hire a new remote team member and the steps you can take for a smoother integration.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'how-to-hire-remote-talent']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'what-is-a-remote-team-and-is-it-for-you']) }}"><img src="{{ asset('media/blog/thumb-remote-corporate-culture-1-en.png') }}" alt="What is remote work (and is it for you)?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'what-is-a-remote-team-and-is-it-for-you']) }}">What is remote work (and is it for you)?</a></h3>
                                <p class="post__excerpt">What are the advantages and disadvantages of the remote work? What should you pay attention to when you think of working in a remote team? How we do it at Further? Read our article to get your answers.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'what-is-a-remote-team-and-is-it-for-you']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => '5-things-every-business-owner-should-know']) }}"><img src="{{ asset('media/blog/thumb-5-things-every-business-owner-should-know.jpg') }}" alt="5 things, every business owner should know" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => '5-things-every-business-owner-should-know']) }}">5 things, every business owner should know</a></h3>
                                <p class="post__excerpt">In this article, we'll show you what information is a must know for business owners to be able to plan ahead, and how a software can help you keep track and analyse these numbers.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => '5-things-every-business-owner-should-know']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'how-does-a-software-optimise-your-manufacturing-processes']) }}"><img src="{{ asset('media/blog/thumb-manufacturing-software.jpg') }}" alt="How does a software optimise your manufacturing processes?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'how-does-a-software-optimise-your-manufacturing-processes']) }}">How does a software optimise your manufacturing processes?</a></h3>
                                <p class="post__excerpt">In today's article we'd like to show you how a software can help optimise your product development, supply chain and manufacturing processes.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'how-does-a-software-optimise-your-manufacturing-processes']) }}">Read on &raquo;</a>
                            </div>
                        </div>
                    </div>
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
    "keywords": "Custom software development, Software development, Web development, MVP development, Digital transformation, Technology, Design, Company culture",
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
