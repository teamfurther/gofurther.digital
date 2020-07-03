@section('title', 'Harborsz Logistic esettanulmány')
@section('description', 'Együttdolgozva a Harborsz csapatával, egy olyan rendszert fejlesztettünk, amely lefedi a tevékenységük összes területét.')
@section('preview_image', asset('media/projects/harborsz-facebook-cover.jpg'))

@section('content')
    <section class="hero is-{{ getLang() }}">
        <h2 class="project__title">Harborsz Logistic</h2>
        <h3 class="project__intro">
            Együtt dolgozva a Harborsz csapatával, egy olyan rendszert fejlesztettünk, amely lefedi a tevékenységük összes területét.
        </h3>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h4 class="heading-1">Összefoglaló</h4>
                    <p>
                        A Harborsz fő tevékenysége a teherszállítás megszervezése kompon, hidakon és alagutakon át. A jelenlegi rendszer fejlesztése előtt, a napi teendők elvégzéséhez több különböző szoftver és az email applikáció közötti folyamatos váltogatásra volt szükség.
                    </p>
                    <p>
                        Az új integrált ügyviteli megoldásnak köszönhetően a Harborsznak sikerült teljes mértékben automatizálni a folyamataikat, redukálni az emberi hibákat és átlátni a működésük összes aspektusát.
                    </p>
                </div>
                <div class="column is-centered-vertical is-hidden-mobile">
                    <img src="{{ asset('media/projects/harborsz-illustration.gif') }}" alt="Harborsz Logistic" />
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__summary">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        A szoftvert először a romániai Harborsznál vezették be, de azóta már az összes nemzetközi fiók is elkezdte használni. Ez idő alatt több mint 127 000 foglalást dolgoztak fel.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="project__overview">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <h4 class="heading-1">Kulcsproblémák és megoldások</h4>
                    </div>
                </div>
                <div class="columns is-reversed">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Az útdíjak és kompjegyek foglalása egy manuális folyamat volt</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Minden esetben, amikor egy szállításhoz útdíj fizetésére vagy kompoztatásra volt szükség, a foglalásokat manuálisan kellett megkötni. Ez vagy emailen keresztül, vagy egy harmadik fél rendszerén keresztül történt.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Egy pár előzetes egyeztetés után, az összes beszállító rendszerét sikeresen <strong>integráltuk API kapcsolatokon keresztül</strong>. Ez lehetővé tette az útdíjak és kompjegyek automatikus foglalását.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/harborsz-overview-1.png') }}" alt="Harborsz - Az útdíjak és kompjegyek foglalása egy manuális folyamat volt" />
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-centered-vertical">
                        <h5 class="heading-3">Az ügyfelek csak közvetlenül a Harborszon keresztül tudtak foglalni</h5>
                        <em class="project__text-emphasis">Probléma</em>
                        <p>
                            Korábban, ha egy ügyfél foglalást szeretett volna indítani, ezt csak a Harborsz weboldalon keresztül tudták megtenni. Emiatt nem tudták a saját folyamataikat automatizálni.
                        </p>
                        <em class="project__text-emphasis">Megoldás</em>
                        <p>
                            Az ügyfelektől beérkezett visszajelzések alapján egyértelművé vált az igény egy <strong>automatizált foglalási folyamatra</strong>. Miután részletesen interjúztattuk őket, sok értékes információt tudtunk meg arról, hogy milyen felhasználási eseteik vannak. Ezek alapján egy olyan API kapcsolatot dolgoztunk ki, amely lefedi az összes üzleti igényüket.
                        </p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('media/projects/harborsz-overview-2.png') }}" alt="Harborsz - Az ügyfelek csak közvetlenül a Harborszon keresztül tudtak foglalni" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                        <img class="project__testimonial__picture" src="{{ asset('img/testimonials-edina-bakk.png') }}" alt="Harborsz Edina Bakk testimonial" />
                        <cite class="project__testimonial__author">BAKK Edina</cite>
                        <blockquote class="project__testimonial__content">
                            <p>
                                "Számunkra a Harborsz Logistic szoftver legnagyobb előnye, hogy egy komplett, integrált rendszert kaptunk. Többé nem kell folyton különböző programok és emailek között váltogatva lebonyolítsuk a mindennapi ügyvitelt.
                            </p>
                            <p>
                                Ez jelentősen csökkentette az emberi hibák lehetőségét és növelte a produktivitásunkat."
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h4 class="heading-1">
                        Tapasztalataink
                    </h4>
                </div>
            </div>
            <div class="columns has-margin-b60 is-mobile">
                <div class="column is-2-mobile is-1-tablet is-offset-1-tablet is-1-widescreen is-offset-2-widescreen">
                    <div class="list-hero">↪</div>
                </div>
                <div class="column is-9-tablet is-7-widescreen">
                    <h5 class="heading-4">
                        A külső rendszerek bekötése nehéz feladat
                    </h5>
                    <p>
                        Mindegyik beszállítói rendszernek saját hozzáférési mechanizmusa volt. Egyesek jól dokumentált API hozzáféréssel rendelkeztek, másokhoz csak FTP hozzáférés volt. Egyes API-k SOAP alapúak voltak, mások REST típusúak.
                    </p>
                    <p>
                        Az egyik legfőbb kihívásunk az volt, hogy kifejlesszünk egy olyan közös felületet, ami eléggé flexibilis ahhoz, hogy a különböző rendszerekkel tudjon kommunikálni, de ugyanakkor bővíthető is, hogy később akár új kapcsolatokat is hozzá tudjunk adni.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <a class="project__gallery" data-toggle="modal" data-target="#gallery-modal">
            <img src="{{ asset('media/projects/harborsz-gallery.jpg') }}" alt="Galéria megnyitása" />

            <span class="btn is-large">Galéria megnyitása</span>
        </a>
    </section>

    <section class="section">
        <div class="project__contact">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="heading-1">Neked miben segíthetünk?</div>
                        <a class="btn is-large" href="{{ localizedRoute('contact') }}">
                            Kérj egy ingyenes konzultációt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.projects.banners.' . $bannerSlug)
@endsection

@push('content-modals')
    <div class="modal" id="gallery-modal" tabindex="-1" role="dialog">
        <div class="container">
            <div class="project__gallery-modal">
                <div class="columns is-multiline">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/harborsz-gallery-1.jpg') }}" alt="Harborsz Logistic" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes">
                            <h5 class="project__gallery-modal__title">Foglalások</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A "Foglalások" képernyőn történik az aktivitás legnagyobb része. Minden beérkező rendelés, a weboldalról vagy az API-któl, ide fut be.
                                </p>
                                <p>
                                    A legtöbb foglalást a rendszer automatikusan feldolgozza: a díjszámítást és számlázást a rendszer automatikusan kezeli.
                                </p>
                                <p>
                                    Ahol ez nem lehetséges, a szoftver egyértelműen jelzi egy humán operátornak, hogy manuális beavatkozásra van szükség.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline is-reversed">
                    <div class="column is-12-tablet is-8-desktop">
                        <img class="project__gallery-modal__image" src="{{ asset('media/projects/harborsz-gallery-2.jpg') }}" alt="Harborsz Logistic" />
                    </div>
                    <div class="column is-12-tablet is-4-desktop">
                        <div class="project__gallery-modal__notes is-reversed">
                            <h5 class="project__gallery-modal__title">Dinamikus árazás</h5>
                            <div class="project__gallery-modal__description">
                                <p>
                                    A teljes automatizáció elsősorban a dinamikus árazásnak köszönhető. Több tucat változót veszünk figyelembe, amikor egy utat árazunk: a jármű mérete és súlya, a szállítmány típusa, sofőrök száma, az út hossza, a csúcsszezonok, a kikötői díjak és a beszállítói költségek.
                                </p>
                                <p>
                                    Előre meghatározott időszakokban részletes riportokat generálunk ezekről, hogy a Harborsz igazítani tudja a díjakat annak érdekében, hogy a költségeket fedezni és az árréseket növelni tudja.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns has-text-centered">
                    <a class="btn is-large is-pearl" data-dismiss="modal">Galéria bezárása</a>
                </div>
            </div>
        </div>
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
                    "@id": "{{ localizedRoute('projects') }}",
                    "name": "Projektjeink"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "Harborsz Logistic esettanulmány"
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
    "description": "The online registry replaces the current paper-based systems and provides real-time communication and swift data synchronization between the OVSZ (National Blood Transfusion Service) and donation centers across Hungary.",
    "headline": "Harborsz Logistic esettanulmány",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "en_gb",
    "keywords": "ERP, Logistics",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "Harborsz Logistic esettanulmány",
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
                "name": "Projektjeink"
            }
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "Harborsz Logistic esettanulmány"
            }
        }
    ]
}
</script>
@endpush