@section('title', 'Egyedi fejlesztés vagy dobozos szoftver?')
@section('description', 'Valamikor minden vállalat eléri azt a pontot, amikor a növekedés érdekében be kell fektetnie a szoftverinfrastruktúrájába. Megpróbálunk segíteni abban, hogy eldöntsd, hogy az egyedi fejlesztés vagy egy dobozos megoldás a megfelelő vállalatodnak.')
@section('preview_image', asset('media/blog/cover-custom-development-vs-ootb-hu.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-custom-development-vs-ootb-1.jpg') }}" srcset="{{ asset('media/blog/featured-custom-development-vs-ootb-769w.jpg') }} 769w" sizes="100vw" alt="Egyedi fejlesztés vagy dobozos szoftver?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan válasszunk egyedi fejlesztés és egy dobozos szoftver között?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2018-05-03 12:00:00">2018 május 3</time> &middot; 7 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Ezt a kérdést teszik fel nekünk a leggyakrabban: milyen előnyökkel jár az egyedi megoldás a licences szoftverrel (SaaP) vagy a szolgáltatott szoftverrel (SaaS) szemben. Rengeteg cikket írtak erről, de mivel sokszor találkozunk ezzel a kérdéssel, íme a mi nézőpontunk.</p>
                            <p class="has-margin-b60">Az egyszerűség kedvéért, ebben a cikkben dobozos szoftver gyűjtőnév alatt fogunk hivatkozni a licences és szolgáltatott szoftverekre egyaránt. </p>
                            <h2 class="heading-3 has-margin-b30">Funkcionalitások és testreszabás</h2>
                            <p>Nézzük meg, hogyan viszonyul egy dobozos termék és egy egyedi fejlesztés egymáshoz funkcionalitás és testreszabhatóság szempontjából.</p>
                            <p>Egy dobozos szoftver célja, hogy megfeleljen a lehető a legtöbb vállalat legtöbb igényének, de valószínűleg nem fog megfelelni a Te összes igényednek.</p>
                            <p>A legtöbb szükséges funkcionalitás megtalálható lesz benne és hasznos munkafolyamatot biztosít, azonban valószínűleg kompromisszumokkal is fog járni. Egyes funkcionalitások hiányozni fognak belőle vagy a várttól eltérően fognak működni.</p>
                            <p>Ezeknek a hiányzó funkcionalitásoknak a hozzáadása vagy a meglévők testreszabása hosszas folyamat lehet vagy egyszerűen lehetetlen.</p>
                            <p>Bár a szoftvergyártók megpróbálják folyamatosan beépíteni a felhasználói visszajelzéseket a termékeikbe, az igényelt funkcionalitások hozzáadása sok időbe telhet, vagy egyáltalán nem valósulhat meg, ha nem igazodik más felhasználók igényeihez is.</p>
                            <p>Ezzel szemben egy egyedi megoldás minden igényelt funkcionalitást tartalmaz és teljes mértékben testre szabható.</p>
                            <p>Gondolj például a jelentésekre! A dobozos szoftverben megtalálod az alapvető jelentéseket, de előfordulhat, hogy hiányzik belőle 1-2 adat, amire szükséged lehet. Egy testreszabott alkalmazásban a jelentéskészítés pontosan úgy történik, ahogyan szeretnéd: részletes elemzést nyújt a vállalkozás jelenlegi helyzetéről és előre látható üzleti kilátásairól.</p>
                            <p>Érdemes egy SaaS szoftver használatával kezdened! Rövid idő után rájössz, melyek azok a funkciók, amiket szeretsz benne, ugyanakkor megismered a hiányosságait és a korlátait is.</p>
                            <p class="has-margin-b60">Ha már kinőtted az SaaS megoldás adta lehetőségeket és rendelkezel a szükséges erőforrásokkal, érdemes elgondolgozni egy egyedi szoftver fejlesztésén.</p>
                            <h2 class="heading-3 has-margin-b30">Költségek</h2>
                            <p>Nem tagadjuk, hogy egy egyedi fejlesztésű szoftverbe való beruházás drágább, mint egy dobozos szoftver telepítése. Ebben az esetben nemcsak a fejlesztési költségeket, hanem az üzleti elemzést, a rendszertervezést, a tesztelést és a karbantartást is számításba kell venni.</p>
                            <p>A dobozos termékek egyszerűen azért olcsóbbak, mert sok vásárló között osztják el a költségeket. Ha azonban figyelembe vesszük az SaaP szoftverek minden új verziójának a licencdíját vagy az SaaS szoftver előfizetési költségeit, akkor megállapíthatjuk, hogy a költségkülönbség nem is olyan jelentős.</p>
                            <p>A legtöbb dobozos szoftvercég olyan árképzési modellt alkalmaz, amely exponenciálisan drágul, minél több felhasználója van. A SaaP esetében licencet kell vásárolni minden számítógépre, amelyen telepíteni szeretnénk a szoftvert, az SaaS havidíja pedig magasabb lesz a felhasználók számának növekedésével.</p>
                            <p>Ezért a várható felhasználók mennyisége és a vállalat előre jelzett növekedése az egyik legfontosabb tényező a szoftverköltségek megbecslésében.</p>
                            <p>Nemrég összehasonlítottuk egyik egyedi fejlesztésünket egy népszerű CRM-el költségek szempontjából.</p>
                            <p>Láthatjuk azt, hogy az egyedi fejlesztésű CRM öt felhasználó esetében sosem térül meg. De mivel a dobozos termék exponenciálisan drágul minél több felhasználónk van, annak ára 2 év alatt már meghaladhatja az egyedi fejlesztés beruházási és support költségét.</p>
                            <figure>
                                <img src="{{ asset('media/blog/custom-development-vs-saas-costs-en.png') }}" alt="Költségek változása időben, összehasonlítva egyik testreszabott fejlesztésünket egy hasonló szolgáltatott szoftverrel (SaaS)" />
                                <figcaption>Költségek változása időben, összehasonlítva egyik testreszabott fejlesztésünket egy hasonló szolgáltatott szoftverrel (SaaS)</figcaption>
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Bevezetési idő</h2>
                            <p>A testreszabott alkalmazások fejlesztése sok időt vehet igénybe és számos tényezőtől függ, mint például a vállalat mérete, az érdekeltek száma, stb.</p>
                            <p>A legegyszerűbb ügyviteli rendszer fejlesztése is legalább 2 hónapot vesz igénybe, míg egy komplexebb vállalatirányítási rendszer bevezetése könnyen eltarthat 1-1,5 évet.</p>
                            <p>A dobozos szoftverekről azt hinnénk, hogy akár azonnal telepíthetőek. Ez sok esetben így is van:az SaaS termékek akár egy nap alatt telepíthetőek és paraméterezhetőek.</p>
                            <p>Egy komplexebb dobozos rendszer azonban az igények, a konfigurációk és a felhasználói képzés függvényében szintén elérheti az egyéves bevezetési időt.</p>
                            <p class="has-margin-b60">Ennek ellenére megállapíthatjuk, hogy egy dobozos szoftver bevezetési ideje rövidebb lesz az egyedi megoldásénál.</p>
                            <h2 class="heading-3 has-margin-b30">Bevezetés után</h2>
                            <p>Számos dolgot figyelembe kell venni a szoftver telepítése után: a felhasználók képzését, az adatbiztonságot és a karbantartást.</p>
                            <p>Ami a felhasználói <strong>képzést</strong> illeti, a legtöbb egyéni szoftvert fejlesztő cég, akárcsak a miénk, részletes képzést nyújt a szolgáltatás részeként.</p>
                            <p>A licences szoftvereket fejlesztő cégek ugyanolyan típusú képzést kínálnak. Ez beszállító és termék függvényében vagy bele van kalkulálva az árba, vagy külön díj ellenében érhető el.</p>
                            <p>Az SaaS szoftverek viszont legtöbbször csak általános online oktatóprogrammal rendelkeznek, melyek kevésbé hasznosak, mint egy, a szervezet sajátos igényeinek megfelelő képzés.</p>
                            <p><strong>Az adatbiztonság</strong> is egy kiemelten fontos szempont az ügyfeleink számára. Minden dobozos szoftvergyártó a legnagyobb biztonságra törekszik, mivel az adatszegés jelentős hatással lehet az értékesítésükre és a hírnevükre.</p>
                            <p>Ugyanezeket az intézkedéseket kell alkalmazni egy egyedi megoldás kidolgozásakor is, így a megfelelő fejlesztési partner kiválasztása döntő fontosságú. Győződj meg róla, hogy a fejlesztő cég szigorú biztonsági előírásokat követ és részletes karbantartási tervet nyújt a támadások elkerülésének érdekében!</p>
                            <p>Egy másik kérdés, amit meg kell vizsgálnod a döntés meghozatalakor, <strong>a szoftver karbantartása</strong></p>
                            <p>Dobozos szoftverek esetén a kisebb verziófrissítések legtöbbször ingyenesek, forgalmazótól függően a nagyobb verzióváltozások azonban többletköltséggel járhatnak.</p>
                            <p>Egyedi fejlesztések esetében is kizárólag olyan partnert válassz, aki időszakos szoftverfrissítéseket és biztonsági javításokat garantál egy havi support és karbantartási megállapodás részeként.</p>
                            <p class="has-margin-b60">A Furthernél például folyamatosan monitorozzuk az ügyfeleink szoftvereit, a javításokat és biztonsági frissítéseket pedig végrehajtjuk, amint azok rendelkezésünkre állnak. Így elkerülhető az ú.n. technikai adósság felhalmozódása, azaz a szoftverek elavulása.</p>
                            <h2 class="heading-3 has-margin-b30">Skálázhatóság</h2>
                            <p>Skálázhatóságnak nevezzük egy szoftver esetében azt, hogy mennyire rövid idő alatt alakítható át a változó igények függvényében és mennyire könnyen bővíthető új funkciókkal.</p>
                            <p>Gondold át, hogyan fogjátok használni a szoftvert a jövőben, hány felhasználója lesz és milyen funkcionalitásokra lesz szükségetek?</p>
                            <p class="has-margin-b60">Az egyedi szoftverek lehetővé teszik a funkcionalitások hozzáadását vagy eltávolítását igényeitek szerint. Ahogy vállalkozásod növekszik, párhuzamosan változnia kell a szoftvernek is. Ez a rugalmasság a dobozos szoftverek esetén csak ritkán érhető el.</p>
                            <h2 class="heading-3 has-margin-b30">Következtetések</h2>
                            <p>Csakis a vállalkozásod igényei alapján tudsz egy testreszabott megoldás és egy létező dobozos szoftver vásárlása között dönteni.</p>
                            <p>Az üzleti követelmények elemzésének kezdeti szakaszában mindig javaslatokat teszünk azt illetően, hogy egy dobozos szoftver vagy egy egyedi megoldás lenne megfelelőbb.</p>
                            <p>Sőt, mi is több SaaS terméket használunk. Néhány dobozos megoldás, mint például a számviteli szoftver, annyira univerzális, hogy megfelel a legtöbb vállalat igényeinek.</p>
                            <p>Azonban egyes esetekben a szoftvernek kezelnie kell a vállalat egyedülálló üzleti folyamatait. Éppen ezért mindig elmondjuk ügyfeleinknek, hogy nem a vállalat kell megváltoztassa munkafolyamatait a szoftverhez való alkalmazkodás érdekében, hanem a szoftvernek kell alkalmazkodnia azokhoz és fel kell gyorsítania a munkát.</p>
                            <p>Amennyiben úgy érzed, hogy a szoftvered nem alkalmazkodott az igényeidhez, hanem Te alkalmazkodtál hozzá, akkor valószínűleg egyedi megoldásra van szükséged.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan válasszunk egyedi fejlesztés és egy dobozos szoftver között?'])
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
    "datePublished": "2018-05-03T12:00:00",
    "dateModified": "2019-10-25T12:00:00",
    "description": "Valamikor minden vállalat eléri azt a pontot, amikor a növekedés érdekében be kell fektetnie a szoftverinfrastruktúrájába. Megpróbálunk segíteni abban, hogy eldöntsd, hogy az egyedi fejlesztés vagy egy dobozos megoldás a megfelelő vállalatodnak.",
    "headline": "Egyedi fejlesztés vagy dobozos szoftver?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-custom-development-vs-ootb.jpg') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Licenszes szoftver, Dobozos szoftver, Szolgáltatott szoftver, SaaP, SaaS",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}"
    },
    "name": "Egyedi fejlesztés vagy dobozos szoftver?",
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
                "name": "Egyedi fejlesztés vagy dobozos szoftver?"
            }
        }
    ]
}
</script>
@endpush
