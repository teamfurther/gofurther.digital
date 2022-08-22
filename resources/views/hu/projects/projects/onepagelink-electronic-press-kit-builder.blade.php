@section('title', 'OnePageLink esettanulmány')
@section('description', 'A OnePageLink egy electronic press kit építő, aminek segítségével művészek menedzselni tudják a promóciós anyagaikat.')
@section('preview_image', asset('media/projects/opl-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">OnePageLink</h2>
        <h3 class="project__intro">
            A OnePageLink egy electronic press kit építő, aminek segítségével művészek menedzselni tudják a promóciós anyagaikat
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>A OnePageLink egy egyszerű és hatékony EPK építő. Az EPK az Electronic Press (vagy Promo) kit rövidítése. Segítségével, a művészek menedzselni tudják a promóciós anyagaikat, illetve elküldeni ezeket eseményszervezőknek és a sajtónak.</p>
                    <p>A OnePageLink célja, hogy bárki számára könnyen megugorható feladat legyen egy EPK vagy promó oldal összeállítása, design készségek nélkül is. Miután a művészek feliratkoznak, pár perc alatt össze tudják állítani maguknak a promóciós oldalt.</p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/opl-logo.svg') }}" alt="OnePageLink" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Amikor először kapcsolatba léptünk a OnePageLink-el 2017-ben, a termék már több száz felhasználóval rendelkezett. Eleinte a karbantartási és support feladatokat láttuk el, 2018-ban viszont már az új verzió fejlesztésével is minket bíztak meg.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Kihívások és megoldások</h4>
                    </div>
                </div>
                <div class="columns has-margin-b90 is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Megszakításmentes szolgáltatás az új platformra való migrálás közben</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>Mivel a OnePageLink már rendelkezett aktív felhasználókkal, biztosítanunk kellett, hogy a szolgáltatásban nem lesznek kiesések amint egy új technológiai platformrma migráltuk az applikációt.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A probléma megfejtésére együttesen kellett technikai és ügyfélszolgálati megoldásokat alkalmaznunk. A legtöbb tartalmat át lehetett egy automatizált folyamattal migrálni, de technológiai korlátok miatt nem mindet. Ezekben az esetekben szorosan együtt dolgoztunk a OnePageLink csapatával, hogy ezt kommunikáljuk az ügyfelek felé és felkészítsük őket a váltásra.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/opl-overview-1.png') }}" alt="OnePageLink - Megszakításmentes szolgáltatás az új platformra való migrálás közben" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Fizetési szolgáltató leváltása</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>Az új platformra költözés része volt az is, hogy a meglévő bankkártyás fizetési szolgáltatót egy modernebb, olcsóbb rendszerre cseréltük. Ebből adódóan újabb migrációs akadályba ütköztünk. Hogyan engedjük a meglévő feliratkozásokat tovább futni úgy, hogy a felhasználók ne kelljen ismét feliratkozzanak?</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>Ezt a problémát is két oldalról kellett megközelítsük. Automata scripteket írtunk, amelyek kiszámolták a hátralevő időt a feliratkozások esetében, majd átmigráltuk ezeket az új szolgáltatóhoz. A bankkártya adatokat viszont nem mi, hanem az szolgáltató tárolta, így ezeknek az átvitelét nem tudtuk automatizálni.</p>
                        <p>Érthető okokból nem szerettük volna az ügyfeleket arra kényszeríteni, hogy ismételten be kelljen írják a bankkártya adataikat, ezért a két szolgáltató között mediátorként működtünk a probléma megoldása érdekében. Egy nagyon hosszú email sorozat után, örömmel vettük tudomásul, hogy végre sikerrel jártunk.</p>
                    </div>
                    <div class="column">
                        <img class="is-pulled-right" src="{{ asset('media/projects/opl-overview-2.png') }}" alt="OnePageLink - Fizetési szolgáltató leváltása" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-carlo-santone.png') }}" alt="OnePageLink Carlo Santone testimonial" />
                        <cite class="project__testimonial__author">SANTONE Carlo</cite>
                        <span class="project__testimonial__title">Alapító, OnePageLink</span>
                        <blockquote class="project__testimonial__content">
                            <p>"Nyitottak és barátságosak, mindig elegendő időt adnak, hogy felvázold az igényeidet, amikre okos és logikus megoldásokat javasolnak. Elégedettek vagyunk azzal, amit a Furtherrel közösen építettünk, illetve hogy továbbra is színvonalas kretív és technikai megoldásokat alkalmazunk, amint a terméket finomítjuk."</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h4 class="heading-1">
                        Tapasztalataink
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Kreatív partnerekkel dolgozni motiváló, de kihívásokkal teli is
                    </h5>
                    <p>A OnePageLink csapata kimondottan kreatív emberekből tevődik össze. Művészek, zenészek, designerek. Ez különösen izgalmas volt, hiszen jobbnál jobb ötletekkel és gyönyörő design megoldásokkal álltak elő.</p>
                    <p>Ugyanakkor ennek megvoltak a saját kihívásai is. Folyamatosan módosítanunk kellett olyan programrészeket amiket már befejezettnek tekintettünk, közben vigyázva arra, hogy a meglévő funkcionalitásba se csússzanak be hibák (hálásak vagyunk annak, aki feltalálta az automata teszteket). Mindezt úgy, hogy közben az idővel is harcoltunk, hogy a termék minél hamarabb piacra kerülhessen.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Az adatmigrációk önmagukban felérnek egy projekttel
                    </h5>
                    <p>Ez egy különösen trükkös projekt volt az adatmigrációt tekintve. Szerecsére korábban már átéltünk pár hasonló projektet, ezért tudtuk, hogy az adatmigráció tekintélyt igényel.</p>
                    <p>Elejétől fogva összeírtuk egy regiszterbe az összes platformon és harmadik félnél található adatot. Utána osztályoztuk őket annak alapján, hogy lehet-e őket automatizálva migrálni vagy sem. Abban az esetben ha nem lehetett, kidolgoztunk egy tervet, hogy mikor melyik kulcsszereplővel, ügyféllel kell egyeztetni.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/opl-gallery.jpg') }}" alt="Galéria megnyitása" />

            <span class="btn is-large">Galéria megnyitása</span>
        </a>
    </section>

    <section class="section">
        <div class="project__contact">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-1">Neked miben segíthetünk?</div>
                        <a class="btn is-large" href="{{ localizedRoute('contact') }}">
                            Kérj egy ingyenes konzultációt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.projects.banners.' . $bannerSlug)
@endsection

@push('content-modals')
    <div class="modal" id="gallery-modal" tabindex="-1" role="dialog">
        <div class="container">
            <div class="project__gallery-modal">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/opl-gallery-1.jpg') }}" alt="OnePageLink" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">EPK / promó oldal</h5>
                            <div class="project__gallery-modal__description">
                                <p>Így néz ki a végeredmény. A megosztható EPK vagy promó oldalt az ügyfelek pitch deck-ként is tudják használni, vagy el tudják küldeni a rendezvényszervezőknek, fesztiváloknak vagy a sajtónak.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/opl-gallery-2.jpg') }}" alt="OnePageLink" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Oldalépítő</h5>
                            <div class="project__gallery-modal__description">
                                <p>Ezen a felületen tudják a művészek szerkeszteni az oldalaikat. Ehhez nincs szükségük semmiféle design készségre, minden sablonokból tevődik össze. Ugyanakkor, megfelelő testreszabhatóságot is biztosítunk, hogy az ügyfelek ki tudják élni kreatív énüket.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns has-text-centered">
                    <a class="btn is-large is-pearl" data-dismiss="modal">Galéria bezárása</a>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
    <div class="modal__backdrop"></div>
@endpush



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
                    "name": "Főoldal"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Projektjeink"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "OnePageLink esettanulmány"
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
    "description": "A OnePageLink egy electronic press kit építő, aminek segítségével művészek menedzselni tudják a promóciós anyagaikat.",
    "headline": "OnePageLink esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Startup, Laravel, Vue",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "OnePageLink esettanulmány",
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
                "name": "Főoldal"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Projektjeink"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "OnePageLink esettanulmány"
            }
        }
    ]
}
</script>
@endpush