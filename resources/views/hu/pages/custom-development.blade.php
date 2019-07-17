@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('content')
    <section class="hero is-green">
        <div class="hero__video">
            <a class="hero__video__thumb" data-toggle="modal" data-target="#video-modal">
                <img src="{{ asset('img/presentation-video-thumb.png') }}" alt="Tekintse meg bemutató videónkat" />
            </a>
        </div>
        <a class="hero__cta" data-toggle="modal" data-target="#video-modal">
            Szeretné megtudni miben segíthetünk?<strong>Tekintse meg videónkat</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#jelek') }}"></a>
    </section>

    <section class="section" id="jelek">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading"><strong>5 jel</strong>hogy érdemes egy szoftverbe befektetnie</h2>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">1</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Nem látja át az adatokat<br />amik szükségesek a döntéshozáshoz</h3>
                    <p>Az üzlet gyorsabban pörög, mint bármikor. A hatékony üzleti intelligencia a gyors adatelemzésre alapszik, de ha az adatok több Excel táblázatba vannak lementve, vagy még rosszabb, papír alapon vannak tárolva, akkor Ön és csapattagjai nehezen jutnak a megfelelő információhoz.</p>
                    <p>Ha az összes információ egységesítve és központosítva van egy integrált szoftverrendszerbe, a menedzsment bármikor egy holisztikus képet kaphat a bármikori helyzetről, míg a többi csapattag részére minden egyes hatékony munkavégzéshez szükséges adat hozzáférhető lesz.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">2</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Automatizálható feladatokra<br />vesztegeti az időt</h3>
                    <p>A <a href="https://www.mckinsey.com/featured-insights/future-of-work/jobs-lost-jobs-gained-what-the-future-of-work-will-mean-for-jobs-skills-and-wages#part1" target="_blank">McKinsey jelentése</a> szerint az irodai dolgozók közel 60%-a legalább 6 órával kevesebbet dolgozna hetente bizonyos feladatok automatizálásával. Egy integrált szoftvermegoldás képes az összes folyamatot elejétől végéig kezelni, így az alkalmazottai az értékes munkaóráikat valóban értékes munkával tölthetik el.</p>
                    <p>Azt tapasztaltuk, hogy a legnagyobb termelékenységnövelő tényezők az automatikus jóváhagyások, az állapotfrissítések és az adatgyűjtés. Ezek nemcsak az ismétlődő munkára fordított időt, hanem az emberi hibák lehetőségének arányát is csökkentik.</p>
                    <p>Ennek további előnye, hogy csapata pozitív fényben látja majd az automatizálást, amely lehetőséget biztosít arra, hogy nemcsak munkájuk, de a személyes életük jobb legyen.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">3</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Elavult IT<br />infrastruktúrával rendelkezik</h3>
                    <p>Az informatikai részlegtől való függés, a gyakori hardverfrissítések vagy a folyamatosan növekvő licencköltségek arra utalnak, hogy Ön elavult informatikai infrastruktúrát használ.</p>
                    <p>A KKV-k kétharmada elavult verziójú üzleti szoftvereket futtat, időt, pénzt és kritikus erőforrásokat pazarol.</p>
                    <p>Ahelyett, hogy egy már elavult rendszert toldozzon-foldozzon, gyakran jobb, ha egy modern szoftvermegoldásra vált, amely lehetővé teheti a változó üzleti igényekre való gyors választ.</p>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">4</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Több szoftvert használ,<br />amelyek nem kommunikálnak egymással</h3>
                    <p>A legtöbb vállalkozás különböző szoftvereket futtat a különböző részlegeken. A CRM (ügyfélkapcsolat-kezelés) segíti az értékesítési csapatot, de van egy leltárrendszer, egy számviteli szoftver is és így tovább.</p>
                    <p>Annak ellenére, hogy nagyszerűen működnek azon a részlegen, ahol használják ezeket, sok olyan információt tartalmaznak, amelyek láthatatlanok a csapat többi részének. </p>
                    <p>Az adatok sokszorosítása a rendszerekben növeli a hibalehetőséget és végső soron egy szükségtelen folyamat. Egy központi információforrásként működő szoftvermegoldás segítségével mindeki ugyanahhoz a pontos, naprakész tudáshoz fér hozzá, amely lehetővé teszi a jobb döntések meghozatalát.</p>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column has-text-centered is-3-mobile is-2-tablet is-offset-2-tablet is-1-desktop is-offset-3-desktop">
                    <div class="list-hero">5</div>
                </div>
                <div class="column is-9-mobile is-6-tablet is-5-desktop">
                    <h3 class="heading-4">Nem használja ki a felhő- és <br />a mobilmegoldások adta lehetőségeket</h3>
                    <p>Napjainkban, ha a csapata nem tudja bárhol elérni az információkat, és nem tud a munkával bárhol haladni, akkor veszít a versenytársaival szemben. Gondoljon csak az értékesítési csapatára, amely nem fér hozzá a készletkimutatáshoz amikor terepmunkán van, vagy ha a vezetőség nem fér hozzá a jelentésekhez az üzleti találkozókon.</p>
                    <p>A modern felhőalapú szoftver gyorsan méretezhető, olcsóbban karbantartható, minden mobileszközre reszponzív interfészt kínál, és lehetővé teszi a csapata számára, hogy útközben hozzáférjen az információkhoz és frissítse ezeket, folyamatosan fejlesztve üzleti tevékenységét.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--services">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Megoldásainkkal segíthetünk!</div>
                            <a class="btn is-large is-primary" href="{{ localizedRoute('solutions') }}">Nézze meg hogyan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="hero-heading">Akik korábban már<strong>minket választottak</strong></h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <img class="project__testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>Nem tudnám elképzelni, hogyan működne a termékfejlesztésünk a Hive nélkül. Bevezetése óta az új termékek fejlesztésének ideje 20%-al csökkent, minden adatunk rendszerezett és könnyen utánkövethető.</p>
                        <cite class="project__testimonial__author">DEMETER Adorian, nJoy</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-offset-2-tablet">
                    <img class="project__testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-edina-bakk.png') }}" alt="Harborsz Edina Bakk testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>Számunkra a Harborsz Logistics szoftver legnagyobb előnye, hogy egy komplett, integrált rendszert kaptunk. Többé nem kell folyton különböző programok és emailek között váltogatva lebonyolítsuk a mindennapi ügyvitelt.</p>
                        <p>Ez jelentősen csökkentette az emberi hibák lehetőségét és növelte a produktivitásunkat.</p>
                        <cite class="project__testimonial__author">BAKK Edina, Harborsz Logistic</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="cta cta--projects">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="container">
                            <div class="heading-2">Szeretne többet megtudni munkáinkról?</div>
                            <a class="btn is-large is-primary" href="{{ localizedRoute('projects') }}">Esettanulmányok</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@push('content-modals')
<div class="modal is-centered-vertical" id="video-modal" tabindex="-1" role="dialog">
    <div class="modal__dialog is-large">
        <div class="modal__content">
            <div class="video-container">
                <iframe width="880" height="495" src="https://www.youtube.com/embed/mP1choUB52Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div><!-- /.modal__content -->
    </div><!-- /.modal__dialog -->
</div><!-- /.modal -->
<div class="modal__backdrop"></div>
@endpush



@push('structured-data')
<script type="application/ld+json">
{
    "@context": "http://schema.org",
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
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "alternateName": "{{ config('site.company.name') }}",
    "author": {
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
    "breadcrumb": {
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
                    "@id": "{{ localizedRoute('custom-development') }}",
                    "name": "Egyedi szoftverfejlesztés"
                }
            }
        ]
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
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "Egyedi szoftverfejlesztés, Integrált szoftveres megoldások, ERP fejlesztés, Webfejlesztés",
    "mainEntityOfPage": "{{ localizedRoute('home') }}",
    "name": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "publisher": {
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
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
    "url": "{{ config('app.url') }}"
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "alternateName": "{{ config('site.company.name') }}",
    "author": {
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
        "url": "https://gofurther.digital"
    },
    "creator": {
        "@type": "Organization",
        "alternateName": "{{ config('site.company.name') }}",
        "name": "Further Digital Solutions"
    },
    "description": "{{ config('site.description.' . config('app.locale')) }}",
    "image": "{{ asset('img/logo.svg') }}",
    "name": "Further Digital Solutions",
    "sameAs": ["{{ config('site.social.facebook') }}","{{ config('site.social.twitter') }}","{{ config('site.social.linkedin') }}","{{ config('site.social.instagram') }}","{{ config('site.social.medium') }}"],
    "url": "{{ config('app.url') }}"
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
                "@id": "{{ config('app.url') }}",
                "name": "Főoldal"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('custom-development') }}",
                "name": "Egyedi szoftverfejlesztés"
            }
        }
    ]
}
</script>
@endpush
