@section('title', 'A szoftverspecifikáció egy agilis környezetben')
@section('description', 'A vízesés modell esetében egy szoftver minőségi és időben történő szállításának biztosítása érdekében ki kellett dolgozni a szoftverspecifikációt a legutolsó részletig. De mi a helyzet, ha agilis környezetben fejlesztünk?')
@section('preview_image', asset('media/blog/cover-agile-software-specification-hu.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-agile-software-specification.jpg') }}" srcset="{{ asset('media/blog/featured-agile-software-specification-769w.jpg') }} 769w" sizes="100vw" alt="Hogyan írjunk egy jó agilis szoftver specifikációt?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Mitől lesz jó egy (agilis) szoftverspecifikáció?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-09-17 12:00:00">2018 szeptember 17</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">Először is nézzük meg, mi is a szoftverspecifikáció és mit kell tartalmazzon. A szoftverspecifikáció az összes olyan szükséges információ gyűjteménye, amely a megfelelő szoftver kivitelezését biztosítja. Több dokumentumból áll.</p>
                            <p>A <strong>szoftverkövetelmények</strong> leírják a projekt hátterét, üzleti céljait és korlátait. Ezt általában az ügyfél hozza létre, esetleg a szoftvertanácsadóval vagy UX tanácsadóval együtt.</p>
                            <p class="has-margin-b60"><em>Képzeld el a házépítés folyamatát! Először leírod az elképzeléseidet, hány szobát és milyen jellemzőket szeretnél. Ezek a célok. A telek sajátosságai és az építési törvények a korlátaid.</em></p>
                            <p>A <strong>tervezési dokumentum</strong> olyan műszaki dokumentum, amely pontos megoldást nyújt a követelményekben leírt célokra. Ez magában foglalja az adatok tervezését, az architektúra tervezését, drótvázakat és prototípusokat.</p>
                            <p class="has-margin-b60"><em>Gondolj erre úgy, mint a tényleges ház terveire: alaprajzok, építési tervek, statikai tervek, metszetek, anyagok, villamos- és gépészeti tervek, és így tovább.</em></p>
                            <p>A <strong>tesztdokumentáció</strong> szintén része a specifikációnak. Ez a dokumentum leírja, hogyan, hol és mikor kell a szoftvert tesztelni, beleértve a teszteseteket és a kapcsolódó kockázatokat.</p>
                            <p class="has-margin-b60"><em>Ezek lehetnek a házadnak a minőségi előírásai és az ellenőrző dokumentumok, amelyek biztosítják a ház megfelelő működését jelenleg és a belátható jövőben.</em></p>
                            <p class="has-margin-b60">Végül, de nem utolsósorban a <strong>felhasználói dokumentáció</strong>. Ezek a fejlesztés után íródnak, de a specifikációk részének is tekinthetők. A felhasználói dokumentáció egyszerűen leírja, hogyan kell használni a szoftvert.</p>
                            <h2 class="heading-3 has-margin-b30">De mi agilisek vagyunk, nem írunk specifikációt!</h2>
                            <p>A vízesés és a V-modellek esetében egy szoftver minőségi és időben történő szállításának biztosítása érdekében ki kellett dolgozni a szoftverspecifikációt a legutolsó részletig. De a szoftver minden specifikációelemének részletezése sok időt vesz igénybe és költséges.</p>
                            <p>Ugyanakkor irreális, mert a felhasználók ritkán képesek részletezni minden olyan funkcionalitást, amelyet a végtermékben szeretnének látni, így a projekt hatásköre (scope) számtalanszor változik.</p>
                            <p>De mi van, ha agilis módszertant használunk projektjeink során? Sokan úgy gondolják, hogy az agilis csapatok specifikáció nélkül dolgoznak. Ez nem teljesen igaz. Egy agilis projektnek szintén szerkezetre van szüksége, hogy a csapat ne hozzon kritikus döntéseket támogatás nélkül. Ezt a struktúrát az ú.n. <strong>felhasználói történetek (user story)</strong> adják, melyek a rendszer egy vagy több jellemzőjének természetes nyelvű leírásai a végfelhasználó szemszögéből.</p>
                            <p>Az agilis módszer azon elv köré épül, hogy a projekt <strong>hatásköre változhat és változnia kell</strong> a projekt során. Minden felhasználói történetet a projekt elején egy backlogba helyezünk, de nem részletezzük őket. Ehelyett ezek majd a fejlesztési folyamat során körvonalazódnak pontosabban.</p>
                            <figure class="has-margin-b60">
                                <img src="{{ asset('media/blog/agile-user-story-1.jpg') }}" alt="A felhasználói történeteket mindig a végfelhasználó szemszögéből kell megfogalmazni" />
                                <figcaption>A felhasználói történeteket mindig a végfelhasználó szemszögéből kell megfogalmazni</figcaption>
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Az agilis folyamat</h2>
                            <p>Az agilis csapatok rövid (1 vagy 2 hetes) iterációval dolgoznak, ú.n. <strong>sprintekkel</strong>. Minden egyes sprint elején kis számú felhasználói történetet választanak ki a backlogból (általában azokat, amelyek a legtöbb üzleti értéket jelentik), és részletezik ezeket.</p>
                            <p>A hagyományos módszerekkel ellentétben a részletek kidolgozásának felelősségét az ügyfél (a product owner vagy terméktulajdonos által) és a fejlesztőcsapat osztja meg. Ahhoz, hogy ez működni tudjon, fontos hogy minden résztvevő azonos megértést és empátiát tanúsítson a végfelhasználóval szemben. Ennek a közös megértésnek köszönhetően a terméktulajdonos a magas szintű követelményekre és az üzleti célokra koncentrálhat, minden fejlesztési részletetet a fejlesztőcsapatra hagyva.</p>
                            <figure>
                                <img src="{{ asset('media/blog/agile-user-story-2.jpg') }}" alt="Példa egy részletesen kidolgozott felhasználói történetre" />
                                <figcaption>Példa egy részletesen kidolgozott felhasználói történetre</figcaption>
                            </figure>
                            <p>A sprintekre felosztott fejlesztés egyik előnye, hogy a sprint végén az ügyfél egy ténylegesen működő szoftverre adhat visszajelzést, nemcsak egy specifikációra. Ezáltal korán kiderül, hogy a termék megfelel-e az ügyfél várakozásainak, anélkül, hogy várni kellene (akár hónapokat is), ameddig a teljes szoftverfejlesztés lezárul. Ha ebben a pontban az ügyfél megváltoztatja a kéréseket, akkor új felhasználói történeteket vezetnek be a backlogba és ezeket betervezik egy következő sprintbe.</p>
                            <p class="has-margin-b60">Az agilis módszer rugalmassága lehetővé teszi a projekt hatáskörének a megváltoztatását a fejlesztés során, a hagyományos módszerekkel ellentétben, ahol mindez csak a fejlesztés végén történhet, gyakran több hónapos munka lenullázásával vagy megismétlésével. Ez természetesen magas költségekkel, a határidők elmulasztásával és nem utolsósorban a motiváció csökkenésével jár minden érintett számára.</p>
                            <h2 class="heading-3 has-margin-b30">Hogy csináljuk mi mindezt?</h2>
                            <p>Lássuk, mi hogyan dolgozunk a Furthernél. Kétféle ügyfelünk van. Azok, akiknek már megvannak a szoftverkövetelményei, és azok, akiknek csak egy rövid projektvázlata van, vagy csak egy ötletük. Általában egyik sincs a végfelhasználó szemszögéből leírva.</p>
                            <p>Tehát az első dolog, amit csinálunk, az az, hogy leülünk az ügyfél terméktulajdonosával, és létrehozzuk az összes olyan felhasználói történetet, amellyel találkozhatunk. Ezután kategorizáljuk őket „kötelező” és „jó, ha van” osztályokba. Ezen backlog alapján csapatunk nagyjából felbecsülheti a költségeket és a határidőket.</p>
                            <p>Egy extra dolog, amit néha a projekt elindítása előtt elvégzünk, hogy létrehozunk egy pár drótvázat az összetettebb interfészekhez. Ez ellentmondásos az agilis gyakorlatokkal, mert a fejlesztés előtt részletes specifikációt hozunk létre, de úgy tapasztaltuk, hogy segít csapatunknak a jobb becslések elkészítésében.</p>
                            <p>Egy érdekes dolog, amit bevezettünk, hogy nálunk gyakran átfedés van a tervezési sprintek és a fejlesztési sprintek között. Egy tervezési sprinttel kezdünk, amelyben elkészítjük a kiválasztott felhasználói történetekre vonatkozó tényleges specifikációkat (tervdokumentumok, tesztesetek, kockázati mátrixok és drótvázak vagy prototípusok).</p>
                            <p class="has-margin-b60">A sprint végén bemutatjuk ezeket az ügyfélnek, és jóváhagyás után elindítjuk a fejlesztési sprintet, vagyis a kód megírását. Ezzel párhuzamosan már elkezdjük a következő fázis tervezési sprintjét. Mivel a fejlesztők már rendelkeznek a tervezőcsapat által kidolgozott dokumentációval, ez a módszer lényegesen felgyorsítja a dolgokat, ha megfelelő erőforrásokkal rendelkezünk.</p>
                            <p>Cikkünk végére értünk. Mindig kíváncsiak vagyunk arra, hogyan dolgoznak mások, ezért ha meg szeretnéd ezt osztani velünk, vagy elképzelésed van arról, hogyan javíthatnánk a munkafolyamatunkon, akkor lépj kapcsolatba velünk.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Mitől lesz jó egy (agilis) szoftverspecifikáció?'])
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
@endsection



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "author": {
        "@type": "Person",
        "name": "Peter Illés"
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
        "description": "{{ config('site.description.' . getLang()) }}",
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
        "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.google') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.twitter') }}"],
        "telephone": "{{ config('site.contact.phone-1') }}",
        "url": "{{ config('app.url') }}"
    },
    "datePublished": "2018-09-17T12:00:00",
    "dateModified": "2018-09-17T12:00:00",
    "description": "A vízesés modell esetében egy szoftver minőségi és időben történő szállításának biztosítása érdekében ki kellett dolgozni a szoftverspecifikációt a legutolsó részletig. De mi a helyzet, ha agilis környezetben fejlesztünk?",
    "headline": "Hogyan írjunk egy jó agilis szoftver specifikációt?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-agile-software-specification.jpg') }}"
    },
    "inLanguage": "en_gb",
    "keywords": "Egyedi szoftverfejlesztés, Szoftverspecifikáció, Agilis szoftverfejlesztés",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}"
    },
    "name": "Hogyan írjunk egy jó agilis szoftver specifikációt?",
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
                "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}",
                "name": "Hogyan írjunk egy jó agilis szoftver specifikációt?"
            }
        }
    ]
}
</script>
@endpush
