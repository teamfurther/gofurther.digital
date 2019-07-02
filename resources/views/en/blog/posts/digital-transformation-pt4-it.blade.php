@section('title', 'Digital Transformation Series Pt. 4 - IT')
@section('description', 'In this final part, we\'ll tackle the final piece of the puzzle and look at what technology you can leverage to take your business one step further.')
@section('preview_image', asset('media/blog/cover-digital-transformation-4.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-digital-transformation-4.jpg') }}" srcset="{{ asset('media/blog/featured-digital-transformation-4-769w.jpg') }} 769w" sizes="100vw" alt="Digital Transformation Pt. 4 - IT" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digital Transformation Pt. 4 - IT</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-06-28 12:00:00">Jun 28th, 2019</time> &middot; 6 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>This is the last part of our series on digital transformation. If you're looking for a specific article in the series, here are the links to each post:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt1-introduction']) }}">Part 1 - Introduction</a></li>
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">Part 2 - Company Culture</a></li>
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt3-business-processes']) }}">Part 3 - Business Processes</a></li>
                                <li><strong>Part 4 - Information Technology</strong></li>
                            </ul>
                            <p class="has-margin-b60">In <a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">part two</a> and <a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">part three</a> we showed you how company culture and business processes can stand in the way of digital transformation. In this final part, we'll tackle the final piece of the puzzle and look at what technology you can leverage to take your business one step further.</p>
                            <h2 class="heading-3 has-margin-b30">Are You Automating Yet?</h2>
                            <p>At the very least, you should be investing in automating as much work as possible. Depending on the average wage in your country, a $250,000 industrial robot, plus it's maintenance and operational costs will offset the cost of an employee in just a couple of years (1 year for Germany, 6 years for Mexico)<sup><a href="https://ark-invest.com/research/robots-will-save-manufacturing-billions" target="_blank">1</a></sup>. And that is not even considering any training, onboarding costs or work-related injuries. That's what we call a no-brainer.</p>
                            <p>In our experience, an <a href="{{ localizedRoute('custom-development') }}">integrated software system</a> has similar break-even points. Reports by our clients said they recovered their investments on average in a little over 2 years. Considering that an industrial robot has a service life of 12 years, one might argue that investing in software is even more profitable.</p>
                            <p><a href="https://www.mckinsey.com/featured-insights/future-of-work/jobs-lost-jobs-gained-what-the-future-of-work-will-mean-for-jobs-skills-and-wages#part1" target="_blank">According to McKinsey</a>, as much as 30% of all worked hours globally, could be automated by 2030. Even today, about 50% of work activities are technically automatable, with 6 out of 10 jobs consisting of more than 30% automatable activities.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-automatable-jobs.png') }}" alt="About 50% of work activities are technically automatable, with 6 out of 10 jobs consisting of more than 30% automatable activities" />
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Measure Everything</h2>
                            <p>Data and analytics is helping a companies gain a competitive edge. Collecting and evaluating information enables faster and larger-scale decision making based on actual evidence. Some companies not only improve their core operations, but even launch entirely new business models based on big data analytics.</p>
                            <p>But even though the volume of information available is increasing exponentially, most companies are only capturing a fraction of the potential data. More than one quarter of executives said that they have been ineffective in their data capturing and analysis<sup><a href="https://www.mckinsey.com/business-functions/digital-mckinsey/our-insights/the-need-to-lead-in-data-and-analytics" target="_blank">2</a></sup>.</p>
                            <p>The very first thing you should be doing is setting up a data strategy: what will the data be used for? How will it generate value? With that in place, you should plan on how to generate, collect and analyse the data. You might have to ditch legacy systems (I'm looking at you spreadsheets) and also build up an in-house team of analysts or outsource to specialists.</p>
                            <p class="has-margin-b60">Some of the areas where data can help and you can look into are matching levels of supply and demands, better use of underutilised assets, understanding and reducing human bias and errors, using behavioral data in your marketing efforts or driving talent acquisition.</p>
                            <h2 class="heading-3 has-margin-b30">Machine Learning Is Only Going to Get Bigger</h2>
                            <p>In my personal opinion we don't have true artificial intelligence yet. But we do have machine learning. And it is completely reshaping our businesses and economy.</p>
                            <p>The sheer volume of the data that has recently become available and the increase of computing capacity to parse this information has made machine learning one of the most exciting subjects in the tech sphere.</p>
                            <p>The best known examples of where machine learning has been employed is personal assistants like Amazon's Alexa or Apple's Siri, but ML is also the driver behind Google Translate and chatbots. But this is not all, in the coming years ML will be used to discover new consumer trends, optimize clinical trials or schedule preventive maintenance.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-machine-learning-use-cases.jpg') }}" alt="Machine learning will be used to discover new consumer trends, optimize clinical trials or schedule preventive maintenance" />
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Look Out for IoT and Industry 4.0 Opportunities</h2>
                            <p>IoT is all around us. It's in our pockets, it's in our homes and it's also in our businesses. Machines which are augmented with web connectivity are helping us automate work and gather data. In manufacturing they call it Industry 4.0.</p>
                            <p>In fact, manufacturing is where the most IoT project are realized, even topping the consumer market. 66% percent of early-adopters in the manufacturing space say that IoT is now critical to competitive advantage<sup><a href="http://www.verizonenterprise.com/verizon-insights-lab/state-of-the-market-internet-of-things/2016/" target="_blank">3</a></sup>.</p>
                            <p class="has-margin-b60">Keep on the lookout for where you can use IoT in production flow monitoring, remote equipment management, energy management, waster management, aggregate customer and product data and equipment diagnostics.</p>
                            <div class="has-text-centered">
                                <a class="btn is-primary" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt3-business-processes']) }}">&laquo; Pt. 3 - Business Processes</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'How to Choose Between Custom Development and Out-of-the-Box Software'])
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
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "author": {
        "@type": "Person",
        "name": "Peter Illés"
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
    "datePublished": "2018-05-03T12:00:00",
    "dateModified": "2018-05-03T12:00:00",
    "description": "In this final part, we'll tackle the final piece of the puzzle and look at what technology you can leverage to take your business one step further.",
    "headline": "Digital Transformation Pt. 4 - IT",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-custom-development-vs-ootb.jpg') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital Transformation",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}"
    },
    "name": "Digital Transformation Pt. 4 - IT",
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
                "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}",
                "name": "Digital Transformation Pt. 4 - IT"
            }
        }
    ]
}
</script>
@endpush
