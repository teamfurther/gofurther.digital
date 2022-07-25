@section('title', 'Hogyan vegyünk fel új remote csapattagot?')
@section('description', 'Ebben a cikkben megmutatjuk, hogyan tanácsos új remote csapattagot alkalmazni és melyek azok a lépések, amellyel segíthetjük a beilleszkedésüket.')
@section('preview_image', route('generate-cover', ['title' => 'Hogyan vegyünk fel új remote csapattagot?']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan vegyünk fel új remote csapattagot?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-12-12 12:00:00">2019 december 12</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Olvasd el a remote vállalati kultúráról szóló sorozatunk többi részét is:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">1. rész – Mi az a remote csapat (és miért imádjuk a Furthernél)?</a></li>
                                <li><strong>2. rész – Hogyan vegyünk fel új remote csapattagot?</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}">3. rész – Hogyan építsünk remote vállalati kultúrát?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk']) }}">4. rész – Hogyan motiváljuk magunkat, ha távmunkában dolgozunk?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mukodhet-e-sikeres-tavkapcsolat-ceges-kornyezetben']) }}">5. rész – Működhet-e sikeres távkapcsolat egy céges környezetben?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hatekony-home-office-a-gyerekek-mellett']) }}">6. rész – Hatékony home office a gyerekek mellett? Mutatjuk, hogyan!</a></li>
                            </ul>
                            <p>Előző cikkünkben megmutattuk, hogy milyen <a href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">előnyökkel és hátrányokkal</a> jár egy olyan csapatot működtetni, amely részben vagy teljesen távmunkában dolgozik. Mi a Furthernél 100%-ban távoli csapatként működünk, és el sem tudjuk képzelni, hogy ez másként legyen.</p>
                            <p>Ugyanakkor kétségkívül igaz az az állítás, miszerint a távmunka nem mindenkinek való. Távmunkában nincsenek kollégák mellettünk, akik puszta jelenlétükkel motiválóak tudnak lenni. Ezért csapatunknak átlagon felüli önfegyelemre lesz szüksége, hogy ne a sötét szobában nézzék a Netflixet naphosszat.</p>
                            <p>A személyes kapcsolat hiánya miatt kiemelten jó kommunikációs készségekre is szüksége van azoknak a csapattagoknak, akik remote dolgoznak. Bár manapság rengeteg jó kommunikációs segédeszköz és szoftver létezik, a non-verbális kommunikációba kódolt információ gyakran elveszik a virtuális térben.</p>
                            <p>Számunkra ez a két szempont a legfontosabb. Viszont ilyen tulajdonságokkal megáldott munkavállalók, akik emellett még jó szakemberek is, nem jönnek velünk szembe túl gyakran. Éppen ezért szerencse, hogy távmunkában keressük a csapattagokat, így (legtöbbször) nincsenek földrajzi megkötéseink és sokkal nagyobb halmazból válogathatunk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-2-job-advertisement.jpg') }}" alt="Az álláshirdetés" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Az álláshirdetés</h2>
                            <p class="has-margin-b60">Ami az álláshirdetést illeti, nem sokban különbözik egy klasszikus álláshirdetéstől. 2-3 szempont van, amire érdemes odafigyelned, mert ezek nem szoktak egyértelműek lenni legtöbb távmunkás álláshirdetésnél.</p>
                            <h3 class="heading-4 has-margin-b15">Az állás típusa</h3>
                            <p>Az első az, hogy az állás típusa milyen lesz. Míg egy normál állásnál nyugodtan feltételezhető, hogy teljes munkaidős az állás, ha nincs másként feltüntetve, távmunkában ez egyáltalán nem ilyen egyértelmű. Sőt, a tapasztalatunk az, hogy legtöbbször azt feltételezik a munkavállalók, főleg az IT szektorban, hogy alvállalkozói vagy projektmunkáról van szó.</p>
                            <p class="has-margin-b30">Nyilvánvalóan tüntessük fel, hogy teljes, részmunkaidős vagy időszakos állásról, esetleg alvállalkozói partnerségről van szó. Mi például előszeretettel keresünk embereket teljes munkaidőre, attól függetlenül, hogy az távmunkában zajlik le.</p>
                            <h3 class="heading-4 has-margin-b15">A bérezés módja</h3>
                            <p class="has-margin-b30">Érdemes a bérezés módjára is kitérni. Mivel távmunkáról van szó, sokan azt feltételezik, hogy kizárólag számlaképes érdeklődők jelentkezését várják, ám ez korántsem mindig van így. Nálunk például a legtöbb teljes munkaidős csapattag klasszikus munkaviszonyban van, egyedül a külföldi munkatársak és a különböző egyéb alvállalkozók számláznak be.</p>
                            <h3 class="heading-4 has-margin-b15">Nyelvi korlátok</h3>
                            <p>Az utolsó dolog, amit érdemes végiggondolnod az álláshirdetésnél az, hogy pontosan hol is hirdeted meg. Bár a távmunka elvileg lehetővé teszi számodra, hogy a világ bármely részéről bevonj csapattagokat, vannak bizonyos korlátok, melyekkel számolnod kell.</p>
                            <p>A leggyakoribb problémát a nyelvi akadályok jelentik. Ha az angol nyelv ismerete nem elegendő, akkor lényegesen beszűkülnek a választási lehetőségeid. Gondold végig, mennyire fontos a helyi nyelv ismerete?</p>
                            <p class="has-margin-b30">A mi tapasztalatunk az, hogy a legtöbb cég esetében ez túl van gondolva. 1-2 apró folyamatbeli változtatással áthidalható ez a nyelvi probléma, ami hosszú távon biztosan kifizetődik és dinamikusabb fejlődésre ad majd lehetőséget.</p>
                            <h3 class="heading-4 has-margin-b15">Időzónák</h3>
                            <p>Egy másik probléma lehet az időeltolódás. Érdemes előre végiggondolnod, hogy mekkora az a maximális időbeli különbség, ami még belefér, hogy hatékonyan tudd irányítani a csapatodat.</p>
                            <p class="has-margin-b30">Ha mindenkinek megvan a saját kis szelete, amin dolgoznia kell, akkor az időzóna lehet, hogy nem is jelent problémát. Viszont ha egy közös projekten szoros együttműködésben kell dolgoznotok, akkor elképzelhető, hogy maximum 2-3 óra időeltolódás fér bele.</p>
                            <h3 class="heading-4 has-margin-b15">Vállalati kultúra</h3>
                            <p>Amikor megfogalmazzátok az álláshirdetést, fontos, hogy a fentieket mind megemlítsétek. De a hirdetés nagyrészét szenteljétek inkább a vállalati kultúrának. Ne arról írjatok, milyen tudással kell rendelkeznie a jelentkezőnek vagy mik az elvárások. Ezeket írjátok meg egy külön oldalon vagy rakjátok csatolmányba.</p>
                            <p>Inkább mutassátok meg azt, hogy milyenek vagytok ti. Milyen értékeket képviseltek? Egy remote állás esetén ezek segítenek eloszlatni a távmunka iránti félelmet a jelentkezőkben.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-2-job-interview.jpg') }}" alt="Az interjú" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30 has-margin-t60">Az interjú</h2>
                            <p>Egy interjú során mindig arra koncentrálunk, hogy kiderítsük, hogyan illeszkedni a jelölt a csapatunkba. Ugyanaz motiválja? Ugyanazokat az értékeket képviseli? Tudnánk-e vele kommunikálni és nap-mint-nap együtt dolgozni? Ezek a kérdések sokkal inkább foglalkoztatnak minket, mint hogy milyen képesítései és diplomái vannak.</p>
                            <p>Mint már említettem, számunkra bizonyos soft skillek, mint a kommunikáció készségek vagy az önfegyelem, igazán fontosak. A technikai tudás csak másodlagos, hiszen ezeket meg lehet tanítani.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-2-ambition-and-teamwork-quote-hu.jpg') }}" alt="Az ambíció és csapatba illeszkedés fontosabbak, mint a képesítések és diplomák." />
                            </figure>
                            <h3 class="heading-4 has-margin-b15">Hogyan teszteld az önfegyelmet?</h3>
                            <p>Bár ezeket nehéz tesztelni, egy pár jól célzott kérdéssel fényt deríthetsz olyan tulajdonságokra, melyek árulkodóak lehetnek:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Hány napra előre szoktad megtervezni a munkádat?</li>
                                <li>Milyen eszközt használsz arra, hogy kövesd a feladatokkal eltöltött időt.</li>
                            </ul>
                            <p class="has-margin-b60">Ezekkel a kérdésekkel például rá lehet érezni, hogy valaki mennyire rendszerezett. A rendszerezettség pedig az önfegyelem egyik árulkodó jele.</p>
                            <p>Egy másik ilyen jel lehet az ambíció vagy a tanulási vágy. Ezeket olyan kérdésekkel mérjük fel mint:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>Mi az utolsó dolog, ami tanultál?</li>
                                <li>Mi az utolsó szakmai könyv, amit olvastál?</li>
                                <li>Mi volt az utolsó konferencia vagy meetup, amin részt vettél?</li>
                                <li>Mi az a két szakmai dolog, amiben fejlődni szeretnél?</li>
                            </ul>
                            <p class="has-margin-b30">Az a tapasztalatunk, hogy az olyan csapattagok, akikben megvan ez a tanulási vágy, folyamatosan fejlődni szeretnének és nincs az önfegyelemmel sem gondjuk. Ha befejezik a munkájukat, rögtön követelik az új projektet.</p>
                            <h3 class="heading-4 has-margin-b15">Hogyan teszteld a kommunikációs készségeket?</h3>
                            <p>Míg az önfegyelmet lehet kérdésekkel tesztelni, a kommunikációs készségeket már nehezebb. De igazából nem is szükséges külön tesztelni.</p>
                            <p>Figyelj oda, mennyire nyitott, mennyire kommunikatív a jelölt. Az interjú egyirányú kérdezés részetekről, vagy inkább egy kétirányú társalgás (persze ebben neked is szereped van!)?</p>
                            <p>Mennyire figyelmes a jelölt? Érdemes időnként visszakérdezni. Mindig adj lehetőséget neki, hogy ő is kérdezzen. Az ő kérdéseiből mindig többet meg lehet tudni a jelentkezőről.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-2-the-right-candidate-quote-hu.jpg') }}" alt="Ha egy jelölt nem ó igen, akkor inkább ó nem! " />
                            </figure>
                            <p>Mielőtt felvennétek egy új csapattagot, érdemes egy külön beszélgetés tartani az egész csapattal. Figyeld meg, hogyan kommunikál a többiekkel, érzel-e valamiféle súrlódást az emberek között.</p>
                            <p class="has-margin-b30">Mindenesetre bízz a megérzéseidben. Nem kell felvenned fel az első embert, aki valamennyire megfelelő. Mi azt valljuk, hogy ha egy jelölt nem „ó igen", akkor inkább „ó nem!"</p>
                            <h3 class="heading-4 has-margin-b15">Mi másra figyelj oda interjúztatáskor?</h3>
                            <p>Bár a soft skillek távmunka esetében fontosabbak, mondanunk sem kell, hogy a szakmai tudás felmérését nem szabad teljesen elfelejteni. Szintén érdemes egy fizetett próbaidőt beiktatni. Ez rengeteg fejfájástól megóvhat majd a későbbiekben.</p>
                            <p class="has-margin-b60">Már az interjú folyamat alatt mondd el világosan, mik az elvárások, mi a csapatstruktúrátok, milyen projekteken fog dolgozni és hogy milyen lesz a bérezés. Távmunkában nem mindig világos a szabadnapok és a munkaidő kérdése, hiszen ezek gyakran nem kötöttek. De ha mégis azok, akkor ezekre mindenképpen térj ki az interjúk alatt.</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><strong>Ne mellőzd teljesen a szakmai tudás felmérését!</strong></li>
                                <li><strong>Iktass be egy fizetett próbaidőt!</strong></li>
                                <li><strong>Legyenek világosak az elvárások!</strong></li>
                            </ul>
                            <p>Nálunk például preferáltak a klasszikus hivatali órák, de nem kötelező ezek betartása ameddig ez nem befolyásolja a projekt határidőket. Kötelező viszont a reggeli stand-up meetingen való részvétel.</p>
                            <p>Ami a szabadnapokat illeti, nincs megkötés, hogy hány szabadnapot vehet ki valaki és mikor. Hosszabb vakációk esetében viszont elvárás, hogy a kolléga legalább 1 hónappal előtte jelezze. Ezeket a részleteket mi legtöbbször már az első interjúkor tisztázni szoktuk.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-2-onboarding-a-new-team-member.jpg') }}" alt="Fontos az új kollégák felzárkóztatása" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Onboarding</h2>
                            <p>Szuper, megvoltak az interjúk és felvettünk egy új kollégát. De a folyamat még nem ér itt véget. Egy remote csapat esetén az onboarding folyamatnak sokkal fontosabb szerepe van, mint irodai környezetben.</p>
                            <p class="has-margin-b30">Egy irodában egy munkatárs az első napján bemegy, megkeresi az íróasztalát, a kávégépet, majd elkezd megismerkedni a kollégákkal és a munkával. Távmunkában viszont ennél sokkal ijesztőbb az első nap. Gondolj bele, milyen ott ülni egy sötét szobában egy laptoppal az öledben.</p>
                            <h3 class="heading-4 has-margin-b15">Szervezz egy onboarding találkozót a csapattal!</h3>
                            <p>Az első dolog, amit meg kell tenned új csapattag csatlakozásakor az, hogy szervezel egy csoportos hívást a teljes csapattal. Legyen videóhívás, hogy az emberek egy arcot is tudjanak társítani a hanghoz. Ha van irodátok is, akkor még jobb volna egy személyes találkozó ilyenkor.</p>
                            <p class="has-margin-b30">Bíztasd a régebbi csapattagokat arra, hogy külön is beszélgessenek az új kollégával és ismerjék meg egymást!</p>
                            <h3 class="heading-4 has-margin-b15">Intézd el mielőbb a logisztikát!</h3>
                            <p>Mi szeretjük a logisztikai kérdéseket már az első nap előtt intézni. Az email címet, felhasználói fiókokat és jogosultságokat már kezdés előtt beállítjuk, hogy első nap már a lényeges dolgokra lehessen koncentrálni.</p>
                            <p class="has-margin-b30">Van egy céges wiki oldalunk is, egy amolyan tudástár, amiben minden fontos információ benne van: melyek a céges értékeink, milyen eszközöket használunk nap mint nap, hogyan működik a projektmenedzsment, stb. Ennek a wikinek a linkjét már az első nap előtt kiküldjük.</p>
                            <h3 class="heading-4 has-margin-b15">Fontos a sikerelmény</h3>
                            <p>Mindig figyelj oda, hogy az új kollégának már az első napon legyen feladata, bármilyen apró feladat az. Így hamar sikerélménye lesz és felveszi a munka ritmusát. Nem marad ideje megkérdőjelezni, hogy mit keres egyedül egy szobában.</p>
                            <p class="has-margin-b60">Ez főleg azoknál a kollégáknál fontos, akik még sosem dolgoztak távmunkában. Később már nem jelent ez problémát, ha egyszer ráéreztek a távmunka ízére, nem is fog már felmerülni az irodai munka kérdése.</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">&laquo; 1. rész – Mi az a remote csapat?</a>
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}">3. rész – Remote vállalati kultúra &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan vegyünk fel új remote csapattagot?'])
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
    "datePublished": "2019-12-12T12:00:00",
    "dateModified": "2019-12-12T12:00:00",
    "description": "Ebben a cikkben megmutatjuk, hogyan tanácsos új remote csapattagot alkalmazni és melyek azok a lépések, amellyel segíthetjük a beilleszkedésüket.",
    "headline": "Hogyan vegyünk fel új remote csapattagot?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-remote-corporate-culture-2-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Csapat, Remote csapat, Remote team, Távmunka, Távoli csapat, Kommunikáció, Céges távkapcsolat, Videóhívás, Team building, Csapatépítés, Munkavállaló, Motiváció ",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan vegyünk fel új remote csapattagot?",
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
                "name": "Hogyan vegyünk fel új remote csapattagot?"
            }
        }
    ]
}
</script>
@endpush
