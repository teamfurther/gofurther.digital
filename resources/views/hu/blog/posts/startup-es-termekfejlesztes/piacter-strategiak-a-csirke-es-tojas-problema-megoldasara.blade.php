@section('title', 'Piactér stratégiák a csirke és tojás probléma megoldására')
@section('description', 'Tudd meg milyen seeding stratégiák léteznek a keresleti és kínálati oldal egyensúlyban tartására a kétszereplős piacterek esetén. Lapozz bele!')
@section('preview_image', route('generate-cover', ['title' => 'Piactér stratégiák a csirke és tojás probléma megoldására']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Piactér stratégiák a csirke és tojás probléma megoldására</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-08-18 10:00:00">2022 augusztus 18</time> &middot; 5 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p class="has-margin-b60">Az <a href="{{ localizedRoute('blog.show', ['slug' => 'a-kereslet-es-kinalat-problema-megoldasa-piactereken']) }}" target="_blank">előző cikkemben</a> már írtam piacterekről. Akkor saját tapasztalataink tükrében mutattam meg, hogyan lehet a csirke és tojás problémát áthidalni. Azonban előttünk már páran kitaposták ezt az utat és léteznek bevett, ú.n. seeding stratégiák, piacterek számára. Ma ezekkel szeretnék foglalkozni.</p>
                            <h3 class="heading-3 has-margin-b30">Mi az a piactér?</h3>
                            <p class="has-margin-b60">A piactér egy olyan platform, amely sok vásárlót köt össze sok eladóval. Tehát összehozza a keresleti és kínálati oldalt. Ezen felül lehetővé teszi, hogy a két fél egymás között tranzakciókat (leggyakrabban vásárlást) hajtson végre, amiért cserébe a piactér jutalékot kap. Piactérnek számít a Jófogás, a használtautók.hu, vagy akár a Foodpanda vagy a Wolt.</p>
                            <h3 class="heading-3 has-margin-b30">Mi a csirke és a tojás probléma?</h3>
                            <p class="has-margin-b60">Értelemszerűen, egy piactér úgy teremt értéket, ha a keresleti és kínálati oldalt egyensúlyban tudja tartani. Ha az egyik oldal hiányzik, akkor létrejön egy ú.n. csirke és tojás probléma.  A kínálati oldal nem lesz motivált, hogy csatlakozzon a platformhoz ha nincs ki vásároljon tőle. A keresleti oldal pedig látva, hogy egyelőre nincs mit vásárolnia, kivár amíg bővebb lesz a kínálat. Ennek a problémának a feloldására szolgálnak a piactér seeding stratégiák.</p>
                            <h2 class="heading-2 has-margin-b30">#1 Egyjátékos mód</h2>
                            <p>Az egyjátékos mód, vagy single player mode kifejezés a videojátékok világából ered. A piacterek alapvetően több „játékost” igényelnek. Azonban a piacterek 34% korai fázisban egyjátékos módban használható <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-hasznald-a-value-proposition-canvast']) }}" target="_blank">értékajánlattal</a> is rendelkeznek.</p>
                            <p>Az Amazon, vagy itthon az eMag jó példái ennek. Mindkettő sikeres kiskereskedő volt (egyjátékos mód), így rengeteg vásárlóra tettek szert. A kínálati oldalt csak ezek után nyitották meg, megengedve a beszállítóknak, hogy közvetlenül értékesítenek egy piactéren keresztül.</p>
                            <p class="has-margin-b60">Szintén egyjátékos módot alkalmazott az OpenTable, egy vendeglő asztalfoglalási szolgáltatás. Ők eleinte a vendéglőket vonzották a platformra azáltal, hogy egy önálló módon használható foglalási rendszert adtak a vendéglőknek. Mikor már elég vendéglő használta az ő foglalási szoftverüket, nyitottak a fogyasztói oldal irányába és a vendéglőktől elkezdtek jutalékot kérni a foglalásokért.</p>
                            <h2 class="heading-2 has-margin-b30">#2 Üres szobák</h2>
                            <p>Az üres szobák feltöltése stratégia esetében olyan szolgáltatókat célzunk meg kínálati oldalon a piactérrel, akiknél vannak üzleti szempontból lassabb periódusok.</p>
                            <p>Azt a stratégiát alkalmazzák a szállásfoglaló rendszerek. A hőskorban az ő értékajánlatuk még csupán annyi volt, hogy a szállások üres szobáit értékesítik, amit a szállásnak magának nem sikerült. Mára már ezek a „szállás piacterek” lettek a de facto standard foglalásra, a rajtuk beérkező foglalások száma többszöröse annak, ami más csatornákon keresztül érkezik.</p>
                            <p>Az Uber szintén az üres szobák (vagy lehet az üres járatok?) stratégiát alkalmazta. Ők eredetileg a hivatásos sofőröket célozták meg és nekik adták oda először az applikációt. A hivatásos sofőrök előre egyeztetett időpontokban kell felvegyék utasaikat, így napjuk nagy részében a következő időpontra várnak. Az Ubernek köszönhetően ezt az időt ki tudták használni egy kis extra kereset érdekében.</p>
                            <p class="has-margin-b60">A Groupon ugyanezt a stratégiát alkalmazta, hogy felépítse a kínálati oldalt. Ők is olyan szolgáltatókat kerestek meg, akiknek éppen lassabb periódusok volt üzleti szempontból (utazási irodák télen, szaunák és spa-k a nyári szabadságok alatt, stb.). Eleinte naponta egy ilyen szolgáltatótól, egy darab ajándékkupont hirdettek meg. Mivel a jutalékot csak az értékesített kupon után kapott a Groupon, a szolgáltatóknak minimális kockázatot jelentett csak, hogy a platformhoz csatlakozzanak.</p>
                            <h2 class="heading-2 has-margin-b30">#3 Eladók a vásárlók</h2>
                            <p>Az egyik legsikeresebb stratégia, ha olyan célcsoportra fókuszálunk, akik egyszerre vásárlók és eladók is. Azok közül a piacterek közül, akik ezt a stratégiát követik, 10-ből 7 ú.n. peer-to-peer bevásárló piactér, mint pld. a Jófogás vagy az eBay.</p>
                            <p class="has-margin-b60">Ennek a stratégiának a könnyedsége abban rejlik, hogy ugyanazt a marketing stratégiát tudjuk használni a kereslet és kínálat megszólítására is.</p>
                            <h2 class="heading-2 has-margin-b30">#4 Hamis kínálat</h2>
                            <p>Vannak esetek, amikor megéri a kínálati oldal szerepét magunknak betölteni annak érdekében, hogy fel tudjuk a keresleti oldalt építeni. Ez a stratégia eléggé megosztó. Lehet egy nagyon hasznos eszköz is, de alkalmazásábal könnyen lehet az etikusság határát is súrolni.</p>
                            <p>A Tinder nem csak súrolja, hanem sokak szerinti át is lép egy bizonyos határt a hamis felhasználói profilok használatával. A platformon gyakran találkozni hamis profilokkal, amiket a Tinder annak érdekében vet be, hogy egyensúlyban és érdeklődésben tartsa a felhasználóit.</p>
                            <p>De a hamis kínálat stratégiát lehet jól is csinálni, mint ahogy Steve Sammartino, a Rentoid.com alapítója tette. A Rentoid egy olyan piactér volt, ahol egymástól tudtak bérelni a látogatók. Steve a nagy áruházak termékkatalógusait böngészte olyan termékek után kutatva, amik bérlésre alkalmasak, majd ezeket listázta az oldalán. Ha valaki kibérelte, Steve elment és megvásárolta, majd a bérleti periódus lejárta után eladta eBay-en az eredeti ár 80%-ért. Ezzel a metódussal forgalmat terelt az oldalra, ahol szép lassan mások is elkezdték listázni a bérelhető tárgyaikat. <em>Szerk. megj.</em>: a rentoid.com ma már nem létezik, sajnos nem találtam infót róla, hogy mi történt vele. Ha tudtok valamit, írjátok meg nekem is.</p>
                            <p class="has-margin-b60">Hasonló stratégiát alkalmazott az Udemy oktatási platform is az elején. Ők olyan kurzusokat kerestek, amik a kereskedelmi licencük alapján ingyenes megoszthatóak voltak. Így rövid idő alatt 5000 kurzusra tudták megnövelni az adatbázisukat. Ez bevonzotta a keresleti oldalt, majd amikor már keresleti oldalon is szép számmal voltak látogatók, sokkal könnyebb volt meggyőzni a kínálati oldalt, hogy kurzusokat gyártsanak a platformra.</p>
                            <h3 class="heading-3 has-margin-b30">Szóval kínálat előbb, majd kereslet?</h3>
                            <p>A fenti stratégiákból könnyű azt a következtetést levonni, hogy mindig a kínálati oldalt érdemes először felépíteni. Bár kétségkívül ez a gyakoribb út, nem mindig ez a megfelelő.</p>
                            <p>A Handy egy olyan piactér, ahol otthontulajdonosok tudnak különböző javításokra, munkákra szakembert keresni. Az itthoni jószaki.hu megfelelője. Ők előbb egy olyan landing oldalt készítettek, amin szakembert lehetett foglalni. Ezek után a Handy munkatársai őrült keresésbe kezdtek, hogy megfelelő szakembert tudjanak biztosítani a garantált 7 napos határidő előtt. Ha a szakember elvégezte a munkát, onnantól kezdve már őt is sokkal könnyebb volt meggyőzni, hogy iratkozzon fel a platformra, hiszen már munkája is származott onnan.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Piactér stratégiák a csirke és tojás probléma megoldására'])
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
    "datePublished": "2022-08-18T10:00:00",
    "dateModified": "2022-08-18T10:00:00",
    "description": "Tudd meg milyen seeding stratégiák léteznek a keresleti és kínálati oldal egyensúlyban tartására a kétszereplős piacterek esetén. Lapozz bele!",
    "headline": "Piactér stratégiák a csirke és tojás probléma megoldására",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Piactér stratégiák a csirke és tojás probléma megoldására']) }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Marketplace, Piactér",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Piactér stratégiák a csirke és tojás probléma megoldására",
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
                "name": "Piactér stratégiák a csirke és tojás probléma megoldására"
            }
        }
    ]
}
</script>
@endpush
