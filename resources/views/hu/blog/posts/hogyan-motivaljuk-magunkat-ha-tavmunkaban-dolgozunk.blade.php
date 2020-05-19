@section('title', 'Hogyan legyünk motiváltabbak egy remote csapat tagjaként')
@section('description', 'Az otthoni munka iránti elhivatottság egy idő után jellemzően alábbhagy. Mit tehetünk azért, hogy visszanyerjük a kezdeti lelkesedésünket?')
@section('preview_image', asset('media/blog/cover-remote-corporate-culture-4-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-remote-corporate-culture-4-hu.png') }}" srcset="{{ asset('media/blog/featured-remote-corporate-culture-4-769w-hu.png') }} 769w" sizes="100vw" alt="Ötletek önmagunk motiválására" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan motiváljuk magunkat, ha távmunkában dolgozunk?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2020-01-04 12:00:00">2020 január 4</time> &middot; 5 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Olvasd el sorozatunk többi cikkét:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">1. rész – Mi az a remote csapat (és miért imádjuk a Furthernél)?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}">2. rész – Hogyan vegyünk fel új remote csapattagot?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}">3. rész – Hogyan építsünk remote vállalati kultúrát?</a></li>
                                <li><strong>4. rész – Hogyan motiváljuk magunkat, ha távmunkában dolgozunk?</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mukodhet-e-sikeres-tavkapcsolat-ceges-kornyezetben']) }}">5. rész – Működhet-e sikeres távkapcsolat egy céges környezetben?</a></li>
                            </ul>
                            <p>Napjainkban az IT szektor néhány olyan területek egyike, amely teljes szabadságot nyújt az irodán kívüli munkához. Legyen szó a saját lakásodról, vagy épp egy kávézóról, bárhonnan könnyedén elvégezheted a napi teendőideet, csak egy laptopra és internet hozzáférésre van szükséged.</p>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">számottevő előnye mellett</a>, sajnos a home office-nak is megvannak a maga kihívásai, könnyen szembe találhatjuk magunkat a kényelem okozta hátráltató tényezőkkel. Az otthoni munka talán egyik legnagyobb kihívása a motiváció elvesztése vagy hiánya. Ez súlyos hatással lehet a hatékonyságunkra, boldogtalanokká válunk és ez a kollégákra is demotiválóan hathat.</p>
                            <p>Néha vannak olyan pillanatok az életben, amikor még a legjobb meló is képes szinte őrületbe kergetni. Az elhivatottság egy idő után jellemzően alábbhagy, és tennünk kell azért, hogy visszanyerjük a kezdeti lelkesedésünket, hisz minden munka annyira jó, amennyire mi azzá tesszük.</p>
                            <p class="has-margin-t60 heading-3">De mit is tehetsz alkalmazottként ahhoz, hogy egy kicsit felturbózd a motivációdat?</p>
                            <figure>
                                <img src="{{ asset('media/blog/stay-motivated.jpg') }}" alt="El kell gondolkoznunk azon, hogy mi magunk mit tehetünk az önmegvalósításunk érdekében?" />
                            </figure>
                            <h3 class="heading-4 has-margin-b15">Önismeret a munkahelyen</h3>
                            <p>Az első és talán a legfontosabb lépés a motiváció megtalálásához az önismeret. Ismerned kell önmagadat, képességeidet, személyiségedet, tisztában kell legyél erősségeiddel éppúgy, mint hiányosságaiddal. Ez nélkülözhetetlen, ha nem csupán munkavállalóként szeretnél dolgozni, hanem komoly karriervágy hajt.</p>
                            <p class="has-margin-b30">Ismerned kell önmagadat, tudnod kell, miért ezt a szakmát választottad, mit szeretnél elérni a munkád által és ez egyáltalán lehetséges-e ebben a szakmában?</p>
                            <h3 class="heading-4 has-margin-b15">Tűzz ki kisebb napi célokat</h3>
                            <p>Igen, klassznak tűnhet nagy célokat kitűzni, de először kezdj kisebbekkel! Bontsd blokkokra a napi feladatokat, tűzz ki kisebb célokat! A rövid idő alatt megoldható kisebb feladatok motiválják az embert, hiszen hamarabb lesz sikerérzetünk.</p>
                            <p>A Furthernél az agilis szoftverfejlesztés hívei vagyunk, ami hasonlóképpen működik. Egy nagyobb projektet kisebb részekre (sprintekre) osztunk fel. Minden sprint végén sor kerül a „retrospektívre”, ahol áttekintjük az elkészült és az el nem készült részeket.</p>
                            <figure>
                                <img src="{{ asset('media/blog/positive-work-environment.jpg') }}" alt="A megfelelően kialakított otthoni munkakörnyezet pozitívan hat a munkavégzésünkre." />
                            </figure>
                            <h3 class="heading-4 has-margin-b15">Alakíts ki egy megfelelő munkakörnyezetet</h3>
                            <p class="has-margin-b30">Amennyiben rendszeresen dolgozol otthonról, létfontosságú, hogy megteremtsd a megfelelő munkakörnyezetet magadnak. Ha nincs lehetőséged egy külön szobát fenntartani irodának, akkor keríts el egy sarkot és azt kizárólag munkára használd! Egy kényelmes irodai szék, egy rendezett asztal és a megfelelő világítás mellett fontos, hogy szívesen legyél itt, hiszen napod legnagyobb részét munkával töltöd.</p>
                            <h3 class="heading-4 has-margin-b15">Mozdulj ki</h3>
                            <p>Remote team tagjaként néha mi is késztetést érzünk arra, hogy a kényelmesen kialakított otthoni irodát lecseréljük egy nyüzsgő kávéházi asztalra, vagy kiüljünk egy csendes parkba, attól függően, hogy éppen mi inspirál minket.</p>
                            <p>Néhány kollégánk gyakran közösségi irodából végzi a napi teendőit. Coworking irodában azért jó dolgozni, mert az irodai élet minden előnyét élvezheted, de a munkaidődet mégis te oszthatod be. Nem olyan ingerszegény, mint az otthoni munkakörnyezet, viszont kényelmesebb és csendesebb mint egy kávézó.</p>
                            <p class="has-margin-b30">Egy remek lehetőség lehet arra, hogy kitörj az otthon falai közül és hogy új emberekkel találkozz. Az ilyen típusú irodákban rengetegféle foglalkozású és személyiségű ember megfordul, akik előbb-utóbb elkezdenek beszélgetni egymással. Elindul az ötletbörze, amiből akár új közös projektek is születhetnek. A közösségi irodák életérzést kínálnak, amit mindenképp érdemes legalább egyszer kipróbálni.</p>
                            <h3 class="heading-4 has-margin-b15">Alakíts ki egy rutint</h3>
                            <p>A home office során a reggeli megszokott rutin lassan kikophat a mindennapokból, egyszer csak azon veszed észre magad, hogy pizsamában dolgozol és fogkefével a szádban olvasod az e-maileket. A megfelelő rítusok rendkívül motiválóak tudnak lenni. Határozd meg hánykor kelsz és nagyjából mikor szeretnéd zárni a munkanapot! Amint alkalmazkodsz a napi rutinhoz, sokkal könnyebb lesz motiváltnak maradnod és a kitűzött célokat elérned.</p>
                            <figure>
                                <img src="{{ asset('media/blog/get-up-early.jpg') }}" alt="A korán kelésnek igen is meg vannak a saját előnyei" />
                            </figure>
                            <h3 class="heading-4 has-margin-b15">Kelj fel korábban!</h3>
                            <p>A korán kelés akkor is nehéz, amikor minden nap időre kell beérjél az irodába, legszívesebben csak kinyomnád az ébresztőt. Ha azonban otthonról dolgozol és nem vagy meghatározott ütemtervhez kötve, sokszor túl lustának érzed magad ahhoz, hogy felkelj az ágyból. Ha motivált szeretnél maradni, tűzz ki egy konkrét órát és próbáld meg magad ahhoz tartani minden nap!</p>
                            <p class="has-margin-b30">Fontos megemlíteni, hogy nem vagyunk egyformák, sokan a reggeli órákban a legaktívabbak, mások pedig éjjeli baglyok. Találd meg a számodra, hogy mikor vagy a legproduktívabb, mikor tudsz a legjobban összpontosítani!</p>
                            <h3 class="heading-4 has-margin-b15">Húzd meg a határt munka és magánélet között</h3>
                            <p>A 8 órás munkaidő home officeban meghosszabbodhat. Sokszor nem tudatosul a vezetőségben, mennyi munka áll a teljesítményed mögött, ezért kevésbé lesz látványos milyen munkát végzel.</p>
                            <p>Néha úgy érezheted, hogy nem dolgoztál eleget ilyenkor még egy-két órával kitolod a munkanapot, hogy be tudj fejezni egy adott projektet. Maximalista vagy és félsz csalódást okozni, ezért sokszor belefeledkezel a munkádba, és azt veszed észre, hogy eltelt az egész nap.</p>
                            <p class="has-margin-b30">Próbálj meg elhatárolódni a munkádtól! Értve ezalatt a mobiltelefont, a közös chatet, a céges e-maileket, egyszóval mindent. Ha aznapra elvégezted a munkád, és mindezt úgy tetted, hogy a legjobbat adtad magadból, egyszerűen ne vedd figyelembe ezeket.</p>
                            <h3 class="heading-4 has-margin-b15">Tarts szünetet</h3>
                            <p>A munka gyakran felhalmozódhat és az tűnhet a legjobb megoldásnak, hogy szünetben pótold az elmaradást. Ne tedd! Sokan nem tudják, de ha szünetet tartasz, megnő a produktivitásod.</p>
                            <p class="has-margin-b30">A Furthernél a Pomodoro technikát használjuk. 25-30 perces időközökre osztjuk a munkavégzést, közöttük 5-5 perc szünettel, illetve egy nagyobb 20 perces szünettel (például ebéd). Egyetlen feladat persze nem feltétlenül fér bele egy 25 perces időintervallumba, így nekünk kell előre meghatározni, hogy hány ilyen szakaszt szánunk egy-egy tennivalóra. Ez egy remek tehnika azoknak, akik nyomás alatt jobban teljesítenek.</p>
                            <h3 class="heading-4 has-margin-b15">Szüntesd meg a zavaró tényezőket</h3>
                            <p>Ha otthonról dolgozol, könnyen elkalandozhatsz az otthoni teendők és a kényelmes kanapék világában. Nagyon könnyű elveszítened a figyelmed, elkalandozni és a nap végén szembesülni a ténnyel, hogy bár egész nap elfoglalt voltál, nincs kézzelfogható eredménye. A család is könnyen megzavarhat munka közben, így elveszítheted a fókuszt és fárasztó lehet visszazökkenned a munkába. Ezért is célszerű már az elején tisztázni velük, hogy mikor leszek elérhetőek számukra.</p>
                            <p class="has-margin-t60">Amint láthatod, a motiváció egy rendkívül összetett dolog, különösen egy remote csapat tagjaként. Nehéz megtalálni az egyensúlyt szabadság és rugalmasság, önfegyelem és fókusz között ahhoz, hogy sikeresnek és eredményesnek érezzük magunkat. Mint munkavállaló, elsősorban saját gondolatainkon és érzéseinken keresztül van módunk problémáink megoldására és önmagunk motiválására.</p>
                            <div class="has-text-centered has-margin-t60">
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}" class="btn is-pearl has-margin-b15">« 3. rész – Hogyan építsünk remote vállalati kultúrát?</a>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'mukodhet-e-sikeres-tavkapcsolat-ceges-kornyezetben']) }}" class="btn is-pearl has-margin-b15">5. rész – Működhet-e sikeres távkapcsolat egy céges környezetben? &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan motiváljuk magunkat, ha távmunkában dolgozunk?'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.noemivarga')
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
        "name": "Varga Noémi"
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
    "datePublished": "2020-01-04T12:00:00",
    "dateModified": "2020-01-04T12:00:00",
    "description": "Az otthoni munka iránti elhivatottság egy idő után jellemzően alábbhagy. Mit tehetünk azért, hogy visszanyerjük a kezdeti lelkesedésünket?",
    "headline": "Hogyan legyünk motiváltabbak egy remote csapat tagjaként",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-remote-corporate-culture-4-hu.jpg') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "Csapat, Remote csapat, Remote team, Távmunka, Távoli csapat, Kommunikáció, Céges távkapcsolat, Videóhívás, Team building, Csapatépítés, Munkavállaló, Motiváció ",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Hogyan legyünk motiváltabbak egy remote csapat tagjaként",
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
                "name": "Hogyan legyünk motiváltabbak egy remote csapat tagjaként"
            }
        }
    ]
}
</script>
@endpush
