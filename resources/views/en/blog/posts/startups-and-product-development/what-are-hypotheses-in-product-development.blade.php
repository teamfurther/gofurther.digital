@section('title', 'What are Hypotheses in Product Development?')
@section('description', 'In this article we\'ll explore the different types of assumptions, which ones you should make and how to formulate and test them.')
@section('preview_image', route('generate-cover', ['title' => 'What are Hypotheses in Product Development?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">What are Hypotheses in Product Development?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-06-14 10:00:00">Jun 14th, 2021</time> &middot; 11 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Every idea, product development or business plan is accompanied by a vision. For IKEA, their vision was "to offer a wide range of well-designed, functional home furnishing products at prices so low, that as many people as possible will be able to afford them".</p>
                            <p>In the case of Prezi, a presentation software that became one of the most successful Hungarian startups, the founders stated that they wish to build a software that reforms the presentation experience and "reinvents how people share knowledge, tell stories and inspire their audiences to act".</p>
                            <p>Thanks to today's modern technologies, the question most often is not whether these visions are achievable but if they are worth achieving. If you're familiar with lean product development or design thinking, this train of thought won't be foreign to you.</p>
                            <p>But how do we know if an idea is worth pursuing or not? The lean product development framework starts by breaking down the vision into its elements. These elements should be formulated as hypotheses or assumptions, which should be in turn tested in small, iterative batches.</p>
                            <p class="has-margin-b60">"Every business plan begins with a set of assumptions. Because the assumptions haven't proven to be true (they are assumptions after all) and in fact are often erroneous, the goal of a startup's early efforts should be to test them as quickly as possible." (Eric Ries – The Lean Startup, 2011)</p>
                            <h2 class="heading-2 has-margin-b30">Which assumptions are worth testing?</h2>
                            <p>Ok. We should break down our vision into its parts. But where do we start? Which assumptions are worth making?</p>
                            <p>A business plan comprises of several assumptions that are not worth testing. These are usually evident or directly inferred from industry observations and knowledge.</p>
                            <p>In the case of IKEA, it was pretty evident that people would be willing to buy well designed and cheap furniture. But that they would also be willing to assemble it themselves was a lot less obvious, especially in those days when IKEA started.</p>
                            <figure>
                                <img src="{{ asset('media/blog/what-are-hypotheses-in-product-development-lofa-en.png') }}" alt="LOFA assumptions" />
                            </figure>
                            <p class="has-margin-b60">These riskiest assumptions are called Leap of Faith Assumptions, or LOFA, by Eric Ries.</p>
                            <h2 class="heading-2 has-margin-b30">Types of assumptions</h2>
                            <p class="has-margin-b60">Based on the <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">stage of product development</a> we find ourselves in, we'll have to make different types of assumptions.</p>
                            <h3 class="heading-3 has-margin-b30">Persona and problem hypotheses</h3>
                            <p>Every vision is built around assumed buyers or users. Who they are, how they behave and what they want will be part of our persona hypothesis.</p>
                            <p>The persona hypothesis is closely related to the problem hypothesis, which assumes our user's challenges. Is it worth spending time on solving these problems? We'll encounter these two types of hypotheses in the problem validation stage of the product development process.</p>
                            <p>In my <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">article about problem validation</a>, I came up with an imaginary product idea and a corresponding vision. For example's sake, we're developing a gadget that can be mounted on micromobility vehicles and, using sensors, alerts travellers of incoming obstacles and dangers (pedestrian crossing, motor vehicle, etc.) with sounds and vibrations of increasing intensity.</p>
                            <p>If we look at our vision above, our persona hypothesis could be something like "all users of (motorised and non-motorised) micromobility user faces this (safety) problem are our potential buyers". Later, as we interview these users, we will probably learn that this assumption is incorrect. If this happens, we should reformulate our hypothesis.</p>
                            <p>For example, suppose we find out that this gadget is only interesting to people who use high-velocity micromobility vehicles. In that case, we could instead say that "users of micromobility vehicles which travel at a speed of over 25 km/h (bicycle, e-bike, e-scooter) are our potential buyers".</p>
                            <p>We might also learn from the interviews that people who only use these vehicles for leisure are not interested in extra security. Instead, those who regularly use these vehicles to commute to and from work show a higher level of interest. We should again reformulate our persona hypothesis to "users of micromobility vehicles which travel at a speed of over 25 km/h (bicycle, e-bike, e-scooter) and who use these vehicles daily, in an urban environment are our potential buyers".</p>
                            <p>Based on the same vision, we could formulate our problem hypothesis as "users of micromobility vehicles do not feel safe when travelling and would like to be able to travel more safely". Or as "users of micromobility vehicles are not happy with the current safety solutions".</p>
                            <p>The second of these two assumptions is a great way to formulate hypotheses when there are existing competitors in the market. These competitors solve the same problem, but we assume we can do better. A great example of this is Prezi, as mentioned above.</p>
                            <p class="has-margin-b60">There was presentation software on the market before Prezi, but every one of them delivered the same experience. So, Prezi's problem hypothesis probably sounded a lot like this: "users of current, slide-based presentation software (PowerPoint, Google Slide, Keynote) are not content, because the existing software doesn't assist the storytelling narrative".</p>
                            <h3 class="heading-3 has-margin-b30">Value and usability hypotheses</h3>
                            <p class="has-margin-b30">The value hypothesis, simply put, assumes that our solution effectively delivers value to the user. Sticking to our previous example, our value hypotheses would be as follows:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>our product helps the user be safer when travelling</li>
                                <li>our product improves the sense of safety of users in such a way that would incentivise them to use the gadget regularly</li>
                            </ul>
                            <p>We usually encounter the value hypothesis in the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt2']) }}" target="_blank">problem-solution fit stage</a> of product development.</p>
                            <p>The usability hypothesis is closely tied to the value hypothesis. So closely tied that often it's not even mentioned separately. But if we take a closer look at the four stages of product development, usability hypotheses are used in the following third stage, the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt3']) }}" target="_blank">solution-product fit stage</a>.</p>
                            <p class="has-margin-b30">The usability hypotheses assume that our product can deliver our value proposition and does so in an effective, easy to use manner while also providing the expected user experience. In the case of our safety gadget, some of the usability hypotheses we could make are:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>our product is easy to user</li>
                                <li>our users trust the product</li>
                            </ul>
                            <h3 class="heading-3 has-margin-b30">Growth hypotheses</h3>
                            <p>If we arrive at a stage where we're making growth hypotheses, we do probably have a good product on our hands, which solves a valid user problem. But this does not mean that the product is marketable. With the help of growth hypotheses, we search for this exact answer: is our business model sustainable.</p>
                            <p class="has-margin-b30">In the case of our product, we could make the following assumptions about the business model:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>users are still willing to pay or exchange value for our product or service</li>
                                <li>we can keep our existing users, maybe even sell the additional products or services</li>
                                <li>users like our product so much, they are willing to refer it to others</li>
                            </ul>
                            <p class="has-margin-b60">We'll use growth hypotheses in the <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt4']) }}" target="_blank">product-market fit stage</a> of the product development life cycle. Here, we will employ multiple experiments to test how we will reach, convert and keep more users. There is no one-size-fits-all methods to achieving this. The way you formulate your growth hypotheses and the types of experiments you're going to run will also depend on the kind of growth engine(s) you'll employ.</p>
                            <h2 class="heading-2 has-margin-b30">How to formulate your assumptions?</h2>
                            <h3 class="heading-3 has-margin-b30">Test one thing at a time</h3>
                            <p>It's important to avoid assumptions concerning multiple aspects of our product or service. It's easy to make this mistake as at first thought it may seem that we save time in doing so. But the truth is that we won't be able to distinguish the exact reason why our experiments fail.</p>
                            <p>We could also formulate our value hypothesis as "our product helps users be safer when travelling and because of this, they will regularly use it".</p>
                            <p>During our experiments, this assumption could easily prove to be false, from which we could, erroneously, deduce that our product doesn't add to the safety of users. In reality, though, the users did feel safer but did not want to use it regularly because it did not provide the expected user experience. As such, we throw an otherwise good idea into the bin.</p>
                            <p class="has-margin-b60">We've just seen how simply an easily solvable issue might sidetrack us completely. To avoid situations like this, take care to make assumptions that only test a single aspect of the product.</p>
                            <h3 class="heading-3 has-margin-b30">Base assumptions on prior knowledge</h3>
                            <p>Our assumptions always have to be testable without difficulty, meaning that we should be able to devise experiments that allow us to validate or invalidate the current understanding of our users. It's best always to base our assumptions on prior knowledge. The following template may help with this:</p>
                            <figure>
                                <img src="{{ asset('media/blog/what-are-hypotheses-in-product-development-template-en.png') }}" alt="Since we know that [prior knowledge], if we [do something] then [testable outcome]." />
                            </figure>
                            <p>By using the above template, we can improve our value hypothesis like this:</p>
                            <p class="has-margin-b60">Since we know that <span class="has-text-underlined">users of micromobility vehicles which travel at a speed of over 25 km/h (bicycle, e-bike, e-scooter) and who use these vehicles daily in an urban environment don't feel safe when travelling</span>, if we <span class="has-text-underlined">build a gadget that alerts them of impeding obstacles with sound and vibration alerts</span>, then <span class="has-text-underlined">they will feel safer while commuting</span>.</p>
                            <h3 class="heading-3 has-margin-b30">Be SMART</h3>
                            <p>Formulating goals based on SMART criteria is probably something many of you already know. The good news is that we can use the same SMART criteria to make assumptions easier to test.</p>
                            <p class="has-margin-b30">For those who don't know, SMART is an acronym for Specific, Measurable, Achievable, Relevant and Time-bound. So how do you make a hypothesis SMART?</p>
                            <h4 class="heading-4 has-margin-b30">Specific</h4>
                            <p>Let's remember what our problem hypothesis sounded like: "users of micromobility vehicles are not happy with the current safety solutions". This assumption is not specific enough. It could be more specific by stating which current safety solution they're not happy with.</p>
                            <p class="has-margin-b30">We could also improve the testable outcome part of our value hypothesis. It sounded like this: "they will feel safer while commuting". We could instead say, "our users will be more likely to avoid moving (motor vehicle, pedestrian, other micromobility) and static (tree, road surface issues) obstacles".</p>
                            <h4 class="heading-4 has-margin-b30">Measurable</h4>
                            <p class="has-margin-b30">Now we're getting closer to a SMART value hypothesis, but we can immediately observe that it's not measurable if we look at it. To make it measurable, let's include the minimal expected increase in safety: "our users will be 80% more likely to avoid moving (motor vehicle, pedestrian, other micromobility) and 40% more likely to avoid static (tree, road surface issues) obstacles".</p>
                            <h4 class="heading-4 has-margin-b30">Achievable</h4>
                            <p>The importance of this criteria is best illustrated by our original persona hypothesis, which sounded like this: "each (motorised and non-motorised) micromobility user faces this (safety) problem".</p>
                            <p>Even the less experienced will immediately notice that this assumption will be hard to prove. But since we made this assumption at the very beginning, when we had close to no knowledge of our users, this is a forgivable offence.</p>
                            <p>As we progressed with user interviews, our hypothesis also became more achievable. "Users of micromobility vehicles which travel at a speed of over 25 km/h (bicycle, e-bike, e-scooter) and who use these vehicles daily, in an urban environment are our potential buyers" sounds achievable.</p>
                            <p class="has-margin-b30">Reformulating or detailing assumptions is a natural, obligatory part of the learning process. Each of these changes is called a focus shift or pivot.</p>
                            <h4 class="heading-4 has-margin-b30">Relevant</h4>
                            <p>A relevant assumption will always bring us closer to our vision. If our assumptions are not relevant, we will lose time testing them. They could also quickly lead us down the wrong path.</p>
                            <p class="has-margin-b30">In our case, a non-relevant assumption could be that "our gadget will be a substitute for the safety helmet". This is non-relevant on multiple levels. First of all, it's not even our goal to provide an alternative to the safety helmet. Second of all, many countries make safety helmets mandatory, so this assumption cannot even be true due to legal restrictions.</p>
                            <h4 class="heading-4 has-margin-b30">Time-bound</h4>
                            <p>This criterion is easiest to showcase with the help of our growth hypothesis. One of our assumptions was that "our users like the product enough to recommend it to others". First things first, this assumption is not measurable, so let us address that first: "our users like the product enough to recommend it to at least 1 other person".</p>
                            <p>But is it enough to make an assumption measurable? Let's say one of our users recommends our product to 3 people in the first month of using it, but never after. Another user recommends it to 1 person but does this every month. Our growth rate is going to be very different. As such, it is imperative to time-bound our assumptions. We could say, "our users like the product enough to recommend it on average to at least 1 other person every month".</p>
                            <figure>
                                <img src="{{ asset('media/blog/what-are-hypotheses-in-product-development-smart.png') }}" alt="Formulate hypothesis according to SMART principles" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Afterword</h2>
                            <p>I hope this article helped you understand how you ought to formulate your assumptions in each stage of product development. It's not an easy task, but one worth the effort.</p>
                            <p>I did not write these steps as exact rules but as loose guidelines. If you don't use the "since we know that [prior knowledge], if we [do something] then [testable outcome]" template, no worries. You also shouldn't worry if not every assumption you make is time-bound or even measurable.</p>
                            <p>The goal, as always, is to learn more about your users with each test and be able to sustain this knowledge with empirical data.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'What are Hypotheses in Product Development?'])
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
    "datePublished": "2021-06-14T12:00:00",
    "dateModified": "2021-06-14T12:00:00",
    "description": "In this article we'll explore the different types of assumptions, which ones you should make and how to formulate and test them.",
    "headline": "What are Hypotheses in Product Development?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-what-are-hypotheses-in-product-development.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Product Development, Lean Product Development Process, Value Hypothesis, Growth Hypothesis",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "What are Hypotheses in Product Development?",
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
                "name": "What are Hypotheses in Product Development?"
            }
        }
    ]
}
</script>
@endpush
