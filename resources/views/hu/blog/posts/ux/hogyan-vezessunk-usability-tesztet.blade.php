@section('title', 'Hogyan vezessünk usability tesztet?')
@section('description', 'A usability testing a termékfejlesztés egy elengedhetetlen lépése. De mi zajlik le egy ilyen teszt során és hogyan vezényeljünk le egy ilyen tesztet?')
@section('preview_image', route('generate-cover', ['title' => 'Hogyan vezessünk usability tesztet?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan vezessünk usability tesztet?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-09-29 10:00:00">2022 szeptember 29</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>A usability testing (használhatósági tesztelés) visszajelzésként szolgál egy termék vagy szolgáltatás értékeléséhez, tesztelve azt potenciális felhasználókkal. A kutató (amelyet "facilitátornak" vagy "moderátornak" neveznek) felkéri a résztvevőt, hogy feladatokat végezzen el, általában felhasználói felületek használatával. A moderátor figyelemmel kíséri a résztvevő viselkedését a feladatok végzése során és meghallgatja a visszajelzéseket.</p>
                            <p>A kutatástól függően a használhatósági tesztelési célok változhatnak, de általában a következőket foglalják magukban:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>A termék vagy szolgáltatás tervezésével vagy felhasználói élményével kapcsolatos problémák azonosítása;</li>
                                <li>Fejlesztési lehetőségek feltárása;</li>
                                <li>A célfelhasználó viselkedésének és preferenciáinak felfedezése és megismerése.</li>
                            </ul>
                            <p class="has-margin-b60">A használhatóság tesztelése elengedhetetlen, mert az iteratív tervezési folyamat nélkül, amelyet a potenciális felhasználók megfigyelései és a tervezéssel való interakciója vezérel, az UX tervezők nem tudnak megfelelő felhasználói élményt létrehozni.</p>
                            <h2 class="heading-2 has-margin-b30">A használhatósági tesztelés elemei</h2>
                            <h3 class="heading-3 has-margin-b30">Facilitátor (moderátor)</h3>
                            <p class="has-margin-b60">A facilitátor vezeti végig a résztvevő(ke)t a folyamat lépésein. Utasításokat ad, válaszol a résztvevők kérdéseire és további kérdéseket tesz fel. A facilitátor gondoskodik arról, hogy a eredmények jó minőségű, érvényes adatok legyenek, fokozottan ügyelve arra, hogy ne befolyásolja a résztvevő viselkedését a teszt során. Ennek az egyensúlynak az elérése kihívást jelent és komoly gyakorlatot igényel.</p>
                            <h3 class="heading-3 has-margin-b30">Feladatok</h3>
                            <p>A használhatósági teszt során a résztvevők olyan feladatokat hajtanak végre, amelyeket felhasználóként a valós életben is végrehajthatnak. A vizsgálati kérdésektől és a használhatósági tesztelés típusától függően ezek lehetnek rendkívül specifikusak vagy nyílt kimenetelűek.</p>
                            <p class="has-margin-b60">A usability teszt során a feladat megfogalmazása kulcsfontosságú. A feladat megfogalmazásában előforduló kisebb pontatlanságok miatt a résztvevők könnyen félreértelmezhetik a feladatokat, vagy befolyásolhatják a feladat végrehajtását (ez a pszichológiai jelenség, amelyet primingnek neveznek).</p>
                            <h3 class="heading-3 has-margin-b30">Résztvevők</h3>
                            <p class="has-margin-b60">A résztvevők a vizsgált termék vagy szolgáltatás potenciális felhasználói. A használhatósági tesztelés során a résztvevőket gyakran arra kérik, hogy hangosan mondják el cselekedeteiket (think-aloud method). A feladatok befejezése után a résztvevőketet arra kérheti a moderátor, hogy írják le gondolataikat és cselekedeteiket. Ennek a technikának a célja, hogy megértse a résztvevők viselkedését, céljait, gondolatait és motivációit.</p>
                            <h2 class="heading-2 has-margin-b30">A usability teszt folyamata</h2>
                            <h3 class="heading-3 has-margin-b30">Résztvevők toborzása</h3>
                            <ol class="list has-margin-b30 has-padding-l30">
                                <li>
                                    <p>Dolgozz ki toborzási kritériumokat</p>
                                    <ul class="list has-bullets has-margin-b30">
                                        <li>Ismerd meg a felhasználóid. Dolgozz ki <a href="{{ localizedRoute('blog.show', ['slug' => 'perszonak-a-termekfejlesztesben']) }}" target="_blank">perszónákat</a>;</li>
                                        <li>Dönts a résztvevők számáról;</li>
                                        <li>Határozz meg szűrő (screening) kérdéseket.</li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Keresd meg a megfelelő ösztönzőket</p>
                                    <ul class="list has-bullets has-margin-b30">
                                        <li>Pénzbeli ösztönzők — A felhasználók részvételre való ösztönzésének legegyszerűbb módja a pénzbeli ösztönzők felajánlása. Az ösztönző mértékének meghatározásakor vegyük figyelembe a résztvevők munkakörének szintjét, a a szükségleteiket, tartózkodási helyüket és teszt hosszát is.</li>
                                        <li>Nem pénzbeli ösztönzők — A teszt részvételért cserébe ígért termék sokszor csábítóbb lehet a diákok vagy a nyugdíjasok számára – azok számára, akiknek nem kell a teszt miatt elszakadi kivenni a jövedelemszerző munkától. Ezeknek az embereknek felajánlhatunk egy ingyenes példányt vagy kedvezményt a tesztelés alatt álló szoftver vagy más termék kiadása után.</li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Toborozz!</p>
                                    <ul class="list has-bullets">
                                        <li>A legegyszerűbb módja a résztvevőket toborzásának, ha odamész, ahol a perszónának megfelelő felhasználóid vannak. Releváns Facebook csoportokkal vagy Reddit subredditekkel jól tapasztalataink vannak.</li>
                                        <li>Ha egy mellékterméken vagy az alaptevékenységéhez kapcsolódó szolgáltatáson dolgozol, jelenlegi ügyfeleid potenciálisan tökéletes résztvevői lehetnek a usability tesztnek.</li>
                                        <li>Végül olyan platformokat is használhatsz, mint a <a href="https://www.testingtime.com/en/" target="_blank">Testing Time</a> vagy a <a href="https://www.userlytics.com" target="_blank">Userlytics</a>, hogy költség ellenében toborozz résztvevőket.</li>
                                    </ul>
                                </li>
                            </ol>
                            <h3 class="heading-3 has-margin-b30">Előkészületek</h3>
                            <p>Mikor először vesszük fel a kapcsolatot a felhasználókkal, a bemutatkozónk legyen rövid és tiszteletteljes. Az, hogy a válaszadó úgy dönt, hogy beszél-e a moderátorral vagy sem, a bemutatkozótól függ. Nem szeretnénk, hogy azt gondolják, hogy telemarketingesek vagyunk és meg akarjuk őket arról győzni, hogy vásároljanak valamit, ezért világosan meg kell határoznunk, hogy kik vagyunk és mi a célunk.</p>
                            <p>Próbáljuk meg elkerülni, hogy túl sok információt adjunk ki a termékről, amit tesztelni akarunk, így a résztvevők nem tudnak előre felkészülni, különösen akkor, ha új felhasználókkal tesztelünk.</p>
                            <p>Használjunk egy kérdőívet arra, hogy kiszűrjük azokat a felhasználókat akiket végül mégsem szeretnénk interjúztatni. A kérdőívben kezdjünk gyors szűrő kérdésekkel. Kérdezzük meg a válaszadó beosztását vagy munkaköri leírását, továbbá életkorát, nemét, foglalkoztatási státuszát, a háztartás jövedelmét, nyelvtudását vagy fogyatékossággát, amennyiben ezek relevánsak. Egyes válaszadók úgy válaszolhatnak a szűrési kérdésekre, hogy bebiztosítsák a helyüket a teszten. Tegyünk fel kérdéseket oly módon, hogy a válaszadók ne tudják, melyik válasz felel meg a kritériumainknak.</p>
                            <p>Küldjük ki meghívókat, amelyek tartalmazzák a következő információkat: helyszín, a teszt rövid menetrendjét, adott esetben az esetleges ösztönzőket. Hívjuk fel a figyelmet arra, hogy a tesztelés folyamatát videót rögzítünk és említsük meg, ha biztosítunk étkezést vagy frissítőket személyes teszt esetén.</p>
                            <p class="has-margin-b60">A usability teszt forgatókönyv a sikeres használhatósági teszt elvégzéséhez szükséges lépések terve. Fontos a feladatok és kérdések előkészítése és javasolt a kollégákkal való átnézése.</p>
                            <div class="columns">
                                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                                    <div class="avatar is-raspberry"></div>
                                    <h4 class="heading-4">Design és UX problémák azonosítása</h4>
                                </div>
                                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                                    <div class="avatar is-pearl"></div>
                                    <h4 class="heading-4">Fejlesztési lehetőségek feltárása</h4>
                                </div>
                                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                                    <div class="avatar is-tangerine"></div>
                                    <h4 class="heading-4">A felhasználók viselkedésének megismerése</h4>
                                </div>
                            </div>
                            <h3 class="heading-3 has-margin-b30">A teszt</h3>
                            <p>Győződjünk meg arról, hogy egyaránt rögzítjük a felhasználó által végzett műveleteket (a képernyőn egy szoftver esetében vagy a fizikai termék használata közben) és a résztvevő arckifejezéseit.</p>
                            <p class="has-margin-b60">A facilitátornak feladatokat kell adnia a résztvevőnek és figyelemmel kell kísérnie a résztvevő viselkedését. A feladatok elvégzése során oda kell figyelnie az esetleges visszajelzésekre és jegyzeteket kell készítenie. Tegyen fel nyomon követő kérdéseket. Bátorítsa a résztvevőket, hogy a feladatok elvégzése során szóbeli visszajelzést adjanak a felülettel kapcsolatban a legjobb eredmény elérése érdekében.</p>
                            <h3 class="heading-3 has-margin-b30">Kvalitatív vs. kvantitatív tesztelés</h3>
                            <p>Az UX iparág különbséget tesz a kvalitatív és a kvantitatív usability tesztelés között.</p>
                            <p>A kvalitatív (minőségi) usability teszt célja, hogy információkat és betekintést gyűjtsön arról, hogy a felhasználók hogyan lépnek kapcsolatba a termékkel vagy szolgáltatással. A minőségi usability teszt a hatékonyabb módszer a felhasználói élményekkel kapcsolatos problémák feltárására. A kvantitatív usability teszt képest ez a fajta tesztelés elterjedtebb.</p>
                            <p>A kvantitatív usability teszt célja olyan mutatók összegyűjtése, amelyek leírják a felhasználói élményt. A feladat sikeres végrehajtásának aránya és a feladatra fordított idő a két leggyakrabban gyűjtött mérőszám a kvantitatív tesztelés során. Ez a hatékonyabb módszer a referenciaértékek összegyűjtésére.</p>
                            <p class="has-margin-b60">A vizsgálat típusától függően a usability teszthez eltérő számú résztvevőre lehet szükség. Tapasztalatunk azt mutatja, hogy öt résztvevő elegendő egy felhasználói csoport tipikus kvalitatív kutatásához, a termék legelterjedtebb problémáinak nagy részének feltárásához.</p>
                            <h3 class="heading-3 has-margin-b30">Remote vs. helyszíni</h3>
                            <p>A remote használhatósági tesztek népszerűek, mert kevesebb időt és pénzt igényelnek, mint a helyszíni tesztelések. Kétféle remote usability teszt létezik: moderált és nem moderált.</p>
                            <p>A remote moderált tesztek nagyon hasonlóan működnek, mint a helyszíni tesztek. A moderátor továbbra is kommunikál a résztvevővel és felkéri, hogy végezzen el feladatokat, annak ellenére, hogy különböző fizikai helyeken tartózkodnak. A moderált tesztek általában képernyőmegosztó szoftverekkel, például a Google Meet vagy a Zoom segítségével hajthatók végre.</p>
                            <p class="has-margin-b60">Remote, moderálatlan tesztek esetén a facilitátor és a résztvevő nem úgy kommunikál egymással, mint személyesen, vagy mint a moderált tesztelés esetén. A kutató írásbeli feladatokat állít fel a résztvevő számára egy dedikált online távtesztelő eszköz segítségével. A résztvevő ezután egyedül végzi el ezeket a feladatokat, saját ütemezése szerint. A feladat utasításait és az esetleges további kérdéseket a tesztelő eszköz közvetíti. Miután a résztvevő elvégezte a feladatát, a kutató videórögzítést kap a munkamenetről.</p>
                            <h2 class="heading-2 has-margin-b30">Utószó</h2>
                            <p>Bár sokan támogatják a felhasználói tesztelést, a valódi tervezési projektekben nagyon ritkán fordul elő. De miért különbözik annyira az elmélet és a gyakorlat? Főként azért, mert a vállalat képtelen azonnali, kis teszteket végrehajtani, amikor tervezési döntésekkel szembesül. Kevés vállalat tudja elvégezni ezeket a teszteket a gyorsan változó fejlesztési projektek időkeretein belül. A tesztelés szokatlan és értékes eseménnyé válik, amely a legjobb esetben is csak egyszer fordul elő minden projektben.</p>
                            <p>A usability tesztet folyamatosan elhalasztják, általában addig, amíg a teljes design terv elkészül. Annak ellenére, hogy a tapasztalatok következetesen bizonyítják, hogy a legtöbb projekt többszöri tesztelést és újratervezést igényel az elfogadható felhasználói élmény elérése érdekében, és annak ellenére, hogy erős bizonyítékok azt mutatják, hogy lényegesen olcsóbb a projekt korai szakaszában felfedezett problémák kijavítása, mint a projekt végén, ez a gyakorlat még mindig elterjedt.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'How to use the value proposition canvas?'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.nocipal')
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
    "datePublished": "2022-09-29T10:00:00",
    "dateModified": "2022-09-29T10:00:00",
    "description": "A usability testing a termékfejlesztés egy elengedhetetlen lépése. De mi zajlik le egy ilyen teszt során és hogyan vezényeljünk le egy ilyen tesztet?",
    "headline": "Hogyan vezessünk usability tesztet?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Hogyan vezessünk usability tesztet?']) }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Usability Test, Használhatósági teszt, UX",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan vezessünk usability tesztet?",
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
                "name": "Hogyan vezessünk usability tesztet?"
            }
        }
    ]
}
</script>
@endpush
