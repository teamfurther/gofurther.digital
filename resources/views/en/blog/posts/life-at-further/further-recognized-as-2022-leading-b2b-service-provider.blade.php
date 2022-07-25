@section('title', 'Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania')
@section('description', 'We\'re happy to announce that we\'ve been named as a top provider of B2B services in 2022. According to Clutch, we\'re among the leading software developers in Romania this year!')
@section('preview_image', route('generate-cover', ['title' => 'Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-05-18 12:00:00">May 18th, 2022</time> &middot; 2 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>At Further we are focused on providing customer-centric digital solutions, helping businesses grow through innovation. Since 2013, we've been providing our clients with the technology services they need to develop new products and overcome their transformation challenges.</p>
                            <p>Today, we're happy to announce that we've been named as a top provider of B2B services in 2022. According to Clutch, a <a href="https://clutch.co/ro/developers" target="_blank">B2B resource</a>, we're among the leading software developers in Romania this year! Granted, it's a long list, but we're still proud to be featured along other names whose work we're admiring!</p>
                            <p>If you're confused how a hungarian company gets to be recognized as a leading company in Romania, let us share some info about our background. We work as a remote team, with the majority of the team based in the <a href="{{ localizedRoute('about.outsourcing') }}" target="_blank">hungarian speaking territories of Romania</a>, while the rest of the team is spread around Hungary.</p>
                            <figure>
                                <img src="{{ asset('media/blog/clutch-further-recognized-as-2022-leading-b2b-service-provider.png') }}" alt="Further Digital Solutions Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania" />
                            </figure>
                            <p>Clutch is a market research platform that enables businesses of all sizes to connect with the services they require to hit their objectives. Each year, Clutch highlights the top-performing service providers by industry and location, and we're honored to be on this year's list of leaders.</p>
                            <p><em>"Being recognized is always nice. Being recognized by Clutch, where we get a lot of our leads from is even better – just shows that all the effort we put into our projects brings actual value to our customers."</em><br /> — Peter Illés, Founder of Further Digital Solutions</p>
                            <p>Take a look at <a href="https://clutch.co/profile/further-digital-solutions?sort_by=date_DESC&project_cost=&service_provided=&review_type=#reviews" target="_blank">what our partners are saying</a> about our solutions through the B2B platform:</p>
                            <p><em>"Further is a "boutique agency", where the team can find the right solution as quick as it's possible, but they are always truly open to understand the clients' needs."</em><br />— Ferenc Fodor, Product & Business Dev. Head, Menedzser Praxis</p>
                            <p><em>"We took to our cliched roles with good humor and always have been open to learning from each other."</em><br /> — Brian Dubb, Founder, centralized.me</p>
                            <p>Thank you so much to all of those who share their honest thoughts and feedback about our solutions. Be sure to read the <a href="{{ localizedRoute('projects') }}" target="_blank">full case studies</a> for a comprehensive view of our projects.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania'])
                        </div>
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
    "datePublished": "2022-05-18T12:00:00",
    "dateModified": "2022-05-18T12:00:00",
    "description": "We're happy to announce that we've been named as a top provider of B2B services in 2022. According to Clutch, we're among the leading software developers in Romania this year!",
    "headline": "Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-further-recognized-as-2022-leading-b2b-service-provider-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Further Digital Solutions, Further",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania",
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
                "name": "Further Was Recognized by Clutch as a Leading 2022 B2B Service Provider in Romania"
            }
        }
    ]
}
</script>
@endpush
