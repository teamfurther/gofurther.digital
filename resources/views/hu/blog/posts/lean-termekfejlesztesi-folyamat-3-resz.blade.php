@section('title', 'A lean termékfejlesztési folyamat: 3. Építsünk prototípust')
@section('description', 'Nézzük meg, hogy tudunk prototípust készíteni annak érdekében, hogy teszteljük a termékünk által nyújtott felhasználói élményt.')
@section('preview_image', asset('media/blog/cover-the-lean-product-process-3-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-the-lean-product-process-3-hu.png') }}" srcset="{{ asset('media/blog/featured-the-lean-product-process-3-769w-hu.png') }} 769w, {{ asset('media/blog/featured-the-lean-product-process-3-1000w-hu.png') }} 1000w" sizes="100vw" alt="A lean termékfejlesztési folyamat: 3. Építsünk prototípust" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">A lean termékfejlesztési folyamat: 3. Építsünk prototípust</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-04-29 10:00:00">2021 április 29</time> &middot; 10 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Kezdjünk is egyből egy társadalmi célú hirdetéssel: ha esetleg úgy találtál rá erre a cikkre, hogy nem ismered az előzményeket, akkor mindenképpen olvasd a korábbi cikkeimet. A <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">lean termékfejlesztési folyamat</a> négy egymásra épülő állomását járom körbe. Ezidáig bizonyítottuk, hogy a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">problémánk valós</a>, tehát más is szembesül ezzel a problémával, illetve azt is, hogy az általunk elképzelt megoldás részben vagy egészben <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">megoldja a problémát</a>.</p>
                            <p>A harmadik állomás a termékfejlesztési folyamatban a megoldás-termék illeszkedés. Ahogy az a nevéből is látszik, ebben a szakaszban azt szeretnénk bizonyítani, hogy a termékünk hatékonyan szállítja-e a már validált megoldást.</p>
                            <p>Csakúgy mint az előző két szakaszban, itt is a képzeletbeli termékünkön fogom bemutatni, hogy az építs-mérj-tanulj ciklus különböző fázisaiban milyen eszközök állnak majd rendelkezésünkre. </p>
                            <p>Ha lemaradtál volna, egy különböző szenzorokkal felszerelt eszközt fejlesztünk, amit mikromobilitási eszközökre lehet szerelni. Például kerékpárra, elektromos rollerre vagy akár gördeszkára. Akadályhoz közeledve, vagy egyéb veszélyt érzékelve (gépjármű, gyalogos, átjáró, stb.) eszközünk hang- és rezgésjeleket adva figyelmeztet minket, ezáltal növelve a biztonsági faktort közlekedés közben.</p>
                            <p class="has-margin-b30">Azt már említettem pár sorral feljebb, hogy a fő kérdésünk az, hogy a termékünk tudja-e hatékonyan szállítani a megoldást. A mi termékünk esetében ezt a központi kérdést a következő feltételezésekre tudjuk felbontani:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>a termék könnyen használható</li>
                                <li>a felhasználók megbíznak az eszközben</li>
                            </ul>
                            <p>Ezeket nevezzük használhatósági feltevésnek. De mivel ez ebben a formában nettó senki sem nevezi így, maradjunk a közismert usability feltevés, vagy usability hipotézis elnevezésnél.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-3-hu.png') }}" alt="Validáció a termékfejlesztésben - Megoldás-termék illeszkedés" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Építsünk prototípust</h2>
                            <p>Többször is óva intettem már az olvasóim, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}" target="_blank">ne ugorjanak homlokegyenest a termékfejlesztésbe</a>. De most, hogy már a megoldás-termék illeszkedés szakaszban vagyunk, már csak a név miatt is, bizonyára építhetünk terméket, ugye? Hát, igen is, meg nem is.</p>
                            <p>Bizonyos értelemben terméket építünk, hiszen egy kézzel fogható, tapintható, látható eredményt adunk oda a felhasználóinknak. Ugyanakkor ebben a szakaszban a cél továbbra sem az, hogy ezt a terméket értékesítsük, hanem az, hogy a usability feltevéseinket teszteljük.</p>
                            <p class="has-margin-b60">Ezért egy olyan sallangmentes termék építése a cél, amiben csak az a minimális funkció található meg, ami szükséges ahhoz, hogy a feltevéseinket validáljuk. Ezt nevezik a start-up világban MVP-nek.</p>
                            <h3 class="heading-3 has-margin-b30">MVP</h3>
                            <p>Az MVP, vagyis a minimum-viable product kifejezést 2001-ban Frank Robinson használta először, majd Steve Blank és Eric Ries népszerűsítette, mára pedig a start-up zsargon talán legismertebb kifejezésévé vált, amit a start-up buborékon kívül állók is sokan ismernek. De amennyire népszerű az MVP kifejezés, annyira megosztó is.</p>
                            <p>Akik figyelemmel követték <a href="{{ localizedRoute('blog.tags.show', ['slug' => 'start-up']) }}" target="_blank">a termékfejlesztésről szóló cikkeimet</a> lehet kiszúrták már, hogy kerülöm az MVP kifejezést és inkább a kísérlet vagy a prototípus szavakkal helyettesítem. Ennek az oka az, hogy a nevének összetevőit egyenként és együttesen is könnyen félre lehet értelmezni.</p>
                            <p>Egyrészt ott szerepel a nevében az, hogy “product”, vagyis a “termék” szó. Ez rögtön arra enged következtetni, hogy valami véglegeset, cizelláltat kell építeni. Mivel a kevésbé tapasztalt startupperek is tudják, hogy az MVP az egyik első lépés a termékfejlesztés során, emiatt gyakran átugorják a probléma validációs és probléma-megoldás illeszkedés fázisokat.</p>
                            <p>Ez egy hibás megközelítés. Az <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">előző cikkemből</a> ismert concierge kísérlet is tulajdonképpen tekinthető egy MVP-nek. Sőt, a szakirodalom gyakran concierge MVP-nek is nevezi. De amint láttuk, a concierge kísérlet a probléma-megoldás megfelelés szakasz egyik fontos eszköze.</p>
                            <p>Szintén a "termék" szó miatt, sokaknak nehezére esik az MVP keretein belül maradni és elkezdenek olyan funkciókat is beletenni az MVP-be, amiknek nincs közük az értékajánlatunkhoz vagy csak pusztán kirakatfunkciók. Ez a jelenség még inkább nehezen kezelhető, ha olyan stakeholdereknek van érdekeltsége a projektben, akiknek nincs lean termékfejlesztési tapasztalatuk.</p>
                            <p>A "minimális" szó miatt viszont sokan pont a ló túlsó oldalára esnek át és egy túlságosan alap MVP-t mutatunk meg a felhasználóinknak. Az MVP nem egyenlő azzal, hogy csak a legfontosabb problémákat oldjuk meg vele, hanem a teljes értékajánlatot be kell mutatnunk. Ha az MVP nem felel meg az early adopterek elvárásaiknak, akkor gyakran nem kapunk már tőlük egy második lehetőséget, ezzel pedig elveszítjük egyik legfontosabb korai húzóelemünket.</p>
                            <p>Egy tipikus ilyen jellegű hiba az, amikor az MVP szállítja az elvárt funkciókat, viszont nem szállítja a melléjük elvárt felhasználói élményt. A mi termékünk esetünkben ez úgy festhet, hogy elkészül egy MVP-je a kütyünek, ami megfelelő jelzést ad akadályok esetén, ellenben nagyon nehéz felszerelni a járművekre vagy éppen akkor, hogy 1 teljes kilóval megdobja a súlyukat.</p>
                            <p>Bizonyos esetekben, nagyon költséges és időigényes lehet egyetlen prototípusban szállítani a teljes értékajánlatot. A mi esetünkben is nagy valószínűséggel a kütyü súlyának csökkentése exponenciális többletköltséget jelentene minden egyes megtakarított grammal.</p>
                            <p>Ilyenkor az értékajánlatot nyugodtan fel lehet bontani elemeire. A járműre szerelhető kütyü bizonyítja az értékajánlatnak azt a részét, hogy a termék megbízhatóan elősegíti majd a biztonságos közlekedést. Az értékajánlat felhasználói élményre vonatkozó részét, tehát azt, hogy a termék jól néz ki és könnyen felszerelhető, pedig tesztelhetjük akár a termék 3D-s látványterveivel.</p>
                            <p>Az MVP célja, hogy az értékajánlatunk egy elemét minimális (időbeli és pénzbeli) ráfordítással végig tudjuk vinni az építs-mérj-tanulj cikluson. Az MVP fogalmának, a fenti okok miatti félreértésének elkerülése végett pedig innentől kezdve ismét a prototípus és kísérlet szavakat fogom használni.</p>
                            <p class="has-margin-b60">Sokféle prototípust tudunk megkülönböztetni, lássunk ezek közül most egy párat amik a legelterjedtebbek a megoldás-termék illeszkedés szakaszban.</p>
                            <h3 class="heading-3 has-margin-b30">Low-fidelity prototípusok</h3>
                            <p>A prototípus készítés hasonlít egy kicsit egy építkezésre. Ott sem építjük meg a házat előbb, majd utána megmutatjuk az ügyfélnek, hogy tetszik-e vagy sem. Hanem előbb alaprajzokat készítünk, hogy validáljuk, hogy a belső terek elosztása, funkciója megfelelő-e. Utána készítünk látványterveket, hogy validáljuk a színeket, burkolatokat és egyéb belsőépítészeti elemeket.</p>
                            <p>Természetesen, az alaprajzoknak és látványterveknek elsősorban más rendeltetésük is van, hiszen ebből dolgoznak a kivitelezők. De nincs ez másként a mi termékünk esetén sem. A műszaki rajzok, látványtervek a későbbi prototípusokban és a végső termék gyártásában is fel lesznek majd használva.</p>
                            <p>Ez így van rendjén, hiszen a prototípusok lényege, hogy 1-1 feltételezést végigvigyenek az építs-mérj-tanulj cikluson, majd az így megszerzett tudás alapján, változtatunk rajtuk, vagy kiegészítjük őket új funkciókkal, hogy újabb feltételezéseket tudjunk tesztelni. A prototípusok nyugodtan épülhetnek egymásra, sőt egymásra kell, hogy épüljenek.</p>
                            <p>Az első prototípusok még csak egy csiszolatlan másai a terméknek. Ezeket a prototípusokat nevezzük low-fidelity prototípusnak. Később, ahogy egyre finomítjuk a prototípusokat, annál jobban fognak hasonlítani a végső termékre. Ezeket fogjuk high-fidelity prototípusnak nevezni.</p>
                            <p>A low-fidelity prototípusok legegyszerűbb és legolcsóbb fajtája a <strong>papír prototípus</strong>. És itt nem a papír repülőre kell gondolni (pedig az is egy tökéletes prototípus, hiszen bizonyítja, hogy létezik olyan forma ami fenn tudja tartani magát és előre tud haladni a levegőben), hanem a már említett látványtervekre, műszaki rajzokra vagy akár a szerelési útmutatókra. Ezek segítségével mind lehet érzékeltetni egy felhasználóval, hogy milyen lesz a végső termék.</p>
                            <p>A legismertebb low-fidelity prototípus valószínüleg a <strong>drótváz</strong>. A drótvázak egy vonalakból és alap mértani alakzatokból álló, fekete-fehér reprezentációja egy felhasználói felületnek. Kitűnően lehet vele illusztrálni az elemek elrendezését és hierarchiáját. Egy drótváz segít abban, hogy érzékeltesse azt az érzést, amit majd a felhasználó érez a végtermék használata közben.</p>
                            <p>A mi mikromobilitási eszközökkel való közlekedésbiztonságot növelő kütyünk esetében készíthetünk drótvázat a kütyü érintőképernyőjén futó felhasználói felületekről, vagy a társ applikáció felületeiről. Mutassuk meg ezeket a felhasználóknak és kérjük meg őket, hogy véleményezzék.</p>
                            <p>Természetesen, a különböző papír alapú prototípusok és a drótvázak sem papír alapúak már legtöbbször napjainkban, hanem inkább digitálisak. A low-fidelity prototípusok elkészítésére speciális szoftverek léteznek, mint a <a href="https://balsamiq.com" target="_blank">Balsamiq</a>, a <a href="https://www.uxpin.com" target="_blank">UXPin</a> vagy akár a <a href="https://miro.com" target="_blank">Miro</a>.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-lowfi-vs-highfi.png') }}" alt="Low-fidelity drótváz és high-fidelity mockup" />
                                <figcaption>Egy weboldal ablak low-fidelity drótváza (bal) és a hozzá tartozó high-fidelity mockup (right).</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">High-fidelity prototípusok</h3>
                            <p>Mint említettem, a high-fidelity prototípusok finomított változatai a low-fidelity prototípusoknak. A leggyakoribb high-fidelity prototípus a <strong>mockup</strong>, ami egy termék esetében egy kicsinyített vagy teljes méretű reprezentációja a terméknek. A mi esetünkben ez lehet a kütyü maga, a végső méretben, anyagokban és színekben. Csupán annyi lesz a különbség a mockup és a termék között, hogy a mockup egyáltalán nem lesz funkcionális.</p>
                            <p>Szoftverek, így a mi kütyünkön futó applikáció esetében is, mockupnak nevezhető a szoftver végső felhasználói felületének designja (UI design). Ezek a mockupok különböző szintű interaktivitással lehetnek felruházva. Legegyszerűbb formájukban nem társul hozzájuk semmiféle interaktivitás. A UI design csupán egy kép.</p>
                            <p>A minimális interakció amivel felruházhatjuk a mockupunkat, az a kattinthatóság. Tehát bizonyos elemekre kattintva, bejön egy másik képernyő. Apróságnak tűnik, de ez óriási lépés, hiszen így a felhasználók már folyamatában tudják érzékelni a szoftverünket.</p>
                            <p>Ha nagyon pontosan akarjuk érzékeltetni a végső felhasználói élmény, akkor tovább fokozhatjuk az interaktivitást. Animációkat vihetünk bele a mockupba, vagy megmutathatjuk hogy tud egy-egy mezővel interakcionálni a felhasználó (megváltozik a színe kattintáskor, piros lesz ha nem elfogadható értéke adunk meg, stb.).</p>
                            <p>Az interaktív mockupok előállítására is léteznek célszoftverek, mint a <a href="https://www.sketch.com" target="_blank">Sketch</a>, a <a href="https://www.figma.com" target="_blank">Figma</a>, az <a href="http://invisionapp.com" target="_blank">Invision</a> vagy az <a href="https://www.adobe.com/products/xd.html" target="_blank">Adobe XD</a>. Mi több, ezeket sokszor együtt is lehet használni.</p>
                            <p>Hogy a pontosság (fidelity) és interaktivitás skálán, milyen prototípusokat érdemes elkészíteni, azt mindig mérlegelni érdemes. A ráfordított energia és erőforrás, illetve az így megszerezhető tudás arány lesz a perdöntő. Minél magasabb a pontosság és az interaktivitás, annál pontosabb képet kapnak a felhasználók a tervezett felhasználói élményről és annál relevánsabb visszacsatolást kapunk mi.</p>
                            <p>Nálam a legjobban bevált módszer, amit a leggyakrabban alkalmazok, hogy egy sima, nem kattintható drótvázzal indítok, futok egy kört az építs-mérj-tanulj cikluson, majd a tanultakat beépítem egy kattintható mockupba amin tovább iterálok egészen addig amíg nem kapom azt a visszajelzést, hogy ez már a megfelelő élményt nyújtja. Nem kell tökéletes legyen, de üsse meg az elvárt szintet. Később még lehet majd tökéletesíteni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-prototype-fidelity-interaction-ux-hu.png') }}" alt="Prototípusok összehasonlítása" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Oz varázsló prototípus</h3>
                            <p>A megoldás-termék illeszkedés szakaszban izgalmas lehet egy Oz varázsló típusú prototípus készítése. De hogy jön ide a varázslat és mi köze van a termékfejlesztésnek L. Frank Baum Oz, a nagy varázsló meséjéhez?</p>
                            <p>Az Oz varázsló prototípus lényege, hogy a felhasználó a teljes funkcionalitást és felhasználói élményt megtapasztalhassa. Jogosan tehetjük fel a kérdést, hogy akkor miben is kevesebb ez, mint egy kész termék?</p>
                            <p>Az Oz varázsló prototípusban, csakúgy mint a concierge típusú prototípusban, a funkciókat manuálisan végezzük el. De ellentétben a concierge prototípussal, itt ez nem nyilvánvaló a felhasználónak. egészen a teszt végéig.</p>
                            <p>A mi esetünkben odaadhatunk egy kütyüt a felhasználónak, hogy szerelje fel a mikromobilitási eszközére és  próbálja ki. De ebben a kütyüben még nincsenek szenzorok és még nincs lefejlesztve a szoftver. Ahhoz, hogy a felhasználó az elvárt élményben részesüljön, egy beépített társunk távolról figyeli a tesztet és amikor a felhasználó egy akadályhoz közeledik, manuálisan elindítja a rezgés és hangjelzéseket a kütyün.</p>
                            <p class="has-margin-b60">A felhasználó ebből az egészből mindvégig semmit sem sejt, csak a legvégén az interjú és visszacsatolás után áruljuk neki el, mint Toto a kutya a mesében mikor elhúzza a függönyt, hogy a háttérben, a függöny mögött mindvégig a társunk irányított mint egy varázsló.</p>
                            <h2 class="heading-2 has-margin-b30">Hogyan mérjük a prototípus sikerességét?</h2>
                            <p>Több prototípus építésének a lehetőségét is bemutattam már. De hogyan mérjük a sikerességüket? Milyen adatokra hagyatkozhatunk amikor kijelentjük, hogy a feltevéseink igazak-e vagy hamisak?</p>
                            <p>Végezhetünk például részletes használhatósági (usability) és felhasználói élmény (UX) teszteket. Ezek értékes empirikus adatokkal fognak szolgálni és sok esetben érdemes velük foglalkozni. De ha valamilyen oknál fogva nem akarjuk ezeknek a részleteibe beleásni magunkat, akkor térjünk vissza régi jó barátunkhoz, a felhasználói interjúkhoz (végső soron a usability és UX tesztek is a felhasználói interjúk egy fajtája, vagy minimum szorosan összefüggnek egymással).</p>
                            <p>Kérdezzük meg a felhasználókat, hogy mennyire volt könnyű használni a terméket, milyen volt a használat közbeni élmény, megbízhatónak találták-e valamint azt, hogy mi okozott nekik használat közben fejfájást. Ha ezekre a kérdésekre pozitív válaszokat kapunk, továbbléphetünk a következő, utolsó termékfejlesztési szakaszunkra, <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">a termék-piac illeszkedésre</a>. Ha feltevéseink hamisnak bizonyulnak, akkor mostanra már biztos tudjátok mi következi: természetes a pivot, vagyis a fókuszváltás ami során új feltevéseket fogalmazunk meg és elölről kezdjük a megoldás-termék validációs szakaszt.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'A lean termékfejlesztési folyamat: 3. Építsünk prototípust'])
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
    "datePublished": "2021-04-29T12:00:00",
    "dateModified": "2021-04-29T12:00:00",
    "description": "Nézzük meg, hogy tudunk prototípust készíteni annak érdekében, hogy teszteljük a termékünk által nyújtott felhasználói élményt.",
    "headline": "A lean termékfejlesztési folyamat: 3. Építsünk prototípust",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-the-lean-product-process-3-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztési folyamat, MVP",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "A lean termékfejlesztési folyamat: 3. Építsünk prototípust",
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
                "name": "A lean termékfejlesztési folyamat: 3. Építsünk prototípust"
            }
        }
    ]
}
</script>
@endpush
