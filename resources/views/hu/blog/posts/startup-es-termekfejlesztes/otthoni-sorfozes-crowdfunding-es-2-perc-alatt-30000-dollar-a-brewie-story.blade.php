@section('title', 'EXTRA: Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story')
@section('description', 'A mai EXTRA-ban a Brewie sikeres közösségi finanszírozási kampánya mögötti emberekkel beszélgetünk arról, hogyan érdemes egy ilyen kampány összerakni és menedzselni.')
@section('preview_image', route('generate-cover', ['title' => 'Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">EXTRA: Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-04-11 10:00:00">2022 április 11</time> &middot; 13 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Eddigi posztjainkban már többször említettük a közösségi finanszírozási, angolul crowdfunding kampányokat, mint finanszírozási és validációs lehetőséget egy startup projekt számára. Most, az első extra kiadású cikkünkben ezt a témát, annak is a jutalom-alapú (reward-based) alfaját vesszük górcső alá.</p>
                            <p>Volt szerencsénk már több ilyen kampány színfalai mögé betekinteni, de ettől még nem lettünk a téma szakértői, sőt. Ezért ennek a cikknek a megírásához segítséget kértem korábbi ügyfeleinktől, Pál Marcelltől és Szegedi Attilától, akik a Brewie Indiegogo-s közösségi kampányát közösen rakták össze.</p>
                            <p class="has-margin-b60">A Brewie a világ első teljesen automatizált otthoni sörfőző gépe. Az alapötlet egy közös sörözésből indult, amikor András, az egyik társalapító, saját sörét kóstoltatta meg Marcellékkel. Nem kellett sok idő ahhoz, hogy elkezdjenek azon gondolkozni, hogy András 8 órás otthoni sörfőző mutatványát, hogy lehetne automatizálni és mindenki számára elérhetővé tenni. A Brewie az elsők között volt aki itthon sikeres crowdfunding kampányt futtatott.</p>
                            <h2 class="heading-2 has-margin-b30">Az első lépések</h2>
                            <p><strong>PÉTER: </strong> Volt tehát egy ötletetek. Mik voltak az első lépések?</p>
                            <p><strong>BREWIE: </strong> Ahogy egyre több embernek elmeséltük [az ötletet], annál inkább visszajött, hogy ez mást is érdekelne. Ezért csináltunk egy nagyobb szabású kérdőívet amivel amerikai sörfőzőket, hobbi sörivókat meg kézműves sör iránt érdeklődőket kérdeztünk a koncepcióról. Körülbelül 200 fő töltötte ki, ami nem nevezhető reprezentatívnak, de a kitöltők 80%-a a kérdőív végi komment részbe írt ötleteket, ami mutatta a projekt iránti nagy érdeklődést.</p>
                            <p>Ami még érdekes volt, hogy azok között akik még nem főztek sört, még magasabb volt az aránya azoknak, akik azt mondták, hogy vennének ilyen gépet. Ez azt mutatta nekünk, hogy ez nem csak egy niche réteget érdekel, hanem átlag sörfogyasztókat is.</p>
                            <p class="has-margin-b60">Ezt követően kidolgoztuk, hogy ez, hogy épülhet fel üzletileg, elvittük egy dán startup versenyre (megj. Marcell akkoriban Dániában tanult, innen a dán kötődés), a <a href="https://venturecup.dk" target="_blank">VentureCup</a>-ra, ahol 350 csapatból végül 2. helyen végeztünk. Ezt követően jött az elhatározás, hogy nézzük meg mit tudunk belőle kihozni és az első kérdés az volt, hogy hogyan finanszírozzuk meg a projektet.</p>
                            <p><strong>PÉTER: </strong> Volt-e más opció is, például kölcsön vagy befektető? Mi billentette mégis a crowdfunding felé a mérleget?</p>
                            <p><strong>BREWIE: </strong> 2013 elejét írunk, Magyarországon körülbelül ekkor indult a tőkebefektetési hullám. Azt beszéltük a srácokkal, hogy nem adunk ki a cégből 20%-30%-ot, egy akkoriban nagyjából 20-30M Ft.-os befektetésért.</p>
                            <p>De azt mondtuk, hogy ha hajlandóak vagyunk egy évig ingyen dolgozni, akkor reális esély van arra, hogy ezt crowdfundingban jól meglehessen finanszírozni. Ezt azért gondoltuk így, mert akkoriban a crowdfunding rettenetesen népszerű volt, talán még népszerűbb mint most, nagyon könnyen lehozták az újságok az összes sikeres crowdfundingot.</p>
                            <p>Azt mondtam a srácoknak, hogy ha úgy gondolják ez az irány jó lehet, akkor én meg fogok tenni mindent, hogy ez a kampány sikeres legyen. Mondtam ezt úgy, hogy soha előtte nem csináltam crowdfunding kampányt, de az az elvem, hogy minden tanulható és ez is tanulhatónak tűnt.</p>
                            <p class="has-margin-b60">23-24 évesek voltunk, túl sok vesztenivalónk nem volt, ezért azt tettük, hogy megbeszéltük, hogy 1 évig mindenki ingyen dolgozik, rendesen 8 órában.</p>
                            <figure>
                                <img src="{{ asset('media/blog/brewie-machine.jpg') }}" alt="Brewie" />
                            </figure>
                            <p><strong>PÉTER: </strong> Sokan a crowdfundingot arra használják, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">teszteljék a termékük piacképességét</a> és early adoptereket szerezzenek. A bejövő pénz nem, vagy csak másodlagos szempont. Nálatok volt-e ilyen megfontolás?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> Igen. Fontos volt, hogy ez egy piaci teszt is volt, egy validáció, hogy ténylegesen szükség van-e ilyen termékre. Az, hogy te el tudod adni a terméket és pénzt tudsz kapni érte, az egy nagyon jó visszajelzés.</p>
                            <p><strong>PÉTER: </strong> Mi szólt, ha volt egyáltalán ilyen, a crowdfunding ellen?</p>
                            <p><strong>BREWIE: </strong> Mindenki nagyon fél attól, hogy [a kampány] rosszul fog elsülni, leégsz a világ előtt és [a projekt] kudarcra van ítélve. Ez nem igaz, mert ha tegyük fel a termék jó, és crowdfundingon nem vagy sikeres, az legtöbb esetben azt jelenti, hogy a kutya nem tudott róla [a kampányról]. Az emberek vagy rosszul mérik fel a célközönséget, vagy nem tudják elérni. De a lényeg, hogy nem ismertek, tehát ettől nem kell félni.</p>
                            <p class="has-margin-b60">A másik veszélye a crowdfundingnak, hogy egy vállalást teszel egy csomó embernek. Ez lehet időbeli nyomás, illetve legtöbb cég aki crowdfundingol az még erősen fejlesztési szakaszban van és csak megtippelni tudja mennyibe fog nekik kerülni a termék, a szállítás. Mi is alulbecsültük [a fejlesztési időt] bőven. Majdnem kétszer annyi idő volt a fejlesztés, gyártás mint terveztük.</p>
                            <p><strong>PÉTER: </strong> Miért Indiegogo és nem Kickstarter vagy más platform?</p>
                            <p><strong>BREWIE: </strong> Ezen sokat filóztunk és mások is szoktak, mi szól mellette, mi szól ellene. Alapvetően volt pár befolyásoló tényező. Az egyik az, hogy mennyi volt a közönsége az adott platformnak. A Kickstarternek akkoriban kétszer annyi látogatója volt, ami azt jelentette, hogy sokkal több embert el tudtál érni. Elvileg, ha csak ezt az egy adatot nézted.</p>
                            <p>Viszont ami még sokat számít az pedig az, hogy mennyire látszódsz az adott platformon. Kickstarteren akkoriban kézzel választották ki a nekik tetsző projekteket és ezek a projektek egy napig lehettek kint a főoldalon. Ezzel szemben az Indiegogonál ez teljesen algoritmikus volt és ha a kampányod jól ment, kint tudtál lenni az egész kampány alatt végig a homepage-n. Bár feleannyi embert tudtál elérni, viszont 60 napig tudtad elérni azt a fele embert. Nálunk ez nagy döntésfaktor volt mellette.</p>
                            <p>A másik tényező az volt, hogy a Kickstartert akkoriban nem lehetett megoldani magyar céggel, kellett volna alapítani egy angol vagy amerikai céget (szerk.: azóta az Indiegogo sem elérhető magyarországi projektek számára), ami költség, adminisztráció, hogyan adózunk, mi ettől ódzkottunk.</p>
                            <p>A harmadik a százalék, hány százalékot visznek el [a platformok]. Akkoriban az Indiegogo volt az olcsóbb (szerk. jelenleg azonos 5% + tranzakciós költségek a jutalék mindkét platformon).</p>
                            <p>Az Indiegogonál aktívan támogatták a kampányt. Volt konzultáció és segítettek, elmondták mire kell odafigyelni, a Kickstarternél semmi ilyesmi nem volt. Az Indiegogonál sokkal aktívabban keresték a jó projekteket. Minket egyébként az Indiegogo egyik embere meg is talált egy rendezvényen és úgy kerültünk kapcsolatba végül a központtal és ők egy csomó jó tippel elláttak minket.</p>
                            <p class="has-margin-b60">Még az is tudna faktor lenni, hogy egyébként hol vannak ilyen [hasonló témájú] kampányok. Pont mielőtt indultunk megjelent egy másik Kickstarteren de ez így jó is volt, mert nem kannibalizáltuk egymástól a piacot.</p>
                            <h2 class="heading-2 has-margin-b30">Pre-campaign — hogyan ágyazzunk meg a sikernek</h2>
                            <p><strong>PÉTER: </strong> Tehát eldőlt, hogy crowdfunding lesz. Mik voltak az első lépések, hogyan lehet felkészülni egy közösségi kampányra?</p>
                            <p><strong>BREWIE: </strong> Az első és legfontosabb kérdés az volt, hogy akkor ezt kik vennék meg. Kialakítottunk nyolc célcsoportot akikről úgy gondoltuk, hogy bármilyen úton-módon is megvehetnék ezt a gépet. Tudtuk, hogy a mi célpiacunk Nyugat-Európa és Észak-Amerika. Azért mert egyrészt ott elterjedtebb a sörfőzés fogalma. Az USA-ban az emberek több mint 1%-a otthon sört főz, ami számomra hihetetlen szám még mindig. Másrészt, ott sokkal erősebb a vásárlóerő, mert láttuk, hogy akárhogy számolunk minimum 300e-400e Ft.-t kell [a gépért] majd kérnünk.</p>
                            <p>Végigmentünk, hogy akkor milyen csatornákon lehetne elérni őket. Nálunk a hirdetés gyorsan kiesett, mert ugye nagyjából 0 Ft büdzséből dolgoztunk. Két marketingeszközre építettük a kampány, az email marketingre és a PR-ra.</p>
                            <p>Korán elkezdtünk netről lehúzható adatbázisokat is építeni, de már projekt elejétől és próbáltunk különböző fórumokon, sörfőzős csoportokban feliratkoztatni embereket, érdeklődőket gyűjteni.</p>
                            <p>Másik oldalról meg az volt a jó, hogy ez egy szexi téma volt, főleg akkor. Tehát egyrészről a crowdfunding is nagyon népszerű volt, másrészt a sörfőzés is nagyon népszerű volt, a kézműves sör is nagyon népszerű volt, tehát így nagyon trendben voltunk és plussz volt, hogy ugye mi csináltuk ezt először. Ez az jelentette, hogy PR-ban nagyon könnyen lehoztak az újságírók minket.</p>
                            <p>Három listára osztottuk az újságírókat. Volt egy A, egy B és egy C listánk. A PR úgy működik, hogy a nagytól megy a kicsiig, de visszafele nem. Tehát ha egy hírt lehoz egy kicsi, elveszti az újdonság értéket és a nagy már nem fogja lehozni, fordítva viszont működik, sőt gyakran a legkisebbek átvesznek híreket.</p>
                            <p>E logika mentén kiválasztottunk 5-6 médiát és újságírót akiről tudtuk, hogy ebbe a témába írnak és akinek az olvasói közönsége el tudja érni a mi potenciális vásárlóinkat. Nagyon fontos, hogy nem csak az számít melyik újságnál hozod le a cikket, hanem az is, hogy melyik újságíró hozza le. Az újságírók nagyon aktívak Twitteren meg máshol is, tolják a saját kontentjüket és egy idő után van egy kialakult táboruk. Ha valaki eddig Gucci táskákról írt, akkor lehet nem ő lesz a legjobb újságíró arra, hogy automata sörfőző gépről írjon, érdemes ennek is utánanézni.</p>
                            <p>Ők voltak az A lista, 5-6 újságíró. Nekik ajánlottuk fel, hogy exkluzívan lehozhatják a hírt. Második lista volt egy olyan 100 médium, akikről úgy gondoltuk, hogy még nagyok, de nem a legnagyobbak és utána volt a maradék amin több ezer újságíró volt.</p>
                            <p>Megvolt pontosan ki hozza le majd az első cikket, a második cikket, megpróbáltuk megtervezni az egésznek a flowját.</p>
                            <p>Segített még, hogy az elejétől kezdve jártunk rendezvényekre. A bécsi Pioneers fesztiválon volt egy belső adatbázis és mindenkire rá lehetett írni. Úgyhogy mi minden újságíróra ráírtunk és így lett, hogy a cseh meg szlovák újságírók mellett megjelent egy Washington Post-os újságíró aki írt is rólunk. A cikk nagyjából egy hónappal az indulásunk előtt jött le és megduplázta feliratkozóink számát, plusz egy megkérdőjelezhetetlen kredibilitást adott nekünk az elejétől kezdve.</p>
                            <p class="has-margin-b60">Voltunk még Fortuneban, Engadgetben, CNET-en. Magyar médiára nem is mentünk, a magyar média szépen átvette a külfölditől.</p>
                            <h2 class="heading-2 has-margin-b30">A kampány-időszak</h2>
                            <p><strong>PÉTER: </strong> Mi az amit mindenképpen tartalmaznia kell a kampánynak? Mitől lesz hatásos egy kampány oldal?</p>
                            <p><strong>BREWIE: </strong> A kampányoldal lényegében egy landing page. Mind a két platform (szerk.: az Indiegogo és a Kickstarter) arra ad egy eszközt, hogy te oda embereket irányíts és ott a pénzüket el tudjad fogadni, bizonyos csomagokért cserébe.</p>
                            <p>Neked erre úgy kell tekintened, hogy van egy konkrét kampányod, te ide forgalmat fogsz irányítani különböző csatornákon keresztül, valószínüleg különböző célcsoportba eső embereket. Azt kell végiggondolnod, hogy ha te beérkeznél erre a landingra, akkor milyen sorrendbe, milyen információt szeretnél megtudni.</p>
                            <p>Azt vettük észre, hogy míg sokan arra koncentrálnak, hogy elmondják a csapatot meg a többit, a legsikeresebb kampányok inkább a termékről szólnak, mert a nap végén ez egy termék előértékesítés, az emberek a terméket veszik meg. Mi teljesen a termékre koncentráltunk és erősen próbáltuk kommunikálni azokat a USP-ket (szerk.: unique selling proposition, egyedi terméktulajdonság) amiért a gép mindent ver a földön.</p>
                            <p>A videó nagyon fontos. Hát a videó az drága. Akkoriban is 2-3M Ft. volt egy videó és ezt csináljuk meg nullás büdzséből. A <a href="http://www.colabs.hu" target="_blank">Colabsnak</a> az akkori vezetője olvasott rólunk és így írt, hogy nem nézhetné-e meg. Nagyon jó fej volt és kérdezte miben tudna segíteni. Mondtuk, hogy nem tud valami jó videóst? Mondta, hogy nem, de a barátnője operatőr és összeköt minket. Aki bevállalta, hogy ingyen megcsinálja nekünk és abban maradtunk, hogy majd a jövőbeli bevéltelből kifizetjük és még adtunk egy gépet ajándékba.</p>
                            <p>Ott vannak az idézetek is az újságoktól, ez jó, mert hitelességet ad és a végén a perk-ek, hogy mit is kaphatsz.</p>
                            <figure>
                                <img src="{{ asset('media/blog/brewie-campaign-page.png') }}" alt="A Brewie (második) kampányoldala" />
                                <figcaption><a href="https://www.Indiegogo.com/projects/brewie-world-s-first-fully-automated-home-brewery#/" target="_blank">A Brewie (második) kampányoldala</a></figcaption>
                            </figure>
                            <p><strong>PÉTER: </strong> Milyen termék esetében működik jól a közösségi finanszírozás?</p>
                            <p><strong>BREWIE: </strong> B2C hardver termékek esetében és főleg olyan termékek esetében amik valami újat adnak, tehát nem egy harmincezredik hajvasaló. Az is segít ha egy szexi, könnyen emészthető témában van a termék, mint a Brewienál volt a sörfőzés.</p>
                            <p>Hardver alatt értsd mindazt amit fizikailag meg tudsz fogni, például a társasjáték is. B2C, tehát itt végfelhasználókhoz beszélsz, nekik előértékesítesz, nem cégeknek.</p>
                            <p class="has-margin-b60">Láttunk már szoftveres próbálkozást is, ott is van akiknek jól megy, de a hardver a jellemzőbb.</p>
                            <p><strong>PÉTER: </strong> Termékfókuszú kampányoldal, ütős videó, megfelelő termék. Mi máson múlhat még a kampány sikeressége?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> Aki az első két nap eléri az összegyűjtendő [összeg] 30%-át, akkor annak valószínüleg sikeres kampánya lesz. Úgyhogy mi arra mentünk rá, hogy a 30% minél előbb meglegyen és utána ezt a momentumot tovább tudjuk építeni. Öt darab gépet teljesen leáraztunk. Míg a normál ár az $1300-$1400 volt, addig mi öt gépet $1000-t tettünk fel, ezt előre kommunikáltuk is, hogy figyeljenek mert lesz egy X limitált darabszám amit az elsők fognak megkapni. Ez annyira jól működött, hogy az első pár percben elkapkodták ezeket a leárazott gépeket.</p>
                            <p><strong>PÉTER: </strong> Mi történik amikor összeállt minden anyag? Megnyomjátok a zöld gombot és imádkoztok?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> Volt egy launch event. Ott volt egy HVG-s újságíró és megkérdezte “Na srácok, mennyi pénzt toltatok bele?”. Akkoriban sokan berakták a saját pénzüket, hogy látszódjon, hogy elindult a kampány. “Egy Forintot sem, egyiket [gépet] sem mi vettük”. Nem akarta elhinni, hogy ez, hogy sikerült ilyen jól. Az első 5 percben már túl voltunk az 5 ezer dolláron és az első 1 órában már elértük a 19 ezer dollárt.</p>
                            <figure>
                                <img src="{{ asset('media/blog/brewie-team.jpg') }}" alt="Brewie" />
                            </figure>
                            <p><strong>PÉTER: </strong> Ti mekkora célösszeget lőttetek be? Hogy érdemes belőni a célösszeget?</p>
                            <p><strong>BREWIE: </strong> $100e-es célt lőttünk meg. Egyébként $200e-t szerettünk volna, de százezret tettünk be, mert könnyebben elérhető cél és abból is meg lehetett jól csinálni.</p>
                            <p>Én azt mondanám, hogy azt a minimumot lődd be amiből ezt meg tudod még csinálni és ki tudod szállítani. Mi úgy lőttük be, hogy ha nekünk az OBI-ból kell összevásárolni az alkatrészeket és úgy összerakni, akkor is meg tudjuk csinálni. Így biztosan tudod teljesíteni azt amit ígérsz és ha alacsonyabb a cél, biztosabban el tudod érni.</p>
                            <p class="has-margin-b60">Az is fontos, hogy mindenképpen elérd a célt. Ez pszichológiai effekt is. A sikerhez szívesebben csatlakoznak emberek, mint egy sikertelen dologhoz. Ha azt látod, hogy a kampány $5e-nél áll a $100e-ből, akkor kétszer meggondolod, hogy vegyél-e. Míg ha azt látod, hogy a $100e-t már túllépte és még mindig nő, akkor oda magabiztosabban berakod te is a pénzed.</p>
                            <p><strong>PÉTER: </strong> Milyen gyorsan értétek el és mennyivel léptétek túl ezt a célt?</p>
                            <p><strong>BREWIE: </strong> $60e már megvolt az első két nap után. Végül $220e-t lett a kampány úgy, hogy nullás büdzséből, csak email és PR-al, minden szívesség alapon ment.</p>
                            <p>Később csináltunk még egy kört, amikor indult az Indiegogo InDemand programja. Ez azoknak szólt, akiknek már volt egy sikeres kampányuk, ők újra megnyithatták az értékesítést. Nálunk is egyre több volt az email feliratkozó és az érdeklődő ezért megnyitottuk újra. Itt már PR sem volt, csak az email feliratkozóknak küldtük ki.</p>
                            <p class="has-margin-b60">Az nagyon durva volt. Az első 1-2 percben $30e dollár jött be. Az Indiegogonál nem tudták hirtelen, hogy mi van, az első órában rájuk szakadt majdnem $200e. Egy körülbelül 1 hónapos kampány alatt még félmillió dollárt szedtünk össze. Így összesen $720e-t hoztunk össze két kampány alatt.</p>
                            <p><strong>PÉTER: </strong> Mi történik a kampány indítása utáni időszakban?</p>
                            <p><strong>BREWIE: </strong> Mindenki azt hiszi, hogy azzal, hogy vége van a kampánynak ott vége van, viszont a kampány utáni időszak legalább annyi munka mint az egész kampány, ha nem több.</p>
                            <p>Nálunk induláskor kimentek az emailek, kimentek a nagy cikkek. Utána hullámokban szórtuk ki a sajtóközleményeket különböző újságírói listáknak, így nagyjából minden héten tudtunk újabb cikket lehozatni magunkról. A PR-nak óriási ereje van. Amikor a Der Spiegel lehozott egy cikket, azonnal bejött $38e. Hihetetlen hatása volt.</p>
                            <p>Emellett 3-5 naponta ment ki egy email, kommunikáltuk a sikereket és előre betáraztunk újabb és újabb akciókat. Próbáltuk a csomagokat úgy megtervezni, hogy folyamatosan kifogyjanak. Először volt a leglimitáltabb, az kifutott. Utána a következő szint, az is kifutott. Minél később szálltál fel a vonatra, annál drágábban tudtad megvenni.</p>
                            <p class="has-margin-b60">Sokan azt gondolják, hogy a crowdfunding kampány olyan, hogy elindítod és aztán így (szerk. lineáris növekvően) megy a görbe. Igazából ez olyan mint egy EKG. Volt olyan nap amikor rengeteg [eladás] jött be, volt olyan amikor egy sem. Egyébként a kampány elején és a végén jött be a legtöbb. Valószínüleg a promók miatt: az elején azért tepertek, hogy jó áron meg tudják kaparintani a terméket, a végén pedig azért, hogy meg tudják egyáltalán venni.</p>
                            <h2 class="heading-2 has-margin-b30">Post-campaign — ügyfélkezelés</h2>
                            <p><strong>PÉTER: </strong> Meséljetek picit a kampány utáni customer management fontosságáról.</p>
                            <p><strong>BREWIE: </strong> A legtöbb kampánynál van [időbeli csúszás], úgyhogy simán lehet, ha rosszul kommunikálsz az emberek visszamondják a rendelést. Hihetetlen energiákat tettünk bele, hogy letudjuk kommunikálni ezeket a késéseket és így sikerült elérni, hogy annak ellenére, hogy mi 1 évet késtünk pluszba az egyéves várakozás mellé, csak pár százalék mondta vissza.</p>
                            <p class="has-margin-b60">Minden emailre válaszoltunk, rengeteg Facebook megkeresésre, az Indiegogo oldalán kellett válaszolni, 2-3 hetente küldtünk update emailt [a termékfejlesztés státuszáról]. Tehát nagyon tisztán őszintén kommunikáltunk és ezt értékelték és megértették, hogy ez miért nehéz.</p>
                            <p><strong>PÉTER: </strong> Zárásul, egy kérdésem maradt: ha holnap újból crowdfunding kampányba kezdenétek, mondjuk egy másik termékkel, mit csinálnátok másképp?</p>
                            <p class="has-margin-b60"><strong>BREWIE: </strong> Kerítenénk büdzsét arra, hogy lehessen mellé hirdetni.  A fent már említett marketing eszközök mellett, valószínűleg a PPC-vel tudtunk volna elérni még több email feliratkozót és így valószínűleg még több előrendelést tudtunk volna elérni.</p>
                            <p><strong>PÉTER: </strong> Köszi srácok, szerintem ez hasznos lesz az olvasóinknak, sok izgalmas tippet osztottatok meg, én is rengeteget tanultam ma!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'EXTRA: Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story'])
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
    "datePublished": "2022-04-11T10:00:00",
    "dateModified": "2022-04-11T10:00:00",
    "description": "A mai EXTRA-ban a Brewie sikeres közösségi finanszírozási kampánya mögötti emberekkel beszélgetünk arról, hogyan érdemes egy ilyen kampány összerakni és menedzselni.",
    "headline": "EXTRA: Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-homebrewing-crowdfunding-and-30000-dollars-in-2-minutes-the-brewie-story-en.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Crowdfunding, Indiegogo, Kickstarter, Brewie",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "EXTRA: Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story",
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
                "name": "EXTRA: Otthoni sörfőzés, crowdfunding és két perc alatt $30.000 — A Brewie story"
            }
        }
    ]
}
</script>
@endpush
