@extends('hu.site')

@section('title', '100% remote vállalat')
@section('description', 'Hiszünk abban, hogy a távmunka a jövő. Csapatunknak megadja azt a szabadságot, hogy megbírkozzanak bármilyen kihívással amit az élet eléjük gördít, ugyanakkor boldogabbak és hatékonyabbak is munkájuk során.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-9-desktop is-offset-1-desktop">
                    <h2 class="hero-heading">
                        <strong class="is-pearl">100%</strong> távmunka
                    </h2>

                    <p>Hiszünk abban, hogy a távmunka a jövő. Csapatunknak megadja azt a szabadságot, hogy megbírkozzanak bármilyen kihívással amit az élet eléjük gördít, ugyanakkor boldogabbak és hatékonyabbak is munkájuk során.</p>
                </div>
            </div>
            <div class="columns has-margin-t60 is-multiline">
                <div class="column is-8-tablet is-6-desktop is-offset-1-desktop">
                    <h3 class="heading-4">Nincs szükség irodára</h3>
                    <p>Hosszú út vezetett idáig. Saját bőrünkön tapasztaltuk meg a távmunka kihívásait. De mára már büszkék vagyunk arra, ahogy remote csapatként kommunikálunk és együttműködünk. A távmunka lehetővé teszi számunkra, hogy bárhonnan dolgozhassunk: otthonról, közösségi irodából, kávézóból vagy akár egy exotikus országból fincsi koktélokat szürcsölgetve a medence mellett.</p>
                    <h3 class="heading-4 has-margin-t60">Rugalmas időbeosztás és korlátlan szabadnap</h3>
                    <p>Hiszünk abban, hogy ha az elét kihívások elé állít, akkor a munka ezt nem szabad még egy adaggal megfejelje. Ezért nálunk mindenki flexibilis munkaidőben dolgozhat. El kell hozni a gyereket az oviból vagy felügyelni kell a vízszerelőt amíg kidugaszolja a konyhai mosogatót? Nem gond!</p>
                    <p>Emellett kollégáinknak korlátlen beteg- és szabadnapot is engedélyezünk. Ez elsőre elég meredeknek tűnhet, de gondoljunk bele: kinek van szüksége egy kiégett kollégára?</p>
                    <h3 class="heading-4 has-margin-t60">Rendszeres csapatos pihenők</h3>
                    <p>A távmunka azt is jelenti, hogy kevesebbet is látjuk egymást. Éppen ezért minden évet egy téli táborral kezdjük, hogy értékes időt tudjunk eltölteni egymás megismerésével és új dolgok tanulásával.</p>
                    <p>Nyár végén mindezt megtetőzzük egy családos pihenővel, ami lehetővé teszi, hogy megismerjük kollégáinkat egy másik szemszögből is.</p>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-17.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-13.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-7.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="is-hidden-mobile">
        <div class="slides-separator">
            <img src="{{ asset('img/team-3.jpg') }}" alt="Further team" />
            <img src="{{ asset('img/team-15.jpg') }}" alt="Further team" />
            <img src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-9-desktop is-offset-1-desktop">
                    <h2 class="hero-heading">
                        A távmunka <strong class="is-cobalt">tudásmegosztásról</strong> is szól
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-t60 is-multiline is-reversed-tablet">
                <div class="column is-8-tablet is-6-desktop is-offset-1-desktop">
                    <h3 class="heading-4">Műhely-délutánok</h3>
                    <p>Minden péntek délutánt arra használjuk, hogy közösen dolgozzunk valamin, egy aktuális témáról beszélgessünk vagy a csapaton belüli kapcsolatokat gondozzuk.</p>

                    <h3 class="heading-4 has-margin-t60">Open source</h3>
                    <p>Nagyon sokat kaptunk a fejlesztői közösségtől az évek során. Éppen ezért, amikor tudunk mi is hozzájárulunk közösségi projekteken vagy egyes munkánkat open source projektként tesszük közzé.</p>

                    <h3 class="heading-4 has-margin-t60">Folyamatos tanulás</h3>
                    <p>A mai gyorsan változó IT környezetben folyamatosan fejlődésben kell maradni annak érdekében, hogy kompetitívek lehessünk. Ezért gyakran veszünk részt konferenciákon és meetupokon.</p>
                    <p>Sőt, magunk is szervezünk egy párat, mint amilyen a magyarországi Laravel Meetup vagy a helyi Digitális Transzformáció meetup.</p>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-11.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-14.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-desktop is-offset-1-desktop">
                    <h2 class="hero-heading">
                        <strong class="is-pearl">Tanítjuk</strong> is!
                    </h2>

                    <p>Mi értelme van valamihez érteni, ha azt nem tudjuk megosztani másokkal? Ebből a meggyőződésből kiindulva próbáljuk népszerűsíteni a távmunkát bárhol ahol igény van rá. Több meetupon is előadtunk már az előnyeiről és hátrányairól, illetve blogunkon is írtunk már a távmunka kihívásairól, saját tapasztalatainkról és ötleteinkről.</p>
                </div>
            </div>
            <div class="posts has-margin-t60">
                <div class="columns is-multiline">
                    <div class="column is-6-tablet">
                        @include(getLang() . '.blog.excerpts.tavmunka.mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel')
                    </div>
                    <div class="column is-6-tablet">
                        @include(getLang() . '.blog.excerpts.tavmunka.hogyan-vegyunk-fel-uj-remote-csapattagot')
                    </div>
                    <div class="column is-6-tablet">
                        @include(getLang() . '.blog.excerpts.tavmunka.hogyan-epitsunk-remote-vallalati-kulturat')
                    </div>
                    <div class="column is-6-tablet">
                        @include(getLang() . '.blog.excerpts.tavmunka.hogyan-motivaljuk-magunkat-ha-tavmunkaban-dolgozunk')
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription', [
        'bodyText' => '<p class="has-margin-b30">Subscribe to our monthly newsletter where we share lots of fresh information about remote work.</p>',
        'headingText' => 'Subscribe for<br />more on <strong>remote!</strong>',
        'source' => 'remote-landing'
    ])
@endsection



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
                    "@id": "{{ localizedRoute('about.remote-culture') }}",
                    "name": "Remote kultúra"
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
    "description": "{{ config('site.description.' . getLang()) }}",
    "headline": "Remote kultúra",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_hu",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, Digitális termékfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('about.remote-culture') }}",
    "name": "Remote kultúra",
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
                "@id": "{{ localizedRoute('about.remote-culture') }}",
                "name": "Remote kultúra"
            }
        }
    ]
}
</script>
@endpush
