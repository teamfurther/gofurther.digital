@section('title', 'Pivot vagy nem pivot: az itt a kérdés')
@section('description', 'Mi az a pivot? Hány fajtája van? Mikor pivotoljunk? Tartsatok velünk, hogy mindezt megtudjátok!')
@section('preview_image', route('generate-cover', ['title' => 'Pivot vagy nem pivot: az itt a kérdés']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Pivot vagy nem pivot: az itt a kérdés</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-03-14 10:00:00">2022 március 14</time> &middot; 7 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">korábbi cikkekben</a> végigmentünk a termékfejlesztés különböző szakaszain. Minden ilyen szakasz egy vagy több iterációja az <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">Építs-Mérj-Tanulj</a> ciklusnak. Ha minden jól megy, akkor a ciklus végén hipotéziseink megerősítést kapnak és ezek a szakaszok szépen következnek egymás után.</p>
                            <p>De a gyakorlatban ez ritkán van így. Legtöbb esetben a fejlesztési szakasz végén a hipotéziseink meg fognak dőlni és kisebb vagy nagyobb fókuszváltásra, azaz pivotra lesz szükségünk.</p>
                            <p>Gondoljunk úgy az Építs-Mérj-Tanulj ciklusra, mint egy “hajókormányra”. A ciklus minden egyes iterációjában az a célunk, hogy teszteljük azokat a feltételezéseket, amik elengedhetetlenek a termékünk sikerességéhez. Ha a feltételezéseink igaznak bizonyulnak, tovább evezünk nyugodt vizeken a következő termékfejlesztési szakasz felé. Ellenben, ha a feltételezéseink megdőlnek, akkor élesen oldalra kormányzunk, új feltételezéseket állítunk fel és elölről kezdjük azt a termékfejlesztési szakaszt amiben éppen vagyunk. Ezt nevezzük pivotnak.</p>
                            <p class="has-margin-b60">Hogy melyik irányba érdemes kormányozni vagyis, hogy milyen típusú pivotot érdemes választani az attól függ, hogy az eddigi kísérleteinkben <a href="{{ localizedRoute('blog.show', ['slug' => 'hipotezisek-a-termekfejlesztesben']) }}" target="_blank">milyen típusú feltételezéseink</a> dőlnek meg. Ha a perszóna hipotézisünk dől meg, akkor egy ügyfélszegmens vagy ügyfélszükséglet típusú pivotot érdemes bevetni. Ha pedig az érték hipotézis dől meg, akkor egy zoom-in vagy zoom-out pivot működhet.</p>
                            <h2 class="heading-2 has-margin-b30">A pivot 10 típusa</h2>
                            <h3 class="heading-3 has-margin-b30">Ügyfélszegmens pivot</h3>
                            <p>Az ügyfélszegmens pivot esetében a termékfejlesztő csapat egy adott ponton rájön, hogy bár valós felhasználók egy valós problémáját oldják meg, ezek a felhasználók nem azok, akiknek eredetileg a megoldást szánták. Más szóval, a probléma hipotézis valós, a perszóna hipotézis viszont nem.</p>
                            <p class="has-margin-b60">Ügyfélszegmens pivoton esett át az AirBnB is, aki eredetileg konferencia résztvevőknek ajánlott szállást. Hamar rájöttek, hogy ez a modell nem fenntartható így megnyitották a platformot olyan utazóknak is, akik olcsóbb szállást és autentikus, helyi tapasztalatokat kerestek.</p>
                            <h3 class="heading-3 has-margin-b30">Ügyfélszükséglet pivot</h3>
                            <p>Ahogy egyre jobban megismerjük a felhasználóinkat, gyakran azzal szembesülünk, hogy a probléma amit meg szeretnénk oldani, nem is annyira szignifikáns számukra. Viszont ahogy interakcionálunk velük, ahogy interjúztatjuk őket, felfedezünk más szükségleteket amiket meg tudnánk számukra oldani.</p>
                            <p>Gyakran ahhoz, hogy megoldjuk ezt a problémát nem kell mást tennünk mint kicsit alakítani a termékünkön. Más esetekben egy teljesen új termékre lesz szükség.</p>
                            <p class="has-margin-b60">Egy ilyen pivoton esett át a Starbucks is, amelyik úgy kezdte meg a működését, hogy presszógép és kávébab kereskedéssel foglalkozott, de idővel rájöttek, hogy a vásárlók szívesebben fogyasztják a helyben készített kávéjukat.</p>
                            <h3 class="heading-3 has-margin-b30">Zoom-in pivot</h3>
                            <p>A zoom-in pivot esetében az eddigi kísérleteink valószínüleg azt mutatták, hogy az <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-hasznald-a-value-proposition-canvast']) }}" target="_blank">értékajánlatunk</a> a termék egyetlen funkciójában rejlik. Tehát, egy olyan funkcióra fogunk 100%-ban koncentrálni, ami eddig csupán egy része volt a terméknek.</p>
                            <p class="has-margin-b60">Jó példa a zoom-in pivotra a Burbn esete. A Burbn lehetővé tette, hogy a felhasználói bejelentkezzenek kedvenc helyeikre és onnan képet osszanak meg. Kevin Systrom, a Burbn egyik társalapítója rájött, hogy az emberek jobban kedvelik a fotómegosztó funkciót, mint az applikáció többi részét, ezért ezt kiemelte egy külön appba. Így született meg az Instagram.</p>
                            <h3 class="heading-3 has-margin-b30">Zoom-out pivot</h3>
                            <p>Ellenkező esetben, egyetlen funkció gyakran nem elég, hogy a teljes értékajánlatot meg tudja valósítani. Ilyenkor ami eddig a teljes termék volt, az új termék egyetlen funkciójává redukálódik.</p>
                            <p class="has-margin-b60">A LinkedIn úgy indult mint egy népszerű, de limitált funkciókat ajánló platform, amely lehetővé tette az üzleti szféra szereplőinek, hogy létrehozzanak egy üzleti profilt és megosszák a változásokat munkaköreikben és az üzleti elismeréseiket. Később ez kibővült közösségi funkciókkal, aminek következtében a felhasználók több időt töltöttek az oldalon.</p>
                            <h3 class="heading-3 has-margin-b30">Platform pivot</h3>
                            <p>A platform pivottal főleg az internet és szoftvercégek világában találkozunk. Gyakran egy applikáció működéséhez a startup létrehoz egy platformot is, amin az applikáció fut. Később kiderül, hogy az ügyfeleiket jobban érdekli maga a platform.</p>
                            <p>Fordítva is működhet. A startup maga a platform, aminek a népszerűsítéséhez a csapat létrehoz egy applikációt, az ú.n. “gyilkos applikációt”. Az applikáció viszont, nagyobb népszerűségnek örvend mint a platform, ezért megkapja a teljes fókuszt.</p>
                            <p class="has-margin-b60">A PayPal, bár korábban is létezett, akkor lett igazán népszerű amikor az eBay megvásárolta, azzal a céllal, hogy az eBay platformon belül a Paypal legyen az alapértelmezett fizetési mód. 2014-ben az eBay úgy döntött, hogy inkább független brandként és termékként fejleszti tovább a PayPal-t.</p>
                            <h3 class="heading-3 has-margin-b30">Üzleti struktúra pivot</h3>
                            <p>Általában két különböző üzleti struktúrát különböztetünk meg: magas árrés, alacsony mennyiség modell, ami általában a business-to-business (B2B) modellnek feleltetünk meg, illetve az alacsony árrés, magas mennyiség modell, amit általában fogyasztói termékekkel és a business-to-consumer (B2C) modellel azonosítunk. Az üzleti struktúra pivot esetében ezen két modell között mozog a vállalkozás.</p>
                            <p class="has-margin-b60">Ilyen pivoton esett át a <a href="https://techcrunch.com/2016/05/09/how-foursquare-hopes-to-hit-profitability" target="_blank">Foursquare</a> is. Az applikáció segítségével a felhasználók be tudtak jelentkezni olyan helyeket ahol megfordultak: egy vendéglőben, egy látványosságnál vagy akár egy városban és ezekről véleményt tudtak írni. A Foursquare a 2010-es években volt nagyon népszerű, de miután csökkent a népszerűsége, pivotolt és inkább a nagyvállalati ügyfeleket helyezte fő fókuszba, akiknek az éves során felhalmozott tömérdek mennyiségű adatot kezdte el értékesíteni.</p>
                            <h3 class="heading-3 has-margin-b30">Értékteremtési-mód pivot</h3>
                            <p>Az értékteremtési-mód pivot pontosan az, amit a neve sejtet. Hogyan teremt a vállalkozásunk értéket. Legtöbb esetben ez egyenlő azzal, hogy milyen módon lesz a vállalkozásnak bevétele, hogyan monetizálunk. Ez a megközelítés azonban eléggé korlátolt, hiszen értéket lehet másképp is teremteni. Egy segélyszervezet például elsősorban társadalmi értéket teremt.</p>
                            <p>A Duolingo, mindenki kedvenc nyelvtanuló applikációja eredetileg úgy tervezte, hogy a felhasználói együttes agyi kapacitását egy fordító szolgáltatásra használja fel. Ez lényegében úgy működött volna, hogy a felhasználók egy szintjüknek megfelelő mondatot kaptak, hogy lefordítsák. Az applikáció segített a nyelvtanban és egyes szavak jelentésében. A felhasználó ezáltal tanult, a Duolingo pedig a háttérben összefüggő szövegeket fordított.</p>
                            <p class="has-margin-b60">Ez a funkció azonban sosem jutott tovább egy béta verziónál. Helyette, a Duolingo inkább <a href="https://techcrunch.com/2017/04/21/duolingo-launches-paid-subscriptions-as-it-struggles-to-monetize-its-service/" target="_blank">bevezetett</a> egy reklámokon és egy feliratkozási modellen alapuló rendszert.</p>
                            <h3 class="heading-3 has-margin-b30">Növekedési motor pivot</h3>
                            <p>Egy startup esetében három növekedési motort tudunk megkülönböztetni: a virális, a ragadós és a fizetett növekedési motort. Ennek a pivotnak a során, ezek között a növekedési motorok közt váltanak a startupok, annak érdekében, hogy gyorsabban vagy nyereségesebben növekedjenek.</p>
                            <p class="has-margin-b60">Gyakran, de nem feltétlenül, a növekedési stratégiában történő változás velejárója az értékteremtési-módban való változás is.</p>
                            <h3 class="heading-3 has-margin-b30">Értékesítési csatorna pivot</h3>
                            <p>Az értékesítési csatorna nem más, mint ahogy elérjük az ügyfeleinket, vagy ahogy az ügyfelek először kapcsolatba kerülnek a termékünkkel. Egy értékesítési csatorna pivot annak a felismerése, hogy ugyanazt a megoldást hatékonyabban el tudjuk ügyfeleinkhez juttatni, egy másik csatornán keresztül.</p>
                            <p class="has-margin-b60">Ezzel a jelenséggel találkozhatunk mostanában a szórakoztatóiparban. A zene, a filmek és a játékok is tíz évvel ezelőtt még a rádión, a televízión és DVD-kölcsönzőkön keresztül jutott el otthonainkba. Manapság ezeket mind felhő alapú streaming szolgáltatókon érjük el, mint a Spotify, a Netflix és társai, illetve a Steam.</p>
                            <h3 class="heading-3 has-margin-b30">Technológiai pivot</h3>
                            <p>Időnként ugyanazt a problémát akarjuk megoldani, ugyanazon felhasználók számára, azonban egy másik technológiával. Ezt általában már érettebb vállalkozások alkalmazzák, annak érdekében, hogy árban vagy teljesítményben hatékonyabbak legyenek. Ilyen tekintetben inkább egy inkrementális változás, mint pivot.</p>
                            <p class="has-margin-b60">Sok tekintetben technológiai pivotnak tekinthetjük az autógyártók új meghajtási technológiákkal való próbálkozásait, bár a hibrid- és elektromos meghajtású járművek részben más ügyfélszükségleteknek is tesznek eleget.</p>
                            <h2 class="heading-2 has-margin-b30">Mikor pivotoljunk?</h2>
                            <p>Egy startup esetében beszélhetünk egy kifutási időről (runway), ami nem más mint az a működési idő amit a rendelkezésre álló tőke megenged. Ezalatt az idő alatt kell egy startup bizonyítson, hogy újabb tőkét vonhasson be, önfenntartóvá váljon, vagy végleg bezárja a kapuit.</p>
                            <p>Ha egy startupnak $1M dollár tőkéje van, és $50e-t költ havonta, akkor 20 hónapos runway-el rendelkezik. Ha elkezd elfogyni a tőke, akkor a runway-t két módon lehet meghosszabbítani. Újabb tőkebevonással, vagy költségcsökkentéssel.</p>
                            <p>A költségcsökkentésnek viszont megvan az a veszélye, hogy olyan költségeket is csökkentsünk, amik szükségesek ahhoz, hogy hamarabb átérjünk az Építs-Mérj-Tanulj ciklus egy iterációján. Mivel lelassul a validált tanulási folyamat, annyit érünk el csupán, hogy a startupunk lassabban fog tönkremenni.</p>
                            <p>Ezért a runway-t érdemesebb inkább pivotokban számolni, mintsem időben. Hány pivotot tudunk még megejteni, mielőtt elfogy a tőke? Ha így tekintünk rá, a runway-t egy harmadik módon is meg tudunk hosszabbítani: érjünk el minden pivothoz gyorsabban.</p>
                            <p>Ennek ellenére legtöbb startup mégis túl későn jut el egy pivothoz. Ennek oka lehet az, hogy:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>a <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-merjuk-a-termekunk-sikeresseget']) }}" target="_blank">hiúsági metrikák</a> félrevezetik a vállalkozót</li>
                                <li>rosszul lettek megfogalmazva <a href="{{ localizedRoute('blog.show', ['slug' => 'hipotezisek-a-termekfejlesztesben']) }}" target="_blank">a feltételezések</a></li>
                                <li>a vállalkozó fél attól, hogy elvessen egy ötletet, mielőtt annak bőséges ideje volt igazolnia magát</li>
                            </ul>
                            <p>Az alternatíva viszont ennél sokkal borúsabb – elfogy a tőke és lehúzzák a rolót.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Pivot vagy nem pivot: az itt a kérdés'])
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
    "datePublished": "2022-03-14T10:00:00",
    "dateModified": "2022-03-14T10:00:00",
    "description": "Mi az a pivot? Hány fajtája van? Mikor pivotoljunk? Tartsatok velünk, hogy mindezt megtudjátok!",
    "headline": "Pivot vagy nem pivot: az itt a kérdés",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-to-pivot-or-not-to-pivot-en.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Pivot",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Pivot vagy nem pivot: az itt a kérdés",
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
                "name": "Pivot vagy nem pivot: az itt a kérdés"
            }
        }
    ]
}
</script>
@endpush
