@section('title', 'Don\'t try to build the perfect product!')
@section('description', 'I recently had an experience which once again made me realized the importance of idea validation. Here\'s my story.')
@section('preview_image', asset('media/blog/cover-dont-try-to-build-the-perfect-product-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-dont-try-to-build-the-perfect-product.png') }}" srcset="{{ asset('media/blog/featured-dont-try-to-build-the-perfect-product-768w.png') }} 768w, {{ asset('media/blog/featured-dont-try-to-build-the-perfect-product-1000w.png') }} 1000w" sizes="100vw" alt="Don't Try to Build the Perfect Product!" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Don't Try to Build the Perfect Product!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-07-14 12:00:00">Jul 14, 2020</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Do not try to build the perfect product! is advice I frequently give to clients. Feel free to launch a product that has bugs and definitely do not worry if it is missing features. Before you hang me, hear me out.</p>
                            <p>I recently had lunch with an acquaintance. Let's call him Archie. Archie invited me to lunch, because he wanted to discuss a great idea he just had. He also wanted my help with executing the idea. His idea was a digital gift which was truly unique and a forever-lasting memory. He was head-over-heels with this idea. His wife ended up in tears as she received her gift. And I must admit, I really liked the idea myself.</p>
                            <p>Ideas like this don't come around very often, so Archie jumped in head-first into execution. Creating content, building a software, drafting a marketing plan. The whole package. But he didn't quite understand why I wasn't as eager to jump in with him. He would in fact, provide us with months worth of development work!</p>
                            <p>– Don't we have the necessary capacity? – We do. – Don't we have the necessary capabilities? – We most definitely do. – Don't I like the idea? – Yes, I do like it. – Then what's the issue?</p>
                            <p>I asked Archie to write down how the project is going to make him money. – Nothing easier: we'll have at least 100k customers / month, who will buy the product for $1 each.</p>
                            <p>– Great! What are these numbers based on? – Well, we can easily reach this many people by running social media campaigns. The receiver of the gifts will like it so much, they will re-gift to others themselves.</p>
                            <p>I could've proceeded with the interrogation, but I felt that I had enough munition at this point.</p>
                            <p class="has-margin-b60">– Listen Archie. Let's take a look of our current assumptions about our customers:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>that they will definitely like the product (– That's a given. 3 out of 3 people like it! – Doesn't matter. It might be just us that are strange. I for one, know that for certain about myself…);</li>
                                <li>that they are prepared to pay $1 for it (– Why is it $1 anyway? – Because that's peanuts! Everyone would pay that much. – How do you know they wouldn't pay more? – Well uhm…);</li>
                                <li>that we will be able to reach 100k buying customers;</li>
                                <li>that it won't be only a seasonal gift;</li>
                                <li>that customers will like it so much, they will re-gift;</li>
                                <li>that we are going to have returning customers;</li>
                            </ul>
                            <p>– How do we know all the assumptions are true? – That's exactly why the product has to be perfect, so they will like it 100%.</p>
                            <p>At this point in time I recommended Archie, that he takes the one finished product he already has, the one he created for his wife, and shows it to as many people as possible. That he should create a presentation video and run an advertising campaign on that. Gather data on how many people ask him where they can get one similar product. Ask them how much they would be willing to pay for it? How many times and for how many people would they buy this product for in a year?</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-death-star.jpg') }}" alt="You don't have to strive for perfection" />
                                <figcaption>Archie wanted to start building the Death Star. Don't be like Archie!</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Validated learning: a nonconventional way to build products</h2>
                            <p>All this was hard for Archie to comprehend. This way of thinking is completely different to the conventional product development methods. This is also called Big Bang delivery. The traditional way of doing things is to perfect the product before launch: thorough market research and a solid strategy were indicators of likely success.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-eric-ries-quote-en.png') }}" alt="The overwhelming temptation is to apply them to startups too, but this doesn't work, because startups operate with too much uncertainty. Startups do not yet know who their customer is or what their product should be. — The Lean Startup, Eric Ries 2011" />
                            </figure>
                            <p>We could ask ourselves, what happens to the energy and money invested in the product, if we get negative reviews from the clients because the product is not perfect? Fair enough.</p>
                            <p>What we should be asking ourselves though, is what happens if we investe multiple times that energy and money into developing a product that customers will not buy?</p>
                            <p>If we strive for a perfect product, we will most likely never find out which of our base assumptions were wrong, leading to the complete overhaul of our product. Instead, if we proceed developing a product in small iterations, with minimal investment of effort and continuously putting our assumptions to the test, we will be able to integrate customer feedback into the newer iterations of the product. This is called validated learning.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-infographic-en.png') }}" alt="Don't Try to Build the Perfect Product - Infographic" />
                                <figcaption>Validated learning is easiest to achieve through the Build-Measure-Learn feedback loop</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Build. Measure. Learn!</h2>
                            <p>Validated learning exists to disperse uncertainty and therefore minimize the inherent risk in a start-up project. In practice, validated learning is easiest to achieve through the Build-Measure-Learn feedback loop.</p>
                            <p>The Build-Measure-Learn loop helps us to find answers to our assumptions or hypothesis. Although at different stages of product development we will be looking for <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}">different answers to core assumptions</a>, one thing will be certain: our most important task is to gather as much actionable knowledge as possible, in the shortest time possible.</p>
                            <p>This is done by developing experiments to validate our hypothesis. There are various ways to test different hypothesis, most often with the help of an experiment.</p>
                            <p>These experiments should be built with minimal effort (or development time in case of a software). Their sole purpose is to test (validate) our assumptions. Most often, features that are otherwise considered essential to the final product are left out because of this.</p>
                            <p>Creating an experiment will be the Build phase of our Build-Measure-Learn feedback loop.</p>
                            <p>It's not enough to, in fact it is crucial not to, only develop an experiment for internal use. If only our inner circle has access to the experiment, we can easily get the false sense that everything works and our assumptions are correct.</p>
                            <p>We should get the experiment in front of potential customers as soon as possible, gauge their reactions and gather feedback and actionable metrics.</p>
                            <p>This is the Measure phase of the Build-Measure-Learn loop, which followed immediately by the Learn phase.</p>
                            <p>Based on the feedback and metrics gathered, we should again take a look at our base assumptions. How many have been proved to be true? Are we closer to our product vision? If we are, we should <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}">define a new set of assumptions</a>, fine-tune our experiment or create new experiments and start the Build-Measure-Learn loop again.</p>
                            <p>If some of our assumptions are proven to be false, we should consider a pivot. A pivot means planning a new strategy in order to achieve our vision.</p>
                            <p>"Although we write the feedback loop as Build-Measure-Learn because the activities happen in that order, our planning really works in the reverse order: we figure out what we need to learn, (...) figure out what we need to measure to know if we are gaining validated learning, and then figure out what product we need to build to run that experiment and get that measurement."</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-making-sense-of-mvp-en.png') }}" alt="You need to consider having an experiment because it gives you the opportunity to test your product with actual users in the real market." />
                                <figcaption>Building an experiment in order to validate how we can get from point A to point B</figcaption>
                            </figure>
                            <p>Archie's situation is quite simple, because he already has a finished product he can use to validate his assumptions: the gift he gave to his wife. He could show this product to potential customers and gauge if they like it or not and if and how much they would be actually willing to pay for it.</p>
                            <p>If feedback were to be positive, that's great. Archie could start another iteration of the Build-Measure-Learn loop. He could now start making these digital gifts and sell it to others.</p>
                            <p>At this stage, he still wouldn't have to create all the content and build a software to fully automate the process and handle every use case. It would be enough to take these orders one at a time, write the content and assemble the gift.</p>
                            <p class="has-margin-b60">Although this takes some effort, this would allow him to test further assumptions: will he have enough customers and how many of them will return to buy again? He would also get feedback from the customers on how he could improve the product, which he could integrate in the final product. If he would've created all the content beforehand, Archie would not have this option.</p>
                            <h2 class="heading-2 has-margin-b30">So what happened to Archie in the end?</h2>
                            <p>Unfortunately, Archie decided to jump in and create the perfect product. I would like to believe this is because Archie had industry background in a field where Big Bang delivery is the de facto standard, but it might just as well be that my arguments weren't strong enough. Time will certainly tell if the project ends up being a success.</p>
                            <p>Our experience is that most founders fail at first, because they fall in love with their idea. Their product cannot be anything short of perfection, with endless eye-catching features and glitter. Most successful founders have already failed 1 or 2 projects because of this, but they have learned from their mistakes.</p>
                            <p>They, as well as Archie, wanted to build the Death Star from the get-go. You don't have to be like Archie!</p>

                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Don\'t try to build the perfect product!'])
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
    "datePublished": "2020-07-14T12:00:00",
    "dateModified": "2020-07-14T12:00:00",
    "description": "I recently had an experience which once again made me realized the importance of idea validation. Here's my story.",
    "headline": "Don't Try to Build the Perfect Product!",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-dont-try-to-build-the-perfect-product-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "MVP, Minimum Viable Product, Start-up, Idea Validation",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Don't Try to Build the Perfect Product!",
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
                "name": "Don't Try to Build the Perfect Product!"
            }
        }
    ]
}
</script>
@endpush
