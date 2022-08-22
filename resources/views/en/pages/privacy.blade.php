@extends('en.site')

@section('title', 'Privacy Policy')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Privacy Policy</h1>
                    <h2 class="heading-2 has-margin-b30">Introduction</h2>
                    <p>{{ config('site.company.name') }} (Further Digital Solutions) takes the confidentiality of personal data seriously. Please contact us if you have any questions or comments on this privacy policy.</p>
                    <p class="has-margin-b60">This privacy policy sets out the ways Further Digital Solutions processes personal data and only relates to personal data collected by Further Digital Solutions via the Further website. This privacy policy does not apply to personal data provided to Further Digital Solutions by any other means or via any other website. Any personal data collected by Further Digital Solutions is used in accordance with effective data protection legislations.</p>
                    <h2 class="heading-2 has-margin-b30">Data Controller</h2>
                    <p>The data controller of the Further website is:</p>
                    <p>{{ config('site.company.name') }}<br />
                        {{ config('site.company.address.postal_code') }} {{ config('site.company.address.city') }} ({{ config('site.company.address.country') }}), {{ config('site.company.address.street_address') }}<br />
                        Company no.: {{ config('site.company.regno') }}<br />
                        VAT no.: {{ config('site.company.vatno') }}<br /></p>
                    <p class="has-margin-b60">At Further, your personal information will only be accessible to the management team. Your personal details will not be made available to any third parties or data processors.</p>
                    <h2 class="heading-2 has-margin-b30">Use of Personal Information</h2>
                    <p>Personal information provided to Further Digital Solutions via the Further website will be used for the purposes outlined at the time of collection. In addition, personal information may be used for statistical analysis.</p>
                    <p>Personal data will be collected and processed by Further Digital Solutions for the following purposes:</p>
                    <ul class="list has-bullets has-margin-b60">
                        <li>to provide goods and services, including marketing, advertising and promotions, unless a user elects to opt-out of receiving such communications;</li>
                        <li>to build up a database of CVs and candidate screening (careers page).</li>
                    </ul>
                    <h2 class="heading-2 has-margin-b30">Consent</h2>
                    <p class="has-margin-b60">By providing personal data to Further Digital Solutions users consent to the processing of such data by Further Digital Solutions as described in this privacy policy.</p>
                    <h2 class="heading-2 has-margin-b30">Verifying, updating and amending your personal information</h2>
                    <p>Regarding your personal information you have the right to:</p>
                    <ul class="list has-bullets">
                        <li>see what data we have about you, if any;</li>
                        <li>amend/update any data we have about you;</li>
                        <li>have us delete any data we have about you;</li>
                        <li>request to transfer your data;</li>
                        <li>express any concern you have about our use of your data.</li>
                    </ul>
                    <p>If, at any time, you have a request listed above, you may simply email your request to <a href="mailto:{{ config('mail.to') }}">{{ config('mail.to') }}</a>.</p>
                    <p class="has-margin-b60">Verification, updating or amendment of personal data takes place within 40 days of receipt of the request.</p>
                    <h2 class="heading-2 has-margin-b30">Links to Third Party Websites</h2>
                    <p>This privacy policy applies solely to the personal data collected by Further Digital Solutions and does not apply to third party websites users may access from this website.</p>
                    <p class="has-margin-b60">Further Digital Solutions is not responsible for the privacy policies of third party websites. Further Digital Solutions advises users to read the privacy policies of other websites before registering any personal data.</p>
                    <h2 class="heading-2 has-margin-b30">Notification of Changes</h2>
                    <p>Further Digital Solutions will notify all members of any changes it makes to its privacy policy. If Further Digital Solutions decides to change its privacy policy, it will post such changes on this page so that you are always aware of how Further Digital Solutions uses your personal data.</p>
                    <p>If you would like to contact us directly about our privacy policy, please email us at <a href="mailto:{{ config('mail.to') }}">{{ config('mail.to') }}</a>.</p>
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
                "@id": "{{ localizedRoute('privacy') }}",
                "name": "Privacy Policy"
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
    "headline": "Privacy Policy",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Digital product development, MVP development, Custom software development, Software development, Web development, UX research, UX design, UI design, Digital transformation",
    "mainEntityOfPage": "{{ localizedRoute('privacy') }}",
    "name": "Privacy Policy",
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
                "@id": "{{ localizedRoute('privacy') }}",
                "name": "Privacy Policy"
            }
        }
    ]
}
</script>
@endpush
