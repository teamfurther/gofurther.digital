@section('title', 'Hogyan használd a value proposition canvas-t?')
@section('description', 'Miért ennyire fontos része az értékajánlat egy üzleti tervnek? Hogyan fogalmazd meg az értékajánlatodat? Hogyan segít ebben a value proposition canvas? Olvasd el a cikkünket, hogy minderre választ kapjál.')
@section('preview_image', route('generate-cover', ['title' => 'Hogyan használd a value proposition canvas-t?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan használd a value proposition canvas-t?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-05-18 10:00:00">2022 május 18</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">Az új termékek 72%-a nem felel meg az ügyfelek elvárásainak. Ebből következik, hogy 10 új piacra dobott termékből a vásárlókat 7 termék nem érdekli. Ennek nem kell így lennie. Erre való a <strong>Value Proposition Canvas (VPC — értékajánlat canvas)</strong>, egy eszköz, amivel vizualizáljuk, megtervezzük és teszteljük azt, hogy hogyan teremthetünk értéket az ügyfelek számára.</p>
                            <h2 class="heading-2 has-margin-b30">A VPC eredete</h2>
                            <p  class="has-margin-b60">A value proposition canvas ötlete a Business Model Canvas-ből származik, ami a teljes üzleti modellt ábrázolja vizuálisan, kiemelve a kulcsfontosságú stratégiai tényezőket. Ezek közül az egyik az ügyfélszegments, egy másik pedig az értékajánlat. Ez a két elem több helyet igényel a kifejtéshez, mint amennyit a Business Model Canvas lehetővé tesz, ezért a Value Proposition Canvas külön eszközként is létrejött.</p>
                            <h2 class="heading-2 has-margin-b30">Mi a Value Proposition Canvas?</h2>
                            <p class="has-margin-b60">A Value Proposition Canvas az ügyfelek problémáinak megértésére összpontosít és abban segít, hogy olyan termékeket vagy szolgáltatásokat hozzunk létre, amelyek megoldják ezeket a problémákat. Ha pusztán elmondjuk az embereknek, hogy létrehoztunk egy nagyszerű terméket attól még nem fogják azt kívánni. Készíthetünk egy fantasztikus terméket minden földi jóval, de ha ez alapvetően nem segít a vásárlóknak, vagy nem tisztázod egyértelműen az értékajánlatot, akkor nem veszik azt meg.</p>
                            <h2 class="heading-2 has-margin-b30">Hogyan használjuk?</h2>
                            <p class="has-margin-b30">Az értékajánlat az üzleti modell elengedhetetlen része. Segíti a vállalatot a termék pozícionálásában és a döntéshozatalban. A VPC több, mint az ügyfél vágyainak vizuális megjelenítése. Segítségével, a vállalkozások optimalizálhatják stratégiájukat, hogy megfeleljenek az ügyfelek igényeinek és olyan terméket építsenek, amit a vásárlók tényleg kívánnak.</p>
                            <p class="has-margin-b30">Amikor folyton új ötletek jönnek, könnyű elveszíteni a fókuszt. Ennek eredményeként a végtermék gyakran már nem felel meg a fogyasztói igényeknek. A Value Proposition Canvas vizuális útmutatóként működik és keretet ad a termékfejlesztéshez.</p>
                            <p class="has-margin-b30">Íme négy kérdés, amely segít létrehozni az értékajánlatot:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Milyen terméket vagy szolgáltatást kínálsz?</li>
                                <li>Ki a célvásárló?</li>
                                <li>Milyen problémát old meg a termék az ügyfél számára?</li>
                                <li>Milyen előnyökkel jár a termék vagy szolgáltatás az ügyfelek számára?</li>
                            </ul>
                            <h2 class="heading-2">A Value Proposition Canvas felépítése</h2>
                            <p>A Value Proposition Canvas két részből áll: <b>Ügyfélprofil (customer profile)</b> és <b>Értéktérkép (value map)</b>. A kitöltést mindig az Ügyfélprofil résszel kezdjük.</p>
                            <figure>
                                <img src="{{ asset('media/blog/value-proposition-canvas.jpg') }}" alt="A Value Proposition Canvas felépítése" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Ügyfélprofil</h3>
                            <p class="has-margin-b30">Az Ügyfélprofil rész segít azonosítani a problémákat az ügyfél szemszögéből. A megoldások keresése helyett próbáljuk megérteni az ügyfél feladatait, fájdalom pontjait és nyereségeit.</p>
                            <p class="has-margin-b30">Mielőtt elkezdenénk a canvas kitöltését, az első lépés a célvásárló kiválasztása. Itt használhatjuk a korábban létrehozott  <a href="{{ localizedRoute('blog.show', ['slug' => 'how-to-use-personas-in-product-development']) }}" target="_blank">perszónákat</a>. Ha még nem készítettünk, itt az ideje! A perszonákat útmutatóként használjuk az ügyfelekprofilok meghatározásakor, a feladatokra, fájdalompontokra és a nyereségekre fókuszálva a perszóna szemszögéből.</p>
                            <p>Az ügyfélprofil három részre oszlik:</p>
                            <figure>
                                <img src="{{ asset('media/blog/value-proposition-canvas-customer-profile.jpg') }}" alt="Customer structure" />
                            </figure>
                            <p class="has-margin-b30"><b>1. Feladatok (Jobs-to-be-done)</b>, amelyeket az ügyfelek megpróbálnak megvalósítani. Mindig ezzel kezdjük az ügyfélprofil kitöltését, mert erre épülnek a felhasználó fájdalompontjai és nyereségei.</p>
                            <p>A feladatok lehetnek:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Funkcionálisak – Egyszerűen: gyakorlati feladatok. Egy autóvásárlás esetén funkcionális feladat lehet az A pontból való eljutás B-be.</li>
                                <li>Szociálisak –  Ezeket a feladatokat társadalmi kötelességünk, félelmeink vagy törekvéseink motiválják. Például egy hibrid autó vásárlásakor társadalmi feladat lenne a környezet védelme.</li>
                                <li>Érzelmi –  Ezek a feladatok ízlésünkből, ellenszenvünkből és bizonytalanságunkból fakadnak. Erre példa lehet az érzés, amit autóvezetés közben kapunk.</li>
                            </ul>
                            <p class="has-margin-b30">Ezek a kérdések segíthetnek meghatározni az ügyfél feladatait:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Milyen tevékenységeket próbál az ügyfél végrehajtani?</li>
                                <li>Mik az ügyfél érzelmi céljai?</li>
                                <li>Az ügyfélnek milyen társadalmi céljai vannak?</li>
                                <li>Milyen feladatok elvégzése révén érzik elégedettnek magukat?</li>
                                <li>Hogy akarják hogy mások megítéljék őket?</li>
                                <li>Mire van szükségük a fentiek eléréséhez?</li>
                            </ul>
                            <p class="has-margin-b30"><b>2. Fájdalompontok (Pains)</b>, amelyekkel a feladatuk elvégzése során szembesülnek</p>
                            <p class="has-margin-b30">Ezek a kérdések segíthetnek meghatározni az ügyfelek fájdalompontjait:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Mitől érzik rosszul magukat az ügyfelek?</li>
                                <li>Mi hiányzik a jelenlegi megoldásokból?</li>
                                <li>Melyek a fő kihívások és problémák, amelyekkel jelenleg szembesülnek az ügyfelek?</li>
                                <li>Milyen feladatok igényelnek sok erőfeszítést, időt vagy pénzt?</li>
                                <li>WMilyen feladatok vezethetnek negatív társadalmi következményekhez, például a hírnév, a bizalom vagy a társadalmi státusz elvesztéséhez?</li>
                                <li>Milyen kockázatoktól tartanak az ügyfelek?</li>
                            </ul>
                            <p class="has-margin-b30"><b>3. Nyereségek (Gains)</b>, amelyet a feladatuk elvégzése révén érzékelnek és remélnek, hogy elérik</p>
                            <p class="has-margin-b30">Ezek a kérdések segíthetnek meghatározni az ügyfelek nyereségét:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Mi teszi boldoggá ügyfeleit?</li>
                                <li>Mi egyszerűsítené le ügyfelei munkáját vagy életét?</li>
                                <li>Milyen eredményeket várnak az ügyfelek?</li>
                                <li>Milyen pozitív társadalmi következményeket szeretnének elérni ügyfelei?</li>
                            </ul>
                            <h3 class="heading-3 has-margin-b30">Értéktérkép (Value Map)</h3>
                            <p class="has-margin-b30">Vizualizálja a teremtett értéket. Itt döntjük el, hogy mely feladatokra, fájdalmakra és nyereségekre összpontosítsunk. Az értéktérkép leírja, hogyan teremthetünk értéket ügyfeleink számára.</p>
                            <p class="has-margin-b30">Az értéktérkép is három részre oszlik:</p>
                            <figure>
                                <img src="{{ asset('media/blog/value-proposition-canvas-value-map.jpg') }}" alt="Értéktérkép (Value Map)" />
                            </figure>
                            <p class="has-margin-b30"><b>1. Termékek és szolgáltatások (Products and Services)</b>, amelyek meghatározzák a kínálatnak a legkritikusabb összetevőit</p>
                            <p class="has-margin-b30"><b>2. A Fájdalomcsillapítók (Pain relievers)</b>megszüntetik, csökkentik vagy minimalizálják azokat a fájdalompontokat, amelyek az ügyfelek számára fontosak, könnyebbé teszik az életük.</p>
                            <p class="has-margin-b30">Ezek a kérdések segíthetnek meghatározni a fájdalomcsillapítókat:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>A termék vagy szolgáltatás megszünteti-e azokat a nehézségeket vagy problémákat, amelyekkel az ügyfelek szembesülnek?</li>
                                <li>Megsemmisíti-e az akadályokat, amelyek megakadályozzák ügyfeleit a munka elvégzésében?</li>
                                <li>Javítja-e a meglévő megoldások hibáit?</li>
                                <li>Javítja-e az ügyfelek érzelmi állapotát?</li>
                                <li>A termék/szolgáltatás megoldja-e azokat a negatív társadalmi következményeket, amelyektől az ügyfelek félnek?</li>
                                <li>Csökkenti-e a kockázatokat, amelyekkel szembe kell nézniük?</li>
                            </ul>
                            <p class="has-margin-b30"><b>3. A Nyereségteremtők (Gain Creators)</b>olyan eredményeket és előnyöket eredményeznek, növelnek vagy maximalizálnak, amelyekre az ügyfelek vágynak, vagy amelyeken meglepődnének</p>
                            <p class="has-margin-b30">Ezek a kérdések segíthetnek meghatározni a nyereségteremtőket:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>A termék vagy szolgáltatás eredményez-e megtakarítást?</li>
                                <li>Biztosítja-e az ügyfelek által elvárt eredményeket?</li>
                                <li>Leegyszerűsíti-e az ügyfelek munkáját vagy életét?</li>
                                <li>Megvalósítja-e az ügyfelek álmát?</li>
                            </ul>
                            <p class="has-margin-b30">Vegyünk példaként egy taxitársaságot.</p>
                            <p class="has-margin-b30">Az ő esetükben a <b>vásárlói profil</b> a következőképpen néz ki:</p>
                            <p class="has-margin-b30"><b>Feladatok</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Eljutni A-ból B-be</li>
                                <li>Meghatározatlan ideig várni a taxira</li>
                                <li>Fizetni az utaztatásért</li>
                                <li>Gyorsabban eljutni a célhoz, mint gyalogosan</li>
                            </ul>
                            <p class="has-margin-b30"><b>Fájdalompontok</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Nincs elérhető taxi</li>
                                <li>Koszos taxik</li>
                                <li>Undok sofőr</li>
                                <li>Fizetési problémák</li>
                            </ul>
                            <p class="has-margin-b30"><b>Nyereség</b></p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Biztonságérzet</li>
                                <li>Gyors célbajutás</li>
                                <li>Követni az utazás menetét</li>
                                <li>Lehetőség utazásra esős napokon</li>
                            </ul>
                            <p class="has-margin-b30">Gyors megjegyzés: értékajánlatok létrehozásakor gyakran feltevődik a kérdés, hogy a fájdalompontok és a nyereségek egy érem ellentétes oldalai-e. A válasz az, hogy határozottan nem. Például egy fájdalompont, amelyet említettünk, az a "piszkos taxi". Ebben az esetben akkor lehetne egy nyereség az, hogy "tiszta taxi", de valójában ez nem nyereség. Ez egy elvárás.</p>
                            <h3 class="heading-3 has-margin-b30">Értéktérkép:</h3>
                            <p class="has-margin-b30"><b>Termékek és szolgáltatások</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Utas mobilalkalmazás</li>
                                <li>Ügyfélszolgálat</li>
                                <li>Reptéri transzferek</li>
                                <li>Hitelkártyás fizetés</li>
                            </ul>
                            <p class="has-margin-b30"><b>Fájdalomcsillapítók</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>24 órás taxi elérhetőség</li>
                                <li>Rendszeres takarítás</li>
                                <li>Képzett sofőrök</li>
                            </ul>
                            <p class="has-margin-b30">Ez a gondolatmenet segíthet a fájdalomcsillapítók meghatározásakor: ha az ügyfélnek X fájdalompontja van, akkor a fájdalomcsillapító Y lehet.</p>
                            <p class="has-margin-b30">Tehát, ha az ügyfélnek az a fájdalompontja, hogy "Nincs elérhető taxi", a fájdalomcsillapító a "24 órás taxi elérhetőség" lehet.</p>
                            <p class="has-margin-b30"><b>Nyereség teremtők</b></p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Értékelő rendszer</li>
                                <li>Automatikus bankkártyás fizetés</li>
                                <li>Útkövető alkalmazás</li>
                            </ul>
                            <p class="has-margin-b30">Ismételten, ha egy ügyfélnek a nyeresége X, akkor a nyereségteremtője lehet Y.</p>
                            <p class="has-margin-b60">Tehát, ha az ügyfélnek a nyeresége az, hogy „Nyomon kövesse az útvonalat”, akkor a nyereségteremtő lehet az „Útkövető alkalmazás”.</p>
                            <p class="has-margin-b30">A tervezési folyamat következő lépése az lesz, hogy megtudjuk van-e illeszkedés az ügyfélprofil és az értéktérkép között. Gyűjtsd össze csapatodat egy meetingre. Nézzetek át minden jegyzetet a canvas-on és vizsgáljátok meg, hogy a nyereségek és a fájdalmak passzolnak-e a nyereség teremtéssel és a fájdalomcsillapítókkal. Kezdjétek a nyereség teremtőkkel. Nézzétek át az összes nyereség teremtőt amit leírtatok, majd a jobb oldali nyereségeket nézve, tegyétek fel a kérdést:, „Milyen nyereséget teremt ez a nyereségteremtő?" Ha van egyezés, pipáljuk ki. Ugyanez a procedúra a fájdalom pontok és a fájdalomcsillapítók esetében.</p>
                            <p class="has-margin-b60">Minél több tétel egyezik a jobb és a bal oldalon, annál nagyobb a termék sikerességének valószínűsége.</p>
                            <h2 class="heading-2 has-margin-b30">Az értékajánlat tesztelése</h2>
                            <p class="has-margin-b30">Az utolsó lépés az értékajánlat megfogalmazása és tesztelése. Ha több nyereségteremtő és fájdalomcsillapító is van, akkor nagy valószínűséggel egynél több érték ajánlatot kell megfogalmazni, mivel nehéz egyetlen olyan kifejezést találni, amely mindent magában foglal.</p>
                            <p class="has-margin-b60">Az utolsó lépés az értékajánlat tesztelése az ügyfelekkel egy interjú keretén belül. Kérdezd meg őket, tudnak-e azonosulni vele. Világos az ajánlott érték? Elég érthető számukra?</p>
                            <h2 class="heading-2 has-margin-b30">Összefoglalva</h2>
                            <p class="has-margin-b30">Ezzel meg is volnánk a canvas-el. Befejezésképpen íme egy gyors, lépésenkénti útmutató a Value Proposition Canvas kitöltéséhez:</p>
                            <ol class="list has-margin-b30">
                                <li>Válassz egy célcsoportot.</li>
                                <li>Határozd meg, milyen feladataik vannak az ügyfeleknek.</li>
                                <li>Határozd meg a fájdalom pontokat, amelyekkel szembesülnek a feladatok elvégzése közben.</li>
                                <li>Határozd meg, milyen előnyöket remélnek a felsorolt feladatok elvégzésétől.</li>
                                <li>Válaszd ki a 3-5 legfontosabb fájdalompontot és nyereséget.</li>
                                <li>Sorold fel a termék vagy szolgáltatás összes előnyét.</li>
                                <li>Azonosítsd a lehetséges fájdalomcsillapítókat.</li>
                                <li>Azonosítsd a potenciális nyereséget teremtőket.</li>
                                <li>Válaszd ki azokat a nyereség teremtőket és fájdalomcsillapítókat, amelyek a legjelentősebb változást hozzák ügyfeleid számára.</li>
                                <li>Találd meg az összefüggést a nyereséget teremtő és a nyereség, a fájdalomcsillapítók és a fájdalom pontok között. Ez lesz az Értékajánlat.</li>
                                <li>Fogalmazd meg az értékajánlatot (értékajánlatokat) egyetlen (összetett) mondatként, amely tisztázza a kínált értéket a felhasználók számára.</li>
                                <li>Teszteld értékajánlatot (ajánlatokat) ügyfeleiddel.</li>
                            </ol>
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
    "datePublished": "2022-03-14T10:00:00",
    "dateModified": "2022-03-14T10:00:00",
    "description": "Miért ennyire fontos része az értékajánlat egy üzleti tervnek? Hogyan fogalmazd meg az értékajánlatodat? Hogyan segít ebben a value proposition canvas? Olvasd el a cikkünket, hogy minderre választ kapjál.",
    "headline": "Hogyan használd a value proposition canvas-t?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-to-pivot-or-not-to-pivot-en.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Értékajánlat, Value Proposition Canvas",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan használd a value proposition canvas-t?",
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
                "name": "Hogyan használd a value proposition canvas-t?"
            }
        }
    ]
}
</script>
@endpush
