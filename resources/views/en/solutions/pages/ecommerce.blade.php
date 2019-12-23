@extends('en.site')

@section('title', 'Online Stores with Chronos')
@section('description', 'With the help of Chronos, our in-house CMS, we can create modern and powerful webshops for you in record time.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column has-text-centered">
                        <img class="has-margin-b60" src="{{ asset('img/logo-chronos.svg') }}" alt="Chronos CMS" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Custom eCommerce Solutions</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">With the help of Chronos, our in-house CMS, we can create modern and powerful webshops for you in record time.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <h3 class="heading-3">Create beautiful product pages</h3>
                        <p>Effortlessly create new products pages and personalise the information displayed the way you want it to be seen using beautiful templates. Add product variations based on attributes such as colour, size or any other custom attribute you need.</p>
                        <ul class="list has-bullets">
                            <li>choose from several customisable templates</li>
                            <li>create product variations</li>
                            <li>add custom product attributes</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/ecommerce-illustration-product-pages.png') }}" alt="Create beautiful product pages" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Use dynamic pricing to increase revenue</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>Dynamic pricing allows you to set tiered prices for your products based on ordered quantity. If required, we can also add the possibility to create offers, vouchers, product packages or gift products.</p>
                    <ul class="list has-bullets">
                        <li>add tiered product pricing</li>
                        <li>create promo campaigns and offers</li>
                        <li>send out vouchers and coupons</li>
                        <li>package products together</li>
                        <li>offer gift products to your buyers</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/ecommerce-illustration-dynamic-pricing.png') }}" alt="Use dynamic pricing to increase revenue" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <h3 class="heading-3">Boost your sales</h3>
                        <p>Increase your average cart revenue by taking advantage of optimised marketing opportunities like cart recovery, cross selling and upselling on product pages, in the cart or at checkout. We can configure your webshop to automatically recommend similar products or accessories.</p>
                        <ul class="list has-bullets">
                            <li>abandoned cart reminders</li>
                            <li>cross sell products</li>
                            <li>upsell items</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/ecommerce-illustration-boost-sales.png') }}" alt="Boost your sales with cart recovery, cross sells and upsells" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half-tablet is-offset-4-desktop">
                    <h3 class="heading-3">Integrate with 3rd party payment gateways</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <p>To make it easier for your clients to pay you, we can set up credit card payments through services such as Stripe, Braintree, Authorize.net, PayU or MobilPay. All online payment methods redirect your customers back to a custom thank you page on your website so you can track conversion rates.</p>
                    <ul class="list has-bullets">
                        <li>integrate with international gateways (Stripe, Braintree, etc.)</li>
                        <li>integrate with local gateways (PayU, MobilPay, etc.)</li>
                        <li>track conversion on a thank you page</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/ecommerce-illustration-payment-gateways.png') }}" alt="Integrate with 3rd party payment gateways" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Ship your products anywhere</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>We can make order fulfillment a breeze. Print shipping labels with just a click, directly from your shop's admin interface. We can integrate with all major shipping companies, such as DHL, UPS, FedEx, DPD, GLS or Fan Courier to make package tracking easier.</p>
                        <ul class="list has-bullets">
                            <li>print shipping labels directly from webshop</li>
                            <li>track shipments from webshop</li>
                            <li>integrate with DHL, UPS, FedEx, DPD, GLS, Fan Courier</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/ecommerce-illustration-shipping.png') }}" alt="Ship your products anywhere" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Do you want to learn more about our eCommerce solutions?</div>
                        <a class="btn is-large is-pearl" href="{{ url('#contact') }}">Ask for a demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    "@id": "{{ localizedRoute('solutions') }}",
                    "name": "Our Solutions"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('solutions.ecommerce') }}",
                    "name": "Online Stores with Chronos"
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
    "description": "Attach documents to anything, from people to projects or products, with our custom document management solutions.",
    "headline": "Online Stores with Chronos",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "E-Commerce, Webshop, Online Store, Chronos CMS",
    "mainEntityOfPage": "{{ localizedRoute('solutions.ecommerce') }}",
    "name": "Online Stores with Chronos",
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
                "@id": "{{ localizedRoute('solutions') }}",
                "name": "Our Solutions"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('solutions.ecommerce') }}",
                "name": "Online Stores with Chronos"
            }
        }
    ]
}
</script>
@endpush
