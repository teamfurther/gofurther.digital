@section('title', 'Hogyan mérjük a termékünk sikerességet?')
@section('description', 'Nézzük meg közelebbről azokat a különböző metrikákat amik segítenek abban, hogy felmérjük termékünk pályan van-e a siker felé.')
@section('preview_image', route('generate-cover', ['title' => 'Hogyan mérjük a termékünk sikerességet?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan mérjük a termékünk sikerességet?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-01-14 10:00:00">2022 január 14</time> &middot; 8 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Egy termék bevezetése előtt teljesen más kutató- és mérőeszközöket használunk, mint a bevezetést követően. A startupokról és lean termékfejlesztésről szóló cikksorozatunk <a href="{{ localizedRoute('blog.tags.show', ['slug' => 'startup-es-termekfejlesztes']) }}" target="_blank">eddigi részeiben</a> elsősorban a <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">validációról</a> és a <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-1-resz']) }}" target="_blank">prototípus fejlesztésről</a> esett szó. Ilyenkor még nincsenek ügyfeleink, ezért elsősorban kvalitatív kutató eszközöket alkalmaztunk annak érdekében, hogy visszajelzést kapjunk a termékünkről.</p>
                            <p>Természetesen a piacralépést követően is használhatjuk ezeket, de ilyenkor már olyan kvantitatív eszközökhöz is nyúlhatunk mint az A/B tesztelés vagy a különböző analitikák. A mai cikkben az utóbbiakat vesszük górcső alá, megmutatom hogyan használjuk őket a termékünk sikerességének mérésére és hogyan tudunk segítségükkel javítani az üzleti modellünkön.</p>
                            <figure>
                                <img src="{{ asset('media/blog/christian-rohrer-user-research-methods-en.png') }}" alt="A felhasználó kutatási eszközök osztályozása Christian Rohrer szerint" />
                                <figcaption>A felhasználó kutatási eszközök osztályozása Christian Rohrer szerint</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Analitika</h2>
                            <p>Mint a fenti ábrából is látszik, az analitikai eszközök kvantitatív, de ugyanakkor viselkedés alapú kutatási módszerek is. Tehát, valós felhasználói viselkedésen alapszanak, így nem kell amiatt izgulni, hogy a felhasználók másképp viselkednek majd, mint amit például az interjúk során mondtak.</p>
                            <p class="has-margin-b60">Ugyanakkor, mivel egy kvantitatív módszerről van szó, több felhasználó viselkedési adatait tudjuk egy könnyen elemezhető és összehasonlítható statisztikává összesíteni.</p>
                            <h3 class="heading-3 has-margin-b30">Analitikai keretrendszerek</h3>
                            <p class="has-margin-b60">Rengeteg analitikai mérőszám létezik amivel a termékünk teljesítményét mérni tudjuk. Ezeket mind megpróbálni követni és javítani lehetetlen küldetés, ezért érdemes felállítani egy keretrendszert ami egyértelművé teszi, hogy a különböző metrikák hogyan függnek össze és melyik egységre érdemes fókuszálnunk.</p>
                            <h3 class="heading-3 has-margin-b30">Kalózmetrikák</h3>
                            <p>Dave McClure, a 500 Startups befektetési alap és startup inkubátor alapítója egy 2007-es elődásában mutatta be a "Startup Metrics for Pirates" (Startup metrikák kalózoknak) keretrendszerét. Dave 5 makró-metrikát különböztetett meg, amire egy startup termék esetében oda kell figyelni:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Acquisition (megszerzés) — hogyan tájékoztatjuk a felhasználókat a termékünk létezéséről</li>
                                <li>Activation (aktiválás) — hogyan lesznek érdeklődőkből vásárlók </li>
                                <li>Retention (megtartás) — hogyan tartjuk meg a vásárlókat (vagy hogyan lesznek újból vásárlók)</li>
                                <li>Referral (ajánlás) — hogyan vesszük rá a vásárlókat, hogy más érdeklődőket ajánljanak</li>
                                <li>Revenue (jövedelem) — hogyan maximalizáljuk a vásárlóktól szerzett jövedelmet</li>
                            </ul>
                            <p>Ha összerakjuk a szavak kezdőbetűit, nyílvánvalóvá válik az is, hogy hogyan kerülnek képbe a kalózók — AARRR!</p>
                            <p>Annak függvényében, hogy hol tartunk éppen a termékünk életciklusában, az 5 makró-metrika közül az egyik mindig fontosabb lesz mint a többi. Ez lesz a fókuszmetrika. A fókuszmetrikát mindig úgy érdemes megválasztani, hogy a legnagyobb megtérülést kapjuk a befektett energiára és erőforrásra (ROI — return on investment).</p>
                            <p class="has-margin-b60">Idővel, ahogy a fókuszmetrikán javítunk, a további javítási lehetőségeknek már kisebb lesz a megtérülése és egy másik metrika már magasabb ROI-val fog kecsegetni. Egy új termék esetében van egy természetes sorrend, amiben érdemes a makró-metrikákkal foglalkozni.</p>
                            <h3 class="heading-3 has-margin-b30">Fókuszáljunk a megtartásra előszőr</h3>
                            <p>Egy új terméken dolgozva eleinte még a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-4-resz']) }}" target="_blank">product-market fit</a> elérésére koncentrálunk. Ilyenkor még nem vagyunk biztosak benne, hogy termékünk akkora értéket jelent a felhasználóink számára, hogy hajlandóak legyenek fizetni érte.</p>
                            <p>Ezért nem érdemes energiát fektetni abba, hogy még több érdeklődőt szerezzünk. Ugyanúgy, annak sincs értelme, hogy azzal töltsünk el időt, hogy az érdeklődők konverziós arányát optimalizáljuk. Ezen a ponton a megszerzésnek és aktiválásnak minimális hatása lesz az üzletünkre, hiszen nagy valószínüséggel ezeket a felhasználókat hamarosan el is vesztjük.</p>
                            <p>Helyette, koncentráljunk arra, hogy azt a kevés felhasználót, akit egyszer már megszereztünk, azt tartsuk is meg. A megtartási metrikát jól illusztrálja a <strong>lemorzsolódási arány</strong> (churn rate), ami azt mutatja, hogy a megszerzett vásárlók közül, hány százelékot vesztettünk el egy adott periódus alatt vagy a <strong>megtartási görbe</strong> (retention curve), ami tulajdonképpen a lemorzsolódási arány ellentétje.</p>
                            <p>Ahhoz, hogy ezeket kiszámoljuk, a következő mikró-metrikákra lesz szükségünk:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>új felhasználók száma egy adott idő intervallumra</li>
                                <li>azon felhasználók száma, akik egy adott idő intervallumban aktívak voltak</li>
                            </ul>
                            <figure>
                                <img src="{{ asset('media/blog/how-to-measure-the-success-of-your-startup-retention-curve.png') }}" alt="Példa egy megtartási görbére" />
                            </figure>
                            <p>A megtartási görbe vízszintes X tengelyén az eltelt időt ábrázoljuk, az Y tengelyén pedig a visszatérő felhasználók arányát, amit a fenti két mikró-metrika arányaként kapunk meg. A görbe mindig 100%-tól indul a 0. napon.</p>
                            <p>Első napon (a feliratkozás utáni napon) egy lényeges esést észlelhetünk. A fenti ábrán 100%-ról, mindössze 27%-ra esett az aktív felhasználók száma. Minél meredekebb az esés, annál gyengébb a product-market fitünk. Ugyanakkor, ez a kezdeti lemorzsolódás (initial drop-off rate) termékkategóriánként nagyban eltérhet.</p>
                            <p>A fenti görbe, egy mobilapplikáció görbéje, ahol a meredek esés természetes. A mobil felhasználók számtalan applikációt telepítenek akár naponta, amit később már sosem nyitnak meg. Az applikáció ikon elvesztődik a másik száz ikon között. Ezen a jelenségen például könnyen lehet push értesítésekkel javítani.</p>
                            <p>A megtartási görbe másik fontos aspektusa az, hogy a kezdeti lemorzsolódás után milyen mértékben csökkent az aktív felhasználók száma. Előbb vagy utóbb minden görbe ellaposodik. A fenti ábrán a végső megtartási arányunk 10%, tehát a lemorzsolódási arány, vagyis a churn rate 90%-os lesz.</p>
                            <p>Egy SaaS termék esetében a megszokott havi churn rate 3% és 8% között mozog, éves szinten ez <a href="https://www.groovehq.com/blog/saas-conversion-survey-results" target="_blank">32%-50%</a>. A kezdeti csökkenés stabilizását, illetve az azt követő csökkenés sebességét külön-külön is javíthatjuk, annak érdekében, hogy ez a lemorzsolódási arány minél kisebb legyen.</p>
                            <p>A megtartás mérésének egy fontos aspektusa az is, hogy mekkora időintervallumot mérünk. Egy olyan termék esetében, ami napi szinten használnak a felhasználók, mint pld. a Spotify, az Instagram vagy a Netflix érdemes napi granularitással mérni, mint a fenti ábrán. Egy navigációs szoftvert, már lehet csak heti granularitással érdemes mérni, hiszen nem feltétlenül minden nap kell navigáljunk vezetés közben. Egy olyan növényfelismerő applikációt mint a Plantnet viszont még ritkábban használnak a felhasználók, ilyenkor akár havi granularitással is ábrázolhatjuk a megtartási arányt.</p>
                            <p class="has-margin-b60">A megtartási arányt nem csak szoftverek, hanem akár egy fizikai vagy hardver termékek esetében is lehet értelmezni. Egyrészt egyre több hardver termék mellé társul egy digitális szolgáltatás amire elő lehet fizetni (lásd fitness órák), de tágabb értelemben kiterjeszthető a termék iránti lojalitásra is: értékes-e annyira a termék a felhasználó számára, hogy az megvásárolja a termék újabb változatát?</p>
                            <h3 class="heading-3 has-margin-b30">Konverzió a megszerzés előtt</h3>
                            <p>Miután elértünk egy egészséges megtartási arányt, biztosak lehetünk abban, hogy ha egy ügyfélet megszerzünk és használja a terméket, akkor ő hosszú távon is velünk marad.</p>
                            <p>Azt gondolhatnánk, hogy akkor itt az ideje, hogy azzal foglalkozzunk, hogy minél több felhasználóhoz eljuttassuk a termékünket. Csakhogy ezekből a felhasználókból nem fog ügyfél válni, ha rossz a konverziós arányunk. Sőt, őket később is nagyon nehéz lesz ismét megszólítani.</p>
                            <p>Ezért, a következő fókuszmetrikánk az aktiválás, vagyis a konverziós arány javítása lesz. Ha a konverziós arányra fókuszálunk most, akkor sokkal jobb megterülést tudunk elérni majd amikor majd az akvizicióval foglalkozunk később.</p>
                            <p>Ha a terméket PPC hirdetéseken és landing oldalakon keresztül értékesítjük, akkor futtathatunk A/B vagy többváltozós teszteket (multivariate testing). Egy ilyen teszt esetében, ugyanannak a landing oldalnak vagy hirdetésnek kettő vagy több variánsát egyenlő arányban mutatjuk meg felhasználóknak. Ezek a variánsok különbözhetnek szövegben, designban, elrendezésben is. Amelyik teszt jobb konverziós eredményeket produkál, azzal érdemes foglalkozni és tovább finomítani.</p>
                            <p>Egy SaaS termék esetében egy jó konverziós arány 3% körül mozog, de természetesen ez nagyban függ a terméktől és az árazástól is.</p>
                            <p>Az olyan szoftverek, amik bankkártya adatok megadása nélküli próbaidőt nyújtanak 8-10%-os azoknak a felhasználóknak az aránya akikből fizető vásárló lesz, míg ha meg kell adni a kártya adatokat, akkor 25%-al érdemes számolni. Egy freemium modell esetében ez lehet 4% (Dropbox) vagy 30% (Slack).</p>
                            <p class="has-margin-b60">Ehhez hozzájön még az, hogy az érdeklődők 8-10%-ból lesz próbaidős vagy freemium felhasználó. Tehát az összkonverziós arány itt is 1-3% lesz.</p>
                            <h3 class="heading-3 has-margin-b30">Megszerzés optimalizálás</h3>
                            <p>Ha már optimalizáltuk a megtartást és az aktiválást, akkor foglalkozhatunk a megszerzéssel. Ilyenkor megpróbálunk új és jobb módszereket találni arra, hogy érdeklődőket szerezzünk.</p>
                            <p>A konverziós aránnyal karöltve, egy érdeklődő megszerzésének a költsége adja ki az egyik legfontosabb startup mikró-metrikát, az ügyfélszerzési költséget (CAC — customer aquisition cost). Ha 1000 landing oldal megtekintés 100 EUR-ba kerül, és 2,5%-os a konverziós arányunk, akkor egy ügyfél megszerzése CAC = 4 EUR-ba kerül.</p>
                            <p class="has-margin-b60">A fenti példánál maradva, a megszerzés optimalizása során arra kell törekednünk, hogy a megtekintési költséget (CPM — cost per 1000 impressions) csökkentsük. Egy megtekintés sokféle forrásból jöhet: hírlevelek, pay-per click hírdetések, ingyenes webináriumok, konferencia előadások, PR cikkek, stb. A CPM értéket úgy kapjuk meg, ha kiszámoljuk hány megtekintést hoznak egy adot periódusra összesen a különböző értékesítési tölcséreink, majd ezzel az értékkel osszuk el az értékesítési tölcsérek felépítésének összeköltségét. A kapott értéket szorozzuk meg 1000-el.</p>
                            <h2 class="heading-2 has-margin-b30">Kohorszok</h2>
                            <p class="has-margin-b60">Egy rövid kitérőt tennék még és megemlíteném a kohorszvizsgálatokat. Egy kohorsz a felhasználók azon részhalmaza, amelyeket egy közös karakterisztika köré csoportosítunk. Ez lehet például földrajzi lokáció szerinti csoportosítás, vagy azon periódus szerinti csoportosítás, amelyikben egy mobilapplikációt telepítettek.</p>
                            <h3 class="heading-3 has-margin-b30">Miért fontosak a kohorszok?</h3>
                            <p>A kohorszok arra valóak, hogy könnyebben össze tudjunk adatokat hasonlítani. Ha egy felhasználó több héttel egy másik után telepíti ugyanaz a applikációt, máris másképp fog hozza viszonyulni, hiszen elejétől fogva tudja használni az azóta lefejlesztett funkciókat.</p>
                            <figure>
                                <img src="{{ asset('media/blog/how-to-measure-the-success-of-your-startup-retention-curve-cohorts.png') }}" alt="Példa egy megtartási görbére kohorszokkal" />
                            </figure>
                            <p>A fenti ábrán 2 kohorsz megtartási görbéjét látjuk. Az A kohorsz kezdeti lemorzsolódása a legkisebb, de a megtartási arány csökkenési sebessége a legnagyobb. A B kohorsz esetében nagyobb a kezdeti lemorzsolódási arány, de lassabb a megtartási arány csökkenési sebessége.</p>
                            <p>Mivel a B kohorsz végső megtartási aránya magasabb, hosszabb távon magasabb jövedelmet fog generálni.</p>
                            <p class="has-margin-b60">A kohorszvizsgálat a párhuzamosan futtatott optimalizások és marketing kampányok által okozott zűrzavart enyhíti.</p>
                            <h2 class="heading-2 has-margin-b30">Utószó</h2>
                            <p>Ez elmúlt 8 cikkben részletesen kielemeztük a termékfejlesztés lépéseit, a rendelkezésünkre álló validációs eszközöket, prototípusokat és mérőszámokat. Mikromobilitási eszközünk példáján keresztül szemléltettük is a folyamatot. A következőkben, esettanulmányok segítségével, különböző típusú termékek fejlesztését mutatom majd be gyakorlatiasan. Tartsatok velem!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan mérjük a termékünk sikerességet?'])
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
    "datePublished": "2022-01-14T10:00:00",
    "dateModified": "2022-01-14T10:00:00",
    "description": "Nézzük meg közelebbről azokat a különböző metrikákat amik segítenek abban, hogy felmérjük termékünk pályan van-e a siker felé.",
    "headline": "Hogyan mérjük a termékünk sikerességet?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-how-to-measure-the-success-of-your-startup-en.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, Analitika, Metrika",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan mérjük a termékünk sikerességet?",
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
                "name": "Hogyan mérjük a termékünk sikerességet?"
            }
        }
    ]
}
</script>
@endpush
