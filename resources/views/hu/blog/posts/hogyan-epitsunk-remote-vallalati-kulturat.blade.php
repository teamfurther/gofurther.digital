@section('title', 'Remote vállalati kultúra, 3 rész: Hogyan építsünk remote vállalati kultúrát?')
@section('description', 'Miért olyan fontos a jó vállalati kultúra és hogyan alakíthatod ki ezt egy remote vállalat keretein belül?')
@section('preview_image', asset('media/blog/cover-remote-corporate-culture-3-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-remote-corporate-culture-3-hu.png') }}" srcset="{{ asset('media/blog/featured-remote-corporate-culture-3-768w-hu.png') }} 768w, {{ asset('media/blog/featured-remote-corporate-culture-3-1000w-hu.png') }} 1000w" sizes="100vw" alt="Hogyan építsünk remote vállalati kultúrát" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan építsünk remote vállalati kultúrát</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-12-28 12:00:00">2019 december 28</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Ez a Remote vállalati kultúra sorozatunk második része. Ha egy bizonyos cikket keresel a sorozatból, akkor itt megtalálod a linkeket:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">1. rész – Mi az a remote csapat (és miért imádjuk a Furthernél)?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}">2. rész – Hogyan vegyünk fel új remote csapattagot?</a></li>
                                <li><strong>3. rész – Hogyan építsünk remote vállalati kultúrát?</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk']) }}">4. rész – Hogyan motiváljuk magunkat, ha távmunkában dolgozunk?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mukodhet-e-sikeres-tavkapcsolat-ceges-kornyezetben']) }}">5. rész – Működhet-e sikeres távkapcsolat egy céges környezetben?</a></li>
                            </ul>
                            <p>A céges kultúra sokkal többet jelent, mint egy pár csocsó asztal az irodában. A céges kultúra jelenti azt, hogy hogyan dolgozunk, ahogy az ügyfelekkel kommunikálunk, de azt is ahogy egymással kapcsolódunk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-3-communication.jpg') }}" alt="A jó kommunikáció a siker kulcsa" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Kommunikáció</h2>
                            <p><a href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">Egy remote csapatban</a> kiemelten fontos, hogy ezekről a témákról nyíltan és hatékonyan kommunikáljunk. Enélkül minden könnyen széteshet.</p>
                            <p>Ahhoz, hogy a céges kultúráról párbeszéd alakuljon ki a csapaton belül, fontos, hogy a kollégák ne féljenek kifejezni a véleményüket. Cégvezetőként a te felelősséged, hogy mindenkinek legyen hangja és mindenki nyugodtan elmondhassa véleményét és ötleteit.</p>
                            <p>Ha elérted, hogy egy nyílt környezet alakuljon ki a cégedben, a következő fontos lépés az, hogy ezekről a témákról rendszeresen beszélgessetek. Beszéljétek meg, hogyan dolgoztok csapatként, milyen közös értékeket képviseltek, mik az elvárásaitok és félelmeitek, illetve azt, hogy mit kell egyénileg megtennetek annak érdekében, hogy közösen sikeresek legyetek.</p>
                            <p>Használjatok ki minden alkalmat, személyes találkozást, hogy erről beszélgessetek. Ha erre nincs lehetőség, akkor jelöljetek ki olyan időpontokat, amikor online tudtok beszélni. Mi például erre szoktuk használni a péntek délutánokat.</p>
                            <p>Természetesen a személyes beszélgetések sokkal hatékonyabbak lennének. A virtuális megbeszélésekből hiányzik a non-verbális aspektus, ezért nehezebb megfejteni őket. A Furthernél ezért minden egyes csoportos hívás egyben videóhívás is, ezzel is segítve a kommunikációt.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-3-alari-aho-toggl-quote-hu.png') }}" alt="A céges kultúrán aktívan dolgozni kell. Ez egy folyamatos törekvés és nem szabad engedni, hogy önszerveződővé váljon. Fontos, hogy a csapat folyamatosan kommunikáljon a tervekről, sikerekrőI, de a problémákról is." />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Tudásmegosztás</h2>
                            <h3 class="heading-4 has-margin-b15">Írjatok le mindent!</h3>
                            <p class="has-margin-b30">Irodai környezetben könnyű megosztani mindenkivel azt a bizonyos Heuréka! pillanatot. De távmunkában ezt sokkal könnyebb csak magunknak megtartani. Hogy semmilyen információ ne vesszen el, arra bíztatjuk a csapatot, hogy mindig mindent írjanak le, amit meg szeretnének megosztani. Ez általában egy erre a célra létrehozott <a href="https://slack.com" target="_blank">Slack</a> channelben tesszük meg. Ezeket egy későbbi hívás vagy workshop keretén belül elővesszük és megtárgyaljuk.</p>
                            <h3 class="heading-4 has-margin-b15">Tartsatok workshopokat!</h3>
                            <p class="has-margin-b30">Gyakran tartunk workshopokat, melyek keretén belül csapatként kiválasztunk 1-1 témát és arról beszélgetünk. A fejlesztői csapat például rendszeresen tart ú.n. dev-hours műhelyeket, amikor az egyik kolléga bemutat valami újat, amin nemrég dolgozott. Lehet ez egy új technológia vagy egy hasznos eszköz amivel nemrég ismerkedett meg.</p>
                            <h3 class="heading-4 has-margin-b15">Legyen egy közös tudástáratok!</h3>
                            <p class="has-margin-b30">Van egy céges wiki oldalunk is, ami egy amolyan tudástár, amiben minden fontos információ benne van: melyek a céges értékeink, milyen eszközöket használunk nap mint nap vagy hogyan működik a projektmenedzsment.</p>
                            <h3 class="heading-4 has-margin-b15">Nem minden a munkáról szól</h3>
                            <p>Nem csak a céges dolgok megosztása fontos. Egy irodában minden cégen kívüli információ megosztása a konyhában vagy a vízhűtő mellett történik. Éppen ezért nálunk is egy #watercooler nevű Slack channel szolgál arra, hogy megosszunk valami vicceset vagy csak kiengedjük a gőzt. Bíztatjuk a csapatot, hogy írjanak élménybeszámolót a vakációjukról vagy az utolsó filmről, amit láttak.</p>
                            <p>A Slackben az a vagány, hogy chatbotokat is létre lehet benne hozni. Mi készítettünk egy olyan chatbotot, ami naponta feltesz nekünk 1-1 kérdést, ami segít abban, hogy többet megtudjunk egymásról. Ezek egyszerű, röviden megválaszolható kérdések, mint például az, hogy mi a kedvenc fagylaltod? Vagy melyik volt a legjobb koncert, amin valaha voltál?</p>
                            <p class="has-margin-b30">Apropó koncert. Van egy közös Spotify playlistünk is, ha valaki esetleg a másik zenéjét szeretné hallgatni (bár ez inkább a távmunka egyik előnye, hogy nem kell más zenéjét hallgatni :p).</p>
                            <h3 class="heading-4 has-margin-b15">Stand-up meetingek</h3>
                            <p>A Stand-up meetingek kiemelten fontosak. Az IT-ben mára már bevett szokás, de bármilyen területen alkalmazható. Hallottunk már stand-up meetingekről pénzügyi környezetben és termelési vállalatoknál is.</p>
                            <p class="has-margin-b30">Minden reggel tartunk ilyen stand-up meetingeket, melyek lehetőséget adnak számunkra, hogy megosszuk min dolgozunk éppen és segítséget kérjünk, ha valahol elakadtunk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-3-self-discipline.jpg') }}" alt="A fegyelem elengedhetetlen a céljaid elérésében" />
                            </figure>
                            <h2 class="heading-2 has-margin-b60">Fegyelem</h2>
                            <p>Távmunkában dolgozni különleges önfegyelemre van szükség. Cégvezetőként a legfontosabb dolog, amit tehetsz, hogy világossá teszed a csapatod számára, hogy milyen felelőséggel bírnak, hogyan befolyásolja a munkájuk a cég hosszútávú stratégiáját és mások munkáját.</p>
                            <p class="has-margin-b30">Ha valamit elrontanak, részletesen magyarázd el nekik, hol és mit rontottak el, illetve hogyan tudják ezt a jövőben elkerülni. Ha egy munkát pedig jól végeznek el, akkor nyílvánosan dícsérd meg őket.</p>
                            <h3 class="heading-4 has-margin-b15">Szervezettség</h3>
                            <p>A mai világban könnyű szervezettnek maradni. Mindenre van egy app vagy eszköz. Mint már említettük, mi Slack-et használunk kommunikációra, Google Drive-ot dokumentumkezelésre és Productive.io-t projektmenedzsmentre.</p>
                            <p class="has-margin-b30">Emellett külön figyelmet szentelünk arra is, hogy ne csak a cég legyen szervezett, hanem minden egyes csapattag munkája is. Nemrég bevezettük, hogy pénteken nap végén mindenki előre megtervezi a következő heti munkáját. Mondanunk sem kell, drasztikusan növekedett a hatékonyságunk.</p>
                            <h3 class="heading-4 has-margin-b15">Figyelem megzavarás</h3>
                            <p>Az iroda egyik legnagyobb hátránya, hogy folyamatosan körül vagyunk véve zavaró tényezőkkel. De ez a távmunkára is érvényes lehet, főleg ha a kollégánk otthonról dolgozik és családja van. Megpróbálhat bezárkózni egy szobába és onnan nyugodtan dolgozni, de ez <a href="https://www.youtube.com/watch?v=Mh4f9AYRCZY" target="_blank">nem mindig járható út.</a></p>
                            <p class="has-margin-b30">Van, amikor könnyebb egyszerűen környezetet váltani. Mi a Furthernél megpróbáljuk azzal segíteni a csapatot, hogy szükség esetén fizetünk nekik egy asztalt egy coworking irodában.</p>
                            <h3 class="heading-4 has-margin-b15">Motiváció</h3>
                            <p>Másszunk ki a pizsamánkból, amikor dolgozunk! Sőt, alakítsunk ki egy reggeli rutint, pont úgy, mint ha munkába mennénk.</p>
                            <p>Ha otthonról dolgozunk, fontos, hogy legyen egy külön dolgozó helyiségünk. Ez mentálisan is segít elválasztani a munkát és az otthont, a családot. Csábító lehet a kanapéról dolgozni (ebbe a csapdába magam is beleesek sokszor), de az agyunk ezt inkább a relaxációval azonosítja, így nem leszünk hatékonyak.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-3-trust.jpg') }}" alt="A kölcsönös bizalomra épülő munkahelyi légkörben mindenki szívesebben dolgozik" />
                            </figure>
                            <h2 class="heading-2 has-margin-b60">Bizalom</h2>
                            <h3 class="heading-4 has-margin-b15">Elengedés</h3>
                            <p>Remote környezetben a bizalom rendkívül fontos. Sok időt fektettél abba, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}">önálló munkára képes embereket alkalmazzál</a>, ezért a legrosszabb dolog, amit tehetsz, hogy minden részletét felügyelni próbálod a munkájuknak.</p>
                            <p class="has-margin-b30">Ahelyett, hogy ellenőrzöd minden lépésüket, szánj inkább időt arra, hogy megadd nekik a megfelelő struktúrát és kommunikációs eszközöket a munkájuk elvégzéséhez.</p>
                            <h3 class="heading-4 has-margin-b15">Munkaidő</h3>
                            <p>Az egyik leggyakrabban felmerülő félelem a távmunkával szemben az, hogy mi van, ha a kollégák nem töltik ki a munkaidejüket. A Furthernél csak azért mérjük az időt, amit ledolgozunk, mert annak alapján készülnek majd el a riportok az ügyfeleknek.</p>
                            <p>Addig ameddig egy kolléga jó minőségű munkát végez, nincs kihatással mások munkájára és nem kési le a határidőket, addig számunkra nem érdekes, hogy hány órát tölt el munkával egy nap alatt. Persze ahhoz, hogy ez működjön, meg kell találni azokat a releváns indikátorokat, amelyekkel mérni tudod a csapatod hatékonyságát.</p>
                            <p class="has-margin-b30">Ha biztosítod azt a szabadságot és flexibilitást a csapatodnak, hogy bármivel foglalkozhassanak, amit az élethelyzetük megkíván, de közben megbízol bennük és feljogosítod őket arra, hogy időben és jól végezzék a munkájukat, az hosszú távon növeli a lelkesedésüket és lojalitásukat a cégünk iránt.</p>
                            <h3 class="heading-4 has-margin-b15">1-on-1 beszélgetések</h3>
                            <p>Remote csapatok esetében sokat beszélnek a transzparenciáról, de véleményünk szerint ez az átláthatóság ugyanolyan fontos irodai környezetben is. A transzparencia annyit jelent, hogy a kollégák közt bármikor bármit nyíltan meg lehessen beszélni: a cég jelenlegi helyzetét, a vállalati stratégiát vagy a személyes aggályokat.</p>
                            <p>Fontos, hogy ezekre a beszélgetésekre ne csak akkor kerüljön sor, amikor egy probléma előjön, hanem legyen rendszeres minden egyes kollégával. Ilyenkor próbálj meg minél több visszajelzést kapni és nyitottan hozzáállni a javaslataikhoz.</p>
                            <p>Amikor ők kérnek tőled visszajelzést, mindig legyél maximálisan őszinte, még akkor is, ha az igazság néha fáj. A véleményedet mindig támaszd alá tényekkel is! Készülj fel javaslatokkal, hogy miként tudnak fejlődni és bátorítsd őket, hogy tegyék meg a megfelelő lépéseket!</p>
                            <p class="has-margin-b30">Ne feledd mindig kiemelni a pozitívumokat is, amennyiben lehetséges, használd a kritika szendvicset: egy pozitívum – 1 negatívum – 1 pozitívum.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-3-teambuilding.jpg') }}" alt="A kölcsönös bizalomra épülő munkahelyi légkörben mindenki szívesebben dolgozik" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Csapatépítők</h2>
                            <p>Bármennyire érett is a vállalati kultúra egy remote cégben, a személyes kapcsolatokra akkor is szükség lesz. A csapatépítők során teljesen új kapcsolódási pontok és interakciók alakulnak ki a csapaton belül, amit később át lehet ültetni a virtuális kommunikációba.</p>
                            <p>A csapatépítőkön sokat megtudhattok egymásról, a szenvedélyeitekről és egymás mozgató rugóitokról. Ezért ragadjátok meg az alkalmat, hogy minél gyakrabban találkozzatok személyesen is! A csapatépítőkön kívül jó alkalom lehet személyes találkozásokra az is, ha közösen eljártok konferenciákra vagy meetupokra.</p>
                            <div class="has-text-centered has-margin-t60">
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}" class="btn is-pearl has-margin-b15">« 2. rész – Hogyan vegyünk fel új remote csapattagot?</a>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk']) }}" class="btn is-pearl has-margin-b15">4. rész – Hogyan motiváljuk magunkat, ha távmunkában dolgozunk? &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan építsünk remote vállalati kultúrát'])
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
    "datePublished": "2019-12-28T12:00:00",
    "dateModified": "2019-12-28T12:00:00",
    "description": "Miért olyan fontos a jó vállalati kultúra és hogyan alakíthatod ki ezt egy remote vállalat keretein belül?",
    "headline": "Remote vállalati kultúra, 3 rész: Hogyan építsünk remote vállalati kultúrát?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-remote-corporate-culture-3-hu.png') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "Csapat, Remote csapat, Remote team, Távmunka, Távoli csapat, Kommunikáció, Céges távkapcsolat, Videóhívás, Team building, Csapatépítés, Munkavállaló, Motiváció, Remote vállalati kultúra",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Remote vállalati kultúra, 3 rész: Hogyan építsünk remote vállalati kultúrát?",
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
                "name": "Remote vállalati kultúra, 3 rész: Hogyan építsünk remote vállalati kultúrát?"
            }
        }
    ]
}
</script>
@endpush
