@section('title', '11 mód, hogy MVP-t építsünk')
@section('description', 'Tarts velünk és tudd meg mi az az MVP, hogy tudunk egyet építeni és melyek a legismertebb fajtái. Folytatás!')
@section('preview_image', route('generate-cover', ['title' => '11 mód, hogy MVP-t építsünk']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">11 mód, hogy MVP-t építsünk - 2. rész</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2021-11-22 10:00:00">2021 november 22</time> &middot; 8 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">Ez a cikk a <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">termékvalidációban</a> használt prototípusokról szóló cikkünk második része. Ha még nem olvastad el az <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-1-resz']) }}" target="_blank">első részt</a>, akkor ajánljuk, hogy azzal kezdd.</p>
                            <h2 class="heading-2 has-margin-b30">Imitációs prototípusok</h2>
                            <h3 class="heading-3 has-margin-b30">Concierge kísérlet</h3>
                            <p>Az eddigi prototípusokkal ellentétben, a concierge kísérletet a termékfejlesztés egy korábbi szakaszában, a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">problem-solution fit</a> szakaszban tudjuk bevetni, hiszen nem arra a kérdésre ad választ, hogy piacképes-e a termékünk, hanem arra, hogy az általunk elképzelt megoldás ténylegesen megoldja-e a felhasználói problémákat.</p>
                            <p>A concierge kísérlet esetében kiválasztunk egy pár felhasználót, akinek megpróbálunk a végtermékhez hasonló felhasználói élményt nyújtani úgy, hogy a termék összes funkcióját kézileg valósítjuk meg. Tehát, kiváltunk egy komplikált technikai megoldást emberekkel.</p>
                            <p>Ez a módszer értelemszerűen nem minden termék esetében működik, de ha az értékajánlatunkat el tudjuk juttatni a célközönséghez manuális folyamatokkal is, a megfelelő felhasználói élményt nyújtva mindeközben, akkor az egyik hatékonyabb validációs eszköz lehet.</p>
                            <p>A leghíresebb concierge kísérlet egyértelműen a Food on the Table példája. De róluk <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">korábban már írtam</a>, ezért úgy döntöttem, hogy keresek egy másik példát. Ez egy elhamarkodott döntés volt amit kicsit meg is bántam, mert úgy tűnik a concierge experiment example kulcsszavakra a Google más találatot nem ad.</p>
                            <p>Éjszakába nyúló (ok, csak az ebédszünetem ment rá) kutatás után viszont rátaláltam a Seamless-re. A Seamless egy ételfutár szolgáltatás, hasonló a Magyarországon megtalálható Foodpanda vagy Wolt szolgáltatásokhoz.</p>
                            <p>Amikor 1999-ben elindult, a Seamless nem tudta, hogy az emberek tényleg szívesebben rendelnek-e majd egy gyűjtő oldalról, mint személyes átvétellel, közvetlenül a vendéglőtől. Ezért mielőtt belekezdtek volna a weboldal fejlesztésébe, elkezdtek irodaházakkal tárgyalni, hogy az ott dolgozók rajtuk keresztül rendeljenek ebédet.</p>
                            <p class="has-margin-b60">Az office menedzserek mindennap összegyűjtötték a rendelést, faxon (!) elküldték a Seamless alapítóinak akik telefonon leadták a rendelést a vendéglők felé, majd elmentek az ételért és kiszállították az irodáknak. Amikor eljutottak abba a fázisba, hogy már nem győzték a rendeléseket felvenni, egyértelművé vált számukra, hogy az ötletükre van igény és csak ekkor kezdték el a szoftverfejlesztést.</p>
                            <h3 class="heading-3 has-margin-b30">Oz varázsló prototípus</h3>
                            <p>A fő különbség a concierge kísérlet és az Oz varázsló prototípus között az, hogy míg az előbbi esetében a felhasználó számára egyértelmű, hogy a működést egy ember hajtja végre, az Oz varázsló prototípus esetében a kézimunka egy "termékváz" mögé van rejtve.</p>
                            <p>Ezt a típusú kísérletet mi is gyakran alkalmazzuk, de a fenti történetben akár a Seamless is alkalmazhatott volna akár Oz varázsló prototípust is úgy, hogy létrehozzák a weboldalt amin rendelni lehet, viszont a háttérben meghúzódó automatizált logisztika nélkül. Tehát rendelést leadni lehet, de csak egy köszönő üzenetet kapunk.</p>
                            <p>Az ajánlatokat nem a vendéglők, hanem a Seamless munkatársai töltik fel, rendelést a vendeglő felé szintén ők adják le és a fizetés is csak a futárnál lehetséges. Ez egy valamivel nagyobb befektetés mint a concierge kísérlet, azonban sokkal költséghatékonyabb mint a teljes rendszer lefejleszteni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/prototype-wizard-of-oz-ibm.jpg') }}" alt="Wizard of Oz prototype by IBM" />
                                <figcaption>Az IBM már a 80-as években is <a href="https://deepblue.lib.umich.edu/bitstream/handle/2027.42/174/71952.0001.001.pdf" target="_blank">többször</a> alkalmazta az Oz varázsló kísérletet, különböző termékek tesztelésére.</figcaption>
                            </figure>
                            <p>Egy híres példa az Oz varázsló kísérletre a Zappos történet. Szintén 1999-et írunk és Nick Swinmurn egy Nike Airwalk cipőt szeretne vásárolni magának, ám a helyi cipőüzletben nem talál. Szoftverfejlesztőként, elgondolkozott azom, hogy milyen volna az, hogy egy weboldalon keresztül lehetne cipőt rendelni.</p>
                            <p>Nem szeretett volna egyből egy rakás árut felhalmozni és raktározni, ami egy cipőáruház esetében drága mulatság, hiszen több méretről és színről beszélünk, ezért úgy döntött leteszteli előbb az ötletét. Emellett valamit kezdenie kell majd a méretcserés rendelésekkel, visszáruval és a hátramaradt, nehezen eladható méretekkel is.</p>
                            <p>Elment több cipőboltba és lefotózta azokat a cipőket amiket úgy gondolta, hogy el tud adni, majd ezeket a fotókat töltötte fel a weboldalára. Ha valaki rendelt egy cipőt az oldalán, akkor elment a boltba, megvásárolta és postázta. Ez természetesen nem volt egy fenntartható és kifizetődő modell, azonban egyértelművé tette Nick számára, hogy igenis van igény az online cipővásárlásra.</p>
                            <p>Mivel a felhasználó abban a tudatban van, hogy ő egy végleges terméket használ, az Oz varázsló prototípus nemcsak az értékajánlat, hanem a felhasználói élmény és használhatóság tesztelésére is kiváló eszköz. Emiatt, elsősorban a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}" target="_blank">solution-product fit</a> termékfejlesztési szakaszban használjuk.</p>
                            <p>De miért Oz varázsló prototípus a kísérlet neve? L. Frank Baum meséjében, Oz a nagy varázsló egy szinte mindvégig láthatatlan karakter, Oz földjének uralkodója, akit alattvalói nagyra becsülnek. Amikor megjelenik, akkor is mindig más formában teszi azt: tündérként, óriás lebegő fejként vagy tűzgolyóként.</p>
                            <p class="has-margin-b60">A mese végén Toto a kutya elhagyja gazdáját, hogy egy függönyt arrébb húzzon és feltárja az igazságot: Oz varázslója csupán egy szélhámos cirkuszi előadó, aki egy gép segítségével működteti éppen a tűzgolyót. Hasonlóan végződik számunkra is egy Oz varázsló kísérlet. Miután lezajlott és begyűjtöttük a visszajelzést a felhasználóktól, mi is felfed(het)jük a kísérletünket.</p>
                            <h3 class="heading-3 has-margin-b30">Piecemeal prototípus</h3>
                            <p>A piecemeal prototípus esetében meglévő termékekből rakunk össze egy olyan prototípust ami imitálja a termékünk végső működését. Leginkább szoftveres termékek esetében működik jól.</p>
                            <p>Egy jó példa erre a fajta prototípusra a Skillshare. A Skillshare egy online oktatási platform, hasonló a Udemy-hez vagy a Coursera-hoz. Mára már az ilyen platformok elterjedtek, de 2011-ben mikor Michael Karnjanaprakorn és Malcolm Ong (innentől már csak M&M) elindították a Skillshare-t, nem léteztek még ilyen platformok.</p>
                            <p>Pontosan az ilyen szolgáltatások hiánya miatt, M&M bizonytalan volt abban, hogy az emberek hajlandóak-e olyan kurzusért fizetni, amelyeket nem egy egyetemi professzor vagy egyéb akkreditált előadó tart. Mielőtt belekezdtek volna a tanfolyam értékesítő marketplace fejlesztésébe, M&M úgy döntöttek, hogy tesztelnek.</p>
                            <p>Létrehoztak egy egyszerű landing oldalt amin listázták a kurzusokat. Ahhoz, hogy ezeket meg lehessen vásárolni, minden kurzust 1-1 esemény formájában feltöltöttek Eventbrite-ra. Az Eventbrite egy olyan szolgáltatás amin jegyeket lehet vásárolni különböző eseményekre: előadásokra, koncertekre, konferenciákra vagy ebben ez esetben éppen egy kurzusra.</p>
                            <p class="has-margin-b60">M&M egy egyszerű landing oldal készítő szoftverrel és egy külső szolgáltatás összekapcsolásával sikerült validálják az ötletüket, anélkül, hogy egyetlen sor kódot is írtak volna.</p>
                            <h2 class="heading-2 has-margin-b30">Low-fidelity prototípusok</h2>
                            <h3 class="heading-3 has-margin-b30">Papír prototípusok</h3>
                            <p>Bár az eredeti rendeltetésük más, a tervrajzokat, a műszaki rajzokat vagy akár a skicceket is használhatjuk a termékötletünk validálására. Egy házat sem akkor mutatunk meg először az ügyfélnek amikor már készen áll. Előbb alaprajzokat készítünk, ezáltal pedig validáljuk, hogy a belső terek elosztása, funkciója megfelelő-e.</p>
                            <p>Egy divattervező sem az anyagkiválasztással és szabással kezdi egy új ruha készítését, hanem kézzel rajzolt skicceket készít, ezeket mutatja meg egy kisebb létszámú vásárlói csoportnak, hogy visszajelzéseket kapjon.</p>
                            <p class="has-margin-b60">Ezeket a csiszolatlan másait a terméknek low-fidelity prototípusnak nevezzük.</p>
                            <h3 class="heading-3 has-margin-b30">Drótvázak</h3>
                            <p>A legismertebb low-fidelity prototípus, főleg digitális termékek esetében, a drótváz. A drótvázak egy vonalakból és alap mértani alakzatokból álló, fekete-fehér reprezentációja egy felhasználói felületnek. Kitűnően lehet vele illusztrálni az elemek elrendezését és hierarchiáját. Egy drótváz segít abban, hogy érzékeltesse azt az érzést, amit majd a felhasználó érez a végtermék használata közben.</p>
                            <p>A <a href="https://balsamiq.com/" target="_blank">Balsamiq</a>, a <a href="https://www.uxpin.com/" target="_blank">UXPin</a> vagy akár a <a href="https://miro.com/" target="_blank">Miro</a> is olyan szoftveres eszközök, amelyek segítségével drótvázakat tudunk készíteni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-lowfi-vs-highfi.png') }}" alt="Egy low-fidelity drótváz és egy high-fidelity mockup" />
                                <figcaption>Egy low-fidelity drótváz és egy high-fidelity mockup</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">High-fidelity prototípusok</h2>
                            <h3 class="heading-3 has-margin-b30">Interaktív mockup</h3>
                            <p>A high-fidelity prototípusok finomított változatai a low-fidelity prototípusoknak. A leggyakoribb high-fidelity prototípus a mockup. Míg egy szoftveres termék esetében low-fidelity prototípusnak számít a drótváz, a high-fidelity megfelelője maga a UI design lesz. Ezek a mockupok különböző szintű interaktivitással lehetnek felruházva. Legegyszerűbb formájukban nem társul hozzájuk semmiféle interaktivitás. A UI design csupán egy kép.</p>
                            <p>A minimális interakció egy mockup esetében a kattinthatóság. Tehát egy linkre, gombra vagy egyéb elemre kattintva beúszik egy másik képernyő. Ez apróságnak tűnik, de komoly előrelépés, hiszen így a felhasználók már folyamatában tudják érzékelni a szoftverünket.</p>
                            <p>Az interaktivitást tovább fokozhatjuk ha animációkat viszünk a mockupba, vagy megmutathatjuk hogy tud egy-egy mezővel interakcionálni a felhasználó (megváltozik a színe kattintáskor, piros lesz ha nem elfogadható értéket adunk meg, stb.).</p>
                            <p>Az interaktív mockupok előállítására is léteznek célszoftverek, mint a <a href="https://www.figma.com/" target="_blank">Figma</a>, a <a href="https://www.sketch.com/" target="_blank">Sketch</a>, az <a href="http://invisionapp.com/" target="_blank">Invision</a> vagy az <a href="https://www.adobe.com/products/xd.html" target="_blank">Adobe XD</a>.</p>
                            <p>Hogy a pontosság (fidelity) és interaktivitás skálán, milyen prototípusokat érdemes elkészíteni, azt mindig mérlegelni érdemes. A ráfordított energia és erőforrás, illetve az így megszerezhető tudás aránya lesz a perdöntő. Minél magasabb a pontosság és az interaktivitás, annál pontosabb képet kapnak a felhasználók a tervezett felhasználói élményről és annál relevánsabb visszacsatolást kapunk mi.</p>
                            <p>Nálam a bevált módszer amit a leggyakrabban alkalmazok, hogy egy sima, nem kattintható drótvázzal indítok, ezt megmutatom a felhasználóknak, majd a tanultakat beépítem egy kattintható mockupba amit tovább finomítok egészen addig amíg nem kapom azt a visszajelzést, hogy ez már a megfelelő élményt nyújtja.</p>
                            <figure>
                                <img src="{{ asset('media/blog/the-lean-product-process-prototype-fidelity-interaction-ux-hu.png') }}" alt="Prototípusok összehasonlítása" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Pocket prototype</h3>
                            <p class="has-margin-b60">Egy termék esetében egy kicsinyített méretű reprezentációt pocket prototípusnak (zsebprototípus) nevezünk. Mivel elkészítésük olcsóbb mint a végső terméké, ellenben nagyon hasonló felhasználói élményt nyújtanak, a pocket prototípusokat gyakran alkalmazzák fizikai termékek tesztelésére.</p>
                            <h3 class="heading-3 has-margin-b30">Single-feature prototípus</h3>
                            <p>A Pareto-elv azt mondja, hogy a következmények 80%-a a okok csupán 20%-ra vezethető vissza. Ez a 80/20-as szabály érvényes a termékekre is. A hozzáadott érték 80%-a a funkcionalitás 20%-ból fakad. A single-feature prototípus pedig pont ezen az elven működik. Mivel a single feature prototípussal egyetlen fő felhasználói fájdalompontot oldunk meg, one painkiller prototípusnak is szokták nevezni.</p>
                            <p>Keressük meg azokat azt központi funkciót, ami a legtöbb értéket adja, építsük meg és teszteljük a felhasználóinkkal. Ezt tette a Spotify is.</p>
                            <p>A Spotify alkotói, Daniel Ek és Martin Lorentzon az illegális zeneletöltés problémáját szerették volna megoldani. Az alapötlet az volt, hogy ahelyett, hogy a kiadók az eladott lemezek vagy fizetett letöltésekből profitáljanak, hanem inkább az előfizetésekből kapjanak jogdíjat.</p>
                            <p>De azt nem tudták, hogy a felhasználók hajlandóak lesznek-e egy streaming szolgáltatásért fizetni, hiszen akkoriban a streamelés még nem tudott megfelelő minőséget nyújtani.</p>
                            <p class="has-margin-b60">"Őrült sok időt töltöttünk el a latency időre fókuszálva, mert meggyőződésünk volt, hogy olyan élményt kell nyújtanunk, mintha a zenét a saját merevlemezedről játszanád le." — Daniel Ek, Spotify alapító.</p>
                            <h2 class="heading-2 has-margin-b30">Utószó</h2>
                            <p>Amint láttuk, az említett prototípusok tökéletesen működnek az értékajánlatunk, a felhasználói élmény és a piaci igény felmérésére. De csak akkor, ha előtte a problémát magát már <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">validáltuk</a> és <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-merjuk-a-termekunk-sikeresseget']) }}" target="_blank">megfelelő mérési pontokat</a> állítunk fel. Tartsatok velem, a következőkben ezekbe a mérési technikákba, illetve egyéb termékfejlesztési és startup témákba is elmélyülünk.</p>
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
    "datePublished": "2021-11-22T12:00:00",
    "dateModified": "2021-11-22T12:00:00",
    "description": "Tarts velünk és tudd meg mi az az MVP, hogy tudunk egyet építeni és melyek a legismertebb fajtái. Folytatás",
    "headline": "11 mód, hogy MVP-t építsünk",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-11-ways-to-build-an-mvp-2-hu.png') }}"
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
