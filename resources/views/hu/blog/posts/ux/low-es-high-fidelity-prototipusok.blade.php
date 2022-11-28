@section('title', 'Low- és high fidelity prototípusok')
@section('description', 'A klasszikus csirke és a tojás probléma: a kínálati vagy a keresleti oldalra fókuszáljunk először? Ebben a cikkben megmutatjuk mi hogyan csináltuk egy pár korábbi projekten.')
@section('preview_image', route('generate-cover', ['title' => 'Low- és high fidelity prototípusok']))

@section('content')
    <section class="section">
        <div class="post is-single h-entry">
            <div class="post__header">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h1 class="post__title p-name">Low- és high fidelity prototípusok</h1>
                            <div class="post__meta">
                                <time class="dt-published" datetime="2022-11-28 10:00:00">2022 november 28</time> &middot; 4 perces olvasás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post__content">
                <div class="container">
                    <div class="columns is-reversed">
                        <div class="column is-10-tablet is-8-desktop e-content">
                            <p>Mind a low-fidelity, mind a high-fidelity, prototípusok egy digitális termék nyers változatai (modellei). A tervezők arra használják őket, hogy a felhasználók egy adott folyamathoz való viszonyulását, reakcióját teszteljék. A prototípusokat elsősorban új funkciók és alapvető tervezési elvek tesztelésére használják.</p>
                            <p>A digitális termékek esetében a prototípuskészítés a felhasználó és a felület közötti végső interakció vizualizációja.</p>
                            <figure>
                                <img src="{{ asset('media/blog/low-fidelity-prototype.jpg') }}" alt="Low-fidelity prototípusok" />
                                <figcaption>Low-fidelity prototípus</figcaption>
                            </figure>
                            <h2 class="heading-2 has-margin-b30">Low-fidelity prototípusok</h2>
                            <p class="has-margin-b30">Az low-fidelity prototípusok egy jövőbeli weboldal, platform vagy alkalmazás első iterációi. Az ilyen típusú prototípusokat a tervezési folyamat korai szakaszában tesztelik, hogy biztosítsák a termék koncepciójának helyességét. Ez egy jó technika arra is, hogy választ kapjunk, mit gondolnak az emberek a termékről, egy adott részről vagy folyamatról.</p>
                            <h3 class="heading-3 has-margin-b30">Két fajta low-fidelity prototípus létezik: papír alapú és digitális.</h3>
                            <p>A kézzel készített papírrajzokat papír prototípusoknak nevezzük. Soha ne becsüld alá az ilyen jellegű prototípust. Sok fantasztikus webhely, program és platform papíron született. Segítség lehet, ha kiválasztunk egy prototípus sablont a <a href="https://sneakpeekit.com/" target="_blank">Sneakpeekit</a> segítségével, majd kinyomtatjuk.</p>
                            <p>A digitális prototípusokat vagy drótvázakat egy speciális prototípus-szerkesztő segítségével lehet megtervezni. Számos eszköz kifejezetten egy firka kinézetét utánozza, hogy a projekt struktúrájára hívja fel a figyelmet az esztétika helyett. Ez segít a felhasználóknak megérteni a mögöttes ötletet, a különböző elemek kapcsolatát és az általános információáramlást ahelyett, hogy az esztétikára összpontosítanának. Ezek a vázlatok az oldalakon lévő blokkokat, átmeneteket és alapvető funkciókat ábrázolnak.</p>
                            <p class="has-margin-b60">A prototípusokat a célközönségen tesztelik. Nem jó ötlet a prototípusokat barátokon és munkatársakon tesztelni, mert lehet, hogy nem ők a célközönség, vagy előfordulhat az úgynevezett szakmai deformáció jelensége, így a prototípus tesztelési eredményei torzulhatnak. További információkért olvasd el blogbejegyzésünket a <a href="https://gofurther.digital/en/blog/posts/conducting-usability-tests" target="_blank">használhatóság teszteléséről.</a> A prototípusok tesztelése után a szakemberek összegzik a kapott információkat, és keresik a lehetőségeket a funkcionalitás tökéletesítésére.</p>
                            <p class="has-margin-b30">A low-fidelity prototípusok használatának előnyei:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Kevesebb idő szükséges a prototípuskészítésre;</li>
                                <li>A low-fidelity prototípus fázisában a változtatások végrehajtása egyszerűbb, mint a high-fidelity prototípusok létrehozása vagy a fejlesztés során;</li>
                                <li>Segít kitalálni, hogy a projekt koncepciója világos-e a felhasználók számára;</li>
                                <li>A low-fidelity prototípusok kisebb nyomást gyakorolnak a felhasználókra. Nyugodtabbnak érezhetik magukat, és részletesebben fejezhetik ki nézeteiket;</li>
                                <li>A tervezés köztes szakaszai értékelhetővé válnak a stakeholderek számára, így nem várják el azonnal a teljes tervet;</li>
                                <li>Jó megértést kínál a termékről és a felhasználókról.</li>
                            </ul>
                            <p class="has-margin-b30" >Tippek:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Low-fidelity prototípusoknál jobb elkerülni a színek használatát, mivel ezek elvonhatják a felhasználó figyelmét. Ne pazaroljuk az időnket azzal, hogy megtaláljuk a tökéletes színpalettát.</li>
                                <li>A koncepció a prioritásod, ezért ne részletezd túl a prototípust;</li>
                                <li>Elengedhetetlen, hogy a prototípusokat legalább öt emberrel teszteljük. Így a koncepcióhoz kapcsolódó következtetések objektívebbek és részletesebbek lesznek.</li>
                            </ul>
                            <p class="has-margin-b30">Ki a felelős az épülő prototípusért?</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>UX tervezők</li>
                                <li>UX / UI tervezők</li>
                                <li>Terméktervezők</li>
                                <li>Marketingesek</li>
                            </ul>
                            <p class="has-margin-b30">Digitális prototípuskészítési források:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="https://www.uxpin.com/" target="_blank">UXpin</a></li>
                                <li><a href="https://marvelapp.com/" target="_blank">Marvel</a></li>
                                <li><a href="https://balsamiq.com/" target="_blank">Balsamiq</a></li>
                                <li><a href="https://www.justinmind.com/" target="_blank">Justinmind</a></li>
                            </ul>
                            <figure>
                                <img src="{{ asset('media/blog/high-fidelity-mockup.png') }}" alt="High-fidelity prototípusok" />
                                <figcaption>High-Fidelity Prototípusok</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">High-Fidelity Prototípusok</h3>
                            <p>Ezek a prototípusok, vagy mockup-ok, úgy néznek ki, mint egy végtermék pixel-tökéletes elemekkel. Több fajta prototípus készíthető: nem interaktív prototípus, high-fidelity interaktív prototípus vagy akár egy lefejlesztett HTML/CSS oldal. Az első két megoldást részesítjük előnyben, mivel kevesebb erőfeszítést igényel, és nem kér fejlesztői hozzájárulást. Ezzel a lehetőséggel időt és pénzt takaríthatsz meg.</p>
                            <p>A high-fidelity prototípusokat a felhasználókon tesztelik annak megállapítására, hogy a felület felhasználóbarát és intuitív-e, illetve hogy megfelel-e a különböző típusú látássérültek akadálymentesítési szabványainak (ezt néha "accessibility tesztelésének" nevezik).</p>
                            <p class="has-margin-b30">A high-fidelity prototípus tesztelése után az eredményeket a vásárló/terméktulajdonos jóváhagyja, majd átadja a fejlesztésnek.</p>
                            <p class="has-margin-b30">A high-fidelity prototípusok használatának előnyei:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>Segítenek a felhasználói felület elemei és a funkcionalitás tesztelésében. — menük, szűrők, beviteli mezők, grafikai elemek (ikonok, fotók, illusztrációk, animációk);</li>
                                <li>Ezen prototípusok nagy pontossága miatt az adott termékről részletesebb következtetéseket lehet levonni.</li>
                            </ul>
                            <p class="has-margin-b30" >Tippek:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>A felhasználókat nem szabad megtanítani a weboldal vagy applikáció használatára. Hagyjuk, hogy hozzák meg saját döntéseiket. A feladatunk az, hogy megfigyeljük, majd megértsük, mi áll a döntésük mögött;</li>
                                <li>Készüljünk fel a tesztre. Mindig legyen egy listánk azokról a kérdésekről, amelyeket a tesztelés közben tehetünk fel a felhasználóknak.</li>
                            </ul>
                            <p class="has-margin-b30">Ki a felelős a prototípus létrehozásáért:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li>UX tervezők</li>
                                <li>UX / UI tervezők</li>
                                <li>Terméktervezők</li>
                            </ul>
                            <p class="has-margin-b30">Prototípuskészítő eszközök:</p>
                            <ul class="list has-bullets has-margin-b60">
                                <li><a href="https://www.axure.com/" target="_blank">Axure</a></li>
                                <li><a href="https://www.figma.com/prototyping/" target="_blank">Figma</a></li>
                                <li><a href="https://www.sketch.com/" target="_blank">Sketch</a></li>
                                <li><a href="https://www.adobe.com/ua/products/xd.html" target="_blank">Adobe XD</a></li>
                                <li><a href="https://www.protopie.io/" target="_blank">ProtoPie</a></li>
                            </ul>
                            <figure>
                                <img src="https://gofurther.digital/media/blog/the-lean-product-process-lowfi-vs-highfi.png" alt="Low- és high fidelity prototípusok" />
                                <figcaption class="has-margin-b30">Egy low-fidelity drótváz és egy high-fidelity mockup</figcaption>
                            </figure>
                            <h3 class="heading-3 has-margin-b30">Összefoglalás</h3>
                            <p>A prototípusokat két kategóriába sorolják: low- és high-fidelity. A tervezők low-fidelity prototípusokat alkalmaznak a projekt korai szakaszában, hogy biztosítsák a tartalom pontosságát. A high-fidelity prototípusokat a tervezési folyamat későbbi szakaszaiban hozzák létre az összes jelenlegi hipotézis értékelése érdekében. Miután tesztelted a válaszokat korábban elkészített kérdésekkel, ne felejts el interjút készíteni a résztvevőkkel.</p>
                        </div>
                        <div class="column is-1-tablet is-2-desktop">
                            @include(getLang() . '.blog.includes.share', ['slug' => $slug, 'title' => 'Low- és high fidelity prototípusok'])
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column is-10-tablet is-8-desktop is-offset-1-tablet is-offset-2-desktop">
                        @include(getLang() . '.blog.authors.nocipal')
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
    "datePublished": "2022-11-28T10:00:00",
    "dateModified": "2022-11-28T10:00:00",
    "description": "Low- és high fidelity prototípusok",
    "headline": "Low- és high fidelity prototípusok",
    "image": {
        "@type": "ImageObject",
        "height": 630,
        "width": 1200,
        "url": "{{ route('generate-cover', ['title' => 'Low- és high fidelity prototípusok']) }}"
    },
    "inLanguage": "hu_hu",
    "keywords": "Termékfejlesztés, Startup, UX, Prototípus, Drótváz, Wireframe, Mockup",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ localizedRoute('blog.show', ['slug' => $slug]) }}"
    },
    "name": "Low- és high fidelity prototípusok",
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
                "name": "Low- és high fidelity prototípusok"
            }
        }
    ]
}
</script>
@endpush
