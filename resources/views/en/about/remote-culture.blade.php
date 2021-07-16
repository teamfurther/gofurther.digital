@extends('en.site')

@section('title', 'A fully remote company')
@section('description', 'We strongly believe that remote working is the future. It gives our teammates more freedom and flexibility to handle life\'s challenges which in turn leads to a better well-being and a happier and more productive team.')

@section('content')
    <section class="section">
         <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h2 class="hero-heading">
                        We are <strong class="is-pearl">100%</strong> remote
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <p>
                        We strongly believe that remote working is the future. It gives our teammates more freedom and flexibility to handle life's challenges which in turn leads to a better well-being and a happier and more productive team.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-t60 is-multiline">
                <div class="column is-6-tablet">
                    <h3 class="heading-4">No office required</h3>
                    <p>
                        It's been a long road until we got here. We learned the hard way. But now we can be truly proud of the way we communicate and collaborate as a remote team. This allows us to work from anywhere: from home, a co-working office, a coffee shop, or even from an exotic country sipping margaritas by the pool. No office required!
                    </p>
                    <h3 class="heading-4 has-margin-t60">Flexible schedule and unlimited holidays</h3>
                    <p>
                        We believe that work shouldn't hinder you when life throws you a curveball. That is why we have a flexible work schedule. Need to take your child to kindergarten or entertain the plumber while he fixes your clogged kitchen sink? No problem!
                    </p>
                    <p>
                        We also allow our colleagues to take as many sick-days or holidays as they need to. It might sound crazy at first, but who needs an employee who is inefficient because of a burnout?
                    </p>
                    <h3 class="heading-4 has-margin-t60">Regular team retreats</h3>
                    <p>
                        Being remote also means we see each other less than regular teams. That is why we always  start the year with a winter camp when we spend some time getting to know each other better and learning new stuff.
                    </p>
                    <p>
                        Late summer we throw in a family retreat as well for good measure, which allows us to see our teammates in a different perspective.
                    </p>
                </div>
                <div class="column is-6-tablet">
                    <img src="{{ asset('img/about-remote.png') }}" alt="Remote is what we do" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
         <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h2 class="hero-heading">
                        Remote culture is about <strong class="is-cobalt">sharing knowledge</strong>
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-t60 is-multiline is-reversed-tablet">
                <div class="column is-6-tablet">
                    <h3 class="heading-4">Further Fridays</h3>
                    <p>
                        We reserve Friday afternoons to work on something together, to discuss a current topic or spending time on cultivating team relationships.
                    </p>
                    <h3 class="heading-4 has-margin-t60">Open source</h3>
                    <p>
                        The community has given us so much along the years. We try to give back whenever we can by contributing to community projects or releasing some of our work as open source.
                    </p>
                    <h3 class="heading-4 has-margin-t60">Constant learning</h3>
                    <p>
                        We firmly believe that in the fast-paced IT world, you have to continuously learn to stay competitive. We attend conferences and meetups whenever possible.
                    </p>
                    <p>
                        Heck, we even organize some ourselves, such as the Hungarian Laravel Meetup or the local Digital Transformation meetup.
                    </p>
                </div>
                <div class="column is-6-tablet">
                    <img src="{{ asset('img/about-sharing-knowledge.png') }}" alt="Sharing knowledge is important" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
         <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h2 class="hero-heading">
                        We also <strong class="is-pearl">spread the word</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <p>
                        What's the point in doing something well, if you can't share it with others? That's the reasons why we try to popularize remote work whereever possible. We talked about pros and cons of remote work at several meetups and we also write about challenges, pitfalls and ideas regarding remote work on our blog.
                    </p>
                </div>
            </div>
             <div class="posts has-margin-t60">
                 <div class="columns is-multiline">
                     <div class="column is-full-tablet is-half-widescreen">
                         @include(getLang() . '.blog.excerpts.what-is-a-remote-team-and-is-it-for-you')
                     </div>
                     <div class="column is-full-tablet is-half-widescreen">
                         @include(getLang() . '.blog.excerpts.how-to-hire-remote-talent')
                     </div>
                     <div class="column is-full-tablet is-half-widescreen">
                         @include(getLang() . '.blog.excerpts.how-to-build-a-remote-company-culture')
                     </div>
                     <div class="column is-full-tablet is-half-widescreen">
                         @include(getLang() . '.blog.excerpts.how-to-stay-motivated-when-you-work-remotely')
                     </div>
                 </div>
             </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription', [
        'bodyText' => '<p class="has-margin-b30">Subcribe to our monthly newsletter where we share lots of fresh information about remote work.</p>',
        'headingText' => 'Subscribe for<br />more on <strong>remote!</strong>',
        'source' => 'remote-landing'
    ])
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
                    "@id": "{{ localizedRoute('about.remote-culture') }}",
                    "name": "Remote culture"
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
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "headline": "Remote culture",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, Digital product development, MVP development, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('about.remote-culture') }}",
    "name": "Remote culture",
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
                "@id": "{{ localizedRoute('about.remote-culture') }}",
                "name": "Remote culture"
            }
        }
    ]
}
</script>
@endpush
