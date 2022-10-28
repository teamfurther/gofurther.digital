@section('title', 'EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!')
@section('description', 'Tud-e a mesterséges intelligencia segíteni az ötletvalidálásban és a prototípus készítésben? Kísérleteztem, hogy neked ne kelljen!')
@section('preview_image', route('generate-cover', ['title' => 'EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-10-28 10:00:00">2022 október 28</time> &middot; 3 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Miközben a <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-2-resz']) }}" target="_blank">prototípus készítésről</a> és <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}" target="_blank">ötletvalidációról</a> írtam korábbi cikkeimet, folyamatosan ott motoszkált bennem az a gondolat, hogy bár egy jól átgondolt és kivitelezett validációs folyamattal rengeteg energiát és pénzt lehet hosszútávon megtakarítani, mégis meglehetősen sok munkát igényel az, hogy használható eredményeket kapjunk.</p>
                            <p class="has-margin-b60">Mivel az utóbbi időben meglehetősen fáradt voltam, egy pár órára félretettem a szokásos munkámat és elkezdtem különböző mesterséges intelligencia projektekkel játszani, hogy lássam, hogyan tudnám ezek segítségével felgyorsítani a validációs folyamatot és a prototípus gyártást.</p>
                            <h2 class="heading-2 has-margin-b30">Sosem írok már landing oldal szöveget</h2>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-1-resz']) }}" target="_blank">smoke test</a> oldal egy nagyszerű mód a termékünk iránti érdeklődés felmérésére. De az oldal marketing szövegének a megírása egy időigényes feladattá válhat.</p>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'https://www.copyshark.ai']) }}" target="_blank">CopyShark</a> egy GPT-3 (ez egy nyelvi modell, ami mély gépi tanulást használ szövegek generálására) alapú szövegíró szoftver, ami segít a landing oldalak, vagy akár a pay-per-click hirdetések szövegének a megírásában.</p>
                            <p>Az eredmények közel sem tökéletesek, de ha annyira utálsz szövegeket írni mint én, egy jó alapot adhat, amit aztán kedved szerint szerkeszthetsz.</p>
                            <p>Alább megnézhettek egy nagyszerű videót Phillip Stemann-tól, amiben bemutatja a CopyShark különböző eszközeit és árazását.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/XWOayTNpvRw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="heading-2 has-margin-b30">Készíts drótvázakat beszédfelismerés segítségével</h2>
                            <p>A <a href="{{ localizedRoute('blog.show', ['slug' => 'https://teleporthq.io/']) }}" target="_blank">TeleportHQ</a> több mesterséges intelligencia alapú szoftverterméket fejleszt, melyek segítségével weboldalakat lehet építeni vagy akár kódot generálni a UI tervekből. Az egyik legújabb termékük segítségével drótvázakat lehet készíteni a kézzel skiccelt rajzokból. Egyszerűen lerajzolsz valamit egy papírra, beszkenneled vagy lefotózod és voilá. Máris van egy szerkeszthető drótvázad.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/K4D0H2MCTrM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p>Nem tudsz rajzolni? Sebaj! A TeleportHQ már egy olyan GPT motoron is dolgozik, ami drótvázakat rajzol hang alapú parancsok nyomán.</p>
                            <div class="post__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/fq1RPJUI_GM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <h2 class="heading-2 has-margin-b30">Mesterséges intelligencia által készített 3D modellek</h2>
                            <p>Amennyiben egy fizikai terméken dolgozol, biztos tudod, hogy a 3D modellek megrajzolása egy kisebb vagyonba kerül. De mi van ha a termék ötletet még nem validáltad és csak egy sor interjú alkalmával mutatnád meg a felhasználóknak? Ilyenkor bizonyára nem szeretnél több ezer dollárt elkölteni, hogy egy bizonytalan ötletet lemodellez.</p>
                            <p>Szerencsére, van megoldás. A Midjourney egy olyan mesterséges intelligencia program ami képeket készít szöveges leírásokból. És tökéletesen használható gyors prototípus készítésre.</p>
                            <p>Körülbelül 5 percembe telt, hogy egy vagány modellt kapjak egy olyan exoskeletonról, amely a konditerembe járóknak segít, hogy helyesen végezzék a gyakorlatokat. Jó, mi?</p>
                            <figure>
                                <img src="{{ asset('media/blog/midjourney-exoskeleton.png') }}" alt="Egy exoskeleton 3D modellje Midjourney segítéségével készítve" />
                            </figure>
                            <p>Azután eszembe jutott az a kütyü, amit példának használtam a <a href="{{ localizedRoute('blog.show', ['slug' => 'lean-termekfejlesztesi-folyamat-1-resz']) }}" target="_blank">korábbi cikkeimben</a>. Egy olyan termék amit a kerékpárra, elektromos rollerre vagy akár Segwayre szerelhetünk és kismillió szenzornak köszönhetően egy fokozatosan erősödő rezgéssel és sípolással jelez ha akadályt vagy veszélyt érzékel (gyalogos átjáró, gépjármű, stb.). Gondoltam, megpróbálok erről a kütyüről is egy pár modellt készíteni.</p>
                            <p class="has-margin-b60">Az "escooter garmin varia micromobility safety gadget smartwatch handlebar” kulcsszavakra a következő képeket kaptam. Nem vagyok annyira elégedett ezzel az eredménnyel, mint az exoskeletonos példával, de ez is bőven elég, hogy egy interjú során a felhasználóknak legyen egy elképzelésük arról, hogyan nézni ki a termék.</p>
                            <figure>
                                <img src="{{ asset('media/blog/midjourney-safetylyfyr.png') }}" alt="A Safetylyfyr 3D modellje Midjourney segítéségével készítve" />
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Milyen más lehetőségek vannak még?</h2>
                            <p>Mielőtt belevágtam volna a kísérletezésbe, úgy gondoltam, hogy a mesterséges intelligencia használata ötletvalidációs célokra kissé merész ötlet. Még mindig azt hiszem, hogy ez még egy kis időnek el kell telnie, hogy tényleg bevethetőek legyenek ezek az eszközök. De ha nem is tudjuk teljesen kiváltani az emberi munkát, a mesterséges intelligencia által gyártott szövegek, képek egy jó kiindulópontot jelenthetnek.</p>
                            <p>Tudtok még más olyan mesterséges intelligencia megoldásokról, amiket termékfejlesztés során, ötletvalidáció vagy prototípus gyártás céljából be lehet vetni? Ha igen, írjátok meg nekem!</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!'])
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
        "name": "Peter Illes"
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
    "datePublished": "2022-10-28T12:00:00",
    "dateModified": "2022-10-28T12:00:00",
    "description": "Tud-e a mesterséges intelligencia segíteni az ötletvalidálásban és a prototípus készítésben? Kísérleteztem, hogy neked ne kelljen!",
    "headline": "EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!']) }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Mesterséges intelligencia, GPT, GPT-3, Beszédfelismerés, Gépi tanulás, AI, ML",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!",
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
                "name": "EXTRA: Mesterséges intelligencia által gyártott prototípusok? Igen!"
            }
        }
    ]
}
</script>
@endpush
