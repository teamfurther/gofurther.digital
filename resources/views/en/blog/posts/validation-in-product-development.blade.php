@section('title', 'How to successfully validate your idea in product development?')
@section('description', 'In this article, we\'ll show you which design & research techniques are most useful for validating assumptions in the different phases of product innovation.')
@section('preview_image', asset('media/blog/cover-validation-in-product-development-en-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-validation-in-product-development.png') }}" srcset="{{ asset('media/blog/featured-validation-in-product-development-768w.png') }} 768w, {{ asset('media/blog/featured-validation-in-product-development-1000w.png') }} 1000w" sizes="100vw" alt="Validation in product development" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Validation in product development</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-11-02 12:00:00">Dec 21, 2020</time> &middot; 8 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">Last time I told you about my story about Archie, <a href="{{ localizedRoute('blog.show', ['slug' => 'dont-try-to-build-the-perfect-product']) }}">who had a start-up idea.</a> Unfortunately, he decided to jump into developing the product without previously validating his ideas. Today, I would like to show you what he should've done and how he could've validated his idea. But first, let's see what validation actually means.</p>
                            <h2 class="heading-2 has-margin-b30">Start-ups are inherently uncertain</h2>
                            <p>In his 2011 book, The Lean Startup, Eric Ries defines a start-up as "a human institution designed to create a new product or service under conditions of extreme uncertainty".</p>
                            <p>According to Ries, the most important part of this definition is what it omits. It doesn't say anything about the size of the organisation, the industry or sector of economy it operates in. Anyone who does product development under conditions of extreme uncertainty is a start-up.</p>
                            <p>Of course, another important part of the definition is that a start-up should create a new product or service. In other words, they should always innovate. Innovation should be understood broadly. It doesn't have to be a revolutionary change or new technology. It can also be the repurposing of an existing technology, a new business model or a new way to interact with customers.</p>
                            <p>The context in which the innovation happens is also important. If it's not done in an uncertain environment, then it is not a start-up.</p>
                            <p>Most enterprises are excluded based on this context. It might be a sound investment to create a company which is an exact clone of an existing company, including the business model, pricing, target demographic and product offering, but this will not be a start-up. The success of these businesses depends solely on execution, so much so that their success and the size of success can be modelled with high precision.</p>
                            <p class="has-margin-b60">The future is uncertain for a start-up. There is no way to know how sustainable their business model will be, if their proposed solution will solve the problem they set out to solve, or if this problem is even perceived as a problem by others.</p>
                            <h2 class="heading-2 has-margin-b30">Validated learning</h2>
                            <p>To ease uncertainty, the start-up world uses validated learning. Validated learning is a process which aims to empirically demonstrate that we are getting closer to our goals.</p>
                            <p>In practice, validated learning is achieved through the Build-Measure-Learn loop. In the Build phase we strive to create a minimal product or experiment which helps us test one or more assumptions.</p>
                            <p>The goal of these experiments is to show them as soon as possible to potential users and receive feedback and information which can be used in the next experiment. Gathering this data will be our Measure phase.</p>
                            <p>Based on the data collected, we will decide if we are closer to our goals or not. If we are, the loop starts over with a new Build phase in which we fine-tune or create new experiments to test further assumptions.</p>
                            <p>At a certain point our project will turn into a product. Soon, the product will enter the growth and maturity stages. You might think that the loop ends there, but in fact you can still use it to perfect the product or increase customer experience.</p>
                            <p>If the data shows us we reached a dead end, then we might choose to pivot, which means to develop a new strategy to reach our goals.</p>
                            <p class="has-margin-b60">This decision point in the loop is our Learn phase. Although the Learn stage is the last element of the loop, since this is where the decisions are made, our very first task at the beginning of a loop is to decide what assumptions we want to test and what we want to learn from these tests.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-infographic-en.png') }}" alt="Validation in product development - Infographic" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Assumptions and validation in the different stages of product development</h2>
                            <p>As we've seen, during our Build-Measure-Learn loop we constantly develop new experiments to test our assumptions. But what assumptions should we test in the different stages of product development? My favourite resource on this topic is the <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}" target="_blank">Lean Validation Cheat Sheet</a>.</p>
                            <h3 class="heading-3 has-margin-b30">Problem validation</h3>
                            <p>In the early stages of product development our goal should be to validate our problem. Usually, we have just recognized a problem for which we might have an idea on how it can be solved, but we don't know if it's a problem others have as well. The main question we should answer is if the problem is meaningful enough to address.</p>
                            <p>In the learning phase we should look to find answers to questions like what is the problem we wish to solve? Who else has this problem? How do they try to solve this problem currently? Is this problem important enough for them to invest their time and effort to solve this problem?</p>
                            <p>In the build phase of problem validation it's worth defining the vision and goals, user personas and customer journey map, while in the measure phase one should conduct interviews, field observations and other discovery techniques such as contextmapping.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-1-en.png') }}" alt="Validation in product development-Cheat-sheet-1" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Problem-solution fit</h3>
                            <p>When in this phase, we already know that the problem we discovered is meaningful for others as well and they are actively looking for a solution, but we are not sure that our solution truly solves the problem for them.</p>
                            <p>In this phase we are searching for answers if our solution works (and we can prove it), but also if it brings a big enough improvement to the lives of our users. We also want to answer if the users trust our solution enough to use it.</p>
                            <p>A good method to find answers to these questions is creating a value proposition canvas. This canvas helps us to position our product or solution around the needs and values of our users.</p>
                            <p>Another tool we might use in this phase is the concierge MVP. This is one of the most minimal versions of an MVP. It's so minimal, that we don't even have a product, instead we perform every function of the product manually. Of course, this is not a sustainable business model, but it isn't even our goal. In this phase, we only want answers to the above questions before we start building our actual product.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-2-en.png') }}" alt="Validation in product development-Cheat-sheet-2" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Solution-product fit</h3>
                            <p>Once in this phase, we already have a validated problem and solution. The question that remains to be answered is if we can actually develop a product that delivers this solution effectively.</p>
                            <p>We're looking to answer questions such as if our product delivers a better solution than what our users have been doing until this point, or if the product is usable.</p>
                            <p>Another important question is if using the product requires a behavioural change from our user. Think of the iPhone. It wasn't the first ever smartphone. There were many smartphones before that failed, because users didn't develop enough maturity to change their behaviour to use smartphones. Apple recognized this situation, but they were still confident in the rollout because of the previous success of the iPod, which cemented this behavioural change.</p>
                            <p>This is the first phase when we develop tangible, palpable prototype: paper prototypes, clickable demos or even a Wizard of Oz type MVP. This type of MVP is an advanced version of a concierge MVP. The prototype needs to feel like a polished product, that everything is fully automated, but in fact all the background functionality is still carried out by human operators as in a concierge MVP.</p>
                            <p>Measurements are also done on the tangible product with the help of usability tests, UX test, alpha and beta tests.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-3-en.png') }}" alt="Validation in product development-Cheat-sheet-3" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Product-market fit</h3>
                            <p>This is the last stage of our product development. At this stage we already know that our product delivers the solution to our problem effectively, but we still don't know if our business model is sustainable.</p>
                            <p>Are we able to turn users into paying customers? How many customers are we able to get and how much are they willing to pay? How many customers are going to be returning customers? These are the core questions we are looking to find answers for.</p>
                            <p>In the Build phase we are no longer creating prototypes. Instead we are building marketing campaigns: product videos, landing pages and newsletters. As for as the Measure phase goes we should concentrate on measuring the success of our campaigns based on analytics, A/B testing or pre-order experiments.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-4-en.png') }}" alt="Validation in product development" />
                            </figure>
                            <p>Whichever stage we're in, when we arrive at the end of our experiments we have to decide based on the things we learned and our measurements if our developments are getting us closer to our goals and we should persevere, or pivot instead. If we reach the end of the product development process, we can repeat these steps to further improve our product or introduce new features.</p>
                            <p class="has-margin-b90">The beauty of validated learning is that it can be applied outside the start-up world as well, in enterprise or industrial settings as well.</p>
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
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Validation in product development'])
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
    "datePublished": "2020-12-21T12:00:00",
    "dateModified": "2020-12-21T12:00:00",
    "description": "In this article, we'll show you which design & research techniques are most useful for validating assumptions in the different phases of product innovation.",
    "headline": "How to successfully validate your idea in product development?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-validation-in-product-development-en-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Start-up, Lean Validation, Lean product development, Business model, Product development",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "How to successfully validate your idea in product development?",
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
                "name": "How to successfully validate your idea in product development?"
            }
        }
    ]
}
</script>
@endpush
