@extends('en.site')

@section('title', $job->title)
@section('description', 'We are always looking for passionate, creative and driven people to work with. We believe that experience and knowledge should be shared, so we encourage communication between team members and hold in-house training programs. Apply now to become part of the team.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Open positions</h1>
                    <article class="job is-open">
                        <div class="job__meta">
                            <span class="job__department">{{ $job->department }}</span>
                            <h2 class="job__title">{{ $job->title }}</h2>
                            <span class="job__location">{{ $job->location }}</span><span class="job__type">{{ $job->type }}</span><span class="job__extra">{{ $job->extra }}</span>
                        </div>
                        <div class="job__description">
                            {!! $job->description !!}
                        </div>
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
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.projects', [
        'headingText' => 'Take a look at some of the projects you might work on'
    ])
@endsection


@push('content-modals')
<div class="modal @if (count($errors) > 0) is-auto @endif" id="apply-modal" tabindex="-1" role="dialog">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__header has-no-border">
                <a class="modal__close" data-dismiss="modal">&times;</a>
                <img class="modal__icon" src="{{ asset('img/cv-icon.png') }}" alt="" />
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
                <input name="job" type="hidden" value="{{ $job->slug }}" />
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
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('jobs.show', ['slug' => $job->slug]) }}",
                    "name": "{{ $job->title }}"
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
    "headline": "{{ $job->title }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, MVP development, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('jobs.show', ['slug' => $job->slug]) }}",
    "name": "{{ $job->title }}",
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
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('jobs.show', ['slug' => $job->slug]) }}",
                "name": "{{ $job->title }}"
            }
        }
    ]
}
</script>
@endpush
