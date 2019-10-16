@section('title', 'PROFNET e-Learning Platform')
@section('description', 'PROFNET is an e-learning project financed by the Hungary-Romania Cross-Border Co-operation Programme, and organised by the Bartók Béla High School in Timisoara, Romania in partnership with the Kis Bálint Elementary School in Vésztő, Hungary.')
@section('preview_image', asset('media/projects/profnet-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">PROFNET</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Executive summary</h2>
                                <p>PROFNET is an e-learning project financed by the Hungary-Romania Cross-Border Co-operation Programme, and organised by the Bartók Béla High School in Timisoara, Romania in partnership with the Kis Bálint Elementary School in Vésztő, Hungary.</p>
                                <p>We designed and developed PROFNET, an e-learning platform which is aimed at uniting the teachers and students in the DKMT microregion. On this platform students can participate in a diverse selection of courses, share stories and match their knowledge against each other in online quizzes and competitions.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/profnet-illustration-1.png') }}" alt="Case studies: PROFNET" />
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
                    <img src="{{ asset('media/projects/profnet-logo.png') }}" alt="Case studies: PROFNET logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">The Client</h2>
                    <p>Named after the world-renowned composer, pianist and musicologist and founded in 1990, the Bartók Béla High School is one of the most prominent schools in Timișoara. It is the only school in town where the teaching language is Hungarian, making it central the pillar for culture and education in the region among the local Hungarian minority living here.</p>
                    <p>It as also the alma-mater for several of our team, making this an especially rewarding project to work on.</p>
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
                    <p>The main scope of the project was to design and create an e-learning software capable of running multiple courses and test, in multiple languages at the same time. It also serves as communication platform where news and stories can be shared.</p>
                    <ul class="list has-bullets">
                        <li>Authoring and administration of quizzes.<br /><small>Users with a teacher role can create tests consisting of a wide-range of question and answer types. Tests can also be timed and can have an automatic expiration date.</small></li>
                        <li>Automatic scoring of aforementioned quizzes.<br /><small>All completed quizzes are automatically scored by the system.</small></li>
                        <li>Authoring and administration of online courses.<br /><small>User with a teacher role can create courses or lectures, supported by images and video content</small></li>
                        <li>Reporting.<br /><small>All data in the system can be filtered, sorted and exported in CSV format.</small></li>
                        <li>User management and access control.<br /><small>All user have different roles and permissions, which can be easily managed through the administration pages. Also, different students can be assigned to each course and quiz.</small></li>
                        <li>Multilingual support.<br /><small>All content can be made available in multiple languages.</small></li>
                    </ul>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/profnet-illustration-2.jpg') }}" alt="Case studies: PROFNET" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">For Students</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>Based on the Codeigniter framework, we created a fully custom e-learning solution. We handled all phases of the project from software architecture, to development and interface design.</p>
                    <p>On the frontend side we created a youthful but easy to navigate user interface, which is straightforward to use, even by the youngest students. Here they can get all the latest information, read new announcements and stories.</p>
                    <p>Once logged in, they can access all the courses and tests they've been assigned to. While reading courses, they can also browse all the attached content, such as images, videos and other training materials.</p>
                    <p>Participating in quizzes is also facilitated by having a constant overview of how many questions have been taken and how many remain, how much time remains until the test finishes and what the student's current score is.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/profnet-illustration-3.jpg') }}" alt="Case studies: PROFNET" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">For Teachers</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>The backend of the platform is reserved for teachers and administrators only. Here, all the frontend content can be administered and translated into multiple languages, users can be created, managed and assigned to different courses and quizzes.</p>
                    <p>Teachers can create and manage courses, which can consist of several lessons, all of which can include multimedia content. They can also create and manage quizzes, which can timed or not. They can choose from a wide range of question types, such as single choice, multiple choice, matching choices, numerical/equation, missing spaces, file upload or essay.</p>
                    <p>All incoming quizzes are automatically scored based on the question types and scoring rules, making it easy for the teachers to reward their student for their efforts.</p>
                </div>
                <div class="column">
                    <img class=" is-pulled-right-tablet" src="{{ asset('media/projects/profnet-illustration-4.jpg') }}" alt="Case studies: PROFNET" />
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
                    <p>PROFNET has been around since 2012, during which period around 200 students used our platform annually, throughout the year gaining new insight into different subjects, meeting other students and proving their knowledge against them in online quizzes.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/profnet-illustration-5.jpg') }}" alt="Case studies: PROFNET" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">119</span>
                        <span class="project__stats__description">courses</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">1453</span>
                        <span class="project__stats__description">students</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">41</span>
                        <span class="project__stats__description">teachers</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">21,270</span>
                        <span class="project__stats__description">test questions answered</span>
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
                        <a class="btn is-large is-primary" data-toggle="modal" data-target="#project-gallery">Visit the gallery</a>
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
                    @include(getLang() . '.projects.excerpts.idea-elearning-software')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.mentorme-live-video-tuition')
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
                    <h3 class="modal__title">PROFNET</h3>
                    <span class="modal__subtitle">e-learning platform</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/profnet-gallery-1.jpg') }}" alt="Case studies: PROFNET Gallery" />
                    <img src="{{ asset('media/projects/profnet-gallery-2.jpg') }}" alt="Case studies: PROFNET Gallery" />
                    <img src="{{ asset('media/projects/profnet-gallery-3.jpg') }}" alt="Case studies: PROFNET Gallery" />
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
                    "name": "PROFNET e-Learning Platform"
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
    "description": "PROFNET is an e-learning project financed by the Hungary-Romania Cross-Border Co-operation Programme, and organised by the Bartók Béla High School in Timisoara, Romania in partnership with the Kis Bálint Elementary School in Vésztő, Hungary.",
    "headline": "PROFNET e-Learning Platform",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "e-Learning software, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
    "name": "PROFNET e-Learning Platform",
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
                "name": "PROFNET e-Learning Platform"
            }
        }
    ]
}
</script>
@endpush
