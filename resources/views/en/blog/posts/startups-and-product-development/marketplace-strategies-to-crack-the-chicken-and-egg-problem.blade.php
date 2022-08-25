@section('title', 'Marketplace Strategies to Crack the Chicken and Egg Problem')
@section('description', 'Learn about the seeding strategies used to balance supply and demand in two-sided marketplaces. Jump in!')
@section('preview_image', route('generate-cover', ['title' => 'Marketplace Strategies to Crack the Chicken and Egg Problem']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Marketplace Strategies to Crack the Chicken and Egg Problem</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-08-18 10:00:00">Aug 18th, 2022</time> &middot; 5 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">In my <a href="{{ localizedRoute('blog.show', ['slug' => 'supply-and-demand-in-two-sided-marketplaces']) }}" target="_blank">previous article</a>, I shared some of our previous experiences in building marketplace products and how we handled the chicken and egg problem. But there have been many others who had paved this way before us and came up with so-called seeding strategies for marketplaces. Today, I'd like to show you some of these strategies.</p>
                            <h3 class="heading-3 has-margin-b30">What is a Marketplace?</h3>
                            <p class="has-margin-b60">A marketplace is a platform which connects many sellers with many buyers. In other words, it connects supply and demand. On top of this, it allows the two parties to conduct transactions, while the platform charges a commission fee for each transaction. Amazon, Uber and even Deliveroo are considered marketplaces.</p>
                            <h3 class="heading-3 has-margin-b30">What is the Chicken and the Egg Problem?</h3>
                            <p class="has-margin-b60">A marketplace creates value by balancing the supply and demand sides. If one side is missing, it leads to a chicken and egg problem. A supply-side won't be motivated to join the platform if there is no one to buy from them. On the demand side, on the other hand, seeing there is nothing to buy, they will wait until there is a more extensive offering. In order to solve this problem, several seeding strategies exist.</p>
                            <h2 class="heading-2 has-margin-b30">#1 Single Player Mode</h2>
                            <p>Single Player Mode is terminology borrowed from the world of video games. Marketplaces are by default „multiplayer”. But 34% of marketplaces adopt some single-player mode <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-the-value-proposition-canvas']) }}" target="_blank">értékajánlattal</a> is rendelkeznek.</p>
                            <p>Amazon and other retailers who transitioned to being a marketplace have gone down this path. Being successful retail stores (single player mode) allows them to aggregate a considerable number of buyers. They only open up the supply side, later on, allowing suppliers to sell through the platform.</p>
                            <p class="has-margin-b60">OpenTable, a restaurant reservation system, also employed a single-player mode strategy. Initially, they targeted restaurants by offering them a booking system they could use as standalone software. When enough restaurants started using their system, they started focusing on the demand side and asking restaurants for a commission for each booking they brought in.</p>
                            <h2 class="heading-2 has-margin-b30">#2 Empty Seats</h2>
                            <p>The empty seats strategy entails targeting providers on the supply side who have slow periods by the nature of their business.</p>
                            <p>Lodging reservation websites used to use this strategy. Back in the day, their value proposition was merely selling the empty rooms that the hotels couldn't sell themselves. Nowadays, these lodging marketplaces” have become the de facto standard for booking accommodation. The number of bookings through these websites has exceeded by far and large the number of bookings coming through other channels.</p>
                            <p>Uber also employed the empty seats strategy (literally and figuratively). They initially contacted limo services and gave them the app to use. Since these black car drivers had pre-booked appointments, they spent most of their day waiting for the next appointment. Thanks to Uber, they could use this downtime to make some extra income.</p>
                            <p class="has-margin-b60">Groupon also famously used this strategy to build up the supply side of their business. They targeted service providers in the middle of their slower periods (travel agencies in the winter, saunas and spas in the summer, etc.). Initially, they sold a single gift card from such a provider daily. Since they only charge a fee when an actual sale is made, providers had minimal risk in joining the platform.</p>
                            <h2 class="heading-2 has-margin-b30">#3 Sellers Are Buyers</h2>
                            <p>One of the most proven strategies is focusing on a market where sellers are also buyers at the same time. 7 out of 10 marketplaces that follow this strategy are, in fact, peer-to-peer shopping marketplaces, like Craigslist or eBay.</p>
                            <p class="has-margin-b60">The effortlessness of this strategy stems from the fact that you can utilise the same marketing strategy to communicate with both supply and demand.</p>
                            <h2 class="heading-2 has-margin-b30">#4 Fake Supply</h2>
                            <p>Sometimes it might make sense to act as a supplier to quickly get customers on the demand side. This strategy is quite contentious. It can be a helpful tool, but you can easily rub people the wrong way.</p>
                            <p>Tinder doesn't just rub; according to some, they straightforwardly break every ethical barrier by utilising fake user profiles. You can often encounter these fake profiles created by Tinder to balance genders and keep their users engaged.</p>
                            <p>But the fake supply strategy can also be done well, as Steve Sammartino of rentoid.com did. Rentoid is a peer-to-peer renting marketplace. Steve started by browsing the product catalogues of large department stores, looking for rentable products. He then put them up on his website. If someone rented an item, Steve went to the store and bought it. After the customer returned the article, he sold it on eBay for 80% of the original price. This way, Steve generated lots of traffic on his website, and soon after, others started posting their items for rent. <em>Editor's Note</em>: rentoid.com no longer exists today. Unfortunately, I couldn't find any information on what happened to the project. If you find out, please let me know.</p>
                            <p class="has-margin-b60">Udemy also used a similar strategy. They sought out courses which were licensed under creative commons. This way, they quickly built up a database of 5000 free courses. This drew in the demand side, and when they already had many students, it became easier to convince supply to create courses for the platform.</p>
                            <h3 class="heading-3 has-margin-b30">So, supply before demand?</h3>
                            <p>Based on the above strategies, you'd be forgiven if you deduce that you should always focus on supply before demand. Although this is the more popular choice, it's not always the right one.</p>
                            <p>Handy is a home services marketplace. They started by creating a landing page where one could book a handyperson. After someone made a booking, the Handy team started a mad dash to find a suitable professional within the guaranteed 7-day deadline. Once the professional finished the job, it became much easier to convince her (hey, why should every handyperson be a guy?) to join Handy since she already got paid for a job through them.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Marketplace Strategies to Crack the Chicken and Egg Problem'])
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
    "datePublished": "2022-08-18T10:00:00",
    "dateModified": "2022-08-18T10:00:00",
    "description": "Learn about the seeding strategies used to balance supply and demand in two-sided marketplaces. Jump in!",
    "headline": "Marketplace Strategies to Crack the Chicken and Egg Problem",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-to-pivot-or-not-to-pivot.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Marketplace",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Marketplace Strategies to Crack the Chicken and Egg Problem",
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
                "name": "Marketplace Strategies to Crack the Chicken and Egg Problem"
            }
        }
    ]
}
</script>
@endpush
