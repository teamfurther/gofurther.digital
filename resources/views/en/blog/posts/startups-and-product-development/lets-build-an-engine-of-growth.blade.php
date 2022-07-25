@section('title', 'Let\'s Build an Engine of Growth')
@section('description', 'What\'s common in a SaaS product, a newspaper and the church? They all use the same growth engine! Bear with us. We\'ll explain.')
@section('preview_image', route('generate-cover', ['title' => 'Let\'s Build an Engine of Growth']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Let's Build an Engine of Growth!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-06-13 10:00:00">Jun 13th, 2022</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>What's common in a SaaS product, a newspaper and the church? They all use the same growth engine! Bear with me. I'll explain.</p>
                            <p>We often mentioned metrics in our articles and saw that there are quite a few of them, serving a multitude of scopes. It's an impossible task to track and try to improve each one of them. Without a framework, a startup can lose a lot of time debating which one to focus on.</p>
                            <figure>
                                <img src="{{ asset('media/blog/engines-of-growth-shawn-carolan-quote-en.png') }}" alt="Startups don't starve; they drown. — Shawn Carolan" />
                            </figure>
                            <p>In my article titled <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-measure-the-success-of-your-startup']) }}" target="_blank">How to Measure the Success of Your Startup</a> I introduced you to Dave McClure's "Startup Metrics for Pirates" framework, which defines which metrics and in which order you should focus during your search for <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt4']) }}" target="_blank">product-market fit</a>.</p>
                            <p>An engine of growth is nothing more than an answer to the question: what drives the growth of our business? Similar to the pirate metrics, it defines a growth strategy and helps one understand why, when and how the business grows.</p>
                            <p>Eric Ries introduced the notion of engines of growth in the book The Lean Startup. He defined three types of engines of growth:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>paid engine of growth</li>
                                <li>sticky engine of growth</li>
                                <li>viral engine of growth</li>
                            </ul>
                            <table class="table has-margin-b60">
                                <tr>
                                    <th></th>
                                    <th>Paid engine</th>
                                    <th>Sticky engine</th>
                                    <th>Viral engine</th>
                                </tr>
                                <tr>
                                    <th rowspan="2">Critical metrics</th>
                                    <td>Customer acquisition cost (CAC)</td>
                                    <td rowspan="2">Churn rate</td>
                                    <td rowspan="2">Viral coefficient</td>
                                </tr>
                                <tr>
                                    <td>Customer lifetime value (CLV)</td>
                                </tr>
                                <tr>
                                    <th>Core focus</th>
                                    <td>Customer acquisition through paid channels</td>
                                    <td>Providing higher value for existing customers (better service level, new product features, etc.)</td>
                                    <td>Developing product features which encourage sharing</td>
                                </tr>
                                <tr>
                                    <th rowspan="2">How to speed up growth</th>
                                    <td>Improving CLV through cross-sell and upsell</td>
                                    <td>Decreasing churn rate with regular promotions</td>
                                    <td>Increasing network effect</td>
                                </tr>
                                <tr>
                                    <td>Decreasing CAC by exploring alternative customer acquisition channels</td>
                                    <td>Increasing customer satisfaction by developing alternative value propositions</td>
                                    <td>Introducing rewards-based incentives</td>
                                </tr>
                            </table>
                            <h2 class="heading-2 has-margin-b30">The Paid Engine of Growth</h2>
                            <p>There are two metrics that, above everything else, show if our startup is successful. The first one is the customer acquisition cost (CAC). The CAC is the sum we spend on average to acquire a new customer.</p>
                            <p>The other such metric is the customer lifetime value (CLV). The CLV is the sum that a customer spends on average during the time they are our customers. Our business model is sustainable if CLV > CAC.</p>
                            <p>If a business reinvests most of the difference between the CLV and CAC to acquire more customers, they use a paid growth engine.</p>
                            <p>Let's assume a workshop, making train models, spends $0.5 on pay-per-click advertising to sell one toy. After deducting manufacturing costs, they earn $5 on each sale.</p>
                            <p>On the other hand, a locomotive manufacturer can sell an engine for a profit of $500 000. However, they need salespeople, technical experts, and booths at trade shows and conferences to sell this engine. Their CAC is $50 000.</p>
                            <p class="has-margin-b60">Both businesses can generate nine more sales if they reinvest their whole profits. If they wish to accelerate their growth, they need to either decrease their acquisition costs or increase their customer lifetime value. They can achieve the latter by selling additional products or services, such as an extended warranty period.</p>
                            <h2 class="heading-2 has-margin-b30">The Sticky Engine of Growth</h2>
                            <p>Acquiring new customers is always welcome. However, as opposed to the paid engine, the sticky engine focuses on retaining existing customers.</p>
                            <p>While a locomotive company needs to constantly win new tenders to grow, a SaaS product, a newspaper or even the church focuses on keeping the users, readers and congregation. Even a small number of new customers is enough to grow.</p>
                            <p>The churn rate is the most important metric for a business that employs a sticky engine.</p>
                            <p>The churn rate shows what percentage of users we can keep in the long run. The maths is simple: our business will grow if the churn rate is slower than the rate of new customers coming in. The more significant the difference between the churn rate and customer acquisition rate, the faster the growth.</p>
                            <p>The simplest way to understand the sticky growth engine is to think of a bucket with holes. If we pour water into the bucket  (– we acquire new customers), it flows away  (– churn). If we pour water at the same rate, it flows away, and the level stays the same – no growth. If we instead try and patch the holes, the water level will eventually rise – growth.</p>
                            <p>We can diminish the churn rate in multiple ways. The easiest way is to deliver a quality product or service. Pay extra attention to user experience, the onboarding process and customer service.</p>
                            <p class="has-margin-b60">There are also questionable ways to decrease churn. One of them is when a service provider locks you in. Remember when telco companies didn't allow you to take your phone number with you when switching providers? Or carrier-locked devices? Chip manufacturers and, unfortunately, software companies do the same when they force their clients into adopting a particular technology.</p>
                            <h2 class="heading-2 has-margin-b30">The Viral Engine of Growth</h2>
                            <p>When employing a viral engine of growth, most of our marketing will be done by our users. The goal is that existing users refer our product to new customers. One of the users refers to two new users. Then, they also refer us to further users and so on. This leads to exponential growth.</p>
                            <p>Contrary to word-of-mouth, a referral system is a mandatory component of the viral growth engine. We don't leave it up to the customers to refer our product to others. Instead, it's almost an expectation that they do.</p>
                            <p>Most probably, all three engines of growth have a word-of-mouth element to them. But in the case of a viral engine, it's make or break. We'll probably employ some sort of search engine optimization in case of all engines of growth. But spending most of your effort on SEO while striving for viral growth is a sure way to fail.</p>
                            <p class="has-margin-b60">We can break down viral growth into two further types: inherent and artificial viral growth.</p>
                            <h3 class="heading-3 has-margin-b30">Inherent Viral Growth</h3>
                            <p class="has-margin-b60">The more, the merrier! With inherent viral growth, sharing the product with others is necessary for it to work. We can observe this method with social platforms like Facebook, WhatsApp, Instagram or even LinkedIn, as these services are meaningless unless your friends are registered.</p>
                            <h3 class="heading-3 has-margin-b30">Artifical Viral Growth</h3>
                            <p>In the case of artificial viral growth, sharing is incentivized by some kind of reward system. Tupperware famously employed this method.</p>
                            <p>Even today, someone can still become a Tupperware representative and host Tupperware parties. A Tupperware party is where the host can present the products to their friends and neighbours. After each product is sold at the party, they receive a commission fee and free products. But apart from selling products, a Tupperware party is also a great occasion to enrol new representatives. This is borderline MLM. And yes, pyramid schemes also use an artificial viral growth engine.</p>
                            <figure>
                                <img src="{{ asset('media/blog/engines-of-growth-viral-factor.png') }}" alt="How the viral coefficient affects growth" />
                            </figure>
                            <p>When talking about viral engines, one metric rises above everything else. This metric is the viral coefficient. This number shows how many new customers each user refers to on average. A viral coefficient of 1.4 means that we get 1.4 new customers from the referrals of a single user.</p>
                            <p>The magic number is 1. If the viral coefficient is lower than 1, our growth will eventually halt. A viral coefficient of .8, for example, means that 100 users will rise to 180, then 244, 295, and so on. Even from this short series, you can see that the growth rate is slowing. For all the other number buffs out there, the series will eventually top out at around 499 users. You're welcome.</p>
                            <p class="has-margin-b60">If the viral coefficient is higher than 1, our growth will be exponential. 100 users will become 240, then 436, 710 and so on.</p>
                            <h2 class="heading-2 has-margin-b30">One Engine to Rule Them All</h2>
                            <p>Can we have more than one engine of growth within a startup? Yes. For example, a viral product might also have a low churn rate.</p>
                            <p>But remember why we need these frameworks in the first place? So that we can focus our efforts on improving a specific element of our growth strategy. It's very rare that a team can follow the metrics of multiple growth engines, and even rarer that they possess the skills to operate both a viral and a paid engine. So always choose one that best suits the product or service.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Let\'s Build an Engine of Growth'])
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
    "datePublished": "2022-06-13T10:00:00",
    "dateModified": "2022-06-13T10:00:00",
    "description": "What's common in a SaaS product, a newspaper and the church? They all use the same growth engine! Bear with us. We'll explain.",
    "headline": "Let's Build an Engine of Growth",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-lets-build-an-engine-of-growth.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Engine of Growth, Growth Engine",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Let's Build an Engine of Growth",
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
                "name": "Let's Build an Engine of Growth"
            }
        }
    ]
}
</script>
@endpush
