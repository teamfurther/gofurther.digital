@extends('en.site', ['showFooter' => false])

@section('title', '9 out of 10 Products Fail. Here\'s How to Make Sure Yours Doesn\'t.')
@section('description', 'Learn how to build digital products that people want.')

@section('content')
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-7-tablet">
                    <h1 class="hero-heading has-margin-b15">
                        9 out of 10 Products Fail.<br />
                        Here's How to <strong class="is-tangerine">Make Sure Yours Doesn't.</strong>
                    </h1>
                    <h2 class="heading-5">
                        Learn how to build digital products that people want by attending this 90-minute interactive webinar.
                    </h2>
                </div>
                <div class="column is-offset-1-fullhd">
                    <div class="webinar__info">
                        <div class="columns is-mobile">
                            <div class="column is-9">
                                <div class="webinar__tag">Free Live Webinar</div>
                                <div class="webinar__host">hosted by <a href="#host">Peter Illés</a></div>
                                @if ($date && !$date->isPast())
                                <div class="webinar__spots">{{ $totalSpots - $confirmedSpots }} spots left</div>
                                <div class="webinar__date">
                                    {{ $date->format('l, F jS') }}<br />
                                    {{ $date->format('G:i A') }} - {{ $date->addMinutes($duration)->format('G:i A e') }}
                                </div>
                                @else
                                <div class="webinar__closed">
                                    Looks like you missed the event. <a href="#newsletter">Stay tuned</a> for the next one!
                                </div>
                                @endif
                            </div>
                            <div class="column is-3">
                                <img src="{{ asset('img/team-peter-illes.png') }}" alt="Peter Illés" />
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                @if ($date && !$date->isPast())
                                    <a class="btn is-full-width is-large is-tangerine" href="#register">Book your spot now!</a>
                                @else
                                    <a class="btn is-full-width is-large" href="#newsletter">Keep me in the loop!</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading-1 has-margin-b90 has-text-centered">
                        What you'll learn
                    </h3>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column is-1-tablet">
                    <div class="list-hero is-raspberry">↪</div>
                </div>
                <div class="column is-5-tablet">
                    <h5 class="heading-5">A user-centered approach to building products</h5>
                </div>
                <div class="column is-1-tablet">
                    <div class="list-hero is-raspberry">↪</div>
                </div>
                <div class="column is-5-tablet">
                    <h5 class="heading-5">A 4-step process to blast through product development</h5>
                </div>
                <div class="column is-1-tablet">
                    <div class="list-hero is-raspberry">↪</div>
                </div>
                <div class="column is-5-tablet">
                    <h5 class="heading-5">A framework for identifying the make or break features of your solution</h5>
                </div>
                <div class="column is-1-tablet">
                    <div class="list-hero is-raspberry">↪</div>
                </div>
                <div class="column is-5-tablet">
                    <h5 class="heading-5">Ridiculously simple experiments to test product-readiness</h5>
                </div>
                <div class="column is-1-tablet">
                    <div class="list-hero is-raspberry">↪</div>
                </div>
                <div class="column is-5-tablet">
                    <h5 class="heading-5">... tailored to your individual use-case</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading-1 has-text-centered">Who do we recommend this resource for?</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt"></div>
                    <h4 class="heading-4">Startup founders</h4>
                    <p>Founders who wish to better understand their target market and minimize inherent risk.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-tangerine"></div>
                    <h4 class="heading-4">Product managers</h4>
                    <p>Product managers who are starting out, and want a proven, efficient and user-centered method to develop products.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry"></div>
                    <h4 class="heading-4">Managers</h4>
                    <p>Managers and executives of established businesses who are overseeing new product development in their company.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="host">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading-1 has-text-centered">Meet your host</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column is-3">
                    <img src="{{ asset('img/host-peter-illes.jpg') }}" alt="Peter Illés" />
                </div>
                <div class="column is-offset-1">
                    <h4 class="heading-2 has-margin-b0">Peter Illés</h4>
                    <h5 class="heading-5">Founder & Head of Strategy @ Further Digital Solutions</h5>

                    <div class="social-icons has-margin-b30 is-left-aligned is-small">
                        <a href="https://www.linkedin.com/in/ilpet" class="u-url url" target="_blank"><span class="icon icon--linkedin"></span></a>
                        <a href="https://twitter.com/ilpet" class="u-url url" target="_blank"><span class="icon icon--twitter"></span></a>
                    </div>

                    <p>During his career, Peter worked on products for companies such as Procter & Gamble, UNICEF or Centralized. He co-founded Further, a digital product agency helping startups and larger enterprises turn their ideas into market-ready product. With his experience in product strategy, Peter also mentors several startups in the lean product process.</p>
                    <p>When not doing any of the above, he loves travelling, classic rock, cycling and every sport that involves hitting a ball.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h3 class="heading-1 has-text-centered">They trusted our process</h3>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <div class="has-items-centered is-reversed">
                        <img class="testimonial__picture has-margin-l15 is-right-aligned" src="{{ asset('img/testimonials-carlo-santone.png') }}" alt="OnePageLink Carlo Santone testimonial" />
                        <blockquote class="testimonial__content">
                            <p>We are very happy with what we've built together with Further, and what we continue to come up with creatively & technically as we iterate and refine.</p>
                            <cite class="testimonial__author">Carlo SANTONE, OnePageLink</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="columns has-margin-b90">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <div class="has-items-centered">
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-ferenc-fodor.png') }}" alt="MPRX Ferenc Fodor testimonial" />
                        <blockquote class="testimonial__content">
                            <p>Further held several workshops with us, the aim of which was to map our current products and to define and coordinate our goals. (...) They found the right solutions in a short time, keeping in mind customer needs. In the process, it became clear that they have serious expertise in digital product development and digital transformation projects.</p>
                            <cite class="testimonial__author">Ferenc FODOR, Menedzser Praxis</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($date && !$date->isPast())
    <section class="section is-dark" id="register">
        <div class="newsletter-box">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-7-desktop">
                        <form class="newsletter-box__form" id="newsletter-subscribe-form" action="{{ localizedRoute('webinar.register') }}" method="POST">
                            <h2 class="hero-heading">
                                Book <strong>your spot</strong> now!
                            </h2>

                            {{ csrf_field() }}

                            <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                                <input class="form-control" name="name" placeholder="How shall we address you (e.g. Fionulla)? *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                                <input class="form-control" name="email" placeholder="Your email address *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                            </div>
                            <div class="form-group {{ isset($errors) && $errors->has('privacy') ? 'has-error' : '' }} has-margin-b30">
                                <label class="form-label">
                                    <span class="form-checkbox">
                                        <input name="privacy" type="checkbox" value="1" />
                                        <span></span>
                                    </span>
                                    I agree to the <a href="localizedRoute('privacy')" target="_blank">privacy policy</a>
                                </label>
                            </div>
                            <input name="source" type="hidden" value="webinar: validation" />
                            <input name="webinar" type="hidden" value="validation" />
                            {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                            <button class="btn is-large is-tangerine" type="submit">
                                Hold my spot!
                            </button>
                        </form>
                    </div>
                    <div class="column is-12-tablet is-4-desktop is-offset-1-desktop">
                        <p>You're invited! The host has limited this webinar to 10 people to make sure this is and interactive and pleasant experience for everyone</p>
                        <p>Claim your spot to join the group!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
        @include(getLang() . '.banners.newsletter-subscription', [
            'bodyText' => '<p class="has-margin-b30">We do each webinar 3 times per year. Enter your email address and you\'ll be the first to know about the next date for this webinar.</p>',
            'headingText' => 'Don\'t miss the <strong>next event!</strong>',
            'source' => 'webinar: validation',
        ])
    @endif
@endsection
