@section('title', 'mentor.me élő oktatóvideó-szoftver')
@section('description', '2016 elején megkaptuk a mentor.me oldal fejlesztési feladatát, egy olyan élő videó alapú oktatóplatform, amely a szabadúszó mentorokat összekapcsolja az érdeklődő diákokkal. Kihasználtuk az alkalmat, hogy egy más típusú projekten dolgozzunk, és modern technológiákkal játszadozhassunk.')
@section('preview_image', asset('media/projects/mentorme-illustration-1.png'))

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">mentor.me</h1>
                    <div class="project__summary">
                        <div class="columns">
                            <div class="column">
                                <h2 class="project__summary__heading">Összefoglaló</h2>
                                <p>2016 elején megkaptuk a mentor.me oldal fejlesztési feladatát, egy olyan élő videó alapú oktatóplatform, amely a szabadúszó mentorokat összekapcsolja az érdeklődő diákokkal. Kihasználtuk az alkalmat, hogy egy más típusú projekten dolgozzunk, és modern technológiákkal játszadozhassunk.</p>
                            </div>
                            <div class="column">
                                <img class="is-pulled-right-tablet" src="{{ asset('media/projects/mentorme-illustration-1.png') }}" alt="Esettanulmányok: mentor.me" />
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
                <div class="column is-offset-half">
                    <h2 class="heading-2">A kihívás</h2>
                </div>
            </div>
            <div class="columns is-reversed">
                <div class="column">
                    <p>A mentor.me egy olyan platform, amely lehetővé teszi a mentoroknak nevezett bemutatók számára, hogy kapcsolatot teremtsenek a leendő hallgatókkal, és előadást tartsanak különböző területeken, mint például az üzleti vagy az életviteli tanácsadás. A mentorok egy előadást indítanak, amely nyitott vagy meghívásos alapú lehet. A meghívásos előadások csoportos előadásokra vagy magánórákra oszthatóak.</p>
                    <p>Az előadások valójában élő audió-videófolyamok, társítva egy csevegő szolgáltatással, ahol a mentorok szöveges üzeneteket küldhetnek a hallgatókat vagy képzési anyagokat oszthatnak meg. A videófolyamok egyirányúak lehetnek, amelyeken csak a hallgatók láthatják az előadót, vagy kétirányúak lehetnek, amelyeken a mentorok is látják a hallgatóikat.</p>
                    <p>A diákok részt vehetnek ezeken a bemutatókon, és kreditpontokkal fizethetnek minden meghallgatott előadáspercért. A tanárok minden egyes előadásra krediteket szereznek, és minden héten készpénzzé válthatják a krediteket. Különböző árfolyama van minden előadásnak. A magánelőadások több kreditet jelentenek hallgatónként, mint a csoportos előadások, és lényegesen több kreditet, mint a nyitott előadások.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('media/projects/mentorme-illustration-2.jpg') }}" alt="Esettanulmányok: mentor.me" />
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-2">A megoldás</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>Egy olyan architektúrát találtunk ki, amely három elemből áll: az ügyfélalkalmazás, amelyet a mentorok és a diákok használnak, egy backend, amely egy API-t biztosít az adatbázis réteggel való kommunikációhoz, és végül egy stream-szerver a videó feedekhez.</p>
                    <p>Az ügyfélalkalmazás Angular.js vezérelt, audió-videó bemenetet fogad és továbbítja az adatcsomagokat a WebRTC segítségével a stream szerver felé, amelyhez részben hozzáférhet a többi ügyfélalkalmazás, hogy elolvassa ezeket az adatokat.</p>
                    <p>Az adatok tárolásához az ügyfélalkalmazás olyan API-hívásokat tesz, amelyekre az API-szerver egy socket-esemény kibocsátásával válaszol, azt jelezve az ügyfélalkalmazásnak, hogy egy második hívást kell tegyen a frissített információkhoz való hozzáféréshez. Az API PHP és Lumen keretrendszeren alapszik.</p>
                    <p>A két különböző ügyfélpéldány hasonló módon kommunikál, websocketet használva. A websocketekkel való munkánk megkönnyítése érdekében a socket.io keretrendszert használtuk.</p>
                </div>
                <div class="column">
                    <img class="is-pulled-right-tablet" src="{{ asset('media/projects/mentorme-illustration-3.jpg') }}" alt="Esettanulmányok: mentor.me" />
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
                            <li>Angular.js</li>
                            <li>Javascript</li>
                            <li>WebRTC</li>
                            <li>socket.io</li>
                            <li>Lumen</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>MongoDB</li>
                            <li>nginx</li>
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
                <h3 class="modal__title">mentor.me</h3>
                <span class="modal__subtitle">Videó streamelés, chat szoftver</span>
            </div>
            <div class="modal__body">
                <img src="{{ asset('media/projects/mentorme-gallery-1.jpg') }}" alt="Esettanulmányok: mentor.me galéria" />
                <img src="{{ asset('media/projects/mentorme-gallery-2.jpg') }}" alt="Esettanulmányok: mentor.me galéria" />
                <img src="{{ asset('media/projects/mentorme-gallery-3.jpg') }}" alt="Esettanulmányok: mentor.me galéria" />
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
                    "name": "mentor.me élő oktatóvideó-szoftver"
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
    "description": "2016 elején megkaptuk a mentor.me oldal fejlesztési feladatát, egy olyan élő videó alapú oktatóplatform, amely a szabadúszó mentorokat összekapcsolja az érdeklődő diákokkal. Kihasználtuk az alkalmat, hogy egy más típusú projekten dolgozzunk, és modern technológiákkal játszadozhassunk.",
    "headline": "mentor.me élő oktatóvideó-szoftver",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Elő oktatóvideó-szoftver",
    "mainEntityOfPage": "{{ localizedRoute('projects.show', ['slug' => $slug]) }}",
    "name": "mentor.me élő oktatóvideó-szoftver",
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
                "name": "mentor.me élő oktatóvideó-szoftver"
            }
        }
    ]
}
</script>
@endpush
