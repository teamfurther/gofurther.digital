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
                            <img class="about__team__member__picture" src="{{ asset('img/team-veronika-danos.png') }}" alt="Veronika Dános" />
                            <h4 class="about__team__member__name">Dános Veronika</h4>
                            <div class="about__team__member__title">Üzletfejlesztési vezető</div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-noci-pal.png') }}" alt="Nóci Pál" />
                            <h4 class="about__team__member__name">Pál Nóci</h4>
                            <div class="about__team__member__title">UX Designer</div>
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
                            <img class="about__team__member__picture" src="{{ asset('img/team-zsolt-janes.png') }}" alt="Janes Zsolt" />
                            <h4 class="about__team__member__name">Janes Zsolt</h4>
                            <div class="about__team__member__title">Fejlesztő<br class="visible-md-block" /><br class="visible-md-block" /></div>
                        </div>
                    </div>
                    <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                        <div class="about__team__member">
                            <img class="about__team__member__picture" src="{{ asset('img/team-arpad-szakali-vandor.png') }}" alt="Árpád Szakáli-Vándor" />
                            <h4 class="about__team__member__name">Szakáli-Vándor Árpád</h4>
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
                            <img class="about__team__member__picture" src="{{ asset('img/team-gergely-fenyvesi.png') }}" alt="Gergő Fenyvesi" />
                            <h4 class="about__team__member__name">Fenyvesi Gergő</h4>
                            <div class="about__team__member__title">Marketing Koordinátor</div>
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

    @include(getLang() . '.banners.booklet')

    <section class="section" id="our-mission">
        <div class="about">
            <div class="container">
                <div class="columns">
                    <div class="column is-6-tablet is-7-desktop">
                        <h1 class="hero-heading">
                            Ismerd meg <strong class="is-tangerine">hogyan dolgozunk</strong>
                        </h1>
                        <p>
                            A Further Digital Solutionsnél ügyfélközpontú megoldások kidolgozására fókuszálunk: időt szakítunk arra, hogy megismerjük a vállalkozásod, így olyan testreszabott szoftvereket fejlesztünk, melyek a Te konkrét igényeid szolgálják ki.
                        </p>
                        <p>
                            Célunk ügyfeleink üzleti növekedésének segítése innovatív megoldások és kiváló minőségű szoftverek szolgáltatásával. Az állandó kommunikáció, a szenvedély és a közvetlenség olyan értékek, melyekben hiszünk, és amelyek ideális hosszú távú partnerekké tesznek minket.
                        </p>
                    </div>
                    <div class="about__stats is-hu">
                        <span class="about__stat about__stat--1"><strong>{{ config('site.stats.projects') }}+</strong>projekt</span>
                        <span class="about__stat about__stat--2"><strong>{{ config('site.stats.clients') }}</strong>ügyfél</span>
                        <span class="about__stat about__stat--3"><strong>{{ config('site.stats.countries') }}</strong>országban</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark" id="laravel-vue">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-9-desktop">
                    <h2 class="hero-heading">
                        Further <strong class="is-raspberry">❤</strong> Laravel + Vue.
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet">
                    <p>Imádjuk az olyan keretrendszereket mint a Laravel és a Vue. A gazdag funkcionalitásuknak köszönhetően lehetőve teszik számunkra, hogy csökkentsük a fejlesztési időket és költségeket. Komoly tudással és tapasztalattal rendelkezünk ezeknek az eszközöknek a használatában, ami segít a letisztult, karbantartható és skálázható kód írásában.</p>
                    <p>A Laravel a legnépszerűbb PHP keretrendszer, de a Vue is egyre kedveltebb a Javascript fejlesztők körében. Mindkettő hátterében egy fantasztikus közösség áll, amit mi is próbálunk támogatni, hozzájárulva a kódbázis fejlesztéséhez és közösségi projektekhez.</p>
                </div>
                <div class="column has-text-right is-4-tablet is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('img/home-laravel-vuejs.png') }}" alt="Laravel & Vue" />
                </div>
            </div>
        </div>
    </section>

    <section class="section has-padding-b0">
        <div class="banner--laravel-meetup">
            <img src="{{ asset('img/laravel-meetup.png?v2') }}" alt="Laravel Hungary Meetup" />
            <div class="heading-3">A Further a Laravel Hungary <br class="is-hidden-touch is-hidden-fullhd" />meetup szervezője!</div>
        </div>
    </section>

    <section class="section" id="eszkoztar">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Eszköztárunk</h1>
                </div>
            </div>
            <div class="columns">
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">PHP</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Laravel</li>
                        <li>Lumen</li>
                        <li>Statamic</li>
                        <li>Symfony</li>
                        <li>Drupal</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Adatbázisok</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>MySQL, MariaDB</li>
                        <li>PostgreSQL</li>
                        <li>MongoDB</li>
                        <li>redis</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Kliensoldali JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Vue</li>
                        <li>React</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Szerveroldali JS</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Node.js</li>
                        <li>socket.io</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Python</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Django</li>
                    </ul>
                    <h2 class="heading-4 has-margin-b0">Java</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Spring</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Mobilfejlesztés</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>Flutter</li>
                        <li>ReactNative</li>
                        <li>Swift</li>
                        <li>Kotlin</li>
                        <li>Cordova</li>
                        <li>Electron</li>
                    </ul>
                </div>
                <div class="column has-margin-b0 is-half-tablet is-one-quarter-desktop">
                    <h2 class="heading-4 has-margin-b0">Felhő és DevOps</h2>
                    <ul class="list has-bullets has-margin-b30">
                        <li>GIT</li>
                        <li>CI/CD</li>
                        <li>nginx, Apache</li>
                        <li>Docker, Kubernetes</li>
                        <li>Amazon AWS, Microsoft Azure</li>
                        <li>Linode, DigitalOcean</li>
                        <li>Cloudflare</li>
                    </ul>
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
    "headline": "Csapatunk",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális termékfejlesztés, MVP fejlesztés, Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, UX kutatás, UX design, UI design, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('about') }}",
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
                "@id": "{{ localizedRoute('about') }}",
                "name": "Csapatunk"
            }
        }
    ]
}
</script>
@endpush
