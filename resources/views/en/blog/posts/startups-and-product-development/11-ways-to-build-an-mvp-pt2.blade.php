@section('title', '11 Ways to Build an MVP')
@section('description', 'Join us, to find an answer to what an MVP is, how can you build one and what the most popular types of MVP are. Let\'s continue!')
@section('preview_image', route('generate-cover', ['title' => '11 Ways to Build an MVP']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">11 Ways to Build an MVP</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-11-22 10:00:00">Nov 22nd, 2021</time> &middot; 8 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">This article is the second part of our article about the different types of prototypes used during <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">product validation</a>. If you haven't read the <a href="{{ localizedRoute('blog.show', ['slug' => '11-ways-to-build-an-mvp-pt1']) }}" target="_blank">first part</a>, we suggest you start with that.</p>
                            <h2 class="heading-2 has-margin-b30">Imitation prototypes</h2>
                            <h3 class="heading-3 has-margin-b30">Concierge experiment</h3>
                            <p>The prototypes mentioned in part one looked to answer whether we could market our product. The concierge experiment, on the other hand, answers a different question. It answers whether the proposed solution actually solves the identified users problems. This also means that this experiment is used earlier in the product development process, in the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">product-solution fit</a> stage.</p>
                            <p>To run a concierge experiment, we have to choose a couple of users, who we will try to service in a way as close as possible to the user experience offered by the envisioned final product but by performing every function manually. Basically, we substitute a complicated technical solution with humans.</p>
                            <p>Naturally, this method doesn't work for any product. But, if we can deliver our value proposition to our target market with this "manual" product while also providing an acceptable user experience, it can be one of the most efficient validation tools.</p>
                            <p>The most famous concierge experiment is that of Food on the Table. But since I have <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">already mentioned</a> their story, I decided to look for a different example. I instantly regretted this decision since it seems every search for the concierge experiment keywords brings up Food on the Table.</p>
                            <p>After a long search which cost me my lunch break, I stumbled upon Seamless. Seamless is a food delivery service similar to Grubhub (who now owns Seamless), Doordash in the US, JustEat in Europe, or Deliveroo in the UK.</p>
                            <p>When they started in 1999, Seamless had no idea if people would prefer ordering from a food directory instead of ordering directly from the restaurant with pickup. They decided to test their hypothesis by contacting several office buildings with the opportunity for their office workers to order their lunch through Seamless.</p>
                            <p class="has-margin-b60">Office managers collected the orders each day, faxed (!) them to the Seamless founders who placed the orders with the restaurants, then picked them up and delivered them to the office. When they grew to a point where they couldn't cope with the orders anymore, they knew there was a demand for their service and started software development.</p>
                            <h3 class="heading-3 has-margin-b30">Wizard of Oz prototype</h3>
                            <p>The main difference between the concierge experiment and the Wizard of Oz prototype (WoZ) is that in the case of a concierge experiment, it is evident for users that the functionality is driven by a human. With a WoZ prototype, the manual functions are hidden behind a product shell.</p>
                            <p>The WoZ prototype is one which we often use at Further, but Seamless could've also used it instead of a concierge experiment by creating a website that allows users to place orders but without any background automation.</p>
                            <p>Offers would be uploaded by the Seamless team instead of the restaurants, who would also place the orders manually towards the restaurant, while payment would only be possible at delivery. This would've been a more significant initial investment by them than the concierge experiment was, but still much cheaper than developing the complete system.</p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-wizard-of-oz-ibm.jpg') }}" alt="Wizard of Oz prototype by IBM" />
                                <figcaption>IBM has created Wizard of Oz prototypes as early as the 80s to test <a href="https://deepblue.lib.umich.edu/bitstream/handle/2027.42/174/71952.0001.001.pdf" target="_blank">several products</a>.</figcaption>
                            </figure>
                            <p>One of the most notable examples of a WoZ prototype is Zappos. We're back in 1999 again, as Nick Swinmurn was looking to buy himself a Nike Airwalk but couldn't find one in his local shoe store. As a software engineer, he immediately thought to himself, what if people could buy shoes through a webpage. Bear in mind that the answer to this question wasn't at all that obvious two decades ago.</p>
                            <p>Creating an online shoe store can get pretty expensive, pretty fast, because of the level of inventory one needs to keep. You also have to consider size replacements, return merchandise and hard to sell sizes. So before jumping in and creating one, Nick decided to test his idea.</p>
                            <p>He visited multiple stores, took photos of the shoes he believed he could sell, and then posted them on his website. When someone ordered a shoe from the website, he went to the shop, bought it, and shipped it to the customer. Obviously, this wasn't a sustainable and profitable model, but it was enough proof for Nick that there is demand for online shoe shopping.</p>
                            <p>Since the users believe they are using a finished product when using a WoZ prototype, we can use it to test not only our value proposition but also the user experience and usability of our product. Because of this, it's used primarily in the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt3']) }}" target="_blank">solution-product fit</a> stage of product development.</p>
                            <p>But why is it called a Wizard of Oz prototype? In L. Frank Baum's tale, The Great Wizard of Oz, the ruler of the Land of Oz, revered by his people, is a character that is unseen for most of the story. When he does make an appearance, it is in the shape of a fairy, a giant head or a ball of fire.</p>
                            <p class="has-margin-b60">At the end of the story, Toto, the dog strays from his owner and pulls a curtain away, he reveals the truth: the Wizard of Oz is just a swindler circus performer who operates the ball of fire with the help of a machine. The story is very similar to our experiment. When we finish presenting our prototype and gathering feedback, we can also reveal the humans behind the experiment.</p>
                            <h3 class="heading-3 has-margin-b30">Piecemeal prototype</h3>
                            <p>A piecemeal prototype is one where we use several existing products to put together a prototype that imitates the final functionality of our product.</p>
                            <p>An excellent example of this prototype is Skillshare. Skillshare is an online tuition platform similar to Udemy or Coursera. This type of platform is very popular nowadays, but in 2011 when Malcolm Ong and Michael Karnjanaprakorn (I'm just going to stick to M&M from here on) started Skillshare, it was quite a novel idea.</p>
                            <p>But since it was a novel idea and there weren't any similar products on the market, M&M were unsure if people would be willing to pay for courses that are not by a university professor or otherwise accredited by an educational institution. Before they started building their educational marketplace, M&M decided to test.</p>
                            <p>They created a simple landing page that listed the courses. To make it possible to buy these courses, they uploaded each one as an event on Eventbrite, a service that allows people to buy tickets for shows, concerts, conferences or, in this case, courses.</p>
                            <p class="has-margin-b60">M&M managed to prove their concept with the help of a simple landing page builder and a 3rd party service without writing a single piece of code.</p>
                            <h2 class="heading-2 has-margin-b30">Low-fidelity prototypes</h2>
                            <h3 class="heading-3 has-margin-b30">Paper prototypes</h3>
                            <p>Although their primary purpose is different, we can use blueprints, technical drawings, and even hand-drawn sketches to validate an idea. We don't show a house to the buyer when it's already built. Instead, we first create floor plans to validate if internal spaces' division and functions are right.</p>
                            <p>Fashion designers don't start creating a new dress by choosing a fabric and cutting it up. Instead, they draw sketches, show them to a focus group and collect feedback.</p>
                            <p class="has-margin-b60">The rough representations of a product are called low-fidelity prototypes.</p>
                            <h3 class="heading-3 has-margin-b30">Wireframes</h3>
                            <p>Wireframes are the best known low-fidelity prototypes, especially in the case of digital products. They are basically black and white representations of a user interface, consisting of simple lines and shapes. Wireframes are an incredibly efficient way to illustrate the positioning and hierarchy of elements within a page and give users a feel of the product as they would use it.</p>
                            <p>Some of the tools you can use to create wireframes are <a href="https://balsamiq.com/" target="_blank">Balsamiq</a>, <a href="https://www.uxpin.com/" target="_blank">UXPin</a> or <a href="https://miro.com/" target="_blank">Miro</a>.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-lowfi-vs-highfi.png') }}" alt="A low-fidelity wireframe and a high-fidelity mockup" />
                                <figcaption>A low-fidelity wireframe and a high-fidelity mockup</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">High-fidelity prototypes</h2>
                            <h3 class="heading-3 has-margin-b30">Interactive mockup</h3>
                            <p>High-fidelity prototypes are refined versions of low-fidelity prototypes. The high-fidelity prototype often encountered is the mockup. In the case of a digital product, the mockup will be the actual UI design. These mockups can have various levels of interactivity. In their most basic form, they aren't interactive at all. The UI design is nothing but an image.</p>
                            <p>The minimal interaction we can introduce is clickability, meaning that a new page floats in whenever we click a link or a button. This might seem like a minor feature, but it's a huge step forward since it allows users to grasp the flow of the software.</p>
                            <p>We can further advance interactivity by introducing animations or showing how users can interact with forms (e.g. making an input red if they provide an unacceptable value).</p>
                            <p>You can create interactive prototypes with the help of tools such as <a href="https://www.figma.com/" target="_blank">Figma</a>, <a href="https://www.sketch.com/" target="_blank">Sketch</a>, <a href="http://invisionapp.com/" target="_blank">Invision</a> or <a href="https://www.adobe.com/products/xd.html" target="_blank">Adobe XD</a>.</p>
                            <p>It's always worth considering where we want to place our prototypes on the fidelity and interactivity scale. The higher the fidelity and interactivity, the more accurate the picture we'll be able to give the users of the proposed user experience, and the more relevant their feedback will be. The ratio between the invested energy and resources versus the amount of knowledge to be gained will be the deciding factor.</p>
                            <p>I prefer starting with a non-clickable wireframe and putting it through the build-measure-learn loop once. I use the experiences of this test to then build a clickable mockup, which I iterate until I get the feedback that I have achieved the desired user experience.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-prototype-fidelity-interaction-ux-en.png') }}" alt="Comparing prototypes" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Pocket prototype</h3>
                            <p class="has-margin-b60">A reduced-size or miniature representation of a product is called a pocket prototype. Since pocket prototypes are much cheaper to create than the final product but deliver a similar user experience, they efficiently validate physical products.</p>
                            <h3 class="heading-3 has-margin-b30">Single-feature prototype</h3>
                            <p>The Pareto principle states that 80% of the consequences come from just 20% of the causes. This 80/20 rule also applies to products. 80% of the added value stems from 20% of the functionality. This is the basis of the single-feature prototype.</p>
                            <p>Search for the one central function which brings the most value to users, build it and test it. Since we're only solving a single user pain point, this prototype is also called one painkiller prototype.</p>
                            <p>The founders of Spotify, Daniel Ek and Martin Lorentzon, wanted to solve the problem of illegal music piracy. The basic premise was that music publishers could make money by royalties from subscription fees instead of selling records.</p>
                            <p>What they didn't know was if users would be willing to pay for a streaming service since streaming was notoriously unreliable back in those days.</p>
                            <p class="has-margin-b60">"We spent an insane amount of time focusing on latency when no one cared because we were hell-bent on making it feel like you had all the world's music on your hard drive." — Daniel Ek, Spotify founder.</p>
                            <h2 class="heading-2 has-margin-b30">Afterword</h2>
                            <p>As we've seen, we can use the above prototypes to validate our value proposition, test the user experience of our product or gauge market demand. But we should only employ them once our problem has already been <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">validated</a> and we have set up the right metrics. Stay with me as we dive into these metrics and more product development and startup related topics!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => '11 Ways to Build an MVP'])
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
    "datePublished": "2021-11-22T12:00:00",
    "dateModified": "2021-11-22T12:00:00",
    "description": "Join us, to find an answer to what an MVP is, how can you build one and what the most popular types of MVP are. Let's continue!",
    "headline": "11 Ways to Build an MVP",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-11-ways-to-build-an-mvp-2-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, MVP, Minimum Viable Product, Startup",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "11 Ways to Build an MVP",
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
                "name": "11 Ways to Build an MVP"
            }
        }
    ]
}
</script>
@endpush
