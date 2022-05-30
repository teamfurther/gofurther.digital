@extends('en.site', ['showFooter' => false, 'showNav' => false])

@section('title', 'Lean Validation Cheat Sheet')
@section('description', 'This free resource helps you decide which design & research techniques are most useful for validating assumptions in the different phases of product innovation.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12-desktop">
                    <h1 class="hero-heading has-margin-b15">
                        <strong class="is-pearl">Lean Validation Cheat Sheet</strong><br />
                        4 steps to a successful digital product.
                    </h1>
                    <h2 class="heading-5">
                        This free resource helps you decide which design & research techniques are most useful for validating assumptions in the different phases of product innovation.
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-t60">
                <div class="column is-6-desktop">
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

                        <input name="source" type="hidden" value="freebie: lean validation cheat sheet" />
                        <input name="freebie" type="hidden" value="{{ $freebie }}" />

                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-pearl" type="submit">
                            Download resource
                        </button>
                    </form>
                </div>
                <div class="column is-6-desktop">
                    <img src="{{ asset('media/freebies/lean-validation-cheat-sheet-mockup-en.png') }}" alt="Lean Validation Cheat Sheet" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-cobalt">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-2 is-white">What can you do with this cheat sheet?</h3>
                </div>
                <div class="column is-4-desktop">
                    <ul class="list has-discs is-white">
                        <li>make sure you don't skip any of the 4 stages of product development</li>
                        <li>get familiarised with lean validation and the build-measure-learn loop</li>
                        <li>find out what core assumptions you should make and test regarding your product</li>
                        <li>learn about experiments and tools that help test these assumptions</li>
                        <li>analyze experiment results and learn about your customers and product</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading-2 has-text-centered">Who do we recommend this resource for?</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="face face--3"></div>
                    <h4 class="heading-4">Startup founders</h4>
                    <p>Founders who wish to better understand their target market and minimize inherent risk.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="face face--1"></div>
                    <h4 class="heading-4">Product owners</h4>
                    <p>PO's who want a proven, efficient and user-centered method to develop products.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="face face--5"></div>
                    <h4 class="heading-4">Managers</h4>
                    <p>Managers and executives of established businesses who are overseeing new product development in their company.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column has-margin-b0 is-3-tablet is-offset-1-tablet is-2-desktop is-offset-2-desktop">
                    <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}">
                        <img src="{{ asset('media/blog/thumb-validation-in-product-development.png') }}" alt="Validation in product development" />
                    </a>
                </div>
                <div class="column is-7-tablet is-6-desktop">
                    <h3 class="heading-4 has-margin-b15">You might also be interested in</h3>
                    <ul class="list has-bullets">
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'validation-in-product-development']) }}">
                                    Validation in Product Development
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'to-pivot-or-not-to-pivot']) }}">
                                    11 Ways to Build an MVP
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'to-pivot-or-not-to-pivot']) }}">
                                    To Pivot or Not to Pivot – That Is the Question
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-personas-in-product-development']) }}">
                                    How to Use Personas in Product Development?
                                </a>
                            </strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">F.A.Q.</h3>

                    <h4 class="heading-3">The cheat sheet was helpful, but I still have questions…</h4>
                    <p class="has-margin-b30">
                        <small>This resource was by no means meant to be exhaustive. Check out <a href="{{ localizedRoute('blog.tags.show', ['slug' => 'startups-and-product-development']) }}">our blog</a> for more in-depth articles, or <a href="{{ localizedRoute('contact') }}">get in touch</a> for a free consultation.</small>
                    </p>

                    <h4 class="heading-3">Why do I have to provide personal information to download resources?</h4>
                    <p class="has-margin-b30">
                        <small>We put in a lot of work into creating quality material for our readers. We are asking for your personal details so we can send you further resources that we think might be useful for you. Don't worry, all your personal data is handled confidentially and in accordance to our <a href="{{ localizedRoute('privacy') }}" target="_blank">privacy policy</a>. If you do not wish to receive these free resources, you'll be able to easily unsubscribe.</small>
                    </p>

                    <h4 class="heading-3">Can I redistribute this material?</h4>
                    <p>
                        <small>Yes! This work is licensed under the <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">Creative Commons Attribution-ShareAlike 4.0 International</a> license. As long as you give appropriate credit, you may redistribute this material.</small>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
