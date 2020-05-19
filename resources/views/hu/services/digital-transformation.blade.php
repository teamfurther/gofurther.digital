@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('title', 'Digitális transzformáció')
@section('description', 'A Further segít belépni a digitális korszakba egy felhasználó-centrikus, folyamatvezérelt digitális transzformáció stratégia kidolgozásával.')

@section('content')
    <section class="hero is-tangerine">
        <h2 class="hero-heading">
            Alakítsd át a céged.<br />
            Változtasd meg az iparágad.<br />
            A jövő <strong class="is-cobalt">digitális.</strong>
        </h2>
        <a class="hero__cta" href="{{ localizedRoute('contact') }}">
            A Te vállakozásod jövője milyen?<strong>Tudd meg most</strong>
        </a>
        <a class="hero__scroll" href="{{ url('#intro') }}"></a>
    </section>

    <section class="section is-dark" id="intro">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Lépj be</strong> egy új digitális világba.
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <p>
                        Cégvezetőként könnyű belefedkezned a szürke mindennapokba. Tudjuk, hogy amikor az elsődleges fókusz az operatív feladatok ellátása, nehéz a hatékonyságnövelésre, stratégiákra és új lehetőségekre időt szakítani.
                    </p>
                    <p>
                        A világ körülöttünk viszont folyamatosan változik. A digitalizáció egyre nagyobb teret hódít és minden vállalkozástól megköveteli, hogy tartsa a lépést.
                    </p>
                    <p>
                        Üzleti megoldások, design vagy technológia, a partnereinkkel együtt az új digitális korszak igényeinek megfelelő termékeket és szolgáltatásokat biztosítunk ügyfeleinknek. Segítünk a megfelelő folyamatok és kultúra kialakításában.
                    </p>
                    <p>
                        Az átalakulás az emberekkel kezdődik. A technológia csupán egy eszköz a megvalósításhoz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-5-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-cobalt">Digitális transzformáció</strong> szolgáltatásaink:
                    </h2>
                </div>
                <div class="column is-offset-1-widescreen">
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-innovation-consulting-icon.png') }}" alt="Digitális transzformáció - Innovációs tanácsadás" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Innovációs<br />tanácsadás</h3>
                            <p>
                                A legdinamikusabban növekvő vállalatok folyamatosan beépítik az új technológiákat a folyamataikba. Segítünk átnavigálni a sok divatos szó tengerén és kiválasztani azokat a technológiákat amik a legtöbb hasznot hozzák vállalkozásodnak.
                            </p>
                            <ul class="list has-bullets">
                                <li>Cloud (felhő) technológiák</li>
                                <li>Mesterséges intelligencia (AI) és gépi tanulás</li>
                                <li>Big data</li>
                                <li>Üzleti intelligencia</li>
                                <li>Adatstratégia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-operational-efficiency-icon.png') }}" alt="Digitális transzformáció - Operatív hatékonyság" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Operatív<br />hatékonyság</h3>
                            <p>
                                A digitális transzformáció projektek egyik legfontosabb célja, hogy a terméket vagy szolgáltatást a lehető legköltséghatékonyabb módon jutassa el az ügyfelekhez.
                            </p>
                            <p>
                                Tanácsadóink egy inside-out szemléletű folyamat során segítenek az operatív folyamatok átalakításában és a hatékonyság növelésében.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-business-agility-icon.png') }}" alt="Digitális transzformáció - Üzleti agilitás" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Üzleti<br />agilitás</h3>
                            <p>
                                Ha egy jó stratégiával rendelkezünk, akkor már megtettünk az első lépést. De a szükséges változások megvalósítása már egy sokkal nehezebb feladat. Itt jön képbe az agilis projektmenedzsment.
                            </p>
                            <p>
                                A legjobb agilis tanácsadókkal működünk közre, akik segítenek agilis technikák és eszközök bevezetésében, hogy a céged gyorsabb változásra legyen képes.
                            </p>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-ux-service-design-icon.png') }}" alt="Digitális transzformáció - UX és service design" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">UX és<br />service design</h3>
                            <p>
                                A service design egy holisztikus, outside-in megközelítés, amelynek célja, hogy megoldásokat találjon komplex üzleti problémákra. A végső célja az, hogy jobb felhasználói elményt biztosítson minden szereplőnek: a vásárlóidnak és a csapatodnak egyaránt.
                            </p>
                            <ul class="list has-bullets">
                                <li>UX kutatás</li>
                                <li>Design thinking workshopok</li>
                                <li>Ügyfélélmény (CX) tervezés</li>
                                <li>Alkalmazotti élmény (EX) tervezés</li>
                            </ul>
                        </div>
                    </div>
                    <div class="columns has-margin-b90 is-mobile">
                        <div class="column is-3-mobile is-2-tablet is-offset-1-tablet is-offset-0-widescreen">
                            <img src="{{ asset('img/digital-transformation-change-management-icon.png') }}" alt="Digitális transzformáció - Változásmenedzsment" />
                        </div>
                        <div class="column is-8-tablet">
                            <h3 class="heading-4">Változás-<br />menedzsment</h3>
                            <p>
                                Ahhoz, hogy egy digitális transzformáció projekt sikeres legyen, szervezeti és kulturális változásra van szükség, amely megköveteli, hogy a vállalatok folyamatosan felülírják a status quót, állandó formabontó kísérletezést végezzenek, és elfogadják a kudarcokat.
                            </p>
                            <p>
                                Segítünk felkészíteni a csapatodnak, hogy gyorsan elsajátítsák a szükséges innovatív szemléletet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Lépj velünk a digitális korszakba',
        'headingText' => 'Szeretnénk megismerni a vállalkozásod!'
    ])

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        Ügyfeleink akik már beléptek a <strong class="is-tangerine">digitális korszakba:</strong>
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b60">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="project__testimonial__picture" src="{{ asset('img/testimonials-adorian-demeter.png') }}" alt="nJoy - The Hive Adorian Demeter testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>
                            Nem tudnám elképzelni, hogyan működne a termékfejlesztésünk a Hive nélkül. Bevezetése óta az új termékek fejlesztésének ideje 20%-al csökkent, minden adatunk rendszerezett és könnyen utánkövethető.
                        </p>
                        <cite class="project__testimonial__author">DEMETER Adorian, nJoy</cite>
                    </blockquote>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <img class="project__testimonial__picture is-right-aligned" src="{{ asset('img/testimonials-edina-bakk.png') }}" alt="Harborsz Edina Bakk testimonial" />
                    <blockquote class="project__testimonial__content">
                        <p>
                            Számunkra a Harborsz Logistics szoftver legnagyobb előnye, hogy egy komplett, integrált rendszert kaptunk. Többé nem kell folyton különböző programok és emailek között váltogatva lebonyolítsuk a mindennapi ügyvitelt.
                        </p>
                        <p>
                            Ez jelentősen csökkentette az emberi hibák lehetőségét és növelte a produktivitásunkat.
                        </p>
                        <cite class="project__testimonial__author">BAKK Edina, Harborsz Logistic</cite>
                    </blockquote>
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
                    "name": "Homepage"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "{{ localizedRoute('services.digital-transformation') }}",
                    "name": "Digitális transzformáció"
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
    "description": "A Further segít belépni a digitális korszakba egy felhasználó-centrikus, folyamatvezérelt digitális transzformáció stratégia kidolgozásával.",
    "headline": "{{ config('site.name') }} | {{ config('site.title.' . config('app.locale')) }}",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális transzformáció, Cloud Transformation, Business Agility, Business Strategy, Operational Efficiency, Data Strategy",
    "mainEntityOfPage": "{{ localizedRoute('services.digital-transformation') }}",
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
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": "1",
            "item": {
                "@id": "{{ config('app.url') }}",
                "name": "Homepage"
            }
        },
        {
            "@type": "ListItem",
            "position": "2",
            "item": {
                "@id": "{{ localizedRoute('services.digital-transformation') }}",
                "name": "Digitális transzformáció"
            }
        }
    ]
}
</script>
@endpush
