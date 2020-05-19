@section('title', 'Digital Transformation Series Pt. 2 - Company Culture')
@section('description', 'In the first part of the series we saw how digital killed Kodak. But they made efforts to change their company culture and have risen from their ashes.')
@section('preview_image', asset('media/blog/cover-digital-transformation-2-en.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-digital-transformation-2-en.jpg') }}" srcset="{{ asset('media/blog/featured-digital-transformation-2-769w-en.jpg') }} 769w" sizes="100vw" alt="Digital Transformation Pt. 2 - Company Culture" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digital Transformation Pt. 2 - Company Culture</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-06-26 12:00:00">Jun 26th, 2019</time> &middot; 4 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>This is the second part of our series on digital transformation. If you're looking for a specific article in the series, here are the links to each post:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt1-introduction']) }}">Part 1 - Introduction</a></li>
                                <li><strong>Part 2 - Company Culture</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt3-business-processes']) }}">Part 3 - Business Processes</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt4-it']) }}">Part 4 - Information Technology</a></li>
                            </ul>
                            <p>In the <a href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt1-introduction']) }}">first part of the series</a> we saw how digital killed Kodak. During they're pinnacle years they were worth billions and employed over 140,000 people around the world. But then a small thing called a camera phone meant they were forced into filing for bankruptcy and selling their patents.</p>
                            <p>Somehow the company emerged from it's ashes. Yes, it's fraction of the size it was before, but the name lives on. They went back to the basics and realized their unique selling point is not that they're selling film, but that they're selling memories. They're selling Kodak moments.</p>
                            <p class="has-margin-b60">Today they're developing picture frames and baby monitors with integrated sharing. They learned the hard way that digital transformation is more about open-mindfulness and adaptability rather than technology. And the biggest driver of this transformation is company-culture.</p>
                            <h2 class="heading-3 has-margin-b30">Getting Ready for Digital Transformation</h2>
                            <p>Nowadays there aren't many companies where digital transformation hasn't been talked about. But plans and strategy go out the window if the management and team isn't prepared for change. A new outside-in approach has to be taken, reshaping the whole company from the outside. And that starts with company culture.</p>
                            <p>A cultural shift is necessary that requires companies to continuously challenge the status-quo, be disruptive with experimenting and get comfortable with failure. And this starts at the very top.</p>
                            <p>Leadership's job of introducing a culture that supports change while enabling that overarching strategy is hard, but doable. It takes a clear methodology, education and a disciplined effort. Some of the key traits of a digital culture is that they encourage collaboration over individual effort, delegation over control, courage over caution and action over planning. Leadership has to articulate and encourage, but most of all embrace and manifest these behaviours.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-digital-leaders-vs-doing-digital.png') }}" alt="Companies with a strong digital culture embrace and practice all of the above traits" />
                            </figure>
                            <p>Radical change often means reshaping teams, changing job titles and longtime business processes. Because of this, people will fear that the value they bring and even their jobs is at risk.</p>
                            <p class="has-margin-b60">It comes down to the leadership to make sure this doesn't happen. They have to be empathetic towards their teams, listen to and document their issues and make consistent efforts to address these issues. In the long run, this empathy will breed trust, and there will be less push-back when implementing change.</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt3-business-processes']) }}">&laquo; Pt. 1 - Introduction</a>
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'digital-transformation-pt3-business-processes']) }}">Pt. 3 - Business Processes &raquo; </a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Digital Transformation Pt. 2 - Company Culture'])
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
    "datePublished": "2019-06-26T12:00:00",
    "dateModified": "2019-06-26T12:00:00",
    "description": "In the first part of the series we saw how digital killed Kodak. But they made efforts to change their company culture and have risen from their ashes.",
    "headline": "Digital Transformation Pt. 2 - Company Culture",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-digital-transformation-2-en.jpg') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital Transformation",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Digital Transformation Pt. 2 - Company Culture",
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
                "name": "Digital Transformation Pt. 2 - Company Culture"
            }
        }
    ]
}
</script>
@endpush
