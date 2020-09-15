@section('title', 'Technical debt: how to build future-proof IT systems?')
@section('description', 'In this article, we show you what technical debt is, what we can do to minimize it, and how we can manage the technical debt that has already been accumulated.')
@section('preview_image', asset('media/blog/cover-technical-debt-how-to-build-future-proof-it-systems-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-technical-debt-how-to-build-future-proof-it-systems.png') }}" srcset="{{ asset('media/blog/featured-technical-debt-how-to-build-future-proof-it-systems-768w.png') }} 768w, {{ asset('media/blog/featured-technical-debt-how-to-build-future-proof-it-systems-1000w.png') }} 1000w" sizes="100vw" alt="Technical debt: how to build future-proof IT systems?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Technical debt: how to build future-proof IT systems?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-07-21 12:00:00">June 21 2020</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>$517 billion dollars. We rarely see an amount that large, so I’m going to type it out in digits as well: $517 000 000 000. That’s nine 0’s there. This sum represents the technical debt of the US in 2018, according to CISQ (Consortium for IT Software Quality) <a href="https://www.it-cisq.org/the-cost-of-poor-quality-software-in-the-us-a-2018-report/The-Cost-of-Poor-Quality-Software-in-the-US-2018-Report.pdf" target="_blank"><sup>1</sup></a>.</p>
                            <p>Based on the above, we can undoubtedly state that having technical debt is costly. It’s also important, the tech industry writes a lot on the topic. We already mentioned it ourselves on a couple of occasions, right here on our own blog (like <a href="{{ localizedRoute('blog.show', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}">here</a> or here). In spite of this, there are just a handful of people who are in the know about technical debt outside the tech industry. This article is geared towards them.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-technical-debt.jpg') }}" alt="Having technical debt is costly" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">What is technical debt?</h2>
                            <p>It’s not nice to be indebted to someone. The more debt we accumulate, the bigger the pressure on our shoulders. If you ever spoke to someone who managed to repay all his debts, they will most probably describe the feeling as “liberating”.</p>
                            <p>Technical debt is very similar to financial debt (hence the name). Just as with financial debt, technical debt also requires you to pay an interest. This interest can come in many shapes or forms: high maintenance, support or legal costs, the extreme costs of migrating from a legacy system or unmotivated staff.</p>
                            <p>If we don’t repay our debt before taking on new developments, we will constantly incur obstacles which will require us to take out another loan, increasing our debt. The higher the debt, the slower we will be able to progress. At some point, our development will be completely crippled by technical debt.</p>
                            <p>This crippling effect is called software entropy. The second law of thermodynamics states that a closed system’s disorder cannot be reduced, it can only remain constant or increase. The measure of this disorder is entropy. Ivar Jacobson<a href="https://archive.org/details/objectorientedso00jaco/page/69/mode/2up" target="_blank"><sup>2</sup></a> was the first who drew a parallel with software development: if we make constant changes to a software, without performing the necessary maintenance and upkeep, it’s disorder (or entropy) will increase.</p>
                            <p>A good example for this would be an ERP software. Such a system is constantly changing because of the changing business environment. If you don’t keep the documentation up-to-date, don’t maintain the code or do not perform the necessary technological updates, then we fall into a vicious circle: we need to perform these change in order for the software to be efficient and make us money, but to do so would require so much time and money that it’s just not worth it anymore. In cases such as this, our only option is to “rip and replace” the complete system.</p>
                            <p>Technical debt is a forward-looking metric that represents the incremental cost to a company as a result of prior decisions that were made to save time or money when implementing new systems or maintaining existing ones.</p>
                            <p>Imagine your existing IT systems… Now imagine how these systems would look like, if you would start an ideal system from scratch today. How much would it cost to modify the current systems, to achieve the same ideal system? This sum is your technical debt.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-what-leads-to-technical-debt.jpg') }}" alt="What causes technical debt" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">What leads to technical debt?</h2>
                            <p>What leads to the accumulation of technical debt is usually a compromised decision. This compromise may stem from a lack of time or lack of money.</p>
                            <p>Some examples of this decision might be:</p>
                            <ul class="list has-bullets">
                                <li>Delayed software update;</li>
                                <li>Over-extended hardware lifetime;</li>
                                <li>Poor design – when a software is not flexible enough to cater to ulterior changes in business requirements;</li>
                                <li>Delayed refactoring – as business requirements change, some parts of the codebase will become inefficient and hard to maintain, and will need refactoring. The longer we delay the decision to refactor, the larger the codebase will grow, and the more our technical debt will have accumulated;</li>
                                <li>Skipped documentation updates – as the codebase and functionality changes, the developer docs and user manuals will have to be updated accordingly. If this doesn’t happen, we will lose precious time when we will have to perform further changes, or we will have to perform risky “band-aid” fixes.</li>
                            </ul>
                            <p>Technical debt is unavoidable. Software and hardware is being developed at unprecedented speeds, with new updates and security fixes every day, that the passing time alone results in technical debt.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-the-cost-of-technical-debt.jpg') }}" alt="Technical debt echoes the impact of financial debt" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">The cost of technical debt</h2>
                            <p>Technical debt is inherently part of existing software products. But because the reduction of technical debt is not really quantifiable, IT has a hard time explaining to business, why resources are necessary to combat debt.</p>
                            <p class="has-margin-b30">Perhaps, the easiest way to explain this, is to understand what goes into maintaining and operating a software system. Herb Krasner, the author of the CISQ report identifies 4 types of maintenance.</p>
                            <h3 class="heading-4 has-margin-b15">Corrective maintenance</h3>
                            <p>This is the process of correcting issues that are found after deploying a software into production. Technical debt greatly contributes to the need for corrective maintenance: the larger our debt is, the less transparent and maintainable our code becomes, which leads to further errors.</p>
                            <p class="has-margin-b30">Corrective maintenance accounts for roughly 20% of the total maintenance costs.</p>
                            <h3 class="heading-4 has-margin-b15">Adaptive maintenance</h3>
                            <p>The changes that are necessary because of a changing business landscape are called adaptive changes. Similarly to corrective maintenance, technical debt affects how easy it is to perform adaptive maintenance.</p>
                            <p class="has-margin-b30">Adaptive maintenance is the largest chunk of our total maintenance costs, at about 50%.</p>
                            <h3 class="heading-4 has-margin-b15">Perfective maintenance</h3>
                            <p>Apart from correcting errors and modifications because of the changing business requirements, perfecting a software, such as usability or performance improvements, also requires a lot of resources and effort. As with corrective and adaptive maintenance, how easy it is to perform these improvements largely depends on the amount of technical debt we have accumulated.</p>
                            <p class="has-margin-b30">Perfective maintenance is around 25% of the total maintenance costs.</p>
                            <h3 class="heading-4 has-margin-b15">Preventive maintenance</h3>
                            <p>The activity to discover and correct latent defects, before they become effective defects is called preventive maintenance. These activities include performing software updates, security updates, code refactoring, but also keeping the documentation updated.</p>
                            <p>Preventive maintenance accounts for only 5% of the total costs, however, if neglected, it can significantly increase the costs of corrective, adaptive and perfective maintenance. This can be see on the below figure.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-statistic-en.png') }}" alt="How to build future-proof IT systems - 1. statistics" />
                            </figure>
                            <p>Apart from the direct increase in costs, technical debt also has indirect effects, such as:</p>
                            <ul class="list has-bullets">
                                <li>Longer development cycles, which means users have to wait more for a change or new features. This leads to a lower customer satisfaction;</li>
                                <li>Less qualified personnel who is willing to work on the project, higher training costs;</li>
                                <li>Lower IT security, higher probability for breaches.</li>
                            </ul>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">How to minimize technical debt?</h2>
                            <p>We already stated that it is impossible to get rid of technical debt entirely. There are however some methods that development teams can adopt to ensure better code quality which leads to a slower accumulation of technical debt:</p>
                            <ul class="list has-bullets">
                                <li>Every software, framework and documentation should be constantly updated;</li>
                                <li>Automated testing – automated tests allow developers to make changes to the code (be it a minor modification, a new feature or a refactor) without the fear of breaking functionality. Without tests, these changes are highly risky, and can lead to extreme development times and costs;</li>
                                <li>Code reviews – a code review is the  process where developers review each others code before it gets deployed into production. For a fresh set of eyes it is easier to catch issues could lead to errors later on;</li>
                                <li>Root-cause analysis – if we do encounter errors or undesired functionality, it is worthwhile to spend some time researching, analysing, documenting the issue, and making change to our internal processes so that the same issue doesn’t reoccur.</li>
                            </ul>
                            <p>If we have already accumulated technical debt, it is important to manage it properly:</p>
                            <ul class="list has-bullets">
                                <li>Document debt – every necessary fix, update or refactoring should be documented. This is the most essential step towards making sure these steps are actually performed. This way, everyone will be aware of the extent of the technical debt, business will be more likely to acknowledge debt and spend the necessary resources to combat it;</li>
                                <li>Refactoring – if some technical debt is already present, then it can be only decreased by refactoring. it is worthwhile to refactor the high business value debt first: code that is often affected by changes should be prioritized instead of code that is rarely or never changes. You should not wait until enough high-ticket tasks accumulate and then spend weeks only refactoring. Instead, repay debt while also doing valuable work. Determine how much of your maintenance and development time is set aside for refactoring (depending on the complexity of the technical debt, the recommended percentage is around 5%-33%).</li>
                            </ul>
                            <p>There are some (rare) occasions when it is acceptable to ignore technical debt. This could be for instance when a product is nearing its end-of-life, or when the sole purpose of the product was to validate an idea or market, as is the case of a prototype or MVP.</p>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Conclusions</h2>
                            <p>Technical debt is unavoidable, a collateral of any IT project. Avoiding it, or just constantly delaying the necessary actions will sooner or later cripple the entire system, and the business with it.</p>
                            <p>Because of this, good development teams do not accumulate technical debt, but manage it in a timely fashion. Software and documentation is always up-to-date, code quality is ensured by automated tests and code reviews, and they also constantly refactor the code parallel to developing new features.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Technical debt: how to build future-proof IT systems?'])
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

    @include(getLang() . '.banners.projects')
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
    "datePublished": "2020-07-21T12:00:00",
    "dateModified": "2020-07-21T12:00:00",
    "description": "In this article, we show you what technical debt is, what we can do to minimize it, and how we can manage the technical debt that has already been accumulated.",
    "headline": "Technical debt: how to build future-proof IT systems?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-technical-debt-how-to-build-future-proof-it-systems-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "IT, ERP, Software, Technical debt",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Technical debt: how to build future-proof IT systems?",
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
                "name": "Technical debt: how to build future-proof IT systems?"
            }
        }
    ]
}
</script>
@endpush
