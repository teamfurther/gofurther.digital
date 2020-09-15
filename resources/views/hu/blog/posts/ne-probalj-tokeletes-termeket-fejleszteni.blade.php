@section('title', 'Ne próbálj tökéletes terméket építeni!')
@section('description', 'Nemrég volt egy olyan tapasztalatom, ami ismét rávilágított az ötlet validáció fontosságára. Ma ezt a történetet mesélem el.')
@section('preview_image', asset('media/blog/cover-dont-try-to-build-the-perfect-product-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-dont-try-to-build-the-perfect-product.png') }}" srcset="{{ asset('media/blog/featured-dont-try-to-build-the-perfect-product-768w.png') }} 768w, {{ asset('media/blog/featured-dont-try-to-build-the-perfect-product-1000w.png') }} 1000w" sizes="100vw" alt="Ne próbálj tökéletes terméket építeni!" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Ne próbálj tökéletes terméket építeni!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-07-14 12:00:00">2020 július 14</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Ne próbálj tökéletes terméket építeni – gyakran szoktam ezt a tanácsot adni az új ügyfeleinknek. Bátran dobjál piacra egy olyan terméket amiben vannak még hibák és főként ne izgulj amiatt ha csak egy 1-2 funkció került bele. Mielőtt meglincselnétek, hallgassatok végig.</p>
                            <p>Nemrég ebédeltem egy ismerőssel, nevezzük a történet kedvéért Hubának. Huba azért hívott meg ebédelni, mert volt egy nagyszerű termékötlete és segítségemet kérte a megvalósításban. Egy digitális ajándékról volt szó, ami nagyon egyedi és örökké megmarad kellemes emlékként. Ő oda volt az ötletért, a feleségének könnybe lábadt a szeme amikor egy ilyennel ajándékozták meg és őszintén bevallom, hogy nekem is kimondottan tetszett az ötlet.</p>
                            <p>Ilyen ötletei nem mindennap vannak Hubának, ezért nagy elánnal beleásta magát a megvalósításba. Tartalomgyártás, szoftverfejlesztés, marketingterv, a teljes csomag. Csak azt nem értette, hogy én miért nem lelkesedek annyira, hogy máris belevágjunk? Hiszen ő több havi fejlesztési munkát hozna a csapatunknak!</p>
                            <p>– Nincs rá kapacitásunk? – Éppen akad. – Nem tudjuk megvalósítani? – Dehogynem. – Mégsem tetszik az ötlet? – De igen. – Hát akkor?</p>
                            <p>Megkértem Hubát, hogy írja le, hogy fog pénzt termelni neki a projekt. – Mi sem egyszerűbb: havonta minimum 100.000 vásárló, aki termékenként $1-t fizet majd.</p>
                            <p>– Rendben. Mire alapozzuk ezeket a számokat? – Hát ennyi embert simán el tudunk social mediában érni. Aztán az ajándékozottaknak majd annyira tetszik nekik a termék, hogy ők is tovább ajándékoznak másoknak.</p>
                            <p>Folytathattam volna az interrogációt, de ezen a ponton úgy éreztem elég munícióm van.</p>
                            <p class="has-margin-b60">– Figyelj Huba, nézzük meg, hogy az eddigi beszélgetésünkből miket feltételezünk a vevőkről:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>hogy biztos tetszik nekik a termék (– De hisz 3-ból 3 embernek tetszik már! – Nem számít, lehet mi vagyunk furcsák. Én magamról tudom biztosan…);</li>
                                <li>hogy hajlandóak érte $1-t fizetni (– Egyáltalán honnan jött az $1? – Az semmi, annyit biztos bárki fizetne! – Honnan tudod többet nem fizetnének? – Hát uhm…);</li>
                                <li>hogy havi 100 000 biztos vevőt el tudunk érni;</li>
                                <li>hogy nem csak szezonális termék lesz;</li>
                                <li>hogy tetszik-e annyira a termék az embereknek, hogy tovább ajándékozzák;</li>
                                <li>hogy lesznek visszatérő vevőink.</li>
                            </ul>
                            <p>– Honnan tudjuk, hogy ezek a feltételezéseink mind igazak? – Ezért kell tökéletes legyen a termék, hogy 100% biztos tetsszen nekik.</p>
                            <p>Ezen a ponton azt javasoltam Hubának, hogy fogja meg azt az 1 darab kész terméket amit a feleségének készített és mutassa meg minél több embernek. Készítsen róla egy bemutató videót és indítson arra egy kampányt. Nézze meg, hogy hányan kérdezik meg, hogy hol tudnak ilyet készíteni. Kérdezze meg, hogy mennyit volnának hajlandóak érte fizetni? Hányszor és hány ismerősüknek vásárolnának ilyen terméket egy évben?</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-death-star.jpg') }}" alt="Nem kell feltétlenül a tökéletességre törekedni." />
                                <figcaption>Huba egyből a Csillagrombolót akarta megépíteni. Ne legyél olyan mint Huba!</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Validált tanulás: egy nem hagyományos termékfejlesztési módszer</h2>
                            <p>Huba nehezen tudta feldolgozni ezt. Ez a gondolkodásmód teljesen ellentmond a hagyományos termékfejlesztési módszereknek. Egyszerűen elképzelhetetlennek tartják, hogy egy új termék ne legyen az utolsó részletig kidolgozva (Big Bang delivery). Vagy, hogy ne legyen átfogó piackutatásunk és egy biztos piacra lépési stratégiánk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-eric-ries-quote-hu.png') }}" alt="Hagyományosan, ennek a megléte egy jó indikátor arra, hogy egy projekt sikeres lesz-e vagy sem. Nagy a kísértés, hogy ugyanezeket a módszereket alkalmazzuk start-up projektek esetén is, azonban ez nem fog működni, mert egy start-up esetében túl sok a bizonytalan tényező. Egy start-up nem tudja még kik a vevői vagy, hogy hogyan fog kinézni a végső termék. — The Lean Startup, Eric Ries 2011" />
                            </figure>
                            <p>Megkérdezhetjük viszont, hogy akkor mi történik a sok energiával és pénzzel ami a termék fejlesztésébe fektetünk, ha a vevőktől negatív visszajelzéseket kapunk, mert nem tökéletes a termék? Szerintem ez egy jogos felvetés.</p>
                            <p>De mi történik akkor, ha ennél sokszorosan több energiát és pénzt fektetünk egy olyan termék fejlesztésébe, amiről később kiderül, hogy nem kell senkinek?</p>
                            <p>Ha egy tökéletes termékre törekszünk, akkor nagy valószínűséggel nem fogjuk tudni, hogy melyik feltételezésünk volt hamis, ezért a termék valószínüleg teljes újratervezésra szorul. Ha kis lépésekben, minimális erőforrás ráfordítással teszteljük a feltételezéseinket, akkor lehetőségünk lesz tanulni a felhasználói visszajelzések alapján és ezek alapján továbbfejleszteni a termékünket. Ez nevezzük validált tanulásnak.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-infographic-hu.png') }}" alt="Ne próbálj tökéletes terméket építeni - Infografika" />
                                <figcaption>A validált tanulást az Építs-Mérj-Tanulj ciklus segítségével tudjuk megvalósítani</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Építs. Mérj. Tanulj!</h2>
                            <p>Mint láttuk, a validált tanulásra azért van szükség, hogy a bizonytalan tényezőket eloszlassunk és ezáltal csökkentsük egy start-up projektben jelenlévő, természeténél fogva adott kockázatokat. A validált tanulást gyakorlatban pedig az Építs-Mérj-Tanulj visszacsatolási ciklus segítségével lehet elérni.</p>
                            <p>Az Építs-Mérj-Tanulj ciklus segít abban, hogy a különböző feltételezéseinkre választ kapjunk. Bár egy termék életciklusában a feltételezések megválaszolásával más-más központi kérdésekre keressük a megoldást, egy dolog biztosan kijelenthető: a legfontosabb feladatunk, hogy minél rövidebb idő alatt új, beépíthető tudást szerezzünk.</p>
                            <p>Ezt pedig úgy tudjuk elérni, hogy minden feltételezés validálására kísérleteket dolgozunk ki. Különböző feltételezéseket, különböző módon lehet validálni, leggyakrabban egy ú.n. MVP (minimum viable product) segítségével.</p>
                            <p>Az MVP egy olyan termék vagy kísérlet amit minimális erőfeszítéssel (szoftver esetében fejlesztéssel) létre tudunk hozni. Egyetlen célja, hogy a feltételezéseinket le tudjuk tesztelni, azaz validálni. Éppen ezért sokszor olyan funkciók és hiányoznak belőle, amiket elengedhetetlennek tartunk a termék sikeressége szempontjából.</p>
                            <p>Az MVP létrehozása lesz az Építs szakaszunk az Építs-Mérj-Tanulj ciklusban.</p>
                            <p>Nem elég, sőt óriási hiba, ha egy MVP-t csak belső használatra, azaz saját magunk megnyugtatására fejlesztünk. Nem elég, ha csak mi magunk, szűk körben úgy látjuk, hogy igen, ez működőképes és alátámasztja a feltételezéseinket.</p>
                            <p>Az MVP célja, hogy minél hamarabb be tudjuk mutatni a potenciális vásárlóinknak, figyeljük meg a reakciójukat, kapjunk visszacsatolást és mindezt támasszuk alá releváns mérőszámokkal.</p>
                            <p>Ez lesz a Mérj szakaszunk az Építs-Mérj-Tanulj ciklusban, amit rögtön követ a Tanulj szakasz.</p>
                            <p>A visszacsatolás birtokában nézzük meg, melyik feltételezéseink bizonyultak igaznak. Döntsük el, hogy a termékfejlesztésnek ebben a fázisában közelebb állunk-e a kitűzött céljainkhoz. Ha igen, állítsunk fel újabb feltételezéseket, finomhangoljuk a meglévő MVP vagy dolgozzunk ki újabb kísérleteket és kezdjük előlről az Építs-Mérj-Tanulj ciklust.</p>
                            <p>Ha nem, akkor bekövetkezik az ú.n. pivot, vagyis új stratégiát kell kidolgoznunk a célok megvalósításának érdekében.</p>
                            <p>Bár a ciklust Építs-Mérj-Tanulj ciklusnak nevezzük, mivel az aktivitások ebben a sorrendben történnek, a valóságban ezt pont fordítva kell megterveznünk: definiáljuk, hogy mit kell megtanuljunk (feltételezések), gondoljuk végig, hogy milyen mérőszámokra van szükségünk, hogy alátámasszuk ezeket a feltételezéseket, majd találjuk ki, hogy milyen MVP-t kell építsünk, hogy lefusson a kísérlet és megszerezzük a megfelelő mérőszámokat.</p>
                            <figure>
                                <img src="{{ asset('media/blog/dont-try-to-build-the-perfect-product-making-sense-of-mvp-hu.png') }}" alt="Tanácsos megfontolni egy MVP projektet, mert ez lehetőséget ad arra, hogy kipróbáltasd a termékedet a valós piacon lévő tényleges felhasználókkal." />
                                <figcaption>Építsünk MVP-t, hogy validáljuk hogyan juthatunk el A-ból B-be</figcaption>
                            </figure>
                            <p>Huba esete azért nagyon egyszerű, mert a kezében volt már egy termék, amit a feleségének készített és amivel le tudja tesztelni az alapfeltételezéseit. Például azt, hogy az embereknek tetszik-e a termék, tényleg hajlandóak-e fizetni érte és tulajdonképpen mennyit hajlandóak fizetni.</p>
                            <p>Ha pozitívak a visszajelzések, akkor nagyszerű, Huba továbbléphet és elölről kezdheti a Építs-Mérj-Tanulj ciklust. Mostmár elkezdhetne mondjuk másoknak is eladni a digitális ajándékokból.</p>
                            <p>Ebben a fázisban még nem szükséges előre legyártania az összes tartalmat és szoftveresen automatizálnia a folyamatokat ahhoz, hogy minden esetet lefedjen. Elég volna, ha az elején minden rendeléshez külön legyártja a tartalmat és manuálisan összeállítja a terméket.</p>
                            <p>Ezzel viszont már kicsiben teszteli azt a feltételezést, hogy lesz-e elég vásárló és mennyi ezek közül a visszatérő vásárló. Továbbá visszajelzést kap arról, hogy mit változtatnának a vevők a terméken, amit Huba később majd figyelembe vesz a tartalom gyártásánál. Ha a tartalmakat mint előre legyártotta volna, akkor nem lenne erre lehetősége.</p>
                            <h2 class="heading-2 has-margin-b30">De mi lett végül Hubával?</h2>
                            <p>Sajnos Huba úgy döntött, hogy belevág a tökéletes termék fejlesztésébe. Szeretném ezt betudni annak, hogy Huba olyan iparágban edződött, ahol bevett szokás a Big Bang delivery, de könnyen meglehet, hogy nekem kell az érvelési technikámon javítanom. Idővel mindenesetre eldől majd, hogy mi lesz a projekt sorsa.</p>
                            <p>A tapasztalatunk az, hogy legtöbb start-up projekt elbukik azon, hogy az ötletgazda szerelmes lesz a projektjébe és mindenképpen egy tökéletes, szemet kápráztató terméket akar piacra dobni. Legtöbb sikeres start-up ötletgazda már 1-2 ilyen projektet elbukott és tanult a hibájából.</p>
                            <p>Ők is, mint Huba, egyből a Csillagrombolót akarták megépíteni. Te ne legyél olyan mint Huba!</p>

                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Ne próbálj tökéletes terméket építeni!'])
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

    @include(getLang() . '.banners.projects')
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
    "datePublished": "2020-07-14T12:00:00",
    "dateModified": "2020-07-14T12:00:00",
    "description": "Nemrég volt egy olyan tapasztalatom, ami ismét rávilágított az ötlet validáció fontosságára. Ma ezt a történetet mesélem el.",
    "headline": "Ne próbálj tökéletes terméket építeni!",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-dont-try-to-build-the-perfect-product-hu.png') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "MVP, Minimum Viable Product, Start-up, ",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Ne próbálj tökéletes terméket építeni!",
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
                "name": "Ne próbálj tökéletes terméket építeni!"
            }
        }
    ]
}
</script>
@endpush
