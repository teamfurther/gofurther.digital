@extends('hu.site')

@section('title', 'Blog')
@section('description', 'Gondolatok és írások a Further csapatától. Blogunkban osztunk meg híreket és pillanatokat mindennapjainkról, technológiáról, designról, innovációról és kultúráról.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Gondolatok és firkák</h1>
                </div>
            </div>
            <div class="posts">
                <div class="columns is-multiline">
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}"><img src="{{ asset('media/blog/thumb-remote-corporate-culture-1-hu.png') }}" alt="Hogyan segíthet egy termelésirányítási szoftver?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">Mi az a remote csapat (és miért imádjuk a Furthernél?)</a></h3>
                                <p class="post__excerpt">Ebben a cikkben megmutatjuk, hogy mik az előnyei és hátrányai a távmunkának, mire érdemes odafigyelned, ha távmunkában gondolkozol, illetve azt, hogy mi magunk hogyan csináljuk!</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'mi-az-a-remote-csapat-es-miert-szeretjuk-a-furthernel']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => '5-hasznos-adat-cegvezetoknek']) }}"><img src="{{ asset('media/blog/thumb-5-things-every-business-owner-should-know.jpg') }}" alt="Hogyan segíthet egy termelésirányítási szoftver?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => '5-hasznos-adat-cegvezetoknek']) }}">5 adat, amit minden cégvezetőnek tudnia kell</a></h3>
                                <p class="post__excerpt">Ebben a cikkben megmutatjuk, melyek azok az adatok, amelyeket minden vezetőnek ismernie kell hogy stratégiát tudjon alkotni, és hogyan segít egy szoftver ezek megismerésében.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => '5-hasznos-adat-cegvezetoknek']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-segit-egy-szoftver-a-termelesi-folyamatok-optimalizalasaban']) }}"><img src="{{ asset('media/blog/thumb-manufacturing-software.jpg') }}" alt="Hogyan segíthet egy termelésirányítási szoftver?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-segit-egy-szoftver-a-termelesi-folyamatok-optimalizalasaban']) }}">Hogyan segíthet egy termelésirányítási szoftver?</a></h3>
                                <p class="post__excerpt">Mai cikkünkben megmutatjuk, hogy miként tudja egy szoftver optimalizálni a termékfejlesztést, a beszerzést és a gyártási folyamatokat.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-segit-egy-szoftver-a-termelesi-folyamatok-optimalizalasaban']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-alakitsuk-at-cegunket-papirmentesse']) }}"><img src="{{ asset('media/blog/thumb-going-paperless.jpg') }}" alt="Hogyan alakítsuk át cégünket papírmentessé?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-alakitsuk-at-cegunket-papirmentesse']) }}">Hogyan alakítsuk át cégünket papírmentessé?</a></h3>
                                <p class="post__excerpt">Sokat hallunk mostanában papírmentes vállalkozásokról. De miként tudjuk teljesen papírmentessé tenni a vállalkozásunkat?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-alakitsuk-at-cegunket-papirmentesse']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-valasszuk-ki-a-megfelelo-crm-rendszert']) }}"><img src="{{ asset('media/blog/thumb-how-to-choose-the-right-crm.jpg') }}" alt="Hogyan válasszuk ki a megfelelő CRM rendszert?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-valasszuk-ki-a-megfelelo-crm-rendszert']) }}">Hogyan válasszuk ki a megfelelő CRM rendszert?</a></h3>
                                <p class="post__excerpt">Ha már eldöntöttük, hogy szükségünk van egy CRM-re, akkor hogyan válasszuk ki a megfelelőt? Cikkünkből megtudhatod melyek azok a szempontok amiket érdemes figyelembe venni.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'hogyan-valasszuk-ki-a-megfelelo-crm-rendszert']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'mikor-hasznaljunk-crm-rendszert']) }}"><img src="{{ asset('media/blog/thumb-when-is-it-time-to-use-a-crm.jpg') }}" alt="Mikor használjunk CRM rendszert?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'mikor-hasznaljunk-crm-rendszert']) }}">Mikor használjunk CRM rendszert?</a></h3>
                                <p class="post__excerpt">Az ügyfélmenedzsment folyamatait illetően a legtöbb vállalkozás ugyanazokon a fázisokon megy keresztül. Cikkünkben arra derítünk fényt, hogy mikortól érdemes bevezetni egy CRM rendszert.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'mikor-hasznaljunk-crm-rendszert']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-4-hu.jpg') }}" alt="Digitális transzformáció 4. rész - Technológia" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}">Digitális transzformáció 4. rész - Technológia</a></h3>
                                <p class="post__excerpt">Sorozatunk záró cikkében, a digitális transzformáció puzzle utolsó darabjával foglalkozunk és megnézzük hogyan használhatod Te is ki a technológiában rejlő lehetőségeket, hogy előrelendítsd vállalkozásod.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-3-hu.jpg') }}" alt="Digitális transzformáció 3. rész - Üzleti folyamatok" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}">Digitális transzformáció 3. rész - Üzleti folyamatok</a></h3>
                                <p class="post__excerpt">Sorozatunk harmadik részében megnézzük hogyan segítheti a BPM és az agilis metódusok a digitális transzformációt.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-2-hu.jpg') }}" alt="Digitális transzformáció 2. rész - Vállalati kultúra" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">Digitális transzformáció 2. rész - Vállalati kultúra</a></h3>
                                <p class="post__excerpt">A sorozat első részében megtudhattuk, hogyan buktatta meg a digitális világ a Kodakot. De sikerült változtatniuk a vállalati kultúrájukon és feltámadtak hamvaikból.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}"><img src="{{ asset('media/blog/thumb-digital-transformation-1-hu.jpg') }}" alt="Digitális transzformáció 1. rész - Bevezető" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}">Digitális transzformáció 1. rész - Bevezető</a></h3>
                                <p class="post__excerpt">Üdvözlünk a digitális átalakulással kapcsolatos sorozatunk első részében. Merüljünk is el a témában, és kezdjük a digitális átalakulás valós jelentésével.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}"><img src="{{ asset('media/blog/thumb-laraconeu-madrid-2019.png') }}" alt="Élménybeszámoló a LaraconEU Madrid 2019-ről" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}">Élménybeszámoló a LaraconEU Madrid 2019-ről</a></h3>
                                <p class="post__excerpt">Május 23-a különleges nap volt számunkra, mivel részt vettünk az első Laracon találkozónkon Madridban. A Laracon mindig is ott volt a konferenciák bakancslistánkon, de nem sikerült eljutnunk&hellip; egészen mostanáig.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'laraconeu-madrid-2019']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'uj-kontosben-koszontjuk-a-nyarat']) }}"><img src="{{ asset('media/blog/thumb-rebranding.png') }}" alt="Új köntösben köszöntjük a nyarat" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'uj-kontosben-koszontjuk-a-nyarat']) }}">Új köntösben köszöntjük a nyarat</a></h3>
                                <p class="post__excerpt">Nemcsak azért döntöttünk cégünk arculatváltása mellett, mert ez elengedhetetlen a növekedéshez, hanem főleg azért, mert a régi arculat már nem képviselt minket eléggé.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'uj-kontosben-koszontjuk-a-nyarat']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'mitol-lesz-jo-egy-agilis-szoftverspecifikacio']) }}"><img src="{{ asset('media/blog/thumb-agile-software-specification.jpg') }}" alt="Mitől lesz jó egy (agilis) szoftverspecifikáció?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'mitol-lesz-jo-egy-agilis-szoftverspecifikacio']) }}">Mitől lesz jó egy (agilis) szoftverspecifikáció?</a></h3>
                                <p class="post__excerpt">A vízesés modell esetében egy szoftver minőségi és időben történő szállításának biztosítása érdekében ki kellett dolgozni a szoftverspecifikációt a legutolsó részletig. De mi a helyzet ha agilis környezetben fejlesztünk?</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'mitol-lesz-jo-egy-agilis-szoftverspecifikacio']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <div class="column is-full-tablet is-half-widescreen">
                        <div class="post">
                            <a class="post__image" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}"><img src="{{ asset('media/blog/thumb-custom-development-vs-ootb.jpg') }}" alt="Egyedi fejlesztés vagy dobozos szoftver?" /></a>
                            <div class="post__content">
                                <h3 class="post__title"><a href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Egyedi fejlesztés vagy dobozos szoftver?</a></h3>
                                <p class="post__excerpt">Valamikor minden vállalat eléri azt a pontot, amikor a növekedés érdekében be kell fektetnie a szoftveres infrastruktúrájába. Megpróbálunk segíteni abban, hogy eldöntsd, hogy az egyedi fejlesztés vagy egy dobozos megoldás a megfelelő számodra.</p>
                                <a class="post__read-more" href="{{ localizedRoute('blog.view', ['slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver']) }}">Tovább &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    "@id": "{{ localizedRoute('blog') }}",
                    "name": "Blog"
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
    "description": "Gondolatok és írások a Further csapatától. Blogunkban osztunk meg híreket és pillanatokat mindennapjainkról, technológiáról, designról, innovációról és kultúráról.",
    "headline": "Blog",
    "image": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo.svg') }}",
        "height": "50",
        "width": "185"
    },
    "inLanguage": "hu_HU",
    "keywords": "Egyedi szoftverfejlesztés, Testreszabott fejlesztés, Szoftverfejlesztés, Webfejlesztés, MVP fejlesztés, Digitális transzformáció",
    "mainEntityOfPage": "{{ localizedRoute('blog') }}",
    "name": "Blog",
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
                "@id": "{{ localizedRoute('blog') }}",
                "name": "Blog"
            }
        }
    ]
}
</script>
@endpush
