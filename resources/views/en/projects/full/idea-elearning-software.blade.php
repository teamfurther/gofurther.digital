@section('title', 'IDEA e-Learning Software')
@section('description', 'Being pioneers in the domain of scuba diving education, IDEA quickly realised the potential of mixing in technology with their well-established teaching practices, and put us in charge of developing their e-teaching platform.')
@section('preview_image', asset('media/projects/idea-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">IDEA e-Learning Software</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Executive summary</h2>
                                <p>Being pioneers in the domain of scuba diving education, IDEA quickly realised the potential of mixing in technology with their well-established teaching practices, and put us in charge of developing their e-teaching platform.</p>
                                <p>We have been working together with IDEA since 2012, and in these last 5 year we have been constantly building their platform, which is now used by students across 7 countries.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/idea-illustration-1.png') }}" alt="Case studies: IDEA" />
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
                <div class="column is-hidden-touch">
                    <img src="{{ asset('media/projects/idea-logo.png') }}" alt="Case studies: IDEA logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">The Client</h2>
                    <p>Our client is IDEA Germany, Austria and Central Europe, a subsidiary of the International Diving Educators Association. IDEA was originally established in 1952 as part of the FSDA (Florida Skin Divers Association). In Europe the first headquarters were established in 1992 in Italy and from the beginning of 1995 the Italian headquarters became the European headquarters and IDEA Europe was born, with regional offices in several countries of Europe and instructors also outside of Europe.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">The Scope</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>The main goal was designing a system which would centralise all the education related activities in one, universally accessible place. All the materials, courses and records needed to be opened, downloaded and printed from anywhere, classroom or beachside.</p>
                    <p>One of the main features is a course system. Courses include study materials and automatically evaluated tests, in 6 different languages. One of the interesting challenges while designing the application was a dependency system for courses, which prevents users from accessing courses without priorly completing all prerequisites.</p>
                    <p>The other core feature is the student record file. The record file can be accessed by students and their instructors, and includes all the information regarding the student's development, such as certificates, tests scores, pool and open water lesson grades, payment status, etc. This provides them with an up-to-date overview of their training progress.</p>
                    <p>Other features include an access-control level module, which allows the management of different user roles (administrators, instructor trainers, instructors, students), an internationalisation module for translating all content, media files and interfaces in 6 languages, a private messaging system which aids student-instructor communication and a newsletter module.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/idea-illustration-2.jpg') }}" alt="Case studies: IDEA" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">The Result</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>The resulting application is currently used by 150 scuba diving students across 7 countries. Students can broaden their knowledge partaking in courses and online tests, while instructors can quickly access information regarding their students.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/idea-illustration-3.jpg') }}" alt="Case studies: IDEA" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">6</span>
                        <span class="project__stats__description">languages</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">170</span>
                        <span class="project__stats__description">students</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">55</span>
                        <span class="project__stats__description">courses</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">630</span>
                        <span class="project__stats__description">tests completed</span>
                    </div>
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
                            <li>CodeIgniter</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Apache</li>
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
                    <h3 class="modal__title">IDEA</h3>
                    <span class="modal__subtitle">e-learning platform</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/idea-gallery-1.jpg') }}" alt="Case studies: IDEA Gallery" />
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
                    "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                    "name": "IDEA e-Learning Software"
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
    "headline": "IDEA e-Learning Software",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "e-Learning software, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
    "name": "IDEA e-Learning Software",
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
                "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                "name": "IDEA e-Learning Software"
            }
        }
    ]
}
</script>
@endpush
