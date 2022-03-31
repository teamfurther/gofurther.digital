@section('title', 'A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat')
@section('description', 'Ahhoz, hogy egy termék sikeres legyen, több a felhasználóinkról tett feltevésnek igaznak kell bizonyulnia. Ez a cikk megmutatja, hogyan tudjuk ezeket tesztelni.')
@section('preview_image', asset('media/blog/cover-the-lean-product-process-1-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-the-lean-product-process-1-hu.png') }}" srcset="{{ asset('media/blog/featured-the-lean-product-process-1-768w-hu.png') }} 768w, {{ asset('media/blog/featured-the-lean-product-process-1-1000w-hu.png') }} 1000w" sizes="100vw" alt="A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-03-05 12:00:00">2021 március 5</time> &middot; 12 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Gimnáziumi, majd később egyetemi éveim alatt is folyamatosan azon törtem a fejem, hogy minek kell ennyi elméletet oktatni. Miért olyan kevés a gyakorlat? Bár azt a véleményemet, hogy a gyakorlati oktatás aránya továbbra is kevés az elmélethez mérten, rá kellett jönnöm ezeket a cikkeket írva, hogy gyakorlatozni egyszerűen nem lehet, ha nem tesszük rendbe az elméleti alapokat.</p>
                            <p>Az <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}">előző cikkem</a> volt az elméleti rész. Megismertük az építs-mérj-tanulj ciklust, a validációt mint módszer és a lean termékfejlesztés különböző szakaszait. A jó hír az, hogy innentől kezdve már többnyire gyakorlat jön. Arányaiban pedig bőven több lesz mint ahogy azt suliból megszoktuk.</p>
                            <p>A következő cikkekben az említett termékfejlesztési szakaszokat veszem majd górcső alá és mindegyik esetében bemutatom, hogyan lehet gyakorlatba ültetni az építs-mérj-tanulj ciklust, illetve, hogy milyen eszközök állnak rendelkezésedre. Kezdjük is a probléma validációval.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-1-hu.png') }}" alt="Validáció a termékfejlesztésben - Probléma Validáció" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">A vízió</h2>
                            <p>Minden itt kezdődik. Van egy víziónk egy termékről, ami megoldja majd egy vagy több célcsoport egy vagy több égető problémáját. A példa kedvéért legyen a termékünk egy olyan készülék, ami biztonságosabbá teszi a közlekedést a motorizált és nem motorizált <a href="https://en.wikipedia.org/wiki/Micromobility" target="_blank">mikromobilitási eszközöket</a> használók számára egyaránt.</p>
                            <p>Egy olyan termék amit a kerékpárra, elektromos rollerre vagy akár Segwayre szerelhetünk és kismillió szenzornak köszönhetően egy fokozatosan erősödő rezgéssel és sípolással jelez ha akadályt vagy veszélyt érzékel (gyalogos átjáró, gépjármű, stb.). Nem tudom létezik-e már ilyen termék. Azt sem tudom, hogy egyáltalán technikailag kivitelezhető-e egy ilyen termék. De a gyakorlat kedvéért tegyük fel, hogy nem létezik és minden technikai alapfeltétel is adott.</p>
                            <p>Ahhoz, hogy a termék sikeres legyen, <a href="{{ localizedRoute('blog.show', ['slug' => 'hipotezisek-a-termekfejlesztesben']) }}">különböző feltevéseknek</a> kell beigazolódniuk. Bontsuk fel a víziónkat a következő feltevésekre:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>az összes (motorizált és nem motorizált) mikromobilitási eszközt használó embert érinti a probléma</li>
                                <li>a mikromobilitást használók nem érzik biztonságban magukat utazás közben és szeretnének nagyobb biztonságban utazni</li>
                                <li>a mikromobilitást használók nem elégedettek a jelenlegi biztonsági megoldásokkal</li>
                                <li>az eszközünk hozzájárul ahhoz, hogy a felhasználók nagyobb biztonságban legyenek utazás közben</li>
                                <li>az eszközünk olyan jelentős mértékben megnöveli a felhasználók biztonsági érzetét, hogy emiatt rendszeresen használják</li>
                                <li>a termék könnyen használható</li>
                                <li>a felhasználók megbíznak az eszközben</li>
                                <li>a felhasználók hajlandóak továbbra is pénzt vagy értéket adni a termékünkért vagy szolgáltatásunkért cserébe</li>
                                <li>meg tudjuk tartani a meglévő vásárlóinkat, esetleg el tudunk nekik kiegészítő terméket vagy szolgáltatást adni</li>
                                <li>a felhasználók szeretik annyira a terméket, hogy másoknak is ajánlják</li>
                            </ul>
                            <p>Akik már tapasztaltabbak a lean termékfejlesztésben, biztosan kiszúrták már, hogy a fenti feltevések kicsit sántítanak. Nem véletlenül fogalmaztam meg így őket, hanem próbáltam olyan módon felállítani a hipotéziseinket, ahogy azt egy olyan termékfejlesztő csapat tenné, aki az első termékét fejleszti. Az a célom, hogy megmutassam az utat egy sikeres termék felé, de közben kezeljük a biztosan bekövetkező buktatókat és akadályokat us. Később majd <a href="{{ localizedRoute('blog.show', ['slug' => 'hipotezisek-a-termekfejlesztesben']) }}">finomítunk a megfogalmazásokon.</a></p>
                            <p>A termékfejlesztés első szakaszában, a probléma validációs fázisban – azon belül is az Építs-Mérj-Tanulj ciklus Tanulj részében – a fenti feltételezések közül az első háromra koncentrálunk. Ezeket nevezzük probléma feltevésnek vagy probléma hipotézisnek.</p>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Kintről-befelé megközelítés</h2>
                            <p>Sok startup már ezen a ponton elköveti a végzetes hibát és nem tölt el (elegendő) időt a probléma feltevések megértésével. Ezek a csapatok egy bentről-kifelé megközelítést alkalmaznak, amelyben a vízió egy belső igényből fakad és egy vagy több csapattag, esetleg egy pár ismerős véleménye alapján úgy döntenek, hogy érdemes belekezdeni az építkezésbe.</p>
                            <p>Ez homlokegyenest ellentmond a lean termékfejlesztés elveivel, hiszen ebben az esetben semmit nem tudunk arról, hogy kinek van még ilyen problémája vagy, hogy van-e annyira jelentős ez a probléma a potenciális ügyfelek számára, hogy érdemes legyen vele foglalkozni.</p>
                            <p>Ezzel ellentétben, a kintről-befelé megközelítés az írja elő, hogy mielőtt elkezdünk bármit is tervezni, kezdjünk el ügyfelekkel beszélni. Steve Blank, a The Four Steps to Epiphany szerzője <a href="https://steveblank.com/2010/04/08/no-plan-survives-first-contact-with-customers-%E2%80%93-business-plans-versus-business-models/" target="_blank">azt mondja,</a> hogy minden üzleti terv addig tűnik jó tervnek, amíg először megmutatjuk egy ügyfélnek. Blank arra ösztönzi olvasóit, hogy lépjenek ki az irodából ("get out of the building") és kezdjenek el a potenciális ügyfelekkel a megoldani kívánt problémákról (nem a megoldásról!) beszélgetni. Lássuk, hogy lehet ezt gyakorlatban megvalósítani!</p>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Ismerjük meg a célcsoportunkat</h2>
                            <p>Ok. Kint állunk a tavaszi napsütésben az iroda előtt. Van egy feltevésünk, hogy az általunk azonosított problémára mások is szeretnének egy megoldást. Erről szeretnénk emberekkel beszélgetni. De kivel? Az idős bácsikkal akik a szemközti padon sakkoznak? A fél fejét fülessel eltakaró, gördeszkázó lánnyal? Vagy a padon újságot olvasó üzletemberrel?</p>
                            <p>Azt érezzük, helyesen, hogy nem mindegyikőjüket érinti egyformán a probléma és, hogy az eltérő társadalmi hátterük és élethelyzetük miatt teljesen más véleményük lesz az adott problémáról. Lehet, hogy az sakkozó bácsik véleménye nem lesz számunkra olyan releváns, mint a gördeszkás lányé, hiszen őket nem érinti közvetlenül a probléma. De ettől még biztosak lehetünk benne, hogy lesz véleményük. Ez a vélemény pedig könnyen tévútra is terelhet minket.</p>
                            <p>Az újságot olvasó üzletember is lehet célcsoportunk. Könnyen meglehet, hogy biciklivel, vagy elektromos rollerrel jár munkába. De ezt nem tudhatjuk róla. Lehet, hogy a beszélgetésből értékes információkhoz jutunk, de valószínűbb, hogy csak egy zsákutcába ütközünk. Érdemes az időnket inkább olyan beszélgetésekre fókuszálnunk, amiből nagy valószínűséggel hasznos tudást meríthetünk.</p>
                            <p>Éppen ezért nagyon fontos, hogy mielőtt elkezdünk emberekkel beszélgetni, pontosan határozzuk meg, hogy kinek a véleményére vagyunk kíváncsiak. Ki az, akinek a problémáját meg szeretnénk határozni? Erre a legjobb módszer az úgynevezett perszónák felépítése.</p>
                            <h3 class="heading-3 has-margin-b30 has-margin-t60">Perszónák</h3>
                            <p>A perszónák készítésével mint eszközzel találkozhattunk már más területeken is, mint pld. a UX design (felhasználói perszónák / user personas) vagy a marketing (vásárlói perszónák / buyer personas). Ezeken a területeken a perszónákat egy későbbi, tervezési fázisban használják, de termékfejlesztésben egy sokkal koraibb szakaszban is kiváló eszköznek bizonyulnak, hogy felvázoljuk a célcsoportunkról alkotott feltevéseinket.</p>
                            <p>Egy <a href="{{ localizedRoute('blog.show', ['slug' => 'perszonak-a-termekfejlesztesben']) }}" target="_blank">későbbi cikkben</a> jobban körbejárom majd hogyan is érdemes perszónákkal dolgozni. Egyelőre nézzük meg, mit kell egy perszóna tartalmazzon:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Név</li>
                                <li>Reprezentatív fotó</li>
                                <li>Rövid biográfiai leírás</li>
                                <li>Foglalkozás</li>
                                <li>Szegmentáció (demográfiai, pszichográfiai, viselkedésbeli, szükség alapú, stb.)</li>
                                <li>(Feltételezett) problémák és/vagy fájdalompontok</li>
                                <li>(Feltételezett) célok/szükségletek</li>
                                <li>(Feltételezett) félelmek</li>
                                <li>Környezet (hol találkozhat ezzel a problémával, hol használja majd a terméket)</li>
                            </ul>
                            <p>Ezen a ponton fontos megjegyeznem, hogy mielőtt egyetlen potenciális felhasználóval is beszélünk, még nem tudhatjuk, hogy hogyan nézzenek ki a perszónák. Ilyenkor még csak feltételezzük, hogy kik ők. Előfordulhat, hogy eredetileg egy bizonyos csoportot céloztunk meg, de ahogy haladunk előre a termékfejlesztéssel egy teljesen más célcsoportot vonzunk be. A perszónák változása egy természetes, sőt elvárt jelenség a lean termékfejlesztésben.</p>
                            <p>A mi esetünkben egy perszóna a következőképpen nézhet ki:</p>
                            <figure>
                                <a href="{{ asset('media/blog/the-lean-product-process-1-persona-hu.png') }}" target="_blank">
                                    <img src="{{ asset('media/blog/the-lean-product-process-1-persona-hu.png') }}" alt="" />
                                </a>
                                <figcaption>Nagyításhoz kattints a képre</figcaption>
                            </figure>
                            <p>További perszónák lehetnek például az elektromos rollerrel munkába ingázók vagy a hétvégén a Pilisben tekerő amatőr országúti kerékpárosok is.</p>
                            <p>Szintén fontos megjegyeznem, hogy a felhasználó nem minden esetben egyezik meg a vevővel. A fenti termék esetében egy potenciális vásárló lehet egy aggódó anyuka (vagy apuka), aki a gyereke iránti gondviselése miatt lehet célcsoportunk. Ebben az esetben a felhasználó továbbra is a gyerek lesz.</p>
                            <p>De akár egy elektromobilitási eszközöket gyártó üzem technológiai vagy gyártási vezetője is lehet potenciális vásárló, aki beépítené az eszközünket a saját termékébe. Az ő igényeik mások lesznek mint egy felhasználóé. Ebben az esetben érdemes lehet a felhasználói perszónák mellé vásárlói perszónákat is felállítani.</p>
                            <p>A vízió és a perszónák meghatározásával meg is tettük a legfontosabb lépéseket a tanulási ciklus Építs szakaszában.</p>
{{--                            <p><i>Töltsd le az ingyenes startup eszköz sablonjainkat, amelyben kitölthető perszóna sablon is találsz.</i></p>--}}
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Értsük meg a felhasználóinkat</h2>
                            <p>Most, hogy már meghatároztuk milyen kérdésekre keressünk a választ (feltevések) és szerintünk kik lehetnek a potenciális felhasználóink, elérkeztünk az Építs-Mérj-Ciklus utolsó, Mérj szakaszába.</p>
                            <p>Ne tévesszen meg a megnevezés: bár a Tanulj szerepel az utolsó helyen, mint láttuk tulajdonképpen a teljes tanulási ciklus azzal kezdődött, hogy felállítottuk a hipotéziseinket, vagyis azt, hogy mit szeretnénk megtanulni. A Mérj szakasz után már csak tényleges tanulás marad, vagyis az, hogy levonjuk a megfelelő következtetéseket.</p>
                            <p>Mint azt már korábban is említettem, a probléma validációs fázisban, a Mérj szakasz leghasznosabb és egyben leghatékonyabb eszköze az interjúztatás lesz.</p>
                            <h3 class="heading-3 has-margin-b30 has-margin-t60">Felhasználói interjúk</h3>
                            <p>Kétféle ember létezik: aki teljesen elemében van interjúztatás közben, illetve az aki fél az interjúztatástól. Tény, hogy az interjúkészítés nem egyszerű téma. Én magam is az utóbbiak közé tartoztam. Sokkal inkább fórumokat vagy blogokat bújtam, hogy megpróbáljam felmérni mások véleményét. Bármit, csak ne kelljen interjúztatni.</p>
                            <p>Dan Olsen, a The Lean Product Playbook című könyvében hosszan részletezi, hogyan tudunk jól interjúztatni. Nekem az ő könyvének olvasása adta meg végső löketet, hogy elkezdjek a termék ötleteimről másokkal is beszélgetni. Szerintem továbbra sem vagyok egy jó interjúztató, de már az első pár beszélgetés megmutatta számomra, hogy még így is sokkal hatékonyabbak az 1/1-es interjúk, mint amit addig csináltam.</p>
                            <p>Arra bíztatok mindenkit, hogy bátran menjen ki az utcára és kezdjen el beszélgetni a gördeszkás lánnyal. Készüljünk egy interjú forgatókönyvvel. Ezt nem kell úgy kezelni mint a szentírást. Használjuk úgy, mint egy laza útmutatót, amely segít, hogy folyamatosan szem előtt tartsuk a feltevéseinket, hogy olyan mederbe tudjuk terelni a beszélgetést, hogy ezekre kapjunk választ.</p>
                            <p>Ne pitchelj! Az interjú azért szükséges, hogy információt, vélemény kapjunk az interjú alanytól. Nem azért, hogy pitcheljük nekik a (még nem létező) termékünket. Ha azzal kezdjük az interjút, hogy pitchelünk, egyből egy nem kívánt irányba terelhetjük a beszélgetést. Az interjú alanyok ilyenkor kedvességből inkább egyetértő  válaszokat fognak adni, akkor is ha ez nem fedi teljesen a valóságot. Határozzuk meg a beszélgetés irányát, de engedjük az interjúalanyt beszélgetni.</p>
                            <p>Legyen empatikusak, figyeljünk oda arra amit mond. Minden válasza egy újabb lehetőség arra, hogy valami újat tanuljunk. Ezek a legfontosabb interjú szempontok amit most kiemelnék. Amint említettem, az interjúztatás egy komplex téma, amit majd egy későbbi blog cikkben bővebben is kifejtek.</p>
                            <p>A gördeszkás lánytól az interjú során valószínüleg megtudjuk, hogy bár szívesen használna egy olyan eszközt, ami biztonságosabbá teszi a közlekedését, ez nem annyira fontos szempont számára. A bukósisakot és könyökvédőt is csak a szülei miatt viseli.</p>
                            <p>Ebből már tanulhatunk. Lehet, hogy nem is a gördeszkás lány lesz a vásárlónk? Hanem a szülei? A lány csak egy felhasználó? Ez egy olyan szempont, amire későbbi interjúk során is érdemes lesz odafigyelni és rákérdezni. Ha kialakul egy minta, akkor érdemes lesz egy külön vásárlói perszónát erre felállítanunk – az aggódó szülő perszónát –, akiket ismét, külön is interjúztatunk majd. Ez már egyfajta pivot (fókuszváltás), de erről majd később.</p>
                            <h3 class="heading-3 has-margin-b30 has-margin-t60">Terepmegfigyelés</h3>
                            <p>Bizonyos esetekben a terepmegfigyelés is hasznos eszköznek bizonyulhat, főként olyan termékeknél, amelyek jelentős mértékben függnek a felhasználók viselkedésétől vagy éppen a felhasználók viselkedését szeretnék megváltoztatni.</p>
                            <p>A mi termékünk esetében hasznos lehet ha beülünk egy kávézóba egy forgalmas útkereszteződésben és megfigyeljük az arra közlekedőket. Hány elektromos rolleres lassít az útkereszteződésben? Hány bringás száll le a gyalogos átjárónál? A jobbra kanyarodó autók figyelik-e a mellettük haladó kerékpárt vagy rollert? Hol közlekednek a gördeszkások és görkorisok, a járdán vagy az úttesten?</p>
                            <p>Az is hasznos lehet, ha mi magunk pattanunk fel a különböző mikromobilitási eszközökre és saját bőrünkön teszteljük, hogy mennyire biztonságos velük közlekedni. Próbáljuk ki a forgalmas belvárosban, de a külső kertvárosias negyedekben is, ahol kevésbé kiépített a mikromobilitási közlekedési infrastruktúra és jóval több a jobbkéz-szabály.</p>
                            <p>Mérlegeljünk, mennyi hasznos információt kapunk a terepmegfigyelések során. Megéri-e a nekünk a befektetett időt? Vagy inkább használjuk fel azt az időt arra, hogy interjúztatunk. Egy dolog biztos, hogy a terepmegfigyelés nem helyettesítheti az interjúkat. Viszont könnyen felkeszíthet minket egy interjúra, hogy jobban tudjunk kérdezni.</p>
                            <h3 class="heading-3 has-margin-b30 has-margin-t60">Élménytérkép</h3>
                            <p>Az élménytérkép szintén egy jó eszköz lehet ebben a fázisban, hogy jobban megismerjük a felhasználóink (perszónák) viselkedését és kihívásait. Az élménytérkép egy kollaboratív eszköz, amely segít illusztrálni egy perszóna útját (élményét) egy konkrét narratíván keresztül.</p>
                            <p>Kezdjük azzal, hogy felvázoljuk honnan indulunk és hova érkezünk meg. Hogyan kezdődik az utazás? Hogyan végződik és hogyan lépünk át a következő utazásba?</p>
                            <p>Ezek után határozzuk meg a színteret. Ez az a kontextus, fizikai vagy logikai tér ahol az interakció történik. Egy webshop esetén ezeke lehet a weboldal, a mobil applikáció, ügyfélszolgálat vagy a fizikai bolt maga. A mi esetünkben (mivel még nincs termék) ez lehetne egy városi utca, egy köztér vagy a gördeszka park.</p>
                            <p>Végül pedig minden színtér esetében határozzuk meg az akciókat (mit cselekszik a perszóna), a reakciókat (milyen felfogható változás következett be) és következő lépést (milyen opciókkal vagy nehézségekkel néz most szembe a perszóna).</p>
                            <p>Az élménytérkép illusztrálhat egy jelenlegi utat, vagy egy elképzelt (vágyott) utat. Utóbbi inkább a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}">probléma-megoldás illeszkedés</a> termékfejlesztési fázisban lesz hasznos.</p>
                            <p>Tapasztalatom azt mutatja, hogy az élménytérkép akkor vezet a legjobb eredményhez, ha ezt közösen készítjük el a potenciális felhasználókkal. Ez egy kitűnő lehetőséget ad arra, hogy megfigyeljük a reakciójukat az út egy-egy pontján. Ezeket akár illusztrálhatjuk is az élménytérképen egy érzelem-diagram formájában, ahol a csúcsok jelölik a pozitív reakciókat, a völgyek pedig a negatívakat.</p>
{{--                            <p><i>Töltsd le az ingyenes startup eszköz sablonjainkat, amelyben kitölthető élménytérkép sablont is találsz.</i></p>--}}
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-1-flow-workshop.jpg') }}" alt="Egy ügyfelünkkel közösen készített élménytérkép" />
                                <figcaption>Egy ügyfelünkkel közösen készített élménytérkép</figcaption>
                            </figure>
                            <h2 class="heading-2 has-padding-b30">Utolsó lépések</h2>
                            <p>Most, hogy láttunk egy pár válogatott eszközt arra, hogy felmérjük a probléma validitását, nem marad más hátra, mint hogy visszatérjünk a Tanulás fázishoz. Mit mutatnak a terepmegfigyelések és interjúk? Mi derül ki az élményérképekből? Választ kaptunk a feltevéseinkre?</p>
                            <p>Emlékeztetőül, jelenleg  következő három feltevésre kerestük a választ:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>az összes (motorizált és nem motorizált) mikromobilitási eszközt használó ember érinti a probléma</li>
                                <li>a mikromobilitást használók nem érzik biztonságban magukat utazás közben és szeretnének nagyobb biztonságban utazni</li>
                                <li>a mikromobilitást használók nem elégedettek a jelenlegi biztonsági megoldásokkal</li>
                            </ul>
                            <p>Ha mindegyik feltevésre megerősítő választ kaptunk, akkor továbbléphetünk a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}">termékfejlesztés következő szakaszára</a>. Ez azonban ritkán szokott bekövetkezni. Ezekben az ellenkező esetekben következik be az úgynevezett pivot, vagyis a fókuszváltás. Egy pivot során a tanultak alapján módosítunk a feltevéseinken és újrakezdjük ezeknek a validációját.</p>
                            <p>A mi esetünkben nagy valószínűséggel már az első feltevés hamisnak fog bizonyulni. Arra, hogy ebben az esetben hogyan pivotoljunk, szintén egy későbbi cikkben fogok majd reflektálni. Egyelőre nézzük meg inkább, hogy miként validáljuk a megoldásunkat, ha már sikerült bizonyítani a probléma validitását. De ezt már egy következő cikkben!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat'])
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
    "datePublished": "2021-03-05T12:00:00",
    "dateModified": "2021-03-05T12:00:00",
    "description": "Ahhoz, hogy egy termék sikeres legyen, több a felhasználóinkról tett feltevésnek igaznak kell bizonyulnia. Ez a cikk megmutatja, hogyan tudjuk ezeket tesztelni.",
    "headline": "A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-the-lean-product-process-1-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztési folyamat, Felhasználó, User Persona, User interview, ",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat",
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
                "name": "A lean termékfejlesztési folyamat: 1. Értsük meg a felhasználóinkat"
            }
        }
    ]
}
</script>
@endpush
