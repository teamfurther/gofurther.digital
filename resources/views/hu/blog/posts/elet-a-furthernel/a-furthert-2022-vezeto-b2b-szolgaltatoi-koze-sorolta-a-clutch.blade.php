@section('title', 'A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch')
@section('description', 'Örömmel jelentjük, hogy a Clutch, 2022 vezető B2B szolgáltatói közé sorolt minket! A beszámolójuk szerint, egyike vagyunk Románia vezető szoftverfejlesztő cégeinek.')
@section('preview_image', route('generate-cover', ['title' => 'A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch!']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-05-18 12:00:00">2022 május 18</time> &middot; 2 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>A Further Digital Solutionsnél ügyfélközpontú megoldások kidolgozására fókuszálunk, ügyfeleinket innovatív megoldásokkal segítve. 2013 óta támogatjuk ügyfeleinket új digitális termékek fejlesztésében és a transzformációs kihívásaik megoldásában.</p>
                            <p>Ma, örömmel jelentjük, hogy 2022 egyik vezető B2B szolgáltatója lettünk. A <a href="https://clutch.co/ro/developers" target="_blank">Clutch</a> riportja szerint, egyike vegyunk Románia vezető szoftverfejlesztő cégeinek. Igaz, elég hosszú a lista, de ettől függetlenül büszkék vagyunk arra, hogy olyan cégek mellett szerepelhetünk, akiknek a munkájára hosszú ideje csodálattal tekintünk.</p>
                            <p>Ha nem teljesen világos, hogyan lehet egy magyar cég Románia egyik vezető szolgáltatója, hadd osszunk meg egy kis háttértörténetet. A Further 100% távmunkában dolgozik. A csapat nagyrésze Románia magyarajkú vidékeiről származik, míg a csapat többi része Magyarországon van.</p>
                            <figure>
                                <img src="{{ asset('media/blog/clutch-further-recognized-as-2022-leading-b2b-service-provider.png') }}" alt="A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch" />
                            </figure>
                            <p>A Clutch egy piackutatási platform, amely segít a vállalkozásoknak megtalálni azokat a szolgáltatókat akik segítenek nekik elérni a céljaikat. Minden évben, a Clutch iparági és földrajzilag szegmentált riportokat állít össze, így lettünk büszke tagjai az idei toplistának.</p>
                            <p><em>"Mindig jól esik az elismerés. Az, hogy ez az elismerés a Clutchtól jön, ahonnan a megkereséseink nagyrészét kapjuk, megerősíti azt, hogy érdemes volt ennyi energiát fordítani arra, hogy ügyfeleinknek valós értéket adjunk."</em><br /> — Illés Péter, a Further Digital Solutions alapítója</p>
                            <p>Olvasd el, hogy <a href="https://clutch.co/profile/further-digital-solutions?sort_by=date_DESC&project_cost=&service_provided=&review_type=#reviews" target="_blank">mint mondanak az ügyfeleink</a> a megoldásainkról:</p>
                            <p><em>"A Further egy "boutique ügynökség", akinek a csapata segít megtalálni a megfelelő megoldást a lehető legrövidebb idő alatt, mindeközben pedig folyamatosan szem előtt tartják az ügyfél igényeit."</em><br />— Fodor Ferenc, Termékfejlesztési vezető, Menedzser Praxis</p>
                            <p><em>"Humorral kezeltük a kissé közhelyes ügyfél/beszállító szerepeinket és folyamatosan tanultunk egymástól."</em><br /> — Brian Dubb, a centralized.me alapítója</p>
                            <p>Köszönjük mindenkinek aki megosztotta az őszinte véleményét és visszajelzését a szolgáltatásainkról. Olvasd el a teljes <a href="{{ localizedRoute('projects') }}" target="_blank">esettanulmányokat</a> is, hogy átfogó képet kapjál projektjeinkről.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch'])
                        </div>
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
    "datePublished": "2022-05-18T12:00:00",
    "dateModified": "2022-05-18T12:00:00",
    "description": "Örömmel jelentjük, hogy a Clutch, 2022 vezető B2B szolgáltatói közé sorolt minket! A beszámolójuk szerint, egyike vagyunk Románia vezető szoftverfejlesztő cégeinek.",
    "headline": "A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ asset('media/blog/cover-further-recognized-as-2022-leading-b2b-service-provider-hu.png') }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Further Digital Solutions, Further",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch",
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
                "name": "Homepage"
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
                "name": "A Furthert 2022 vezető B2B szolgáltatói közé sorolta a Clutch"
            }
        }
    ]
}
</script>
@endpush



@push('content-scripts')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush
