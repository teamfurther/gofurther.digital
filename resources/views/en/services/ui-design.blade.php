@extends('en.site')

@section('title', 'Unlimited UI Design Subscription')
@section('description', 'Clean, intuitive user interfaces that make your digital products pop. We focus on what matters most: easy navigation, engaging visuals, and a seamless user experience.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Unlimited UI Design Subscription
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Top tier <strong class="is-tangerine">UX/UI designers</strong> at a fraction of in-house cost.
                    </h1>
                    <div>
                        Unlock unlimited design instantly. No more wasting time with unreliable freelancers or lengthy hiring processes.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-tangerine">
                        <div class="services__service__benefits__badge">Benefits</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Unlimited hours, requests and revisions</li>
                            <li>Ask today, get designs tomorrow</li>
                            <li>In-house quality at 60% cost</li>
                            <li>Pause or cancel anytime</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.ui-design.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ui-design.promo.price') }} / month
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ui-design.promo.name'))
                                {{ config('site.prices.ui-design.promo.name') }}.
                            @endif
                            Money-back guarantee.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large" href="#plans">
                                See plans
                            </a>
                            <div class="services__service__alert">Only {{ config('site.prices.ui-design.spots') }} spots left</div>
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
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        How the <strong class="is-pearl">unlimited UI design</strong> subscription works
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
                                Subscribe
                            </h3>
                            <p>...and get instant access to unlimited world-class design talent.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Submit design tasks
                            </h3>
                            <p>Gain access to our PM tool where you can upload and prioritize your design tasks.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Get designs in 2 days
                            </h3>
                            <p>Our average design delivery is 2 days. Submit a task in the morning and get it the next day.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Revise or approve
                            </h3>
                            <p>When the design task is finished, we share the design file with you. Ask for revisions by adding comments or upload your next task!</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns has-margin-b60 is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        No more headaches
                    </h5>
                    <h2 class="heading-1 has-margin-b5">
                        Bid farewell to<br /><strong class="is-raspberry">unreliable freelancers</strong>
                    </h2>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Unreliable and unresponsive freelancers</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Worrying about design quality</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Long turnaround times</h3>
                </div>
            </div>
            <div class="columns has-margin-b60 is-reversed is-vcentered">
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <h2 class="heading-1 has-margin-b5">
                        ...and <strong class="is-raspberry">lengthy hiring</strong> processes
                    </h2>
                </div>
                <div class="column is-12-tablet is-6-desktop">
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Browsing through hundreds of CV's and portfolios</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Costly recruitment fees</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Lengthy onboarding and mentoring</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Paid holidays and sick-leaves</h3>
                </div>
            </div>
            <div class="columns has-margin-b60 is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h2 class="heading-1 has-margin-b5">
                        Say hello to <strong class="is-pearl">unlimited design subscriptions</strong>
                    </h2>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Improved conversions, less churn 👉 increased revenue</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Clean, intuitive user interfaces</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Unlimited design hours, one-task at time</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Seamless user experiences</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Effective communication, quick turnaround times</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Senior UX/UI designers at 60% cost</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-pearl" href="#plans">
                        Show me the plans
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
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
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-carlo-santone.png') }}" alt="OnePageLink Carlo Santone testimonial" />
                        <blockquote class="testimonial__content">
                            <p>They are open and friendly to work with, they will give you the time you need to explain your needs and requirements and will come up with smart and logical solutions. We are very happy with what we've built together with Further, and what we continue to come up with creatively as we iterate and refine.</p>
                            <cite class="testimonial__author">Carlo SANTONE, OnePageLink</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="plans">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        Pick your <strong class="is-pearl">premium</strong> design plan
                    </h2>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column is-6-tablet is-4-widescreen">
                    <div class="services__service__plan">
                        <h3 class="services__service__plan__title">Single Package</h3>
                        <div class="has-margin-b15">For smaller agencies or early-stage startups & SaaS</div>

                        <div class="services__service__plan__price">€{{ config('site.prices.ui-design.promo.price') }} / month</div>

                        <div class="services__service__plan__items__title">What's included</div>
                        <ul class="services__service__plan__items">
                            <li>Number of tasks that can be uploaded: unlimited</li>
                            <li>1x open task 🚀</li>
                            <li>ASAP tasks: 1 task / month</li>
                            <li>1x UX designer</li>
                            <li>Turnaround: 2 days</li>
                            <li>Daily communication: Slack, Figma, PM tool</li>
                            <li>1 meeting every two weeks</li>
                            <li>Dedicated project manager</li>
                            <li class="is-empty">&nbsp;</li>
                        </ul>

                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-tangerine" href="#schedule" target="_blank">
                                Schedule a call
                            </a>
                            <a class="has-text-underlined is-grey" href="{{ localizedRoute('contact') }}">or write</a>
                        </div>
                    </div>
                </div>
                <div class="column is-6-tablet is-4-widescreen">
                    <div class="services__service__plan">
                        <h3 class="services__service__plan__title">Duo Package</h3>
                        <div class="has-margin-b15">For larger agencies and growth-stage startups & SaaS</div>

                        <div class="services__service__plan__price">€{{ config('site.prices.ui-design-duo.default') }} / month</div>

                        <div class="services__service__plan__items__title">What's included</div>
                        <ul class="services__service__plan__items">
                            <li>Number of tasks that can be uploaded: unlimited</li>
                            <li>2x open tasks 🚀🚀</li>
                            <li>ASAP tasks: 3 task / month</li>
                            <li>1x UX designer</li>
                            <li>1x product designer</li>
                            <li>Turnaround: 2 days</li>
                            <li>Daily communication: Slack, Figma, PM tool</li>
                            <li>1 meeting every week</li>
                            <li>Dedicated project manager</li>
                        </ul>

                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-tangerine" href="#schedule" target="_blank">
                                Schedule a call
                            </a>
                            <a class="has-text-underlined is-grey" href="{{ localizedRoute('contact') }}">or write</a>
                        </div>
                    </div>
                </div>
                <div class="column is-4-widescreen">
                    <div class="services__service__plan has-margin-b60">
                        <h3 class="services__service__plan__title">One week trial</h3>
                        <div class="has-margin-b15">Not sure yet? Try out our unlimited design service for 1 week!</div>

                        <div class="services__service__plan__price has-margin-b0">€{{ config('site.prices.ui-design-trial.default') }} / week</div>
                    </div>
                    <h2 class="heading-2 has-margin-b15 has-text-centered">Specific needs?</h2>
                    <div class="has-text-centered">
                        <p>Tailor your needs to a specific custom design project plan.</p>

                        <a class="btn is-block" href="{{ localizedRoute('contact') }}">
                            Write us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">F.A.Q.</h3>

                    <h4 class="heading-3">How does the process work?</h4>
                    <p class="has-margin-b5"><small>1. Submit your tasks into our project management tool.</small></p>
                    <p class="has-margin-b5"><small>2. We acknowledge the tasks and start work, one task at a time.</small></p>
                    <p class="has-margin-b5"><small>3. You receive the finished designs.</small></p>
                    <p class="has-margin-b30"><small>4. Ask for revisions or approve and move on to the next task.</small></p>

                    <h4 class="heading-3">Why shouldn't I just hire a full-time designer?</h4>
                    <p class="has-margin-b30"><small>A full-time senior designer cost upwards of €50k in most parts of Europe. Add on top of that the cost of recruiting, onboarding, training, software licenses. You have to pay for their holidays and sick leaves. You have to keep them constantly occupied. You can't (or at least shouldn't) lay them off without notice. Should we go on?</small></p>

                    <h4 class="heading-3">How fast do I get my designs?</h4>
                    <p class="has-margin-b30"><small>You can expect your designs to be ready for review in two working days or less. If you want to design the Star Destroyer, we'll provide you with a realistic estimate.</small></p>

                    <h4 class="heading-3">What do you mean by unlimited revisions?</h4>
                    <p class="has-margin-b30"><small>By providing unlimited revisions we ensure your utmost satisfaction with the received designs. Design is subjective and achieving a result that everyone is happy with takes time. If you wish to make changes to the design, let us know, and we're happy to adjust and refine until the design meets your exact needs.</small></p>

                    <h4 class="heading-3">What can be designed via your unlimited UI design subscription?</h4>
                    <p class="has-margin-b30"><small>We can deliver any design deliverable that relates to the user interface of a given product, platform or service. Wireframes, high-fidelity designs, interactive components or element designs, and even entire design systems.</small></p>

                    <h4 class="heading-3">Do you also do branding or social media artwork?</h4>
                    <p class="has-margin-b30"><small>Our team specialises on UX and UI designs for web and mobile applications. If you need design work that isn't purview of our design team, we will refer you one of our partners and even take the project management of the task off your shoulders.</small></p>

                    <h4 class="heading-3">Do you outsource design work?</h4>
                    <p class="has-margin-b5"><small>No. We are an agency with full-time employees who share the same values. There are no freelancers or temporary employees among us.</small></p>
                    <p class="has-margin-b30"><small>In case you need us to work even quicker, or you need design work that is out of the scope of our in-house team (see above question), we might tap into our external resource, with prior notice.</small></p>

                    <h4 class="heading-3">Can I upgrade/downgrade my package?</h4>
                    <p><small>Yes. The updated package becomes valid starting from the next month.</small></p>
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
                        Subscribe today, get your designs tomorrow.
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-tangerine">
                        <span class="services__service__price">
                            €{{ config('site.prices.ui-design.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ui-design.promo.price') }} / month
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ui-design.promo.name'))
                                {{ config('site.prices.ui-design.promo.name') }}.
                            @endif
                            Money-back guarantee.
                        </small>
                        <a class="btn has-margin-t15 is-large" href="#schedule">
                            Schedule a call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark" id="schedule">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Start your <strong class="is-pearl">unlimited design</strong> plan
                    </h2>
                    <h4 class="heading-5 has-text-centered">
                        Schedule a discovery call today!
                    </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/peterilles/unlimited-design-pre-discovery?hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Calendly inline widget end -->
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
