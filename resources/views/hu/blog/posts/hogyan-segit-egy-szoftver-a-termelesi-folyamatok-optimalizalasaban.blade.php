@section('title', 'Hogyan segíthet egy termelésirányítási szoftver?')
@section('description', 'Mai cikkünkben megmutatjuk, hogy miként tudja egy szoftver optimalizálni a termékfejlesztést, a beszerzést és a gyártási folyamatokat.')
@section('preview_image', asset('media/blog/cover-manufacturing-software-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-manufacturing-software.png') }}" srcset="{{ asset('media/blog/featured-manufacturing-software-768w.png') }} 768w, {{ asset('media/blog/featured-manufacturing-software-1000w.png') }} 1000w" sizes="100vw" alt="Hogyan segíthet egy szoftver a termelési folyamatok optimalizálásában?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan segíthet egy szoftver a termelési folyamatok optimalizálásában?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-10-26 12:00:00">2019 október 26</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/zCE0Lpfwqds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p class="has-margin-b60">Korábban már írtunk arról, hogyan segíthet egy szoftveres megoldás különböző irodai folyamatokban, például az <a href="{{ localizedRoute('blog.show', ['slug' => 'mikor-hasznaljunk-crm-rendszert']) }}">értékesítésben</a> vagy az <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-alakitsuk-at-cegunket-papirmentesse']) }}">adminisztratív teendőkben</a>. Ma azt szeretnénk megmutatni, hogy miként tudjuk ezeket a szoftvereket az irodán kívül, a termelési folyamatok optimalizálására használni.</p>
                            <h2 class="heading-2 has-margin-b30">Termék A-tól Z-ig</h2>
                            <p>Egy termelésirányító szoftver több kapcsolódó modulból áll. A nulladik lépcső a PLM modul, vagyis a product-lifecycle management, magyarul termékéletciklus-kezelő. A PLM feladata egy termék megtervezése a mérnöki és gyártástervektől, egészen a szervízelésig és a termék megsemmisítésig.</p>
                            <p>Vegyünk egy valós példát. Egyik <a href="{{ localizedRoute('projects.show', ['slug' => 'njoy-the-hive']) }}">ügyfelünk</a> elektronikai aprócikkeket gyárt. Az ő esetükben a PLM szoftver tartalmaz minden termékhez tartozó dokumentumot, megtervezi hogy milyen emberi erőforrásokra van szükségük és megszervezi a kommunikációt közöttük. Emellett tartalmazza az anyagjegyzéket (BoM), gyártásterveket és szervízelési útmutatókat is.</p>
                            <p>Gondoljunk úgy a PLM-re, mint egy központi adatbázisra, amely információkat szolgáltat egy termékről a cégnek és egyéb szoftveres moduloknak.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-plm-hu.png') }}" alt="A PLM dokumentálja a termék életciklusának összes fázisát" />
                                <figcaption>A PLM dokumentálja a termék életciklusának összes fázisát</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Optimális készlet</h2>
                            <p>Az effektív termelési folyamatok általában ott kezdődnek, hogy a CRM-be beérkezik egy termékigény. Ezek az ú.n. MRP, vagyis material requirements planning modulban rögzülnek. Ahogy nevéből is látszik, kezdetben az MRP rendszerek szükséglettervezési feladatokat láttak el, az MRP II bevezetésével viszont már erőforrástervezési feladatokat is el tudtak látni. Lássuk, mit is jelent ez valójában.</p>
                            <p>Az MRP szoftver egyik elsődleges feladata az, hogy biztosítsa, hogy minden anyag rendelkezésre áll a termeléshez, de eközben mindig csak a minimális mennyiségű anyag legyen raktáron. Ezt nevezzük optimális készletnek, célja pedig egyszerűen csak annyi, hogy csökkentsük a raktározási és beszállítási költségeinket.</p>
                            <p>Az MRP modul megkapja az anyagjegyzéket a PLM modultól, majd a rendeléseket figyelembe véve kiszámolja az elkövetkező periódusban milyen készlet mennyiségekre lesz szükségünk és mikor kell végrehajtani a beszerzést. Ezt kommunikálja a készletkezelő és beszerzési modulok felé.</p>
                            <p>Ideális esetben egy készlet nélküli termelési folyamatot tudunk létrehozni. Tehát amint a beszállítótól beérkezik egy szállítmány, azt rögtön fel is használjuk a termeléshez. Ez az egyik alappillére az egyik legismertebb termelésszervezési rendszernek, a Just-in-time termelésnek, amelyet japánban fejlesztett ki a Toyota a ‘60-as években.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-optimal-inventory.jpg') }}" alt="Az optimális leltár azt jelenti, hogy csak a minimálisan szükséges anyagot tartjuk készleten" />
                                <figcaption>Az optimális leltár azt jelenti, hogy csak a minimálisan szükséges anyagot tartjuk készleten</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Optimális gyártási folyamatok</h2>
                            <p>Az MRP szoftver másik fő feladata, hogy biztosítsa azt, hogy mindig elegendő termék álljon készen annak érdekében, hogy minden rendelést ki tudjunk elégíteni. Ezt úgy oldja meg az MRP, hogy összehangolja a beszerzéseket a megrendelésekkel és a szervízigényekkel, majd egy adott periódusra előre beütemezi a termelést, különböző gyártóegységekre lebontva.</p>
                            <p>A Just-in-time termelés megköveteli azt, hogy az átállási időket minimalizáljuk. Ilyen átállási idő lehet például az anyagmozgatás az üzemen belül vagy a gép szerszámolása és anyaggal történő ellátása, esetleg az emberi erőforráshoz köthető várakozási idő. Egy MRP szoftver ezeket a paramétereket mind figyelembe veszi a termelés ütemezésekor.</p>
                            <p>Az MRP modul felelős a preventív karbantartásért is. Az MRP a termelési adatok alapján ki tudja számolni, mennyi az átlagos idő a meghibásodások között (MTBF – mean time between failure), mennyi az átlagosan szükséges idő a javításhoz (MTTR – mean time to repair) és mikorra várható a következő meghibásodás, beütemezve a prevenciós karbantartást ennek elkerülésére. Ezáltal biztosítjuk azt, hogy a termelésünk megszakítás nélkül történjen.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-mrp-hu.png') }}" alt="Az MRP modul folyamatosan kommunikál a PLM-el és egyéb modulokkal" />
                                <figcaption>Az MRP modul folyamatosan kommunikál a PLM-el és egyéb modulokkal</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Minőségellenőrzés</h2>
                            <p>A minőségellenőrzés szintén fontos része egy termelésirányító szoftvernek. A termelési folyamat különböző stádiumaiban kontrollpontokat tudunk felállítani, például hogy melyik fázisban mennyi a selejt. Ha bármelyik kontrollpontnál felmerül egy hiba, az dokumentálhatjuk majd később kielemezhetjük. Ha megtaláltuk a probléma okát, akkor megelőző lépéseket is felállíthatunk, hogy elkerüljük a probléma újbóli előfordulását.</p>
                            <p>A termelés során a szoftver rengeteg információt képes gyűjteni. Ilyen információk lehetnek például a gépi adatok, ciklusidők, munkaórák vagy a már említett szerszámolási, anyag feltöltési és karbantartási idők.</p>
                            <p>Ezekből az információkból az MRP részletes statisztikákat és jelentéseket készít, melyekből pontos képet kapunk arról, hogy a rendeléseknek mekkora a gyártási költsége vagy hogy melyik folyamatot lehet hatékonyabbá tenni. Sőt, a modern MRP szoftverek gépi tanulásra is képesek, tehát ezekből az adatokból képesek külső beavatkozás nélkül következtetéseket levonni és tovább finomítani a termelési ütemezést.</p>
                            <figure>
                                <img src="{{ asset('media/blog/manufacturing-software-qc.jpg') }}" alt="Egy termelésirányító szoftverben különböző kontrollpontokat állíthatunk fel" />
                                <figcaption>Egy termelésirányító szoftverben különböző kontrollpontokat állíthatunk fel</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Következtetések</h2>
                            <p>Összegezzük akkor, hogy miben segíthet egy termelésirányító szoftver? Leegyszerűsítve egy termelésirányító szoftver segít a gyártási hatékonyság növelésében és a költségek csökkentésében.</p>
                            <p>Ezt</p>
                            <ul class="list has-bullets">
                                <li>a termékinformációk rendszerezésével</li>
                                <li>a készlet és beszerzés optimalizálásával</li>
                                <li>a termelési és a karbantartási munkák ütemezésével</li>
                                <li>a minőségbiztosítással</li>
                                <li>és pontos statisztikák és előrejelzések készítésével</li>
                            </ul>
                            <p class="has-margin-b60">érjük el.</p>
                            <p>Amennyiben felkeltette az érdeklődésedet a cikkünk, szeretnél többet megtudni arról, hogy hogyan segítheti a Te vállalkozásodat egy termelésirányító szoftver, vagy hogyan válaszd ki a számodra megfelelőt, lépj velünk kapcsolatba!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan segíthet egy szoftver a termelési folyamatok optimalizálásában?'])
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
    "datePublished": "2019-10-26T12:00:00",
    "dateModified": "2019-10-26T12:00:00",
    "description": "Mai cikkünkben megmutatjuk, hogy miként tudja egy szoftver optimalizálni a termékfejlesztést, a beszerzést és a gyártási folyamatokat.",
    "headline": "Hogyan segíthet egy termelésirányítási szoftver?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-manufacturing-software-hu.png') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "PLM, Product Lifecycle Management, Termékéletciklus-kezelés, MRP, Material Resource Planning, Erőforrástervezés, Kapacitástervezés, Optimális készlet, Minőségellenőrzés, Termelésirányítás, Digitális Vállalkozás, Digitális Transzformáció, ERP, Vállalatirányítás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan segíthet egy termelésirányítási szoftver?",
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
                "name": "Hogyan segíthet egy termelésirányítási szoftver?"
            }
        }
    ]
}
</script>
@endpush
