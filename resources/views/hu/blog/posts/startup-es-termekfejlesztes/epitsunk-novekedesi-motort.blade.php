@section('title', 'Építsünk motort… növekedési motort!')
@section('description', 'Mi a közös egy SaaS termékben, egy újságban és az egyházban? Az, hogy mind ugyanazt a növekedési motort használják. Tartsatok velünk, elmagyarázzuk.')
@section('preview_image', route('generate-cover', ['title' => 'Építsünk motort… növekedési motort!']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Építsünk motort… növekedési motort!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-06-13 10:00:00">2022 június 13</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Mi a közös egy SaaS termékben, egy újságban és az egyházban? Az, hogy mind ugyanazt a növekedési motort használják. Tartsatok velem, elmagyarázom.</p>
                            <p>Sokat beszéltünk már metrikákról korábbi cikkeinkben és láthattuk, hogy végtelen típusú és célú metrika létezik. Ezeket mind mérni, követni és javítani lehetetlen. Egy keretrendszer nélkül egy startup rengeteg időt tud azzal elvesztegetni, hogy arról vitatkozik, melyik metrikára érdemes fókuszálni.</p>
                            <figure>
                                <img src="{{ asset('media/blog/engines-of-growth-shawn-carolan-quote-hu.png') }}" alt="A startupok nem éhen halnak, hanem megfulladnak. — Shawn Carolan" />
                            </figure>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-merjuk-a-termekunk-sikeresseget']) }}" target="_blank">Hogyan mérjük a termékünk sikerességet</a> cikkemben megismerkedtünk “Startup Metrics for Pirates” (Startup metrikák kalózoknak) keretrendszerrel, amely megszabja, hogy milyen metrikákra és milyen sorrendben kell odafigyelni a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">product-market fit</a> keresése során.</p>
                            <p>A növekedési motor nem más, mint egy válasz arra a kérdésre, hogy mi hajtja az üzletünk növekedését. A kalózmetrikákhoz hasonlóan, egy növekedési stratégiát határoz meg, hogy megértsük mitől, mikor és hogyan növekedik a startupunk.</p>
                            <p>A növekedési motor fogalmát Eric Ries használta először a The Lean Startup c. könyvében. Ő három különböző növekedési motort határozott meg:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>fizetett növekedési motor</li>
                                <li>ragadós (sticky) növekedési motor</li>
                                <li>virális növekedési motor</li>
                            </ul>
                            <table class="table has-margin-b60">
                                <tr>
                                    <th></th>
                                    <th>Fizetett motor</th>
                                    <th>Ragadós motor</th>
                                    <th>Virális motor</th>
                                </tr>
                                <tr>
                                    <th rowspan="2">Legfontosabb metrikák</th>
                                    <td>Ügyfélszerzési költség (CAC)</td>
                                    <td rowspan="2">Lemorzsolódási arány</td>
                                    <td rowspan="2">Virális együttható</td>
                                </tr>
                                <tr>
                                    <td>Vásárló életciklus érték (CLV)</td>
                                </tr>
                                <tr>
                                    <th>Fő fókusz</th>
                                    <td>Ügyfélszerzés fizetett csatornákon keresztül</td>
                                    <td>Értéknövelés a meglévő ügyfelek számára (jobb szolgáltatási színvonal, új termék funkciók, stb.)</td>
                                    <td>Olyan terméktulajdonságok fejlesztése, amelyek elősegítik a megosztást</td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Minták a növekedés gyorsítására</th>
                                    <td>CLV növelése cross-sell és upsell módszerekkel</td>
                                    <td>Lemorzsolódás lassítása rendszeres promóciós ajánlatokka</td>
                                    <td>Hálózati hatás (network effect) fokozása</td>
                                </tr>
                                <tr>
                                    <td>CAC csökkentése alternatív ügyfélszerzési csatornák tesztelésével</td>
                                    <td>Ügyfélelégedettség növelése alternatív értékajánlatok tesztelésével</td>
                                    <td>Megosztás ösztönzése jutalomrendszer segítségével</td>
                                </tr>
                            </table>
                            <h2 class="heading-2 has-margin-b30">Fizetett növekedési motor</h2>
                            <p>Két metrika létezik, ami mindennél jobban mutatja, hogy vállalkozásunk sikeres-e. Az egyik az ügyfélszerzési költség, vagyis a customer acquisition cost (CAC). A CAC az az összeg amit átlagban elköltünk egy vásárló megszerzésére.</p>
                            <p>A másik ilyen, az a vásárló életciklus érték, angolul a customer lifetime value (CLV). A CLV  az az összeg, amit átlagban elkölt egy vásárló az alatt az idő alatt amíg a vásárlónk marad. Egy üzleti modell akkor fenntartható, ha a CLV > CAC.</p>
                            <p>Amennyiben a vállalkozás a CLV és CAC között különbség jelentős részét visszaforgatja annak érdekében, hogy újabb vásárlókat szerezzen, akkor egy fizetett növekedési motort használnak.</p>
                            <p>Tegyük fel, hogy egy vasúti modelleket készítő játékműhely átlagban $0,5-t költ pay-per click hirdetésekre, hogy eladjon egy modellt. Gyártási költségek után, ezen az eladáson $5 profitot termeltek.</p>
                            <p>Egy mozdonygyár $500 000 profitért tud eladni egy darab mozdonyt. Ahhoz, hogy ezt a mozdonyt eladják, szükségük van értékesítőkre, technikai szakemberekre, konferenciákon és szakkiállításokon kell részt vegyenek, stb. Az egy mozdonyra jutó CAC $50 000.</p>
                            <p class="has-margin-b60">Mind a két vállalkozás esetében a profitból további 9 eladást tudnának létrehozni, ha a teljes megmaradt összeget értékesítésre fordítanák. Ha ezt a növekedési iramot szeretnék fokozni, akkor vagy az ügyfélszerzési költséget csökkentik, vagy a customer lifetime value-t növelik. Ez utóbbit egy extra termék vagy szolgáltatás, pld. hosszabbított garanciális periódus, tudná megvalósítani mindkét cég.</p>
                            <h2 class="heading-2 has-margin-b30">Ragadós növekedési motor</h2>
                            <p>Bár az új vásárlók megszerzése mindig kívánatos, a fizetős növekedési motorral ellentétben a ragadós motor esetében a fő fókusz az ügyfelek megtartásán lesz.</p>
                            <p>Míg egy mozdonygyár folyamatosan újabb és újabb tendereket kell megnyerjen ahhoz, hogy növekedni tudjon, egy SaaS termék, újság vagy egy egyház arra koncentrál, hogy megtartsa a felhasználóit, vásárlóit és hívőit. Így, egy kis számú új ügyfél is elegendő a növekedéshez.</p>
                            <p>A legfontosabb metrika egy olyan vállalkozás számára, amely ragadó növekedési motort alkalmaz, a lemorzsolódási arány lesz.</p>
                            <p>A lemorzsolódási arány, vagyis a churn rate, azt mutatja, hogy az egyszer megszerzett vásárlókat, milyen arányban sikerül hosszú távon megtartanunk. A ragadós növekedési motor esetében egyszerű a matek: ha a lemorzsolódás üteme lassabb mint az új ügyfelek megszerzési aránya, akkor a vállalkozásunk növekedni fog. Minél nagyobb a lemorzsolódási arány és a növekedési arány közötti különbség, annál gyorsabb lesz a növekedés.</p>
                            <p>A ragadós motort úgy a legkönnyebb megérteni, ha egy lyukas vödörre gondolunk. Ha vizet öntünk bele (– új ügyfeleket szerzünk), az elfolyik (– lemorzsolódás). Ha folyamatosan olyan sebességgel öntünk bele vizet, mint ahogy elfolyik, akkor a vízszint megmarad – nincs növekedésünk. Ha viszont elkezdjük betömni a lyukakat, elkezd a vízszint is emelkedni ​​– lesz növekedésünk.</p>
                            <p>A lemorzsolódási arányt sokféleképpen lehet csökkenteni. A legkönnyebb úgy, hogy jó minőségű terméket vagy szolgáltatást nyújtunk. Úgy, hogy különös figyelmet szentelünk a felhasználói élménynek, az onboarding folyamatnak és az ügyfélszolgálatnak.</p>
                            <p class="has-margin-b60">Vannak viszont vitatható módjai is a lemorzsolódási arány csökkentésének. Ilyen például mikor egy szolgáltató magához láncol. Emlékszel még arra, amikor a telekommunikációs szolgáltatóktól nem lehetett átvinni másikhoz a telefonszámot? Vagy a szolgáltató hálózatához lakatolt készülékekre? Hasonlóan járnak el a chipgyártók és sajnálatos módon szoftverfejlesztő cégek is, akik belekényszerítik az ügyfeleiket egy-egy technológia használatába.</p>
                            <h2 class="heading-2 has-margin-b30">Virális növekedési motor</h2>
                            <p>A virális növekedési motor esetében a marketing túlnyomó részét a felhasználók végzik el helyettünk. Célja, hogy a felhasználóink hozzanak magukkal további felhasználókat. Egy felhasználó hoz magával még kettőt. Majd ők is hoznak magukkal fejenként kettőt és így tovább. Ez exponenciális növekedéshez vezet.</p>
                            <p>A szájról szájra terjedéssel ellentétben, a virális növekedésnek az ajánlási rendszer szerves része. Nincs a felhasználóra bízva, hogy szeretné-e ajánlani a terméket, hanem ez szinte elvárás felé.</p>
                            <p>Valószínüleg mindhárom motornak van egy szájról szájra aspektusa. Azonban a virális növekedési motor esetében ez élet-halál kérdés. Szintén mindegyik motort alkalmaz valószínüleg kereső motor optimalizálást, hogy több érdeklődőt érjen el. Azonban ha egy virális motort alkalmazó csapat erre fordítja az energiája nagyrészét, az biztos út a kudarc felé.</p>
                            <p class="has-margin-b60">A virális növekedés esetében két altípust tudunk megkülönböztetni: velejáró (inherent) és mesterséges (artificial) virális növekedés.</p>
                            <h3 class="heading-3 has-margin-b30">Velejáró virális növekedés</h3>
                            <p class="has-margin-b60">A velejáró virális növekedési motor esetében a termék használatához szükséges az, hogy megosszuk másokkal. Ezzel a módszerrel leggyakrabban a közösségi oldalaknál találkozunk, hiszen ezek értelmüket vesztik, ha nincsenek regisztrálva az ismerőseid is. A Facebook, WhatsApp, Instagram, sőt még a LinkedIn is annál izgalmasabb, minél több az ismerősünk a platformon.</p>
                            <h3 class="heading-3 has-margin-b30">Mesterséges virális növekedés</h3>
                            <p>Mesterséges virális növekedési motor esetében a megosztást valamilyen jutalomrendszer ösztönzi. Ezt a módszer alkalmazta a Tupperware.</p>
                            <p>A mai napig bárki lehet Tupperware értékesítő és szervezhet Tupperware party-kat. Egy Tupperware party arra való, hogy a házigazda bemutassa a termékkínálatot az ismerőseinek. A party-n eladott termékek után a házigazda jutalékot és ingyen termékeket kapott. A termékeladáson kívül, a Tupperware party-k arra is jó alkalmak voltak, hogy a házigazda újabb értékesítőket toborozzon. Ez már akár multi level marketingnek is minősülhet. És igen… a piramisjátékok is egy mesterséges virális növekedési motort alkalmaznak.</p>
                            <figure>
                                <img src="{{ asset('media/blog/engines-of-growth-viral-factor.png') }}" alt="Hogyan befolyásolja a virális együttható a növekedést" />
                            </figure>
                            <p>Virális növekedési motor esetén egy metrika minden mást felülír. Ez pedig a virális együttható (viral coefficient). Ez az a szám, amely megmutatja, hogy átlagban hány új vásárlót hoz egy felhasználó. Egy 1,4 virális együttható azt jelenti, hogy egy felhasználó ajánlása nyomán, átlagban 1,4 másik ember válik vásárlóvá.</p>
                            <p>A mágikus szám az 1 lesz. Ha a virális együttható kisebb mint egy, akkor a növekedésünk előbb vagy utóbb leáll. Egy 0,8-as virális együttható azt jelenti, hogy 100 felhasználó előbb 180-ra, majd 244-re, 295-re nő. Ebből a számsorból is látszik, hogy a növekedés üteme lassul, majd előbb vagy utóbb le fog állni. Ha vannak köztünk olyanok akiket ámulatba ejtenek a számok, akkor nekik kiszámoltam, hogy a plafon 499 felhasználó körül van. Szívesen!</p>
                            <p class="has-margin-b60">Amennyiben a virális együttható viszont nagyobb mint 1, akkor exponenciálisan növekedik majd a termékünk. Egy 1,4-es virális együttható esetén, a 100 felhasználók száma 240-re, 436-ra, majd 710-re nő majd.</p>
                            <h2 class="heading-2 has-margin-b30">Válassz egy növekedési motort</h2>
                            <p>Működhet-e több növekedési motort egy startupon belül? Igen. Például egy virális termék esetében könnyen előfordulhat, hogy nagyon alacsony a lemorzsolódási arány is.</p>
                            <p>Azonban emlékezzünk vissza, hogy miért van szükség ezekre a keretrendszerekre? Azért, hogy mindig fókuszáltan tudjunk a növekedési stratégia egy-egy elemén javítani. Ritka az olyan csapat, aki több növekedési motor metrikát tudja egyszerre követni és még ritkább az olyan csapat, aki rendelkezik azokkal a képességekkel, hogy mondjuk egy virális és egy fizetett motort is egyszerre tudjon működtetni. Ezért érdemes egyszerre egy növekedési motorra koncentrálni.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Építsünk motort… növekedési motort!'])
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
    "datePublished": "2022-06-13T10:00:00",
    "dateModified": "2022-06-13T10:00:00",
    "description": "Mi a közös egy SaaS termékben, egy újságban és az egyházban? Az, hogy mind ugyanazt a növekedési motort használják. Tartsatok velünk, elmagyarázzuk.",
    "headline": "Építsünk motort… növekedési motort!",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-epitsunk-novekedesi-motort-en.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Növekedési motor",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Építsünk motort… növekedési motort!",
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
                "name": "Építsünk motort… növekedési motort!"
            }
        }
    ]
}
</script>
@endpush
