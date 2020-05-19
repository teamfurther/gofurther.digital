@extends('en.site')

@section('title', 'Cookies Policy')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Cookies Policy</h1>
                    <p>Visiting this site may generate cookies or web beacons that get stored on your computer or mobile device. Session cookies are used as a ‘memory' for the website so you only get asked for information on a single occasion and it's remembered for the remainder of your browsing session.</p>
                    <p>We also use analytics cookies to help us understand how many people visit our site, what they look at, how they find us and to give us an understanding of how our site is performing. This data is anonymous and cannot be used to identify individuals.</p>
                    <p>Please find a breakdown below, detailing the types of cookies we are using and what they are used for.</p>
                    <table class="table is-fixed has-margin-b60">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 15%;">Provider</th>
                                <th scope="col" style="width: 15%;">Cookie</th>
                                <th scope="col" style="width: 15%;">Expiration</th>
                                <th scope="col" style="width: 45%;">Explanation</th>
                                <th scope="col" style="width: 20%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Provider" rowspan="3">Further</td>
                                <td data-label="Cookie">laravel_session<span class="is-hidden-tablet">, laravel_token, XSRF_TOKEN</span></td>
                                <td data-label="Expiration" rowspan="3">2 hours<br />(or current browser session)</td>
                                <td rowspan="3">These are session cookies which are required for our website to pass data between page loads</td>
                                <td class="is-hidden-mobile" rowspan="3"></td>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td scope="row" data-label="Cookie">laravel_token</td>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td scope="row" data-label="Cookie">XSRF_TOKEN</td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Provider" rowspan="2">Google Analytics</td>
                                <td scope="row" data-label="Cookie">_ga<span class="is-hidden-tablet">, _gid</span></td>
                                <td scope="row" data-label="Expiration">2 years<span class="is-hidden-tablet">, 24 hours</span></td>
                                <td scope="row" rowspan="2">We use Google Analytics to help us improve the site by collecting information about how visitors use our site. The cookies collect information in an anonymous form, including the number of visitors to the site, where visitors have come to the site from and the pages they visited.</td>
                                <td scope="row" rowspan="2">To opt out of being tracked by Google Analytics across all websites visit <a href="http://tools.google.com/dlpage/gaoptout" target="_blank">this link</a>.</td>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td scope="row" data-label="Cookie">_gid</td>
                                <td scope="row" data-label="Expiration">24 hours</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 class="heading-2">How to turn off cookies</h2>
                    <p>All modern browsers allow you to change your cookie settings. The following links may be helpful in helping you understand how you can update your browser cookie settings:</p>
                    <ul class="list has-bullets">
                        <li><a href="https://support.google.com/chrome/answer/95647?hl=en" target="_blank">Cookie settings in Chrome</a></li>
                        <li><a href="https://support.mozilla.com/en-US/kb/enable-and-disable-cookies-website-preferences" target="_blank">Cookie settings in Firefox</a></li>
                        <li><a href="https://www.opera.com/help/tutorials/security/privacy/" target="_blank">Cookie settings in Opera</a></li>
                        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank">Cookie settings in Safari</a></li>
                        <li><a href="https://privacy.microsoft.com/en-us/windows-10-microsoft-edge-and-privacy" target="_blank">Cookie settings in Edge</a></li>
                        <li><a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Cookie settings in Internet Explorer</a></li>
                    </ul>
                    <p>If you would like to contact us directly about our use of cookies, please email us at <a href="mailto:hello@gofurther.digital">hello@gofurther.digital</a>.</p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact')
@endsection



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
                "@id": "{{ localizedRoute('cookies') }}",
                "name": "Cookies Policy"
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
    "headline": "Cookies Policy",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Custom software development, Software development, Web development, MVP development, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('cookies') }}",
    "name": "Cookies Policy",
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
                "@id": "{{ localizedRoute('cookies') }}",
                "name": "Cookies Policy"
            }
        }
    ]
}
</script>
@endpush
