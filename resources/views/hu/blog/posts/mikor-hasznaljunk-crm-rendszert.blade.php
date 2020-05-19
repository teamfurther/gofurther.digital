@section('title', 'Mikor érdemes bevezetni egy CRM rendszert?')
@section('description', 'Az ügyfélmenedzsment folyamatait illetően a legtöbb vállalkozás ugyanazokon a fázisokon megy keresztül. De mikortól érdemes bevezetni egy CRM rendszert?')
@section('preview_image', asset('media/blog/cover-when-is-it-time-to-use-a-crm-hu.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-when-is-it-time-to-use-a-crm.jpg') }}" srcset="{{ asset('media/blog/featured-when-is-it-time-to-use-a-crm-769w.jpg') }} 769w" sizes="100vw" alt="Mikor használjunk CRM rendszert?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Mikor használjunk CRM rendszert?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-09-11 12:00:00">2019 szeptember 11</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/HlwyL21vR5I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p class="has-margin-b60">Az ügyfélmenedzsment folyamatait illetően a legtöbb vállalkozás ugyanazokon a fázisokon megy keresztül.</p>
                            <p>Vegyünk egy példát. Anna egyéni vállalkozóként rendezvényszervezéssel foglalkozik. Kezdetben egyedül ő felelős az ügyfélkapcsolatért. Ilyenkor az ügyfelek adatai még a telefonja névjegyzékében vannak, a hozzájuk tartozó tennivalókat pedig Anna könnyen megjegyzi.</p>
                            <p>Később, ahogy nő az ügyfelek száma és a projektek komplexitása, emlékeztetőket állít be és elkezdi az e-maileket fontosságuk szerint mappákba rendezni.</p>
                            <p>Ahogy tovább nő a megrendelések száma, Anna céget alapít és felvesz egy értékesítőt, valamint egy projektmenedzsert. Most már az ügyféladatokat és teendőket mindhármójuknak látnia kell, ezért az, hogy mindezek Anna telefonjában vannak, nem túl szerencsés. A természetes lépés az, hogy az ügyfeleket és a hozzájuk tartozó eseményeket és tennivalókat felvezetik egy közös Excel táblába.</p>
                            <figure>
                                <img src="{{ asset('media/blog/when-is-it-time-to-use-a-crm-timeline-meeting-memo.jpg') }}" alt="Az emlékeztetők írása már nem lesz elegendő" />
                                <figcaption>Az emlékeztetők írása már nem lesz elegendő</figcaption>
                            </figure>
                            <p>Ez a megoldás azonban sajnos csak tűzoltásnak jó: nehezen átlátható és csak egy adott pontig növelhető. Anna hamarosan olyan kérdésekkel szembesül kollégáitól: ki lett már küldve az árajánlat? Vagy: meg lett már rendelve az óriás csokitorta?</p>
                            <p class="has-margin-b60">Ha már idáig eljutott, akkor Annának egyértelműen szüksége van egy olyan rendszerre, amely keretet ad az ügyfélkapcsolati és értékesítési folyamatoknak.</p>
                            <p class="has-margin-b60">Ez a rendszer nem más, mint a CRM, avagy a Customer Relationship Management, magyarul ügyfélkapcsolat-kezelő rendszer. Rengeteg fajta CRM létezik: dobozos termékek és testreszabható fejlesztések egyaránt, kiválasztásukkal pedig egy <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-valasszuk-ki-a-megfelelo-crm-rendszert']) }}">külön cikkben</a> foglalkozunk.</p>
                            <h2 class="heading-2 has-margin-b30">Miben segít egy CRM?</h2>
                            <p class="has-margin-b60">Alapjában véve az összes CRM az ügyfélszerzést és ügyfél kapcsolattartást támogatja, és ugyanazokat az alapvető problémákat oldja meg.</p>
                            <h3 class="heading-3 has-margin-b30">Adatok rendszerezése</h3>
                            <p>Egy CRM rendszerezi az összes ügyfélkapcsolathoz kötödő adatot egyetlen helyre, általában a felhőbe. Ezáltal biztosítja azt, hogy a teljes csapatunk számára bárhonnan, bármikor és bármilyen eszközről elérhető lesz minden adatunk.</p>
                            <p>A legtöbb CRM képes ezeket az adatokat különböző forrásokból beimportálni. Lehetőségünk van összekötni a CRM-et kedvenc levelező programunkkal, telefonunkkal, vagy például a weboldalról vagy hírlevél kampányból érkező érdeklődők adatait feldolgozni benne.</p>
                            <p>Sőt, egyes CRM-ek arra is képesek, hogy különböző külső forrásokból, például LinkedInről vagy Facebookról, automatikusan begyűjtsenek olyan információkat az ügyfélről, melyek segítenek nekünk az értékesítési folyamatban.</p>
                            <figure>
                                <img src="{{ asset('media/blog/when-is-it-time-to-use-a-crm-data-sources-hu.png') }}" alt="A legtöbb CRM képes ezeket az adatokat különböző forrásokból feldolgozni" />
                                <figcaption>A legtöbb CRM képes ezeket az adatokat különböző forrásokból feldolgozni</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Ügyfélkommunikáció segítése</h3>
                            <p>Egy CRM-ben könnyedén követhetjük azt is, hogy milyen kommunikáció zajlott eddig az ügyféllel és milyen feladatokat kell még elvégeznünk. Ezt általában idővonalas megjelenítésben láthatjuk, ami átláthatóvá teszi, hogy melyik feladatért ki a felelős és megkönnyíti a feladatok átadását, ha mondjuk, egyik csapattagunk éppen szabadságon van.</p>
                            <p>Emellett minden feladatról értesítést kapunk, így elkerülhetőek azok a kellemetlen helyzetek, amikor megfeledkezünk egy ügyfélről vagy megcsúszunk a kommunikációval.</p>
                            <figure>
                                <img src="{{ asset('media/blog/when-is-it-time-to-use-a-crm-timeline.png') }}" alt="Az idővonalas megjelenítések segítenek abban, hogy könnyen átlássuk milyen kommunikáció zajlott eddig az ügyféllel és milyen feladatokat kell még elvégeznünk" />
                                <figcaption>Az idővonalas megjelenítések segítenek abban, hogy könnyen átlássuk milyen kommunikáció zajlott eddig az ügyféllel és milyen feladatokat kell még elvégeznünk</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Értékesítési csatornák</h3>
                            <p>A harmadik dolog, amit egy CRM ad, a sales pipeline-ok, vagyis az értékesítési folyamatok. A CRM-ek többsége 4 és 7 közötti értékesítési szakaszt határoz meg, de gyakran előfordul az is, hogy ez teljesen személyre szabható, ilyenkor olyan szakaszokat állíthatunk fel magunknak, amilyeneket csak szeretnénk.</p>
                            <p>Például Anna rendezvényszervező cégében meghatározhat 4 értékesítési szakaszt, amibe besorolják az ügyféljelölteket:</p>
                            <ul class="list has-bullets has-margin-b30">
                                <li>érdeklődők</li>
                                <li>lehetséges ügyfelek</li>
                                <li>ajánlatot kérők</li>
                                <li>vásárlók</li>
                            </ul>
                            <p>Minden szakaszhoz feladatokat társíthat. Egy érdeklődőhöz például egy igényfelmérő telefonhívás teendőt társít. Egy lehetséges ügyfélhez, tehát egy már kvalifikált érdeklődőhöz, pl. egy árajánlat készítési feladatot. Egy olyan érdeklődőhöz, aki már kapott árajánlatot, akár azt is be tudja állítani, hogy a CRM milyen gyakran küldjön e-mailes utánkövetést.</p>
                            <figure>
                                <img src="{{ asset('media/blog/when-is-it-time-to-use-a-crm-sales-pipeline-hu.png') }}" alt="Az értékesítési csatorna az egyik legfontosabb eszköz amit egy CRM nyújt" />
                                <figcaption>Az értékesítési csatorna az egyik legfontosabb eszköz amit egy CRM nyújt</figcaption>
                            </figure>
                            <p class="has-margin-b60">Ha az értékesítési folyamatunkat ezekhez hasonló, jól meghatározott, ismételhető és mérhető lépésekre bontjuk, értékesítési törekvéseink tervezhetővé válnak és így az eladásainkat már nemcsak a véletlennek köszönhetjük, hanem egy hatékony folyamat eredményeként tekinthetünk majd rájuk.</p>
                            <h2 class="heading-2 has-margin-b30">Következtetés</h2>
                            <p>Térjünk akkor vissza cikkünk fő kérdéséhez: mikor használjunk CRM rendszert? Általánosságban véve: amint lehetséges vevőkkel állunk kapcsolatban, már használhatunk CRM-et.</p>
                            <p>De vajon érdemes is?</p>
                            <p>Mi akkor ajánljuk egy CRM rendszer bevezetését, ha a következő kritériumok közül legalább az egyik érvényes a vállalkozásunkra:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>nem elérhetőek az adatok könnyen egy központi helyről</li>
                                <li>nem tudjuk ki a felelős egy-egy feladatért</li>
                                <li>megfeledkezünk a határidőkről</li>
                                <li>nincs egy jól meghatározott értékesítési folyamatunk</li>
                                <li>túl sok időt vesz igénybe az ügyfélmenedzsment</li>
                                <li>értékesítési csapatunk eléri a 2-3 főt</li>
                            </ul>
                            <p>Amennyiben szeretnél többet megtudni arról, hogyan segíthet egy szoftver az ügyfélkapcsolat menedzsmentben és értékesítési folyamatban, lépj velünk kapcsolatba, szívesen beszélgetünk  elképzeléseidről és a lehetséges megoldásokról.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Mikor érdemes bevezetni egy CRM rendszert?'])
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
    "datePublished": "2019-09-11T12:00:00",
    "dateModified": "2019-09-11T12:00:00",
    "description": "Az ügyfélmenedzsment folyamatait illetően a legtöbb vállalkozás ugyanazokon a fázisokon megy keresztül. De mikortól érdemes bevezetni egy CRM rendszert?",
    "headline": "Mikor érdemes bevezetni egy CRM rendszert?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-when-is-it-time-to-use-a-crm-hu.jpg') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "CRM, Customer Relationship Management, Ügyfélkezelés, Ügyfélkezelő-rendszer, Digitális Vállalkozás, Digitális Transzformáció, ERP, Vállalatirányítás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Mikor érdemes bevezetni egy CRM rendszert?",
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
                "name": "Mikor érdemes bevezetni egy CRM rendszert?"
            }
        }
    ]
}
</script>
@endpush
