@extends('en.site')

@section('title', 'UX Audit Service')
@section('description', 'During a UX audit we examine your digital product, identifying bottlenecks and usability issues, and provide an actionable plan on how to fix them.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        UX Audit
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Eliminate confusion, improve <strong class="is-tangerine">conversion</strong> and <strong class="is-tangerine">retention.</strong>
                    </h1>
                    <div>
                        During a UX audit we examine your digital product, identifying bottlenecks and usability issues, and provide an actionable plan on how to fix them.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-tangerine">
                        <div class="services__service__benefits__badge">Benefits</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Improve conversion by 36%</li>
                            <li>Reduce churn by 71%</li>
                            <li>15% less customer support tickets</li>
                            <li>Adaptable to apps, SaaS or websites</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.ux-audit.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ux-audit.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ux-audit.promo.name'))
                                {{ config('site.prices.ux-audit.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                                Book your UX audit
                            </a>
                            <a class="has-text-underlined is-white" href="{{ localizedRoute('contact') }}">or write</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Is our <strong class="is-pearl">UX audit</strong> a good fit for you?
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        Sounds great, but how do you know if you need a UX audit? If you are experiencing any of the following issues, it might be time to consider one.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Your users aren't spending time on your page</h3>
                            <p>Users aren't interacting and spend less time than you would expect on your page or app.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Your visitors are not making a purchase</h3>
                            <p>You are spending money on customer acquisition that brings new users to the website or app, but they are not converting into paying customers.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Your customer support channels are always busy</h3>
                            <p>If your customer support team is working at the limit of their capacity, it probably means your users are confused, and are facing obstacles while navigating your product.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Your metrics are underperforming</h3>
                            <p>Several of your key metrics are underwhelming, and you are not certain why this is happening.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-16.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-11.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-pearl" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                        Get your UX audit
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Success stories</strong> from our pleased customers:
                    </h2>
                </div>
            </div>
            <div class="columns">
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

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">What will you get?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-pearl is-small"></div>
                    <h3 class="heading-4">Customer feedback</h3>
                    <p>We will gather and structure feedback through customer interviews and usability tests.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Revised user journey</h3>
                    <p>Based on the customer feedback, we will create an adjusted user journey map.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Improved navigation</h3>
                    <p>Usability tests and techniques such as card sorting will help us provide an amended information architecture plan.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Action plan</h3>
                    <p>At the end of the process you will get a report with identified issues, opportunities and actionable insights.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-tangerine" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                        Start your UX audit today
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        The <strong class="is-tangerine">UX audit</strong> process
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-6-desktop is-offset-1-desktop">
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">1</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Groundwork
                            </h3>
                            <p>We start by getting to know your product, your goals, your team and, most importantly, your customers. We create user personas, prepare interview questions and schedule the interviews. During this time we also set up analytics tools on your product so they start gathering valuable data.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Analysis
                            </h3>
                            <p>We conduct user interviews and usability tests with customers to gather qualitative data. Meanwhile, we are also looking at the metrics provided by the different analytics tools for quantitative data that support these findings. Our UI team will also look at you product to identify design issues, inconsistencies and anti-patterns.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Reporting
                            </h3>
                            <p>We structure all our findings, identify opportunities for improvement and offer a ready-to use action plan that you can start implementing right away.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-9.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Don't lose any more customers!
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Improve your product today to convert more and retain your customers.
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-text-centered is-tangerine">
                    <span class="services__service__price">
                        €{{ config('site.prices.ux-audit.default') }}
                    </span>
                        <span class="services__service__price-promo">
                        €{{ config('site.prices.ux-audit.promo.price') }}
                    </span>
                        <small class="is-block">
                            @if (config('site.prices.ux-audit.promo.name'))
                                {{ config('site.prices.ux-audit.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <a class="btn has-margin-t15 is-large" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                            I want higher revenues
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6-desktop">
                    <h2 class="heading-1 has-margin-b60">
                        Download <strong class="is-pearl">a sample</strong> UX audit
                    </h2>

                    <form class="has-margin-t60" action="{{ localizedRoute('freebies.get') }}" method="POST">

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
                                I agree to the <a href="{{ localizedRoute('privacy') }}" target="_blank">privacy policy</a>.
                            </label>
                        </div>

                        <input name="source" type="hidden" value="freebie: ux audit sample" />
                        <input name="freebie" type="hidden" value="ux-audit-sample.pdf" />

                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-pearl" type="submit">
                            Download sample
                        </button>
                    </form>
                </div>
                <div class="column has-text-right is-5-tablet is-offset-1-tablet">
                    <img src="{{ asset('media/freebies/ux-audit-sample.png') }}" alt="UX Audit Sample" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">F.A.Q.</h3>

                    <h4 class="heading-3">How much does a UX audit cost and what's included?</h4>
                    <p class="has-margin-b30"><small>A comprehensive UX audit is now only €{{ config('site.prices.ux-audit.promo.price') }}, and includes competitor and trend analysis, customer interviews, heuristic evaluation and recommendations for usability improvements.</small></p>

                    <h4 class="heading-3">Can I integrate UX audits into my ongoing project cycle?</h4>
                    <p class="has-margin-b30"><small>Absolutely! The aim of a UX audit is to put you on a path of continuous improvements.</small></p>

                    <h4 class="heading-3">Beyond UX audits, can you help us with UX research and UI design?</h4>
                    <p><small>Yes! Our services extend beyond UX audits and include product strategy, user research, UX, UI design and software development. Please note that these additional services are offered at different rates.</small></p>

                    <h4 class="heading-3">Do you offer refunds?</h4>
                    <p><small>You have 7-day money-back guarantee. If you find that the insights from our audit don't offer relevant or actionable improvements for your product, we provide a full refund of the price you paid.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Ready to start?
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Get an audit for your app, SaaS or website today!
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-tangerine">
                        <span class="services__service__price">
                            €{{ config('site.prices.ux-audit.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ux-audit.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ux-audit.promo.name'))
                                {{ config('site.prices.ux-audit.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <a class="btn has-margin-t15 is-large" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                            Get your UX audit
                        </a>
                        <a class="has-margin-t15 has-text-underlined is-block is-white" href="{{ localizedRoute('contact') }}">or write</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
