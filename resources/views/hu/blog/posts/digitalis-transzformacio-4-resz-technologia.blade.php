@section('title', 'Digitális transzformáció sorozat 4. rész – Technológia')
@section('description', 'Sorozatunk záró cikkében, a digitális transzformáció puzzle utolsó darabjával foglalkozunk és megnézzük hogyan használhatod ki a technológiában rejlő lehetőségeket, hogy előrelendítse vállalkozásodat.')
@section('preview_image', asset('media/blog/cover-digital-transformation-4-hu.jpg'))

@section('content')
    <div class="post__featured-image">
        <img src="{{ asset('media/blog/featured-digital-transformation-4-hu.jpg') }}" srcset="{{ asset('media/blog/featured-digital-transformation-4-769w-hu.jpg') }} 769w" sizes="100vw" alt="Digitális transzformáció sorozat 4. rész – Technológia" />
    </div>
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digitális transzformáció 4. rész – Technológia</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-06-28 12:00:00">2019 június 28</time> &middot; 6 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Ez a digitális átalakulás sorozatunk befejező része. Ha egy bizonyos cikket keresel a sorozatból, akkor itt megtalálod a linkeket:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}">1. rész – Bevezető</a></li>
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">2. rész – Vállalati kultúra</a></li>
                                <li><a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}">3. rész – Üzleti folyamatok</a></li>
                                <li><strong>4. rész – Technológia</strong></li>
                            </ul>
                            <p class="has-margin-b60">A <a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">második</a> és <a href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}">harmadik</a> részben bemutattuk, hogyan segíti elő a vállalati kultúra, illetve hogyan segítik elő az üzleti folyamatok a digitális transzformációt. Ebben az utolsó részben a kirakós utolsó darabjával foglalkozunk, és megnézzük, milyen technológiákat tudunk felhasználni annak érdekében, hogy a vállalkozást egy lépéssel továbbfejlesszük.</p>
                            <h2 class="heading-3 has-margin-b30">Már automatizáltad munkafolyamatait?</h2>
                            <p>Az automatizálás az első olyan lépés, amit meg kell tenned. Az országod átlagbérétől függően egy 250.000 dolláros ipari robot, valamint annak karbantartási és működési költségei pár év alatt kiegyenlítik egy alkalmazott költségeit (1 év alatt Németországban, 6 év alatt Mexikóban)<sup><a href="https://ark-invest.com/research/robots-will-save-manufacturing-billions" target="_blank">1</a></sup>. És mindez anélkül, hogy figyelembe vennénk az alkamazottak kiképzését, az alkalmazási költségeket és a munkahelyi baleseteket. Ez nem igényel több gondolkodást.</p>
                            <p>Tapasztalataink szerint <a href="{{ localizedRoute('custom-development') }}">egy integrált szoftverrendszer</a> hasonló idő alatt térül meg. Ügyfeleink beszámolói azt mutatják, hogy átlagosan egy kicsivel több mint 2 éves időszak alatt visszanyerték befektetéseiket. Figyelembe véve, hogy egy ipari robot 12 éves élettartammal rendelkezik, azzal érvelhetünk, hogy a szoftverbe történő befektetés még jövedelmezőbb.</p>
                            <p><a href="https://www.mckinsey.com/featured-insights/future-of-work/jobs-lost-jobs-gained-what-the-future-of-work-will-mean-for-jobs-skills-and-wages#part1" target="_blank">A McKinsey adatai szerint</a> a globális munkaidő 30%-a automatizálható 2030-ig. Napjainkban pedig a munkáknak mintegy 50%-a technikailag automatizálható, illetve 10-ből 6 munkakör esetében a folyamatoknak több mint 30%-a automatizálható.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digitalis-transzformacio-automatizalhato-munkak.png') }}" alt="A munkáknak mintegy 50%-a technikailag automatizálható, illetve 10-ből 6 munkakör esetében a folyamatoknak több mint 30%-a automatizálható" />
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Mérjél mindent</h2>
                            <p>Az adatok és az elemzések segítik a vállalatokat a versenyelőny megszerzésében. Az információk gyűjtése és értékelése gyorsabb és nagyobb mértékű döntéshozatalt tesz lehetővé a tényleges bizonyítékok alapján. Egyes cégek nemcsak a folyamataikat javítják, hanem teljesen új üzleti modelleket is indítanak big data elemzés alapján.</p>
                            <p>Bár a rendelkezésre álló információ mennyisége exponenciálisan növekszik, a legtöbb vállalat csak a potenciális adatok töredékét rögzíti. A vezetők több mint egynegyede azt állítja, hogy az adatgyűjtésben és elemzésben nem voltak eléggé hatékonyak<sup><a href="https://www.mckinsey.com/business-functions/digital-mckinsey/our-insights/the-need-to-lead-in-data-and-analytics" target="_blank">2</a></sup>.</p>
                            <p>Az első lépés egy adatstratégia létrehozása: mire használják fel az adatokat? Hogyan hoz mindez értéket? A kérdések megválaszolása után megtervezheted, hogyan generálod, gyűjtöd össze és elemzed az adatokat. Előfordulhat, hogy el kell búcsúznod idejétmúlt rendszerektől (igen, itt az Excel táblázatokra gondolok), és egy belső elemzői csoportot kell létrehoznod, vagy külső szakembereknek kell átadnod az elemzési munkát.</p>
                            <p class="has-margin-b60">Néhány olyan terület, ahol az adatok segíthetnek: kielemezheted a kínálat- és a keresletbeli különbségeket, a kiaknázatlan források jobb felhasználását, az emberi hibák megértését és csökkentését, a viselkedési adatok felhasználását a marketing törekvéseidben vagy a munkaerő megszerzését.</p>
                            <h2 class="heading-3 has-margin-b30">A gépi tanulás egyre fontosabb lesz</h2>
                            <p>Személyes véleményem szerint még nincs igazi mesterséges intelligenciánk. De van gépi tanulásunk. És ez teljesen átalakítja a vállalkozásainkat és a gazdaságunkat.</p>
                            <p>A közelmúltban elérhető adatok puszta mennyisége és a számítási kapacitás növekedése az adatfeldolgozás terén a gépi tanulást tette az egyik legizgalmasabb témává a technológiai szférában.</p>
                            <p>A legismertebb példák a gépi tanulás alkalmazására az olyan személyes asszisztensek, mint az Amazon Alexája vagy az Apple Sirije, de a gépi tanulás áll a Google Fordító és a chatbotok mögött is. És ez nem minden, az elkövetkező években a gépi tanulást új fogyasztói trendek felfedezésére, klinikai vizsgálatok optimalizálására vagy megelőző karbantartás tervezésére is használják majd.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digitalis-atalakulas-gepi-tanulas-felhasznalasok.png') }}" alt="A gépi tanulást új fogyasztói trendek felfedezésére, klinikai vizsgálatok optimalizálására vagy megelőző karbantartás tervezésére is használják majd" />
                            </figure>
                            <h2 class="heading-3 has-margin-b30">Figyelj az IoT és az Ipar 4.0 kínálta lehetőségeire</h2>
                            <p>Az IoT (Internet of Things) körülöttünk van. Ott van a zsebünkben, az otthonunkban és a vállalkozásunkban is. Az internetes kapcsolattal ellátott készülékek segítenek a munka automatizálásában és az adatgyűjtésben. A gyártóiparban ezt Ipar 4.0-nak nevezik.</p>
                            <p>Valójában a gyártás az, ahol a legtöbb IoT projekt megvalósul, még a fogyasztói piacon levő projekteknél is több. A gyártási térben a korai alkalmazók 66 százaléka azt mondja, hogy az IoT most kritikus a versenyelőny szempontjából<sup><a href="https://www.verizon.com/about/sites/default/files/state-of-the-internet-of-things-market-report-2016.pdf" target="_blank">3</a></sup>.</p>
                            <p class="has-margin-b60">Legyél résen, hogy az IoT-t hol használhatod fel a termelési folyamatok felügyeletében, az energiagazdálkodásban, a hulladékkezelésben, az ügyfél- és termékadatok összesítésében és a berendezések diagnosztizálásában.</p>
                            <p class="has-margin-b60"><em>Ha élvezted digitális transzformációról szóló sorozatunkat, <a href="{{ url('#contact') }}">vedd fel velünk a kapcsolatot</a>. Mindig szívesen beszélgetünk erről a témáról.</em></p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.view', ['slug' => 'digitalis-transzformacio-3-resz-uzleti-folyamatok']) }}">&laquo; 3. rész – Üzleti folyamatok</a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Digitális transzformáció 4. rész – Technológia'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.peterilles')
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
    "@type": "BlogPosting",
    "author": {
        "@type": "Person",
        "name": "Peter Illés"
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
    "datePublished": "2019-06-28T12:00:00",
    "dateModified": "2019-06-28T12:00:00",
    "description": "Sorozatunk záró cikkében, a digitális transzformáció puzzle utolsó darabjával foglalkozunk és megnézzük hogyan használhatod ki a technológiában rejlő lehetőségeket, hogy előrelendítse vállalkozásodat.",
    "headline": "Digitális transzformáció sorozat 4. rész – Technológia",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-digital-transformation-4-hu.jpg') }}"
    },
    "inLanguage": "hu_HU",
    "keywords": "Digitális transzformáció, Digitális átalakulás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}"
    },
    "name": "Digitális transzformáció sorozat 4. rész – Technológia",
    "publisher": {
        "@type": "Organization",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('img/logo.svg') }}",
            "height": "50",
            "width": "185"
        },
        "name": "Further Digital Solutions"
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
        },
        {
            "@type": "ListItem",
            "position": "3",
            "item": {
                "@id": "{{ localizedRoute('blog.view', ['slug' => $slug]) }}",
                "name": "Digitális transzformáció sorozat 4. rész – Technológia"
            }
        }
    ]
}
</script>
@endpush
