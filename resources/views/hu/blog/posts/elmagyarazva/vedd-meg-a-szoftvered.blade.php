@section('title', 'Hogyan védhetjük meg a szoftverünk szellemi tulajdonát?')
@section('description', 'Mi a szoftverjog? Mi a különbség a szoftverjog és a szabadalom között? El kellene indulni mindkettő irányában, vagy sem? Melyik védi jobban a szoftvered? Olvass tovább és a cikkünkből megtudhatod.')
@section('preview_image', asset('media/blog/cover-protect-your-software-hu.png'))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Védd meg a szoftvered!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-08-12 12:00:00">2020 augusztus 12</time> &middot; 7 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60"><i>Megjegyzés: A cikk célja a szoftverjogi törvények egyszerű, emészthető módon történő magyarázata,fejlesztő ügynökség szempontjából. Nem vagyunk jogi szakértők és nem vállalunk felelősséget a cikk jogi pontosságáért.</i></p>
                            <p>Néhányan azt állítják, hogy az internet ezen új korszakában <a href="https://www.politico.eu/article/copyright-laws-dont-work-in-the-digital-age/" target="_blank"> a szerzői jogi törvények elavulttá váltak.</a> De mivel ez még mindig nagyon gyakran felmerül az ügyfelekkel folytatott előzetes tárgyalások során, úgy gondoltuk, hogy hasznos lenne megosztani néhány információt erről. Nagyon sok zűrzavar és kérdés merül fel a téma körül:</p>
                            <p>Mi a szoftverjog? Mi a különbség a szoftverjog és a szabadalom között? El kellene indulni mindkettő irányában, vagy sem? Melyik védi jobban a szoftvered? Miért van egyáltalán szüksége védelemre? Kié a szoftver, amikor elkészült? Mi a különbség az európai és az Egyesült Államok szabályozásai között? Olvass tovább és a cikkünkből megtudhatod.</p>
                            <figure>
                                <img src="{{ asset('media/blog/protect-your-software-copyright-law.png') }}" alt="Mi a szoftverjog?" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Mi a szoftverjog?</h2>
                            <p>A szerzői jogoknak többféle típusa létezik, és célja, hogy törvényes, kizárólagos jogokat biztosítson az alkotó munkájához, például a művészethez, a zenéhez, az irodalomhoz vagy akár a szoftverekhez.</p>
                            <p>A szerzői jog célja egy ötlet megvalósításának védelme, de nem maga az ötlet levédése, ami azt jelenti, hogy a szoftverjog olyan törvény, amely megvédi a programozók által írt tényleges kódot az illetéktelen másolástól. Ha azonban valaki ugyanazt a művet önállóan újrateremti, vagy ugyanazzal a megoldással áll elő, anélkül, hogy hozzáférne a kódhoz, az teljesen törvényesnek tekinthető.</p>
                            <p>Az első törvényt, amely a szellemi tulajdon védelme érdekében született, 1886-ban jegyezték be. Ezt nevezik az irodalmi és művészeti művek oltalmáról szóló Berni Egyezménynek vagy, ismertebb nevén,<a href="https://en.wikipedia.org/wiki/Berne_Convention" target="_blank"> Berni Egyezménynek.</a> Ez az Egyesült Államok, az Európai Unió országai és a világ minden tájáról, mintegy 170 ország közötti nemzetközi megállapodás a ma ismert szerzői jogi törvények alapja.</p>
                            <p class="has-margin-b60">Az egyik legfontosabb szempont, amelyet ebben az egyezményben bevezettek, és amely a szerzői jogot könnyen végrehajthatóvá tette, az volt, hogy a szellemi tulajdon létrehozásakor a szerzői jog automatikusan érvényesül. Ezen túlmenően az egyezmény egy másik fontos szempontot is tartalmazott, amely kimondja, hogy ha a művet egy országban levédik, akkor az a többi tagországban is védelmet élvez, az előírásokhoz való saját alkalmazkodásukat követően.</p>
                            <h2 class="heading-2 has-margin-b30">De valójában mitől véd a szerzői jogi törvény?</h2>
                            <p><a href="https://eur-lex.europa.eu/legal-content/en/TXT/?uri=CELEX:32009L0024">A "Computer Program Directive"</a> (az Európai Unión belül a számítógépes programok jogi védelmét ellenőrző szervezet) tiltja a következő tevékenységeket:</p>
                            <ul class="list has-bullets">
                                <li>a program ideiglenes vagy végleges másolását, beleértve minden másolást, amelyre a program betöltéséhez, megtekintéséhez vagy futtatásához szükség lehet;</li>
                                <li>a program fordítását, adaptálását vagy bármilyen más módon történő megváltoztatását;</li>
                                <li>a program nyilvános terjesztését bármilyen módon, beleértve a kölcsönzést is, az első eladásra vonatkozó doktrínának megfelelően.</li>
                            </ul>
                            <p class="has-margin-b30">Ha egy személy, vagy társaság megsérti a fent említett szabályokat, akkor azt a szerzői jogok megsértésének tekintik és a törvény bünteti.</p>
                            <figure>
                                <img src="{{ asset('media/blog/protect-your-software-eu-vs-us.png') }}" alt="Az Egyesült Államok és az EU szerzői jogi törvényei közötti különbségek és hasonlóságok" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Milyen különbségek és hasonlóságok vannak az Egyesült Államok és az EU szerzői jogi törvényei között?</h2>
                            <p>Az első és legfontosabb különbség az, hogy az európai szerzői jogi törvény az alkotót védi, míg az Egyesült Államok szerzői jogi törvénye a szóban forgó mű felhasználásának jogát védi. E különbség alapján arra a következtetésre juthatunk, hogy az Egyesült Államok inkább a szerzői jogi védelem pénzügyi vonatkozásait vizsgálja, miközben az európai törvény a művet, de az alkotót is védi az erkölcsi jogok szabályozásba történő beépítésével.</p>
                            <p>Ugyancsak az EU-ban nem engedélyezett a szerzői jog teljes egészében harmadik félnek történő átadása, kivéve, ha a mű alkotója elhunyt, ebben az esetben átkerül a legközelebbi hozzátartozóikhoz, vagy elavulttá nyilvánítják. Az Egyesült Államokban azonban a szerzői jog teljes egészében továbbadható vagy akár harmadik félnek is eladható.</p>
                            <p class="has-margin-b60">Az Egyesült Államok és az EU szerzői jogi törvényei hasonlóságot mutatnak abban, hogy mindkét ország védi a szerző és a mű gazdasági érdekeit.</p>
                            <h2 class="heading-2 has-margin-b30">Kié a szerzői jog?</h2>
                            <p>Egy másik különbség Európa és az USA között az, hogy ki birtokolja a szerzői jogokat. Az Európai Unióban a szerzői jog tulajdonosa mindig a mű készítője. „Bérmunka" esetén a vevő csak örökös licencet vagy használati jogot kap. Ez tulajdonképpen a saját ügyfélszerződéseinkben is megmutatkozik.</p>
                            <p>Az Egyesült Államokban ez nem feltétlenül áll fenn. A „bérmunka" alapján a szerzői jog tulajdonosa maga a vállalat vagy a vevő lehet, a munka létrehozója helyett. Ez kizárólag a vállalat vagy a vevő és a munkáltató vagy a szolgáltató közötti tényleges megállapodástól függ.</p>
                            <p>Feltevődhet a kérdés, hogy mi történik, ha az ügyfél az Egyesült Államokban tartózkodik, a fejlesztő ügynökség viszont például Európában van? Nagyon egyszerű. Ha a fejlesztő cég mondjuk Magyarországon, az ügyfél pedig az Egyesült Államokban tartózkodik, akkor Magyarország szerzői jogi törvénye automatikusan alkalmazandó, hacsak a cégek másként nem állapodnak meg.</p>
                            <p>Ez a berni egyezménynek is köszönhető, amely kimondja, hogy minden tagnak tiszteletben kell tartania az egyezményben meghatározott minimális szerzői jogi törvényeket.</p>
                            <p class="has-margin-b30">Összefoglalva: a fejlesztő ügynökségnek, a fejlesztőnek vagy az alkalmazottnak joga van a szerzői jogokra, hacsak nem állapodnak meg másképp. Az EU-ban a fejlesztő, mint a mű alkotója, rendelkezik a szerzői jogokkal, míg az Egyesült Államokban a vállalkozásnak jogai lehetnek, ha bérleti szerződésről van szó a vállalat és a munkavállaló között, és a vállalkozás tulajdonjoga kifejezetten meghatározott.</p>
                            <figure>
                                <img src="{{ asset('media/blog/protect-your-software-patents.png') }}" alt="A szoftver szabadalmak védik a találmányt és az eredeti ötletet" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Mi a helyzet a szabadalmakkal?</h2>
                            <p>Mint már fentebb említettük, a szerzői jogi törvény csak magát az ötletet védi. A szoftver szabadalmak viszont védik a találmányt vagy az eredeti ötletet, esetünkben a koncepciót és az üzleti logikát.</p>
                            <p>Mindig vita volt arról, hogy a szoftver szabadalmazható-e vagy sem. Tegyük fel, hogy feltaláltál egy szoftvert, amelyről úgy gondolod, hogy sok pénzt fog hozni. Természetesen meg szeretnéd védeni magát az ötletet is, hogy senki ne tudja felhasználni az ötletet vagy annak egyes részeit az innovatív alkotásod hasonló módon való létrehozásához.</p>
                            <p class="has-margin-b30">A szoftver szabadalmaztatása nagyon hosszú, költséges és összetett folyamat. Az európai törvények szerint a szoftver csak akkor szabadalmazható, ha „technikai hatása" van.</p>
                            <p>A szabadalom megszerzéséhez a szoftverének meg kell felelnie a következő kritériumoknak:</p>
                            <ul class="list has-bullets">
                                <li>Újnak és eredetinek kell lennie;</li>
                                <li>Képesnek kell lennie ipari alkalmazásra;</li>
                                <li>Legalább egy „nem nyilvánvaló" funkcióval kell rendelkeznie.</li>
                            </ul>
                            <p class="has-margin-b60">A szoftver létrehozásához használt összes ötlet és funkció meghatározása bonyolult és hosszadalmas eljárás. Ezért mielőtt nekiugranál, feltétlenül mérlegelned kell egy szoftver szabadalmaztatásának költségeit és azokat a veszteségeket, amelyekkel akkor találkozhatsz, ha valaki lemásolja vagy megismétli az ötletedet. Legtöbbször az első piacra kerülés vagy az egyedi értékajánlat jobb versenyelőnyt jelent, mint ha időt és pénzt pazarolnánk egy szoftver szabadalomra.</p>
                            <h2 class="heading-2 has-margin-b30">Miért kell regisztrálni egy szoftvert, ha a szerzői jogi törvény automatikusan alkalmazandó?</h2>
                            <p>Mint fentebb említettük, amikor egy szoftvert írnak, a szoftver szerzői jogi törvényei automatikusan érvényesek, és ezért a szoftvert a Berni Egyezmény védi. Ha ez így van, akkor jogosan teheted fel a kérdést, miért kell még mindig bajlódni a szerzői jogok regisztrációjával, vagy egyáltalán regisztrálhatunk-e rá, amikor a törvény automatikusan alkalmazandó?</p>
                            <p>Igen, akkor is regisztrálhatunk, annak ellenére, hogy a törvény automatikusan alkalmazandó, és ennek számos előnye van. Először is hasznos lehet, amikor a szerzői jogokat megsértik. Ha ez megtörténik, a normális eljárás a per indítása lenne. Ahhoz azonban, hogy ezt megtehesd, előfeltétele, hogy szerzői jogi védelem alatt álljon.</p>
                            <p>Másodszor, ha a szoftver közzététele után nem kérsz szerzői jogi védelmet, és később egy jogsértés következik be, aminek következtében be akarnád perelni az illetőt vagy céget, sokkal nehezebb lesz bíróság előtt bizonyítanod, hogy az eredeti mű a tied. Röviden, jelentős előny származhat abból, ha a lehető leghamarabb regisztrálod a szerzői jogokat.</p>
                            <p class="has-margin-t60">A fent említett tények alapján reméljük, hogy jobban megismerted a szoftverek szerzői jogait. Az emberek különféleképp vélekednek arról, hogy mit kell tenni a szellemi tulajdon védelme érdekében. A legtöbben viszont egyetértenek abban, hogy tanácsos regisztrálni a szerzői jogi védelemre, mivel ez egy nagyon egyszerű eljárás, gyors és mindenképpen jobb, ha biztonságban tudod a szoftvered, mint később sajnálkozni azon, hogy miért nem tetted meg ezt a lépést.</p>
                            <p>Úgy gondoljuk, hogy ha a szoftvered elég értékesnek bizonyul a közzétételhez, akkor bizonyára elég értékes a regisztrációhoz.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Protect your software! Why should you?'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.eszterballa')
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
        "name": "Eszter Balla"
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
    "datePublished": "2020-08-12T12:00:00",
    "dateModified": "2020-08-12T12:00:00",
    "description": "Mi a szoftverjog? Mi a különbség a szoftverjog és a szabadalom között? El kellene indulni mindkettő irányában, vagy sem? Melyik védi jobban a szoftvered? Olvass tovább és a cikkünkből megtudhatod.",
    "headline": "Hogyan védhetjük meg a szoftverünk szellemi tulajdonát?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-protect-your-software-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Szoftver szerzői jog, Szoftver szerzői jogi törvény, Szerzői jogi törvény, Szoftver szabadalom",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan védhetjük meg a szoftverünk szellemi tulajdonát?",
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
                "name": "Hogyan védhetjük meg a szoftverünk szellemi tulajdonát?"
            }
        }
    ]
}
</script>
@endpush
