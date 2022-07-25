@section('title', 'Digitális transzformáció sorozat 3. rész – Üzleti folyamatok')
@section('description', 'Sorozatunk harmadik részében megnézzük hogyan segíthetik a BPM és az agilis metódusok a digitális transzformációt.')
@section('preview_image', route('generate-cover', ['title' => 'Digitális transzformáció 3. rész – Üzleti folyamatok']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Digitális transzformáció 3. rész – Üzleti folyamatok</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2019-06-27 12:00:00">2019 június 27</time> &middot; 5 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Ez a digitális átalakulás sorozatunk harmadik része. Ha egy bizonyos cikket keresel a sorozatból, akkor itt megtalálod a linkeket:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-1-resz-bevezeto']) }}">1. rész – Bevezető</a></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">2. rész – Vállalati kultúra</a></li>
                                <li><strong>3. rész – Üzleti folyamatok</strong></li>
                                <li><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}">4. rész – Technológia</a></li>
                            </ul>
                            <p class="has-margin-b60"><a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">Sorozatunk második részében</a> megtudtuk, hogy a digitális transzformáció alapja egy erős digitális kultúra a csapaton belül. De hogyan kellene megváltoztatnunk a folyamatokat annak érdekében, hogy támogassuk ezt a kulturális váltást?</p>
                            <h2 class="heading-3 has-margin-b30">Üzletifolyamat-kezelés</h2>
                            <p>A digitális átalakulás lehetővé tétele érdekében a vállalatnak világos stratégiát kell követnie a folyamatok hiányosságainak azonosítására, és megoldásokat kell találnia ezek hatékonyabbá tétele érdekében. Ezt a lépést üzleti folyamatkezelésnek nevezik (angolul business process management, rövidítve BPM).</p>
                            <p>A BPM célja, hogy azonosítsa és optimalizálja az ismétlődő, kiszámítható folyamatokat, amelyek a vállalat működéséhez szükségesek. A BPM sok tekintetben kapcsolódik olyan filozófiákhoz, mint a Kaizen, olyan módszerekhez, mint a Lean vagy olyan eszközökhöz, mint a Six Sigma.</p>
                            <figure>
                                <img src="{{ asset('media/blog/digital-transformation-bpm-hu.png') }}" alt="Üzletifolyamat-kezelés, angolul Business Process Management (BPM)" />
                            </figure>
                            <p class="has-margin-b60">A BPM egyszeri esemény volt sok cégnél, de a digitális piacvezetők állandó folyamattá tették. Ha a vállalat már rendelkezik a szükséges <a href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">kulturális oldallal</a>, akkor nagyon könnyű lesz a csapatnak teljes mértékben alkalmazni a BPM-et.</p>
                            <h2 class="heading-3 has-margin-b30">Legyél gyors, legyél agilis</h2>
                            <p>Az agilis egy másik kifejezés, amely gyakran kapcsolódik a digitális transzformációhoz. Az agilis fogalom az ú.n. Agile Manifestóban leírt értékek és elvek halmazát takarja. Ugyanakkor az agilis fogalom szorosan kapcsolódik az informatikai iparághoz, ahol széles körben használják. Előnyei egyértelműek és bizonyítottak, ezért nincs ok arra, hogy más üzleti területeken ne alkalmazzák.</p>
                            <p>Az agilis módszer fő előnye a rugalmasság. Hagyományosan az új üzleti folyamatokat részletesen dokumentálják, és kevés helyet hagynak a változtatásra. Az agilis módszer viszont felkarolja a változást.</p>
                            <p class="has-margin-b60">Az agilis folyamat rugalmas változtatásokat és fókuszváltást tesz lehetővé abban az esetben, ha az üzleti prioritások megváltoznak, vagy a csapat olyan megoldást fedez fel, amely hatékonyabb vagy több üzleti értéket jelent.</p>
                            <p class="has-margin-b60">Összefoglalva, a BPM lehetővé teszi a csapat számára, hogy éber maradjon, és figyeljen a javítási lehetőségekre, az agilis módszer segít abban, hogy gyorsabbá tegye a javítások alkalmazását. Ezeknek az eszközöknek a fokozatos bevezetése egy adott csapatba egyszerre lehetővé teszi a vállalatok számára, hogy támogassák a digitális átalakulást.</p>
                            <div class="has-text-centered">
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-2-resz-vallalati-kultura']) }}">&laquo; 2. rész – Vállalati kultúra</a>
                                <a class="btn is-pearl has-margin-b15" href="{{ localizedRoute('blog.show', ['slug' => 'digitalis-transzformacio-4-resz-technologia']) }}">4. rész – Technológia &raquo; </a>
                            </div>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Digitális transzformáció 3. rész – Üzleti folyamatok'])
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

    @include(getLang() . '.banners.newsletter-subscription')
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
    "datePublished": "2019-06-27T12:00:00",
    "dateModified": "2019-06-27T12:00:00",
    "description": "Sorozatunk harmadik részében megnézzük hogyan segíthetik a BPM és az agilis metódusok a digitális transzformációt.",
    "headline": "Digitális transzformáció sorozat 3. rész – Üzleti folyamatok",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-digital-transformation-3-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Digitális transzformáció, Digitális átalakulás",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Digitális transzformáció sorozat 3. rész – Üzleti folyamatok",
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
                "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}",
                "name": "Digitális transzformáció sorozat 3. rész – Üzleti folyamatok"
            }
        }
    ]
}
</script>
@endpush
