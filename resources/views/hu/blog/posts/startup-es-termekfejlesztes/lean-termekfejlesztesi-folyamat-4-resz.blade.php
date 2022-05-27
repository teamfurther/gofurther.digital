@section('title', 'A lean termékfejlesztési folyamat: 4. Hogyan érjük el a product-market fit-et?')
@section('description', 'A termékfejlesztés végére érve, teszteljük hogyan fogadják majd a vevőink a termékünket és azt, hogy fenntartható-e az üzleti tervünk.')
@section('preview_image', asset('media/blog/cover-the-lean-product-process-4-hu.png'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">A lean termékfejlesztési folyamat: 4. Hogyan érjük el a product-market fit-et?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-05-10 10:00:00">2021 május 10</time> &middot; 10 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>A cikksorozat eddigi részeiben megnéztük már, hogyan lehet a startup ötletünk alapvető <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">problémáját validálni</a>, hogy az általunk elképzelt megoldás ténylegesen megoldja-e a problémát (<a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">probléma-megoldás illeszkedés</a>), illetve hogy a termékünk szállítja-e ezt a megoldást (<a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}" target="_blank">megoldás-termék illeszkedés</a>).</p>
                            <p>A mostani cikkel pedig eljutottunk a lean termékfejlesztés utolsó szakaszához, a termék-piac illeszkedéshez, közismertebb nevén a product-market fithez. De mit is fed ez valójában? A lehető legegyszerűbben megfogalmazva, a termék-piac illeszkedés szakaszában arra a központi kérdésre keressünk a választ, hogy az üzleti modellünk fenntartható lesz-e?</p>
                            <p class="has-margin-b30">Ha ezt felbontjuk validálható feltevésekre, akkor a következőket szükséges bizonyítanunk:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>a felhasználók hajlandóak továbbra is pénzt vagy értéket adni a termékünkért vagy szolgáltatásunkért cserébe</li>
                                <li>meg tudjuk tartani a meglévő vásárlóinkat, esetleg el tudunk nekik kiegészítő terméket vagy szolgáltatást adni</li>
                                <li>a vásárlók szeretik annyira a terméket, hogy másoknak is ajánlják</li>
                            </ul>
                            <p>Ezeket a feltételezéseket nevezzük startup szlengben növekedési hipotéziseknek, angol nevén growth hypothesis-nek.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-4-hu.png') }}" alt="Validáció a termékfejlesztésben - Termék-piac illeszkedés" />
                            </figure>
                            <p>Mint minden szakasz elején, így a termék-piac illeszkedési szakaszban is mindig megkérdezik a tapasztalatlan ügyfeleim, hogy "de ugye mostmár nekiállhatunk a terméket véglegesíteni?". Akár jogos is lehet ez a kérdés, hiszen már tudjuk, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">mások is szembesülnek azzal a problémával</a>, amit <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">a termékünk bizonyítottan megold</a>, mindeközben pedig <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}" target="_blank">az elvárt felhasználói élmény is nyújtja</a>. Ahhoz, hogy megvizsgáljuk mennyire fenntartható az ügyfélszerzési és megtartási stratégiánk szintén szükségünk lehet egy már kész termékre.</p>
                            <p>A tapasztaltabbak viszont már azt is tudják, hogy ez közel sincs így és erre a kérdésre most is az lesz a válaszom, hogy nem. Ne építsünk továbbra sem terméket. Szerencsénkre vannak olyan eszközök, amiket már egy termék gyártása vagy egy applikáció fejlesztése előtt is bevethetünk.</p>
                            <p class="has-margin-b60">Természetesen vannak olyan mérőszámok is, amikhez tényleg csak akkor tudunk hozzájutni, ha már elkezdtük a tényleges terméket értékesíteni. Ezért ezt a cikket most két részre, termék építés előtti, illetve utáni eszközök és mérőszámok bemutatására osztom.</p>
                            <h2 class="heading-2 has-margin-b30">Terméképítés előtti eszközök a product-market fit validálására</h2>
                            <h3 class="heading-3 has-margin-b30">Landing oldalak</h3>
                            <p>A landing oldal egy költséghatékony eszköz lehet a vásárlói érdeklődés felmérésére a felhasználók körében. Sok eszközünk van landing oldal gyártására, a legegyszerűbb egy kattints és építs típusú weboldal építő használata, mint amilyen a <a href="https://www.squarespace.com" target="_blank">Squarespace</a>, a <a href="https://www.wix.com" target="_blank">Wix</a>, vagy a <a href="https://www.strikingly.com" target="_blank">Strikingly</a>. Ha egy kicsit nagyobb mozgásteret szeretnénk testreszabhatóság területén, akkor használhatunk egy Wordpress sablont. Ennél többre viszont nagy valószínűséggel nem lesz szükségünk.</p>
                            <p>Tüntessük fel az oldalon az <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-hasznald-a-value-proposition-canvast']) }}" target="_blank">értékajánlatunkat</a>, a termékünk előnyeit és kulcsfunkcióit. Ami pedig a legfontosabb, hogy tüntessük fel a termék árát és helyezzünk el az oldalon egy vásárlás gombot. Igen, egy vásárlás gombot, még akkor is ha nincs még termékünk.</p>
                            <p>Természetesen nem kell semmilyen pénzügyi tranzakció végbemenjen és a felhasználónak el is magyarázzuk a vásárlás gombra kattintás után, hogy a termék még nem létezik, de annál, hogy elkötelezi magát a vásárlás mellett a gomb megnyomásával, nem kaphatunk erősebb visszaigazolást a vásárlási szándékról.</p>
                            <p>Semmiképpen ne felejtsük el azonban értesíteni majd a felhasználót, ha ténylegesen elkészült a termék. Sőt, annak érdekében, hogy enyhítsük a termék nem létezése által okozott csalódást, felajánlhatunk a felhasználónak egy early-bird árat ha később visszatér és vásárol.</p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-landing-page-mvp-buffer.png') }}" alt="Landing page MVP" />
                                <figcaption>A <a href="https://buffer.com/resources/idea-to-paying-customers-in-7-weeks-how-we-did-it/" target="_blank">Buffer landing oldal prototípusa</a> valószínüleg a leghíresebb ilyen kísérlet. A "Plans and pricing" gombot megnyomva egy magyarázó oldalra irányítanak minket, ahol fel tudunk iratkozni egy hírlevélre amiben infókat küldenek majd a termék elérhetőségével kapcsolatban.</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Hamarosan oldal</h3>
                            <p class="has-margin-b60">Ha a fenti módszert túl agresszívnek találjuk, akkor lehet egy hamarosan, vagy coming soon oldalt alkalmazni. Ebben az esetben egyértelművé tesszük a felhasználó számára azt, hogy a termék még nem elérhető. Ha érdeklődik a termék iránt, feliratkozhat egy hírlevélre amin értesítjük majd ha elérhető lesz a termék. Érezhető azonban, hogy ez egy jóval kisebb elköteleződés, mint egy vásárlás gombra kattintás.</p>
                            <h3 class="heading-3 has-margin-b30">Elővásárlás</h3>
                            <p>Egy köztes megoldás lehet, ha a landing vagy hamarosan oldalon elővásárlási opciót adunk a felhasználóknak. Ilyenkor egyértelművé tesszük számukra, hogy a termékhez csak később juthatnak majd hozzá, azonban végbemegy egy valódi pénzügyi tranzakció, ami egy nagyon erős elköteleződés a felhasználó részéről.</p>
                            <p class="has-margin-b60">Cash flow-t tekintve sem utolsó szempont ez, bizonyos esetekben jó módszer lehet a gyártást vagy fejlesztést előfinanszírozni. Azonban ez a módszer is rejti a legnagyobb kockázatot. Ha a termékünk elbukik a termék-piac illeszkedési szakaszban, vagy később a gyártásnál adódnak akadályok, akkor kénytelenek leszünk kártérítést fizetni.</p>
                            <h3 class="heading-3 has-margin-b30">Termékbemutató videó</h3>
                            <p>Egy másik lehetőség az, ha a landing oldal vagy a hamarosan oldal helyett vagy akár ezekkel egyetemben egy demó videót alkalmazunk. A videót kombináljuk feliratkozás, elővásárlás vagy vásárlás gombbal, hogy tudjuk a vásárlási szándékot mérni. Ezt a módszert választotta a Dropbox is a 2007-es indulásakor:</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/iAnJjXriIcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h3 class="heading-3 has-margin-b30">Közösségi finanszírozási kampány</h3>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'otthoni-sorfozes-crowdfunding-es-2-perc-alatt-30000-dollar-a-brewie-story']) }}" target="_blank">közösségi finanszírozási kampány</a> oldalakról, mint amilyen a <a href="https://www.kickstarter.com" target="_blank">Kickstarter</a> vagy az <a href="https://www.indiegogo.com" target="_blank">Indiegogo</a>, a legtöbb embernek nem a validáció jut eszébe elsősorban. Pedig amellett, hogy finanszírozást tudunk szerezni a projektünkhöz, ezek az oldalak kiválóak arra is, hogy felmérjük az érdeklődést a termékünk iránt, hiszen ha a felhasználók hajlandóak pénzt adni azért, hogy egy termék megvalósulhasson, akkor nagy valószínűséggel hajlandóak lesznek majd meg is vásárolni a terméket.</p>
                            <p class="has-margin-b60">A dörzsöltebb startupoknak gyakran nincs is szükségük az ezekből a kampányokból származó összegre a termékük finanszírozásához, csupán kihasználják a platformok adta lehetőséget és egyszerűen csak a product-market fit validálására hoznak létre kampányt.</p>
                            <h2 class="heading-2 has-margin-b30">Terméképítés utáni mérőszámok a product-market fit validálására</h2>
                            <p>Ha a fenti eszközök megfelelő eredményeket hoztak, akkor elérkezett a várva-várt pillanat: végre építhetünk terméket. Azonban ez még nem jelenti azt, hogy bizonyítottuk a product-market fit-et. Ha minden eddigi erőfeszítésünk ellenére nem lesz fenntartható az üzleti modellünk, még mindig van lehetőségünk <a href="{{ localizedRoute('blog.show', ['slug' => 'pivot-vagy-nem-pivot']) }}" target="_blank">pivotra</a>.</p>
                            <p>Az építkezési fázist lezártuk és beléptünk a növekedési fázisba (growth phase). Ha jól használtuk a fent ismertetett eszközöket akkor a vásárlási hajlandóság nagy valószínűséggel tényleges vásárlásokká alakul.</p>
                            <p class="has-margin-b30">Az első feltételezésünket (a felhasználók hajlandó továbbra is pénzt vagy értéket adni a termékünkért vagy szolgáltatásunkért cserébe) ezzel sikerült is bizonyítani. De mi a helyzet a másik kettővel? Ismételjük át, melyek voltak azok:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>meg tudjuk tartani a meglévő vásárlóinkat, esetleg el tudunk nekik kiegészítő terméket vagy szolgáltatást adni</li>
                                <li>a vásárlók szeretik annyira a terméket, hogy másoknak is ajánlják</li>
                            </ul>
                            <p>Milyen mérőszámok segítségével tudjuk ezeket validálni? A mérőszámoknak fogok egy külön cikket is szentelni később, de lássuk most a legfontosabbakat. Mielőtt beleugrunk azonban, kiemelném az egyik legnagyobb hibát amit el szoktak követni a startupok: nem tudnak ellenállni a metrikák varázsának.</p>
                            <p>Eric Ries két típusú mérőszámot különböztetett meg a The Lean Startup könyvében. A hiúsági metrikákat (vanity metrics) és a hasznosítható metrikákat (actionable analytics). A hiúsági metrikák nagyszerűek arra, hogy jól érezzük magunkat tőle, de pocsékok ha ezek alapján szeretnénk tervezni és döntéseket hozni. A tapasztalatlan startup mégis elkövetik ezt a hibát.</p>
                            <p>Ilyen hiúsági metrika például a weboldal látogatóinak a száma, vagy a követők és like-ok száma a közösségi médiában. Hiába vannak sokan, ha nem lesz belőlük vásárló. Ok, ez elég egyértelmű gondolhatjátok.</p>
                            <p>Sokkal kevésbé nyilvánvaló, de ugyanilyen hiúsági metrika például a felhasználók száma. Hiába van sok felhasználónk, ha azok nem aktívak. Tehát nem költenek vagy hoznak bármilyen más hozzáadott értéket (pld. Facebookon sem költ a felhasználók nagyrésze, ám a Facebook számára az általuk generált információ jelenti az értéket).</p>
                            <p>Még kevésbé nyilvánvaló hiúsági a metrika a havi összbevétel. Miért, hiszen ha bevételünk van, akkor az azt jelenti, hogy eladásaink is vannak, nem? De igen. Viszont azt nem mutatja meg, hogy mennyibe kerül nekünk minden egyes eladás. Például azt, hogy mennyit költünk marketingre ahhoz, hogy megszerezzük egy vásárlót. Egy gyártó cég sem azt nézi, milyen összegért adott el terméket, hanem azt, hogy mekkora volt ezen a nyeresége.</p>
                            <p>Ezzel szemben helyezkednek el a hasznosítható metrikák. Ezek azok, amik alapján érdemes a döntéseket meghozni és stratégiát alkotni. Én ezeket szeretem tisztánlátási metrikáknak is nevezni (clarity metrics vs vanity metrics). Lássunk ezek közül néhányat.</p>
                            <figure>
                                <img src="{{ asset('media/blog/metrics-vanity-vs-actionable-hu.png') }}" alt="Hiúsági vagy hasznosítható metrikák?" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Ügyfélszerzési költség</h3>
                            <p>Az az összeg amit átlagban elköltünk egy vásárló megszerzésére. Angolul customer acquisition cost (CAC). Ha elköltünk például 800 EUR-t Google Ads hirdetésekre, amiből 100 ügyfelet szerzünk, akkor az ügyfélszerzési költségünk, CAC = 8 EUR.</p>
                            <p class="has-margin-b60">A növekedés érdekében minden startup eleinte a CAC csökkentésére kell fókuszáljon. Ha a CAC idővel nem csökken, akkor az egy intő jel, hogy az üzleti modellünk nem fenntartható hosszú távon. Egy fizetett növekedési motor esetében elfogadható lehet, ha a CAC nem csökken idővel, azonban abban az esetben is kívánatos a csökkenő tendencia.</p>
                            <h3 class="heading-3 has-margin-b30">Konverziós arány</h3>
                            <p>Már említettem, hogy a weboldal látogatóinak, vagy a közösségi oldalakon a követőinknek a száma egy hiúsági metrika. Azonban az, hogy belőlük milyen arányban lesznek vásárlók, az az egyik legfontosabb gyakorlati metrikánk lesz.</p>
                            <p>Minden egyes látogató vagy követő (lead) megszerzése pénzbe kerül. Legyen az egy PPC (pay-per click) hirdetési kampány vagy egy PR megjelenés költsége. Minél nagyobb a konverziós arányunk, annál kevesebbet kell marketingre költeni, hogy ugyanannyi felhasználónk legyen, tehát kisebb lesz a CAC.</p>
                            <p class="has-margin-b60">A konverziós arány növelésére kitűnő eszköz az A/B vagy többváltozós tesztek (multivariate testing) futtatása. Egy ilyen teszt esetében, ugyanannak a landing oldalnak vagy hirdetésnek kettő vagy több variánsát egyenlő arányban mutatjuk meg felhasználóknak. Ezek a variánsok különbözhetnek szövegben, designban, elrendezésben is. Amelyik teszt jobb konverziós eredményeket produkál, azzal érdemes foglalkozni és tovább finomítani.</p>
                            <h3 class="heading-3 has-margin-b30">Lemorzsolódási arány</h3>
                            <p>A lemorzsolódási arány, angolul churn rate, azt mutatja, hogy az egyszer megszerzett vásárlókat, milyen arányban sikerül hosszú távon megtartanunk. Hasonló megfontolásból fontos mérőszám mint a konverziós arány. Minél nagyobb arányban tudjuk megtartani a felhasználóinkat, annál kevesebbet kell új felhasználók megszerzésére költenünk a növekedéshez. Az a metrika kiemelten fontos, ha ragadós növekedési motort alkalmazunk.</p>
                            <p class="has-margin-b60">Továbbá, egy meglévő felhasználónak mindig olcsóbb kiegészítő termékeket vagy szolgáltatásokat eladni mint egy friss (hideg) leadnek, hiszen már van egy meglévő rapport a vásárlóval.</p>
                            <h3 class="heading-3 has-margin-b30">Ügyfélelégedettségi mérőszám és ajánlási arány</h3>
                            <p>Az ügyfélelégedettségi mérőszám, közismertebb nevén net promoter score vagy NPS egy gyakori marketing metrika, amely azt mutatja meg, hogy az aktív felhasználóink mennyire valószínű, hogy ajánlják az termékünket másoknak. Az NPS-t leggyakrabban egy felmérő űrlap segítségével mérik.</p>
                            <p class="has-margin-b60">Az ajánlási arány (referral rate / RR) szorosan összefügg az NPS-el. Az RR az összes eladásunk azon százaléka, amely egy másik felhasználó ajánlásából jött létre. Minél nagyobb az NPS, valószínüleg annál magasabb az RR. Egy virális növekedési motor esetén, az RR lesz a legfontosabb metrikánk.</p>
                            <h3 class="heading-3 has-margin-b30">Vásárlói életciklus érték</h3>
                            <p>Angolul customer lifetime value (CLV, CLTV vagy LTV). Az az összeg, amit átlagban egyetlen felhasználó valaha elkölt nálunk. Tehát ha van 1000 felhasználónk, akik összesen 10 000 EUR-t költöttek nálunk, akkor a vásárlói életciklus érték, CLV = 10 EUR.</p>
                            <p class="has-margin-b60">Egy üzleti modell akkor fenntartható, hogy a CLV > CAC. Ez már egy elég jó indikátora a product-market fit-nek.</p>
                            <h2 class="heading-2 has-margin-b30">Összegzés</h2>
                            <p class="has-margin-b90">Hosszú út volt, de elértünk a lean termékfejlesztési folyamat végére. Azonban a cikksorozat itt nem ér véget! A következőkben ki fogok részletesebben bontani egy pár fogalmat amit az elmúlt cikkekben említettem, megnézzük majd, hogyan lehet a termékünket vagy szolgáltatásunkat tovább skálázni, illetve érintünk majd egyéb startupokkal kapcsolatos témákat a termékfejlesztésen túl is. Tartsatok velem!</p>
                            <div class="columns">
                                <div class="column is-6-desktop">
                                    <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}">
                                        <img src="{{ asset('media/freebies/lean-validation-cheat-sheet-mockup-hu.png') }}">
                                    </a>
                                </div>
                                <div class="column is-6-desktop">
                                    <p class="has-margin-b30">Ha tetszett ez a cikk, akkor töltsd le a hozzá tartozó infografikát:</p>
                                    <a class="btn is-large is-pearl" href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}">Kérem az infografikát!</a>
                                </div>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'A lean termékfejlesztési folyamat: 4. Hogyan érjük el a product-market fit-et?'])
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
    "datePublished": "2021-05-10T12:00:00",
    "dateModified": "2021-05-10T12:00:00",
    "description": "A termékfejlesztés végére érve, teszteljük hogyan fogadják majd a vevőink a termékünket és azt, hogy fenntartható-e az üzleti tervünk.",
    "headline": "A lean termékfejlesztési folyamat: 4. Hogyan érjük el a product-market fit-et?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-the-lean-product-process-4-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztési folyamat, Product-market fit",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "A lean termékfejlesztési folyamat: 4. Hogyan érjük el a product-market fit-et?",
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
                "name": "A lean termékfejlesztési folyamat: 4. Hogyan érjük el a product-market fit-et?"
            }
        }
    ]
}
</script>
@endpush
