@section('title', 'Brewie weboldal')
@section('description', 'A startupok világában a sebesség és a rugalmasság elengedhetetlen a sikerhez. 2016-ban a Brewie egy olyan partnert keresett, aki pontosan ezt nyújthatja. Azóta folyamatosan együtt dolgozunk a termék honlapjuk és a tudásközpontjuk készítésén, biztosítva az új funkcionalitások gyors fejlesztését és telepítését.')
@section('preview_image', asset('media/projects/brewie-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Brewie</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Összefoglaló</h2>
                                <p>A startupok világában a sebesség és a rugalmasság elengedhetetlen a sikerhez. 2016-ban a Brewie egy olyan partnert keresett, aki pontosan ezt nyújthatja. Azóta folyamatosan együtt dolgozunk a termék honlapjuk és a tudásközpontjuk készítésén, biztosítva az új funkcionalitások gyors fejlesztését és telepítését.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/brewie-illustration-1.png') }}" alt="Esettanulmányok: Brewie" />
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
                    <img src="{{ asset('media/projects/brewie-logo.png') }}" alt="Esettanulmányok: Brewie logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">Az ügyfél</h2>
                    <p>Az ötlet 2013-ban született, amikor egy baráti társaság, aki gyakran találkozott és sört főzött együtt, rájött, hogy az otthoni sörfőzés túl sok időt, felszerelést és tudást igényel hobbi szinten. Úgy döntöttek, hogy olyan gépet hoznak létre, amely segíthet automatizálni ezt a folyamatot, és mindenki számára könnyen hozzáférhetővé teszi a házi sört. Így született meg a Brewie, a világ első teljesen automatizált házi sörfőzője.</p>
                    <p>Néhány évvel később, számos bemutató és sikeres crowdfunding kampány után a Brewie lett Magyarország egyik legsikeresebb startup cége. A vállalat 2018-ban kiadta a gép frissített verzióját, és jelenleg több száz boldog vásárlónak szállít világszerte.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">A kihívás</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>Fejlesztési szempontból a legfontosabb kihívás egy olyan honlap készítése volt, amely elég rugalmas ahhoz, hogy gyorsan lehessen bővíteni vagy átalakítani. A tartalommarketing is kulcsfontosságú volt, mivel a platform az ügyfelek és a partnerek számára a legfontosabb információforrásként szolgál.</p>
                    <p>Egy másik fontos tényező volt a honlap integrálása a vállalat értékesítési csatornáiba és a marketingkampányaiba.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/brewie-illustration-2.jpg') }}" alt="Esettanulmányok: Brewie" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">A megoldás</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>A Brewie menedzsment, design és marketing csapataival dolgoztunk együtt, hogy megtaláljuk a megfelelő megoldást az információk felépítésére. Két különböző részre osztottuk fel a honlapot, egy termék honlapra és egy tudásközpontra.</p>
                    <p>A termék honlapja a sörfőző gép fő marketing eszköze. Újrahasznosítható sablonok és komponensek segítségével készült, amelyek lehetővé teszik, hogy gyorsan új részeket hozzunk létre vagy megváltoztassuk a jelenlegieket annak érdekében, hogy megfeleljenek a marketing osztály aktuális követelményeinek. A céloldalak, az ügyfelek megszerzésére és a kapcsolatfenntartásra szánt űrlapok is pár perc alatt hozzáadhatóak. Az ebből a forrásból származó összes adatot ezután a Brewie CRM szoftverébe továbbítják egy API segítségével, lehetővé a zökkenőmentes információáramlást, amely magasabb konverziót és több vevői elégedettséget eredményez.</p>
                    <p>A termék honlapjának támogatásához tudásközpontot készítettünk. Amint azt a neve is sugallja, ez a legfontosabb információforrás, a hírek, a felhasználói kézikönyvek és a GYIK helye. A tudásközpont tartalmaz nem nyilvános részeket is különböző partnereknek, mint például a szolgáltató központoknak vagy a forgalmazóknak.</p>
                    <p>A platformot a Chronos, a házon belüli CMS kínálja, amely lehetővé teszi a Brewie munkatársai számára, hogy egyszerűen hozzá tudják adni és szerkeszteni a tartalmat mind a termék honlapján, mind a tudásközpontban.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/brewie-illustration-3.jpg') }}" alt="Esettanulmányok: Brewie" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <img class="project__testimonial__picture" src="{{ asset('media/projects/brewie-attila-szegedi.png') }}" alt="Esettanulmányok: Brewie Attila Szegedi ajánlás" />
                        <blockquote class="project__testimonial__content">
                            <p>A Further testre szabta igényeinknek megfelelően a Chronos nevű adminisztrációs rendszert. Most már tudásplatformunk magjaként szolgál. A platform tökéletesen működik, lehetővé téve számunkra, hogy nagy mennyiségű információt tároljunk és oszthassunk meg a gépünkről és a sörfőzésről.</p>

                            <cite class="project__testimonial__author">Attila SZEGEDI, Társalapító és Head of Design</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">Az eredmény</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>A Brewie új termék honlapja és tudásplatformja azonnal elkezdte az értékesítéseket növelni, ami folyamatosan növekedett az indítás óta. A könnyű moduláris kialakításnak és a kicsi lábnyomnak, valamint a jól megtervezett szerver infrastruktúrának köszönhetően a rendszer sikeresen kezelte a marketingkampányok során tapasztalt forgalomcsúcsokat.</p>
                </div>
                <div class="column">
                    <img class=" is-pulled-right-tablet" src="{{ asset('media/projects/brewie-illustration-4.jpg') }}" alt="Esettanulmányok: Brewie" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">70.000<small>+</small></span>
                        <span class="project__stats__description">egyéni látogató / hó</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">20<small>+</small></span>
                        <span class="project__stats__description">landing oldal</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">11.000<small>+</small></span>
                        <span class="project__stats__description">feliratkozó</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">?</span>
                        <span class="project__stats__description">elfogyasztott korsó sör</span>
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
                            <li>Chronos</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>HTML5</li>
                            <li>SASS-CSS</li>
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
                    @include(getLang() . '.projects.excerpts.cravcitech-weboldal')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.profnet-elearning-platform')
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
                    <h3 class="modal__title">Brewie</h3>
                    <span class="modal__subtitle">Webfejlesztés</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/brewie-gallery-1.jpg') }}" alt="Esettanulmányok: Brewie galéria" />
                    <img src="{{ asset('media/projects/brewie-gallery-2.jpg') }}" alt="Esettanulmányok: Brewie galéria" />
                    <img src="{{ asset('media/projects/brewie-gallery-3.jpg') }}" alt="Esettanulmányok: Brewie galéria" />
                    <img src="{{ asset('media/projects/brewie-gallery-4.jpg') }}" alt="Esettanulmányok: Brewie galéria" />
                    <img src="{{ asset('media/projects/brewie-gallery-5.jpg') }}" alt="Esettanulmányok: Brewie galéria" />
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
                    "name": "Brewie weboldal"
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
    "description": "A startupok világában a sebesség és a rugalmasság elengedhetetlen a sikerhez. 2016-ban a Brewie egy olyan partnert keresett, aki pontosan ezt nyújthatja. Azóta folyamatosan együtt dolgozunk a termék honlapjuk és a tudásközpontjuk készítésén, biztosítva az új funkcionalitások gyors fejlesztését és telepítését.",
    "headline": "Brewie weboldal",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Web design, Chronos CMS",
    "mainEntityOfPage": "{{ localizedRoute('projects.view', ['slug' => $slug]) }}",
    "name": "Brewie weboldal",
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
                "name": "Brewie weboldal"
            }
        }
    ]
}
</script>
@endpush
