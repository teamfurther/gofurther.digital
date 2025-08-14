@section('title', 'OnRobot esettanulmány')
@section('description', 'Ahogy az OnRobot marketing- és értékesítési céljai növekedtek, szükségük volt egy olyan weboldalra, amely lépést tud tartani, és lehetővé teszi csapatuk számára, hogy külső fejlesztők bevonása nélkül építsenek moduláris landing oldalakat, kampányokat indítsanak, és A/B teszteket futtassanak.')

@section('preview_image', asset('media/projects/onrobot-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">OnRobot.com</h2>
        <h3 class="project__intro">
            Villámgyors weboldal egy globális robotikai cég számára.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>Az OnRobot kis- és közepes gyártóvállalatok számára kínál kollaboratív robotalkalmazásokat anyagmozgatáshoz, gépkiszolgáláshoz, felületmegmunkáláshoz, minőségellenőrzéshez és összeszereléshez.</p>
                    <p>Ahogy marketing- és értékesítési céljaik növekedtek, olyan weboldalra volt szükségük, amely lépést tud tartani, és lehetővé teszi számukra, hogy moduláris landing oldalakat építsenek, kampányokat indítsanak, és A/B teszteket futtassanak külső fejlesztők bevonása nélkül.</p>
                    <div class="project__stats">
                        <div class="project__stat">
                            <span>70<small>%</small></span> lead növekedés<br />már az első héten
                        </div>
                        <div class="project__stat is-downward">
                            <span>2<small>x</small></span> gyorsabb<br />tartalomkészítés
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/onrobot-logo.svg') }}" alt="OnRobot" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Eredetileg 2018-ban készítettük el az OnRobot weboldalát, amely hat éven keresztül megbízhatóan szolgálta őket. Most azonban elérkezett az idő egy frissítésre. Egy olyan modern megoldásra volt szükség, amely újabb hat évre biztosítja az online jelenlétüket. Örömmel töltött el bennünket, hogy ismét minket bíztak meg az újratervezéssel, és folytathattuk az együttműködést.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">
                        A folyamat
                    </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column is-7-tablet">
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">1</div>
                        </div>
                        <div class="column is-10-mobile is-10-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Üzleti célok feltérképezése
                            </h5>
                            <p>Szorosan együtt dolgoztunk az OnRobot értékesítési és marketingcsapatával, hogy átfogó képet kapjunk aktuális céljaikról és kihívásaikról. Közösen azonosítottuk a legnagyobb fájdalompontokat, és egyértelmű KPI-okat határoztunk meg az új weboldalra.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-10-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                A meglévő weboldal elemzése
                            </h5>
                            <p>Olyan eszközök segítségével, mint a Microsoft Clarity és a Google Analytics, elemeztük a felhasználói viselkedést, hogy kiderítsük, mi működik jól és mi nem. Feltérképeztük az információs hierarchiát, és meghatároztuk a leghatékonyabb kommunikációs módszereket a látogatók felé.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-10-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Design system létrehozása
                            </h5>
                            <p>Az elemzések alapján egy újrhasználható stílus- és komponenskönyvtárat terveztünk, amely lehetővé teszi az OnRobot marketing- és tartalomszerkesztő csapatai számára, hogy önállóan, a márkához igazodva készítsenek új tartalmakat, fejlesztő vagy designer bevonása nélkül.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-2-tablet is-1-widescreen">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-9-tablet is-9-widescreen is-offset-1-widescreen">
                            <h5 class="heading-4">
                                Rugalmas technikai megoldás biztosítása
                            </h5>
                            <p>Miután elkészült a design rendszer, minden komponenst Statamic blokk-alapú szerkesztőjében építettünk meg. Azért választottuk a Statamic CMS-t, mert kiváló szerkesztői élményt nyújt, fájlalapú adattárolást és villámgyors statikus gyorsítótárat biztosít.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-hidden-mobile">
                    <img class="is-rounded" src="{{ asset('media/projects/onrobot-process.png') }}" alt="OnRobot - A folyamat" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="project__overview">
            <div class="container">
                <div class="columns has-margin-b30">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Fő kihívások</h4>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Tartalomkészítés egyszerűen, technikai tudás nélkül</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A régi weboldalon minden tartalomtípus fix sablonhoz volt kötve. Új szekciók hozzáadásához designerre és fejlesztőre is szükség volt, ami lelassította a tartalomgyártást.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A Statamic Bard szerkesztőjével rugalmas, a design rendszerre épülő egyedi tartalomblokkokat vezettünk be. Most a marketing- és szerkesztőcsapatok kódolás nélkül is képesek összetett oldalelrendezések létrehozására.</p>
                    </div>
                    <div class="column has-margin-b60">
                        <img class="is-rounded" src="{{ asset('media/projects/onrobot-overview-1.gif') }}" alt="OnRobot.com - Tartalomkészítés egyszerűen, technikai tudás nélkül" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Globális csapatnak globális megoldás</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>Az OnRobot 23 nyelven kezel tartalmakat, mindegyikhez külön szerkesztőcsapat tartozik. A frissítések, fordítások összehangolása és a verziók közötti konzisztencia megtartása komoly kihívást jelentett.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A Statamic többoldalas (multi-site) architektúrája lehetővé tette egy skálázható rendszer kialakítását lokalizált tartalommal, testreszabott hozzáféréskezeléssel és strukturált ellenőrzési-publikálási munkafolyamattal minden egyes nyelvhez.</p>
                    </div>
                    <div class="column has-margin-b60">
                        <img class="is-rounded" src="{{ asset('media/projects/onrobot-overview-2.png') }}" alt="OnRobot.com - Globális csapatnak globális megoldás" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Zökkenőmentes tesztelés különböző környezetekben</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A tartalom konzisztens kezelése a fejlesztői, staging és éles környezetek között nehézkes volt. Az új funkciókat gyakran elavult tartalommal tesztelték, ami pontatlan eredményekhez, kihagyott hibákhoz és lassú bevezetéshez vezetett.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A Statamic fájlalapú tartalomtárolása és Git-alapú automatizálása biztosítja, hogy minden környezet ugyanazt a naprakész tartalomverziót használja. Ez lehetővé teszi, hogy az új funkciókat mindig valós adatokkal teszteljék, javítva a minőséget és gyorsítva a bevezetést.</p>
                    </div>
                    <div class="column">
                        <img class="is-rounded" src="{{ asset('media/projects/onrobot-overview-3.png') }}" alt="OnRobot.com - Zökkenőmentes tesztelés különböző környezetekben" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <a class="project__testimonial__video" href="https://youtu.be/KutKlQievCA" target="_blank">
                            <img class="project__testimonial__picture" src="{{ asset('img/testimonials-christian-hummelgaard.png') }}" alt="OnRobot.com Christian Kuntz Hummelgaard testimonial" />
                            <div>
                                <span>Nézd meg a teljes ügyfélélmény videót</span>
                                <img src="{{ asset('img/waveform.gif') }}" />
                            </div>
                        </a>
                        <cite class="project__testimonial__author">HUMMELGAARD Christian Kuntz</cite>
                        <span class="project__testimonial__title">Global Digital Marketing Manager, OnRobot</span>
                        <blockquote class="project__testimonial__content">
                            <p>"A weboldal egy héttel ezelőtti indulása óta 70 - 100%-os növekedést tapasztaltunk az érdeklődők számában. (...) És még csak július közepe van! Ilyen megugrásra ilyenkor nem is számítottunk. Ez egy hihetetlen lezárása egy webfejlesztési projektnek."</p>
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
                        Tanulságok
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">Tanulságok a tartalommigráció során</h5>
                    <p>Alábecsültük annak összetettségét, hogy több ezer cikket és esettanulmányt migráljunk a régi SQL-alapú CMS-ből a Statamic fájlalapú rendszerébe. Eleinte LLM-eszközöket próbáltunk bevetni a gyorsításhoz, de ezek több problémát okoztak, mint amennyit megoldottak – így végül rengeteg kézi javításra volt szükség. Már a vége felé jártunk, mire rájöttünk, hogyan lehet ezeket tényleg hatékonyan használni 🙈.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">A korai stakeholder-bevonás gördülékenyebb folyamatot eredményez</h5>
                    <p>A projekt megerősítette azt, amit mindig is hittünk: ha a döntéshozókat már a kezdetektől bevonjuk, az egész folyamat simábban zajlik. Könnyebb összehangolni a célokat, gyorsabb döntéseket hozni, és elkerülni a kellemetlen meglepetéseket. Ez a tapasztalat ismét bebizonyította, hogy a korai elköteleződés kulcsfontosságú egy fókuszált és hatékony projekthez.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" href="https://onrobot.com" target="_blank">
            <img src="{{ asset('media/projects/onrobot-gallery.jpg') }}" alt="Látogasd meg a weboldalt" />

            <span class="btn is-large">Látogasd meg a weboldalt</span>
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
                    "name": "OnRobot esettanulmány"
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
    "description": "Ahogy az OnRobot marketing- és értékesítési céljai növekedtek, szükségük volt egy olyan weboldalra, amely lépést tud tartani, és lehetővé teszi csapatuk számára, hogy külső fejlesztők bevonása nélkül építsenek moduláris landing oldalakat, kampányokat indítsanak, és A/B teszteket futtassanak.",
    "headline": "OnRobot esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Weboldal, Webfejlesztés, UX design, UI design, Statamic, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "OnRobot esettanulmány",
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
                "name": "OnRobot esettanulmány"
            }
        }
    ]
}
    </script>
@endpush