@section('title', 'nJoy esettanulmány')
@section('description', 'A DAI-TECH, az nJoy márka mögött álló gyorsan növekvő vállalat nagyon rövid idő alatt felülmúlta a meglévő szoftverinfrastruktúráját és egyedi beépített megoldásra volt szüksége. Minket bíztak meg, hogy olyan termékéletciklus-kezelő eszközt fejlesszünk, amely megfelel sajátos igényeiknek.')
@section('preview_image', asset('media/projects/njoy-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">nJoy - The Hive</h2>
        <h3 class="project__intro">
            A Hive egy termékéletciklus-menedzsment szoftver, az nJoy egyedi igényeire szabva.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>A DAI-TECH-et 2010 júniusában alapították abból a közös célból, hogy valami mást és jobbat nyújtsanak az akkori piaci kínálatnál. nJoy márkanév alatt olyan fogyasztói informatikai termékeket fejlesztenek ki, amelyeket önálló termékként értékesítenek a kiskereskedelmi láncok polcain. Jelenleg az nJoy 10 közép- és kelet-európai piacon van jelen.</p>
                    <p>Minket a Hive nevű termékéletciklus-menedzsment (PLM) rendszer fejlesztésével bíztak meg. A Hive egy teljesen személyre szabott PLM szoftver, ami számos ERP funckióval is bővült az idő elteltével.</p>
                    <div class="project__stats">
                        <div class="project__stat">
                            <span>20<small>%</small></span> gyorsabb<br />termékfejlesztés
                        </div>
                        <div class="project__stat is-downward">
                            <span>30<small>%</small></span> kevesebb<br />munkaóra
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/njoy-logo.svg') }}" alt="nJoy" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        A Hive eredetileg egy PLM modulból állt, amit 2011 második felében vezettünk be. A munka azóta sem állt le: az utóbbi {{ date('Y') - 2011 }} évben CRM, értékesítés, logisztika, előrejelzés (forecasting), szerviz és call center modulokkal bővült, teljesen digitalizálva az nJoy belső munkafolyamatait.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns has-margin-b90">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Hogyan oldottuk meg az nJoy fő üzleti kihívásait</h4>
                        <p>Eggyűttműködtünk az njoy vezetőségével, valamint az IT és design csapatokkal annak érdekében, hogy megértsük a munkafolyamataikat, és lefordítsuk ezt az üzleti logikát egy könnyen használható és skálázható rendszerre. Ez a rendszer az nJoy, a beszállítók, a szervizközpontok és a forgalmazók együttműködési csomópontjaként működik.</p>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A termékfejlesztés megbízhatatlan volt</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A Hive bevezetése előtt, az nJoy több különböző rendszerre és Excel táblára hagyatkozott a termékmenedzsmentben. Ez a folyamat fölöslegesen időigényes volt és rengeteg hibára adott lehetőséget.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A megoldást egy <strong>testreszabott termékéletciklus-menedzsment eszköz</strong> fejlesztése jelentette, amely lehetővé teszi az nJoy számára, hogy átlássa egy termék életének összes fontos lépését, a disztribúción és logisztikán keresztül, a fejlesztéstől a gyártásig.</p>
                        <p>Az automatikus kontrollpontok, a jóváhagyási mechanizmusok, a folyamatok és feladatok egyértelmű jelentése, mind lényegesen megkönnyítik egy termék státuszának utánkövetését.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/njoy-overview-1-hu.gif') }}" alt="nJoy - The Hive - A termékfejlesztés megbízhatatlan volt" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A beszállítókkal való kommunikáció több csatornán keresztül történt</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A Hive fejlesztése előtt, a beszállítókkal való kommunikáció emailen, vagy Skypeon keresztül történt. Ennek következtében az információ szét volt szórva és fontos adatok vesztek el.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>A megoldásunk az volt, hogy a teljes <strong>beszállítói kommunikációt integráljuk</strong> a szoftverbe. A beszállítók mostantól aktívan résztvehetnek a folyamatban, hozzáférhetnek az információkhoz és megjegyzéseket tehetnek a termékekkel kapcsolatban. Mivel minden adat egyetlen szoftverben van, így soha nem vész el semmilyen információ!</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/njoy-overview-2-hu.gif') }}" alt="nJoy - The Hive - A beszállítókkal való kommunikáció több csatornán keresztül történt" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A feladatmegosztás strukturálatlan volt</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>A termékfejlesztésen kívül is rengeteg feladatot kell elvégezni. Az nJoy hamarosan szükségét érezte, hogy ezeket a feladatokat is nyomon tudja követni.</p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>Lefejlesztettünk egy olyan <strong>feladatkezelő rendszert</strong>, amely tökéletesen illeszkedik a többi modulhoz.</p>
                        <p>A megszokott funkciókon kívül (mint az értesítők, prioritások és felelősök), minden modul előre meghatározott szabályok és folyamatok alapján, automatikusan létre tud hozni feladatlistákat egy csapattag, vagy akár egy teljes csapat számára.</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/njoy-overview-3-hu.gif') }}" alt="nJoy - The Hive - A feladatmegosztás struktúrálatlan volt" />
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
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                        <cite class="project__testimonial__author">DEMETER Adorian</cite>
                        <span class="project__testimonial__title">Ügyvezető igazgató, nJoy</span>
                        <blockquote class="project__testimonial__content">
                            <p>"Nem tudnám elképzelni, hogyan működne a termékfejlesztésünk a Hive nélkül. Bevezetése óta az új termékek fejlesztésének ideje 20%-al csökkent, minden adatunk rendszerezett és könnyen utánkövethető."</p>
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
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Tervezz mindig előre
                    </h5>
                    <p>Tudtuk, hogy az IT igények arányosan fognak növekedni a céggel, ezért a rendszernek meg kell tudnia birkózni a növekvő adatmennyiséggel és az új komponensek gyors bevezetésével.</p>
                    <p>Ezért, a rendszert egy alaposan megtervezett moduláris architektúrán és egy olyan dedikált szerveren futtatjuk, amely lehetővé teszi a gyors skálázhatóságot.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Sose becsüld alá az adatmigrációt
                    </h5>
                    <p>Az alapos igényfelmérésnek köszönhetően, kiderítettük mik az nJoy jövőbeli tervei a szoftverrel. Ennek köszönhetően azt is tudtuk, hogy nagy mennyiségű adat migrációjára lesz szükség a meglévő régi rendszerekből.</p>
                    <p>Ennek az információnak a tudatában, egy konkrét adatmigrációs stratégiával vágtunk bele a projektbe. Kidolgoztunk egy adatstratégiát, egy robusztus adatbázis struktúrát és API dokumentációt, annak érdekében, hogy elkerüljük az adatok duplikációját és az információ szigetek kialakulását.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/njoy-gallery.jpg') }}" alt="Galéria megnyitása" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-1.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Termékfejlesztés</h5>
                            <div class="project__gallery-modal__description">
                                <p>Egy új termék (vagy Part Number) létrehozását segíti a kategória rendszer, amely a mellékelt képen látható.</p>
                                <p>Minden kategória esetében, az nJoy termékfejlesztők létre tudnak hozni attribútumokat a kategória szerkesztőben. Például, egy számítógép monitor esetében létrehozhatnak egy átmérő vagy rezolúció attribútumot. Az attribútomuk mellett, minden kategóriának van egy part number formázási szabálya is.</p>
                                <p>Miután minden attribútum és szabály be lett állítva, egy új termék létrehozása csupán egy pár érték listából való kiválasztásával megoldható. A part number, illetve a feladatlisták és a termékfejlesztési folyamat automatikusan létrejönnek.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-2.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Termék dashboard</h5>
                            <div class="project__gallery-modal__description">
                                <p>A termék dashboard a Hive központja. Ezen a képernyőn található az összes fejlesztés alatt lévő termék és a hozzájuk tartozó feladatok.</p>
                                <p>A termékek státusza és állapota színkódolva van a könnyebb áttekintést segítve. Továbbá, lehetőséget kapunk a termékek szűrésére bármilyen termékattribútum alapján, így akár testreszabott riportokat is generálhatunk.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-3.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Termék aktivitás</h5>
                            <div class="project__gallery-modal__description">
                                <p>Azonkívül, hogy milyen feladatokat kell még elvégezni egy terméken, azt is tudnunk kell, hogy milyen feladatok lettek már elvégezve.</p>
                                <p>A Hive minden felhasználói lépést elment: szerkesztéseket, törléseket, státusz cseréket vagy fájl frissítéseket. Így az nJoy csapattagjai nyugodtan dolgozhatnak, tudva, hogy bármilyen hibát vissza lehet keresni és a helyes változatot helyre lehet állítani.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-4.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Megrendelések</h5>
                            <div class="project__gallery-modal__description">
                                <p>Miután lezárult egy termékfejlesztés, indulhat a gyártási folyamat. A megrendeléseket egyenesen a Hiveból lehet a beszállítók számára elküldeni.</p>
                                <p>A gyártók és egyéb beszállítók ezt követően belépnek a Hiveba, letöltik a termék adatlapot, az anyagjegyzéket és egyéb adatokat. Az igazi kollaboráció ezen a ponton kezdődik: kommentelhetnek és visszacsatolást adhatnak a különböző termékverziókra.</p>
                                <p>Miután egy termék véglegesnek tekinthető minden fél által, a megrendelés lezárható és indulhat a gyártás.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-5.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Logisztika</h5>
                            <div class="project__gallery-modal__description">
                                <p>A gyártás megkezdésével elkezdenek megérkezni a termékek a raktárba.</p>
                                <p>A logisztika modul áttekinthetővé teszi a termékek bevételezésének, a raktármozgatásoknak és az eladott termékek kiszállításának kezelését.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/njoy-gallery-6.jpg') }}" alt="nJoy - The Hive" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Feladatkezelés</h5>
                            <div class="project__gallery-modal__description">
                                <p>Minden munkafolyamat több ismételhető feladatból áll. A termékfejlesztő csapatnak van egy folyamata, a tervező csapatnak pedig egy másik. A külső beszállítók, mint a gyártók, a szervizközpontok vagy call centerek is saját feladatokat kaphatnak.</p>
                                <p>Minden modulnak lehetősége van arra, hogy automatizáltan feladatlistákat hozzon létre mikor egy munkafolyamat elindul.</p>
                                <p>Az olyan feladatokat, amik nem tartoznak egy munkafolyamathoz sem, létre lehet manuálisan hozni és meg lehet jelölni egy kollégát felelősnek.</p>
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
                    "name": "nJoy esettanulmány"
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
    "description": "A DAI-TECH, az nJoy márka mögött álló gyorsan növekvő vállalat nagyon rövid idő alatt felülmúlta a meglévő szoftverinfrastruktúráját és egyedi beépített megoldásra volt szüksége. Minket bíztak meg, hogy olyan termékéletciklus-kezelő eszközt fejlesszünk, amely megfelel sajátos igényeiknek.",
    "headline": "nJoy esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "PLM, Product lifecycle management, ERP, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "nJoy esettanulmány",
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
                "name": "nJoy esettanulmány"
            }
        }
    ]
}
</script>
@endpush