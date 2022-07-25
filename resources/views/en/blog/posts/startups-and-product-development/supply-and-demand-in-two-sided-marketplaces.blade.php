@section('title', 'Case Study: Matching Supply and Demand in Marketplaces')
@section('description', 'The classic chicken and egg problem: should you build the supply or the demand side first? This article shares how we have done it through case studies of some of our previous projects.')
@section('preview_image', route('generate-cover', ['title' => 'Case Study: Matching Supply and Demand in Marketplaces']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Case Study: Matching Supply and Demand in Marketplaces</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-07-14 10:00:00">Jul 14th, 2022</time> &middot; 5 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>In the world of internet software, a marketplace is a platform which brings together two (or more) user groups in a classic supply and demand setup. Think eBay, Airbnb or Deliveroo.</p>
                            <p>If you gain traction on one side, that makes the platform attractive to the other side as well. However, the product will fail if you cannot build up either side. This leads to a classic chicken and egg problem. Which side should we develop first? Supply or demand?</p>
                            <p>The whole industry is split on this question. <a href="https://fresco.vc/target-supply-demand-two-sided-market/" target="_blank">Some say</a> you should start with the supply side, while <a href="https://www.applicoinc.com/blog/marketplaces-and-the-chicken-and-egg-problem-supply-or-demand-first/" target="_blank">others say</a> you should concentrate on demand first. I won't even try to take sides. The format of this article will be different from the previous ones because I will show you how we have done it through case studies of some of our previous projects. Where did our first try fail? Why did our second try succeed?</p>
                            <figure>
                                <img src="{{ asset('media/blog/marketplace-chicken-and-egg.jpg') }}" alt="Chicken and egg problem in marketplaces" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Case Study #1: Hostess Search</h2>
                            <p>We started working on Hostess Search in 2017. The goal was to allow festivals, sporting events and hostess agencies to book hostesses and hosts for their events directly on the website.</p>
                            <p>After the platform's development, our client initiated an intensive pay-per-click campaign, which proved to be unexpectedly successful. We managed to enrol hundreds of hostesses and hosts in a short space of time. We got most of them to fill their profiles, which we knew was an essential aspect for the demand side.</p>
                            <p>The chicken and egg problem is solved; let's start working on signing up event organisers and agencies. We built the whole campaign around the proposition that they would be able to pick from the country's largest database of hostesses. It flopped magnificently. We managed to sign up only two clients, none of which led to any business.</p>
                            <p>Although we wanted to solve <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">a valid problem</a> and <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">had a good value proposition</a>, and <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt3']) }}" target="_blank">the product delivered the solution effectively</a>, we were nowhere near <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt4']) }}" target="_blank">product-market fit</a>.</p>
                            <p>The Hostess Search experience taught us that in the case of a marketplace, there's a vast difference between needing B2C or B2B customers. For the former, a pay-per-click or viral campaign can lead to fast growth, which is only limited by the amount of available marketing budget. The latter requires you to roll up your sleeves and do some hard sales work, which also means longer sales cycles.</p>
                            <p class="has-margin-b60">The story of Hostess Search didn't necessarily have to end here. A simple channel <a href="{{ localizedRoute('blog.show', ['slug' => 'to-pivot-or-not-to-pivot']) }}" target="_blank">pivot</a> could've breathed new life into the project. But without B2B sales experience, connections and time, our client decided not to pursue it. Instead, we tried to use the developed technology to pivot towards other, two-sided B2C markets. But initial enthusiasm dwindled, and the project eventually fizzled out.</p>
                            <h2 class="heading-2 has-margin-b30">Case Study #2: Coeasy</h2>
                            <p>We began working with the team from Coeasy (spelt /ˈkəʊzi/, same as cosy) in mid-2021. Coeasy is a German startup that helps freelancers find a "desk" in one of the city's cafès. They are looking for a place with good WiFi, where one can charge a laptop and phone, which is quiet and one that plays music that won't kill your productivity.</p>
                            <p>On the other hand, cafè owners would have the possibility to fill empty tables with guests during the less busy hours. Since we're talking of guests who usually spend lengthy spells in the establishment, drinking a single beverage, we needed a solution which makes it worthwhile for cafès to participate in the program.</p>
                            <p>Our answer to this problem was to make all bookings and payments through the app. A freelancer was allowed to spend 2 hours at a table for the price of 1 coffee. This was still much cheaper than a coworking office and gave them the flexibility to work from a new "office" at different times each day.</p>
                            <p>During the interviews, we realised that despite this, it was still an inconvenience for cafès to participate. They wanted Coesy to guarantee at least 4-5 coffees sold daily to sign up. This meant 8-10 hours spent in a cafè, which we believed needed at least 2-3 freelancers visiting the place daily.</p>
                            <p>These numbers scared us initially. If we signed up lots of cafès, as planned, the bookings would be spread out, and we would be nowhere near these numbers.</p>
                            <p>During our interviews with a couple of freelancers, we realised that it was most important to them that wherever they go has the perfect working conditions. A close second was that there was always a cafè nearby. Both of these needs were more important than the variety of options for cafès.</p>
                            <p>This led to a paradigm shift. Instead of trying to sign up for as many cafès as possible, we concentrated on signing up for the best cafès. To ensure we had a good geographical spread, we devised a plan to balance supply and demand.</p>
                            <p>Together with the client, we decided our pilot cities would be Berlin and Düsseldorf. We split both of them into zones. The downtown and other areas with heavier foot traffic had smaller, more densely placed zones, while larger zones covered the outer parts of the town.</p>
                            <figure>
                                <img src="{{ asset('media/blog/coeasy-zone-map.jpg') }}" alt="Coeasy zone map" />
                                <figcaption>Zone map of Berlin. Zones which reached at least 30 interested people are marked in green.</figcaption>
                            </figure>
                            <p>Since freelancers are a pretty easily targeted persona, we built a pay-per-click campaign to bring them to a landing page. This page acted as a <a href="{{ localizedRoute('blog.show', ['slug' => '11-ways-to-build-an-mvp-pt1']) }}" target="_blank">smoke test</a>, where we presented the value proposition and gave them the option to pick a point on a map near where they would like to make a booking. Since we had no agreements with any cafés at this point, there was no actual booking happening. Instead, we put users on a waiting list.</p>
                            <p>When we reached around 30 interested people for a specific zone, we started reaching out to cafès (which were carefully selected and shortlisted before). Supported by concrete numbers, it was much easier to agree with cafès, and the Coeasy team was also confident they could deliver on those numbers.</p>
                            <p>As soon as a cafè was signed up, we notified the people on the waiting list. It's important to note that at this point, no software development took place beside the landing page. Instead, Coeasy regularly contacted each freelancer by phone or email. Basically, we set up a <a href="{{ localizedRoute('blog.show', ['slug' => '11-ways-to-build-an-mvp-pt2']) }}" target="_blank">concierge service</a>.</p>
                            <p>This has the upside that thanks to the constant personal communication, we could better gauge user needs, which we could then integrate into the app. Another advantage is that we could ask freelancers what other zones they also frequent. This allowed us to cover the map at a faster pace.</p>
                            <p>In less than a year, we covered Düsseldorf almost entirely, while Berlin was also 65% covered. To this day, Coeasy has agreements with 56 cafés and over 2000 people on the waiting list or who have already booked. All this, with minimal investment in software development.</p>
                            <p>Of course, these numbers are impossible to accommodate through a concierge service, so we also introduced a rudimentary booking system to automate the process until the marketplace platform is developed (hopefully soon).</p>
                            <p>As we are working with Coeasy, we use many of our experiences during the Hostess Search project. Fortunately, our client also understood that instead of jumping on head first and developing the platform, it's worth understanding our value proposition toward our different <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-personas-in-product-development']) }}" target="_blank">personas</a> and how we can reach them and persuade them to sign up.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Case Study: Matching Supply and Demand in Marketplaces'])
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
        "name": "Peter Illes"
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
    "datePublished": "2022-07-14T10:00:00",
    "dateModified": "2022-07-14T10:00:00",
    "description": "The classic chicken and egg problem: should you build the supply or the demand side first? This article shares how we have done it through case studies of some of our previous projects.",
    "headline": "Case Study: Matching Supply and Demand in Marketplaces",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-supply-and-demand-in-two-sided-marketplaces.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Marketplace",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Case Study: Matching Supply and Demand in Marketplaces",
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
                "name": "Case Study: Matching Supply and Demand in Marketplaces"
            }
        }
    ]
}
</script>
@endpush
