@section('title', 'Steiger ERP esettanulmány')
@section('description', 'A Steiger képviselői felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamatukat és javítja ezek megbízhatóságát.')
@section('preview_image', asset('media/projects/steiger-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Steiger ERP</h2>
        <h3 class="project__intro">
            Szoftverünk segítségével a Steiger követni tudja a különböző részlegeken elvégzett munkákat: ügyfélkapcsolattól a gyártásig.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>
                        Alapjában véve a Steiger egy családi vállalkozás, amely 1994 óta több generáción át részt vett a fémfeldolgozó iparban.
                        2015-ben felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamatukat és javítja ezek megbízhatóságát.
                    </p>
                    <div class="project__stats">
                        <div class="project__stat is-downward">
                            <span>23<small>%</small></span> munkaóra<br />csökkenés
                        </div>
                        <div class="project__stat">
                            <span>73</span> mindennapi<br />felhasználó
                        </div>
                    </div>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img class="project__logo" src="{{ asset('media/projects/steiger-logo.svg') }}" alt="Steiger" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        Az ERP rendszer bevezetését 2016 júniusban fejeztük be. 11 hónap alatt megtérült a befektetés és a rendszer azóta is meghatározó szerepet játszik abban, ahogy a Steiger működik.
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
                        <h4 class="heading-1">Hogyan határoztuk és oldottuk meg a problémákat</h4>
                        <p>
                            A megismerési fázisban interjúkat tartottunk a Steiger technikai vezetőjével és gyártórészlegi munkásokkal. A cél az volt, hogy jobban megértsük hogyan járul hozzá mindegyik munkatárs és munkafolyamat a végső termék előállításához. <strong>A beszélgetések során, 3 fő problémát azonosítottunk.</strong> Ez segített abban, hogy azokra a funkciókra koncentrálhassunk, amik igazán fontosak voltak számukra.
                        </p>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Az árajánlatok összeállítása különösen időigényes volt</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Egy árajánlat összeállításához több mint 50 kritérium figyelembevételére és komplex számításokra volt szükség. Korábban ezeket manuálisan, több Excel táblázat segítségével állították össze a Steiger munkatársai.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Szorosan együttműködve a Steiger vezetőségével és az értékesítési csapattal <strong>leegyszerűsítettük a folyamatot</strong> a változók számának leredukálásával és az adatduplikációk megszűntetésével.
                        </p>
                        <p>
                            A végeredmény egy olyan megoldás lett, amely pontosan felbecsüli a projektek munkaigényét a régebbi projektek és a jelenlegi kapacitás alapján, illetve az anyagigényét, figyelembe véve a raktárkészletet.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/steiger-overview-1-hu.gif') }}" alt="Steiger - Az árajánlatok összeállítása különösen időigényes volt" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A raktárkészlet nem volt központosított</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Észrevettük, hogy a Steigernek nem volt egy olyan rendszere amivel követni lehetett a gyártásból megmaradt anyagokat. Ezért sok anyag előbb vagy utóbb selejtezésre került. Ez egy óriási veszteségforrás volt, amire sürgősen megoldást kellett találni.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Bevezettünk egy olyan <strong>beszerzési és leltározási rendszert</strong> amivel a Steiger könnyebben tudja menedzselni a beszerzéseket, értékelni tudja a beszállítókat és követni tudja az aktuális raktárkészleteket.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/steiger-overview-2-hu.gif') }}" alt="Steiger - A raktárkészlet nem volt központosított" />
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">A gyártási idők nem voltak mérve</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Észrevettük, hogy bár létezett erre egy korábbi rendszer, a munkások nem mérték a különböző munkákkal eltöltött időt. A probléma oka az volt, hogy mivel munkavédelmi kesztyűben dolgoztak, a csarnokban telepített táblagépekkel csak nehezen tudtak dolgozni.
                        </p>
                        <p>
                            Ennek következtében inkább nem használták ezeket a készülékeket, a vezetőség pedig fontos információktól esett el.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Kidolgoztunk egy olyan <strong>QR kód alapú rendszert</strong> aminek segítségével a munkások könnyedén és gyorsan tudták rögzíteni, hogy milyen munkát végeznek és milyen anyagokat használtak el. Ezekből az adatokból a rendszer napi összesítőket állít össze a vezetőség számára.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/steiger-overview-3.gif') }}" alt="Steiger - A gyártási idők nem voltak mérve" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
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
                        Kérdd ki mindenki véleményét
                    </h5>
                    <p>
                        Az egyik fő kihívásunk az volt, hogy az ott dolgozók elzárkóztak egy új szoftver bevezetésének ötletétől.
                    </p>
                    <p>
                        Miután interjúztattuk őket és pontosan megállapítottuk mik a fájdalompontjaik, sokkal könnyebb lett egy olyan megoldási javaslattal előállni, amit ők is elfogadtak.
                    </p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A vezetőségnek nincs mindig igaza
                    </h5>
                    <p>
                        A vezetőségnek sok olyan megoldási javaslata volt, ami merőben eltért az alkalmazottak igényeitől. Ez azért jelent problémát, mert nem ők lesznek a szoftver mindennapi felhaszálói.
                    </p>
                    <p>
                        Gyorsan megértettük, hogy a projekt sikerének érdekében, az összes érintett véleményét szem előtt kell tartanunk.
                    </p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-10-mobile is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        Nem könnyű egy szoftvert minden környezetre megtervezni
                    </h5>
                    <p>
                        Egy olyan felhasználó felület megtervezése, ami egyaránt használható az irodában, a gyártócsarnokban vagy menet közben mobiltelefonról, pontosan annyira bonyolult, mint amennyire hangzik.
                    </p>
                    <p>
                        Ebből kiindulva egy tapasztalt UX designer segítségét kértük a tervezéshez. Több tucat óra kutatás és közös tervezés eredményeként egy olyan design rendszert dolgoztunk ki, aminek segítségével minden létfontosságú adat kényelmesen elérhető minden környezetben.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/steiger-gallery.jpg') }}" alt="Galéria megnyitása" />

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
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/steiger-gallery-1.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Árajánlatok</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A Steiger legtöbb projektje hosszú és komplex. A projektek árkalkulációja pedig egy hasonlóan időigényes folyamat.
                                </p>
                                <p>
                                    Rengeteg szempontot kell figyelembe venni az árszámítás során: anyagszükségletek, többféle manuális és gépi megmunkálás, szállítás és helyszíni szerelés.
                                </p>
                                <p>
                                    Az új árajánlat-készítő modulnak köszönhetően, 4x gyorsabb egy árajánlat elkészítése a régi Excel táblázatok használatán alapuló módszerhez képest.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/steiger-gallery-2.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Beszerzés és leltár</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    Amint megkezdődik egy projekt, az első lépés az anyagbeszerzés. A beszerzés és leltár modul segítségével a Steiger lépésről lépésre követni tudja az anyagvásárlási folyamatot.
                                </p>
                                <p>
                                    A leltárrendszer nyomon követi a raktárkészleteket és előrejelzéseket gyárt az értékesítési csatornában lévő projektek alapján. Emellett jelzi a felhasználónak, ha egy projekthez felhasználható valamilyen raktáron lévő anyag.
                                </p>
                                <p>
                                    A beszerzési rendszer automatizálja az anyagvásárlási folyamatot: kiküldi az árajánlat bekérőket a beszállítóknak, megengedi hogy a beszállítók feltöltsék a saját árlistáikat és raktárkészleteiket, illetve kezeli a beszállítói minőségbiztosítást.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/steiger-gallery-3.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Időkövetés</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A gyártás megkezdésével több folyamat időkövetését is meg kell oldanunk: a manuális munkák, gépi munkák, anyagcserék és karbantartási idők folyamatát.
                                </p>
                                <p>
                                    A manuális munkák követésére egy QR kód alapú rendszert vezettünk be, aminek segítésével a munkások egyetlen szkenneléssel tudják az időt mérni a különböző munkafolyamatokon.
                                </p>
                                <p>
                                    Ezen kívül a gépekből is kinyerjük a gyártási adatokat, hogy kiszámoljuk az átlag anyagcsere időket és beidőzítsük a preventív karbantartást.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/steiger-gallery-4.jpg') }}" alt="Steiger ERP" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Műszerfal</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A Steiger ERP műszerfala egy álom egy ügyvezető igazgató számára, több tucat testreszabható mérőszámmal.
                                </p>
                                <p>
                                    Hogy csak egy párat említsünk: lead konverziós adatok, projekt határidők és költségvetések, gyártási adatok, HR riportok és pénzügyi előrejelzések.
                                </p>
                                <p>
                                    Ugyanakkor itt kaptak helyet az értesítések, a személyes feladatlisták és a vállalati kalendárium is.
                                </p>
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
                    "name": "Steiger ERP esettanulmány"
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
    "description": "A Steiger képviselői felvették velünk a kapcsolatot, hogy egy olyan rendszert dolgozzunk ki, amely automatizálja munkafolyamatukat és javítja ezek megbízhatóságát.",
    "headline": "Steiger ERP esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "ERP, Laravel",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Steiger ERP esettanulmány",
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
                "name": "Steiger ERP esettanulmány"
            }
        }
    ]
}
</script>
@endpush