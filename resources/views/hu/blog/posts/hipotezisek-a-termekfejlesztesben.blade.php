@section('title', 'Hipotézisek a termékfejlesztésben')
@section('description', 'Ebben a cikkben megismerjük a különböző hipotézis típusokat, illetve azt, hogy hogyan érdemes őket megfogalmazni és tesztelni.')
@section('preview_image', asset('media/blog/cover-what-are-hypotheses-in-product-development-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-what-are-hypotheses-in-product-development.png') }}" srcset="{{ asset('media/blog/featured-what-are-hypotheses-in-product-development-769w.png') }} 769w, {{ asset('media/blog/featured-what-are-hypotheses-in-product-development-1000w.png') }} 1000w" sizes="100vw" alt="Hipotézisek a termékfejlesztésben" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hipotézisek a termékfejlesztésben</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-06-14 10:00:00">2021 június 14</time> &middot; 11 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Minden ötlethez, termékfejlesztéshez vagy üzleti tervhez társul egy vízió. Az IKEA víziója az volt, hogy "jól megtervezett, funkcionális lakberendezési termékek széles skáláját kínálja olyan alacsony áron, hogy a lehető legtöbben megengedhessék maguknak.".</p>
                            <p>A Prezi, prezentációs szoftver és egyben az egyik legsikeresebb magyar start-up alapítói pedig azt a víziót fogalmazták meg, hogy egy olyan szoftvert szeretnének fejleszteni, ami átalakítja a prezentációs élményt, "megreformálja azt, ahogyan az emberek megosztják a tudásukat, történeteket mesélnek, és cselekvésre ösztönzik közönségüket".</p>
                            <p>A mai modern technológiáknak köszönhetően már nem az a kérdés, hogy ezek a víziók megvalósíthatóak-e, hanem az, hogy érdemes-e őket megvalósítani? Ha járatos vagy olyan innovációs módszerekben, mint a lean termékfejlesztés vagy a design thinking, akkor nem lesz idegen számodra ez a gondolkodásmód.</p>
                            <p>De honnan tudhatjuk meg, hogy érdemes-e belevágni a megvalósításba vagy sem? Ebben segít nekünk a lean termékfejlesztési keretrendszer, amely kimondja, hogy a víziónkat érdemes elemeire bontani. Ezeket az elemeket hipotézisek, vagyis feltételezések formájában érdemes megfogalmazni, majd kisebb, iteratív szakaszokban tesztelni őket.</p>
                            <p class="has-margin-b60">"Minden üzleti terv egy sor feltevésből áll. Mivel a feltételezések még nem bizonyítottan igazak (nem is lehetnek, hiszen feltételezések), sőt gyakran tévesek, egy startup korai tevékenysége arra kell összpontosuljon, hogy minél hamarabb tesztelje ezeket." (Eric Ries – The Lean Startup, 2011)</p>
                            <h2 class="heading-2 has-margin-b30">Milyen feltételezéseket érdemes tesztelni?</h2>
                            <p>Ok. Fel kell bontsuk a víziót egy sor feltevésre. De hogyan kezdjünk neki? Milyen feltevéseket fogalmazzunk meg?</p>
                            <p>Egy üzleti stratégia sok olyan feltételezésekből áll, amit nem érdemes tesztelni. Ezek általában egyértelműek, vagy közvetlen módon következtethetőek iparági megfigyelésekből és tapasztalatokból.</p>
                            <p>Az IKEA esetében például egyértelmű volt, hogy a vásárlók hajlandóak lesznek jól megtervezett és olcsó bútort vásárolni. Az, hogy hajlandóak lesznek saját maguknak összeszerelni, az annakidején már sokkal kevésbé volt egyértelmű.</p>
                            <figure>
                                <img src="{{ asset('media/blog/what-are-hypotheses-in-product-development-lofa-hu.png') }}" alt="LOFA feltevések" />
                            </figure>
                            <p class="has-margin-b60">Ezeket a legrizikósabb feltételezéseket Leap of Faith Assumption (LOFA) név alatt népszerűsítette Eric Ries a szakirodalomban.</p>
                            <h2 class="heading-2 has-margin-b30">A feltételezések típusai</h2>
                            <p class="has-margin-b60">Annak függvényében, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">a termékfejlesztésünk melyik szakaszában vagyunk</a>, más-más típusú feltételezéseket érdemes felállítanunk.</p>
                            <h3 class="heading-3 has-margin-b30">Perszóna és probléma hipotézisek</h3>
                            <p>Minden vízió egy elképzelt vásárló, egy feltételezett felhasználó köré épül. Hogy pontosan kicsoda ő, hogyan viselkedik és milyen szükségei vannak, az mind a perszóna hipotézisünk része lesz.</p>
                            <p>A perszóna hipotézishez szorosan kötődik a probléma hipotézis, ami nem jelent mást mint, hogy szerintünk a felhasználó milyen kihívásokkal néz szembe és mi az ami fontos számára. Érdemes-e ezekkel a problémákkal foglalkozni? Ezzel a két típusú feltételezéssel találkozhatunk a termékfejlesztés probléma validációs szakaszában.</p>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">probléma validációról szóló cikkemben</a> bedobtam egy elképzelt termék ötletét és az ehhez tartozó víziót. A példa kedvéért egy olyan eszközt fejlesztünk, amit mikromobilitási eszközökre szerelhetünk és szenzoroknak köszönhetően egy fokozatosan erősödő rezgéssel és sípolással jelez ha akadályt vagy veszélyt érzékel (gyalogos átjáró, gépjármű, stb.), ezáltal növelve a felhasználók biztonságát.</p>
                            <p>Ha megnézzük a fenti víziót, akkor a perszóna hipotézisünket úgy fogalmazhatnánk meg, hogy "a (motorizált és nem motorizált) mikromobilitási eszközöket használó emberek lesznek a vásárlóink". Később, ahogy a probléma validációs szakaszban felhasználói interjúkat végzünk, valószínüleg szembesülni fogunk azzal, hogy a fenti feltételezésünk részben, vagy egészében hamis. Ebben az esetben iterálunk, vagyis átfogalmazzuk a feltevésünket.</p>
                            <p>Például ha rájövünk, hogy csak a gyors járművek felhasználóit érdekli egy ilyen eszköz, akkor átfogalmazhatjuk a perszóna hipotézist úgy, hogy "a 25 km/h sebességet meghaladó mikromobilitási eszközt (kerékpár, elektromos kerékpár, elektromos roller) használó emberek lesznek a vásárlóink".</p>
                            <p>Az is kiderülhet az interjúkból, hogy a kikapcsolódási célból utazó felhasználók nem igényelnek extra biztonságot, viszont azok, akik rendszeresen városban használják munkába járásra és ügyintézésre, azok igen. Perszóna feltevésünk ebben az esetben lehetne az, hogy "a 25 km/h sebességet meghaladó mikromobilitási eszközt (kerékpár, elektromos kerékpár, elektromos roller) városban, napi rendszerességgel használó emberek lesznek a vásárlóink".</p>
                            <p>A példának felhozott vízió alapján a probléma hipotézist is megfogalmazhatjuk, például úgy, hogy "a mikromobilitást használók nem érzik biztonságban magukat utazás közben és szeretnének nagyobb biztonságban utazni". Vagy úgy, hogy "a mikromobilitást használók nem elégedettek a jelenlegi biztonsági megoldásokkal".</p>
                            <p>Ez a második megfogalmazás nagyon jól működik olyan esetekben, amikor már léteznek piaci szereplők, akik ugyanaz a problémát oldják meg, de mi feltételezzük, hogy mi ezt jobb minőségben is meg tudjuk tenni. Jó példa erre a Prezi.</p>
                            <p class="has-margin-b60">A Prezi előtt is léteztek már prezentációs szoftverek, de mindegyik nagyjából ugyanazt az élményt nyújtotta. Ezért, a Prezi probléma hipotézisa valahogy így hangozhatott: a prezentációs szoftvereket használók nem elégedettek a jelenlegi slide alapú megoldásokkal (PowerPoint, Google Slides, Keynote), mert azok nem segítik a storytellinget.</p>
                            <h3 class="heading-3 has-margin-b30">Érték és usability hipotézisek</h3>
                            <p class="has-margin-b30">Az érték hipotézis vagy érték feltevés egyszerűen arról szól, hogy a megoldásunk értéket teremt-e a felhasználó számára. A példánknál maradva, a következő érték feltételezéseket fogalmazhatnánk meg:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>az eszközünk hozzájárul ahhoz, hogy a felhasználók nagyobb biztonságban legyenek utazás közben</li>
                                <li>az eszközünk olyan jelentős mértékben megnöveli a felhasználók biztonsági érzetét, hogy emiatt rendszeresen használják</li>
                            </ul>
                            <p>Az érték hipotézissel elsősorban a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">probléma-megoldás illeszkedés</a> szakaszban fogunk találkozni. </p>
                            <p>Szorosan kapcsolódik az érték hipotézishez a usability hipotézis. Annyira szorosan, hogy a szakirodalom gyakran meg sem említi külön. Pedig ha a termékfejlesztés 4 szakaszát nézzük jól látszik, hogy a usability hipotézissel inkább a harmadik, <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}" target="_blank">megoldás-termék illeszkedés</a> szakaszban találkozunk.</p>
                            <p class="has-margin-b30">A usability hipotéziseink azt feltételezik, hogy a termékünk hatékonyan tudja szállítani az értékajánlatunkat. Azt, hogy a termék könnyen használható és az elvárt felhasználói élményt nyújtja. A mi példánk esetében a következő usability feltevéseket fogalmazhatnánk meg:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>a termék könnyen használható</li>
                                <li>a felhasználók megbíznak az eszközben</li>
                            </ul>
                            <h3 class="heading-3 has-margin-b30">Növekedési hipotézis</h3>
                            <p>Ha a növekedési hipotézisekig eljutottunk, akkor nagy valószínűséggel egy jó termékünk van fejlesztés alatt, ami egy valós felhasználói problémát oldd meg. De ez még korántsem jelenti azt, hogy a termék piacképes is lesz. A növekedési hipotézisek segítségével pontosan erre keressük a választ: fenntartható-e az üzleti modellünk.</p>
                            <p class="has-margin-b30">A biztonsági kütyünk esetében az üzleti modellel kapcsolatban a következő feltevéseket fogalmazhatjuk meg:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>a felhasználók hajlandó továbbra is pénzt vagy értéket adni a termékünkért vagy szolgáltatásunkért cserébe</li>
                                <li>meg tudjuk tartani a meglévő vásárlóinkat, esetleg el tudunk nekik kiegészítő terméket vagy szolgáltatást adni</li>
                                <li>a vásárlók szeretik annyira a terméket, hogy másoknak is ajánlják</li>
                            </ul>
                            <p class="has-margin-b60">A növekedési hipotézissel a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">termék-piac illeszkedési</a> (product-market fit) szakaszban találkozunk, amikor egy sor kísérlet során teszteljünk hogyan tudunk több felhasználót elérni és megtartani. Erre nem létezik egy konzerv megoldás. Az, hogy ezt hogyan érjük el nagyban függ attól is, hogy milyen növekedési motor(oka)t alkalmazunk.</p>
                            <h2 class="heading-2 has-margin-b30">Hogyan fogalmazzuk meg a feltévéseinket</h2>
                            <h3 class="heading-3 has-margin-b30">Egyetlen dolgot teszteljünk egyszerre</h3>
                            <p>Fontos, hogy amikor ezeket a feltételezéseket megfogalmazzuk, akkor kerüljük el az olyan hipotéziseket, amelyek a termékünk vagy szolgáltatásunk egyszerre több aspektusára vonatkoznak. Könnyű ebbe a csapdába esni, hiszen úgy tűnhet, hogy ezzel időt takarítunk meg. A valóság viszont az, hogy nem fogjuk tudni pontosan eldönteni, hogy a kísérletünk milyen oknál fogva hiúsult meg.</p>
                            <p>Például az érték feltevésünket a következő módon is megfogalmazhattuk volna: "az eszközünk hozzájárul ahhoz, hogy a felhasználók nagyobb biztonságban legyenek utazás közben és emiatt rendszeresen használják majd".</p>
                            <p>A kísérletünk könnyen megcáfolhatja a fenti feltevést, amiből mi azt a következtetést vonjuk le, hibásan, hogy a felhasználóink úgy érzik a termék nem segíti elő a biztonságos utazást, ezért kukázzuk az ötletünket. A valóság viszont az, hogy biztonságban voltak, csak éppen a termék nem nyújt megfelelő felhasználói élményt és emiatt felhasználóink nem hajlandóak rendszeresen használni azt.</p>
                            <p class="has-margin-b60">Így lehet egy könnyen orvosolható probléma miatt mellékvágányra kerülni a termékfejlesztésben. Éppen ezért, mindig úgy fogalmazzunk meg a hipotéziseinket, hogy azok mindig a termék egyetlen egy aspektusát teszteljék.</p>
                            <h3 class="heading-3 has-margin-b30">Alapozzunk az eddigi ismereteinkre</h3>
                            <p>A feltevéseink mindig könnyen tesztelhetőek kell legyenek. Tehát tudjunk olyan kísérletet tervezni amivel a felhasználókról eddig alkotott képünket meg tudjuk erősíteni vagy cáfolni. Ezért, a feltevések megfogalmazásakor alapozzunk az eddig ismereteinkre. Ebben segíthet ha a a következő sablont használjuk:</p>
                            <figure>
                                <img src="{{ asset('media/blog/what-are-hypotheses-in-product-development-template-hu.png') }}" alt="Mivel tudjuk, hogy [eddigi ismeret], ezért ha [valamit csinálunk] akkor [tesztelhető kimenet]." />
                            </figure>
                            <p>A fenti sablont felhasználva, az értékfeltevésünket a következő módon javíthatjuk:</p>
                            <p class="has-margin-b60">Mivel tudjuk, hogy <span class="has-text-underlined">a 25 km/h sebességet meghaladó mikromobilitási eszközt (kerékpár, elektromos kerékpár, elektromos roller) városban, napi rendszerességgel használó emberek nem érzik magukat biztonságban utazás közben</span>, ezért ha <span class="has-text-underlined">fejlesztünk egy olyan eszközt ami hang- és rezgés jelzésekkel riaszt az akadályokhoz közeledve</span>, akkor <span class="has-text-underlined">a felhasználók nagyobb biztonságban lesznek utazás közben</span>.</p>
                            <h3 class="heading-3 has-margin-b30">Légy SMART</h3>
                            <p>A SMART kritériumok alapján való célok meghatározása valószínüleg sokaknak ismerős már. A jó hír az, hogy ha ezeket a SMART kritériumokat használjuk a hipotéziseink meghatározásakor is, akkor azok sokkal könnyebben tesztelhetőek lesznek.</p>
                            <p class="has-margin-b30">A SMART egy betűszó, az angol Specific, Measurable, Achievable, Relevant és Time-bound szavakból áll össze. Magyarul specifikus, mérhető, elérhető, releváns és időben határolt.</p>
                            <h4 class="heading-4 has-margin-b30">Specifikus</h4>
                            <p>Emlékezzünk vissza, hogyan szólt a probléma hipotézisünk: "a mikromobilitást használók nem elégedettek a jelenlegi biztonsági megoldásokkal". Ez a feltevés sem elég specifikus. Javíthatnánk rajta például úgy, hogy pontosabban megjelöljük melyik jelenlegi biztonsági megoldásokkal nem elégedettek.</p>
                            <p class="has-margin-b30">Az érték hipotézisünk tesztelhető kimenetét pedig úgy fogalmaztunk fentebb meg, hogy "a felhasználók nagyobb biztonságban lesznek utazás közben". Ez a megfogalmazás is lehetne azért specifikusabb. Például, mondhatnánk azt, hogy "a felhasználók nagyobb mértékben észreveszik a mozgó (gépjármű, gyalogos, egyéb mikromobilitási eszköz) és statikus akadályokat (oszlop, útburkolati hibák) akadályokat".</p>
                            <h4 class="heading-4 has-margin-b30">Mérhető</h4>
                            <p class="has-margin-b30">Már közelebb vagyunk egy kicsit egy SMART érték hipotézishez, de ha jól megnézzük, akkor a fenti feltevés egyáltalán nem mérhető. Ahhoz, hogy mérhető is legyen, határozzuk meg mi a számunkra minimálisan elvárt javulás mértéke: "a felhasználók 80%-ban nagyobb mértékben észreveszik a mozgó (gépjármű, gyalogos, egyéb mikromobilitási eszköz) és 40%-ban nagyobb mértékben a statikus akadályokat (oszlop, útburkolati hibák) akadályokat".</p>
                            <h4 class="heading-4 has-margin-b30">Elérhető (Teljesíthető)</h4>
                            <p>Ennek a kritériumnak a fontosságát talán az eredetileg meghatározott perszóna feltevésünk mutatja meg legjobban, amely így szólt: "az összes (motorizált és nem motorizált) mikromobilitási eszközt használó embert érinti a probléma".</p>
                            <p>Kevésbé tapasztaltak is könnyen kiszúrják, hogy ez azért ebben a formában nehezen támasztható alá. De mivel ezt a feltételezést még a legelején fogalmaztuk meg, amikor nem voltak még előző ismereteink a felhasználókról, ezért ez könnyen megbocsátható.</p>
                            <p>Ahogy haladtunk előre a felhasználói interjúkkal, annák elérhetőbb lett ez a feltevésünk is. "A 25 km/h sebességet meghaladó mikromobilitási eszközt (kerékpár, elektromos kerékpár, elektromos roller) városban, napi rendszerességgel használó emberek lesznek a vásárlóink" feltevés már reálisan elérhető.</p>
                            <p class="has-margin-b30">A feltételezések átfogalmazása, részletezése egy természetes, kötelező velejárója a tanulási folyamatnak. Minden ilyen változást fókuszváltásnak, vagy pivotnak nevezünk.</p>
                            <h4 class="heading-4 has-margin-b30">Releváns</h4>
                            <p>Ha a feltételezésünk nem releváns, akkor fontos időt tölthetünk el ennek tesztelésével, sőt könnyen rossz irányba is terelheti a termékfejlesztést. Egy releváns feltételezés mindig hozzájárul ahhoz, hogy közelebb kerüljünk a víziónk megvalósításához.</p>
                            <p class="has-margin-b30">A mi esetünkben egy nem releváns feltételezés lehetne az, hogy "a biztonsági kütyünk helyettesíti majd a bukósisakot". Ez több szempontból sem releváns. Elsősorban, nem is célunk a bukósisakot helyettesíteni, mivel más-más problémát old a két eszköz meg. Másodsorban, sok országban kötelező a bukósisak használata, ezért a jogszabályok miatt nem is valósítható meg.</p>
                            <h4 class="heading-4 has-margin-b30">Időben határolt</h4>
                            <p>Ezt a kritériumot talán a növekedési hipotéziseink segítségével lehet érzékeltetni. Egyik feltételezésünk úgy szólt, hogy "a vásárlók szeretik annyira a terméket, hogy másoknak is ajánlják". Ez a feltételezés nem mérhető, ezért kezdetnek orvosoljuk ezt a problémát: "a vásárlók szeretik annyira a terméket, hogy legalább 1 másik embernek is ajánlják".</p>
                            <p>Elég-e mérhetőnek lennie a feltételezésnek? Tegyük fel, hogy egy felhasználó a vásárlás utáni 1 hónap alatt 3 embernek ajánlja a terméket, de utána soha. Egy másik pedig csak 1 embernek ajánlja termékünket, viszont ezt megteszi havonta. Egyértelműen más lesz mindkettő esetében a növekedési arányunk. Ezért fontos, hogy a feltételezésünket időben is határoljuk. Fogalmazhatnánk például úgy, hogy "a vásárlók szeretik annyira a terméket, hogy átlagban havonta legalább 1 másik embernek is ajánlják".</p>
                            <figure>
                                <img src="{{ asset('media/blog/what-are-hypotheses-in-product-development-smart.png') }}" alt="Formulate hypothesis according to SMART principles" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Utószó</h2>
                            <p>Remélem a fenti sorok segítenek abban, hogy a termékfejlesztés különböző fázisaiban, hogyan érdemes a feltételezéseket meghatároznod. Nem könnyű feladat jól megfogalmazni a hipotéziseket, de megéri a befektetett energiát.</p>
                            <p>Az itt leírtakat csupán egy útmutatónak szántam, nem egy kötelező szabályrendszernek. Nem gond, ha nem használod a "mivel tudjuk, hogy [eddigi ismeret], ezért ha [valamit csinálunk] akkor [tesztelhető kimenet]" sablont, hanem helyettesíted valamivel, ami számodra kézenfekvőbbel. Az sem gond, ha nem minden feltételezés kötelezően időben határolt vagy akár mérhető.</p>
                            <p>Mint mindig, a cél az, hogy minden egyes feltételezés tesztelésével többet tudjál meg a felhasználóidról és ezt empirikus adatokkal alá is tudjad támasztani.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hipotézisek a termékfejlesztésben'])
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
    "datePublished": "2021-06-14T12:00:00",
    "dateModified": "2021-06-14T12:00:00",
    "description": "Ebben a cikkben megismerjük a különböző hipotézis típusokat, illetve azt, hogy hogyan érdemes őket megfogalmazni és tesztelni.",
    "headline": "Hipotézisek a termékfejlesztésben",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-what-are-hypotheses-in-product-development.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztési folyamat, Érték hipotézis, Növekedési hipotézis",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hipotézisek a termékfejlesztésben",
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
                "name": "Hipotézisek a termékfejlesztésben"
            }
        }
    ]
}
</script>
@endpush
