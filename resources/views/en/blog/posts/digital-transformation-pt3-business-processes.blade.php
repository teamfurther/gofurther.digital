@section('title', 'Digital Transformation Series Pt. 3 - Business Processes')
@section('description', 'In the third part of the series, we take a look at how implementing BPM and Agile helps support digital transformation.')
@section('preview_image', asset('media/blog/cover-digital-transformation-3-en.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-digital-transformation-3-en.jpg') }}" srcset="{{ asset('media/blog/featured-digital-transformation-3-769w-en.jpg') }} 769w" sizes="100vw" alt="Digital Transformation Pt. 3 - Business Processes" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digital Transformation Pt. 3 - Business Processes</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-06-27 12:00:00">Jun 27th, 2019</time> &middot; 5 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>This is the third part of our series on digital transformation. If you're looking for a specific article in the series, here are the links to each post:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt1-introduction']) }}">Part 1 - Introduction</a></li>
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">Part 2 - Company Culture</a></li>
                                <li><strong>Part 3 - Business Processes</strong></li>
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt4-it']) }}">Part 4 - Information Technology</a></li>
                            </ul>
                            <p class="has-margin-b60">In <a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">part two of our series</a> we saw that the foundation of digital transformation is a strong digital culture within the team. But how should we change our processes to aid this cultural shift?</p>
                            <h2 class="heading-3 has-margin-b30">Business Process Management</h2>
                            <p>To enable digital transformation your company requires a clear strategy to identify gaps in the processes and find solutions on how to make them more efficient. This process is called business process management, or BPM for short.</p>
                            <p>The aim of BPM is to identify and optimise the repetitive, predictable processes needed for a business to function. In many ways BPM relates to philosophies like Kaizen, methods like Lean and tools like Six Sigma.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-bpm.png') }}" alt="Business process management or BPM for short" />
                            </figure>
                            <p class="has-margin-b60">BPM used to be a one-off event in many companies, but digital leaders have made it a constant process. If your company has the <a href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">culture</a> part nailed down, it's going to be really easy for your team to get fully invested in BPM.</p>
                            <h2 class="heading-3 has-margin-b30">Be Nimble, Be Agile</h2>
                            <p>Another term often associated with digital transformation is agile. Agile is a set of values and principles described in the Agile manifesto. Agile is closely related to the IT industry, where it is widely used. It's benefits are clear and proven, so there is no reason not to implement it across other business areas.</p>
                            <p>The main benefit of agile is it's flexibility. Conventionally, new business ventures are documented upfront in great detail and little room for change. Agile on the other hand embraces change.</p>
                            <p class="has-margin-b60">The agile process is defined that if business priorities change or the team discovers a solution that is more efficient or adds more business value, then they have the flexibility to switch focus.</p>
                            <p class="has-margin-b60">While BPM allows your team to stay alert and look out for opportunities for improvement, agile helps in putting these improvements into action quicker. Gradually introducing these tools one team at a time will allow companies to support digital transformation.</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt2-company-culture']) }}">&laquo; Pt. 2 - Company Culture</a>
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.view', ['slug' => 'digital-transformation-pt4-it']) }}">Pt. 4 - IT &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Digital Transformation Pt. 3 - Business Processes'])
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
    "datePublished": "2019-06-27T12:00:00",
    "dateModified": "2019-06-27T12:00:00",
    "description": "In the third part of the series, we take a look at how implementing BPM and Agile helps support digital transformation.",
    "headline": "Digital Transformation Pt. 3 - Business Processes",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-digital-transformation-3-en.jpg') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital Transformation",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}"
    },
    "name": "Digital Transformation Pt. 3 - Business Processes",
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
                "name": "Digital Transformation Pt. 3 - Business Processes"
            }
        }
    ]
}
</script>
@endpush
