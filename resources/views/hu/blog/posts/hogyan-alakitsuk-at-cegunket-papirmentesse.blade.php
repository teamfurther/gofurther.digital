@section('title', 'Digitális vállalkozás: hogyan legyünk papírmentesek?')
@section('description', 'Sokat hallunk mostanában papírmentes vállalkozásokról. De miként tudjuk teljesen papírmentessé tenni a vállalkozásunkat?')
@section('preview_image', asset('media/blog/cover-going-paperless-hu.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-going-paperless.jpg') }}" srcset="{{ asset('media/blog/featured-going-paperless-769w.jpg') }} 769w" sizes="100vw" alt="Hogyan alakítsuk át cégünket papírmentessé?" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Hogyan alakítsuk át cégünket papírmentessé?</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-10-15 12:00:00">2019 október 15</time> &middot; 6 perces olvasás
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
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/mJfjwN1dVIg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p>Egy <a href="{{ localizedRoute('blog.show', ['slug' => 'mikor-hasznaljunk-crm-rendszert']) }}">múltkori cikkben</a> megnéztük, Anna rendezvényszervező cége hogyan jutott el odáig, hogy bevezessenek egy CRM rendszert.</p>
                            <p>Maradjunk is ennél a példánál. A mai cikkben megmutatjuk, hogy hogyan tudja Anna nemcsak az ügyfélkapcsolati rendszereit digitalizálni, hanem a cége többi részét is.</p>
                            <p>A CRM segíti Annát és csapatát a teljes értékesítési folyamat rendszerezésében, majd később az ügyfélprojektek menedzselésében, de az egyéb adminisztratív feladatokban már nem.</p>
                            <p>A szerződéseket továbbra is Wordben vagy egy hasonló szerkesztőben készítik el majd papír alapon tárolják.</p>
                            <p>Hasonlóan, a projekt végén létrehozzák a számlát egy erre szolgáló célszoftverrel. Ezt jobb esetben emailen keresztül, rosszabb esetben papíron eljuttatják az ügyfélhez, illetve a könyvelő irodához.</p>
                            <p>Ezzel a folyamattal több probléma is van, amit Anna hamarosan megtapasztal.</p>
                            <figure>
                                <img src="{{ asset('media/blog/going-paperless-process-crm-hu.png') }}" alt="Egy tipikus dokumentumkezelési folyamattal sok probléma adódhat" />
                                <figcaption>Egy tipikus dokumentumkezelési folyamattal sok probléma adódhat</figcaption>
                            </figure>
                            <p>Elsősorban nagyon magas a hibalehetőség. A kollégái gyakran rosszul töltik ki a szerződéseket, vagy elfelejtik a számlát elküldeni könyvelésre.</p>
                            <p>Ugyanakkor nagyon sok időt is veszítenek azzal, hogy minden egyes dokumentum esetén, ismét elő kell keresni az adatokat. Egy szerződésmódosítás vagy teljesítési igazolás esetén például elő kell keresni az ügyféladatokat, egy részszámla esetén pedig az összegeket.</p>
                            <p>Egy PwC felmérés szerint az átlag irodai alkalmazott csupán 15%-át tölti idejének azzal, hogy információkat felhasznál, ellenben idejének 50%-ban információkat keres.</p>
                            <figure>
                                <img src="{{ asset('media/blog/going-paperless-document-loss-stats-hu.png') }}" alt="Az átlag alkalmazott az ideje nagy részében információt keres" />
                                <figcaption>Az átlag alkalmazott az ideje nagy részében információt keres</figcaption>
                            </figure>
                            <p>De ha Annáék már eleve az összes ügyfélhez kapcsolódó információt és teendőt a CRM-ben tárolják, akkor miért ne lehetne a hozzájuk kötődő dokumentumokat is ott tárolni?</p>
                            <p>Persze ezt meg lehet oldani, úgy hogy a létrejött PDF-eket egyszerűen feltöltik a CRM-be, de ezzel az előbb említett emberi hibák és időveszteség problémáit még nem oldották meg.</p>
                            <p>Ezekre a problémákra viszont létezik egy másik szoftver, a DMS, vagyis a Document Management System. Magyarul dokumentumkezelő-rendszernek szoktuk nevezni őket.</p>
                            <p>Gyakran már a CRM-ekben is vannak olyan funkciók, melyeket a dokumentumkezelő-rendszerekben szokhattunk meg. Azonban egy jól felépített, a CRM-mel is integrált DMS sokkal többet tud ennél.</p>
                            <p>Annáek például a teljes dokumentumkészítési folyamatot automatizálni tudják. Mivel a CRM-ben az ügyféladatok már megvannak, ezért a DMS ezeket át tudja venni és szerződés létrehozásánál már csak a többi adatot, például a határidőket vagy a garanciális feltételeket kell kitöltsék.</p>
                            <p>Teljesítési igazolás és részszámla esetén még ennyit sem kell, hiszen a szoftvernek minden adat rendelkezésére áll, így Anna csapata egyetlen kattintással létre tudja hozni ezeket. Ezt követően a szoftver automatikusan továbbküldi a dokumentumokat az ügyfél számára.</p>
                            <p>Ha bármelyik dokumentumot Anna jóvá szeretné hagyni, mielőtt kimegy az ügyfélhez, a szoftver küldhet neki egy értesítőt, hogy mondjuk 2 dokumentum éppen ellenőrzésre vár. Anna egyetlen kattintással jóvá tudja hagyni vagy vissza tudja küldeni a dokumentumot javításra.</p>
                            <p>Ezekkel a jóváhagyási mechanizmusokkal biztosítja a szoftver azt, hogy semmilyen hibás információ ne jusson el az ügyfelekhez, illetve egy pontos képet ad Annának arról, hogy melyik dokumentum milyen fázisban van. Emellett a szoftver statisztikákat is tud adni arról, melyik munkafázisban vagy melyik kollégánál mekkora a hibák aránya.</p>
                            <p>Mint láthatjuk, Annáek az automatizmusoknak köszönhetően lényegesen redukálták az emberi hibák lehetőségét és rengeteg időt megtakarítanak, melyet amúgy adminisztratív feladatokkal töltenének.</p>
                            <figure>
                                <img src="{{ asset('media/blog/going-paperless-process-crm-dms-hu.png') }}" alt="Egy DMS segítségével időt tudunk megtakarítani és redukálni tudjuk az emberi hibák lehetőségét" />
                                <figcaption>Egy DMS segítségével időt tudunk megtakarítani és redukálni tudjuk az emberi hibák lehetőségét</figcaption>
                            </figure>
                            <p>A hibák redukálásában tovább segít a verziókövetés. Egy dokumentumkezelő-rendszer az összes fájl, összes verzióját és módosítását naplózza. Így később visszanézhetjük, ki mikor és mit változtatott egy dokumentumon.</p>
                            <p>Bár ezek a legnagyobb megtakarításokat hozó előnyei egy DMS-nek, több más szempontról is beszélhetünk.</p>
                            <p>Mivel egy DMS már minden dokumentumot a felhőben tárol, cégünket egy kis extra erőfeszítéssel teljesen papírmentessé tehetjük.</p>
                            <p>Sokat hallunk mostanában papírmentes vállalkozásokról, hiszen a környezettudatosság dícsérendő, és hogy őszinték legyünk, jól reklámozható is. De a háttérben gazdasági okok is vannak.</p>
                            <p>A már említett PwC riport szerint a papíralapú dokumentumok 7.5%-a elveszik vagy megrongálódik. A fennmaradó dokumentumok 3%-a pedig rossz helyen lett tárolva.</p>
                            <p>Egy rosszul tárolt dokumentum megkeresésének munkabére átlagosan $120, míg egy eltűnt dokumentum újbóli létrehozása $220.</p>
                            <p>Gyors fejszámolással is kiszámíthatjuk, hogy óriási összegeket tudunk megtakarítani, ha nem papír alapon dolgozunk, és akkor még nem is beszéltünk a nyomtatási költségekről vagy a papír tárolási költségeiről.</p>
                            <figure>
                                <img src="{{ asset('media/blog/going-paperless-work-search-stats-hu.png') }}" alt="Nem nehéz kiszámolni, hogy a papír alapú dokumentumtárolás hamar kölségessé válhat" />
                                <figcaption>Nem nehéz kiszámolni, hogy a papír alapú dokumentumtárolás hamar kölségessé válhat</figcaption>
                            </figure>
                            <p>Természetesen ha csak ez az egy szempont érdekel minket, akkor ez megoldható Office 365-ben vagy Google Drive-ban is.</p>
                            <p class="has-margin-b60">Viszont ha szeretnénk kihasználni egy DMS egyéb előnyeit is, például az automatikus dokumentumgenerálást vagy a jóváhagyási mechanizmusokat, akkor érdemes utánanézni, hogy milyen DMS szoftverek elérhetőek számunkra. Lehetőleg olyat válassz, amely integrálva van a CRM megoldásotokkal és egyéb szoftveres rendszereitekkel.</p>
                            <p>Amennyiben érdekel benneteket egy DMS rendszer bevezetése, vagy összekötnétek a meglévő dokumentumkezelő-rendszereteket a többi szoftveretekkel, keressétek a Further munkatársait, és segítünk megtalálni a megfelelő megoldást.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Hogyan alakítsuk át cégünket papírmentessé?'])
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
    "datePublished": "2019-10-15T12:00:00",
    "dateModified": "2019-10-15T12:00:00",
    "description": "Sokat hallunk mostanában papírmentes vállalkozásokról. De miként tudjuk teljesen papírmentessé tenni a vállalkozásunkat?",
    "headline": "Digitális vállalkozás: hogyan legyünk papírmentesek?",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-going-paperless-hu.jpg') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "DMS, Document Management System, Dokumentumkezelés, Dokumentumkezelő-rendszer, CRM, Customer Relationship Management, Ügyfélkezelés, Ügyfélkezelő-rendszer, Digitális Vállalkozás, Digitális Transzformáció, ERP, Vállalatirányítás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Digitális vállalkozás: hogyan legyünk papírmentesek?",
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
                "name": "Digitális vállalkozás: hogyan legyünk papírmentesek?"
            }
        }
    ]
}
</script>
@endpush
