@section('title', 'A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat')
@section('description', 'Ebben a cikkben bemutatjuk, hogyan fogalmazz meg egy értékajánlatot a probléma-megoldás megfelelés keresésében.')
@section('preview_image', asset('media/blog/cover-the-lean-product-process-2-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-the-lean-product-process-2-hu.png') }}" srcset="{{ asset('media/blog/featured-the-lean-product-process-2-768w-hu.png') }} 768w, {{ asset('media/blog/featured-the-lean-product-process-2-1000w-hu.png') }} 1000w" sizes="100vw" alt="A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-03-17 10:00:00">2021 március 17</time> &middot; 10 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Aki nem olvasta a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">korábbi cikkemet</a>, annak szólok: terméket építünk. Nem valósat, hanem egy elképzelt terméket, aminek a segítségével a lean termékfejlesztés különböző fázisait illusztrálom.</p>
                            <p>Ez a termék egy különböző szenzorokkal felszerelt eszköz, ami mikromobilitási eszközökre lehet szerelni. Például kerékpárra, elektromos rollerre vagy akár gördeszkára. Akadályhoz közeledve, vagy egyéb veszélyt érzékelve (gépjármű, gyalogos, átjáró, stb.) eszközünk hang- és rezgésjeleket adva figyelmeztet minket, ezáltal növelve a biztonsági faktort közlekedés közben.</p>
                            <p>Megtudtuk, hogy a probléma validációs fázisban milyen feltevésekre (probléma hipotézisek) kell választ keressünk és milyen eszközeink vannak ezeknek a megválaszolására.</p>
                            <p class="has-margin-b30">A termékfejlesztés következő fázisa a probléma-megoldás megfelelés lesz. Ebbe a fázisba érve, a Tanulj szakaszban a következő feltevéseket szeretnénk bizonyítani:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>az eszközünk hozzájárul ahhoz, hogy a felhasználók nagyobb biztonságban legyenek utazás közben</li>
                                <li>az eszközünk olyan jelentős mértékben megnöveli a felhasználók biztonsági érzetét, hogy emiatt rendszeresen használják</li>
                            </ul>
                            <p>Ezeket nevezzük érték feltevésnek, vagy érték hipotézisnek. Ahogy az a nevéből is következik, ez érték feltevés az állapítja meg, hogy a megoldásunk értéket fog teremteni a felhasználóink számára.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-2-hu.png') }}" alt="Validáció a termékfejlesztésben - Probléma-megoldás illeszkedés" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Fogalmazzuk meg az értékajánlatunkat</h2>
                            <p class="has-margin-b60">A probléma validációs fázisban az interjúk során jó eséllyel sok felhasználói fájdalompontot fedeztünk fel, de ugyanakkor lehetőségeket is, hogy miként tudunk a felhasználók mindennapjain segíteni, jobbítani. Ha a termékünk enyhíti ezeket a fájdalompontokat és szállítja a jobbításokat, akkor az érték hipotéziseink valósak és ekkor beszélhetünk probléma-megoldás megfelelésről. De lássuk azt, hogy a gyakorlatban milyen lépéseket tudunk megtenni ennek érdekében.</p>
                            <h3 class="heading-3 has-margin-b30">Value proposition canvas</h3>
                            <p>Az egyik leghasznosabb eszköz az probléma-megoldás megfelelés megállapítására a value proposition canvas, amit Alex Osterwalder és társai, Value Proposition Design c. könyvéből ismerhetünk. A canvas pofon egyszerű: csupán egy négyzetből és egy körből áll.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-value-proposition-canvas-hu.png') }}" alt="Value proposition canvas" />
                            </figure>
                            <p class="has-margin-b30">A körrel kezdünk, ide a célcsoportunkkal kapcsolatos megfigyeléseinket kell beírnunk. A kör (felhasználó profil) 3 részre van osztva:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Ügyfél tevékenységek (Customer jobs) - olyan funkcionális (pld. el akarok jutni A-ból B-be), érzelmi (nyugodt vagyok, mert biztonságban érzem magam) és társadalmi (jól nézek ki közben) tevékenységek amit a felhasználóink cselekednek.</li>
                                <li>Fájdalompontok (Pains) - azok az akadályok, negatívumok vagy frusztrációk, amiket a felhasználó legszívesebben elkerülne.</li>
                                <li>Hasznok (Gains) - olyan pozitív eredmények, hozzáadott értékek vagy akár vágyak, amiket a felhasználó szeretné ha megvalósulnának.</li>
                            </ul>
                            <p>Ezeket az információkat nyugodtan kivehetjük az előző fázisból ismert perszónákból, hiszen a perszónák készítésekor feltételezett hipotéziseket már megerősítették (vagy megcáfolták) az interjúk. Az interjú sorozat után frissítettétek a perszónákat, ugye?</p>
                            <p>
                                Ha több perszónánk van, akkor több value proposition canvas-ünk is lesz, hiszen minden egyes felhasználó csoportnak számára értelemszerűen más-más lesz az értékajánlatunk. Minden egyes tevékenységet, fájdalompontot és hasznot írjunk fel egy post-itra és ragasszuk be a megfelelő helyre. Ha digitálisan szeretnénk value proposition canvas-t kitölteni, akkor a <a href="https://miro.com/" target="_blank">Miro</a> szoftvert ajánlom.
                            </p>
                            <p class="has-margin-b30">
                                Ha megvagyunk a körrel, akkor következhet a négyzet, amit értéktérképnek neveznek Osterwalderék a könyvben. A változatosság kedvéért a négyzet is háromba van osztva:
                            </p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Termékek és szolgáltatások (Products and services) - azok a szolgáltatások és termékek, amikre az értékajánlatunk épül. A mi esetünkben ez lehet maga a kütyü amit a mikromobilitási eszközre kell szerelni, a hozzá tartozó mobil applikáció (merthogy ilyen is lesz), de akár az ügyfélszolgálat is lehet.</li>
                                <li>Fájdalomcsillapítók (Pain relievers) - a fenti termékek, szolgáltatások és funkciók milyen fájdalompontokat enyhítenek, hogyan teszik a felhasználók életét könnyebbé.</li>
                                <li>Értékteremtők (Gain creators) - a fenti termékek, szolgáltatások és funkciók hogyan teremtenek hasznot vagy hogyan növelik az eredményességet a felhasználó számára</li>
                            </ul>
                            <p>Írjuk fel ezeket is post-itokra, majd dobjuk fel a canvas-ra. Hasonlítsuk össze az ügyfél profil alatt megtalálható fájdalompontokat és hasznokat, az értéktérkép alatt megtalálható fájdalomcsillapítókkal és értékteremtőkkel. Megfelelnek egymásnak? Szuper, akkor (valószínüleg) megvan a probléma-megoldás megfelelés (fit).</p>
                            <p>Ha nincs, akkor nézzük meg egy kicsit tüzetesebben a canvas-t. Az olyan fájdalomcsillapítók és értékteremtők, amiknek nincs megfelelője az ügyfél profil alatt, azok valószínüleg nem létező ügyféligényekre adnak választ, tehát felesleges funkciók.</p>
                            <p>Ellenben, ha egyes fájdalompontoknak vagy hasznoknak nincs megfelelője az érték térképen, akkor az egy jó indikátora annak, hogy ott bővíteni vagy átgondolni érdemes a terméket vagy szolgáltatást.</p>
                            <p>A fájdalompontoknak és hasznoknak adhatunk egy prioritást is. Az interjúkból elég jó elképzelésünk kéne már legyen, melyek igazán fontosak a felhasználóknak. Ha több felhasználó csoport (perszóna) esetében is ismétlődnek egy fájdalompontok vagy elvárt hasznok, akkor az jó ok lehet arra, hogy magasabb prioritási számot kapjon. Koncentráljunk csak az esszenciálisakra és iteráljunk egészen addig, amíg nem tudjuk az ügyfélprofil (kör) és értéktérkép (négyzet) között a korrelációt bizonyítani.</p>
                            <p>A value proposition canvas-t kitölthetjük magunkban, a csapatunkkal közösen, de a legizgalmasabb kísérlet talán az, amikor ezt is potenciális felhasználókkal közösen állítjuk össze.</p>
                            {{--<p><a href="" target="_blank">Töltsd le az ingyenes start-up eszköz sablonjainkat, amelyben kitölthető value proposition canvas sablont is találsz.</a></p>--}}
                            <h3 class="heading-3 has-margin-b30 has-margin-t60">User-centered business canvas</h3>
                            <p>Uff, még egy canvas. Szerintem kezd gyanússá válni, hogy mennyire szeretem a canvas-eket.</p>
                            <p>A user-centered business canvas-el Házi Csaba <a href="https://csabahazi.com/ux-kitchen-podcast/007" target="_blank">UX Kitchen</a> podcastjában ismerkedtem meg és 1-2 finomítással rögtön elkezdtem használni. Struktúrája nagyon hasonlít Alex Osterwalder másik híres canvas-ára, a business model canvas-ra és Ash Maurya lean canvas-ára. Nem véletlen, hiszen ebből inspirálódott. De míg az előbbi fókuszában az üzleti tervezés, az utóbbi esetében pedig a probléma és a termék áll, az UCBC sokkal inkább a felhasználói igények és a megoldás kapcsolatára fókuszál.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-user-centered-business-canvas.png') }}" alt="User centered business canvas" />
                            </figure>
                            <p>De lássuk miből is áll ez a canvas. 11 rovatot láthatunk, 3 részre osztva. A bal oldali 2 rovat a canvas probléma része, a 6 középső rovat a felhasználó és a megoldás kapcsolatát írja le, míg a jobb oldali 3 oszlop az üzleti aspektusokat. Ez a három rész gyönyörűen végigköveti a termékfejlesztést a problémától, egészen a piaci megfelelésig.</p>
                            <p>Az első rész rovataira a válaszokat már ismerjük a probléma validációs fázis interjúiból. Felülre a felhasználók problémáit, fájdalompontjait és kihívásait írjuk be, az alsó rovatba pedig a meglévő megoldásokat. Ezek lehetnek versenytársak is, de olyan módszerek is, amit a felhasználóink jelenleg használnak a probléma megoldására. A mi esetünkben ezek az egyéb biztonsági kütyük.</p>
                            <p>A középső rész rovatait szintén ismerősek lehetnek már. A felhasználó típusok lényegében a perszónáink. A felhasználó szükségletei/céljai és a felhasználó félelmei rovatok szintén megtalálhatóak a perszónákban.</p>
                            <p>Az early adopter-ekre, vagyis a korai alkalmazókra érdemes azért röviden kitérnem. Az early adopter kifejezés Geoffrey Moore Crossing the Chasm könyvéből ismert. Moore 5 különböző felhasználó típust különböztetett meg, annak függvényében, hogy mennyire könnyen kezdenek el alkalmazni új technológiákat (vagy termékeket).</p>
                            <p>Ezek az innovátorok, a korai alkalmazók (early adopters), korai többség (early majority), kései többség (late majority) és a szkeptikusok (laggards). Moore megfigyelte, hogy legtöbb új technológia (főként a diszruptív technológiák) esetében, kifejezetten nehéz a korai többséget elérni a korai alkalmazókhoz képest. A két csoport között keletkezik egy szakadék (chasm), ami megmagyarázza a könyv címét is.</p>
                            <p>Ahhoz, hogy tesztelni tudjuk majd a termékünket, előszőr a korai alkalmazókat kell meggyőzzük. Ők lesznek a kulcs a többség felé majd. Éppen ezért foglalnak el fontos szerepet a canvas-ünkön.</p>
                            <p>Tovább haladva a canvas-en, elérünk a megoldások és az értékajánlat rovatokhoz. Ezeket is szerencsénkre már a value proposition canvas-ben kitöltöttük.</p>
                            <p>Az utolsó rész, 3 rovattal pedig már üzleti szempontokat jelenít meg. Ezekkel a probléma-megoldás fázisban nem foglalkozunk, ezért nem is részletezem őket, de amúgy is elég egyértelműek.</p>
                            <p class="has-margin-b60">Az UCBC, csakúgy mint a perszónák vagy a felhasználói interjúk egy olyan eszköz amit a termékfejlesztés összes fázisában hasonló eredményességgel tudunk használni. Van, amikor az UCBC-vel kezdek és ennek alapján dolgozom ki részletesebben a perszónákat és az értékajánlatot. Van, amikor csak UCBC-t használok, főleg egyszerűbb projektet esetében. De legtöbbször a probléma-megoldás megfelelés szakaszban szoktam először ajánlani a használatát.</p>
                            {{--<p><a href="" target="_blank">Töltsd le az ingyenes start-up eszköz sablonjainkat, amelyben kitölthető user-centered business canvas sablont is találsz.</a></p>--}}
                            <h2 class="heading-2 has-margin-b30">Teszteljük az értékajánlatunkat</h2>
                            <p>Azzal, hogy addig csiszoltuk az értékajánlatunkat, amíg az ügyfélprofil (kör) és értéktérkép (négyzet) között megtaláltuk a korrelációt, még nem bizonyítottuk a érték feltevéseinket. Tehát itt még nem beszélhetünk probléma-megoldás megfelelésről. Ezt a korrelációt bizonyítanunk kell (bár ha közösen készítettük a value proposition canvas a potenciális felhasználókkal, az már egy aprócska lépés a megfelelő irányba).</p>
                            <p class="has-margin-b60">Joggal tehetítek fel magatokban a kérdést, hogy hogyan teszteljünk, amíg nincs még termékünk? Szerencsére erre is megvannak az eszközök.</p>
                            <h3 class="heading-3 has-margin-b30">Kérdőívek</h3>
                            <p>Talán a legelterjedtebb validációs eszköz a kérdőív. Az interjúkkal szemben, ami egy kvalitatív eszköz, a kérdőív egy kvantitatív módszer.</p>
                            <p>Sokan már a probléma validációs fázisban helytelenül, kérdőívvel próbálják helyettesíteni a felhasználói interjúkat. A kérdőívek azt feltételezik, hogy tudjuk mit kérdezzünk a felhasználóktól sőt, mivel sok esetben válasz opciókat is meg kell adjunk, a válaszlehetőségek ismeretét is feltételezi. Mint az a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">múltkori cikkből</a> megtanultuk, a probléma validációs fázisban az ismeretlen megismerésén van a hangsúly. Arra pedig az interjúk sokkal célszerűbb eszközök, hiszen mindig lehetőségünk van visszakérdezni és mélyebbre ásni.</p>
                            <p>Bár a kérdőívek nem alkalmasak a kezdeti szakaszokban, annál hatékonyabbak az interjúk során tanultak megerősítésében. Dan Olsen a The Lean Product Playbook c. könyvében ezt úgy nevezi, hogy quant on qual. Vagyis kvantitatív felmérés kvalitatív adatokon.</p>
                            <p>Készítsünk egy kérdőívet, amivel le tudjuk tesztelni a value proposition canvas-ban foglaltakat. A fájdalomcsillapítók enyhítik-e a megkérdezett szerint a fájdalompontot? Az értéknövelők meghozzák-e az elvárt hasznot?</p>
                            <p>A mi termékünk esetén megkérdezhetjük például a kitöltőket, hogy egy 5-ös skálán jelöljék meg, hogy mennyire bíznának meg egy ilyen eszközben vagy, hogy mennyire fontos a saját biztonságuk a mások (gyalogosok) biztonságához képet. Akár arra is rákérdezhetnénk, hogy melyik funkciókat tartják annyira fontosnak, hogy a készülék gombjaival/érintő képernyőjével kezeljenek és melyikek azok, amiket elrejthetünk a mobil applikációba.</p>
                            <p>A kérdőívek összeállításának rejtélyei meghaladják ennek a cikknek a körét, de ha egy dolgot ki kéne most emeljek, az az, hogy a kérdőívek elejére mindig építsünk be szűrő kérdéseket. Ezek a szűrő kérdések arra jók, hogy ki tudjuk zárni a számunkra nem releváns válaszadókat.</p>
                            <p>A mi esetünkben, például nem relevánsak azok a kitöltők akik nem használnak mikromobilitási eszközöket. Azok sem relevánsak, akik csak kontrollált környezetben vagy olyan helyeken használják ezeket az eszközöket, ahol nem kiemelten fontos a biztonság. Kérdezzük meg, hogy milyen gyakran használnak mikromobilitási eszközt? Milyen mikromobilitási eszközöket használnak? Hol használják elsősorban mikromobilitási eszközt?</p>
                            <p class="has-margin-b60">A szűrő kérdések összeállításakor segítenek a perszónák (mondtam én, hogy még később is hasznos lesz). Ha több különböző perszónánk van, akkor megfontolandó, hogy több, perszónára szabott kérdőívet állítsunk össze.</p>
                            <h3 class="heading-3 has-margin-b30">Concierge kísérlet</h3>
                            <p>Egy másik technika az értékajánlat tesztelésére a concierge kísérlet. A concierge kísérlet esetében kiválasztunk egy pár felhasználót, akinek megpróbálunk a végtermékhez hasonló felhasználói élményt nyújtani úgy, hogy a termék összes funkcióját kézileg valósítjuk meg. Tehát, kiváltunk egy komplikált technikai megoldást emberekkel.</p>
                            <p>Ez a módszer értelemszerűen nem minden termék esetében működik. A mi esetünkben is nehezen megvalósítható, hacsak nem szeretnénk egy elektromos rollert mögött futva kiabálni ha veszély észlelünk. Ez nemcsak nehezen megvalósítható, hanem meglehetősen messze is áll az elvárt felhasználói élménytől.</p>
                            <p>Talán a leghíresebb concierge típusú kísérlet, Manuel Rosso és a Food on the Table projektje, amit Eric Ries is felhozott példaként a The Lean Startup könyvében. Manuel víziója egy olyan digitális termék volt, ami a felhasználók étkezési preferenciái alapján személyre szabott heti étkezési tervet és bevásárló listát állít össze. </p>
                            <p>Ahelyett, hogy Manuel belevágott volna a szoftver fejlesztésébe, inkább egy kísérletbe kezdett. Kiválasztott 1 (!) ügyfelet, akinek megismerte az étkezési szokásait és kedvenc receptjeit. Ezt követően hetente bekopogtatott az éppen árleszállított termékek listájával és az ezekből elkészíthető, releváns receptekkel. Kikérte a hölgy véleményét, ami alapján javítani tudott az összeállításokon és ami a legfontosabb, minden héten begyűjtött egy csekket $9.95 dollárért.</p>
                            <p class="has-margin-b60">Ez közel sem volt kifizetődő, hatékony és messze nem egy skálázható üzlet. Viszont minden héten újabb és újabb információhoz jutottak. Rövidesen további pár ügyféllel bővítették a vásárlók körét. Azáltal, hogy az ügyfelek hétről hétre kinyitották nekik az ajtót, sőt fizettek a szolgáltatásért, Manuel-ék bizonyították, hogy az értékajánlatuk megállja a helyét.</p>
                            <h2 class="heading-2 has-margin-b30">Összegzés</h2>
                            <p class="has-margin-b30">A mi esetünkben, a következő kérdésekre kerestük a választ a probléma-megoldás megfelelés szakaszában:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>az eszközünk hozzájárul ahhoz, hogy a felhasználók nagyobb biztonságban legyenek utazás közben</li>
                                <li>az eszközünk olyan jelentős mértékben megnöveli a felhasználók biztonsági érzetét, hogy emiatt rendszeresen használják</li>
                            </ul>
                            <p>Első lépésünk az értékajánlatunk meghatározása lesz. Ezt egy (felhasználókkal közösen készített) value proposition canvas segítségével tudjuk megvalósítani. A user-centered business canvas segít a felhasználói igények és a megoldásunk vizualizációjában.</p>
                            <p>Ez a két eszköz segít a meghatározásban, struktúrálásban és megjelenítésben, de nem elegendőek az érték feltevések megerősítéséhez. Erre használhatunk kérdőíveket, vagy ha olyan a termékünk, akkor egy concierge kísérlet egy izgalmas és hatékony módja lehet a probléma-megoldás megfelelés bizonyításának.</p>
                            <p>Ha sikerül a bizonyítás, akkor irány <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}">a megoldás-termék megfelelési szakasz</a>, különben pedig jöhet a már többször emlegetett fókuszváltás. más nevén a pivot!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat'])
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
    "datePublished": "2021-03-17T12:00:00",
    "dateModified": "2021-03-17T12:00:00",
    "description": "Ebben a cikkben bemutatjuk, hogyan fogalmazz meg egy értékajánlatot a probléma-megoldás megfelelés keresésében.",
    "headline": "A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-the-lean-product-process-2-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztési folyamat, User Persona, Felhasználói interjú",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat",
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
                "name": "A lean termékfejlesztési folyamat: 2. Fogalmazzuk meg az értékajánlatunkat"
            }
        }
    ]
}
</script>
@endpush
