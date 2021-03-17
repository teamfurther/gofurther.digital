@section('title', 'Remote vállalati kultúra: előnyök és kihívások alkalmazottak és munkaadók számára')
@section('description', 'Ebben a cikkben megmutatjuk, mi is az a remote csapat, és hogy milyen előnyökkel és specifikus kihívásokkal jár munkaadóknak és alkalmazottaknak egyaránt.')
@section('preview_image', asset('media/blog/cover-remote-corporate-culture-1-hu.png'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-remote-corporate-culture-1-hu.png') }}" srcset="{{ asset('media/blog/featured-remote-corporate-culture-1-768w-hu.png') }} 768w, {{ asset('media/blog/featured-remote-corporate-culture-1-1000w-hu.png') }} 1000w" sizes="100vw" alt="Remote vállalati kultúra 1. rész – Mi is az a remote csapat?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Mi az a remote csapat (és miért imádjuk a Furthernél)?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-11-24 12:00:00">2019 november 24</time> &middot; 5 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Ez a remote vállalati kultúráról szóló sorozatunk első része. Ha egy bizonyos cikket keresel a sorozatból, akkor itt megtalálod a linkeket:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><strong>1. rész – Mi az a remote csapat (és miért imádjuk a Furthernél)?</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}">2. rész – Hogyan vegyünk fel új remote csapattagot?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}">3. rész – Hogyan építsünk remote vállalati kultúrát?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk']) }}">4. rész – Hogyan motiváljuk magunkat, ha távmunkában dolgozunk?</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'mukodhet-e-sikeres-tavkapcsolat-ceges-kornyezetben']) }}">5. rész – Működhet-e sikeres távkapcsolat egy céges környezetben?</a></li>
                            </ul>
                            <p>A Furthernél 100%-ban remote (távoli) csapatként működünk. És imádjuk.</p>
                            <p>Az IT szektor úttörő ilyen szempontból. Start-up cégek és digitális vállalkozások esetében gyakran találkozhatunk remote csapatokkal. A mi esetünkben 7 különböző városban van 10 kollégánk. De nem csak kisebb cégek esetén jöhet szóba a remote csapat: az <a href="https://www.invisionapp.com/" target="_blank">Invision</a> 700 embert alkalmaz, de nincs egyetlen irodája sem.</p>
                            <p>Hiszünk abban, hogy a távoli munka nemcsak IT vállalatok esetében működik, hanem sokkal több cégnek fel kéne vállalnia, hogy részben vagy teljesen remote csapatokat foglalkoztasson.</p>
                            <p>De miért is annyira jó remote csapatként dolgozni? A távmunka nemcsak annyit jelent, hogy a tengerpart mellől, exotikus cocktailokat szürcsölgetve is lehet dolgozni. Ennél sokkal több előnnyel jár, amit két kategóriába lehet osztani.</p>
                            <p class="has-margin-b60">Egyfelől olyan előnyökről beszélhetünk, melyek elsősorban a vállalkozás számára jók, másfelől pedig olyan előnyökről, melyek drasztikusan javítanak az alkalmazottak életén. Valójában a legtöbb ezek közül mindkét felet segítik hosszútávon, hiszen a munkaadó és az alkalmazottak boldogsága szorosan összefügg.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-1-benefits-for-employees.jpg') }}" alt="A remote csapat előnyei egy alkalmazott számára" />
                            </figure>
                            <h2 class="heading-2 has-margin-b60 has-margin-t60">Előnyök az alkalmazottak számára</h2>
                            <h3 class="heading-4 has-margin-b15">Work-life balance</h3>
                            <p class="has-margin-b30">A távmunka jobb magánélet és munka közötti egyensúlyhoz vezethet. A flexibilis időbeosztás azt jelenti, hogy időt tudunk fordítani a családra és a személyes feladatainkra is. Ez segít feloldani a stresszt és megelőzi a kiégést.</p>
                            <h3 class="heading-4 has-margin-b15">Nincs ingázás</h3>
                            <p>Hány embert ismertek, aki szeret ingázni? Addig nincs is gond az ingázással, amíg ez egy 15 perces sétát jelent a munkahelyig, de amikor órákat állunk a dugóban, az gyakran idegtépő.</p>
                            <p class="has-margin-b30">Ami pedig még rosszabb, hogy nagyon kevés az olyan cég, aki az ingázást a munkaidőből vonja le, nem a személyes időnkből, ezért az ingázás a családdal, barátokkal és hobbikkal eltölthető időnkből veszik el.</p>
                            <h3 class="heading-4 has-margin-b15">Egészség</h3>
                            <p>Azt már említettük, hogy a flexibilis munkaidő kevesebb stresszhez és kiégéshez vezet. De más egészségügyi előnyei is vannak a távmunkának.</p>
                            <p>Egy irodában dolgozva, nehéz megszakítani a munkát annak érdekében hogy mozogjunk vagy vigyázni arra, hogy egészségesen étkezzünk.</p>
                            <p>Otthonról dolgozva több időnk marad testmozgásra és mindig közel vagyunk egy jól felszerelt konyhához, így nem vagyunk rászorulva a sarki gyrosra.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-1-benefits-for-employer.jpg') }}" alt="Egy remote csapat alkalmazásának előnyei a munkaadó számára" />
                            </figure>
                            <h2 class="heading-2 has-margin-b60">Előnyök a munkaadó számára</h2>
                            <h3 class="heading-4 has-margin-b15">Kevesebb költség</h3>
                            <p>Egy vállalkozás számára a bérek után az egyik legnagyobb költség az irodabérlés. Egy remote cég esetében nem kell számolnunk ezzel a költséggel, bár dönthetünk úgy, hogy fenntartunk egy irodát megbeszélésekre. Viszont ebben az esetben is sokkal kisebb, ezáltal olcsóbb irodára lesz szükség.</p>
                            <p class="has-margin-b30">Nem kell drága irodai felszerelést sem vásárolnunk, bár az mindig jó ötlet, hogy a csapatunknak biztosítsuk a megfelelő felszerelést, ahhoz hogy hatékonyan tudják végezni a munkájukat.</p>
                            <h3 class="heading-4 has-margin-b15">Képzettebb munkaerő</h3>
                            <p>Az IT szektor leginkább azért szereti a távmunkát, mert képzett munkaerőhöz tudnak hozzáférni bárhonnan a világból. Gondolj bele, mennyire limitáltak a lehetőségeid, ha egy vidéki városban kell csapatot építened?</p>
                            <p class="has-margin-b30">Ha remote csapatként működtök, gyakorlatilag bárhol a világon kereshetsz megfelelően képzett szakembereket. Nem találod az ideális csapattagot Budapesten? Semmi gond, <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}">nézzél szét más városokban is</a>, vagy akár országokban.</p>
                            <h3 class="heading-4 has-margin-b15">Magasabb produktivitás</h3>
                            <p>Legtöbb munkaadó ezért nem mer belevágni a távmunkába, mert attól tartanak, hogy az alkalmazottak nem lesznek annyira hatékonyak, mint az irodában.</p>
                            <p>Az tény, hogy nem mindenkinek való a távmunka, de a <a href="https://www.globenewswire.com/news-release/2016/02/08/1019290/0/en/Vodafone-Study-75-Percent-of-Global-Companies-Leverage-Flexible-Working-Policies.html" target="_blank">kutatások</a> azt mutatják, hogy távmunkában, flexibilis időbeosztással a csapatok sokkal produktívabbak.</p>
                            <p class="has-margin-b30">Nem vagyunk mind egyformák. Egyesek reggel működnek jobban, mások éjjeli baglyok. Egy kis extra szervezéssel megoldható, hogy mindenki akkor dolgozzon, amikor a leghatékonyabb.</p>
                            <h3 class="heading-4 has-margin-b15">Bizalom és hűség</h3>
                            <p>Ha munkaadóként biztosítod csapatodnak azt a szabadságot és flexibilitást, hogy bármivel foglalkozhassanak, amit az élethelyzetük megkíván, de közben megbízol bennük és feljogosítod őket arra, hogy időben és jól végezzék a munkájukat, hosszú távon növeli a lelkesedésüket és lojalitásukat a cégünk iránt.</p>
                            <figure>
                                <img src="{{ asset('media/blog/remote-corporate-culture-1-challenges.jpg') }}" alt="A távmunkának, számos előnye mellett, megvannak a sajátos kihívásai." />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">A kihívások</h2>
                            <p class="has-margin-b60">Eddig minden jónak hangzik, ugye? Igen, azonban egy pozitív vállalati kultúra kiépítése sok energiát követel…</p>
                            <h3 class="heading-4 has-margin-b15">Önfegyelem hiánya</h3>
                            <p class="has-margin-b30">Egy irodában ülni, ahol a kollégák folyton körülötted vannak, önmagában is motiváló lehet. Távmunkában ez a fajta nyomás nem nehezedik a csapatra. Nincs ott senki, aki folyton emlékeztesse őket, hogy el kell végezni egy munkát – <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk']) }}">saját magukat kell motiválják</a>.</p>
                            <h3 class="heading-4 has-margin-b15">Work-life balance</h3>
                            <p>Azt már említettük, hogy a távmunka segít egy kiegyensúlyozottabb munka és magánélet közötti viszonyban. De vannak nehézségei is.</p>
                            <p class="has-margin-b30">Ahogy elkezdünk otthonról dolgozni, a munka és magánélet közötti határ elkezd elmosódni. Ha megengedjük a családnak, hogy ugyanúgy megzavarjon, mint egy kolléga az irodában, akkor nem nyertünk semmit. <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk']) }}">Alakítsunk ki egy megfelelő munkakörnyezetet magunknak</a>.</p>
                            <h3 class="heading-4 has-margin-b15">Kommunikáció</h3>
                            <p>Bármennyire is úgy tűnik, hogy a távmunka előnyösebb lehet az irodánál, egy nagy előnye azért van az irodának – az pedig a személyes kommunikáció. Ha bármit meg kell beszélni, akkor egyszerűen átsétálhatunk a kollégánkhoz (amúgy ez a figyelemelterelés az első számú tényező, ami csökkenti az irodai hatékonyságot).</p>
                            <p class="has-margin-b30">A kommunikáció problémájának megoldása lesz a munkaadó legfontosabb feladata egy remote csapatban. A Furthernél is <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}">folyamatosan foglalkozunk ezzel a kérdéssel</a>.</p>
                            <h3 class="heading-4 has-margin-b15">Tudásmegosztás</h3>
                            <p class="has-margin-b30">Irodában könnyű megosztani egy heuréka pillanatot. De távmunkában könnyebb ezeket magunknak megtartani. Munkaadóként fontos, hogy <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-epitsunk-remote-vallalati-kulturat']) }}">olyan vállalati kultúrát alakítsunk ki, ami támogatja a tudás megosztását</a>.</p>
                            <h3 class="heading-4 has-margin-b15">Személyes kapcsolatok hiánya</h3>
                            <p>A személyes találkozások teljesen másféle interakciót alakítanak ki egy csapaton belül, amit virtuálisan nem lehet helyettesíteni. Ragadjunk meg minden alkalmat, hogy találkozzon a csapat.</p>
                            <p class="has-margin-t60">Bár láthatod, hogy a remote munkának vannak specifikus kihívásai, de szerintünk legalább ennyi kihívás van egy klasszikus munkahelyen is, irodai környezetben. Mi úgy érezzük, hogy mindent összevetve, a távmunka megoldást jelenthet sok cég számára – olyanok számára is, akik eddig nem merték megtenni ezt a lépést.</p>
                            <p class="has-margin-b60">Pontosan ebből az okból született cikksorozatunk, amelyben azt mutatjuk be, hogy mik az előnyei és hátrányai a távmunkának, mire érdemes odafigyelned, ha távmunkában gondolkozol, illetve azt, hogy mi magunk hogyan csináljuk!</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-vegyunk-fel-uj-remote-csapattagot']) }}">2. rész – Hogyan vegyünk fel új remote csapattagot? &raquo;</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Remote vállalati kultúra 1. rész – Mi is az a remote csapat?'])
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
    "datePublished": "2019-11-24T12:00:00",
    "dateModified": "2019-11-24T12:00:00",
    "description": "Ebben a cikkben megmutatjuk, mi is az a remote csapat, és hogy milyen előnyökkel és specifikus kihívásokkal jár munkaadóknak és alkalmazottaknak egyaránt.",
    "headline": "Remote vállalati kultúra: előnyök és kihívások alkalmazottak és munkaadók számára",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-remote-corporate-culture-1-hu.jpg') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Csapat, Remote csapat, Remote team, Távmunka, Távoli csapat, Kommunikáció, Céges távkapcsolat, Videóhívás, Team building, Csapatépítés, Munkavállaló, Motiváció",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Remote vállalati kultúra: előnyök és kihívások alkalmazottak és munkaadók számára",
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
                "name": "Remote vállalati kultúra: előnyök és kihívások alkalmazottak és munkaadók számára"
            }
        }
    ]
}
</script>
@endpush
