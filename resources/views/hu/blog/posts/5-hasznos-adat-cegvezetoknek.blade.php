@section('title', '5 adat, amit ismerned kell cégvezetőként')
@section('description', 'Ebben a cikkben megmutatjuk, melyek azok az adatok, amelyeket minden vezetőnek ismernie kell hogy stratégiát tudjon alkotni, és hogyan segít egy szoftver ezek megismerésében.')
@section('preview_image', asset('media/blog/cover-5-things-every-business-owner-should-know-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-5-things-every-business-owner-should-know.png') }}" srcset="{{ asset('media/blog/featured-5-things-every-business-owner-should-know-768w.png') }} 768w, {{ asset('media/blog/featured-5-things-every-business-owner-should-know-1000w.png') }} 1000w" sizes="100vw" alt="5 adat, amit minden cégvezetőnek tudnia kell" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">5 adat, amit minden cégvezetőnek tudnia kell</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-11-02 12:00:00">2019 november 2</time> &middot; 9 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/cBra0OXQzGc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p>Az üzlet gyorsabban változik, mint valaha. Azok a cégvezetők és vállalkozások, akik nincsenek tisztában a legfontosabb mérőszámokkal és nem tudnak ezek alapján informált döntéseket hozni, stratégiát alkotni, lemaradnak versenytársaikkal szemben.</p>
                            <p class="has-margin-b60">Ma szeretnénk megmutatni nektek, melyek azok az adatok, amelyeket minden vezetőnek ismernie kell, és hogyan segít egy szoftver ezek megismerésében.</p>
                            <p>Korábban írtunk már arról, hogyan segítenek különböző szoftverek a céges folyamatok rendszerezésében és automatizálásában. Szó esett már <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-alakitsuk-at-cegunket-papirmentesse']) }}">a dokumentumkezelő rendszerről</a>, <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-segit-egy-szoftver-a-termelesi-folyamatok-optimalizalasaban']) }}">a termelésirányító szoftverekről</a>, valamint <a href="{{ localizedRoute('blog.show', ['slug' => 'mikor-hasznaljunk-crm-rendszert']) }}">a CRM-ről</a>, amely segít az ügyfélkapcsolat-kezelésben.</p>
                            <p>Ezek mellett több különböző szoftver működhet még egy vállalkozáson belül, mint például a pénzügyi szoftverek, beszerzési szoftverek, készletkezelők vagy HR szoftverek. Ha ezek nem elszigetelve működnek, hanem együttesen alkotnak egy integrált rendszert, akkor már egy vállalatirányítási rendszerről vagy ERP-ről beszélhetünk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-erp-modules-hu.png') }}" alt="Az ERP egy integrrált rendszer amiben több különböző más szoftvermodul működik együtt" />
                            </figure>
                            <p>Egy ERP rendszerben rengeteg adat van jelen, ezek feldolgozására az üzleti intelligencia modul szolgál. Angolul business intelligence software-nek, vagy BI-nak szoktuk nevezni.</p>
                            <p>Mint az talán a nevéből is kiderül, egy üzleti intelligencia szoftver feladata az, hogy az adatainkból olyan beszámolókat és előrejelzéseket gyártson, melyekből cégvezetőként vagy adatelemzőként könnyen tudunk döntéseket hozni.</p>
                            <p>Kedvenc meghatározásunk az üzleti intelligenciára egy Bill Cabiró nevű úriembertől származik. Ő egyszerűen azt mondja: "az üzleti intelligencia azt jelenti, hogy a megfelelő információt eljuttassuk a megfelelő emberekhez, a megfelelő időben."</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-bill-cabiro-bi-quote-hu.png') }}" alt="Az üzleti intelligencia azt jelenti, hogy a megfelelő információt eljuttassuk a megfelelő emberekhez, a megfelelő időben." />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">És miben más a BI mint a Big Data?</h2>
                            <p>Manapság sokat hallunk a Big Datáról. A Big Data kifejezést gyakran felváltva használjuk az üzleti intelligenciával. Nem csoda, hiszen Big Data és a BI között sok a hasonlóság, de alapvetően más-más a céljuk.</p>
                            <p>A Big Data az adatok generálásának, tárolásának és folyamatos feldolgozásának a folyamata. Az üzleti intelligencia szoftverek feladata az adatok elemzése, melyből később részletes riportokat és előrejelzéseket gyárt.</p>
                            <p>Vegyünk példának egy éléskamrát, amelyben milliárdnyi hozzávaló van. A Big Data feladata az, hogy a hozzávalók ne vesszenek el és mindig rendszerezve maradjanak. A BI feladata az, hogy ezekből az alapanyagokból egy könnyen elkészíthető receptet készítsen nekünk.</p>
                            <p>A BI-nak alapjában véve nincs szüksége több ezer terabyte-nyi adatra. Viszont a Big Datával együttesen használva a BI eszközök sokkal több adatot tudnak felhasználni, így pontosabb elemzéseket kapunk. De lássuk is akkor, mi is az a legfontosabb 5 adat, melyet megtudhatunk egy BI szoftver segítségével.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-bigdata-vs-bi.jpg') }}" alt="Big Data vs Business Intelligence" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">1. Ismerd a pénzügyi adataid</h2>
                            <p>Az első és legfontosabb, amit cégvezetőként ismerned kell, azok a pénzügyi adatok. És most nem azokról az adatokról beszélünk, melyek az éves mérleghez szükségesek, hanem azokról amik alapján hosszú távon lehet tervezni.</p>
                            <p>Vezetőként folyamatosan tudnod kell hogy áll a céged cash flow szempontból, mi a tendencia az eladásokban, mekkora árréssel kell dolgoznotok vagy mikor engedhettek meg magatoknak egy nagyobb befektetést.</p>
                            <p>Egy BI szoftver be tudja gyűjteni ezeket az adatokat a könyvelő szoftverből vagy ERP-ből, elvégzi a számításokat és vizuálisan, átláthatóan megjeleníti különböző ábrákon. Neked már csak a megfelelő következtetéseket kell levonni.</p>
                            <p>Pénzügyi adatok terén végtelen a lehetőség, melyet egy BI szoftver nyújtani képes. Egyik legrégebbi ügyfelünknek fejlesztettünk egy olyan pénzügyi előrejelző modult, mely az elmúlt évek adatait feldolgozva kiszámítja a várható eladásokat és hogy mi az az ideális árrés, amivel maximalizálhatjuk a profitot. Magyarul, hogy meddig emelhetjük az árat, anélkül hogy csökkenjenek az eladásaink.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-finances.jpg') }}" alt="Ismerd a pénzügyi adataid" />
                                <figcaption>Ismerd a pénzügyi adataid</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">2. Ismerd a vásárlóidat</h2>
                            <p>Ha már ismerjük a pénzügyeinket, akkor felállíthatunk magunknak célokat. Ha megvannak a céljaink, akkor ki tudjuk pontosan számolni, hány vásárlóra van szükségünk. Azonban ezt nem minden esetben olyan egyszerű kiszámolni. Sok paraméter közrejátszhat, mint például az átlag kosárérték vagy a visszatérő ügyfelek százaléka. Ez a második dolog, amit tudnod kell vezetőként: ismerd a vásárlói adatokat.</p>
                            <p>A BI szoftver át tudja emelni a CRM-ből ezeket a vásárlói adatokat. Ezt követően ki tudja számolni például az átlag kosárértéket, de abban is tud segíteni, hogy hogyan tudjuk ezt növelni. Ez a BI eszközök egyik legismertebb felhasználása.</p>
                            <p>Tegyük fel, hogy sportszereket árulunk. Ha minden második teniszütő mellé vásárolnak labdát is, a BI szoftver ezt jelezni tudja nekünk. Ezt beépíthetjük az értékesítési folyamatunkba, így növelve a kosárértéket.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-customers.jpg') }}" alt="Ismerd a vásárlóidat" />
                                <figcaption>Ismerd a vásárlóidat</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">3. Tudd, hogyan teljesít a csapatod</h2>
                            <p>A harmadik dolog, amit cégvezetőként tudnod kell, az az, hogy hogyan teljesítenek az alkalmazottaid. De ahhoz, hogy szükség esetén figyelmeztetni tudd a csapatod, alá kell számokkal is támasztani a gyengébb teljesítményt.</p>
                            <p>Ehhez először is meg kell határoznod, hogy melyek legyenek ezek a számok. Minden munkakör esetében mások lesznek, erre nincs ökölszabály. Nagyon figyelj oda viszont, hogy ezek a mérőszámok relevánsak legyenek!</p>
                            <p>Egy értékesítő esetében az eladások száma vagy a generált árbevétel fontos számok lehetnek, de valószínű, nem a legjobb indikátorok, ami a teljesítményét illeti.</p>
                            <p>Gondoljunk bele, hogy az egyik értékesítőnk mindig alapból a legnagyobb árengedménnyel ad el egy terméket. Egyértelműen több terméket fog értékesíteni és az összárbevétel is nagyobb lesz az ő esetében, mint más értékesítők esetében.</p>
                            <p>De ennek meglehetnek a saját veszélyei is. Ha rendszeresen így értékesít, túlterheli a gyártórészleget, és elkezdenek megcsúszni a rendelések. Könnyen meglehet, hogy ha kevesebbet adna el, de magasabb árréssel, akkor év végén magasabb lenne a profitunk.</p>
                            <p>Ezért érdemes a BI szoftvert úgy beállítani, hogy egy értékesítő esetében az eladások száma és az árbevétel mellett az éves átlagprofitot is feltüntesse.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-team.jpg') }}" alt="Tudd, hogyan teljesít a csapatod" />
                                <figcaption>Tudd, hogyan teljesít a csapatod</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">4. Ismerd a termelési adatokat</h2>
                            <p>Ha már a gyártásról írtunk, a negyedik dolog, amit vezetőként tudnod kell, a termelési adatok. Ezekről már részletesebben írtunk a <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-segit-egy-szoftver-a-termelesi-folyamatok-optimalizalasaban']) }}">termelésirányítási szoftverekről szóló cikkben</a>, ezért most csak összefoglaljuk mit tud ehhez hozzátenni az üzleti intelligencia.</p>
                            <p>A BI szoftver feldolgozza a gépektől és a termelésirányítási rendszerből kapott adatokat és olyan hasznos információkat jelenít mint az óránként legyártott termékek száma, a selejt százalék, az átlag karbantartási idők vagy az anyagfeltöltéshez szükséges idők. Ezek alapján optimalizálni tudod a gyártási folyamatokat és maximalizálni a profitot.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-production-data.jpg') }}" alt="Ismerd a termelési adatokat" />
                                <figcaption>Ismerd a termelési adatokat</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">5. Tudd, hol vannak a veszteségek</h2>
                            <p>Az utolsó dolog, amit megemlítenénk, hogy mindig tudd, hol vannak a veszteségek. Számunkra ez az egyik legfontosabb adat, így mindig tudjuk, hogy hol lehet javítani a cégünk működésén. A jó dolog benne az, hogy sosem fogy el, mindig lesz olyan terület, amin javítani lehet.</p>
                            <p>Ezek a veszteségi adatok sok formában megjelenhetnek: lehet csökkenő a produktivitásunk, magas az alkalmazottak ingadozása vagy az el nem adott termékek száma.</p>
                            <p>Ez az a terület, amiben a legnagyobb segítséget tudja egy BI nyújtani. Mivel minden fontos indikátort láthatunk a dashboard-okon, könnyű kiszúrni a negatív tendenciákat vagy azokat a pontokat, ahol nem teljesítünk az elvárásainknak megfelelően.</p>
                            <p>A veszteségek témakörben a kedvenc üzleti intelligencia esettanulmányunk a Tescóhoz köthető. Egy akkora élelmiszerlánc számára, mint amilyen a Tesco, folyamatos kihívás a romlandó termékek eladása a szavatossági idő lejárta előtt.</p>
                            <p>Erre jelentett megoldást, az 1995-ben bevezetett Clubcard. Bár látszatra a Clubcard egy egyszerű lojalitás program, a célja igazából az volt, hogy a Tesco jobban megértse az ügyfelei vásárlási szokásait. A kártya segítségével a vásárlók kétharmadáról részletes információkat kapnak, melyeket egy BI szoftver segítségével elemeznek. Nem véletlen, hogy amikor a Tescótól kedvezményes kuponokat kapunk, azok között a kedvenc termékeink mellett olyanokat is találunk, amelyeket a Tesco sürgősen el akar tüntetni a polcairól.</p>
                            <figure>
                                <img src="{{ asset('media/blog/5-things-losses.jpg') }}" alt="Tudd, hol vannak a veszteségek" />
                                <figcaption>Tudd, hol vannak a veszteségek</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Összefoglaló</h2>
                            <p>Ismételjük át, melyek a legfontosabb adatok, amikre érdemes odafigyelned a vállalkozásodban.</p>
                            <p>A legfontosabbak a pénzügyi adataid és a vásárlóidat érintő számok. Ezt követően fontos, hogy meghatározd a pontos kritériumokat, melyek alapján az alkalmazottaidat értékeled.</p>
                            <p>Amennyiben gyártással is foglalkozol, akkor a termelési számok segítenek megérteni és optimalizálni a gyártási folyamatokat.</p>
                            <p class="has-margin-b60">Végül, de nem utolsósorban, mindig tudnod kell, hol vannak veszteségek, hogy folyamatosan fejleszthess a cégeden.</p>
                            <p>Reméljük, ez a videó segített abban, hogy megértsd, hogyan tudja egy business intelligence szoftver ezeket az adatokat rendszerezni és elemezni. Amennyiben szeretnél többet megtudni arról, hogyan lehet a Te vállalkozásodban is egy üzleti intelligencia szoftvert használni, keress fel minket!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => '5 adat, amit minden cégvezetőnek tudnia kell'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.peterilles')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription')
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "author": {
        "@type": "Person",
        "name": "Peter Illes"
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
    "datePublished": "2019-11-02T12:00:00",
    "dateModified": "2019-11-02T12:00:00",
    "description": "Ebben a cikkben megmutatjuk, melyek azok az adatok, amelyeket minden vezetőnek ismernie kell hogy stratégiát tudjon alkotni, és hogyan segít egy szoftver ezek megismerésében.",
    "headline": "5 adat, amit ismerned kell cégvezetőként",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-5-things-every-business-owner-should-know-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "BI, Business Intelligence, Üzleti Intelligencia, Big Data, Analytics, Analitika, ERP, Vállalatirányítás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "5 adat, amit ismerned kell cégvezetőként",
    "publisher": {
        "@type": "Organization",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions"
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
                "@id": "{{ localizedRoute('blog') }}",
                "name": "Blog"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}",
                "name": "5 adat, amit ismerned kell cégvezetőként"
            }
        }
    ]
}
</script>
@endpush
