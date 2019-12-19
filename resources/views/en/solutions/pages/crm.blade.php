@extends('en.site')

@section('title', 'Custom-built CRM Solutions for SMEs')
@section('description', 'Along the years we have developed several bespoke CRM modules for our clients in the SME and enterprise sectors, currently serving thousands of users.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Custom CRM Software</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Along the years we have developed several bespoke CRM modules for our SME and large enterprise clients, currently serving thousands of users.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Integrate different data sources</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>If you invest in marketing your business, you should be tracking where your customers come from. We can automate the integration with any kind of data source, which means less manual labour for your team and less lost data.</p>
                        <ul class="list has-bullets has-two-columns">
                            <li>web forms</li>
                            <li>landing pages</li>
                            <li>email campaigns</li>
                            <li>social media</li>
                            <li>phone calls</li>
                            <li>referrals</li>
                            <li>shop purchases</li>
                            <li>web analytics</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/crm-illustration-data-sources.png') }}" alt="Integrate different data sources into your CRM" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h3 class="heading-3">Custom sales pipelines</h3>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column is-half-tablet">
                    <p>The structure of a sales pipeline differs from company to company and this should be represented in your CRM. By analysing and understanding your workflow we build you a software solution that mimics the specific sequence of actions needed in order to move a prospect from a new lead to a customer.</p>
                    <ul class="list has-bullets">
                        <li>personalise the stages of your sales process</li>
                        <li>organise customers into categories</li>
                        <li>create multiple pipelines for different teams or departments</li>
                    </ul>
                </div>
                <div class="column is-half-tablet">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/crm-illustration-sales-pipeline.png') }}" alt="Create custom sales pipelines" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Personalised reports</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet">
                        <p>Get an overview of how you perform and use data to make better decisions. We can create beautiful visual representations of the data based on sales agents or teams, geolocation, timelines, or any other valuable statistic you may need, it all depends on your workflow and needs.</p>
                        <ul class="list has-bullets">
                            <li>pipeline analysis</li>
                            <li>funnel reports</li>
                            <li>campaign reports</li>
                            <li>conversion rates</li>
                            <li>forecasting</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/crm-illustration-reports.png') }}" alt="Generate personalised reports" />
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
                        <div class="heading-2">Do you want to learn more about our CRM solutions?</div>
                        <a class="btn is-large is-pearl" href="{{ url('#contact') }}">Ask for a demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Features we have already implemented for our clients</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="list has-bullets has-two-columns has-margin-b60">
                            <li>personalisable user profiles (fields and filters)</li>
                            <li>lead generation and follow-up</li>
                            <li>custom sales pipelines</li>
                            <li>campaign management</li>
                            <li>mass email sending</li>
                            <li>personalised reports</li>
                            <li>email and push notifications</li>
                            <li>auto-sync contact book</li>
                            <li>third-party service integrations</li>
                        </ul>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Use together with our other solutions</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="solution__nav solution__nav--sales-operations">
                            <nav class="solution__nav__items">
                                <a href="{{ localizedRoute('solutions.sales') }}">Sales</a>
                                <a href="{{ localizedRoute('solutions.communication') }}">Communication</a>
                                <a href="{{ localizedRoute('solutions.dms') }}">Document Management</a>
                                <a href="{{ localizedRoute('solutions.wiki') }}">Knowledge Center</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__blog">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Why choose a custom-built solution?</div>
                        <a class="btn is-large is-pearl" href="{{ localizedRoute('blog.view', ['slug' => 'custom-development-vs-out-of-the-box-software']) }}">Find out</a>
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
                    "@id": "{{ localizedRoute('solutions.crm') }}",
                    "name": "Custom-built CRM Solutions for SMEs"
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
    "description": "Along the years we have developed several bespoke CRM modules for our clients in the SME and enterprise sectors, currently serving thousands of users.",
    "headline": "Custom-built CRM Solutions for SMEs",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "CRM",
    "mainEntityOfPage": "{{ localizedRoute('solutions.crm') }}",
    "name": "Custom-built CRM Solutions for SMEs",
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
                "@id": "{{ localizedRoute('solutions.crm') }}",
                "name": "Custom-built CRM Solutions for SMEs"
            }
        }
    ]
}
</script>
@endpush
