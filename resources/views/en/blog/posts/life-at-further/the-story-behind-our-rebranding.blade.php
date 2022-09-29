@section('title', 'The Story Behind Our Rebranding')
@section('description', 'We took the shot and decided to rebrand our company not only because change is necessary to grow, but the main reason behind the rebrand was that the old brand did not represent us well anymore.')
@section('preview_image', route('generate-cover', ['title' => 'The Story Behind Our Rebranding']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">The Story Behind Our Rebranding</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-05-13 12:00:00">May 13th, 2019</time> &middot; 4 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Rebranding is always a scary and bold move from a company, since we all know how much we do not like change as humans. When the rebranding idea comes up within an organization people usually embrace the change, but in the meantime they are full of doubts and questions: Will it be good enough? Will it deliver the message we are trying to send? Will our customers like it? What will their response be? The questions are just infinite when it comes to rebranding.</p>
                            <p>We took the shot and decided to rebrand our company not only because change is necessary to grow, but the main reason behind the rebrand was that the old one did not represent us well anymore. We are certain that this is a good enough reason for any company to rebrand, as this is the first line of communication we establish with a customer.</p>
                            <p class="has-margin-b60">We did not know exactly what we wanted in the beginning. The only thing we did know was the brand personality we would like to convey to our customers: professional, serious and innovative but in the meantime it should also be personable and approachable.</p>
                            <h2 class="heading-3 has-margin-b30">Choosing the right brand name</h2>
                            <p>We agreed that C4studio was no longer a clear representation of what we do and the company we became. The name was the hardest part, as we realized that us people are so similar yet so different. We came up with a bunch of new name ideas, but it seemed that what one name meant for a colleague it meant something completely different to another.</p>
                            <p>We realized after a while, that it has to be a name that sends a clear message and that is why we decided on Further Digital Solutions. We always strive to evolve and develop ourselves, and to help our customers organize and automate their company with quality custom software solutions. We are a partner to help organizations go Further.</p>
                            <figure class="has-margin-b90">
                                <img src="{{ asset('media/blog/rebranding-logo.png') }}" alt="In the end we decided that out of all the brand name ideas we came up with, Further represented our values the best" />
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Designing a new visual identity</h2>
                            <p>Our old logo was bold, playful and young, and last but not least, it was magenta. We loved it and were sad to see it go. However, it was a logo created in the beginning of our journey in 2010. It represented a bunch of young, high-energy people who wanted to create something big.</p>
                            <p>We are the same people, full of passion towards what we do, that is why you will experience some of this perky magenta here and there in our new design. We did not give that youthful part of us away, it is just the concept and our place on the market that has changed. We grew, we learned, we evolved, and felt that our visuals needed to represent that a little more.</p>
                            <p>The arrow shape was the most obvious way to represent the concept of going further, but we hid the 'F' initial in the negative space of the logo-mark.</p>
                            <figure>
                                <img src="{{ asset('media/blog/rebranding-logo-details.png') }}" alt="Notice the 'F' in the negative space" />
                                <figcaption>Notice the 'F' in the negative space</figcaption>
                            </figure>
                            <p>The cobalt blue and pearl green was chosen since it represents exactly what we would like to broadcast to our customers. It represents professionalism, that we are serious about the trust our customers put in us. Belief, that we are doing everything in our power to make our clients satisfied and happy. Approachability, as we are happy to discuss, ideate and collaborate with our clients continuously to create a perfectly functioning system based on their needs and requirements.</p>
                            <p>We are very happy with the result; we truly hope that you are too. We believe that by this new look we can represent what we truly believe in and show the world our passion towards software solutions and great service. Let's say goodbye to our old look together and keep going further together.</p>
                            <p class="has-margin-b60"><strong>Be efficient. Get organized. Go Further.</strong></p>
                            <p><em>Special thanks to <a href="https://www.behance.net/zsoltik" target="_blank"><strong>Zsolt</strong></a> and <a href="https://madebybalu.com" target="_blank"><strong>Balu</strong></a> for assisting us throughout the rebranding process. Next beer is on us!</em></p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'The Story Behind Our Rebranding'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.eszterballa')
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
        "name": "Eszter Balla"
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
    "datePublished": "2019-05-13T12:00:00",
    "dateModified": "2019-05-13T12:00:00",
    "description": "We took the shot and decided to rebrand our company not only because change is necessary to grow, but the main reason behind the rebrand was that the old brand did not represent us well anymore.",
    "headline": "The Story Behind Our Rebranding",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'The Story Behind Our Rebranding']) }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Further Digital Solutions, Further, Rebranding",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "The Story Behind Our Rebranding",
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
                "name": "The Story Behind Our Rebranding"
            }
        }
    ]
}
</script>
@endpush
