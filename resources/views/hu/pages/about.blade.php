@extends('hu.site')

@section('title', 'Rólunk és fejlesztési folyamatainkról')
@section('description', 'Célunk ügyfeleink üzleti növekedésének segítése innovatív megoldások és kiváló minőségű szoftverek szolgáltatásával. Az állandó kommunikáció, a szenvedély és a rugalmasság olyan értékek, amelyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.')

@section('content')
    <section class="section">
        <div class="about">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="heading">Rólunk</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-7-tablet is-half-desktop is-offset-2-desktop">
                        <p>A Further Digital Solutionsnél ügyfélközpontú megoldások kidolgozására fókuszálunk: időt szakítunk arra, hogy megismerjük az Ön vállalkozását, így olyan testreszabott szoftvereket fejlesztünk, melyek az Ön konkrét igényeinek megoldására szolgálnak.</p>
                        <p>Célunk ügyfeleink üzleti növekedésének segítése innovatív megoldások és kiváló minőségű szoftverek szolgáltatásával. Az állandó kommunikáció, a szenvedély és a rugalmasság olyan értékek, amelyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.</p>
                    </div>
                    <div class="about__stats is-hu">
                        <span class="about__stat about__stat--1"><strong>160+</strong>projekt</span>
                        <span class="about__stat about__stat--2"><strong>63</strong>ügyfél</span>
                        <span class="about__stat about__stat--3"><strong>11</strong>országban</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--profile">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Szeretne többet megtudni rólunk?</div>
                            <a class="btn is-large is-primary" href="{{ url('media/further-booklet-0419-web-hu.pdf') }}" target="_blank">Töltse le bemutatónkat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="hogyan-dolgozunk">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading">Hogyan dolgozunk?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <p>Agilis technikákat és tervezői gondolkodásmódot használva rövid időn belül működő megoldásokat szállítunk, amelyek lehetővé teszik Ön számára, hogy hamar mérhető eredményeket lásson.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <div class="about__process">
                        <span class="about__process__step about__process__step--1">
                            <strong>Megismerés</strong>
                            Felmérjük az Ön üzleti igényeit és folyamatait
                        </span>
                        <span class="about__process__step about__process__step--2">
                            <strong>Ötletelés</strong>
                            Megoldásokat keresünk a meghatározott problémákra
                        </span>
                        <span class="about__process__step about__process__step--3">
                            <strong>Validáció</strong>
                            Prototípusokat tervezünk, hogy teszteljük a kezdeti ötleteket
                        </span>
                        <span class="about__process__step about__process__step--4">
                            <strong>Megvalósítás</strong>
                            Lefejlesztjük a validált megoldásokat
                        </span>
                        <span class="about__process__step about__process__step--5">
                            <strong>Fenntarthatóság</strong>
                            Mérjük az eredményeket és továbbfejlesztjük a terméket
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--services">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Szeretné tudni hogyan segíthetünk önnek?</div>
                            <a class="btn is-large is-primary" href="{{ localizedRoute('solutions') }}">Olvasson tovább</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="about__team">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="heading">Csapatunk</h2>
                    </div>
                </div>
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-peter-illes.png') }}" alt="Péter Illés" />
                            <h4 class="about__team__member__name">Illés Péter</h4>
                            <div class="about__team__member__title">Társtulajdonos, <br class="visible-md-block" />ügyvezető</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-norbert-zsombori.png') }}" alt="Norbert Zsombori" />
                            <h4 class="about__team__member__name">Zsombori Norbert</h4>
                            <div class="about__team__member__title">Társtulajdonos, <br class="visible-md-block" />vezető fejlesztő</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-csongor-ur.png') }}" alt="Csongor Ur" />
                            <h4 class="about__team__member__name">Ur Csongor</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-eszter-balla.png') }}" alt="Eszter Balla" />
                            <h4 class="about__team__member__name">Balla Eszter</h4>
                            <div class="about__team__member__title">Projektmenedzser<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-noemi-varga.png') }}" alt="Noémi Varga" />
                            <h4 class="about__team__member__name">Varga Noémi</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-kalman.png') }}" alt="Zsolt Kálmán" />
                            <h4 class="about__team__member__name">Kálmán Zsolt</h4>
                            <div class="about__team__member__title">UX tervező<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-zoltan-sarosi.png') }}" alt="Zoltán Sárosi" />
                            <h4 class="about__team__member__name">Sárosi Zoltán</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-david-simon.png') }}" alt="Dávid Simon" />
                            <h4 class="about__team__member__name">Simon Dávid</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading">Csatlakozz csapatunkhoz</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column is-5-desktop is-offset-2-desktop">
                    <p>Szenvedélyes, kreatív és világot hódítani akaró munkatársakat keresünk.</p>
                    <p>Úgy gondoljuk, hogy a tapasztalatot és a tudást meg kell osztani, ezért ösztönözzük a csapat tagjai közötti kommunikációt, konferenciákra járunk és workshopokat tartunk.</p>
                    <p><a href="{{ url('#contact') }}">Ismerkedj meg velünk</a>, tudd meg hogyan pörgünk munka közben, és mit szeretünk a munkánkban.</p>
                    <p>Oklevelek helyett inkább a fejlődni akarást és az ambíciót vesszük figyelembe. Ezért ha úgy gondolod, hogy rendelkezel ezekkel a tulajdonságokkal, akkor keresd fel az <a href="https://gofurther.digital/en/careers" target="_blank">https://gofurther.digital/en/careers</a> oldalt.</p>
                </div>
                <div class="column is-hidden-mobile is-3-desktop">
                    <img class="is-pulled-right" src="{{ asset('img/join-our-team-illustration.png') }}" alt="Csatlakozz csapatunkhoz" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--tech-stack">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Tudj meg többet az általunk használt technológiákról</div>
                            <a class="btn is-large is-primary" href="{{ localizedRoute('tech-stack') }}">Eszköztár</a>
                        </div>
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
                    "@id": "{{ localizedRoute('about') }}",
                    "name": "Rólunk"
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
    "description": "Célunk ügyfeleink üzleti növekedésének segítése innovatív megoldások és kiváló minőségű szoftverek szolgáltatásával. Az állandó kommunikáció, a szenvedély és a rugalmasság olyan értékek, amelyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.",
    "headline": "Rólunk és fejlesztési folyamatainkról",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Web design, Webfejlesztés",
    "mainEntityOfPage": "{{ localizedRoute('about') }}",
    "name": "Rólunk és fejlesztési folyamatainkról",
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
                "@id": "{{ localizedRoute('about') }}",
                "name": "Rólunk"
            }
        }
    ]
}
</script>
@endpush