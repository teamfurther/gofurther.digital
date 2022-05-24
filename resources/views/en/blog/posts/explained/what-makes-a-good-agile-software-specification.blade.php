@section('title', 'Software specifications in an agile environment')
@section('description', 'In the waterfall model, to ensure the quality and timely delivery of a software product, you needed to create a detailed software specification. But what if we\'re using agile methodologies on our projects?')
@section('preview_image', asset('media/blog/cover-agile-software-specification-en.png'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">What Makes a Good (Agile) Software Specification?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-09-17 12:00:00">Sep 17th, 2018</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">First things first, let's see what a software specification is and what goes into it. A software specification is a collection of all information necessary to deliver the right software. It consists of several documents:</p>
                            <p><strong>Software requirements</strong> describe the background, business goals and constraints of the project. Generally this is done by the client, or together with a software or UX consultant.</p>
                            <p class="has-margin-b60"><em>Imagine the process of building a house. First you write down your vision, how many rooms and what features you want. These are you goals. The specifics of the plot, and the building laws are your constraints.</em></p>
                            <p>The <strong>software design document</strong> is a technical document that provides a precise solution to the goals described in the requirements. This includes data design, architecture design and low and high fidelity interface designs.</p>
                            <p class="has-margin-b60"><em>Think of this as the actual house plans: floor plans, foundation plans, elevations, section cuts, materials, electrical and plumbing schematics and so on.</em></p>
                            <p><strong>Test documentation</strong> is also part of the specification. This document describes how, where and when the software needs to be tested, includes tests cases and associated risks.</p>
                            <p class="has-margin-b60"><em>These might be your housing quality standards and inspection documents, which ensure that the house works and functions properly, and will do so for the foreseeable future.</em></p>
                            <p class="has-margin-b60">Last, but not least, there is the <strong>user documentation</strong>. These are written after development, but could also be considered part of the specs. User documentation simply describes how the software should be used.</p>
                            <h2 class="heading-3 has-margin-b30">We're agile, we don't do specs!</h2>
                            <p>In the waterfall and V-models, to ensure the quality and timely delivery of a software product, you needed to create a down to the last detail software specification. But spec'ing out every element of the software takes a lot of time and is costly.</p>
                            <p>It's also unrealistic, because users are rarely capable of detailing every functionality they wish to see in the final product, so the scope of the project is bound to change countless times.</p>
                            <p>But what if we're using agile methodologies on our projects? A lot of people believe that agile teams are working without a specification. That's not entirely true. An agile project still needs structure, so nobody makes critical assumptions. This structure is given by the <strong>users stories</strong>, which are natural language descriptions of one or more features of a system, written from the perspective of the end user.</p>
                            <p>Agile is built around the principle that project <strong>scope can and should change</strong> during the project. All user stories will be placed in a backlog at the beginning of the project, but will not be drafted out in detail. Instead they will be shaped throughout the development process.</p>
                            <figure class="has-margin-b60">
                                <img src="{{ asset('media/blog/agile-specs-user-story-1.jpg') }}" alt="User stories should always be written from an end user perspective" />
                                <figcaption>User stories should always be written from an end user perspective</figcaption>
                            </figure>
                            <h2 class="heading-3 has-margin-b30">The agile process</h2>
                            <p>Agile teams work in short (1 or 2 week) iterations, called <strong>sprints</strong>. At the beginning of each sprint, a small set of user stories will be picked from the backlog (usually those which add the most business value), and are drafted out.</p>
                            <p>Contrary to the traditional method, the responsibility of drafting out the details is shared by the client (through his product owner) and the development team. For this to work, everybody involved needs to have a shared understanding and empathy of the target customer. Because of that shared understanding, the product owner can focus on high-level requirements and business goals and leave all implementation details to the development team.</p>
                            <figure>
                                <img src="{{ asset('media/blog/agile-specs-user-story-2.jpg') }}" alt="Example of a detailed user story" />
                                <figcaption>Example of a detailed user story</figcaption>
                            </figure>
                            <p>At the end of the sprint, feedback is given on actual working software, not just specifications. This allows the client to see if the product is aligned with his expectations, without having to wait (months) until the whole software is developed. If at this point, the client has change requests, they can be introduced as new user stories into the backlog, and planned into one of the next sprints.</p>
                            <p class="has-margin-b60">Agile's flexibility allows changing the scope of the project along the way, as opposed to the traditional method, where it can only be done at the end of development, often by bulldozing and redoing months' worth of work. That of course, comes at a high cost, missed deadlines and not least, a drop in morale for everybody involved.</p>
                            <h2 class="heading-3 has-margin-b30">So how do we do it?</h2>
                            <p>Let's get to the specifics, and tell you what we do here at Further. There's two types of clients we get. Those who already have the software requirements, and those who only have a short project brief or an idea in their head. Neither is usually from the perspective of the end user.</p>
                            <p>So the first thing we do, is sit down with the client's product owner, and create a backlog of all the user stories we can come up with. Then we categorise them into 'must-haves' and 'nice-to-haves'. Based on this backlog our team can give rough estimates on cost and time.</p>
                            <p>One extra thing which we sometimes do before project kick-off, is that we create just a couple of wireframes for the more complex interfaces. This is inconsistent with agile practices, because it creates a detailed spec well-before development, but we find it helps our team create better estimates.</p>
                            <p>A neat thing we do, is overlapping design sprints and development sprints. After sprint planning we do a design sprint, where we prepare the actual specifications (design documents, test cases, risk matrices and wireframes or high-fidelity prototypes) for the selected user stories.</p>
                            <p class="has-margin-b60">At the end of sprint, we demo these to the client, and after approval, we start the development sprint, or coding if you will. In parallel, we already start the design sprint for the next phase. Because the team who does the development, already has all the information from the design team (UI designers, software architects, QA engineers) this method speeds up things by quite a lot if you have the right resources to do it.</p>
                            <p>That's a wrap on this article. We're always eager to find out about how others work, so if you'd like to share or have an idea of how we could improve our workflow, just drop us a line.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'How to Choose Between Custom Development and Out-of-the-Box Software'])
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
    "datePublished": "2018-09-17T12:00:00",
    "dateModified": "2018-09-17T12:00:00",
    "description": "In the waterfall model, to ensure the quality and timely delivery of a software product, you needed to create a detailed software specification. But what if we're using agile methodologies on our projects?",
    "headline": "How to write a good agile software specification?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-agile-software-specification-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software specification, Agile software development",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "How to write a good agile software specification?",
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
                "name": "How to write a good agile software specification?"
            }
        }
    ]
}
</script>
@endpush
