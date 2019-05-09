@section('title', 'IDEA e-tanulási szoftver')
@section('description', 'Mivel úttörő szerepet játszik a búvároktatás területén, az IDEA gyorsan felismerte a technológia és a jól bevált tanítási gyakorlataik ötvözésében rejlő lehetőségeket, és leszerződtetett bennünket egy e-tanulási platform fejlesztésére.')
@section('preview_image', asset('media/projects/idea-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">IDEA e-tanulási szoftver</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Összefoglaló</h2>
                                <p>Mivel úttörő szerepet játszik a búvároktatás területén, az IDEA gyorsan felismerte a technológia és a jól bevált tanítási gyakorlataik ötvözésében rejlő lehetőségeket, és leszerződtetett bennünket egy e-tanulási platform fejlesztésére.</p>
                                <p>Az IDEA-val 2012 óta működünk együtt, és az elmúlt 9 évben folyamatosan építettük a platformot, amelyet most már 7 ország tanulói használnak.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/idea-illustration-1.png') }}" alt="Esettanulmányok: IDEA" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-hidden-touch">
                    <img src="{{ asset('media/projects/idea-logo.png') }}" alt="Esettanulmányok: IDEA logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">Az ügyfél</h2>
                    <p>Ügyfelünk az IDEA Németország, Ausztria és Közép-Európa, a Nemzetközi Búvároktatói Szövetség leányvállalata. Az IDEA eredetileg 1952-ben alakult az FSDA (Floridai Búvárszövetség) részeként. Európában az első központjuk 1992-ben akakult Olaszországban. 1995 elejétől az olasz központ lett az IDEA Európa székhelye is, amelynek több európai országban van regionális irodája és oktatója.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">A cél</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>A cél olyan rendszer tervezése volt, amely az összes oktatáshoz kapcsolódó tevékenységet központosítja és általánosan hozzáférhetővé teszi. Minden anyag, tanfolyam és nyilvántartás kinyitható, letölthető és nyomtatható kellett legyen bárhonnan, az osztályteremből vagy a tengerpartról.</p>
                    <p>Az egyik fő funkcionalitás a 6 különböző nyelven elérhető tanfolyamrendszer. A tanfolyamok tartalmazzák a tanulmányi anyagokat és automatikusan kiértékelik a teszteket. Az alkalmazás megtervezése során az egyik érdekes kihívás a kurzusok egymáshoz való függőségi kapcsolata volt, amely megakadályozza a felhasználók hozzáférését egy kurzushoz anélkül, hogy előzetesen teljesítenék a kötelező előkurzusokat.</p>
                    <p>A másik fő funkcionalitás a hallgatói nyilvántartási rendszer. A nyilvántartás elérhető kell legyen a diákok és az oktatóik számára, és tartalmaznia kell a hallgató fejlődésével kapcsolatos összes információt, például a tanúsítványokat, a teszteredményeket, a medence- és a nyíltvízi leckék jegyeit, a fizetési státuszt stb. Ez lehetővé teszi a képzési folyamat naprakész áttekintését.</p>
                    <p>Az egyéb funkcionalitások közé tartozik a hozzáférés-szabályozási modul, amely lehetővé teszi a különböző felhasználói szerepek (adminisztrátorok, oktatóképzők, oktatók, hallgatók) kezelését, egy nemzetközi modul, amely 6 nyelvre lefordítja az összes tartalmat, egy médiatár, egy privát üzenetkezelő rendszer, amely segíti a hallgatók és oktatók közötti kommunikációt és egy hírlevélmodul.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/idea-illustration-2.jpg') }}" alt="Esettanulmányok: IDEA" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">Az eredmény</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>Az eredményezett alkalmazást jelenleg 170 búvároktatáson résztvevő diák használja 7 országban. A hallgatók elmélyíthetik tudásukat a tanfolyamokon és az online teszteken való részvétel által, míg az oktatók gyorsan hozzáférhetnek a diákjaikhoz kapcsolódó információkhoz.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/idea-illustration-3.jpg') }}" alt="Esettanulmányok: IDEA" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">6</span>
                        <span class="project__stats__description">nyelv</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">170</span>
                        <span class="project__stats__description">diák</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">55</span>
                        <span class="project__stats__description">kurzus</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">630</span>
                        <span class="project__stats__description">elvégzett teszt</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__tech-stack">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="heading-2">Alkalmazott technológiák</h2>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <ul class="project__tech-stack__list">
                            <li>CodeIgniter</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>Apache</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__gallery">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-2">Szeretne többet látni ebből a projektből?</div>
                        <a class="btn is-large is-primary" data-toggle="modal" data-target="#project-gallery">Látogassa meg a galériát</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">Egyéb esettanulmányok</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    @include(getLang() . '.projects.excerpts.profnet-elearning-platform')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.njoy-the-hive')
                </div>
            </div>
        </div>
    </section>
@endsection

@push('content-modals')
    <div class="modal" id="project-gallery" tabindex="-1" role="dialog">
        <div class="modal__dialog is-large">
            <div class="modal__content">
                <div class="modal__header">
                    <a class="modal__close" data-dismiss="modal">&times;</a>
                    <h3 class="modal__title">IDEA</h3>
                    <span class="modal__subtitle">e-tanulás platform</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/idea-gallery-1.jpg') }}" alt="Esettanulmányok: IDEA galéria" />
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
    "@type": "WebPage",
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
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Munkáink"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                    "name": "IDEA e-tanulási szoftver"
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
    "description": "Mivel úttörő szerepet játszik a búvároktatás területén, az IDEA gyorsan felismerte a technológia és a jól bevált tanítási gyakorlataik ötvözésében rejlő lehetőségeket, és leszerződtetett bennünket egy e-tanulási platform fejlesztésére.",
    "headline": "IDEA e-tanulási szoftver",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "e-learning szoftver, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
    "name": "IDEA e-tanulási szoftver",
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
                "@id": "{{ localizedRoute('projects') }}",
                "name": "Munkáink"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
                "name": "IDEA e-tanulási szoftver"
            }
        }
    ]
}
</script>
@endpush
