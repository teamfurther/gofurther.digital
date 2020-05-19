@section('title', 'PROFNET e-tanulás platform')
@section('description', 'A PROFNET egy olyan e-tanulás projekt, amelyet a Magyarország-Románia Határon Átnyúló Együttműködési Program finanszíroz. A projekt szervezője a temesvári Bartók Béla Elméleti Líceum a vésztői Kis Bálint Általános Iskolával közösen.')
@section('preview_image', asset('media/projects/profnet-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">PROFNET</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Összefoglaló</h2>
                                <p>A PROFNET egy olyan e-tanulás projekt, amelyet a Magyarország-Románia Határon Átnyúló Együttműködési Program finanszíroz. A projekt szervezője a temesvári Bartók Béla Elméleti Líceum a vésztői Kis Bálint Általános Iskolával közösen.</p>
                                <p>Megterveztük és kifejlesztettük a PROFNET-et, egy olyan e-tanulás platformot, amelynek célja a DKMT kistérség tanárainak és diákjainak összefogása. Ezen a platformon a diákok részt vehetnek különböző tanfolyamokon, megoszthatják történeteiket, és összehasonlíthatják tudásukat online kvízek és versenyek alapján.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/profnet-illustration-1.png') }}" alt="Esettanulmányok: PROFNET" />
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
                    <img src="{{ asset('media/projects/profnet-logo.png') }}" alt="Esettanulmányok: PROFNET logo" />
                </div>
                <div class="column">
                    <h2 class="heading-2">Az ügyfél</h2>
                    <p>Az 1990-ben alapított világhírű zeneszerző, zongoraművész és muzsikus nevét viselő iskola, a Bartók Béla Elméleti Líceum, Temesvár egyik legjelentősebb iskolája. Ez az egyetlen olyan iskola a városban, ahol a tannyelv magyar, és központi szerepet játszik a kultúra és oktatás területén a helyi magyar kisebbség számára.</p>
                    <p>Csapatunk számos tagjának alma materje, így egy különösen hálás projekt számunkra.</p>
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
                    <p>A projekt fő célja egy olyan e-tanulás szoftver megtervezése és létrehozása volt, amely egyszerre több nyelven is képes több tanfolyamot és tesztet futtatni. Kommunikációs platformként is szolgál, amelyen a hírek és a történetek megoszthatók.</p>
                    <ul class="list has-bullets">
                        <li>A kvízek készítése és adminisztrációja.<br /><small>A tanári szerepet betöltő felhasználók olyan teszteket hozhatnak létre, amelyek széleskörű kérdés- és választípusokat tartalmaznak. A tesztek időzíthetőek is és automatikus lejárati dátummal is rendelkezhetnek.</small></li>
                        <li>A fent említett kvízek automatikus kiértékelése.<br /><small>Az összes befejezett kvízt a rendszer automatikusan pontoz.</small></li>
                        <li>Online tanfolyamok készítése és adminisztrációja.<br /><small>A tanári szerepkörű felhasználó tanfolyamokat vagy előadásokat hozhat létre, képekkel és videótartalmakkal.</small></li>
                        <li>Riportok.<br /><small>A rendszer összes adatai szűrhetőek, rendezhetőek és CSV formátumban exportálhatóak.</small></li>
                        <li>Felhasználók kezelése és a beléptetés ellenőrzése.<br /><small>Minden felhasználónak különböző szerepei és jogosultságai vannak, amelyek könnyen kezelhetők az adminisztrációs oldalakon keresztül. Továbbá az egyes tanfolyamokhoz és kvízekhez különböző diákok is rendelhetőek.</small></li>
                        <li>Többnyelvűség.<br /><small>Az összes tartalom több nyelven is elérhető lehet.</small></li>
                    </ul>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/profnet-illustration-2.jpg') }}" alt="Esettanulmányok: PROFNET" />
                </div>
            </div>
        </div>
    </section>
    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-half">
                    <h2 class="heading-2">A diákoknak</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>A Codeigniter alapú keretrendszer segítségével teljesen egyedi e-tanulás megoldást hoztunk létre. A projekt minden fázisát mi kezeltük a szoftver architektúrától a fejlesztésig és a felületek tervezéséig.</p>
                    <p>A frontend oldalon egy fiatalos, de könnyen kezelhető felhasználói felületet hoztunk létre, amely egyszerűen használható a legfiatalabb diákok által is. Itt juthatnak hozzá a legfrissebb információkhoz, új közleményeket és történeteket olvashatnak.</p>
                    <p>A bejelentkezés után hozzáférhetnek azokhoz a tanfolyamokhoz és tesztekhez, amelyekhez hozzárendelték őket. A tanfolyamok olvasása közben az összes csatolt tartalomban is tallózhatnak, mint például képek, videók és egyéb képzési anyagok.</p>
                    <p>A kvízeken való részvétel egyszerűvé válik azáltal, hogy folyamatosan áttekinthető hány kérdésre válaszoltak és hány maradt, mennyi idő maradt a teszt befejeződéséig, és mennyi a tanuló jelenlegi pontszáma.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/profnet-illustration-3.jpg') }}" alt="Esettanulmányok: PROFNET" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">A tanároknak</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>A platform backendjéhez csak a tanárok és a rendszergazdák férhetnek hozzá. Itt adminisztrálható az összes frontend tartalom és több nyelvre lefordítható, a felhasználók létrehozására, kezelésére és a különböző tanfolyamokhoz és kvízekhez való hozzárendelésére van lehetőség.</p>
                    <p>A tanárok olyan tanfolyamokat hozhatnak létre és kezelhetnek, amelyek több leckéből állhatnak, ezek mindegyike multimédiás tartalmú lehet. Kvízeket is készíthetnek és kezelhetnek, amelyek időzíthetőek vagy nem. Számos kérdéstípus közül választhatnak, mint az egyszeri választás, a többszörös választás, a numerikus/ egyenlet válasz, a hiányzó szóközök, a fájlfeltöltés vagy az esszé.</p>
                    <p>Minden beérkezett kvíz automatikusan kiértékelődik a kérdéstípusok és pontozási szabályok alapján, megkönnyítve ezzel a diákot igyekezetének jutalmazását.</p>
                </div>
                <div class="column">
                    <img class=" is-pulled-right-tablet" src="{{ asset('media/projects/profnet-illustration-4.jpg') }}" alt="Esettanulmányok: PROFNET" />
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
                    <p>A PROFNET 2012 óta működik, ebben az időszakban körülbelül 200 diák használta platformunkat évente, egész évben új betekintést nyertek a különböző tantárgyakba, találkoztak más diákokkal és bebizonyították tudásukat az online kvízeken.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/profnet-illustration-5.jpg') }}" alt="Esettanulmányok: PROFNET" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="project__stats">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">119</span>
                        <span class="project__stats__description">kurzus</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">1453</span>
                        <span class="project__stats__description">diák</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">41</span>
                        <span class="project__stats__description">tanár</span>
                    </div>
                    <div class="column is-half-mobile is-one-quarter-tablet">
                        <span class="project__stats__number">21,270</span>
                        <span class="project__stats__description">megválaszolt kérdés</span>
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
                    @include(getLang() . '.projects.excerpts.idea-elearning-szoftver')
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
                    <h3 class="modal__title">PROFNET</h3>
                    <span class="modal__subtitle">e-learning platform</span>
                </div>
                <div class="modal__body">
                    <img src="{{ asset('media/projects/profnet-gallery-1.jpg') }}" alt="Esettanulmányok: PROFNET galéria" />
                    <img src="{{ asset('media/projects/profnet-gallery-2.jpg') }}" alt="Esettanulmányok: PROFNET galéria" />
                    <img src="{{ asset('media/projects/profnet-gallery-3.jpg') }}" alt="Esettanulmányok: PROFNET galéria" />
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
                    "name": "PROFNET e-tanulás platform"
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
    "description": "A PROFNET egy olyan e-tanulás projekt, amelyet a Magyarország-Románia Határon Átnyúló Együttműködési Program finanszíroz. A projekt szervezője a temesvári Bartók Béla Elméleti Líceum a vésztői Kis Bálint Általános Iskolával közösen.",
    "headline": "PROFNET e-tanulás platform",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "e-learning szoftver, Codeigniter",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "PROFNET e-tanulás platform",
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
                "name": "PROFNET e-tanulás platform"
            }
        }
    ]
}
</script>
@endpush
