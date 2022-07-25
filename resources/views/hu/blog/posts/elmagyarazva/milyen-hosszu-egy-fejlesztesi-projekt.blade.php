@section('title', 'Milyen hosszú egy fejlesztési projekt?')
@section('description', 'Megpróbálunk egy gyakran feltett kérdést próbálunk körbejárni: milyen hosszú ideig tart majd a fejlesztés?')
@section('preview_image', route('generate-cover', ['title' => 'Milyen hosszú egy fejlesztési projekt?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Milyen hosszú egy fejlesztési projekt?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-03-04 12:00:00">2020 március 4</time> &middot; 7 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">A korábbi cikkekben megválaszoltunk már két olyan kérdést, amit gyakran feltesznek nekünk ügyfeleink. Beszéltünk már arról, hogy mikor válasszunk egy <a href="{{ localizedRoute('blog.show', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">dobozos szoftver helyett egyedi megoldást</a>, a legutóbbi cikkben pedig arra adtunk választ, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'szabaduszokat-sajat-it-csapatot-vagy-kulso-fejleszto-partnert-valasszunk']) }}">kit érdemes ezzel a fejlesztéssel megbízni:</a> szabadúszót vagy fejlesztő céget, esetleg érdemes-e saját fejlesztő csapatot felépíteni.</p>
                            <p>A mai cikkben ismét egy olyan kérdést válaszolunk meg, amit ügyfeleink mindig megkérdeznek a projekt elején: milyen hosszú ideig tart egy fejlesztési projekt? Szó lesz majd arról, hogy mi történik egy ilyen projekt során, ami időt vesz fel, illetve hogy milyen buktatók lehetnek, amelyek miatt elhúzódhat egy fejlesztés.</p>
                            <p>Megválaszolni ezt a kérdést nagyjából olyan nehéz, mint arra a kérdésre válaszolni, hogy mennyi idő megépíteni egy házat. Az egyszerű válasz az, hogy minden fejlesztési projekt olyan hosszú, mint amilyen hosszú a követelmények listája. De hogy ne csak általánosságban beszéljünk, hanem konkrétumokat is adjunk, vegyünk 2 mintaprojektet.</p>
                            <p>Legyen az első mintaprojekt egy 100 m2-es könnyűszerkezetes ház megfelelője a szoftvervilágban: egy egyszerű CRM szoftver egy szolgáltató cégnek, mondjuk egy fröccsöntő műhelynek, ami egyedi termékeket gyárt. Számukra fontos, hogy egy helyen tartsák nyilván az összes ügyféladatot, fel tudjanak tölteni mindegyikhez árajánlatot, majd a megnyert projekteknél számlát kiállítani.</p>
                            <p>A második projektünk ezzel szemben az egyedi szoftverek kacsalábon forgó kastélya egy forgácsoló üzemnek. Ők a CRM-ben különböző projekteket akarnak már követni, az egyedi megrendeléseken kívül a sorozatban gyártott termékek értékesítését is nyomon szeretnék követni. Az egyszerű számlázás itt már nem elég, pontosan szeretnék látni a költségeiket is és egyéb pénzügyi elemzéseket is. Emellett szükségük van egy beszerzési és raktár modulra, illetve egy termelésirányító szoftverre is, amivel előre be tudják tervezni a gyártási kapacitást. Itt már egy vállalatirányítási rendszerről, vagy ERP-ről beszélhetünk.</p>
                            <p>Mindkét projekt esetében a szoftverfejlesztés szakaszai ugyanazok lesznek, csak az időtartamuk lesz más. Itt meg kell említeni, hogy többféleképpen is lehet szoftvert fejleszteni, a két legismertebb módja a vízesés modell és az agilis modell.</p>
                            <p>A vízesés modell esetében a szakaszok egymás után következnek, a folyamat végén pedig kapunk egy kész terméket. Pont úgy, mint ahogy egy ház építése az alaptól indul és a belső simításokkal ér véget. Az agilis modellnek számos előnye van a vízesés modellel szemben, viszont elmagyarázni a pontos folyamatot sokkal bonyolultabb, ezért a következőkben inkább egy vízesés modellben fejlesztett szoftveren illusztráljuk a különböző szakaszokat.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-design-and-specification.jpg') }}" alt=">Tervezés és specifikáció" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Tervezés és specifikáció</h2>
                            <p>A tervezés és specifikációs szakaszban mérjük fel az igényeket és elemezzük az ügyfél folyamatait. Mi ezt általában úgy csináljuk, hogy minden egyes felhasználó típussal ú.n. stakeholder interjúkat folytatunk. Ilyenkor feltérképezzük, hogy hogyan dolgoznak jelenleg, milyen problémákkal szembesülnek és mit várnak el az új szoftvertől.</p>
                            <p>Az első projekt esetében interjúkat folytatnánk az ügyfél részéről a projektvezetővel, egy értékesítővel, aki majd használni fogja a szoftvert és esetleg a számlázás miatt egy könyvelővel. A második projekt esetében már komplexebb a helyzet. Mivel többféle jellegű terméket értékesítenek, lehet több értékesítőt kell interjúztatni, továbbá szükség lesz a pénzügyi csapat, a beszerzési osztály, a raktáros, a műszakvezetők és a munkások bevonására is.</p>
                            <p>Ezt követi a tervezés, mikor az ügyféllel közösen meghatározott problémákra megoldási javaslatokat dolgozunk ki. Ezeket ú.n. felhasználói történetek formájában írjuk le.</p>
                            <p>Ez az első pont, ahol megcsúszhat egy fejlesztési projekt. Az ügyfelek általában mindent egyszerre szeretnének beletömöríteni egy fejlesztési projektbe, ezért az könnyen költségessé és időigényessé válhat. Ennek elkerülése végett gyakran bevetjük ezen a ponton a MoSCoW technikát. A MoSCoW egy betűszó, 4 lista kezdőbetűiből áll össze. Ez a 4 lista pedig a „Must have", „Should have", „Could have" és a „Won't have", vagyis a nélkülözhetetlen funkciók, fontos funkciók, lehetséges funkciók és a biztosan nem megvalósítandó funkciók.</p>
                            <p>A felhasználói történeteket ebbe a 4 kategóriába soroljuk a lehető legnagyobb szigorúsággal, eredményképpen pedig egy világos képet kapunk arról, hogy hol érdemes meghúzni a vonalat annak érdekében, hogy a projekt ne fusson ki az idő- és költségkeretből.</p>
                            <p>A megszűrt felhasználói történeteket egy ú.n. backlogba helyezzük. Ez a backlog, a különböző egyéb dokumentációval és esetleges prototípusokkal lesz a specifikációnk, ami a fejlesztendő feladatok leírását jelenti.</p>
                            <p class="has-margin-b30">Jöjjön akkor a várva várt rész, a konkrét számok. Eddigi tapasztalataink alapján a teljes tervezési és specifikációs fázis az első projekt esetén 2-4 hét alatt megvalósítható, a második projekt esetében viszont ez már a 6-8 hetet is elérheti, hiszen az interjúk és felhasználói történetek száma is könnyen háromszorosa vagy akár négyszerese lehet az első projektnek.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-system-design.jpg') }}" alt="Design és rendszertervezés" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Design és rendszertervezés</h2>
                            <p>A specifikáció véglegesítését a design és a rendszertervezési szakaszok követik. A rendszermérnökök megtervezik, hogy a szoftverhez milyen technológia és infrastruktúra lesz szükséges, hogyan fognak a különböző szoftvermodulok egymással kommunikálni és hogyan lesznek az adattáblák felépítve. Csupa unalmas dolog.</p>
                            <p>Eközben a grafikusok sokkal izgalmasabb és látványosabb dolgokkal foglalkoznak: drótvázakat készítenek és megtervezik a felhasználói felületeket, amelyek az ügyfeleket és minket is mindig izgalommal töltenek el, hiszen ezek az első igazán kézzelfogható eredményei a munkának.</p>
                            <p>Ebben a szakaszban érdemes odafigyelni, hogy minden megfelel-e az elképzeléseinknek – ha módosításra van szükség, akkor azt most tegyük meg. Ugyanis ebben a fázisban még relatív olcsón lehet ezeket a módosításokat eszközölni, később, amikor már a fejlesztés zajlik, sokkal költségesebb bármit is megváltoztatni.</p>
                            <p>Bár úgy tűnhet, hogy a sok változtatás miatt már itt megcsúszhat a projekt, érdemes rászánni az időt, hiszen a későbbiekben ez sokkal több időveszteséget okozhat.</p>
                            <p class="has-margin-b30">Ez a szakasz az első projekt esetében tipikusan 2-3 hetet, míg a második projekt esetében 5-6 hetet is igénybe vehet.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-development.jpg') }}" alt="Fejlesztés" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Fejlesztés</h2>
                            <p>A következő szakasz a fejlesztés, amikor tulajdonképpen pár fejlesztő kolléga összedugja a fejét és koffeinből kódot varázsolnak. Ez az ügyfelek számára ismét egy kevésbé izgalmas szakasz, hiszen ők már a végterméket várják.</p>
                            <p>Ezért rossz hír számukra, hogy ez a leghosszabb szakasz. Az első projekt esetében ez 10-15 hét, míg a második projekt esetében ez 30-45 hét is lehet.</p>
                            <p>Még rosszabb hír, hogy ez a szakasz az, ami a leggyakrabban megcsúszik. Ennek a csúszásnak pedig két fő oka lehet.</p>
                            <p>Az első okot, a különböző változtatási kérések, azaz change requestek adják, amelyek az ügyfél részéről érkeznek. Ezért amint már említettük, a legegyszerűbb, ha már a design és rendszertervezési szakaszban megejtjük ezeket. Ennek a gyakorlati valószínűsége viszont közel nulla.</p>
                            <p>Mivel a vízesés modell nagyon mereven kezeli a change requesteket, jobb megoldás lehet ilyen esetekben egy agilis fejlesztés. És mivel már másodszorra hozom fel az agilitást ebben a cikkben, úgy érzem, kénytelen leszek majd ennek a témának egy külön cikket szentelni.</p>
                            <p class="has-margin-b30">A másik oka a fejlesztési szakaszbeli csúszásoknak az, ha a fejlesztő csapat rosszul méri fel a munka mennyiségét. Ezt okozhatja egy elégtelenül kidolgozott specifikáció, vagy a fejlesztő csapat tapasztalathiánya. Mindkét esetet úgy kerülhetjük el, hogy olyan fejlesztő partnert választunk, akinek van tapasztalata hasonló projektekben és rendelkezik a megfelelő referenciákkal.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-implementation.jpg') }}" alt="Bevezetés" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Bevezetés</h2>
                            <p>Ha készen vagyunk a fejlesztéssel, akkor következi a bevezetési szakasz. Ebben a szakaszban telepítjük a szoftvert az ügyfél rendszerére, adunk hozzáférést a különböző felhasználóknak és végezzük el a betanítást. Bár nem feltétlenül a bevezetés része, leggyakrabban szintén a fejlesztést követően készül el a rendszer dokumentációja is.</p>
                            <p class="has-margin-b30">Az első projekt esetében a bevezetésre kb. 1 hét elegendő kéne legyen, míg a második projekt esetében 2-4 hetet is igénybe vehet.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-testing-and-bug-fixes.jpg') }}" alt="Tesztelés és hibajavítás" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Tesztelés és hibajavítás</h2>
                            <p>Ha megtörtént a bevezetés akkor már csak tesztelés és a hibák javítása maradt hátra. Természetesen már a fejlesztési fázis közben is történik tesztelés a fejlesztő csapat részéről, de minden szoftver esetében előfordulnak olyan hibák és tesztesetek, amelyekre csak akkor derül fény, amikor a végfelhasználók elkezdik a szoftvert használni.</p>
                            <p class="has-margin-b30">Fontos megjegyezni, hogy amikor a tesztelési szakaszhoz szükséges időről beszélünk, akkor az nem egyezik meg a garanciális periódussal. A tesztelés és hibajavításhoz az első projekt esetében 3-4 hétre, míg a második projekt esetében 6-8 hétre van szükség. Ez idő alatt a fennmaradó hibák többségét javítani lehet, és a szoftver megszakítás nélkül használható lesz, azonban esetenként 1-2 apró hiba még előfordulhat később is.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-long-is-a-development-project-support.jpg') }}" alt="A projekt után" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">A projekt után</h2>
                            <p>Az effektív projekt ezzel lezárul. Mint láthattuk az első projekt, egy egyszerű CRM rendszer nagyjából 15 és 25 hét között valósítható meg, míg egy elég magas komplexitású ERP rendszer 45 és 65 hét között valósítható meg reálisan.</p>
                            <p class="has-margin-b60">Bár a fejlesztési projektnek itt vége van, ezek után egy új projekt indul, ami alatt a szoftvert karban kell tartani és a szoftverfrissítéseket el kell végezni. Sőt, a tapasztalatunk az, hogy maga a fejlesztés sem áll meg itt, hiszen a szoftverben folyamatosan módosításokat kell eszközölni és újabb modulokkal kell bővíteni, hogy megfeleljen az ügyfeleink folyamatosan fejlődő igényeinek.</p>
                            <p>Reméljük sikerült választ adnunk a kérdésre, hogy mennyi ideig tart egy fejlesztés. Ha van egy ötleted, de tartasz tőle, hogy elhúzódik a fejlesztés, és szeretnéd a tanácsunkat kérni, vedd fel velünk a kapcsolatot.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Milyen hosszú egy fejlesztési projekt?'])
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
    "datePublished": "2019-03-04T12:00:00",
    "dateModified": "2019-03-04T12:00:00",
    "description": "Megpróbálunk egy gyakran feltett kérdést próbálunk körbejárni: milyen hosszú ideig tart majd a fejlesztés?",
    "headline": "Milyen hosszú egy fejlesztési projekt?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-how-long-is-a-development-project-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Szabadúszó, Freelancer, Outsourcing",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Milyen hosszú egy fejlesztési projekt?",
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
                "name": "Milyen hosszú egy fejlesztési projekt?"
            }
        }
    ]
}
</script>
@endpush
