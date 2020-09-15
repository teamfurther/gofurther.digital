@section('title', 'Should you hire a freelancer, a development company or build your own team?')
@section('description', 'There are several ways to go about implementing a custom software solution. But which option would suit you best?')
@section('preview_image', asset('media/blog/cover-freelancer-vs-development-company-vs-build-your-own-team-en.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-freelancer-vs-development-company-vs-build-your-own-team.png') }}" srcset="{{ asset('media/blog/featured-freelancer-vs-development-company-vs-build-your-own-team-768w.png') }} 768w, {{ asset('media/blog/featured-freelancer-vs-development-company-vs-build-your-own-team-1000w.png') }} 1000w" sizes="100vw" alt="Should you hire a freelancer, a development company or build your own team?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Should you hire a freelancer, a development company or build your own team?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-02-17 12:00:00">Feb 17th, 2020</time> &middot; 7 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>In a <a href="{{ localizedRoute('blog.show', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}">previous article</a> we answered one of the most frequent questions our clients are asking us: should they choose out-of-the-box software or opt for a custom development solution?</p>
                            <p>If you've decided to go down the route of developing your own software, you're right to be asking, how you should start?</p>
                            <p>Your first option is to try to work with freelancers. Another choice would be to form an internal team of IT specialists, otherwise known as insourcing. The last choice is to hire an outside software development partner to deliver the product. This is also known as outsourcing.</p>
                            <p>Let's see how each option ranks against the rest, based on the most important criteria you have to look out for when developing a software product.</p>
                            <figure>
                                <img src="{{ asset('media/blog/freelancer-team-outsourcing-costs.jpg') }}" alt="The primary consideration in the execution of a custom development is cost" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Costs</h2>
                            <p>Let's start with costs, as this is often the most important criteria for the client.</p>
                            <p>Out of the three options, the cheapest is easily the freelancer. Most freelancers in Hungary charge between €15 and €45 per hour.</p>
                            <p>If no other aspect is important to you, go with this choice!</p>
                            <p>Forming an internal development team is a lot more expensive. Today – based on experience and location – a developer earns between €1500 and €6000 gross in Hungary.</p>
                            <p>Based on our observations, even in an ideal situation an employee is only productive in at most 50% of its time. The rest of the work time is spent looking up information, research and other non-productive tasks.</p>
                            <p>If we calculate in training, holidays, sick days, office overhead and other benefits, their hourly rate comes in around €35 and €65.</p>
                            <p>At first sight, an outside development partner may seem the most expensive. There's a huge spread in hourly rates when it comes to development companies, on the Hungarian market you can find anything from €15 to… well, the sky's the limit. But usually it's between €30 and €90.</p>
                            <p>But unlike with a freelancer or with insourcing, a development partner usually has a specialist for every area of development.</p>
                            <p>This is important because for two reasons. First, if you're insourcing, you're going to need multiple developers, designers, project manager and testers.</p>
                            <p>Ask yourself: can you make use of their full capacity? Or will day spend most of their time unassigned? Or will they be waiting for each other? In case of outsourcing, this does not represent a problem.</p>
                            <p>On the other hand you don't have to invest your time to manage all the freelancers or developers in your team. Think about it: how valuable is your own time?</p>
                            <figure>
                                <img src="{{ asset('media/blog/freelancer-team-outsourcing-added-value.jpg') }}" alt="In addition to product development, adequate and important information can also be an important aspect" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Added Value</h2>
                            <p>When putting together a development team, one of the most important aspects to consider is how much added value they can add to your product, besides developing it?</p>
                            <p>Think of this as sort of a consulting service. Can they help when you don't know the exact direction? Can they advise you when something can be done better or simpler?</p>
                            <p>Freelancers, even though they are good professionals, cannot be expected to know your field of work or understand your internal processes. So you can't expect this kind of service from them.</p>
                            <p>An internal team will need time until they'll have a clear picture of how your business works, but since they are part and parcel of all your activities and daily life, they will be the ideal choice when it comes to added value.</p>
                            <p>A development partner will be situated somewhere between the two. They aren't part of your organisation, but most of the time they have somebody on the team who has prior experience with your field of work or in a similar project. These partners will often be able to give you impartial and valuable advice.</p>
                            <figure>
                                <img src="{{ asset('media/blog/freelancer-team-outsourcing-time.jpg') }}" alt="Depending on the size and importance of the project, time should be allowed for the project to develop" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Development Time</h2>
                            <p>It's always an important question when regarding development: how much time will it take until deployment?</p>
                            <p>Freelancers often divide their time between multiple projects. If they're on holiday, there'll be nobody to replace them. So, if your project is time critical, they won't be the best choice.</p>
                            <p>An internal team is a safe bet when delivery time is important, since they can give their full attention to the project. Although even in this case, holidays have to be organised wisely.</p>
                            <p>It's not so easy to take sides when it comes to outsourcing. A smaller company faces the same issues freelancers do. A larger firm with over 10 developers can form dedicated development teams, who can make progress on the project without interruptions.</p>
                            <figure>
                                <img src="{{ asset('media/blog/freelancer-team-outsourcing-trust.jpg') }}" alt="It is worth choosing a professionally recognized external company if quality and reliability are the main considerations" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Reliability</h2>
                            <p>Sadly, in our experience, a reliable freelance developer is as rare as a bald eagle. The problem most often springs from the simple fact that they overreach. Sometimes they work 3 or 4 projects at once, which means that deadlines inevitably go out the window.</p>
                            <p>Sometimes, a freelancer can even go AWOL in the middle of the project if they find a better paying or more interesting project to work on.</p>
                            <p>Most people choose to insource because this seems to be the safest option. But the same way there are lots of IT projects, there are lots of IT companies out there as well. And as we know, there's a shortage of good IT professionals. The average time spent at one company, is almost a year less for IT companies, than for other business sectors. Searching and training a new employee on the other hand can be very expensive.</p>
                            <p>An outsourcing partner can lift this weight from our shoulders. Of course, they can also incur delays if an employee leaves the company, but replacing and training them won't be your responsibility and cost!</p>
                            <figure>
                                <img src="{{ asset('media/blog/freelancer-team-outsourcing-training-support.jpg') }}" alt="Training the software can be time consuming, so it is worth clarifying the parameters of training, documentation and after-sales support from the beginning" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Training and support</h2>
                            <p>When developing a software, it is important to take into consideration the type of training and support you're going to get.</p>
                            <p>Developers tend to no like these types of tasks, so if you choose to work with freelancers, you shouldn't expect very detailed training or fast support.</p>
                            <p>They also don't like to document their software very well, or at all, as a fact of matter. Of course, this is the easiest way to skimp at the clients expense. To be fair, we'd also like to add that clients also like to make savings by not asking for documentation, but problems arising from this will most likely be encountered at later stages.</p>
                            <p>If support is important, insourcing might be the best choice. If you go down this avenue, all the knowledge will be kept inside your business. Though you still have to make sure documentation and knowledge sharing processes are defined and governed properly.</p>
                            <p>When it comes to development companies, we can come across both extremes. So make sure to outline the parameters of training, documentation and support at the very beginning of the projects. Don't forget to include these in the contract as well.</p>
                            <figure>
                                <img src="{{ asset('media/blog/freelancer-team-outsourcing-connections.jpg') }}" alt="External mobilizable relationships can be extremely useful in project development" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Connections</h2>
                            <p>We'd like to mention another aspect to consider when choosing to work with a freelancer, an internal team or an outside development partner. And this is an aspect that is rarely considered: connections.</p>
                            <p>A development company usually has loads of contacts that they can access for you during a development project. Think of a project coordinator who can help access funds to finance your project, or a change management specialist to help you prepare for digitalizations.</p>
                            <p>Remember, that when working with freelancers or insourcing, you'll have to form these connections yourself.</p>
                            <h2 class="heading-2 has-margin-b30">Conclusions</h2>
                            <p>Only you can decide which of the three options suits you best. And you'll only be able to choose if you define what are the most important criteria for you.</p>
                            <p>It's almost certain that cost-wise, freelancers are going to get the tick. If we'd like to manage every aspect of a project, then forming an internal team will be a good choice. But don't forget, that in this case, only you'll be responsible for the outcome of the project.</p>
                            <p class="has-margin-b60">Outsourcing to a development partner will be a good choice if you'd like to share the burden of responsibility or if you feel you need the partners experience and connections.</p>
                            <p>If you decided to outsource, drop us a line, we'd love to talk about your next project.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Should you hire a freelancer, a development company or build your own team?'])
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
    "datePublished": "2019-02-17T12:00:00",
    "dateModified": "2019-02-17T12:00:00",
    "description": "There are several ways to go about implementing a custom software solution. But which option would suit you best?",
    "headline": "Should you hire a freelancer, a development company or build your own team?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-freelancer-vs-development-company-vs-build-your-own-team-en.png') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Freelancer, Outsourcing",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Should you hire a freelancer, a development company or build your own team?",
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
                "name": "Should you hire a freelancer, a development company or build your own team?"
            }
        }
    ]
}
</script>
@endpush
