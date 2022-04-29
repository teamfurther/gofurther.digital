@section('title', 'To Pivot or Not to Pivot – That Is the Question')
@section('description', 'What is a pivot? How many ways can you pivot? When to pivot? All this and and more!')
@section('preview_image', asset('media/blog/cover-to-pivot-or-not-to-pivot.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-to-pivot-or-not-to-pivot.png') }}" srcset="{{ asset('media/blog/featured-to-pivot-or-not-to-pivot-768w.png') }} 768w, {{ asset('media/blog/featured-to-pivot-or-not-to-pivot-1000w.png') }} 1000w" sizes="100vw" alt="To Pivot or Not to Pivot – That Is the Question" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">To Pivot or Not to Pivot – That Is the Question</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-03-14 10:00:00">Mar 14th, 2022</time> &middot; 7 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>In <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">previous articles</a>, we progressed through the different stages of product development. Each stage consists of one or more iterations of the <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">Build-Measure-Learn</a> loop. If all goes well, we will confirm our hypothesis at the end of the loop, and we can progress to the next stage.</p>
                            <p>But in practice, this rarely happens. More often than not, at the end of the loop, our hypothesis will be proven false, and we'll need to make slight or not so slight adjustments to our strategy. This is called a pivot.</p>
                            <p>Think of the Build-Measure-Learn loop as the "help" of our ship. In each iteration of the loop, we're testing assumptions necessary to be true for our product to be a success. We can row through calm waters towards the next product development stage if they are. Otherwise, if our assumptions are false, we will break direction, change strategy, create a new set of assumptions and start over the product development stage.</p>
                            <p class="has-margin-b60">Which direction one should break to, or what type of a pivot one should make, depends on the <a href="{{ localizedRoute('blog.show', ['slug' => 'what-are-hypotheses-in-product-development']) }}" target="_blank">kind of assumption</a> we tested. If our persona hypothesis is false, we should probably try a customer segment or customer need pivot. And if it's our value hypothesis that is proven wrong, we should experiment with a zoom-in or zoom-out pivot.</p>
                            <h2 class="heading-2 has-margin-b30">10 Ways to Pivot</h2>
                            <h3 class="heading-3 has-margin-b30">Customer Segment Pivot</h3>
                            <p>If doing a customer segment pivot, the product development team realises at some point that while they are solving a real problem, for a set of real users, these users are not the ones they intended their solution for. In other words, the problem hypothesis is true, but the persona hypothesis is not.</p>
                            <p class="has-margin-b60">AirBnB is a famous example of a startup that went through a customer segment pivot. They originally intended to offer affordable overnight stays for people attending conferences. They soon realised this model was not sustainable and opened their platform for travellers looking for cheaper and more authentic accommodation and experiences.</p>
                            <h3 class="heading-3 has-margin-b30">Customer Need Pivot</h3>
                            <p>As we get to know our customers better, we often realise that the problem we wish to solve is not significant enough for them. But during our interactions and interviews with these users, we discovered other needs that we could solve.</p>
                            <p>Often this requires just a bit of adjustment or repositioning of our service or product. Other times, it needs an entirely new product.</p>
                            <p class="has-margin-b60">Starbucks went through such a pivot. When starting, Starbucks was trading espresso machines and coffee beans. They realised that their customers were more interested in their fresh coffee as time went on.</p>
                            <h3 class="heading-3 has-margin-b30">Zoom-in Pivot</h3>
                            <p>When doing a zoom-in pivot, our prior experiments probably show that our value proposition stems from a single feature of our product. We should focus 100% of our attention on this feature during such a pivot.</p>
                            <p class="has-margin-b60">Burbn was an app co-founded by Kevin Systrom which allowed users to check in to their favourite places and share photos from them. Kevin noticed that their users liked the photo-sharing feature more than the rest of the app, so he created a spin-off app around this single feature. Thus, Instagram was born.</p>
                            <h3 class="heading-3 has-margin-b30">Zoom-out Pivot</h3>
                            <p>In a reverse situation, a single feature is often not enough to deliver the whole value proposition. In such cases, the product as it was, becomes a feature of a new, more complex product.</p>
                            <p class="has-margin-b60">LinkedIn started as a popular platform but with limited functionality, which allowed business professionals to create a "super resume" and share changes in their job position and achievements. Later, they expanded with social functions, which led to users spending more time on the website.</p>
                            <h3 class="heading-3 has-margin-b30">Platform Pivot</h3>
                            <p>A platform pivot is most often encountered in internet and software companies. Sometimes, startups create a platform to sustain their app. Later, they realised that their customers were more interested in the platform itself.</p>
                            <p>It can work in the other direction as well. The startup is the platform itself. To popularise it, the team creates a "killer app". In the end, though, the app turns out to be more attractive to users and gets the team's entire focus.</p>
                            <p class="has-margin-b60">Although it existed before being acquired by eBay, PayPal became famous when it became the default payment solution of the marketplace giant. In 2014, eBay decided to develop PayPal further as an independent brand and product.</p>
                            <h3 class="heading-3 has-margin-b30">Business Architecture Pivot</h3>
                            <p>In the business world, we usually distinguish between two different business architectures: high margin, low volume, which we commonly link with the business-to-business (or B2B) model, and the low margin, high volume model, associated with consumer goods and the business-to-consumer (or B2C) model. In the case of a business architecture pivot, we move between these two models.</p>
                            <p class="has-margin-b60">Foursquare is a company that <a href="https://techcrunch.com/2016/05/09/how-foursquare-hopes-to-hit-profitability" target="_blank">went through</a> such a pivot. Their app allowed people to check in to places they visited: restaurants, points of interest or even cities. They could then review these places. Foursquare was extremely popular during the 2010s. After they fell out of favour with customers because of an app design decision, they switched their focus to enterprise clients by selling them the vast amount of data they collected.</p>
                            <h3 class="heading-3 has-margin-b30">Value Capture Pivot</h3>
                            <p>Employing a value capture pivot means changing the way our business creates value. This often equates to how we generate money or how we monetise our product. But this description is quite limited since there are other ways to create value. A humanitarian aid organisation, for example, creates social value first and foremost.</p>
                            <p>Duolingo, everyone's favourite language study app, initially planned to crowdsource the combined brainpower of its users to translate the web. They would offer users a phrase to translate. The app helped users understand the grammar and words in the phrase. The user learned a new language while Duolingo translated cohesive texts in the background.</p>
                            <p class="has-margin-b60">This functionality never made it past a beta version, though. Instead, Duolingo <a href="https://techcrunch.com/2017/04/21/duolingo-launches-paid-subscriptions-as-it-struggles-to-monetize-its-service/" target="_blank">introduced</a> an advertisement and subscription model to monetise their app.</p>
                            <h3 class="heading-3 has-margin-b30">Engine of Growth Pivot</h3>
                            <p>There are three distinct engines of growth startups can employ: viral, sticky and paid. During this pivot type, startups jump between these engines to achieve faster or more profitable growth.</p>
                            <p class="has-margin-b60">Often, but not necessarily, a change in the growth strategy also means changing the value capture model.</p>
                            <h3 class="heading-3 has-margin-b30">Channel Pivot</h3>
                            <p>A channel is a mechanism used to reach our customers or the first point of contact with our customers in business. A channel pivot recognises that we can provide the same solution more effectively through a different channel.</p>
                            <p class="has-margin-b60">This phenomenon can be seen in the entertainment industry. We consumed music, movies and games through the radio, the television and DVD rentals. Nowadays, we use streaming services such as Spotify, Netflix or Steam.</p>
                            <h3 class="heading-3 has-margin-b30">Technology Pivot</h3>
                            <p>Sometimes we wish to solve the same problem for the same users but switch to using a different technology. More established companies usually employ this type of pivot to be more competitive in price or performance. It may be considered an incremental change instead of a pivot.</p>
                            <p class="has-margin-b60">Although hybrid and electric vehicles also appeal to different customer needs, experimentation with alternative drivetrain technologies could be considered a technology pivot by car manufacturers.</p>
                            <h2 class="heading-2 has-margin-b30">When should you pivot?</h2>
                            <p>In the case of startups, we can talk about a concept called runway, which is the life they have before they run out of cash. During this time, a startup must prove itself to secure further funds, become self-sustaining or ultimately close its doors.</p>
                            <p>If a startup has $10M in the bank and has a burn rate of $500k per month, they have a runway of 20 months. If they start running out of cash, startups may extend their runway either by raising capital or cutting costs.</p>
                            <p>Cutting costs may also inadvertently reduce the resources needed to get through an iteration of the Build-Measure-Learn loop faster. Since the validated learning process slows, the only thing we achieve by this is slower death.</p>
                            <p>Runway can be expressed in pivots rather than time instead. If we look at it this way, we can also extend a runway by getting to a faster pivot. How many pivots can we still make before running out of cash?</p>
                            <p>Despite this, most startups still make it too late to a pivot. This can have many reasons:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-measure-the-success-of-your-startup']) }}" target="_blank">vanity metrics</a> lead them down the wrong path</li>
                                <li>they have made the <a href="{{ localizedRoute('blog.show', ['slug' => 'what-are-hypotheses-in-product-development']) }}" target="_blank">incorrect assumptions</a></li>
                                <li>they are afraid to discard an idea before it has enough time to prove itself</li>
                            </ul>
                            <p>The alternative, though, is much worse – they run out of money and close up shop.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'To Pivot or Not to Pivot – That Is the Question'])
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
    "datePublished": "2022-03-14T10:00:00",
    "dateModified": "2022-03-14T10:00:00",
    "description": "What is a pivot? How many ways can you pivot? When to pivot? All this and and more!",
    "headline": "To Pivot or Not to Pivot – That Is the Question",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-to-pivot-or-not-to-pivot.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Startup, Pivot",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "To Pivot or Not to Pivot – That Is the Question",
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
                "name": "To Pivot or Not to Pivot – That Is the Question"
            }
        }
    ]
}
</script>
@endpush
