@extends('hu.site')

@section('title', 'Időkövetési és jelentéskészítő szoftver')
@section('description', 'Az időkövetési megoldásainkkal Ön és csapata naplózhatja és nyomon követheti az időt bármely eszközről, bárhonnan. Még offline állapotban is.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Testreszabott időkövetési rendszerek</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Az időkövetési megoldásainkkal Ön és csapata naplózhatja és nyomon követheti az időt bármely eszközről, bárhonnan. Még offline állapotban is.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Tervezze meg és kövesse nyomon idejét</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>A vállalkozás nagyságától függetlenül, minden perc számít. Időkövető modulunk lehetővé teszi, hogy gyorsan bejelentkezzen a rendszerébe, amiben dolgozik, még akkor is, ha úton van. Használja a tervezőt, hogy meghatározza a napi célokat, vagy integrálja más megoldásainkat, és csatolja a munkaidő-kimutatásokat a projektekhez vagy a termékekhez.</p>
                        <ul class="list has-bullets">
                            <li>tervezze meg napját</li>
                            <li>kezdje el nyomon követni idejét egyetlen kattintással</li>
                            <li>minden eszközön működik</li>
                            <li>kövesse nyomon az időt offline állapotban</li>
                            <li>csatolja az időkimutatásokat projektekhez vagy termékekhez</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/time-tracking-illustration-track.png') }}" alt="Tervezze meg és kövesse nyomon idejét" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Elegáns és tájékoztató munkaidő-kimutatások</h3>
                    <p>Bármilyen jelentést elkészíthetünk Önnek: szűrje a jelentéseket időintervallum, ügyfél, alkalmazott, projekt vagy termék szerint, és győződjön meg róla, hogy csapata jó úton halad, és a projektjei nyereségesek. Integrálja <a href="{{ localizedRoute('solutions.accounting') }}">számviteli modulunkkal</a>, hogy az ügyfelek számláit közvetlenül a kiszámlázható órák alapján állítsa ki.</p>
                    <ul class="list has-bullets">
                        <li>generáljon munkaidő-kimutatásokat</li>
                        <li>szűrje ki az időbejegyzéseket bármely kritérium alapján</li>
                        <li>előrejelzések a jövőbeli projektekre</li>
                        <li>számlázás az ügyfeleknek a munkaidő-kimutatások alapján</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/time-tracking-illustration-timesheet.png') }}" alt="Elegáns és tájékoztató munkaidő-kimutatások" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution__cta">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretne többet megtudni időkövetési megoldásainkról?</div>
                        <a class="btn is-large is-primary" href="{{ url('#contact') }}">Kérjen egy bemutatót</a>
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
                        <h3 class="heading-3">Funkcionalitások, amelyeket már megvalósítottunk ügyfeleink számára</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="list has-bullets has-two-columns has-margin-b60">
                            <li>időkövetés</li>
                            <li>napi tervezés</li>
                            <li>offline adatok szinkronizálása</li>
                            <li>munkaidő-kimutatások generálása</li>
                            <li>számlák generálása egyetlen kattintással</li>
                        </ul>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Használja együtt további megoldásainkkal</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="solution__nav solution__nav--productivity">
                            <nav class="solution__nav__items">
                                <a href="{{ localizedRoute('solutions.accounting') }}">Számvitel</a>
                                <a href="{{ localizedRoute('solutions.projects') }}">Projektmenedzsment</a>
                                <a href="{{ localizedRoute('solutions.plm') }}">PLM</a>
                                <a href="{{ localizedRoute('solutions.hr') }}">Emberi erőforrások</a>
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
                        <div class="heading-2">Miért válasszon testreszabott megoldást?</div>
                        <a class="btn is-large is-primary" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Tudja meg itt</a>
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
                    "name": "Főoldal"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('solutions') }}",
                    "name": "Megoldásaink"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('solutions.time-tracking') }}",
                    "name": "Időkövetési és jelentéskészítő szoftver"
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "description": "Az időkövetési megoldásainkkal Ön és csapata naplózhatja és nyomon követheti az időt bármely eszközről, bárhonnan. Még offline állapotban is.",
    "headline": "Időkövetési és jelentéskészítő szoftver",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Időkövetés",
    "mainEntityOfPage": "{{ localizedRoute('solutions.time-tracking') }}",
    "name": "Időkövetési és jelentéskészítő szoftver",
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
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
                "name": "Főoldal"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('solutions') }}",
                "name": "Megoldásaink"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('solutions.time-tracking') }}",
                "name": "Időkövetési és jelentéskészítő szoftver"
            }
        }
    ]
}
</script>
@endpush