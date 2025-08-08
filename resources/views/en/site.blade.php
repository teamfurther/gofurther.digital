<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('site.title.' . getLang())) | {{ config('site.name') }}</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="@yield('description', config('site.description.' . getLang()))" />

    <meta property="og:description" content="@yield('description', config('site.description.' . getLang()))" />
    <meta property="og:image" content="@yield('preview_image', asset(config('site.preview_image.' . getLang())))" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:locale" content="en_gb" />
    <meta property="og:see_also" content="{{ config('site.social.linkedin') }}" />
    <meta property="og:see_also" content="{{ config('site.social.instagram') }}" />
    <meta property="og:see_also" content="{{ config('site.social.facebook') }}" />
    <meta property="og:see_also" content="{{ config('site.social.twitter') }}" />
    <meta property="og:see_also" content="{{ config('site.social.medium') }}" />
    <meta property="og:see_also" content="{{ config('site.social.github') }}" />
    <meta property="og:site_name" content="{{ config('site.name') }}" />
    <meta property="og:title" content="@yield('title', config('site.title.' . getLang())) | {{ config('site.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="home" href="{{ config('app.url') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:400,600,700&amp;subset=latin-ext" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&amp;subset=latin-ext" />

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

    @vite(['resources/scss/site.scss', 'resources/js/site.js'])

    @stack('structured-data')

    <!-- FB Pixel -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '482902165683190');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=482902165683190&ev=PageView&noscript=1"
        />
    </noscript>

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

@if (session('alert.pixel') && session('alert.pixel') !== '')
<script>
    fbq('track', '{{ session('alert.pixel') }}');
</script>
@endif


<div id="app">
@if (!isset($showHeader) || $showHeader)
<header class="header">
    <div class="container">
        <div class="header__brand">
            <h1 class="header__logo">
                <a href="{{ localizedRoute('home') }}">
                    {{ config('site.name') }} | {{ config('site.title.' . getLang()) }}
                </a>
            </h1>
        </div> <!-- /.header__brand -->
        @if (!isset($showNav) || $showNav)
        <nav class="navbar">
            <div class="navbar__item"><a href="{{ localizedRoute('projects') }}">Case Studies</a></div>
            <div class="navbar__item"><a href="{{ localizedRoute('services') }}">Our services</a></div>
            <div class="navbar__item"><a href="{{ localizedRoute('about') }}">Meet us</a></div>
            <div class="navbar__item"><a href="{{ localizedRoute('blog') }}">Blog</a></div>
            <div class="navbar__item navbar__item--cta">
                <a href="{{ localizedRoute('contact') }}"
                   data-gtm-click='{ "click": { "event_category": "contact", "event_label": "click" } }'
                >
                    Get in touch
                </a>
            </div>
        </nav> <!-- /.navbar -->
        <nav class="navbar--mobile">
            <a class="navbar--mobile__logo" href="{{ localizedRoute('home') }}">
                {{ config('site.name') }} | {{ config('site.title.' . getLang()) }}
            </a>
            <a class="navbar--mobile__item" href="{{ localizedRoute('projects') }}">
                Case Studies
            </a>
            <a class="navbar--mobile__item" href="{{ localizedRoute('services') }}">
                Our services
            </a>
            <a class="navbar--mobile__item" href="{{ localizedRoute('about') }}">
                Meet us
            </a>
            <a class="navbar--mobile__item" href="{{ localizedRoute('blog') }}">
                Blog
            </a>
            <a class="navbar--mobile__cta" href="{{ localizedRoute('contact') }}"
               data-gtm-click='{ "click": { "event_category": "contact", "event_label": "click" } }'
            >
                Contact us
            </a>
        </nav> <!-- /.navbar -->
        <a class="navbar__toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
        @endif
    </div>
</header> <!-- /.header -->
@endif

@yield('content')


@if (!isset($showFooter) || $showFooter)
<footer class="footer">
    <div class="container">
        <img class="footer__logo" src="{{ asset('img/logo.svg') }}" alt="Further Digital Solutions" />
        <div class="footer__top">
            <nav class="footer__nav">
                <span class="footer__nav__title">Services</span>
                <a href="{{ localizedRoute('services') }}#strategy-and-research">
                    Strategy & Research
                </a>
                <a href="{{ localizedRoute('services') }}#ux-research-and-design">
                    UX Research & UI Design
                </a>
                <a href="{{ localizedRoute('services') }}#digital-product-development">
                    Digital Product Development
                </a>
            </nav>
            <nav class="footer__nav">
                <span class="footer__nav__title">Meet Further</span>
                {{--<a href="{{ localizedRoute('events') }}">Events</a>--}}
                <a href="{{ localizedRoute('about') }}">About Us</a>
                <a href="{{ localizedRoute('about.remote-culture') }}">Remote Culture</a>
                <a href="{{ localizedRoute('about.outsourcing') }}">Outsourcing</a>
                <a href="{{ localizedRoute('jobs') }}">Careers</a>
                <a href="{{ localizedRoute('contact') }}">Contact</a>
                @if (!isset($exception) && switchLang('hu'))
                    <a class="footer__lang" href="{{ switchLang('hu') }}">Magyar</a>
                @endif
            </nav>
            <nav class="footer__nav">
                <span class="footer__nav__title">Free resources</span>
                <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}">Lean Validation Cheat Sheet</a>
                <a href="{{ localizedRoute('freebies.mvp-guide') }}">MVP Pocket Guide</a>
                <a href="{{ localizedRoute('freebies.design-sprint-101') }}">Design Sprint 101</a>
                <a href="{{ localizedRoute('newsletter') }}">Newsletters</a>
            </nav>
            <nav class="social-icons is-small">
                <a href="{{ config('site.social.linkedin') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--linkedin"></span></a>
                <a href="{{ config('site.social.instagram') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--instagram"></span></a>
                <a href="{{ config('site.social.github') }}" class="u-url url" rel="me" target="_blank"><span class="icon icon--github"></span></a>
            </nav>
        </div>
        <div class="footer__bottom">
            <div class="footer__legal">
                <a href="{{ localizedRoute('terms') }}">Terms of Use</a> | <a href="{{ localizedRoute('privacy') }}">Privacy<span class="is-hidden-mobile"> Policy</span></a> | <a href="{{ localizedRoute('cookies') }}">Cookies</a>
            </div>
            <div class="footer__copyright">
                &copy; {{ date('Y') }} Further Digital Solutions
            </div>
        </div>
    </div>
</footer>
@endif



@if (session()->has('alert'))
    <div class="alert is-{{ session('alert.type') }}"
         @if (session('alert.gtm') && session('alert.gtm') !== '') data-gtm-show="{{ session('alert.gtm') }}" @endif
    >
        <strong>{{ session('alert.title') }}</strong>
        <span>{!! session('alert.message') !!}</span>
        <a class="alert__close">&times;</a>
    </div>
@endif

@stack('content-modals')

</div>

@stack('content-scripts')

</body>
</html>
