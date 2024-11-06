@extends('en.site')

@section('title', 'Design Sprint')
@section('description', 'A 5 day-long innovation workshop aimed at understanding users, accelerating decision-making and creating validated prototypes in order to reduce risks in high-value projects. It condenses months worth of work into a single week.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-multiline is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Design Sprint
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Solve product challenges and validate ideas in just <strong class="is-cobalt">5 days!</strong>
                    </h1>
                    <div>
                        A Design Sprint is an innovation workshop aimed at accelerating decision-making and creating validated prototypes in order to reduce risks in high-value projects.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-cobalt">
                        <div class="services__service__benefits__badge">Benefits</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Boost team alignment</li>
                            <li>Condense months worth of work into a single week</li>
                            <li>Reduce development costs by 200%</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.design-sprint.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.design-sprint.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.design-sprint.promo.name'))
                                {{ config('site.prices.design-sprint.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-white" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                                Book your Design Sprint
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
                        When do you need our <strong class="is-raspberry">Design Sprint?</strong>
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
                            <h3 class="heading-4 has-margin-b5">When exploring new product ideas or features</h3>
                            <p>A Design Sprint offers a structured framework to quickly test and refine concepts. It advocates early user feedback to ensure solutions address real user needs.</p>
                            <p>Perfect for validating concepts before committing to full development, saving time and resources.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">When facing critical business challenges</h3>
                            <p>If you are stuck or need to overcome complex issues quickly, a Design Sprint will foster cross-functional collaboration to align your team and bring fresh perspectives and solutions.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">When needing rapid iteration and feedback</h3>
                            <p>A Design Sprint is ideal for refining existing products by incorporating user feedback, helping to identify pain points and optimize user experience efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-10.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-raspberry" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                        Let's sprint together
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
                    <h3 class="heading-4">Workshop facilitator</h3>
                    <p>An experienced facilitator to guide you through the 5-day workshop process.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Interactive prototypes</h3>
                    <p>An interactive prototype of the solution that can be tested with real users.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Real-life customer feedback</h3>
                    <p>User feedback and data gathered from testing the prototype, guiding further development.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Product roadmap</h3>
                    <p>Actionable next steps for refining, implementing, or scaling the solution based on Sprint outcomes.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-cobalt" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                    Sprint ahead
                </a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        Here's how those <strong class="is-raspberry">5 days</strong> look like
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
                                Monday: Define the problem
                            </h3>
                            <p>The team comes together to define the challenge, map out the problem and identify a specific focus for the Sprint.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Tuesday: Ideate and sketch solutions
                            </h3>
                            <p>Team members individually brainstorm and sketch possible solutions. This encourages a wide range of ideas without groupthink.</p>
                            <p>Each team member presents their sketches, and the group starts to narrow down the best ideas.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Wednesday: Decide on the best solution
                            </h3>
                            <p>We start the day with a stack of solutions. The team reviews the solutions and makes decisions through a structured process. By lunch, the group commits to a single solution that will be prototyped.</p>
                            <p>In the afternoon, the team starts creating a storyboard representation of the proposed solution.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Thursday: Prototype
                            </h3>
                            <p>Using the storyboard created on Wednesday, our designer will help you put together an interactive prototype ready to test with users. You can relax and go about your business, we only need to regularly check in with you via chat.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">5</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Friday: Test with users
                            </h3>
                            <p>The prototype is tested with real users to gather feedback on whether the solution works and how it can be improved.</p>
                            <p>Based on user reactions and insights, the team can refine the concept or decide whether to pivot, iterate, or move forward with the idea.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-15.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-9.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-12.jpg') }}" alt="Further team" />
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
                        Sprint past competition
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Let's organize your next Design Sprint together!
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-text-centered is-cobalt">
                    <span class="services__service__price">
                        €{{ config('site.prices.design-sprint.default') }}
                    </span>
                        <span class="services__service__price-promo">
                        €{{ config('site.prices.design-sprint.promo.price') }}
                    </span>
                        <small class="is-block">
                            @if (config('site.prices.design-sprint.promo.name'))
                                {{ config('site.prices.design-sprint.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <a class="btn is-white has-margin-t15 is-large" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                            Book today
                        </a>
                        <a class="has-margin-t15 has-text-underlined is-block is-white" href="{{ localizedRoute('contact') }}">or write</a>
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
                        Download our<br /><strong class="is-raspberry">Design Sprint 101</strong> Guide
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

                        <input name="source" type="hidden" value="freebie: design sprint 101" />
                        <input name="freebie" type="hidden" value="design-sprint-101.pdf" />

                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-raspberry" type="submit">
                            Download guide
                        </button>
                    </form>
                </div>
                <div class="column has-text-right is-5-tablet is-offset-1-tablet">
                    <img src="{{ asset('media/freebies/design-sprint-101-mockup.png') }}" alt="Design Sprint 101" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">F.A.Q.</h3>

                    <h4 class="heading-3">How much does a Design Sprint cost and what's included?</h4>
                    <p class="has-margin-b30"><small>A Design Sprint is now only €{{ config('site.prices.design-sprint.promo.price') }}, and includes an expert facilitator for the duration of the Sprint and a UX designer on-hand to help create the interactive prototypes.</small></p>

                    <h4 class="heading-3">Can I integrate Design Sprints into my ongoing project cycle?</h4>
                    <p class="has-margin-b30"><small>Absolutely! Design Sprints also help when redesigning or adding major functionality to existing products or creating new (spin-off) products.</small></p>

                    <h4 class="heading-3">Does a Design Sprint really need to be 5 days?</h4>
                    <p class="has-margin-b30"><small>Yes. And no. If this is your first Design Sprint experience, we recommend you opt for a 5-day Sprint. If your team has already taken part in Sprint before, there are 4-day and even 3-day (if the second Sprint is dedicated to iterating on the same project) versions available.</small></p>

                    <h4 class="heading-3">Do we have to do the Sprint in-person?</h4>
                    <p class="has-margin-b30"><small>No. Most of our Sprints are done remotely, online using tools like Miro, Figjam and Google Meet. However, if you prefer, we can do the Sprints in your office (*travel costs not included) or our locations in Budapest (Hungary) or Timisoara (Romania).</small></p>

                    <h4 class="heading-3">Beyond Design Sprints, can you help us with UI design or development?</h4>
                    <p><small>Yes! Our services extend beyond Design Sprints and include product strategy, user research, UX, UI design and software development. Please note that these additional services are offered at different rates.</small></p>

                    <h4 class="heading-3">Do you offer refunds?</h4>
                    <p><small>You have 7-day money-back guarantee. If you find that the insights uncovered during the Design Sprint don't offer a relevant or actionable path forward for your product, we provide a full refund of the price you paid.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Start innovating today!
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Ready to jump ahead months in just 5 days?
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-cobalt">
                        <span class="services__service__price">
                            €{{ config('site.prices.design-sprint.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.design-sprint.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.design-sprint.promo.name'))
                                {{ config('site.prices.design-sprint.promo.name') }}.
                            @endif
                            7-day money-back guarantee.
                        </small>
                        <a class="btn has-margin-t15 is-large is-white" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                            Schedule your design sprint
                        </a>
                        <a class="has-margin-t15 has-text-underlined is-block is-white" href="{{ localizedRoute('contact') }}">or write</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
