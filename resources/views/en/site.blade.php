<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('site.title.' . config('app.locale'))) | {{ config('site.name') }}</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="@yield('description', config('site.description.' . config('app.locale')))" />

    <meta property="og:description" content="@yield('description', config('site.description.' . config('app.locale')))" />
    <meta property="og:image" content="@yield('preview_image', asset(config('site.preview_image.' . config('app.locale'))))" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:locale" content="en_gb" />
    <meta property="og:see_also" content="{{ config('site.social.facebook') }}" />
    <meta property="og:see_also" content="{{ config('site.social.twitter') }}" />
    <meta property="og:see_also" content="{{ config('site.social.linkedin') }}" />
    <meta property="og:see_also" content="{{ config('site.social.instagram') }}" />
    <meta property="og:see_also" content="{{ config('site.social.medium') }}" />
    <meta property="og:site_name" content="{{ config('site.name') }}" />
    <meta property="og:title" content="@yield('title', config('site.title.' . config('app.locale'))) | {{ config('site.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="home" href="{{ config('app.url') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:400,600,700&amp;subset=latin-ext" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,700&amp;subset=latin-ext" />

    <link rel="stylesheet" href="{{ mix('css/site.css') }}" />

    <link rel="preload" href="{{ asset('img/logo.svg') }}" as="image" type="image/svg+xml" />
    <link rel="preload" href="{{ asset('img/logo-knockout.svg') }}" as="image" type="image/svg+xml" />

    <!-- Opera Speed Dial Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon-160px.png') }}" />
    <!-- Standard Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('favicon-72px.png') }}">
    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('favicon-57px.png') }}">

    @stack('structured-data')

    <!-- GTM -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20343659-28"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-20343659-28');
    </script>
</head>

<body class="{{ !empty($bodyClass) ? $bodyClass : '' }}" id="top">

<div id="app">

<header class="header">
    <div class="container">
        <div class="header__brand">
            <h1 class="header__logo"><a href="{{ localizedRoute('home') }}">{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}</a></h1>
        </div> <!-- /.header__brand -->
        <nav class="navbar">
            <div class="navbar__item"><a href="{{ localizedRoute('projects') }}">Work</a></div>
            <div class="navbar__item has-subnav">
                <a href="{{ localizedRoute('solutions') }}">Solutions</a>
                <nav class="navbar__subnav">
                    <div class="container">
                        <div class="columns">
                            <div class="column is-one-third is-sales-operations">
                                <h3 class="navbar__subnav__title">Sales &amp; Operations</h3>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.crm') }}">CRM</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.sales') }}">Sales</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.projects') }}">Projects</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.accounting') }}">Accounting</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.purchase') }}">Purchase &amp; Inventory</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.plm') }}">PLM</a></div>
                            </div>
                            <div class="column is-one-third is-productivity">
                                <h3 class="navbar__subnav__title">Communication &amp; Productivity</h3>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.communication') }}">Communication</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.time-tracking') }}">Time Tracking</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.hr') }}">Human Resources</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.dms') }}">Document Management</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.wiki') }}">Knowledge Center</a></div>
                            </div>
                            <div class="column is-one-third is-websites">
                                <h3 class="navbar__subnav__title">Web & Mobile</h3>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.mvp') }}">MVP Development</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.mobile') }}">Mobile Apps</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.chronos') }}">Custom Websites - Chronos CMS</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.ecommerce') }}">eCommerce</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar__subnav__overlay"></div>
                </nav>
            </div>
            <div class="navbar__item"><a href="{{ localizedRoute('about') }}">About</a></div>
            <div class="navbar__item"><a href="{{ localizedRoute('jobs') }}">Careers</a></div>
            @if (!isset($showContactForm) || $showContactForm)
                <div class="navbar__item"><a href="{{ url('#contact') }}">Contact</a></div>
            @else
                <div class="navbar__item"><a href="{{ localizedRoute('home') }}#contact">Contact</a></div>
            @endif
            <div class="navbar__item"><a href="{{ localizedRoute('blog') }}">Blog</a></div>
            @if (switchLang('hu'))
            <div class="navbar__item navbar__item--lang"><a href="{{ switchLang('hu') }}">HU</a></div>
            @endif
        </nav> <!-- /.navbar -->
        <a class="navbar__toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
</header> <!-- /.header -->

@yield('content')

@if (!isset($showContactForm) || $showContactForm)
<section class="section" id="contact">
    <div class="container">
        <h2 class="hero-heading">Want to discuss an idea us or just say hi?<strong>Get in touch now</strong></h2>
        <div class="contact-box">
            <div class="contact-box__info h-card vcard">
                <div class="p-tel tel"><a href="tel:{{ str_replace(' ', '', config('site.contact.phone-1')) }}" class="value">HU: {{ config('site.contact.phone-1') }} </a></div>
                <div class="p-tel tel"><a href="tel:{{ str_replace(' ', '', config('site.contact.phone-2')) }}" class="value">RO: {{ config('site.contact.phone-2') }}</a></div>
                <div class="u-email email"><a href="mailto:{{ config('site.contact.email') }}" class="value">{{ config('site.contact.email') }}</a></div>
                <div class="social-icons">
                    <a href="{{ config('site.social.facebook') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--facebook"></span></a>
                    <a href="{{ config('site.social.twitter') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--twitter"></span></a>
                    <a href="{{ config('site.social.linkedin') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--linkedin"></span></a>
                    <a href="{{ config('site.social.instagram') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--instagram"></span></a>
                    <a href="{{ config('site.social.medium') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--medium"></span></a>
                </div>
            </div>
            <form class="contact-box__form" id="contact-form" action="{{ localizedRoute('contact.send') }}" method="POST">
                {{ csrf_field() }}

                <p>We're always willing and ready to listen to any request. So, if you like our work and you've got an idea you want to discuss, just grab your phone or keyboard and contact us.</p>
                <div class="is-pulled-left">
                    <div class="form-group {{ isset($errors) && $errors->has('contact_name') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_name" placeholder="Your name*" type="text" value="{{ old('contact_name') }}" autocomplete="name" tabindex="1" required />
                    </div>
                    <div class="form-group {{ isset($errors) && $errors->has('contact_phone') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_phone" placeholder="Phone" type="text" value="{{ old('contact_phone') }}" autocomplete="tel" tabindex="3" />
                    </div>
                </div>
                <div class="is-pulled-right">
                    <div class="form-group {{ isset($errors) && $errors->has('contact_company') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_company" placeholder="Company" type="text" value="{{ old('contact_company') }}" autocomplete="organization" tabindex="2" />
                    </div>
                    <div class="form-group {{ isset($errors) && $errors->has('contact_email') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_email" placeholder="Email*" type="email" value="{{ old('contact_email') }}" autocomplete="email" tabindex="4" required />
                    </div>
                </div>
                <div class="form-group {{ isset($errors) && $errors->has('contact_message') ? 'has-error' : '' }}">
                    <textarea class="form-control" name="contact_message" placeholder="Message*" rows="5" tabindex="5" required>{{ old('contact_message') }}</textarea>
                </div>
                {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                <button class="btn is-large is-pearl" type="submit">Send</button>
            </form>
            <div class="contact-box__company-details h-card vcard">
                <h3 class="contact-box__company-details__heading">Company details</h3>
                <span class="company-name p-name name">{{ config('site.company.name') }}</span>
                <span class="company-no">Company no.: {{ config('site.company.regno') }}</span>
                <span class="vat-no">EU VAT: {{ config('site.company.vatno') }}</span>
            </div>
        </div>
    </div>
    <div class="contact-box__bg"></div>
</section>
@endif

<footer class="footer @if (isset($showFooter) && $showFooter === false) is-disabled @endif">
@if (!isset($showFooter) || $showFooter)
    <div class="container">
        <div class="columns">
            <div class="column">
                &copy; Further<span class="is-hidden-mobile"> Digital Solutions {{ date('Y') }}</span>. <a href="{{ localizedRoute('terms') }}">Terms<span class="is-hidden-mobile"> of Use</span></a> | <a href="{{ localizedRoute('privacy') }}">Privacy<span class="is-hidden-mobile"> Policy</span></a> | <a href="{{ localizedRoute('cookies') }}">Cookies</a>
            </div>
        </div>
    </div>
@endif
</footer>



@if (session()->has('alert'))
    <div class="alert is-{{ session('alert.type') }}">
        <strong>{{ session('alert.title') }}</strong>
        <span>{!! session('alert.message') !!}</span>
        <a class="alert__close">&times;</a>
    </div>
@endif

@stack('content-modals')

</div>

<script src="{{ mix('js/site.js') }}"></script>

@stack('content-scripts')

</body>
</html>
