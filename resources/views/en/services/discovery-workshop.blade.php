@extends('en.site')

@section('title', 'Discovery Workshop')
@section('description', 'During a discovery workshop we\'ll explore user needs and pain points, brainstorm solutions and align the team on what needs to be built.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-multiline is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Discovery Workshop
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Do you have an idea that you want to build? <strong class="is-cobalt">Start here!</strong>
                    </h1>
                    <div>
                        Explore user needs and pain points, brainstorm solutions and align the team on what needs to be built.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-cobalt">
                        <div class="services__service__benefits__badge">Benefits</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Reduce development costs by 200%</li>
                            <li>Leverage our experience on over {{ config('site.stats.projects') }} projects</li>
                            <li>Gain confidence in your product's success</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.discovery.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.discovery.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.discovery.promo.name'))
                                {{ config('site.prices.discovery.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-white" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                                Book your discovery workshop
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
                        When do you need our <strong class="is-raspberry">discovery workshop?</strong>
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        We recommend our discovery workshop for everyone who considers building a new product or adding major features to an existing product.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Before requesting a development quote</h3>
                            <p>We'll help you formulate a clear and precise RFQ that vendors can respond to accurately, reducing ambiguity and miscommunication.</p>
                            <p>A discovery workshop also gives you a chance to prioritize essential features and functions, set realistic timelines and budgets for the project.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">When developing a new product</h3>
                            <p>We'll align your needs and expectations by identifying any potential challenges and risks early on, ensuring the solution meets the objectives.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">When expanding and existing product</h3>
                            <p>Our discovery workshop ensures that the expansion is aligned with current workflows and prevents disruption. We'll help identify the technical implications and any adjustments needed for a seamless transition.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-13.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-raspberry" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                        Let's build your product
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
                        <strong class="is-cobalt">Success stories</strong> from our pleased customers:
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
                    <h3 class="heading-4">User personas</h3>
                    <p>Get a deep understanding of who your target audience is, and what they need.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Customer journey map</h3>
                    <p>Visualize users' journey and touchpoints throughout the product.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Product roadmap</h3>
                    <p>Learn about the development process, potential pitfalls and set realistic cost expectations.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Product specifications</h3>
                    <p>A backlog of users stories and technical requirements that you can send with your RFQ.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-cobalt" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                    Start your product journey
                </a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">F.A.Q.</h3>

                    <h4 class="heading-3">How much does a discovery workshop cost and what's included?</h4>
                    <p class="has-margin-b30"><small>A discovery workshop is now only €{{ config('site.prices.discovery.promo.price') }}, and includes defining user personas, mapping customer journeys, creating a product roadmap, a backlog of user stories and technical requirements.</small></p>

                    <h4 class="heading-3">Can I integrate discovery workshops into my ongoing project cycle?</h4>
                    <p class="has-margin-b30"><small>Absolutely! Discovery workshops also help when redesigning or adding major functionality to existing products or creating new (spin-off) products.</small></p>

                    <h4 class="heading-3">Beyond workshops, can you help us with UI design or development?</h4>
                    <p><small>Yes! Our services extend beyond discovery and include product strategy, user research, UX, UI design and software development. Please note that these additional services are offered at different rates.</small></p>

                    <h4 class="heading-3">Do you offer refunds?</h4>
                    <p><small>You have 7-day money-back guarantee. If you find that the insights uncovered during the discovery workshop don't offer a relevant or actionable path forward for your product, we provide a full refund of the price you paid.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Ready to start?
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Start bringing your ideas to life!
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-cobalt">
                        <span class="services__service__price">
                            €{{ config('site.prices.discovery.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.discovery.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.discovery.promo.name'))
                                {{ config('site.prices.discovery.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <a class="btn has-margin-t15 is-large is-white" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                            Schedule your discovery workshop
                        </a>
                        <a class="has-margin-t15 has-text-underlined is-block is-white" href="{{ localizedRoute('contact') }}">or write</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
