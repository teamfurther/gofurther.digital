@section('title', '11 mód, hogy MVP-t építsünk')
@section('description', 'Tarts velünk és tudd meg mi az az MVP, hogy tudunk egyet építeni és melyek a legismertebb fajtái. Kezdjünk is a no product prototípusokkal!')
@section('preview_image', route('generate-cover', ['title' => '11 mód, hogy MVP-t építsünk']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">11 mód, hogy MVP-t építsünk - 1. rész</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-10-18 10:00:00">2021 október 18</time> &middot; 10 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>A startupok természetüknél fogva bizonytalan kimenetelűek, ezért nem meglepő, hogy 90%-uk megbukik. A 42% pedig azért bukik meg, mert egy olyan megoldást nyújtanak, amire nincs is piaci igény. De, hogy lehet ezt elkerülni?</p>
                            <p>Ez egyik legjobb módszer a bukás elkerülésére az, ha redukáljuk a bizonytalanságot. Ezt pedig úgy a legegyszerűbb, hogy ha megfogalmazzuk és felhasználókkal teszteljük, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'hipotezisek-a-termekfejlesztesben']) }}" target="_blank">milyen feltételezéseknek kell teljesülniük</a> ahhoz, hogy termékünk sikeres legyen. Ezt a folyamatot nevezzük <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">validációnak</a>, az egyik legfontosabb eszköze pedig az MVP.</p>
                            <p>Az MVP, vagyis minimum viable product, kifejezést először Frank Robinson vezette be 2001-ben, majd Steve Blank és Eric Ries népszerűsítették. Meghatározása szerint, "az MVP egy olyan termék, ami csak azokat a fő funkciókat szállítja, amik a működéshez szükségesek". Ez a meghatározás pont az MVP esszenciáját hagyja ki, de álljon meg a menet!</p>
                            <p>Miért használom egyáltalán az MVP kifejezést? Tudom, hogy nagyon figyelmesen követtétek az eddigi cikkeimet, így bizonyára feltűnt, hogy ebben a cikkben az MVP kifejezést használom ismét, pedig <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}" target="_blank">meg is írtam már</a> miért nem szeretem. Az igazság az, hogy kellett a clickbait cím, és legyünk őszinték, a "11 mód, hogy prototípust építsünk" nem hangzott olyan jól 😅 .</p>
                            <p>Viccet félretéve, ez a cím lehetőséget ad arra, hogy nyomatékosíthassam mi a gond a fenti meghatározással és az MVP kifejezéssel úgy általában. Nézzük meg Henrik Kniberg (ex-Spotify) alábbi illusztrációját.</p>
                            <figure>
                                <img src="{{ asset('media/blog/henrik-kniberg-mvp-hu.png') }}" alt="Építsünk prototípust, hogy validáljuk hogyan juthatunk el A-ból B-be" />
                            </figure>
                            <p>A felső sorban azt láthatjuk, hogy 4 lépésben eljutunk egy autóig, mindig 1-1 új funkciót hozzáadva a termékhez. Lássuk, hogy nézne ki ennek a tesztelése felhasználókkal:</p>
                            <p>– Helló, itt egy hátsó kerék!<br />– Mit kezdjek én ezzel? Én egy járművet szeretnék, amivel el lehet jutni A-ból B-be!</p>
                            <p>Ok, ez nem túl biztató. De mi tudjuk mi a cél, ezért tovább lépünk.</p>
                            <p>Ezek után minden egyes lépéssel közelebb kerülünk a végső termékhez, de a felhasználók továbbra sem fogják érteni, hogyan juttatja majd ez el őket A-ból B-be. Ergo nem értik az értékajánlatot. Természetesen így visszacsatolást sem tudnak adni, tehát nem tudjuk validálni a feltételezéseinket, nem csökkentjük a bizonytalanságot, végső soron pedig nyakunkon maradunk egy olyan termékkel amire nincs piaci igény.</p>
                            <p>Ez az MVP kifejezéssel az elsődleges problémám, mégpedig az, hogy könnyű a "minimális" szót félreértelmezni. Nem elég csak egy minimális funkciót legyártani MVP-ként, hanem olyan megoldást kell készítenünk ami a teljes értékajánlatot bemutatja.</p>
                            <p>A második sorban egy másik megközelítést látunk. Már az első fázisban, a gördeszka is szállítja az értékajánlatot, hiszen elvisz A-ból B-be. Így már tudunk feedbacket kérni és validálni a feltételezéseinket. A továbbiakban már csak finomítunk a visszacsatolás alapján.</p>
                            <p>Fontos megjegyezni azt is, hogy az értékajánlat nem csupán a funkcionalitást foglalja magába, hanem a megbízhatóságot, felhasználói élményt vagy akár az érzelmi kötődést is. Ezt mind figyelembe kell venni egy MVP készítésekor.</p>
                            <figure>
                                <img src="{{ asset('media/blog/jussi-pasanen-mvp-hu.png') }}" alt="Egy MVP nem csak a funkcionalitást foglalja magába, hanem a megbízhatóságot, a felhasználói élményt és az érzelmi kötődést is" />
                            </figure>
                            <p>Eric Ries MVP meghatározása, miszerint egy MVP "a termék azon legkevesebb erőfeszítéssel elkészített verziója, amely lehetővé teszi, hogy a lehető legtöbb validált információt megkapjuk a felhasználókról" már megfelel a fentieknek, azonban ezzel a meghatározással is van egy problémám, mégpedig az, hogy az MVP-t egy terméknek nevezi.</p>
                            <p>Ahelyett, hogy minimális ráfordítással készítenék el az MVP-t, sokan a ló túloldalára esnek át és túl sok időt töltenek el a termék tökéletesítésével. Mi emberek így vagyunk konfigurálva: hogy alkossunk. Nehéz leállni. Az MVP nevében és meghatározásban szereplő "termék" szó miatt sokan meg sem állnak míg nem érzik a terméket véglegesnek.</p>
                            <p>Ez a jelenség még inkább tetten érhető, ha olyan stakeholdereknek van érdekeltsége a projektben, akiknek nincs lean termékfejlesztési tapasztalatuk. Ilyenkor gyakran olyan funkciók is bekerülnek az MVP-be, amiknek semmi közük az értékajánlathoz, nem szükségesek a feltételezések bizonyításához, tehát pusztán kirakatfunkciók.</p>
                            <p>Egy másik probléma a "termék" szóval az, hogy arra enged következtetni, hogy egy tényleges, kézzelfogható terméket kell építenünk (és emiatt átugrunk fontos validációs szakaszokat mint pld. a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">probléma validáció</a> vagy a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">probléma-megoldás illeszkedés</a>). Ez korántsem igaz. Számos olyan MVP létezik, amivel 1-1 a termékünkkel kapcsolatos feltételezést tudunk tesztelni, de nem kézzelfogható, mint például a concierge kísérlet vagy jóval a termék elkészülte előtt létrejön, mint például a smoke teszt. Ezeket nevezzük no product MVP-nek.</p>
                            <p class="has-margin-b60">A fenti okok miatt, én az MVP helyett inkább a prototípus, vagy a kísérlet szavakat szoktam használni. Lássuk tehát, mi az az 11 mód, hogy prototípust építsünk!</p>
                            <h2 class="heading-2 has-margin-b30">No product prototípusok</h2>
                            <h3 class="heading-3 has-margin-b30">#1 Smoke Teszt</h3>
                            <p>A smoke teszt egy költséghatékony eszköz lehet a vásárlói érdeklődés felmérésére a felhasználók körében, éppen ezért a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">product-market fit</a> validációs szakasz egyik legkedveltebb kísérlete.</p>
                            <p>A smoke screen teszt nem más, mint egy landing oldal, amin feltüntetjük az értékajánlatunkat, a termékünk előnyeit és kulcsfunkcióit. Ami pedig a legfontosabb, hogy feltüntetjük a termék árát és elhelyezünk az oldalon egy vásárlás gombot. Igen, egy vásárlás gombot, még akkor is ha nincs még termékünk.</p>
                            <p>Természetesen nem kell semmilyen pénzügyi tranzakció végbemenjen és a felhasználónak el is magyarázzuk a vásárlás gombra kattintás után, hogy a termék még nem létezik. Innen kapta ez a kísérlet a nevét. A szép landing oldal csupán füst volt, ami mögé elbújtattuk valódi szándékunkat: azt, hogy visszaigazolást kapjunk a felhasználók vásárlási szándékáról. Annál pedig, hogy elkötelezi magát a vásárlás mellett a gomb megnyomásával, nem is kaphatunk erősebb megerősítést.</p>
                            <p>A smoke teszt másik közismert neve a fake door teszt, hiszen a felhasználó egy hamis ajtón lép be. De ha már belépett ezen az ajtón, akkor semmiképpen ne engedjük el. Kérjük meg, hogy iratkozzon fel egy hírlevél és ne felejtsük el értesíteni majd, ha ténylegesen elkészült a termék. Sőt, annak érdekében, hogy enyhítsük a termék nem létezése által okozott csalódást, felajánlhatunk a felhasználónak egy early-bird árat ha később visszatér és vásárol.</p>
                            <p>A landing oldal gyártására sok eszközünk van, a legegyszerűbb egy kattints és építs típusú weboldal építő használata, mint amilyen a <a href="https://www.squarespace.com" target="_blank">Squarespace</a>, a <a href="https://www.wix.com" target="_blank">Wix</a> vagy a <a href="https://www.strikingly.com" target="_blank">Strikingly</a>. Ha egy kicsit nagyobb mozgásteret szeretnénk testreszabhatóság területén, akkor használhatunk egy Wordpress sablont.</p>
                            <p>A landing oldal elkészítése után ne felejtsünk azért el látogatókat is terelni az oldalra. Erre a célra megfelelő lehet egy PPC kampány, de az is segíthet ha megosztjuk olyan Reddit hírfolyamokon vagy Facebook csoportokban ahol számunkra releváns célközönség található. Alternatívaként, érdemes megpróbálni a <a href="https://www.producthunt.com" target="_blank">Product Hunt</a> oldalára felkerülni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-landing-page-mvp-buffer.png') }}" alt="Smoke teszt" />
                                <figcaption>A <a href="https://buffer.com/resources/idea-to-paying-customers-in-7-weeks-how-we-did-it/" target="_blank">Buffer smoke tesztje</a> valószínüleg a leghíresebb ilyen kísérlet. A "Plans and pricing" gombot megnyomva egy magyarázó oldalra irányítanak minket, ahol fel tudunk iratkozni egy hírlevélre amiben infókat küldenek majd a termék elérhetőségével kapcsolatban.</figcaption>
                            </figure>
                            <h5 class="heading-5 has-margin-b30">Pricing Page</h5>
                            <p>A pricing page a smoke screen teszt egyik variációja. Ebben az esetben, a vásárlás gomb helyett (vagy a megnyomás után egy következő képernyőn) több árcsomagot listázunk. Mondjuk 0 Ft. / hó, 3000 Ft. / hó és 5000 Ft. / hó, különböző szintű funkcionalitásért. Így egy még mélyebb elköteleződést kapunk (főleg ha nem az ingyenes csomagot választják) és validálni tudjuk az árazási modellünket.</p>
                            <p><small>FIGYELEM! Magát az árat ne ezzel a technikával próbáld meg belőni, hiszen a funkcionalitásbeli különbség a csomagok között torz képet adhat. Ha azt szeretnéd megtudni, mennyit hajlandóak fizetni a látogatók a termékért, alkalmazz inkább A/B tesztet az áron.</small></p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-landing-page-mvp-buffer-2.png') }}" alt="Smoke teszt - Pricing page" />
                                <figcaption>A Buffer is úgy érezte, hogy a smoke teszt önmagában nem adott nekik elég információt, ezért úgy döntöttek, hogy beiktatnak még egy lépést a folyamatba.</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">#2 Hamarosan oldal</h3>
                            <p>Ha a fenti módszert túl rámenősnek érezzük, akkor megpróbálkozhatunk egy hamarosan, vagy coming soon oldallal. A hamarosan oldalt esetében első perctől egyértelmű, hogy a termék még nem elérhető. Ha a látogató érdeklődik a termék iránt, feliratkozhat egy hírlevélre amin értesítjük majd ha elérhető lesz a termék.</p>
                            <p class="has-margin-b60">Ez egy jóval kisebb elköteleződés, mint a vásárlás gombra kattintás a smoke teszt esetében. Azonban a hamarosan oldalnak is vannak különböző variációi, amivel más-más feltételezéseket lehet tesztelni.</p>
                            <h5 class="heading-5 has-margin-b30">Termékbemutató videó</h5>
                            <p>A landing oldal helyett használhatunk egy termékbemutató videót is. Ezt a módszert Drew Houston, a Dropbox alapítója tette híressé.</p>
                            <p>Aki nem tudná, a Dropbox egy olyan szolgáltatás ami a fájljaidat szinkroban tartja a különböző eszközeiden. Ha létrehozol egy dokumentumot a laptopodon, azt megjelenik a telefonodon is. Ha ott szerkeszted, majd elmented, akkor a módosítások megjelennek a laptopodon.</p>
                            <p>Ma, az iCloud, OneDrive és társai korában ez már természetesnek tűnik, de 2007-ben mikor a Dropbox ötlete megszületett, még korántsem volt az. A sztori szerint, Drew elfelejtette magával vinni az USB meghajtóját egy hosszú útra, ezért nem tudott a munkájával haladni. Hogy elüsse az időt, elkezdett a Dropboxon dolgozni.</p>
                            <p>Egy ilyen szoftver terméket nagyon komplex feladat megvalósítani és még nehezebb közérthetően leírni. Drew elkészített egy prototípust, azonban ez még korántsem nem működött tökéletesen és nem állt készen arra, hogy nagy mennyiségű felhasználót elbírjon (ráadásul csak Windowson működött). Ezért Drew úgy döntött, hogy két legyet üt egy csapásra.</p>
                            <p>Készített egy videót a prototípusról használat közben, majd egy várólistára való feliratkozási űrlappal együtt publikálta Hacker News-on, ahol tudta, hogy megtalálhatja a potenciális vásárlóit. A várólista hamarosan megtelt (oké, nem telt meg, hiszen a digitális termékről van szó, nem egy bálteremről, de értitek ti), Drew pedig nyugodt szívvel belevághatott a Dropbox további fejlesztésébe.</p>
                            <p>Miért volt a Dropbox termékbemutató videó prototípusa sikeres? Mert sikerült egy nehezen érthető koncepció tömören bemutatnia és felmérnie erre az igényt anélkül, hogy számtalan órát beleöljön abba, hogy több platformra lefejlesszen egy megbízható és hatékony terméket.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/iAnJjXriIcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h5 class="heading-5 has-margin-b30">High bar teszt</h5>
                            <p>A high bar teszt egy hamarosan oldal annyi csavarral, hogy a regisztráció elé beszúrunk egy további lépést. Tulajdonképpen arra kérjük meg a felhasználóinkat, hogy hajtsanak végre egy feladatot, például töltsenek ki egy űrlapot. Ez a módszer segít tesztelni azt, hogy mennyire motiváltak a felhasználóink, hogy megszerezzék a terméket, de az űrlap lehetőséget ad arra is, hogy jobban megismerjük a vásárlóinkat.</p>
                            <p class="has-margin-b60">Csak óvatosan viszont ezzel a technikával, hiszen minél több lépéses a folyamat, annál kisebb lesz a konverzió. Mindenképpen használjunk valamilyen analitikai eszközt, hogy mérjük hányadik lépésnél morzsolódnak le a felhasználóink.</p>
                            <h5 class="heading-5 has-margin-b30">Social payment kísérlet</h5>
                            <p>A social payment kísérletnek az a lényege, hogy a hamarosan oldalon feliratkozva előszőr egy várólistára rakjuk a felhasználót, majd lehetőséget adunk neki, hogy feljebb kerüljön ezen a várólistán ha megosztja a landing oldalt az ismerőseivel is.</p>
                            <p>Ez a megosztás lehet emailes meghívás, linkmegosztás vagy social media megosztás. Minden egyes felhasználó után aki az ő linkjével iratkozik fel, 1 helyet feljebb léphet a listán.</p>
                            <p class="has-margin-b60">Ez a módszer kiváló, ha <a href="{{ localizedRoute('blog.show', ['slug' => 'epitsunk-novekedesi-motort']) }}" target="_blank">egy virális növekedési motort</a> szeretnénk alkalmazni, hiszen a megosztásokból hamar kirajzolódik mennyire virális a termékünk. Ráadásul egy ki ingyen marketinget is kapunk.</p>
                            <h5 class="heading-5 has-margin-b30">Broken promise teszt</h5>
                            <p>A broken promise teszt tulajdonképpen a social payment kísérlet drákóibb verziója. Ebben az esetben nem különböző marketing csatornákon keresztül terelünk látogatókat az oldalra, hanem mi magunk hívunk meg egy véges számú ismerőst, akik megfelelnek a vásárlói perszónánknak.</p>
                            <p>A landing oldalon nyílvánvalóvá tesszük számukra, hogy egy titkos, zártkörű csoport tagjai lettek. Az ember viszont természeténél fogva szereti megosztani az ismerőseivel azokat a termékeket amiket szeretnek. Főleg ha az egy exkluzív termék!</p>
                            <p class="has-margin-b60">Rövid idő elteltével érdemes összehasonlítani az általunk meghívottak listáját az össze feliratkozó listájával. A különbség jól mutatja majd azt, hogy mennyire szeretik a felhasználók a termék ötletét, illetve azt, hogy mennyire virális a termék.</p>
                            <h5 class="heading-5 has-margin-b30">Elővásárlás</h5>
                            <p>Amennyiben úgy érezzük, hogy a hamarosan oldalnál erősebb elköteleződést szeretnénk a felhasználóktól, azonban a smoke tesztet mégsem nem vetnénk be, mivel azt túl rámenősnek érezzük, akkor megpróbálkozhatunk egy elővásárlási oldallal. Ilyenkor egyértelművé tesszük a látogató számára, hogy a termékhez csak később juthat majd hozzá, azonban végbemegy egy valódi pénzügyi tranzakció, ami egy nagyon erős elköteleződés a felhasználó részéről.</p>
                            <p class="has-margin-b60">Ez jó módszer lehet akár a gyártást vagy a fejlesztést előfinanszírozni. Azonban ez a módszer is rejti a legnagyobb kockázatot, hiszen ha bármilyen oknál fogva meghiúsul a termék, kénytelenek leszünk kártérítést fizetni.</p>
                            <h5 class="heading-5 has-margin-b30">Mock sale elővásárlás</h5>
                            <p>Ha nem szeretnénk a kártérítés lehetőségének kitenni magunkat, akkor az elővásárlás gomb megnyomása után jelezhetjük a vásárlónak, hogy a tranzakció csak akkor fog végbemenni majd, hogy a termék készen lesz. Tehát itt még nem kérjük be a bankkártya adataikat.</p>
                            <p class="has-margin-b60">Ez a módszer már nagyon közel áll a smoke teszthez, azonban megvan az a hátránya, hogy mivel a látogatók tudják, hogy a termék még nem elérhető, ezért valószínűleg kisebb lesz a konverziós arány. Azt pedig, hogy a látogató azért morzsolódott le, mert a termék még nem elérhető, vagy azért mert az nem nyerte el a tetszését, azt sajnos egyetlen analitikai eszközzel sem fogjuk tudni pontosan megállapítani.</p>
                            <h3 class="heading-3 has-margin-b30">#3 Közösségi finanszírozási kampány</h3>
                            <p>A közösségi finanszírozási kampány oldalakról, mint amilyen a <a href="https://www.kickstarter.com/" target="_blank">Kickstarter</a> vagy az <a href="https://www.indiegogo.com/" target="_blank">Indiegogo</a>, a legtöbb embernek nem a validáció jut eszébe elsősorban. Pedig ha jobban belegondolunk, pontosan úgy használhatjuk őket, mint egy elővásárlási kísérletet.</p>
                            <p class="has-margin-b60">Azon felül, hogy finanszírozást tudunk szerezni a projektünkhöz, ezek az oldalak kiválóak arra is, hogy felmérjük az érdeklődést a termékünk iránt, hiszen ha a felhasználók hajlandóak pénzt adni azért, hogy egy termék megvalósulhasson, akkor nagy valószínűséggel hajlandóak lesznek majd meg is vásárolni a terméket.</p>
                            <h2 class="heading-2 has-margin-b30">Folytatás következik</h2>
                            <p>Oké, ez egy kicsit hosszúra sikeredett. Egyelőre még csak a no product típusú prototípusokat sikerült bemutatnom és máris elértem azt a cikkhosszúságot, amit még talán elolvastok 😆 .</p>
                            <p>Ugyanakkor ez egy tökéletes pont arra, hogy ketté bontsam a cikket (Google szeretni fog érte). Egyszóval tartsatok velem, <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-2-resz']) }}" target="_blank">a folytatásban</a> megnézzük azokat a prototípusokat, amelyek már nem csak bemutatják a terméket, hanem érzékeltetik is annak működését a felhasználókkal.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => '11 mód, hogy MVP-t építsünk'])
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
    "datePublished": "2021-10-18T12:00:00",
    "dateModified": "2021-10-18T12:00:00",
    "description": "Tarts velünk és tudd meg mi az az MVP, hogy tudunk egyet építeni és melyek a legismertebb fajtái. Kezdjünk is a no product prototípusokkal!",
    "headline": "11 mód, hogy MVP-t építsünk",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => '11 mód, hogy MVP-t építsünk']) }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztési folyamat, MVP, Startup",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "11 mód, hogy MVP-t építsünk",
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
                "name": "11 mód, hogy MVP-t építsünk"
            }
        }
    ]
}
</script>
@endpush
