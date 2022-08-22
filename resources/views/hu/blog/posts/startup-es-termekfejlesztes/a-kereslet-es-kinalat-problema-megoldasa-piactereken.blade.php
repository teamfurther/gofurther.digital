@section('title', 'Esettanulmány: A kereslet és kínálat probléma megoldása piactereken')
@section('description', 'A klasszikus csirke és a tojás probléma: a kínálati vagy a keresleti oldalra fókuszáljunk először? Ebben a cikkben megmutatjuk mi hogyan csináltuk egy pár korábbi projekten.')
@section('preview_image', route('generate-cover', ['title' => 'Esettanulmány: A kereslet és kínálat probléma megoldása piactereken']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Esettanulmány: A kereslet és kínálat probléma megoldása piactereken</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-07-14 10:00:00">2022 július 14</time> &middot; 5 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Az internetes szoftverek világában, piactérnek vagy marketplacenek nevezzük azokat a platformokat, amelyek két (vagy több) felhasználói csoportot hoznak össze klasszikus keresleti és kínálati oldalon. Ilyen a Jófogás, a használtautók.hu, de a Foodpanda és a Wolt is.</p>
                            <p>Ha egyik oldalon sikerül bevonzani felhasználókat, az vonzóvá teszi a platformot a másik oldal számára is. Ha viszont valamelyiket nem sikerült felépíteni, akkor a termékünk kudarcba fulladt. Ez egy klasszikus tyúk és a tojás problémához vezet. Melyik oldalt építsük fel először?</p>
                            <p>Ebben a kérdésben eléggé megosztott a szakma. <a href="https://fresco.vc/target-supply-demand-two-sided-market/" target="_blank">Egyesek szerint</a> a kínálati oldalt, míg <a href="https://www.applicoinc.com/blog/marketplaces-and-the-chicken-and-egg-problem-supply-or-demand-first/" target="_blank">mások szerint</a> a keresleti oldalt érdemes előbb felépíteni. Ebből kifolyólag meg sem próbálom valamelyik oldalt erősíteni. Ez a cikk eltér az eddig megszokott formátumtól és esettanulmányokon keresztül, saját tapasztalatainkat fogom megosztani. Hol hasalt el az első próbálkozásunk? Miért sikerült a második?</p>
                            <figure>
                                <img src="{{ asset('media/blog/marketplace-chicken-and-egg.jpg') }}" alt="Csirke és tojás probléma a piactereken" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">1. Esettanulmány: Hostess Search</h2>
                            <p>2017-ben kezdtünk el a Hostess Search oldalon dolgozni. Célja az volt, hogy fesztiválok, sportesemények és hostess ügynökségek az oldalon keresztül keresztül tudjanak eseményekre hostesseket (és hostokat) keresni.</p>
                            <p>A platform fejlesztése után ügyfelünk intenzív PPC kampányba kezdett, ami meglepően eredményesre sikeredett. Rövid idő alatt több száz hostesst és hostot sikerült feliratkoztatni. Többségükkel még a profilt is sikerült hiánytalanul kitölteni. A kezdeti validációs körökből kiderült, hogy az egy komoly értékajánlat a keresleti oldal felé.</p>
                            <p>Tyúk és a tojás probléma megoldva, következhetnek a rendezvényszervezők és ügynökségek. Az egész kampány arra volt kihegyezve, hogy az ország egyik legbővebb hostess választékából lehet szemelgetni. Gondolom sejtitek már, hogy óriásit hasalt a kampány. Pontosan két ügyfelet sikerült a platformra feliratkoztatni, megbízás viszont egyikből sem lett.</p>
                            <p>Bár <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">a problémát</a> és <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-2-resz']) }}" target="_blank">az értékajánlatot</a> jól mértük fel a projekt elején, a termék is <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-3-resz']) }}" target="_blank">szállította a megoldást</a>, végül a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">product-market fit</a> közelébe sem értünk.</p>
                            <p>A Hostess Search projektnek az volt a tanulsága, hogy egy piactér nagyon nem mindegy, hogy a keresleti és kínálati oldalon B2C vagy B2B értékesítésre van szükség. Míg az előbb esetében egy PPC vagy virális kampánnyal gyors növekedést lehet elérni és a határt gyakran csak a rendelkezésre álló marketing büdzsé határozza meg, utóbbi kőkemény sales-t igényel és sokkal hosszabb értékesítési ciklusra lehet számítani.</p>
                            <p class="has-margin-b60">A termék itt még nem kellett volna kudarcra legyen ítélve, hiszen egy értékesítési csatorna <a href="{{ localizedRoute('blog.show', ['slug' => 'pivot-vagy-nem-pivot']) }}" target="_blank">pivottal</a> menthető lett volna a projekt. Azonban B2B értékesítési tapasztalat, kapcsolatok és idő hiányában, ügyfelünk ezzel inkább meg sem próbálkozott. Helyette inkább a meglévő technológiai platformot próbáltuk teljesen más, kétoldalú B2C piacok felé terelni. A kezdeti lelkesedés viszont csökkent és a projekt szép lassan teljesen leállt.</p>
                            <h2 class="heading-2 has-margin-b30">2. Esettanulmány: Coeasy</h2>
                            <p>A Coesy-val (ejtsd /ˈkəʊzi/, pont úgy mint azt, hogy cozy), 2021-ben kezdtünk el dolgozni. A Coeasy egy német startup, aki szabadúszóknak segít „íróasztalt” találni egy városi kávézóban. Számukra segítség az, hogy olyan kávézók közül tudnak választani, ahol gyors és megbízható a WiFi, van laptop és telefon töltési lehetőség, nincs zaj és olyan zene megy a háttérben, ami nem vágja haza a produktivitásukat.</p>
                            <p>Cserében, a kávézóknak lehetőségük van feltölteni vendégekkel a kevésbé forgalmas időszakokat is. Mivel olyan vendégekről van szó, akik jellemzően hosszú időt töltenek el a kávézóban, egyetlen ital fogyasztásával, megoldást kellett találnunk arra, hogy így is megérje a kávézónak részt venni az applikációban.</p>
                            <p>Erre az lett a válaszunk, hogy minden foglalás és fizetés az applikáción keresztül történt. A szabadúszók 2 órát tudtak eltölteni az asztalnál, 1 kávé árából. Ez még mindig olcsóbb volt mint egy közösségi iroda, ráadásul megmaradt a rugalmasságuk, hogy minden nap máshonnan és más időpontokban dolgozzanak.</p>
                            <p>A mélyinterjújból az is kiderült, hogy ennek ellenére még mindig egy extra nyűg a kávézóknak részt venni a programban. A szerződést, minimum napi 4-5 kávé elfogyasztásához kötötték. Ez 8-10 kávézóban eltöltött órát jelentett, amit úgy gondoltunk, hogy 2-3 szabadúszóval lehet összehozni. Azaz legalább 2 szabadúszó kéne naponta foglaljon minden egyes kávézóban.</p>
                            <p>Ezektől a számoktól eleinte nagyon megijedtünk. Ha nagyon sok a kávézó, akkor a foglalások is megoszlanak majd és nem fogjuk tudni ezeket a számokat hozni.</p>
                            <p>Egy pár szabadúszóval folytatott interjú során viszont rájöttünk arra, hogy számukra sokkal fontosabb az, hogy bárhova beülnek, ott megfelelő munkakörülmények legyenek, mint az, hogy hány kávézóból választhatnak. Az viszont fontos volt számukra, hogy mindig legyen közel 1-1 kávézó.</p>
                            <p>Így bekövetkezett egy paradigmaváltás. Már nem arra lőttünk, hogy minél több legyen a kávézó, hanem arra, hogy csak az elvárásoknak megfelelő kávézók legyenek. Ahhoz pedig, hogy földrajzilag is megfelelő elosztásban legyenek, a keresletet és kínálatot a következő módon tartottuk egyensúlyban.</p>
                            <p>Ügyfelünkkel közösen úgy döntöttünk, hogy Berlin és Düsseldorf lesz a két teszt város. Mindkettőt felbontottuk
                                zónákra, úgy, hogy a belvárosban és a nagyobb gyalogos forgalmú részeken kisebb területűek legyenek a zónák, a külvárosokban nagyobb területűek. Ezzel azt próbáltuk elérni, hogy a frekventáltabb részeken gyorsabban lehessen a kiválasztott kávézóba eljutni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/coeasy-zone-map.jpg') }}" alt="Coeasy zóna térkép" />
                                <figcaption>Berlin zóna térképe. Azok a zónák, ahol legalább 30 érdeklődőt regisztráltunk zölddel jelöltük.</figcaption>
                            </figure>
                            <p>Csakúgy, mint a Hostess Search esetében, itt is egy PPC kampány segítségével kezdtük el a szabadúszókat bevonzani, hiszen ők egy könnyen megcélozható ügyfélszegmens. Őket egy <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-1-resz']) }}" target="_blank">smoke test</a> landing oldalra irányítottuk, ahol bemutattuk a szolgáltatást. Ezen az oldalon, lehetőséget adtunk nekik, hogy egy térképre kattintva, kiválasszák, hogy hol szeretnének foglalni. Mivel ezen a ponton még egyetlen kávézóval sem voltunk szerződve, természetesen nem történt foglalás, viszont a felhasználó felkerült egy várólistára.</p>
                            <p>Amikor egy zónába már sikerült legalább 30 érdeklődőt gyűjteni, akkor kezdtünk kávézókhoz kopogtatni (a megfelelő kávézók természetesen előre ki voltak egy listába gyűjtve). Konkrét érdeklődési számokkal alátámasztva, sokkal könnyebb volt a kávézókkal leszerződni és az ügyfelünk is nyugodtabb volt annak tudatában, hogy nagy valószínűséggel tudja is szállítani a számokat.</p>
                            <p>Amint megszületett egy szerződés, a várólistán szereplő szabadúszókat erről értesítettük. Fontos megjegyezni, hogy a landing oldalon kívül, itt még semmiféle szoftverfejlesztés nem történt. Cserébe, az összes érdeklődővel telefonon vagy emailben kommunikál az ügyfelünk. Lényegében egy <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-2-resz']) }}" target="_blank">concierge szolgáltatás</a>megy végbe.</p>
                            <p>Ennek megvan az az előnye is, hogy a folyamatos személyes kapcsolatnak köszönhetően jobban fel tudjuk mérni azt is, hogy milyen igényeik vannak a feleknek a fejlesztendő platformmal szemben. Egy másik előnye pedig az, hogy ügyfelünk fel tudja mérni, hogy 1-1 szabadúszó milyen más zónákban szokott még megfordulni, ahol szintén foglalna. Így még gyorsabban tudjuk a térképet kávézókkal lefedni.</p>
                            <p>Kevesebb mint 1 év alatt, sikerült Düsseldorfot szinte teljes egészében, Berlint pedig 65%-ban lefedni. Eddig 56 kávézó szerződött és több mint 2000 felhasználó van várólistán vagy foglalt már. Mindezt minimális szoftverfejlesztésre elköltött pénzből.</p>
                            <p>Ekkora számot már concierge üzemmódban nem lehetett ellátni, ezért közben be lett vezetve egy kezdetleges foglalási rendszer is, hogy automatizálja a folyamatot, addig, amíg maga a Coeasy piactér fejlesztésre kerül (reméljük hamarosan).</p>
                            <p>A Coeasy projekt során sokat merítettünk a Hostess Search során szerzett tapasztalatokból. Szerencsére az ügyfél is partner volt ebben, megértette, hogy mielőtt beleugrunk a platform fejlesztésébe, érdemes pontosan megértenünk, hogy a különböző felek felé mi lesz az értékajánlatunk, hogyan érjük el őket és hogyan tudjuk meggyőzni őket a feliratkozásról.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Esettanulmány: A kereslet és kínálat probléma megoldása piactereken'])
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
    "datePublished": "2022-07-14T10:00:00",
    "dateModified": "2022-07-14T10:00:00",
    "description": "A klasszikus csirke és a tojás probléma: a kínálati vagy a keresleti oldalra fókuszáljunk először? Ebben a cikkben megmutatjuk mi hogyan csináltuk egy pár korábbi projekten.",
    "headline": "Esettanulmány: A kereslet és kínálat probléma megoldása piactereken",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-epitsunk-novekedesi-motort-en.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Marketplace, Piactér",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Esettanulmány: A kereslet és kínálat probléma megoldása piactereken",
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
                "name": "Esettanulmány: A kereslet és kínálat probléma megoldása piactereken"
            }
        }
    ]
}
</script>
@endpush
