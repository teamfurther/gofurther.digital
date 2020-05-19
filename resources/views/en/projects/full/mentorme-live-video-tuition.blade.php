@section('title', 'mentor.me Live Video Tuition')
@section('description', 'In early 2016 we received the task of developing mentor.me, a live video tuition platform which connects freelance mentors with interested students. We jumped at the chance to work on a different type of project and to play around with cutting-edge technologies.')
@section('preview_image', asset('media/projects/mentorme-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">mentor.me</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Executive summary</h2>
                                <p>In early 2016 we received the task of developing mentor.me, a live video tuition platform which connects freelance mentors with interested students. We jumped at the chance to work on a different type of project and to play around with cutting-edge technologies.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/mentorme-illustration-1.png') }}" alt="Case studies: mentor.me" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">The Challenge</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>mentor.me is a platform which lets presenters, called mentors, to reach out and connect with prospective students, and give lectures in various fields, like business or life coaching. Mentors start a lecture, which can be open, or invitation based. Invitation based lectures can also be separated into group lectures or private lessons.</p>
                    <p>Lectures are in-fact live audio-video streams, accompanied by a chat service where mentors can text students or share training materials. Video-streams can be either unidirectional, where only students see the lecturer, or bidirectional, where mentors can also see their students.</p>
                    <p>Students can attend these presentation and pay with credits for every minute they spend listening to a lecture. Teachers earn credits for each lecture and can cash in their credits each week. There are different going rates for each type of lecture. Private lectures earn more credits per student than group lectures, and considerably more than open lectures.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/mentorme-illustration-2.jpg') }}" alt="Case studies: mentor.me" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">The Solution</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>We came up with an architecture that consists of three elements: the client application, which is used by the mentors and students, a backend which provides an API for communication with the database layer and finally a stream server for the video feeds.</p>
                    <p>The client is an Angular.js driven application that receives audio and video input and forwards the data packages using WebRTC towards the stream server, which in part can be accessed by the other clients to read this data.</p>
                    <p>For storing data, the client makes API calls, to which the API server responds by emitting a socket event, telling the client to make a second call for accessing the updated information. The API is built using PHP and Lumen as a framework.</p>
                    <p>Two separate client instances communicate in a similar fashion, using websockets. To ease our work with websockets we used the socket.io framework.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/mentorme-illustration-3.jpg') }}" alt="Case studies: mentor.me" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__tech-stack">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="heading-2">Technology Stack</h2>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="project__tech-stack__list">
                            <li>Angular.js</li>
                            <li>Javascript</li>
                            <li>WebRTC</li>
                            <li>socket.io</li>
                            <li>Lumen</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>MongoDB</li>
                            <li>nginx</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__gallery">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Want to see more of this project?</div>
                        <a class="btn is-large is-pearl" data-toggle="modal" data-target="#project-gallery">Visit the gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">Other Case Studies</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    @include(getLang() . '.projects.excerpts.profnet-elearning-platform')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.njoy-the-hive')
                </div>
            </div>
        </div>
    </section>
@endsection

@push('content-modals')
<div class="modal" id="project-gallery" tabindex="-1" role="dialog">
    <div class="modal__dialog is-large">
        <div class="modal__content">
            <div class="modal__header">
                <a class="modal__close" data-dismiss="modal">&times;</a>
                <h3 class="modal__title">mentor.me</h3>
                <span class="modal__subtitle">Video streaming, chat service</span>
            </div>
            <div class="modal__body">
                <img src="{{ asset('media/projects/mentorme-gallery-1.jpg') }}" alt="Case studies: mentor.me Gallery" />
                <img src="{{ asset('media/projects/mentorme-gallery-2.jpg') }}" alt="Case studies: mentor.me Gallery" />
                <img src="{{ asset('media/projects/mentorme-gallery-3.jpg') }}" alt="Case studies: mentor.me Gallery" />
            </div>
        </div><!-- /.modal__content -->
    </div><!-- /.modal__dialog -->
</div><!-- /.modal -->
<div class="modal__backdrop"></div>
@endpush



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "author": {
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
    "breadcrumb": {
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
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Our work"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "mentor.me Live Video Tuition"
                }
            }
        ]
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
    "description": "Being pioneers in the domain of scuba diving education, IDEA quickly realised the potential of mixing in technology with their well-established teaching practices, and put us in charge of developing their e-teaching platform.",
    "headline": "mentor.me Live Video Tuition",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Live video tuition",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "mentor.me Live Video Tuition",
    "publisher": {
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
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Our work"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "mentor.me Live Video Tuition"
            }
        }
    ]
}
</script>
@endpush
