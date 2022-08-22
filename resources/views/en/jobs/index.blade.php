@extends('en.site')

@section('title', 'Our Current Job Offers')
@section('description', 'We are always looking for passionate, creative and driven people to work with. We believe that experience and knowledge should be shared, so we encourage communication between team members and hold in-house training programs. Apply now to become part of the team.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-tablet">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Join</strong> our team
                    </h2>

                    <p>We are always looking for passionate, creative and driven people to work with.</p>
                    <p>We believe that experience and knowledge should be shared, so we encourage communication between team members, attend conferences and hold regular workshops.</p>
                    <p><a href="{{ localizedRoute('about') }}">Get to know us</a>, how we roll and what we love about our jobs.</p>
                    <p>At Further we hire for fit and ambition, rather than qualifications and degrees, so if you think you got what it takes, apply to one of our <a href="#open-positions">open positions</a>.</p>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-4.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="is-hidden-mobile">
        <div class="slides-separator">
            <img src="{{ asset('img/team-15.jpg') }}" alt="Further team" />
            <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
            <img src="{{ asset('img/team-7.jpg') }}" alt="Further team" />
        </div>
    </section>

    <section class="section" id="open-positions">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading">
                        <strong class="is-pearl">Open</strong> positions
                    </h2>

                    @if (count($jobs) > 0)
                        @foreach ($jobs as $job)
                        <article class="job">
                            <div class="job__meta">
                                <span class="job__department">{{ $job->department }}</span>
                                <h2 class="job__title">{{ $job->title }}</h2>
                                <span class="job__location">{{ $job->location }}</span><span class="job__type">{{ $job->type }}</span><span class="job__extra">{{ $job->extra }}</span>
                            </div>
                            <div class="job__description">
                                {!! $job->description !!}
                            </div>
                            <a class="job__read-more">Read more</a>
                            <div class="job__actions">
                                <div class="job__actions__share social-sharer">
                                    <span>Share job:</span>
                                    <div class="social-icons">
                                        <a href="http://www.facebook.com/share.php?u={{ localizedRoute('jobs.show', ['slug' => $job->slug]) }}&title=Apply+to+become+a+{{ urlencode($job->title) }}+at+Further" rel="nofollow" target="_blank"><span class="icon icon--facebook"></span></a>
                                        <a href="http://twitter.com/intent/tweet?status=Apply+to+become+a+{{ urlencode($job->title) }}+at+Further+{{ localizedRoute('jobs.show', ['slug' => $job->slug]) }}" rel="nofollow" target="_blank"><span class="icon icon--twitter"></span></a>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ localizedRoute('jobs.show', ['slug' => $job->slug]) }}&title=Apply+to+become+a+{{ urlencode($job->title) }}+at+Further&source={{ localizedRoute('home') }}" rel="nofollow" target="_blank"><span class="icon icon--linkedin"></span></a>
                                    </div>
                                </div>
                                <a class="job__apply btn is-pearl" data-toggle="modal" data-target="#apply-modal" data-job-title="{{ $job->title }}">Apply for this job</a>
                            </div>
                        </article>
                        @endforeach
                    @else
                        <h2 class="heading-2">We have no job openings available</h2>
                        <p>However, we still encourage you to forward us your resume, we might create an opening just for you!</p>
                        <a class="job__apply btn is-pearl" data-toggle="modal" data-target="#apply-modal">Apply now</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b0">
        <div class="container">
            <div class="columns">
                <div class="column is-7-tablet">
                    <h2 class="hero-heading has-margin-b15">
                        <strong class="is-tangerine">Remote</strong> is natural
                    </h2>
                </div>
            </div>
        </div>

        <div class="panel is-tangerine">
            <div class="container">
                <div class="columns about__top__background">
                    <div class="column is-7-tablet is-6-widescreen">
                        <p>We've been a 100% remote company since before it was cool. 2014 to be exact. This means we know how to stay effective while letting everyone enjoy the benefits of remote work, but also how to foster good working relationships.</p>
                        <p>For us, it is natural that you work from wherever you want and whenever you feel the most productive. And when we need to blow off some post-work steam, we do that at Further Fridays and team retreats.</p>
                    </div>
                    <div class="column is-offset-1-widescreen is-offset-top is-hidden-mobile">
                        <img src="{{ asset('img/team-17.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b0">
        <div class="container">
            <div class="columns">
                <div class="column is-7-tablet is-offset-5-tablet is-offset-6-desktop">
                    <h2 class="hero-heading has-margin-b15">
                        <strong class="is-cobalt">Sharing</strong> is caring
                    </h2>
                </div>
            </div>
        </div>

        <div class="panel is-cobalt">
            <div class="container">
                <div class="columns about__top__background">
                    <div class="column is-offset-top is-hidden-mobile">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                    </div>
                    <div class="column is-7-tablet is-6-widescreen is-offset-1-widescreen">
                        <p>We harvest a strong culture of knowledge sharing. We make it one of our main goals to constantly improve ourselves and share this wisdom with others during dev hours, on <a class="has-text-underlined is-white" href="{{ localizedRoute('blog') }}" target="_blank">our blog</a>, at meetups or conferences.</p>
                        <p>On top of this, we also try to give back whenever we can by contributing to community projects or releasing some of our work as open source.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('content-modals')
    <div class="modal @if (count($errors) > 0) is-auto @endif" id="apply-modal" tabindex="-1" role="dialog">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__header has-no-border">
                    <a class="modal__close" data-dismiss="modal">&times;</a>
                    <img class="modal__icon" src="{{ asset('img/icon-badge.png') }}" alt="" />
                    <h3 class="modal__title has-text-centered">Send us your CV</h3>
                </div>
                <form class="modal__form" action="{{ localizedRoute('jobs.send') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="is-pulled-left">
                        <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                            <input class="form-control" name="name" placeholder="Your name *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="101" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('git') ? 'has-error' : '' }}">
                            <input class="form-control" name="git" placeholder="Public GIT URL (GitHub or similar) *" type="url" value="{{ old('git') }}" tabindex="103" required />
                        </div>
                    </div>
                    <div class="is-pulled-right">
                        <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                            <input class="form-control" name="email" placeholder="Email *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="102" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('cv') ? 'has-error' : '' }}">
                            <input class="form-control" name="cv" placeholder="LinkedIn (or CV) URL *" type="url" value="{{ old('cv') }}" tabindex="104" required />
                        </div>
                    </div>
                    <div class="form-group {{ isset($errors) && $errors->has('message') ? 'has-error' : '' }}">
                        <textarea class="form-control" name="message" placeholder="Message *" rows="5" tabindex="105" required>{{ old('message') }}</textarea>
                    </div>
                    <input name="job" type="hidden" value="" />
                    {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                    <button class="btn is-large is-pearl" type="submit">Send</button>
                </form>
            </div><!-- /.modal__content -->
        </div><!-- /.modal__dialog -->
    </div><!-- /.modal -->
    <div class="modal__backdrop"></div>
@endpush



@push('content-scripts')
<script>
    // read more
    Array.prototype.forEach.call(document.querySelectorAll('.job__read-more'), function(trigger) {
        trigger.addEventListener('click', function(e) {
            e.target.closest('.job').classList.toggle('is-open');
        });
    });

    // set job for which candidate is applying for
    document.querySelector('.job__apply').addEventListener('click', function(e) {
        var that = e.target;
        var target = document.querySelector('#apply-modal');
        var targetInput = target.querySelector('input[name="job"]');

        targetInput.value = '';

        if (that.getAttribute('data-job-title')) {
            targetInput.value = that.getAttribute('data-job-title');
        }
    });
</script>
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
                    "@id": "{{ localizedRoute('jobs') }}",
                    "name": "Our Current Job Offers"
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
    "description": "We are always looking for passionate, creative and driven people to work with. We believe that experience and knowledge should be shared, so we encourage communication between team members and hold in-house training programs. Apply now to become part of the team.",
    "headline": "Our Current Job Offers",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('jobs') }}",
    "name": "Our Current Job Offers",
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
                "@id": "{{ localizedRoute('jobs') }}",
                "name": "Our Current Job Offers"
            }
        }
    ]
}
</script>
@endpush
