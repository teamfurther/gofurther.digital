@extends('hu.site')

@section('title', 'Testreszabott emberi erőforrások-menedzsment')
@section('description', 'Az emberi erőforrásoknak szánt megoldásunkkal egyesítheti az összes információt alkalmazottairól, a szabadságoktól és a költségektől egészen az értékelésig.')

@section('content')
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Egyedi emberi erőforrások-menedzsment</h1>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet">
                        <p class="solution__intro">Az emberi erőforrásoknak szánt megoldásunkkal egyesítheti az összes információt alkalmazottairól, a szabadságoktól és a költségektől egészen az értékelésig.</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Szabadságkezelés</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Egy teljes szabadságkezelési megoldást fejleszthetünk, amely lehetővé teszi az alkalmazottai számára, hogy kérelmezzék a szabadságukat ünnepnapok, fizetett szabadság vagy betegségszabadság esetén. A menedzserek jóváhagyhatják, elutasíthatják vagy jegyzeteket adhatnak hozzá a kérelmekhez. Ha más megoldásainkkal integrálja, mint például a <a href="{{ localizedRoute('solutions.projects') }}">PM-modullal</a>, akkor ezeket az adatokat felhasználhatjuk az idővonalak pontosabb előrejelzésére.</p>
                        <ul class="list has-bullets">
                            <li>naplózza a  szabadságkérelmeket</li>
                            <li>hagyja jóvá vagy utasítsa el a kérelmeket</li>
                            <li>vegye figyelembe a szabadságokat az idővonalak előrejelzése során</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/hr-illustration-leave-management.png') }}" alt="Szabadságkezelés" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns is-reversed">
                <div class="column is-half-tablet is-two-thirds-desktop">
                    <h3 class="heading-3">Költségkezelés</h3>
                    <p>A testreszabott költségkezelő megoldásunkkal az alkalmazottak benyújthatják és igazolhatják költségeiket, sőt csatolhatják is a számlák másolatát. Ezt követően a menedzsmentcsapat elfogadhatja vagy elutasíthatja az egyes kiadásokat. Ha összekapcsolja a <a href="{{ localizedRoute('solutions.accounting') }}">számviteli modulunkkal</a>, akkor a jóváhagyott költségek automatikusan megjelennek a jelentéseiben.</p>
                    <ul class="list has-bullets">
                        <li>naplózza a költségigényeket</li>
                        <li>hagyja jóvá vagy utasítsa el a kérelmeket</li>
                        <li>legyen digitális másolata a számlákról</li>
                        <li>naplózza a költségeket a könyvelésbe</li>
                    </ul>
                </div>
                <div class="column is-half-tablet is-one-third-desktop">
                    <img class="is-centered-mobile" src="{{ asset('img/solutions/hr-illustration-expense-management.png') }}" alt="Költségkezelés" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="solution">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="heading-3">Alkalmazottak értékelése</h3>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half-tablet is-two-thirds-desktop">
                        <p>Határozzon meg egy értékelési naptárt az alkalmazottak számára menedzsmenti, szakértői értékelésékre és önértékelésekre. Segíthetünk Önnek online kérdőívek vagy felmérések készítésében alkalmazottai számára. Lehetőség van az egész folyamat automatizálására, így valóban az emberekre koncentrálhat, nem az adminisztrációs feladatokra.</p>
                        <ul class="list has-bullets">
                            <li>értékelések ütemezése</li>
                            <li>online kérdőívek és felmérések kitöltése</li>
                            <li>eredmények elemzése</li>
                        </ul>
                    </div>
                    <div class="column is-half-tablet is-one-third-desktop">
                        <img class="is-centered-mobile is-pulled-right-tablet" src="{{ asset('img/solutions/hr-illustration-employee-evaluation.png') }}" alt="Alkalmazottak értékelése" />
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
                        <div class="heading-2">Szeretne többet megtudni HR megoldásainkról?</div>
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
                        <ul class="list has-bullets has-margin-b60">
                            <li>szabadságok kezelése</li>
                            <li>költségkezelés</li>
                            <li>vállalati naptárak</li>
                            <li>kérdőívek és felmérések</li>
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
                                <a href="{{ localizedRoute('solutions.projects') }}">Projektmenedzsment</a>
                                <a href="{{ localizedRoute('solutions.accounting') }}">Számvitel</a>
                                <a href="{{ localizedRoute('solutions.communication') }}">Kommunikáció</a>
                                <a href="{{ localizedRoute('solutions.time-tracking') }}">Időkövetés</a>
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
                    "@id": "{{ localizedRoute('solutions.hr') }}",
                    "name": "Testreszabott emberi erőforrások-menedzsment"
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
    "description": "Az emberi erőforrásoknak szánt megoldásunkkal egyesítheti az összes információt alkalmazottairól, a szabadságoktól és a költségektől egészen az értékelésig.",
    "headline": "Testreszabott emberi erőforrások-menedzsment",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Human erőforrások, Emberi erőforrások, HR szoftver",
    "mainEntityOfPage": "{{ localizedRoute('solutions.hr') }}",
    "name": "Testreszabott emberi erőforrások-menedzsment",
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
                "@id": "{{ localizedRoute('solutions.hr') }}",
                "name": "Testreszabott emberi erőforrások-menedzsment"
            }
        }
    ]
}
</script>
@endpush
