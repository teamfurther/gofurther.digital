@section('title', 'The Hive - Termékéletciklus-kezelés')
@section('description', 'A DAI-TECH, az nJoy márka mögött álló gyorsan növekvő vállalat nagyon rövid idő alatt felülmúlta a meglévő szoftverinfrastruktúráját és egyedi beépített megoldásra volt szüksége. Minket bíztak meg, hogy olyan termékéletciklus-kezelő eszközt fejlesszünk, amely megfelel sajátos igényeiknek.')
@section('preview_image', asset('media/projects/hive-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">nJoy - The Hive</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Összefoglaló</h2>
                                <p>A DAI-TECH, az nJoy márka mögött álló gyorsan növekvő vállalat nagyon rövid idő alatt felülmúlta a meglévő szoftverinfrastruktúráját és egyedi beépített megoldásra volt szüksége. Minket bíztak meg, hogy olyan termékéletciklus-kezelő eszközt fejlesszünk, amely megfelel sajátos igényeiknek.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/hive-illustration-1.png') }}" alt="Esettanulmányok: nJoy - The Hive" />
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
                    <img src="{{ asset('media/projects/hive-logo.png') }}" alt="Esettanulmányok: nJoy - The Hive logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">Az ügyfél</h2>
                    <p>A DAI-TECH-et 2010 júniusában alapították abból a közös célból, hogy valami mást és jobbat nyújtsanak az akkor piaci kínálatnál. Az nJoy márka által olyan fogyasztó orientált informatikai termékeket fejlesztenek ki, amelyeket önálló termékként értékesítenek a kiskereskedelmi láncok polcain. Jelenleg az nJoy öt piacon van jelen, köztük Románia, Magyarország, Bulgária, Horvátország és Szerbia.</p>
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
                    <p>A projekt fő kihívása a DAI-TECH menedzsment, IT és design csapatokkal való együttműködés volt annak érdekében, hogy megértsük a munkafolyamatukat, és lefordítsuk ezt az üzleti logikát egy könnyen használható és skálázható rendszerre, amely a DAI-TECH, a beszállítók, a szervizközpontok és a forgalmazók együttműködési csomópontjaként működne.</p>
                    <p>Olyan stratégiát kellett kialakítanunk, amely lehetővé teszi a meglévő szoftverfrissítéshez való kapcsolódást, és az adatok átvitelét az új szoftverükbe egyedi API-k segítségével.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/hive-illustration-2.jpg') }}" alt="Esettanulmányok: nJoy - The Hive" />
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
                    <p>A végeredmény egy testreszabott termék életciklus-kezelő eszköz lett, amely lehetővé teszi a DAI-TECH számára, hogy kezelje termékei élettartama során a legfontosabb lépéseket, a fejlesztéstől és a gyártástól a forgalmazásig és a logisztikáig.</p>
                    <p>Együtt dolgoztunk az nJoy design csapatával, akik létrehozták a felhasználói felületet, a mi lelkes csapatunk pedig Kifejlesztette a Codeigniter alapú backend rendszert. A Codeigniter egy kiforrott PHP keretrendszer, amely ideális a gyors, a stabil, a világ minden tájáról elérhető online rendszerek szerveroldali fejlesztéséhez.</p>
                    <p>Ahogyan a vállalat és az informatikai követelményei növekszik, elengedhetetlen, hogy a rendszer képes legyen kezelni az egyre növekvő mennyiségű adatot, és az új komponensek gyorsan fejleszthetőek legyenek. Ennek elérése érdekében szoftverünk moduláris architektúrát használ és dedikált szervereken fut, így könnyen skálázható. Ugyanakkor felállítottuk az állandó szoftverszállítási folyamatokat is, hogy biztosítsuk a kód minőségét és gyorsítsuk az új funkcionalitások integrálását.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/hive-illustration-3.jpg') }}" alt="Esettanulmányok: nJoy - The Hive" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__testimonial">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <img class="project__testimonial__picture" src="{{ asset('media/projects/hive-adorian-demeter.png') }}" alt="Esettanulmányok: nJoy Adorian Demeter ajánlás" />
                        <blockquote class="project__testimonial__content">
                            <p>Nem tudnám elképzelni, hogyan működne a termékfejlesztésünk a Hive nélkül. Bevezetése óta az új termékek fejlesztésének ideje 20%-al csökkent, minden adatunk rendszerezett és könnyen utánkövethető.</p>
                            <cite class="project__testimonial__author">Adorian DEMETER, Ügyvezető igazgató</cite>
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
                    <p>A Hive egy rugalmas rendszer, amely arányosan növekszik a vállalattal együtt. A kezdetektől fogva egyre több funkcionalitást adtunk hozzá, és jelenleg központi rendszerként működik, ahol a DAI-TECH együttműködik a gyártókkal, a beszállítókkal, a szervizközpontokkal és a forgalmazókkal. A cég munkafolyamata folyékonyabbá vált, időt és pénzt takarítottunk meg ügyfelünk számára.</p>
                </div>
                <div class="column">
                    <img class=" is-pulled-right-tablet" src="{{ asset('media/projects/hive-illustration-4.jpg') }}" alt="Esettanulmányok: nJoy - The Hive" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">594</span>
                        <span class="project__stats__description">fejlesztett termék</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">20<small>%</small></span>
                        <span class="project__stats__description">gyorsabb termékfejlesztés</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">65</span>
                        <span class="project__stats__description">közreműködő és partner</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">30<small>%</small></span>
                        <span class="project__stats__description">produktivitás növekedés</span>
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
                            <li>Javascript</li>
                            <li>Apache</li>
                            <li>CI/CD</li>
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
                        <a class="btn is-large is-pearl" data-toggle="modal" data-target="#project-gallery">Látogassa meg a galériát</a>
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
                    @include(getLang() . '.projects.excerpts.steiger-erp')
                </div>
                <div class="column">
                    @include(getLang() . '.projects.excerpts.mentorme-elo-oktatovideo-szoftver')
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
                    <h3 class="modal__title">nJoy - The Hive</h3>
                    <span class="modal__subtitle">Termékéletciklus-kezelés</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/hive-gallery-1.jpg') }}" alt="Esettanulmányok: nJoy - The Hive galéria" />
                    <img src="{{ asset('media/projects/hive-gallery-2.jpg') }}" alt="Esettanulmányok: nJoy - The Hive galéria" />
                    <img src="{{ asset('media/projects/hive-gallery-3.jpg') }}" alt="Esettanulmányok: nJoy - The Hive galéria" />
                    <img src="{{ asset('media/projects/hive-gallery-4.jpg') }}" alt="Esettanulmányok: nJoy - The Hive galéria" />
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
                    "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                    "name": "The Hive - Termékéletciklus-kezelés"
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
    "description": "A DAI-TECH, az nJoy márka mögött álló gyorsan növekvő vállalat nagyon rövid idő alatt felülmúlta a meglévő szoftverinfrastruktúráját és egyedi beépített megoldásra volt szüksége. Minket bíztak meg, hogy olyan termékéletciklus-kezelő eszközt fejlesszünk, amely megfelel sajátos igényeiknek.",
    "headline": "The Hive - Termékéletciklus-kezelés",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "PLM, Termékéletciklus-kezelés, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "The Hive - Termékéletciklus-kezelés",
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
                "@id": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
                "name": "The Hive - Termékéletciklus-kezelés"
            }
        }
    ]
}
</script>
@endpush
