@section('title', 'Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?')
@section('description', 'Ebben a cikkben bemutatjuk, mi a technikai adósság, mit tehetünk annak minimalizálása érdekében, és hogyan kezeljük a már felhalmozódott technikai adósságot.')
@section('preview_image', route('generate-cover', ['title' => 'Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-07-21 12:00:00">2020 június 21</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>517 milliárd dollár. Ritkán látunk ekkora összeget, ezért leírom számjegyekkel is: $517 000 000 000. Az ott 9 darab 0-ás. Ekkora volt a CISQ (Consortium for IT Software Quality) szerint<a href="https://www.it-cisq.org/the-cost-of-poor-quality-software-in-the-us-a-2018-report/The-Cost-of-Poor-Quality-Software-in-the-US-2018-Report.pdf" target="_blank"><sup>1</sup></a> a technikai adóssága az USA-nak, 2018-ban.</p>
                            <p>A fentiek alapján nyugodtan megállapíthatjuk, hogy a technikai adósság drága mulatság. Ugyanakkor fontos is, a technológiai ipar nagyon sokat foglalkozik a témával. Sőt, már mi is érintettük párszor a blogunkon (pl. <a href="{{ localizedRoute('blog.show', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">itt</a> vagy <a href="{{ localizedRoute('blog.show', ['slug' => 'miert-ne-halogasd-a-digitalis-transzformaciot']) }}">itt</a>). Ennek ellenére az iparágon kívül kevesen tudják mi is az a technikai adósság. Ez a cikk nekik szól.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-technical-debt.jpg') }}" alt="A technikai adósság drága mulatság" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Mi az a technikai adósság?</h2>
                            <p>Valaki adósának lenni nem jó érzés. Minél inkább eladósodunk, annál nagyobb rajtunk a nyomás. Ha beszéltél már valakivel, akinek sikerült törlesztenie az adósságát, akkor nagy valószínűséggel felszabadító érzésként élte ezt meg.</p>
                            <p>A technikai adósság nagyon hasonlít ebben a pénzügyi adósságra. Ugyanúgy mint a pénzügyi adósság esetében, a technikai adósság esetében is kamatot kell fizetnünk. Ez a kamat több formát is felvehet: magas karbantartási, support vagy jogi költségek, régi rendszerek lecserélésének költsége vagy a motiválatlan munkaerő.</p>
                            <p>Ha nem fizetjük vissza az adósságunkat mielőtt újabb fejlesztéseket végeznénk, folyamatosan akadályokba fogunk ütközni és újabb "kölcsönöket" kell majd felvegyünk. Minél több az adósságot halmozunk fel, annál lassabban tudunk majd előre haladni, míg végül teljesen meg nem fojtja a fejlesztési törekvéseinket.</p>
                            <p>Ezt a jelenséget nevezzük szoftver entrópiának. A termodinamika második törvénye azt mondja, hogy egy zárt rendszer rendezetlensége nem csökkenhet, csak szintben maradhat vagy növekedhet. Ennek a rendezetlenségnek a mértéke az entrópia. Ivar Jacobson<a href="https://archive.org/details/objectorientedso00jaco/page/69/mode/2up" target="_blank"><sup>2</sup> </a>szerint egy szoftveres rendszer is hasonlóan viselkedik: ha folyamatos karbantartás és beavatkozás nélkül módosítunk egy szoftvert, annak növekedni fog a rendezetlensége, vagyis an entrópiája.</p>
                            <p>Egy jó példa lehet erre egy ERP rendszer. Egy ilyen rendszer a folyamatosan változó üzleti igények miatt folyamatosan módosul. Ha nincs a dokumentáció frissítve, nincs a forráskód karbantartva vagy nincsenek elvégezve a kötelező technológiai frissítések, akkor bekerülünk abba az ördögi körbe, hogy a rendszert továbbfejleszteni sem lehet már, mert akkora költséggel járna. Ilyenkor nem marad más opciónk mint a "kukázni és cserélni" módszerhez folyamodni.</p>
                            <p>A technikai adósság egy előremutató mérőszám, amely segítségével számszerűsíthető azoknak a döntéseknek a hatása, amikor egy gyorsabb vagy olcsóbb megoldást választottuk egy rendszer bevezetésénél vagy karbantartásánál.</p>
                            <p>Képzeljük el a meglévő IT rendszereinket… most pedig képzeljük el, hogy néznének ki azok a rendszerek, ha most kezdenénk el 0-ról felépíteni egy ideális rendszert. Mennyibe kerülne nekünk a meglévő rendszereinket úgy átalakítani, hogy az ideális rendszerhez jussunk? Ez a költség a technikai adósság.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-what-leads-to-technical-debt.jpg') }}" alt="Mi okozza a technikai adósságot?" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Mi vezet a technikai adósság felhalmozásához?</h2>
                            <p>A technikai adósság felhalmozásához általában egy kompromisszumos döntés meghozatala vezet. Ez a kompromisszum fakadhat időhiány vagy költségcsökkentés miatt.</p>
                            <p>Ilyen döntés lehet például:</p>
                            <ul class="list has-bullets">
                                <li>Szoftverfrissítések elhalasztása;</li>
                                <li>Hardver élettartamának túlnyújtása;</li>
                                <li>Nem megfelelő szoftvertervezés – amikor a szoftver nem elég rugalmas ahhoz, hogy a változó üzleti igényeknek teret adjon;</li>
                                <li>Kód refaktorálásának késleltetése – ahogy az üzleti igények változnak, a forráskód egyes részei nehezen karbantarthatóak és kevéssé hatékonyak lesznek, ezért refaktorálásra lesz szükség. Minél többet halasztjuk a refaktorálást, annál nagyobb lesz a kódbázis és a technikai adósság;</li>
                                <li>Dokumentáció frissítésének elmaradása – ahogy változik a kódbázis és a funkcionalitás, a fejlesztői, illetve felhasználói dokumentáció azonnali frissítésére lesz szükség. Ha ez nem történik meg, értékes időt veszítünk amikor újbóli változásokat kell majd eszközölnünk, esetleg kerülő vagy "ragtapasz" megoldások születnek.</li>
                            </ul>
                            <p>A technikai adósság elkerülhetetlen. A szoftver és hardver is rohamtempóban fejlődik, naponta új funkcionális és biztonsági frissítések jelennek meg, ezért már csak pusztán az idő elteltével nő a technikai adósságunk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-the-cost-of-technical-debt.jpg') }}" alt="A technikai adósság visszatükrözi a pénzügyi adósság hatását" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">A technikai adósság költsége</h2>
                            <p>A technikai adósság eredendően része a szoftvereknek. Az adósság csökkentése viszont nem igazán számszerűsíthető, ezért az IT-nak nehéz feladata van, amikor be kell mutassa a vezetőségnek, hogy miért szükséges mégis erre erőforrásokat fordítani.</p>
                            <p class="has-margin-b30">A legkönnyebb talán az, ha megnézzük milyen feladatok tartoznak egy szoftver karbantartásához és üzemeltetéséhez. Herb Krasner, a CISQ jelentés szerzője 4 típusú karbantartást különböztet meg.</p>
                            <h3 class="heading-4 has-margin-b15">Korrektív karbantartás</h3>
                            <p>Egy új szoftver verzió élesítése utáni hibák elhárítása. A technikai adósság nagyban hozzájárul a korrektív karbantartás szükségességéhez: minél nagyobb az adósságunk, annál nehezebben átlátható és karbantartható a kód, ami újabb hibákhoz vezet.</p>
                            <p class="has-margin-b30">A karbantartási költségeknek körülbelül 20%-át képezik a korrektív karbantartási feladatok.</p>
                            <h3 class="heading-4 has-margin-b15">Adaptív karbantartás</h3>
                            <p>Az adaptív karbantartás a változó igények miatt szükséges módosításokhoz kapcsolódik. Hasonlóan a korrektív karbantartáshoz, a technikai adósság jelentősen befolyásolja mennyire könnyű az adaptív módosításokat végrehajtani.</p>
                            <p class="has-margin-b30">Az adaptív karbantartás teszi ki a karbantartási költségek mintegy 50%-át.</p>
                            <h3 class="heading-4 has-margin-b15">Perfektív karbantartás</h3>
                            <p>A hibák elhárításán és a változó igények miatti módosításokon kívül, sok erőforrást igényel egy szoftver tökéletesítése, a használhatóság és teljesítmény javítása. A technikai adósság, korrektív és az adaptív karbantartáshoz hasonlóan befolyásolja azt, hogy mennyire könnyű ezeket a továbbfejlesztéseket megejteni.</p>
                            <p class="has-margin-b30">A perfektív karbantartás költségei 25%-át képezik a karbantartási összeköltségnek.</p>
                            <h3 class="heading-4 has-margin-b15">Preventív karbantartás</h3>
                            <p>Preventív karbantartásnak nevezzük az alvó hibák felderítését és javítását, még mielőtt ezek effektív hibákká válnának. Ilyen feladat például a szoftverfrissítés, a biztonsági frissítés vagy a refaktorálás is, de ide sorolhatjuk akár a dokumentáció naprakészen tartását is.</p>
                            <p>A preventív karbantartás csupán 5%-át teszi ki a teljes karbantartási költségnek, de ha elhanyagoljuk, akkor jelentősen megnövelheti a korrektív, az adaptív és a perfektív karbantartások idejét és költségét. Ez látható az alábbi grafikonon.</p>
                            <figure>
                                <img src="{{ asset('media/blog/technical-debt-how-to-build-future-proof-it-systems-statistic-hu.png') }}" alt="Hogyan legyenek időtálló IT rendszereink - 1. statisztika" />
                            </figure>
                            <p>A fenti direkt költségnövekedésen a technikai adósságnak egyéb, közvetett hatásai is vannak, mint például:</p>
                            <ul class="list has-bullets">
                                <li>A hosszabb fejlesztési ciklusok miatt a felhasználók többet kell várjanak egy új funkcióra vagy módosításra, ezért csökken az ügyfélelégedettség;</li>
                                <li>Nehezebb megfelelő fejlesztőket találni a projekthez, magasabbak a betanítási költségek;</li>
                                <li>Csökken az IT rendszerek biztonsága, ki leszünk szolgáltatva a támadásoknak.</li>
                            </ul>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Hogyan minimalizáljuk a technikai adósságot?</h2>
                            <p>Azt már megállapítottuk, hogy a technikai adósságtól nem lehet teljesen megszabadulni. Ellenben van pár olyan módszer amit a fejlesztő csapatok alkalmazhatnak, hogy jobb legyen a kód minősége és ezáltal redukálják a technikai adósság növekedési ritmusát:</p>
                            <ul class="list has-bullets">
                                <li>Minden szoftver, keretrendszer és dokumentáció legyen folyamatosan frissítve;</li>
                                <li>Automata tesztelés – az automata tesztek segítenek a fejlesztőknek abban, hogy nyugodtabban hozzányúljanak a kódhoz, legyen szó egy egyszerű módosításról, továbbfejlesztésről vagy refaktorálásról. Automata tesztek nélkül ezek a változtatások nagy kockázattal járnak, ami megnövekedett fejlesztési időhöz és költségekhez vezet;</li>
                                <li>Code review – a code review az a folyamat, amikor a fejlesztők egymás kódját ellenőrzik, mielőtt az kikerül egy éles környezetbe. Egy friss pár szem hamarabb észreveszi azokat a hibákat, amik később gondot jelenthetnek;</li>
                                <li>Gyökér-ok elemzés – ha valamilyen hibával vagy nem az elvárásoknak megfelelő működéssel találkozunk, szakítsunk időt a gyökér-ok megkeresésére, elemezzük és dokumentáljuk, majd változtassunk a folyamatainkon annak érdekében, hogy ugyanaz a probléma ne fordulhasson ismét elő.</li>
                            </ul>
                            <p class="has-margin-t60">Ha már felgyűlt az adósságunk, akkor fontos kérdés az, hogy miként menedzseljük. A technikai adósság menedzselésére is van módszer:</p>
                            <ul class="list has-bullets">
                                <li>Dokumentáljuk a technikai adósságot – minden szükséges javítást, frissítést vagy refaktorálást részletesen dokumentáljunk. Ez az első lépés annak érdekében, hogy tényleg sor kerüljön arra, hogy foglalkozzunk vele, így mindenki tudatában van az adósság mértékével és a vezetőség is nagyobb valószínűséggel fordít majd erőforrásokat a problémák kezelésére;</li>
                                <li>Refaktorálás – ha már felhalmozódott valamennyi technikai adósság, akkor azt csak refaktorálás által tudjuk csökkenteni. Refaktorálás esetén célszerű a nagyobb értékű adósságot priorizálni: azok a kódrészletek amik gyakran változnak, előnyt kell élvezzenek azokkal szemben amikhez egyáltalán vagy csak ritkán nyúlunk. Nem érdemes viszont addig várni, amíg annyi nagy értékű adósság összegyűl, hogy utána hetekig csak a refaktorálással foglalkozzunk. Inkább határozzuk meg, hogy a karbantartási és fejlesztési munkákra szánt idő hány százalékát különítjük el refaktorálásra (a technikai adósság mértékétől és komplexitásától függően 5%-33%-ot ajánlott elkülöníteni).</li>
                            </ul>
                            <p>Vannak olyan (ritka) esetek is amikor nem érdemes a technikai adóssággal. Ilyen lehet például, hogy egy termék kivezetés alatt áll, vagy ha a termék csak egy prototípus vagy MVP aminek a célja csupán egy <a href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}">ötlet vagy célpiac validálása</a>.</p>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Következtetések</h2>
                            <p>A technikai adósság elkerülhetetlen, minden IT projekt kötelező velejárója. Nem tudomást venni róla, vagy folyamatosan halasztgatni a közbeavatkozást előbb vagy utóbb megbénítja a rendszert és egyúttal a vállalkozást is.</p>
                            <p>Éppen ezért a jó fejlesztő csapatok nem halmozzák fel a technikai adósságot, hanem időben menedzselik ezt. A szoftvereket és dokumentációt folyamatosan frissítik, biztosítják a kód minőségét automata tesztek és code review-k segítségével és a továbbfejlesztések mellett folyamatosan időt szakítanak a kódbázis refaktorálására is.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?'])
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
    "datePublished": "2020-07-21T12:00:00",
    "dateModified": "2020-07-21T12:00:00",
    "description": "Ebben a cikkben bemutatjuk, mi a technikai adósság, mit tehetünk annak minimalizálása érdekében, és hogyan kezeljük a már felhalmozódott technikai adósságot.",
    "headline": "Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-technical-debt-how-to-build-future-proof-it-systems-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "IT, ERP, Vállalatirányítási rendszer, Szoftver, Technikai adósság",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?",
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
                "name": "Technikai adósság avagy hogyan legyenek időtálló IT rendszereink?"
            }
        }
    ]
}
</script>
@endpush
