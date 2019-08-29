@section('title', 'Egyedi fejlesztés vagy dobozos szoftver?')
@section('description', 'Valamikor minden vállalat eléri azt a pontot, amikor a növekedés érdekében be kell fektetnie a szoftverinfrastruktúrájába. Megpróbálunk Önnek segíteni abban, hogy eldöntse, hogy az egyedi fejlesztés vagy egy dobozos megoldás a megfelelő vállalatának.')
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
                            <p class="has-margin-b60">Ezt a kérdést teszik fel nekünk a leggyakrabban: milyen előnyökkel jár az egyedi megoldás a licences szoftverrel (SaaP) vagy a szolgáltatott szoftverrel (SaaS) szemben. Rengeteg cikket írtak erről, de mivel sokszor találkozunk ezzel a kérdéssel, íme a mi nézőpontunk.</p>
                            <h2 class="heading-3 has-margin-b30">Funkcionalitások és testreszabás</h2>
                            <ul class="list has-bullets">
                                <li>meghatározás szerint az egyedi megoldás minden igényelt funkcionalitást tartalmaz, és <em>teljes mértékben</em> testre szabható</li>
                                <li>a dobozos szoftver megfelel a <em>legtöbb</em> vállalat <em>legtöbb</em> igényének, de valószínűleg nem felel meg az Ön <em>összes</em> igényének; az új funkcionalitások hozzáadása vagy a meglévők testreszabása hosszas folyamat lehet vagy egyszerűen lehetetlen</li>
                            </ul>
                            <p>A dobozos megoldás a legtöbb szükséges funkcionalitást nyújtja, és hasznos munkafolyamatot biztosít. Azonban valószínűleg kompromisszumokkal fog járni. Egyes funkcionalitások hiányozni fognak vagy a vártnál eltérően működnek. A szoftvergyártók folyamatosan beépítik a felhasználói visszajelzéseket a termékeikbe. Azonban az igényelt funkcionalitások hozzáadása sok időbe telhet, vagy egyáltalán nem valósulhat meg, ha nem igazodik más felhasználók igényeihez.</p>
                            <p>Gondoljon például a jelentésekre. A dobozos szoftver alapvető jelentéseket nyújt a funkcionalitásának megfelelően, de előfordulhat, hogy nem kaphatja meg az összes szükséges információt. Egy testreszabott alkalmazásban a jelentéskészítés pontosan úgy történik, ahogyan Önnek szüksége van rá, részletes elemzést nyújtva a vállalkozás jelenlegi helyzetéről és előre látható üzleti kilátásairól.</p>
                            <p>Másrészt, amennyiben egy testreszabott megoldás az ügyfél összes érdekgazdájának (stakeholder) igényét megpróbálja kielégíteni, nem ritka, hogy túlságosan összetettnek tűnik, sok felesleges funkcionalitással járhat és megakadályozhatja a felhasználói élményt. Ez csökkenti azokat az előnyöket, amelyeket nyújtania kellene. <a href="{{ localizedRoute('about') }}#hogyan-dolgozunk">Az üzleti követelmények elemzési szakaszában</a> segíthetünk a végtermékbe beépítendő funkcionalitások rangsorolásában, hogy a lehető legtöbbet nyújthassunk Önnek, miközben betartjuk a költségvetési és az időbeli korlátokat.</p>
                            <p class="has-margin-b60">Gyakran ajánlott egy SaaS használatával kezdeni, mivel megismeri korlátozásait és ezek javításának lehetőségeit. Miután túlnő a SaaS megoldások lehetőségein, és rendelkezik a szükséges erőforrásokkal, érdemes egy egyedi fejlesztésű szoftverre frissíteni.</p>
                            <h2 class="heading-3 has-margin-b30">Költségek</h2>
                            <ul class="list has-bullets">
                                <li>az egyedi fejlesztésű szoftver <em>beruházási költségei nagyobbak</em></li>
                                <li>a SaaP vagy SaaS szoftverek <em>költségei hosszú távon növekednek</em>, gyakran meghaladva egy egyedi megoldás költségeit</li>
                            </ul>
                            <p>Nem tagadjuk le, hogy egy egyedi fejlesztésű szoftver költségei sokkal magasabbak, mint egy dobozos szoftver telepítése. Nemcsak a fejlesztési költségeket, hanem az üzleti elemzést, a rendszertervezést, a tesztelést és a karbantartást is figyelembe kell venni ebben az esetben. Ráadásul figyelembe kell venni a fejlesztőcsapattal töltött időt és a hardver költségeket.</p>
                            <p>A dobozos termékek sok vásárló között osztják el a költségeket, és ennek következtében a költségek alacsonyabbak. Ha azonban figyelembe veszi a dobozos szoftverek minden új verziójának licencdíját, vagy a SaaS szoftver előfizetési költségeit, akkor gyorsan megállapíthatja, hogy a költségkülönbség nem is olyan jelentős.</p>
                            <p>A legtöbb egyedi szoftvercég olyan árképzési modellt alkalmaz, amely exponenciálisan drágább, ha több felhasználója van. A SaaP esetében licencet kell vásárolnia minden számítógépre amin telepíteni szeretné, míg az SaaS drágább lesz a felhasználók számának növekedésével. Az Ön által elvárható felhasználók mennyisége és a vállalat előre jelzett növekedése az egyik legfontosabb tényező a szoftverköltségek felbecslésében.</p>
                            <p>A cég szoftverét használó felhasználók számát figyelembe véve, a dobozos szoftver költsége meghaladhatja a testreszabott megoldás költségeit 2-5 év alatt.</p>
                            <figure>
                                <img src="{{ asset('media/blog/custom-development-vs-saas-costs-en.png') }}" alt="Költségek változása időben, összehasonlítva egyik testreszabott fejlesztésünket egy hasonló szolgáltatott szoftverrel (SaaS)" />
                                <figcaption>Költségek változása időben, összehasonlítva egyik testreszabott fejlesztésünket egy hasonló szolgáltatott szoftverrel (SaaS)</figcaption>
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Fejlesztési idő</h2>
                            <ul class="list has-bullets">
                                <li>az egyedi fejlesztés <em>hónapokig vagy évekig</em> tarthat</li>
                                <li>a dobozos szoftver szinte <em>azonnal</em> használható</li>
                            </ul>
                            <p>A testreszabott alkalmazások fejlesztése sok időt vehet igénybe, számos tényezőtől függ, ilyen például a vállalat mérete, az érdekeltek száma stb. A dobozos szoftverek azonban, mint például a SaaS-termékek, akár pár nap alatt telepíthetőek, a konfigurációktól, a jóváhagyásoktól és a felhasználói képzéstől függően.</p>
                            <p class="has-margin-b60">Az testreszabott megoldások fejlesztésénél agilis technikákat alkalmazunk, kiemelve a kritikus funkcionalitásokat, így a lehető legrövidebb időn belül egy használható terméket tudunk biztosítani. Gyakran javasoljuk, hogy továbbra is használjon meglévő szoftverinfrastruktúrát, miközben fokozatosan integráljuk a funkcionalitásukat az új szoftverbe és átmásoljuk a régi adatokat.</p>
                            <h2 class="heading-3 has-margin-b30">Telepítés után</h2>
                            <p>Számos dolgot kell figyelembe venni a szoftverrel a telepítés után. Ezek a felhasználók képzése, a méretezhetőség, az adatbiztonság és karbantartás.</p>
                            <p>Ami a felhasználói <strong>képzést</strong>illeti, a legtöbb egyéni fejlesztő cég, akárcsak a miénk, részletes képzést nyújt a teljes applikációhoz szolgáltatásként. A dobozos szoftvereket fejlesztő cégek gyakran ugyanolyan típusú képzést kínálnak díj ellenében, míg a SaaS szoftverek általában általános online oktatóprogramokkal rendelkeznek, amelyeket kevésbé hasznosak mint egy, a szervezet sajátos igényeinek megfelelő képzés.</p>
                            <p><strong>A skálázhatóság</strong> nagyon fontos tényező a testreszabott vagy a dobozos szoftverek közötti döntésben. Gondolja át, hogyan használja a szoftvert a jövőben, hány felhasználója lesz és milyen funkcionalitásokra van szüksége? Az egyedi szoftver lehetővé teszi a funkcionalitások hozzáadását vagy eltávolítását, igényei szerint, vagy bizonyos funkcionalitások megváltoztatását a vállalata váltakozásával és növekedésével. Ez a rugalmasság nem érhető el a dobozos szoftverek esetén.</p>
                            <p><strong>Az adatbiztonság</strong> kiemelten fontos. Minden SaaS vagy licences szoftvergyártó a legnagyobb biztonságra törekszik, mivel az adatszegés jelentős hatással lehet az értékesítésre és a hírnévre. Ugyanezeket az intézkedéseket kell alkalmazni egy egyedi megoldás kidolgozásakor, így a megfelelő fejlesztési partner kiválasztása döntő fontosságú. A fejlesztések során szigorú biztonsági előírásokat követünk, és részletes karbantartási tervet nyújtunk a támadásoknak való  kitettség elkerülésére érdekében a jövőben.</p>
                            <p class="has-margin-b60"><strong>A szoftver karbantartása</strong> egy másik kérdés, amelyet meg kell vizsgálnia a döntése meghozatalakor. A saját verzió inkrementális frissítése jellemzően ingyenes a dobozos szoftverek esetén. A forgalmazótól függően a verzióváltozások többletköltséggel járhatnak. Minden felhasználó frissítéseket nyújt, így nem kell aggódnia a technikai adósság felhalmozásával kapcsolatban. Ugyanez vonatkozik az egyedi szoftverekre is. Válasszon olyan fejlesztési partnert, amely időszakos szoftverfrissítéseket és biztonsági javításokat garantál egy támogatási és karbantartási megállapodás részeként. Ügyfeleink szoftverei esetében figyelemmel kísérjük szoftverüket, javításokat és biztonsági frissítéseket alkalmazunk, amint ezek rendelkezésünkre állnak, és folyamatosan frissítjük a szoftvert és a hardvert, hogy ne legyen felhalmozott technikai adósság.</p>
                            <h2 class="heading-3 has-margin-b30">Következtetések</h2>
                            <p>Csakis a vállalkozása igényei alapján tud egy testreszabott megoldás és egy létező dobozos szoftver vásárlása között dönteni. Az <a href="{{ localizedRoute('about') }}#hogyan-dolgozunk">üzleti követelmények elemzésének</a> kezdeti szakaszában mindig javaslatokat teszünk arról, ha egy dobozos szoftver vagy egy egyedi megoldás lenne megfelelőbb. Sőt, mi is sok SaaS szoftvert használunk. Néhány dobozos megoldás, mint például a számviteli szoftver annyira univerzális, hogy megfelel a legtöbb vállalat igényeinek.</p>
                            <p>Azonban egyes esetekben a szoftvernek kezelnie kell a vállalat egyedülálló üzleti folyamatait. Mindig elmondjuk ügyfeleinknek, hogy <strong>nem a vállalat kell megváltoztassa munkafolyamatait a szoftverhez való alkalmazkodás érdekében, hanem a szoftvernek kell alkalmazkodnia ehhez és fel kell gyorsítania a munkát</strong>. Amennyiben úgy érzi, hogy a szoftvere nem alkalmazkodott az Ön igényeihez, hanem Ön alkalmazkodott hozzá, akkor valószínűleg egyedi megoldásra van szüksége. </p>
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
    "dateModified": "2018-05-03T12:00:00",
    "description": "Valamikor minden vállalat eléri azt a pontot, amikor a növekedés érdekében be kell fektetnie a szoftverinfrastruktúrájába. Megpróbálunk Önnek segíteni abban, hogy eldöntse, hogy az egyedi fejlesztés vagy egy dobozos megoldás a megfelelő vállalatának.",
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
