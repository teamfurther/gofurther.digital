@section('title', 'EXTRA: AI-Generated Prototypes')
@section('description', 'Can AI aid us in accelerating prototype creation and idea validation? I did some experiments to try and find out.')
@section('preview_image', route('generate-cover', ['title' => 'EXTRA: AI-Generated Prototypes']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">EXTRA: AI-Generated Prototypes</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-10-28 10:00:00">Oct 28th, 2022</time> &middot; 3 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>I have always had this lingering thought when writing about <a href="{{ localizedRoute('blog.show', ['slug' => '11-ways-to-build-an-mvp-pt2']) }}" target="_blank">prototype development</a> and <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}" target="_blank">idea validation</a> that even though these exercises can save you a lot of time and effort down the line, you still need to put in a lot of work to get actionable results.</p>
                            <p class="has-margin-b60">Since I have been knackered lately, I decided to put regular work aside for a couple of hours and fool around with different AI projects to see how these tools can help accelerate prototyping and validation.</p>
                            <h2 class="heading-2 has-margin-b30">Forget About Writing Landing Page Copy</h2>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => '11-ways-to-build-an-mvp-pt1']) }}" target="_blank">smoke test</a> is a great way to gauge interest in your product. But writing marketing copy can be a time-consuming experience.</p>
                            <p><a href="{{ localizedRoute('blog.show', ['slug' => 'https://www.copyshark.ai']) }}" target="_blank">CopyShark</a> is a GPT-3 (a language model that uses deep learning to generate human-like text) powered copywriting software that can help you with landing page copy or even pay-per-click ads.</p>
                            <p>Results could be better, but if you hate writing copy as I do, it can set you up with a good foundation which you can edit to your liking.</p>
                            <p>Here's a fantastic video by Phillip Stemann on all the different tools CopyShark offers, first-hand experiences and pricing.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/XWOayTNpvRw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="heading-2 has-margin-b30">Create Wireframes Simply by Talking</h2>
                            <p><a href="{{ localizedRoute('blog.show', ['slug' => 'https://teleporthq.io/']) }}" target="_blank">TeleportHQ</a> has a suite of AI-powered products that allows you to build websites or generate code from mockups. One of their latest products can create prototypes from hand-drawn sketches. Just draw something on paper, scan it or take a photo et voilá. You now have an editable wireframe.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/K4D0H2MCTrM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p>Don't know how to draw? No worries! The awesome people at TeleportHQ are working on a GPT engine that creates wireframes based on voice commands. This is the future right here.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/fq1RPJUI_GM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="heading-2 has-margin-b30">AI-Generated Product Renders</h2>
                            <p>When working on a physical product, 3D renders can cost a fortune. But what if you're still in the idea validation phase? What if you need some renders to show users during an interview? Indeed, you don't want to spend thousands of your hard-earned dollars or euros when you're still determining if people need this product.</p>
                            <p>Thankfully, there's a solution. Midjourney is an AI program that creates images from textual descriptions. And it's perfect for rapid prototyping.</p>
                            <p>It took me 5 minutes to create a remarkable representation of an exoskeleton, which can be used to help gym-going people do the exercises correctly. Pretty good, huh?</p>
                            <figure>
                                <img src="{{ asset('media/blog/midjourney-exoskeleton.png') }}" alt="3D render of an exoskeleton generated by Midjourney" />
                            </figure>
                            <p>Then I remembered the gadget I used for illustration purposes in one of my <a href="{{ localizedRoute('blog.show', ['slug' => 'the-lean-product-process-pt1']) }}" target="_blank">old posts</a>. A product that can be attached to a bike, electric scooter, or even a Segway gives us audible and tactile (through vibration) alerts if it senses an obstacle (pedestrian, crossing, vehicle, etc.) thanks to its hundreds of sensors. So I decided to do some renders of this gadget.</p>
                            <p class="has-margin-b60">Here's what I got for the keywords "escooter garmin varia micromobility safety gadget smartwatch handlebar". I am less happy with the results as with the exoskeleton, but hey, it's more than enough to give interviewees a grasp of the concept.</p>
                            <figure>
                                <img src="{{ asset('media/blog/midjourney-safetylyfyr.png') }}" alt="3D render of Safetylyfyr generated by Midjourney" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">What Else?</h2>
                            <p>Before starting this experiment, I thought using AI for accelerating idea validation was a bit out of the box. I still think we're still some ways off. But even if it can't replace human effort, it does give you ideas on where to start.</p>
                            <p>Do you know of any other AI-powered solutions that can be employed during product development, in the idea validation or prototype development phases? If so, let me know!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'EXTRA: AI-Generated Prototypes'])
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
    "datePublished": "2022-10-28T12:00:00",
    "dateModified": "2022-10-28T12:00:00",
    "description": "Can AI aid us in accelerating prototype creation and idea validation? I did some experiments to try and find out.",
    "headline": "EXTRA: AI-Generated Prototypes",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'EXTRA: AI-Generated Prototypes']) }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Artifical intelligence, AI, GPT, GPT-3, Voice recognition, ML, Machine learning, Deep learning",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "EXTRA: AI-Generated Prototypes",
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
                "name": "EXTRA: AI-Generated Prototypes"
            }
        }
    ]
}
</script>
@endpush
