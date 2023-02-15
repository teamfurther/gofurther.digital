@section('title', 'Egy sikeres felhasználói interjú titkai')
@section('description', 'Egy felhasználói interjút levezetni nem mindenki számára könnyű. De egy kevés felkészüléssel és tapasztalattal, egy UX specialista leghasznosabb eszközévé válhat.')
@section('preview_image', route('generate-cover', ['title' => 'Egy sikeres felhasználói interjú titkai']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Egy sikeres felhasználói interjú titkai</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2023-01-13 10:00:00">2022 január 13</time> &middot; 7 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>A felhasználói (user) interjúk olyan strukturált interjúk, amelyek során a kutató információkat gyűjt a jelenlegi vagy potenciális felhasználóktól, hogy jobban megértse igényeiket, elképzeléseiket és érzéseiket. A user interjúk alkalmazhatók egy termék vagy szolgáltatás használhatóságának és felhasználói élményének kiértékelésére, valamint a demográfiai vagy etnográfiai adatok tisztázására.</p>
                            <p>Különféle kutatási technikákat alkalmazhatunk különböző típusú adatok gyűjtésére. Felhasználói interjúk segítségével saját bevallású, kvalitatív adatokhoz juthatunk. Más szóval, a felhasználó kifejezi egy adott fogalomról alkotott meglátását, vagy azt, hogy mit érez egy adott tapasztalattal kapcsolatban. Felhasználói interjúk levezetésekor a felhasználó kijelentéseire kell hagyatkozni, nem pedig a tevékenységét figyelni. Interjúkat használunk annak felderítésére, hogyan kommunikálnak és vélekednek célfelhasználóink az általunk épített termékről vagy szolgáltatásról. Ez a módszer kiválóan alkalmas a felhasználói attitűdök, észlelések és meggyőződések megismerésére. Például: Milyen problémákat és fájdalompontokat említenek? Mit állítanak, mit akarnak nyerni a tapasztalatból? Mit szeretnek és élveznek jelenleg a termékben, és mi az, ami még továbbfejleszthető?</p>
                            <p class="has-margin-b60">Az ideális felhasználói interjúhoz két UX kutató és egy felhasználó szükséges. Az egyik UX kutató végigvezeti az interjúalanyt a folyamaton, és kérdéseket tesz fel, míg a második kutató jegyzetel. Aki már valaha megpróbált kérdéseket feltenni, figyelni a válaszokat és jegyzetelni egyszerre, az tudja, hogy ez nagy kihívás lehet. Azonban egy második kutató nem mindig elérhető. Ilyenkor rögzítsd az interjút videó- vagy hangfelvétellel.</p>
                            <h2 class="heading-2 has-margin-b30">Mikor kell felhasználói interjúkat készíteni?</h2>
                            <p>A felhasználói interjúk a tervezési folyamat számos szakaszában használhatóak és minden alkalommal kulcsfontosságú betekintést nyújtanak, amelyek segítenek a projekt megfelelő pályán tartásában és a felhasználóközpontúság megtartásában.</p>
                            <p>Felhasználói interjúkat készíthetsz:</p>
                            <p><strong>Egy projekt elején</strong>, még mielőtt egy pontos koncepció ki lett volna dolgozva. A korai felhasználói interjúk során összegyűjtött adatoknak köszönhetően alaposabban megismerhetőek a potenciális fogyasztók, az ő céljaik és követelményeik az adott termékkel vagy szolgáltatással kapcsolatban, illetve az, hogy milyen megoldás irányába érdemes elindulni. Az összegyűjtött információk segítenek a felhasználói perszónák, térképek (journey map) és a termékhez kapcsolódó elemek, például funkciók és munkafolyamatok létrehozásában is.</p>
                            <p><strong>A termékfejlesztés korai szakaszában.</strong> Ha már van egy korai prototípusod, végezhetsz használhatósági teszteket a felhasználókkal annak érdekében, hogy értékes visszajelzéseket kapj még mielőtt a termék implementálásra vagy tömeggyártásba kerül. A használhatósági tesztek megfigyelési részét felhasználói interjúkkal zárhatod. Ez segít jobban megérteni a felhasználók viselkedését, az esetleges frusztrációikat és azt, hogy hogyan viszonyulnak a termékhez.</p>
                            <p class="has-margin-b60"><strong>A termék forgalomba helyezése után.</strong> Az, hogy a termék átadásra került, még nem jelenti azt, hogy a felhasználói interjúknak véget kell vetni! Folytatni kell a felhasználói megfigyeléseket és interjúkat, hogy további lehetőségeket biztosítson az ügyfelek termékhez való viszonyulásának megismerésére.</p>
                            <figure>
                                <img src="{{ asset('media/blog/user-interview.jpg') }}" alt="User interview" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Felkészülés az interjúkra</h2>
                            <p class="has-margin-b60">UX-tervezőként el kell sajátítani a hatékony felhasználói interjúk tervezésének és lebonyolításának művészetét. 3 fő lépést kell figyelembe venni a felhasználói interjúk előkészítésekor:</p>
                            <h3 class="heading-3 has-margin-b30">1. Tűzz ki célokat</h3>
                            <p>Világos, konkrét interjúcélokat kell megfogalmazni. Olyan célokat, amelyek a felhasználók viselkedésének vagy motivációjának egy adott aspektusához kapcsolódnak. Meg kell kérned a termékben érdekelt feleket, hogy határozzák meg, milyen meglátásokat szeretnének feltárni, és alapozzák meg a célt valamelyik reális törekvésükre.</p>
                            <p class="has-margin-b60">Ne legyenek a céljaitok túl széleskörűek, különben az interjúk túl sok irreleváns információt generálnak. Ügyelj arra, hogy a felhasználói interjúk során tartsd szem előtt konkrét tervezési céljaid.</p>
                            <h3 class="heading-3 has-margin-b30">2. Toborozz megfelelő alanyokat</h3>
                            <p>Ha már tisztában vagy a céllal, folytathatod a résztvevők toborozásával. Győződj meg arról, hogy a résztvevők képviselik a célközönségedet, ezért nézd át a <a href="{{ localizedRoute('blog.show', ['slug' => 'perszonak-a-termekfejlesztesben']) }}" target="_blank">felhasználói perszónáidat</a>. Ha több perszónád van, válaszd ki, hogy egy adott csoportra vagy többre szeretnél koncentrálni.</p>
                            <p>Különféle módszerek használhatóak a résztvevők toborozására:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Volt vagy jelenlegi vásárlók</li>
                                <li>Gerilla- vagy utcainterjúk</li>
                                <li>Fizetett interjúalanyok</li>
                                <li>Személyes kapcsolatok</li>
                                <li>Reklám a közösségi médiában</li>
                            </ul>
                            <p class="has-margin-b60">Ha toborzásról van szó, nem kell túlzásokba esni. Nincs varázsszám; azonban javasoljuk, hogy 5-7 résztvevővel kezdj.</p>
                            <h3 class="heading-3 has-margin-b30">3. Írj interjúkérdéseket!</h3>
                            <p>Készíts forgatókönyvet. Mielőtt még kérdéseket tennél fel, magyarázd el az interjú célját az alanyoknak. Mit szeretnél elérni?</p>
                            <p>Korlátozd az irányított kérdések használatát; ha teheted, inkább nyitott kérdéseket, mint zárt kérdéseket  tegyél fel. Például sokkal jobb azt megkérdezni, hogy "Meg tudja mondani, hogyan használja az azonnali üzenetküldést?" mint azt, hogy "Milyen gyakran használja a Snapchatet?" Az előbbi lehetővé teszi, hogy többet tudj meg a felhasználó tényleges tevékenységeiről, míg az utóbbi feltételezi, hogy csak a Snapchatet használják az azonnali üzenetküldés elsődleges módszereként.</p>
                            <p>Több kérdést készíts elő, mint amire számítasz. Ügyelj arra, hogy olyan kérdéseket tegyél fel, amelyek lehetővé teszik, hogy ugyanazt a problémát több szempontból közelítsék meg az alanyok. Ne feledd, hogy az interjú nagy részében az interjúalanynak kell beszélnie (nem neked).</p>
                            <p>Fontold meg több válasz lehetőségét is, illetve azt, hogy hogyan fogsz ezekre újabb kérdéssel reagálni.</p>
                            <p class="has-margin-b60">Ne feledd, hogy kérdéseid útmutatók, nincsenek kőbe vésve. Amikor egy interjúalany valami érdekeset mond, improvizálj! Ennek függvényében frissítsd kérdéseidet arra az esetre, ha a jövőbeni interjúk során hasonló helyzet adódna.</p>
                            <h2 class="heading-2 has-margin-b30">Tippek egy sikeres interjú levezetéséhez</h2>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Nyugtasd meg az interjú alanyokat, hogy nem őket vizsgáztatjuk, hanem a terméket.</li>
                                <li>Bizonyosodj meg arról, hogy az interjú alanyok meghallgatva érzik magukat. Hagyd őket, hogy kifejtsék válaszaikat a kérdésekre.</li>
                                <li>Nem kell kapkodni. Ha az interjút elsieted, nem kapod meg a kívánt mélyreható, hosszadalmas válaszokat. Hagyj elegendő időt a felhasználónak az egyes kérdések megfontolására, és ne ess zavarba egy-egy rövid csend miatt.</li>
                                <li>Ne használj szaknyelvet. Soha ne feltételezd, hogy az interjúalany ismeri a UX terminológiát. Az olyan kifejezések, mint a "user flow" és az "információs architektúra", az egyének többsége számára értelmetlenek.</li>
                            </ul>
                            <figure>
                                <img src="{{ asset('media/blog/user-interview-reporting.jpg') }}" alt="User interview reporting" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Hogyan rendszerezzük egy felhasználói interjú adatait</h2>
                            <p>Itt az ideje, hogy jelentést készíts az összes összegyűjtött kvalitatív információról. Minél több interjút tartunk, ezek eredményének összeállítása annál nagyobb kihívást jelent. Vannak viszont módszerek a kvalitatív adatok összegzésére, például a szófelhők (word clouds) és a gondolattérképek (mind maps). Azt tanácsoljuk, hogy kövesd a "tematikus elemzés" szakaszait, hogy jobban megértsd az interjú eredményeit. Ez az adatok mintáinak azonosítását, elemzését és értelmezését jelenti. Amit a felhasználói interjúidban hallottál, azok adatok, akkor is ha első látásra nem úgy tűnik!</p>
                            <ol class="list has-padding-l30">
                                <li>Ismerkedj meg adataiddal. Miközben hallgatod a felvételt, készíts sok jegyzetet, vagy írd át a hallottakat.</li>
                                <li>Generálj kódneveket. Ha olyan megjegyzést vagy részt találsz a felvételben, amely különösen érdekes, hozz létre hozzá egy leíró kódnevet – például "összehasonlító termékek". Alkalmazd ugyanazt a kódnevet más megjegyzésekre, amelyekről úgy gondolod, hogy ugyanabba a kategóriába tartoznak.</li>
                                <li>Keress olyan mintákat vagy témákat, amelyek a különböző interjúkban megjelennek. Ez egy iteratív folyamat, nyugodtan mozgathatod a megjegyzéseket a kódnevek között, tematikákat kialakítva. A könnyebb mozgatás érdekében érdemes színes cetlire írni a jegyzeteket.</li>
                                <li>Vizsgáld meg és javítsd a tematikákat. Olvasd el az összes interjúrészletet az egyes tematikákban, és gondold át, hogy összhangban vannak-e egymással. Egyesítsd azokat, amelyek túlságosan hasonlóak, és darabold fel a nem megfelelően koherens csoportokat. Iteratív módon adj hozzá és távolíts el tematikákat, amíg meg nem gyõzõdsz arról, hogy ezek megfelelõen reprezentálják az interjúkból származó meglátásokat.</li>
                                <li>Határozd meg, miről szól a tematika, és adj neki egy megfelelő nevet.</li>
                            </ol>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Egy sikeres felhasználói interjú titkai'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.nocipal')
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
    "datePublished": "2023-01-13T10:00:00",
    "dateModified": "2023-01-13T10:00:00",
    "description": "Egy felhasználói interjút levezetni nem mindenki számára könnyű. De egy kevés felkészüléssel és tapasztalattal, egy UX specialista leghasznosabb eszközévé válhat.",
    "headline": "Egy sikeres felhasználói interjú titkai",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Egy sikeres felhasználói interjú titkai']) }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Lean termékfejlesztés, Startup, UX, Felhasználói interjú",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Egy sikeres felhasználói interjú titkai",
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
                "name": "Egy sikeres felhasználói interjú titkai"
            }
        }
    ]
}
</script>
@endpush
