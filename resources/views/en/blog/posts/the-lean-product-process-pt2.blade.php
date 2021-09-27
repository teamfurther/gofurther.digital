@section('title', 'The Lean Product Process: #2 Formulating Your Value Proposition')
@section('description', 'In this article, we\'ll show you how to formulate your value proposition in the search for problem-solution fit.')
@section('preview_image', asset('media/blog/cover-the-lean-product-process-2-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-the-lean-product-process-2-en.png') }}" srcset="{{ asset('media/blog/featured-the-lean-product-process-2-769w-en.png') }} 769w, {{ asset('media/blog/featured-the-lean-product-process-2-1000w-en.png') }} 1000w" sizes="100vw" alt="The Lean Product Process: #2 Formulating Your Value Proposition" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">The Lean Product Process: #2 Formulating Your Value Proposition</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-03-17 10:00:00">Mar 17th, 2021</time> &middot; 10 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Those of you, who did not read my <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">previous article</a>, should know that we are building a product. Well, a hypothetical one, to illustrate the different stages of lean product development.</p>
                            <p>This product is a gadget equipped with different sensors, which can be mounted on micromobility devices, like a bicycle, an e-scooter or even a skateboard. When approaching an obstacle or when detecting danger (such as a vehicle, pedestrian, crossing, etc.), our gadget will emit sound and vibration alerts, helping us travel in safety.</p>
                            <p>In the previous article, we already determined what assumptions (problem hypothesis) we need to answer in the problem validation stage and I also showed you the available tools to test these assumptions.</p>
                            <p class="has-margin-b30">Our next step will be proving the problem-solution fit. When entering this stage, in the Learn phase of our loop we'll be looking to prove the following assumptions:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>our product helps user be safer when travelling</li>
                                <li>our product improves the sense of safety of users in such a way, that would incentivise them to use the gadget regularly</li>
                            </ul>
                            <p>We call these assumption value hypotheses. As the name implies, the value hypothesis proved that our solution brings added value for our users.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-2-en.png') }}" alt="Validation in product development - Problem-solution fit" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Formulating our value proposition</h2>
                            <p class="has-margin-b60">In the problem validation stage we probably discovered lots of user pain points, and hopefully just as many opportunities to improve the daily lives of our users. If our product manages to soothe these pain points and deliver these improvements, then our value propositions will be valid, and our problem-solution fit proven. Let us see what steps we can take to achieve this.</p>
                            <h3 class="heading-3 has-margin-b30">Value proposition canvas</h3>
                            <p>One of the most useful tools to prove problem-solution fit is the value proposition canvas, introduced by Alex Osterwalder and co., in their book titled Value Proposition Design. The canvas is as simple as it gets: it's made of 1 square and 1 circle.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-value-proposition-canvas-en.png') }}" alt="Value proposition canvas" />
                            </figure>
                            <p class="has-margin-b30">We begin filling our canvas with the circle, which contains our observations of our target audience. The circle (user profile) is sliced into 3 subsections:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Customer jobs - functional (I want to get from A to B), emotional (I feel safe) and social (I look good while travelling) actions that our users perform.</li>
                                <li>Pains - obstacles, negatives and frustrations that our user would rather avoid.</li>
                                <li>Gains - positive outcomes, added value or desired that our user longs for.</li>
                            </ul>
                            <p>We can source this information from the user personas we created in the problem validation stage, as the assumptions we set when creating the personas have been already confirmed (or contradicted) by the user interviews. You did update your personas after the interviews, did you?</p>
                            <p>If we have several personas, we are going to have multiple value proposition canvases since, naturally, we have a different value proposition for each user group. Write down each job, pain point and gain on a post-it note and stick it in the correct space on the canvas. If you wish to create a digital canvas, I would recommend using <a href="https://miro.com/" target="_blank">Miro</a>.</p>
                            <p class="has-margin-b30">When done with the circle, we can move on to the square, called the value map in the Value Proposition Design, which is also split into 3 subsections:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Products and services - the services and product that deliver our value proposition. In our case, this can be the gadget itself, the companion mobile app (because you must have one, don't you?), or even customer support.</li>
                                <li>Pain relievers - the pain points that the above services or products relieve or how they are improving the lives of the users.</li>
                                <li>Gain creators - the gains delivered by the above services or products or how they improve results for users.</li>
                            </ul>
                            <p>Scribble them on a post-it and paste them onto the canvas. Compare the pain points and gains under the user profile (circle) with the pain relievers and gain creators under the value map (square). Do they match? If so, then we (probably) have a product-solution fit.</p>
                            <p>If they don't match, then we should look at the canvas more closely. Pain relievers and gain creators that don't have a corresponding item under user profile, are probably answers to user needs that don't exist, hence they are superfluous.</p>
                            <p>On the other hand, if some pain points or gains don't have any correlation on the value map, then it's a good indicator that the service or product needs more thought.</p>
                            <p>Pain points and gains can also be prioritised. We should by now, based on the interviews, have a pretty good understanding of which are the most important to our users. If some pains or gains are repeated across multiple user groups (personas), then that is a good reason to give them a higher priority. Concentrating on the essentials and we should iterate until a correlation is achieved between the user profile and value map.</p>
                            <p class="has-margin-b60">A value proposition canvas can be filled by us, as a team, but as with journey maps, it's much more exciting to co-create it together with potential users.</p>
                            {{--<a href="" target="_blank">Download our free product development tool bundle, in which you can find a template for a value proposition canvas.</a>--}}
                            <h3 class="heading-3 has-margin-b30">User-centered business canvas</h3>
                            <p>Another canvas… I think it's getting pretty obvious by now, that I love canvases.</p>
                            <p>I first learned of the user-centered business canvas from Csaba Házi's <a href="https://csabahazi.com/ux-kitchen-podcast/007" target="_blank">UX Kitchen</a> podcast, and immediately started using it, albeit with a couple of tweaks. The structure of the canvas closely resembles that of Alex Osterwalder's other famous canvas, the business model canvas, and Ash Maurya's lean canvas. This isn't by accident, as the UCBC was heavily influenced by them. But while the former is much more business focused, and the latter problem and product focused, the UCBC puts the relation between user needs and solution front and center.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-user-centered-business-canvas.png') }}" alt="User centered business canvas" />
                            </figure>
                            <p>But let us see what this canvas is all about. We can see 11 cells, split into 3 distinct sections. The leftmost 2 cells describe our problem, the middle 6 describe the relationship between user and solution, while the rightmost 3 are all about the business aspects. These 3 sections create an easy to follow product development curve, all the way from problem validation to product-market fit.</p>
                            <p>We already know the answers to the problem section from the user interviews in the problem validation stage. We input the user problems, pain points and challenges in the top cell, and the existing solutions in the bottom cell. These can be competitors, but also methods our users currently employ to solve their problems. In our case, these will be the other safety gadgets on the market.</p>
                            <p>The middle section will also be familiar. The user types are basically our personas. The user needs/goals and user fears cells can also be found in our personas.</p>
                            <p>I must however talk a bit about early adopters. The term early adopter was popularized by Geoffrey Moore, in his book title Crossing the Chasm. Moore identified 5 distinct user types, based on how likely they are to start using new technologies (or products).</p>
                            <p>These are the innovators, early adopters, early majority, late majority and the laggards. Moore observed, that for most new technologies (especially disruptive technologies) it's exponentially harder to reach (or to market to) the early majority compared to the early adopters. Hence the chasm.</p>
                            <p>To be able to test our product, we must first convince our early adopters. They are going to be the key to reaching the majority, and that is the reason why they have an important space on our canvas.</p>
                            <p>Going forward with our canvas, we reach the solutions and value proposition cells. Luckily, we already have these filled in our value proposition canvas!</p>
                            <p>The final 3 cells describe business aspects, which we won't cover in the problem-solution stage. But they should be pretty self-explanatory.</p>
                            <p class="has-margin-b60">The UCBC, just as the personas or the user interviews, is a tool that can be used throughout the different stages of product development. Sometimes I start with the UCBC and use it to build my personas and value proposition. But most often, I first use it in the problem-solution fit stage.</p>
                            {{--<a href="" target="_blank">Download our free product development tool bundle, in which you can find a template for a user-centered business canvas.</a>--}}
                            <h2 class="heading-2 has-margin-b30">Testing our value proposition</h2>
                            <p>By tinkering with our value proposition until we correlate the user profile and value map, we haven't yet proven our value hypothesis, and we cannot yet talk about a problem-solution fit. We have to test this correlation. Note that, if we co-created the value proposition with potential users, we have already made a small step in the right direction.</p>
                            <p class="has-margin-b60">You could ask yourself the question, and rightly so, how we can test our assumptions, without a product? Luckily enough, there are some more tools in our arsenal, that can help.</p>
                            <h3 class="heading-3 has-margin-b30">Surveys</h3>
                            <p>Probably the most widely used validation tool is the survey. While the user interviews count as a qualitative tool, surveys and quantitative.</p>
                            <p>Lots of product teams wrongly use surveys in the problem validation stage, as a substitute for interviews. The problem with this is that it assumes we know the questions we need to ask of our users. Furthermore, because you also need to offer response options, it assumes we already know the answers. As we learned from the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">last article</a>, the problem validation stage focuses on discovering about the unbeknown. And for that purpose, interviews are a much more suitable tool since we can ask follow up questions and dig deeper.</p>
                            <p>But while surveys are not suitable in the early stages, they are much more effective in confirming the knowledge we have already acquired. Dan Olsen, in his book titled The Lean Product Playbook, calls this doing quant on qual, that is doing quantitative research and qualitative data.</p>
                            <p>Let's create a survey which tests our value proposition. Do our pain relievers really soothe the pain points? Do the gain creators deliver the expected results?</p>
                            <p>In the case of our product, we might ask respondents to rate on a scale of 5, how likely they would be to trust such a gadget, or how important they consider they're safety to be in relation to that of others (like pedestrians). We could even ask which functions would they rather control via the gadget's touch screen or buttons, and which could be hidden inside the companion app.</p>
                            <p>Debunking all the secrets of the art of surveying is beyond the scope of this article, but if I had to point out the one thing everyone should take into consideration, is including filter questions at the beginning of your survey. These questions allow us to filter out non-relevant responders.</p>
                            <p>In the case of our product, responders who never use micromobility devices, will not be relevant to us. Similarly, opinions of those who only use them in controlled, safe environments like skate parks, will be less applicable. We should ask them preliminary questions like how often do they use micromobility devices? Where do they use them (in what context)?</p>
                            <p class="has-margin-b60">When compiling preliminary questions, we can turn to personas again (I told you they'll become useful later on as well). If we have multiple personas, consider creating several personalized surveys.</p>
                            <h3 class="heading-3 has-margin-b30">Concierge experiment</h3>
                            <p>Another technique to test our value proposition is the concierge experiment. This experiment involves selecting a couple of users, for whom we provide a similar user experience as the end product would do, while implementing the functions manually in the background. Basically, we replace a complex technical solution with humans.</p>
                            <p>Obviously, this experiment doesn't work for every type of product. Let's take our product idea for example. Unless we want to run after an electric scooter, shouting at the operator when we spot some danger, it's hard to see how this experiment can be implemented. More importantly, it's also pretty far from the expected user experience.</p>
                            <p>Probably the best known concierge experiment is that of Manuel Rosso and his Food on the Table project, which Eric Ries also mentioned in his The Lean Startup book. Manuel's vision was a digital product  that would take into account the eating habits of users and the different discounts at local stores, and compile a weekly meal plan and grocery list.</p>
                            <p>Instead of jumping in and starting to develop the software, Manuel chose to experiment first. He picked 1 user (!) and spent some time understanding her eating habits and favourite recipes. After this, he delivered her every week with the groceries and a recipe list which can be created from those groceries. He asked the lady's opinion of the recipes which allowed him to improve his service, and more importantly he took a check for $9.95.</p>
                            <p class="has-margin-b60">Of course this was not profitable and nowhere near a scalable business. But Manuel did gain valuable new information week in, week out. Soon, he expanded his customer base with a couple of new users. The simple fact, that these users were willing to pay for this service every time they knocked on their door, proved their value proposition.</p>
                            <h2 class="heading-2 has-margin-b30">Conclusions</h2>
                            <p class="has-margin-b30">When starting our search for the problem-solution fit, we were looking to prove the following assumptions:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>our product helps user be safer when travelling</li>
                                <li>our product improves the sense of safety of users in such a way, that would incentivise them to use the gadget regularly</li>
                            </ul>
                            <p>Our first step was to define our value proposition. This can be done by (co-)creating a value proposition canvas. A user-centered business canvas can help visualise the user needs and possible solutions.</p>
                            <p>These tools help us define, structure and visualize, but they are not enough to prove our assumptions. To do that, we can use surveys or a concierge experiment, if the nature of our product allows it.</p>
                            <p>Once we manage to prove our assumptions, we can proceed to our <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt3']) }}">solution-product fit stage</a>, otherwise we can always pivot.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'The Lean Product Process: #2 Formulating Your Value Proposition'])
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
    "datePublished": "2021-03-17T12:00:00",
    "dateModified": "2021-03-17T12:00:00",
    "description": "In this article, we'll show you how to formulate your value proposition in the search for problem-solution fit.",
    "headline": "The Lean Product Process: #2 Formulating Your Value Proposition",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-the-lean-product-process-2-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Value proposition, Value Proposition Canvas, User Centered Business Canvas",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "The Lean Product Process: #2 Formulating Your Value Proposition",
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
                "name": "The Lean Product Process: #2 Formulating Your Value Proposition"
            }
        }
    ]
}
</script>
@endpush
