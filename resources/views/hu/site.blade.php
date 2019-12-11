<!DOCTYPE html>
<html lang="hu">
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
    <meta property="og:locale" content="hu_HU" />
    <meta property="og:see_also" content="{{ config('site.social.facebook') }}" />
    <meta property="og:see_also" content="{{ config('site.social.twitter') }}" />
    <meta property="og:see_also" content="{{ config('site.social.linkedin') }}" />
    <meta property="og:see_also" content="{{ config('site.social.instagram') }}" />
    <meta property="og:see_also" content="{{ config('site.social.medium') }}" />
    <meta property="og:site_name" content="{{ config('site.name') }}" />
    <meta property="og:title" content="@yield('title', config('site.title.' . getLang())) | {{ config('site.name') }}" />
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

<header class="header">
    <div class="container">
        <div class="header__brand">
            <h1 class="header__logo"><a href="{{ localizedRoute('home') }}">{{ config('site.name') }} | {{ config('site.title.' . getLang()) }}</a></h1>
        </div> <!-- /.header__brand -->
        <nav class="navbar">
            <div class="navbar__item"><a href="{{ localizedRoute('projects') }}">Munkáink</a></div>
            <div class="navbar__item has-subnav">
                <a href="{{ localizedRoute('solutions') }}">Megoldásaink</a>
                <nav class="navbar__subnav">
                    <div class="container">
                        <div class="columns">
                            <div class="column is-one-third is-sales-operations">
                                <h3 class="navbar__subnav__title">Vállalatirányítás és ügyvitel</h3>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.crm') }}">CRM</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.sales') }}">Értékesítés</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.projects') }}">Projektmenedzsment</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.accounting') }}">Számvitel</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.purchase') }}">Beszerzés és leltározás</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.plm') }}">Termékéletciklus-kezelés</a></div>
                            </div>
                            <div class="column is-one-third is-productivity">
                                <h3 class="navbar__subnav__title">Kommunikáció és produktivitás</h3>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.communication') }}">Kommunikáció</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.time-tracking') }}">Időkövetés</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.hr') }}">Humán erőforrások</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.dms') }}">Dokumentumkezelés</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.wiki') }}">Tudástár</a></div>
                            </div>
                            <div class="column is-one-third is-websites">
                                <h3 class="navbar__subnav__title">Web- és mobilfejlesztés</h3>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.mvp') }}">MVP fejlesztés</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.mobile') }}">Mobilapplikációk</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.chronos') }}">Egyedi weboldalak - Chronos CMS</a></div>
                                <div class="navbar__subnav__item"><a href="{{ localizedRoute('solutions.ecommerce') }}">Webáruház</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar__subnav__overlay"></div>
                </nav>
            </div>
            <div class="navbar__item"><a href="{{ localizedRoute('about') }}">Rólunk</a></div>
            <div class="navbar__item"><a href="{{ url('#contact') }}">Kapcsolat</a></div>
            <div class="navbar__item"><a href="{{ localizedRoute('blog') }}">Blog</a></div>
            @if (switchLang('en'))
            <div class="navbar__item navbar__item--lang"><a href="{{ switchLang('en') }}">EN</a></div>
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

<section class="section" id="contact">
    <div class="container">
        <h2 class="hero-heading">Van egy ötleted vagy csak beszélgetnél?<strong>Üzenj most!</strong></h2>
        <div class="contact-box">
            <div class="contact-box__info h-card vcard">
                <div class="p-tel tel"><a href="tel:{{ str_replace(' ', '', config('site.contact.phone-1')) }}" class="value">{{ config('site.contact.phone-1') }} </a></div>
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

                <p>Nyitottak vagyunk minden új kérdésre, felkérésre. Ha felkeltettük érdeklődésed, megtetszett a munkánk vagy van olyan projekted, amelyet meg szeretnél velünk beszélni, akkor vedd fel velünk a kapcsolatot telefonon vagy e-mailben.</p>
                <div class="is-pulled-left">
                    <div class="form-group {{ isset($errors) && $errors->has('contact_name') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_name" placeholder="Neved*" type="text" value="{{ old('contact_name') }}" autocomplete="name" tabindex="1" required />
                    </div>
                    <div class="form-group {{ isset($errors) && $errors->has('contact_phone') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_phone" placeholder="Telefon" type="text" value="{{ old('contact_phone') }}" autocomplete="tel" tabindex="3" />
                    </div>
                </div>
                <div class="is-pulled-right">
                    <div class="form-group {{ isset($errors) && $errors->has('contact_company') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_company" placeholder="Céged neve" type="text" value="{{ old('contact_company') }}" autocomplete="organization" tabindex="2" />
                    </div>
                    <div class="form-group {{ isset($errors) && $errors->has('contact_email') ? 'has-error' : '' }}">
                        <input class="form-control" name="contact_email" placeholder="E-mail*" type="email" value="{{ old('contact_email') }}" autocomplete="email" tabindex="4" required />
                    </div>
                </div>
                <div class="form-group {{ isset($errors) && $errors->has('contact_message') ? 'has-error' : '' }}">
                    <textarea class="form-control" name="contact_message" placeholder="Üzenet*" rows="5" tabindex="5" required>{{ old('contact_message') }}</textarea>
                </div>
                {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                <button class="btn is-large is-primary" type="submit">Küldés</button>
            </form>
            <div class="contact-box__company-details h-card vcard">
                <h3 class="contact-box__company-details__heading">Cégadatok</h3>
                <span class="company-name p-name name">{{ config('site.company.name') }}</span>
                <span class="company-no">Cégjegyzékszám: {{ config('site.company.regno') }}</span>
                <span class="vat-no">Adószám: {{ config('site.company.vatno') }}</span>
            </div>
        </div>
    </div>
    <div class="contact-box__bg"></div>
</section>

<footer class="footer">
    <div class="container">
        <div class="columns">
            <div class="column">
                &copy; Further<span class="is-hidden-mobile"> Digital Solutions {{ date('Y') }}</span>. <a href="{{ localizedRoute('terms') }}"><span class="is-hidden-tablet">ÁFSZ</span><span class="is-hidden-mobile">Felhasználási feltételek</span></a> | <a href="{{ localizedRoute('privacy') }}">Adatvédelem</a> | <a href="{{ localizedRoute('cookies') }}">Cookie <span class="is-hidden-mobile"> szabályzat</span></a>
            </div>
        </div>
    </div>
</footer>



@if (session()->has('alert'))
    <div class="alert is-{{ session('alert.type') }}">
        <strong>{{ session('alert.title') }}</strong>
        <span>{!! session('alert.message') !!}</span>
        <a class="alert__close">&times;</a>
    </div>
@endif

@stack('content-modals')

<script src="{{ mix('js/site.js') }}"></script>

@stack('content-scripts')

</body>
</html>
