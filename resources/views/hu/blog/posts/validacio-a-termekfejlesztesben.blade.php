@section('title', 'Hogyan validáld sikeresen az ötletedet a termékfejlesztésben?')
@section('description', 'Ebben a cikkben megmutatjuk, hogy a termékinnováció különböző szakaszaiban mely tervezési és kutatási technikák a leghasznosabbak a feltételezések teszteléséhez.')
@section('preview_image', asset('media/blog/cover-validation-in-product-development-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-validation-in-product-development.png') }}" srcset="{{ asset('media/blog/featured-validation-in-product-development-768w.png') }} 768w, {{ asset('media/blog/featured-validation-in-product-development-1000w.png') }} 1000w" sizes="100vw" alt="Validáció a termékfejlesztésben" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Validáció a termékfejlesztésben</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-12-21 12:00:00">2020 december 21</time> &middot; 8 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">A múltkor meséltem Hubáról,<a href="{{ localizedRoute('blog.show', ['slug' => 'ne-probalj-tokeletes-termeket-fejleszteni']) }}"> akinek volt egy start-up ötlete.</a> Ő akkor úgy döntött, hogy egyből belevág a termékfejlesztésbe anélkül, hogy az ötletet előzetesen validálta volna. Most meg szeretném mutatni, hogy miként lehet egy start-up ötletet validálni. De ehhez előbb meg kell értenünk, hogy egyáltalán miért is szükséges a validáció.</p>
                            <h2 class="heading-2 has-margin-b30">A bizonytalanság a start-up része</h2>
                            <p>Eric Ries, 2011-es The Lean Startup könyvében úgy határozza meg a start-up fogalmát, mint egy “intézmény, amelynek célja, hogy egy új terméket vagy szolgáltatást hozzon létre szélsőségesen bizonytalan körülmények között”.</p>
                            <p>Az egyik legfontosabb része ennek a meghatározásnak Ries szerint pont az, ami hiányzik belőle. Semmit nem mond arról, hogy mekkora a vállalkozás vagy milyen iparágban tevékenykedik. Bárki aki bizonytalan körülmények között új, innovatív terméket hoz létre, az egy start-up.</p>
                            <p>Értelemszerűen a meghatározás másik fontos része az, hogy a start-up célja egy új termék vagy szolgáltatás, egy innováció létrehozása. Az innovációt érdemes tágan értelmezni. Nem szükséges egy forradalmi újítást hozni, ugyanúgy innováció egy régi technológia újszerű felhasználása, egy új üzleti modell vagy akár egy új módja a vásárlókkal való interakciónak.</p>
                            <p>Fontos az a kontextus is amiben az innováció történik. Ha nem egy bizonytalan környezetben alkalmazzuk az innovációt, akkor nem beszélhetünk start-upról.</p>
                            <p>Legtöbb vállalkozás pontosan ezért nem tekinthető start-upnak. Ha egy olyan vállalkozást indítunk, ami egy tökéletes másolata egy már létező vállalkozásnak, beleértve az üzleti modellt, árazást, célcsoportot és termékkínálatot, az lehet üzletileg jó befektetés, de attól még nem egy start-up. Ezeknek a vállalkozásoknak a sikere kizárólag a végrehajtáson múlik. Olyannyira, hogy a sikert és annak mértéket elég magas pontossággal lehet modellezni.</p>
                            <p class="has-margin-b60">Egy start-up esetében a jövő kiszámíthatatlan. Nem tudjuk, hogy mennyire fenntartható az üzleti modellünk, hogy a termékünk tényleg megoldást jelent-e a problémára, vagy hogy egyáltalán mások számára is létező az a probléma amit meg szeretnénk oldani. Egy start-up esetén ezeket nem kezelhetjük tényként, legfeljebb feltételezéseink vannak.</p>
                            <h2 class="heading-2 has-margin-b30">Validált tanulás</h2>
                            <p>A bizonytalanság eloszlatására a start-up világban bevett módszer a validált tanulás. A validált tanulás egy olyan folyamat amelynek a lényege, hogy empirikusan bebizonyítsuk, hogy közelebb kerültünk a kitűzött céljainkhoz.</p>
                            <p>A validált tanulást gyakorlatban pedig az Építs-Mérj-Tanulj visszacsatolási ciklus segítségével lehet elérni. Az Építs szakaszban egy olyan minimális terméket vagy kísérletet építünk aminek a segítségével egy vagy több feltételezést tesztelni tudunk.</p>
                            <p>Az Építs szakaszban fejlesztett kísérletek célja, hogy minél hamarabb be tudjuk mutatni a potenciális felhasználóknak és kapjunk olyan visszacsatolást és információt amit bele tudunk építeni a következő kísérletbe. Ez lesz a Mérj szakaszunk.</p>
                            <p>Ha a mérés alapján úgy döntünk, hogy közelebb állunk a végső célokhoz, akkor a ciklus elölről kezdődik egy újabb Építs szakasszal, amiben finomhangolunk vagy új kísérleteket fejlesztünk újabb feltételezések tesztelésére.</p>
                            <p>Egy adott ponton a projektünkből termék lesz, majd átlépünk előbb a növekedési majd az érettségi szakaszba. Jogosan gondolhatnánk, hogy a ciklusnak itt vége, de tulajdonképpen innen is tovább használhatjuk a termék tökéletesítésére vagy az ügyfélélmény növelésére.</p>
                            <p>Ha a mérés alapján azt látjuk, hogy ez a termékötlet zsákutca, akkor bekövetkezik az ú.n. pivot, vagyis új stratégiát kell kidolgoznunk a célok megvalósításának érdekében.</p>
                            <p>Ez a döntéshozási pont a ciklusban a Tanulj szakaszunk. Bár a Tanulj szakasz a ciklus végén helyezkedik el, hiszen ilyenkor vonjuk le a következtetéseket, tulajdonképpen az első lépésünk a ciklus elején már az kell legyen, hogy eldöntsük milyen feltételezéseket akarunk tesztelni és mi az amit meg szeretnénk ezekből a tesztekből tanulni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-infographic-hu.png') }}" alt="Validáció a termékfejlesztésben-Infografika" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Feltételezések és validálás a termékfejlesztés különböző szakaszaiban</h2>
                            <p class="has-margin-b30">Mint láttuk, az Építs-Mérj-Tanulj ciklusban folyamatosan újabb és újabb kísérleteket dolgozunk ki, hogy a különböző feltételezéseinket teszteljük. De milyen feltételezéseket érdemes tesztelni a termékfejlesztés különböző szakaszaiban? Erre a kérdésre ad válazt a <a href="{{ localizedRoute('freebies.lean-validation-cheat-sheet') }}" target="_blank">Lean Validation Cheat Sheet</a>.</p>
                            <h3 class="heading-3 has-margin-b30">Probléma validáció</h3>
                            <p>A termékfejlesztés korai szakaszaiban <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}">a probléma validálása</a> a cél. Ilyenkor még általában csak felismertünk egy problémát aminek a megoldására van egy ötletünk, de nem vagyunk biztosak benne, hogy ez a probléma mások számára is kihívást jelent. A fő kérdés amit ilyenkor meg kell válaszoljunk, hogy a felvetett probléma jelentőségteljes és érdemes vele foglalkozni.</p>
                            <p>A tanulás szakaszban olyan kérdésekre keressük a választ, mint hogy mi a probléma amire megoldást keresünk? Kinek van még ilyen problémája? Ők hogyan próbálják jelenleg megoldani ezt a problémát? Elég fontos ez a probléma számukra, hogy időt és energiát fordítsanak a megoldására?</p>
                            <p>Probléma validációra az építés szakaszban érdemes meghatározni a célokat, felhasználói perszónákat gyártani és kigondolni a felhasználói élmény térképet (customer journey map), míg a mérések felhasználói interjúk, terepszemle vagy olyan felkutató technikák segítségével történik mint a context mapping.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-1-hu.png') }}" alt="Validáció a termékfejlesztésben-Segédlet-1" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Probléma-megoldás megfelelés</h3>
                            <p><a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}">Ebben a fázisban</a> már tudjuk, hogy a felfedezett probléma mások számára is gondot okoz és szeretnének egy megoldást találni rá, de nem vagyunk benne biztosak, hogy az általunk kitalált megoldás ténylegesen megoldja-e számukra ezt a problémát.</p>
                            <p>Ebben a fázisban választ keresünk arra, hogy a megoldásunk működik-e és ezt bizonyítani is tudjuk, illetve arra is, hogy ez a megoldás jelent-e akkora mértékű javulást a felhasználóink életében, hogy jelentős legyen számukra? Továbbá választ keresünk arra is, hogy megbíznak-e a felhasználók annyira a megoldásunkban, hogy használják?</p>
                            <p>Egy jó módszer, hogy ezekre választ kapjunk, az ha készítünk egy value proposition canvas. Ez a canvas segít nekünk abban, hogy a termékünket vagy szolgáltatásunkat a felhasználó igényei és értékrendje köre pozicionáljuk.</p>
                            <p>Egy másik eszköz amit bevethetünk ebben a fázisban, az a concierge MVP. Ez az MVP-nek az egyik legminimálisabb változata. Annyira minimális, hogy igazából nincs is termékünk, hanem a termék minden funkcióját manuálisan végezzük el. Ez természetesen nem egy fenntartható üzleti modell, de nem is az a cél. Ebben a fázisban kizárólag a fenti kérdésekre szeretnénk választ kapni, még mielőtt elkezdjük az effektív terméket fejleszteni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-2-hu.png') }}" alt="Validáció a termékfejlesztésben-Segédlet-2" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Megoldás-termék megfelelés</h3>
                            <p>Ha <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}">idáig eljutottunk</a>, akkor már tudjuk, hogy egy validált problémával és megoldással állunk szemben. A kérdés már csak az, hogy tudunk-e olyan terméket fejleszteni amivel ezt a megoldást hatékonyan meg tudjuk valósítani.</p>
                            <p>A kérdések amire választ keresünk az, hogy a mi termékünk jelentősen jobb megoldást nyújt-e, mint amit eddig csináltak a felhasználóink, illetve hogy használható-e a termék?</p>
                            <p>Fontos kérdés ugyanakkor az is, hogy a termék használatához, szükséges-e a felhasználók részéről egy viselkedésbeli különbség vagy sem? Gondoljunk csak az Apple iPhone-jára. Az iPhone nem az első okostelefon volt. Előtte már sok másik okostelefon projekt megbukott, mert a felhasználók nem érettek meg még egy ekkora viselkedésbeli változásra. Az Apple felismerte ezt a helyzetet, viszont magabiztosak lehettek az iPhone bevezetésében, hiszen az iPod korábbi sikerével megalapoztak ennek a viselkedésbeli változásnak.</p>
                            <p>Ebben a fázisban már érdemes tapintható, érzékelhető prototípusokat fejleszteni: papír prototípust, kattintható demó szoftvereket vagy akár egy Oz Varázsló típusú MVP-t. Ez a típusú MVP a concierge MVP egy továbbfejlesztett verziója. Itt már a termék azt az érzést kell kiváltsa a felhasználóban, hogy minden funkcionalitás teljesen automatizált benne, de a háttérfolyamatokat továbbra is manuálisan végezzük.</p>
                            <p>A méréseket is már a kézzelfogható terméken végezzük, használhatósági-, felhasználói élmény- (UX), alfa- és béta tesztek segítségével.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-3-hu.png') }}" alt="Validáció a termékfejlesztésben-Segédlet-3" />
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Termék-piac megfelelés</h3>
                            <p>Ez lesz <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}">a termékfejlesztés utolsó szakasza</a>. Itt már tudjuk, hogy a termékünk hatékonyan megvalósítja a felvetett problémára a megoldást, azonban még mindig nem tudjuk azt, hogy a felhasználókat át tudjuk-e konvertálni vásárlókká.</p>
                            <p>Hajlandóak a felhasználók fizetni is a termékekért vagy szolgáltatásért? Hány ilyen vásárlónk lenne és mennyit fizetnének? Hány százalékban lesznek visszatérő vásárlóink?</p>
                            <p class="has-margin-b60">Az Építs lépésben immár nem prototípusokat és terméket építünk, hanem marketing kampányokat: termékbemutató videókat, landing oldalakat, hírleveleket. Mérni itt a kampányok sikerességét érdemes analitikai adatok alapján, A/B tesztek eredményei alapján vagy akár már az elővásárlási eredmények alapján.</p>
                            <figure>
                                <img src="{{ asset('media/blog/validation-in-product-development-cheat-sheet-4-hu.png') }}" alt="Validáció a termékfejlesztésben-Segédlet-4" />
                            </figure>
                            <p>Bármelyik szakaszban vagyunk, a végén mindig el kell döntenünk a megszerzett tudás és a mérések alapján, hogy kitartunk mert jó irányban történnek a fejlesztéseink, vagy egy pivotra kerül sor. Ha a termékfejlesztési folyamat végére érünk, ismételjük meg a lépéseket a termék továbbfejlesztésére vagy akár egy új funkcióra is.</p>
                            <p class="has-margin-b90">A validált tanulás alapú termékfejlesztési módszer szépsége, hogy nem csak start-up projektek esetén megvalósítható, hanem bármilyen, akár nagyvállalati- vagy ipari környezetben is.</p>
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
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Validáció a termékfejlesztésben'])
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
    "datePublished": "2020-12-21T12:00:00",
    "dateModified": "2020-12-21T12:00:00",
    "description": "Ebben a cikkben megmutatjuk, hogy a termékinnováció különböző szakaszaiban mely tervezési és kutatási technikák a leghasznosabbak a feltételezések teszteléséhez.",
    "headline": "Hogyan validáld sikeresen az ötletedet a termékfejlesztésben?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-validation-in-product-development-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Start-up, Validáció, Lean validáció, Lean termékfejlesztés, Üzleti modell, Termékfejlesztés",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan validáld sikeresen az ötletedet a termékfejlesztésben?",
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
                "name": "Hogyan validáld sikeresen az ötletedet a termékfejlesztésben?"
            }
        }
    ]
}
</script>
@endpush
