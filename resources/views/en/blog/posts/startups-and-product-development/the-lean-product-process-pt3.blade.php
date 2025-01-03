@section('title', 'The Lean Product Process: #3 Creating Your Prototype')
@section('description', 'Let\'s explore how to create prototypes in order check if your product is usable and delivers the expected user experience.')
@section('preview_image', route('generate-cover', ['title' => 'The Lean Product Process: #3 Creating Your Prototype']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">The Lean Product Process: #3 Creating Your Prototype</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-04-29 10:00:00">Apr 29th, 2021</time> &middot; 10 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Let's start with a public service announcement: if by any chance you found this article without knowing its priors, then you should read my previous articles. I'm dissecting the four stages of <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">lean product development</a>. So far, we have <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">validated our problem</a> and proved that our solution <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">partially or completely solves said problem</a>.</p>
                            <p>The third stage in our product development journey will be searching for solution-product fit. As the name implies, we will look to prove that our product efficiently delivers the already validated solution.</p>
                            <p>As was the case with the previous two stages, I will use our imaginary product to illustrate the tools we can use in the build-measure-learn loop to prove solution-product fit.</p>
                            <p>If you missed out, we're developing a gadget equipped with multiple sensors attached to micromobility vehicles, such as a bike, an e-scooter or even a skateboard. When approaching an obstacle or sensing danger (motor vehicles, pedestrians, crosswalks, etc.), our gadget will emit sound and vibration alerts to keep us safe while travelling.</p>
                            <p class="has-margin-b30">As I mentioned a couple of rows above, our main question is if our product will efficiently deliver the desired solution. We can break up this central question into the following assumptions:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>the product is easy to use</li>
                                <li>users trust the product</li>
                            </ul>
                            <p>We call these assumptions usability hypotheses.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-3-en.png') }}" alt="Validation in product development - Solution-product fit" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Creating our prototype</h2>
                            <p>I cautioned my readers many times before <a href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}" target="_blank">not to jump head-first into developing an actual product</a>. But now, since we're in the solution-product fit stage, we can surely start building a product, right? Well, the answer to that question is both yes and no.</p>
                            <p class="has-margin-b60">In some sense, we are building a product since it will be a tangible, visible object that we will give our users to test. But the goal still isn't to create a chiselled product that you can sell to your customers but to create a prototype with minimal functionality that you use to test your usability hypotheses. In the startup world, they call this prototype an MVP.</p>
                            <h3 class="heading-3 has-margin-b30">MVP</h3>
                            <p>The term MVP, which stands for minimum viable product, was first coined by Frank Robinson in 2001 and then popularised by Steve Blank and Eric Ries. Nowadays, it's probably the most notorious jargon in the startup dictionary, known by many even outside the startup bubble. But just as popular as the term MVP is, it's just as divisive as well.</p>
                            <p>Those who paid attention to my <a href="{{ localizedRoute('blog.tags.show', ['slug' => 'startups-and-product-development']) }}" target="_blank">articles about lean product development</a> probably already noticed that I tend to avoid using the term MVP because each part of its name is easy to misinterpret. Instead, I substitute it with experiment or prototype.</p>
                            <p>First off, there's the word "product" in the name. "Product" immediately suggests we're going to build something finite, something chiselled. Since even the less experienced product teams know that building an MVP is one of the first steps in developing a product, they often skip the problem validation and problem-solution fit stages altogether.</p>
                            <p>This approach couldn't be any more wrong. The concierge experiment, which I wrote about in my <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">previous article</a>, could also be considered an MVP. Moreover, startup literature often calls it a concierge MVP. But as we've seen, it is an important tool of the problem-solution fit stage.</p>
                            <p>Because of the word "product", many people also find it hard to stay within the scope of an MVP and start adding functions to the MVP, which have no relation whatsoever to our value proposition or merely serve as glitter. This phenomenon is even harder to control when involving stakeholders who have no lean product development experience.</p>
                            <p>Because of the word "minimal", many commit the exact opposite and present an MVP that is way too basic. An MVP isn't equal to solving the most critical issues but representing our entire value proposition. If the MVP fails to live up to the expectations of our early adopters, we often won't get another chance to prove ourselves, and we will lose our most important means of gaining early traction.</p>
                            <p>A typical example is when an MVP delivers the expected functionality but doesn't deliver the desired user experience. For instance, if our gadget's MVP does alert us of impending danger but does this while being extremely bulky and weighing as much as a fat cat, it will miss out on the user experience factor.</p>
                            <p>In some cases, it can prove to be highly costly and time-consuming to represent our entire value proposition in a single MVP. Decreasing the size and weight of our gadget may raise our costs exponentially with each ounce saved.</p>
                            <p>In situations such as this, it's worth breaking up the value proposition into its parts. The prototype, which can be mounted to the vehicle and emits sound and vibrating alerts, may prove part of our hypothesis that it can be trusted and help travel more safely. The second part, relating to the user experience, which is how the product looks and feels and how easy it is to use, can be proven by another prototype, such as 3D renderings.</p>
                            <p>The aim of an MVP is to take (part of) our value proposition with minimal resources through the build-measure-learn loop. To avoid misunderstanding the term MVP, I will use the words prototype and experiment for the reasons mentioned above.</p>
                            <p class="has-margin-b60">We can differentiate <a href="{{ localizedRoute('blog.show', ['slug' => '11-ways-to-build-an-mvp-pt1']) }}" target="_blank">lots of prototypes</a>. Let's see which of these can we encounter most often in the solution-product fit stage.</p>
                            <h3 class="heading-3 has-margin-b30">Low-fidelity prototypes</h3>
                            <p>Building a prototype is not much different from building a house. We don't (usually) build the house first and then show it to the client. We instead start by creating floor plans to check if they like the division and functions of the interior space. Then we create 3D models to show the customers the different colours, textures and other interior design features.</p>
                            <p>Of course, the plans and visualisations have other uses as well since the contractor uses them to build the house. But this isn't different with our product either. The technical drawings and 3D models will also be used in later prototypes and to create the final product.</p>
                            <p>Building upon earlier prototypes is nothing out of the ordinary. Prototypes can and should be based on earlier prototypes. The purpose of these prototypes is to take an assumption through an iteration of the build-measure-learn loop and then change them or expand them with new functions based on the knowledge acquired to test a new set of assumptions.</p>
                            <p>The first prototypes will be rough representations of the product. These are called low-fidelity prototypes. Later on, as we refine them, they will more closely resemble the final product. Those will be called high-fidelity prototypes.</p>
                            <p>The most basic version of a low-fidelity prototype is the <strong>paper prototype</strong>. And I don't mean something like a paper aeroplane, although if you think about it, a paper plane does prove that certain shapes exist that can keep themselves up in the air and glide forward. Instead, I mean the aforementioned technical drawings, visualisations, or assembly guides. These can all help the user visualise the look and feel of the final product.</p>
                            <p>Probably the most well-known low-fidelity prototype is the <strong>wireframe</strong>. Wireframes are black and white user interface representations made of simple lines and other geometrical shapes. They can impeccably illustrate the position and hierarchy of elements in a layout. A wireframe helps the user sense how he or she will be able to use the product.</p>
                            <p>For our gadget, we could create wireframes of the touch-screen user interface or the companion mobile app. Show these to the users, and ask for their opinion.</p>
                            <p>Of course, neither paper prototypes nor wireframes are paper-based nowadays. Instead, they are digitised, using purpose software like <a href="https://balsamiq.com" target="_blank">Balsamiq</a>, <a href="https://www.uxpin.com" target="_blank">UXPin</a> or even <a href="https://miro.com" target="_blank">Miro</a>.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-lowfi-vs-highfi.png') }}" alt="Low-fidelity wireframe vs high-fidelity mockup" />
                                <figcaption>Low-fidelity wireframe (left) of a website section and its high-fidelity counterpart (right).</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">High-fidelity prototypes</h3>
                            <p>As mentioned, high-fidelity prototypes are refined versions of their low-fidelity counterparts. The most frequently used high-fidelity prototype for physical products is the <strong>pocket prototype</strong>, which can be a scaled-down or a full-size representation of the product. In its final size, materials and colours, a shell of our gadget, empty on the inside, can be considered a pocket prototype. The difference between the pocket prototype and the finite product will be that the prototype won't be functional.</p>
                            <p>We can use <strong>mockups</strong> in the case of software products, such as the embedded application running on our gadget. User interface designs can be considered a mockup. These mockups can have different levels of interactivity. In their simplest form, they are not interactive at all. The UI designs are simple images.</p>
                            <p>The minimal interaction we can bestow upon our mockups is making them clickable. This means that when a user clicks certain elements, such as links or buttons, another screen floats in. Such interaction seems like a small add-on, but it is a massive step in the user's eyes, as it gives them a sense of how information flows through the software.</p>
                            <p>If we wish to represent the user experience of the final product realistically, we can up the interactivity ante. We can add animations to the mockup or show the user how they can interact with form fields (like a colour change when a field gets clicked, or the labels become red if we input an invalid value, etc.).</p>
                            <p>There is specialised software to create mockups, such as <a href="https://www.sketch.com" target="_blank">Sketch</a>, <a href="https://www.figma.com" target="_blank">Figma</a>, <a href="http://invisionapp.com" target="_blank">Invision</a> or <a href="https://www.adobe.com/products/xd.html" target="_blank">Adobe XD</a>. We can also use this software together.</p>
                            <p>It's always worth considering where to place our prototypes on the fidelity and interactivity scale. The deciding factor will be the ratio between the invested energy and resources versus the amount of knowledge gained. The higher the fidelity and interactivity, the more accurate the picture we'll be able to give our users of the proposed user experience, and the more relevant their feedback will be.</p>
                            <p>I prefer starting with a non-clickable wireframe and putting it through the build-measure-learn loop once. I use the experiences of this test to build a clickable mockup, which I iterate until I get the feedback that I have achieved the desired user experience. It doesn't have to be perfect, but it has to deliver the desired level.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-prototype-fidelity-interaction-ux-en.png') }}" alt="Prototypes comparison" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Wizard of Oz prototype</h3>
                            <p>Creating a Wizard of Oz prototype can be an exciting opportunity in the solution-product fit stage. But how does magic come into the picture, and what does product development have to do with L. Frank Baum's children's tale?</p>
                            <p>A Wizard of Oz type of prototype aims to allow users to experience the final product's full functionality and user experience. But how does that differ from the finished product then?</p>
                            <p>We will execute some functions manually with the Wizard of Oz prototype, similarly to a concierge prototype. But unlike the concierge experiment, the user won't be aware of this until the very end.</p>
                            <p>In our case, we could give the gadget to the user to mount to their vehicle and test it out. But this gadget won't have any sensors yet, doesn't give alerts, and we haven't developed any software for it yet. For the user to get the desired user experience, undercover colleagues of ours will monitor the test. When the user approaches an obstacle, they will manually deploy the audio and vibration alerts to the gadget.</p>
                            <p class="has-margin-b60">Hopefully, the user won't suspect anything until we disclose our mischievous actions in the debrief interview and feedback session, just like in the story when Toto the dog pulls away the curtains to reveal that our colleague has been directing us similar to a wizard.</p>
                            <h2 class="heading-2 has-margin-b30">How to measure the effectiveness of the prototype?</h2>
                            <p>By now, I have presented several prototypes. But how do we measure their success? What data can we rely on when declaring our assumption as true or false?</p>
                            <p>We could perform detailed usability tests and UX tests. These will give us invaluable empirical insights and are more often worth doing than not. But suppose, for some reason, we are unable to do these. In that case, we can always rely on the good old <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-run-successful-user-interviews']) }}" target="_blank">user interviews</a> (in fact, usability and UX tests are a specific version of user interviews, or they are at least very connected).</p>
                            <p>We should ask our users to tell us how easy it was to use the product, their general experience using it, whether they found it safe to use (did they trust it), or if they encountered any obstacles in using it. If we receive positive feedback for all of the above questions, we can proceed to the last stage of product development, the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt4']) }}" target="_blank">product-market fit stage</a>. If not, then — yes, you know it by now — we should <a href="{{ localizedRoute('blog.show', ['slug' => 'to-pivot-or-not-to-pivot']) }}" target="_blank">pivot</a> and formulate a new set of assumptions and start the solution-product validation stage anew.</p>
                            <div class="columns">
                                <div class="column is-6-desktop">
                                    <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}">
                                        <img src="{{ asset('media/freebies/lean-validation-cheat-sheet-mockup-en.png') }}">
                                    </a>
                                </div>
                                <div class="column is-6-desktop">
                                    <p class="has-margin-b30">If you liked this article, download the accompanying infographic!</p>
                                    <a class="btn is-large is-pearl" href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}">I want the infographic</a>
                                </div>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'The Lean Product Process: #3 Creating Your Prototype'])
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
    "datePublished": "2021-04-29T12:00:00",
    "dateModified": "2021-04-29T12:00:00",
    "description": "Let's explore how to create prototypes in order check if your product is usable and delivers the expected user experience.",
    "headline": "The Lean Product Process: #3 Creating Your Prototype",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'The Lean Product Process: #3 Creating Your Prototype']) }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, MVP",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "The Lean Product Process: #3 Creating Your Prototype",
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
                "name": "The Lean Product Process: #3 Creating Your Prototype"
            }
        }
    ]
}
</script>
@endpush
