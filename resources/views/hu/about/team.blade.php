@extends('hu.site')

@section('title', 'Csapatunk')
@section('description', 'Ismerd meg a mosolygós embereket a Further mögött.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet">
                    <h2 class="hero-heading">
                        <strong class="is-raspberry">Örvendünk</strong>, hogy megismerhetünk!
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6-tablet is-5-desktop is-offset-1-tablet">
                    <p>
                        Szia! Bármelyik kollégánkkal beszélsz majd, biztos lehetsz abban, hogy egy széles mosollyal megfűszerezett sziával köszönt majd. Ez a fajta közvetlenség és barátságosság olyan érték, amely a teljes csapatunkat jellemzi.
                    </p>
                    <p>
                        Görgess tovább és ismerd meg azokat, akikkel együtt dolgozol majd a következő projekteden!
                    </p>
                </div>
                <div class="column is-hidden-mobile is-4-tablet is-offset-1-desktop has-text-centered">
                    <img src="{{ asset('img/about-szia.png') }}" alt="Örvendünk, hogy megismerhetünk" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-eszter-balla.png') }}" alt="Eszter Balla" />
                            <h4 class="about__team__member__name">Balla Eszter</h4>
                            <div class="about__team__member__title">Ügyfélkapcsolati vezető<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-peter-illes.png') }}" alt="Péter Illés" />
                            <h4 class="about__team__member__name">Illés Péter</h4>
                            <div class="about__team__member__title">Stratégiai vezető</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-norbert-zsombori.png') }}" alt="Norbert Zsombori" />
                            <h4 class="about__team__member__name">Zsombori Norbert</h4>
                            <div class="about__team__member__title">Fejlesztési vezető</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-noemi-varga.png') }}" alt="Noémi Varga" />
                            <h4 class="about__team__member__name">Varga Noémi</h4>
                            <div class="about__team__member__title">Marketing koordinátor<br class="visible-md-block" /><br class="visible-md-block" /></div>
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
                            <img class="about__team__member__picture" src="{{ asset('img/team-istvan-farkas.png') }}" alt="István Farkas" />
                            <h4 class="about__team__member__name">Farkas István</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-szabolcs-benedek.png') }}" alt="Szabolcs Benedek" />
                            <h4 class="about__team__member__name">Benedek Szabolcs</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-csaba-barabas.png') }}" alt="Barabás Csaba" />
                            <h4 class="about__team__member__name">Barabás Csaba</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
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
                            <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-janes.png') }}" alt="Janes Zsolt" />
                            <h4 class="about__team__member__name">Janes Zsolt</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet">
                    <h2 class="hero-heading">
                        <strong class="is-pearl">Csatlakozz</strong> csapatunkhoz
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-7-tablet is-offset-1-tablet is-6-desktop">
                    <p>Szenvedélyes, kreatív és világot hódítani akaró munkatársakat keresünk.</p>
                    <p>Úgy gondoljuk, hogy a tapasztalatot és a tudást meg kell osztani, ezért ösztönözzük a csapat tagjai közötti kommunikációt, konferenciákra járunk és workshopokat tartunk.</p>
                    <p><a href="{{ localizedRoute('contact') }}">Ismerkedj meg velünk</a>, tudd meg hogyan pörgünk munka közben, és mit szeretünk a munkánkban.</p>
                    <p>Oklevelek helyett inkább a fejlődni akarást és az ambíciót vesszük figyelembe. Ezért ha úgy gondolod, hogy rendelkezel ezekkel a tulajdonságokkal, akkor keresd fel az <a href="https://gofurther.digital/en/careers" target="_blank">https://gofurther.digital/en/careers</a> oldalt.</p>
                </div>
                <div class="column is-hidden-mobile is-3-tablet">
                    <img class="is-pulled-right" src="{{ asset('img/join-our-team-illustration.png') }}" alt="Csatlakozz csapatunkhoz" />
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.tech-stack')
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
                    "@id": "{{ localizedRoute('about.team') }}",
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
    "headline": "Csapatunk",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('about.team') }}",
    "name": "Csapatunk",
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
                "@id": "{{ localizedRoute('about.team') }}",
                "name": "Csapatunk"
            }
        }
    ]
}
</script>
@endpush
