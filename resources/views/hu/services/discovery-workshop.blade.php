@extends('hu.site')

@section('title', 'Discovery Workshop')
@section('description', 'A discovery workshop során feltárjuk a felhasználói igényeket és fájdalompontokat, megoldásokat keresünk és kidolgozunk egy termékfejlesztési stratégiát.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-multiline is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Discovery Workshop
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Van egy termékötleted amit megépítenél? <strong class="is-cobalt">Itt kezdd!</strong>
                    </h1>
                    <div>
                        A discovery workshop során feltárjuk a felhasználói igényeket és fájdalompontokat, megoldásokat keresünk és kidolgozunk egy termékfejlesztési stratégiát.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-cobalt">
                        <div class="services__service__benefits__badge">Előnyök</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>-100%: Felezd meg a fejlesztési költségeket</li>
                            <li>Használd fel {{ config('site.stats.projects') }} projektnyi tapasztalatunkat</li>
                            <li>Nyerj magabiztosságot a terméked sikerében!</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.discovery.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.discovery.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.discovery.promo.name'))
                                {{ config('site.prices.discovery.promo.name') }}.
                            @endif
                                7 napos pénz-visszafizetési garancia.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-white" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                                Foglald le most
                            </a>
                            <a class="has-text-underlined is-white" href="{{ localizedRoute('contact') }}">vagy írj</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Mikor van szükséged a <strong class="is-raspberry">discovery workshopunkra?</strong>
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        Mindenkinek ajánljuk a discovery workshopunkat, aki új terméket szeretne építeni vagy további funkciókat adna hozzá egy meglévőhöz.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Mielőtt árajánlatot kérnél</h3>
                            <p>Segítünk megfogalmazni egy világos és pontos ajánlatkérőt (RFQ), amire a beszállítók pontos ajánlatot tudnak adni, csökkentve a félreértéseket és a kommunikációs hibákat.</p>
                            <p>A discovery workshop lehetőséget ad arra is, hogy priorizáld a legfontosabb funkciókat és tulajdonságokat, valamint reális időkeretet és költségvetést állíts fel a projekthez.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Új termék fejlesztése előtt</h3>
                            <p>Összehangoljuk az igényeidet és elvárásaidat azáltal, hogy korán azonosítjuk a lehetséges kihívásokat és kockázatokat, így biztosítva, hogy a megoldás megfeleljen a céloknak.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Meglévő termék továbbfejlesztésekor</h3>
                            <p>A discovery workshopunk biztosítja, hogy a bővítés összhangban legyen a jelenlegi munkafolyamatokkal, és ne okozzon fennakadást. Segítünk feltárni a technikai következményeket és az esetleges módosításokat a zökkenőmentes átállás érdekében.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-13.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-raspberry" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                        Építsük meg a termékedet együtt
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-cobalt">Sikertörténetek</strong> ügyfeleinktől:
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <div class="has-items-centered">
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-ferenc-fodor.png') }}" alt="MPRX Ferenc Fodor testimonial" />
                        <blockquote class="testimonial__content">
                            <p>A Furtherrel több közös workshopot tartottunk aminek célja a termékeink és céljaink feltérképezése volt. (...) Rövid idő alatt megtalálták a megfelelő megoldásokat, szem előtt tartva végfelhasználók szükségleteit. A folyamat során világossá vált, hogy komoly szakértelemmel rendelkeznek digitális termékfejlesztés és digitális transzformáció terén.</p>
                            <cite class="testimonial__author">Ferenc FODOR, Menedzser Praxis</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">Mit kapsz tőlünk?</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-pearl is-small"></div>
                    <h3 class="heading-4">Felhasználó perszónák</h3>
                    <p>Szerezz mélyebb megértést arról, hogy ki a célközönséged, és mire van szükségük.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Élménytérkép (user journey map)</h3>
                    <p>Vizualizáld a felhasználók útját és érintkezési pontjait a terméken belül.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Termékfejlesztési terv</h3>
                    <p>Ismerd meg a fejlesztési folyamatot, a lehetséges buktatókat, és állíts fel reális költségvárakozásokat.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Termékspecifikáció</h3>
                    <p>Egy backlog felhasználói sztorikkal és technikai követelményekkel, amit mellékelhetsz az ajánlatkérésedhez (RFQ).</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-cobalt" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                    Indítsd el a terméked fejlesztését
                </a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">Gy.I.K.</h3>

                    <h4 class="heading-3">Mennyibe kerül egy discovery workshop és mit tartalmaz?</h4>
                    <p class="has-margin-b30"><small>Egy átfogó UX audit most csak €{{ config('site.prices.discovery.promo.price') }} és tartalmazza a felhasználói perszónák meghatározását, a user journey map elkészítését, egy termékterv elkészítését, valamint egy backlogot felhasználói sztorikkal és technikai követelményekkel.</small></p>

                    <h4 class="heading-3">Segít egy discovery workshop egy már folyamatban lévő projekten?</h4>
                    <p class="has-margin-b30"><small>Abszolút! A discovery workshopok akkor is hasznosak, ha egy meglévő terméket újratervezel, nagyobb funkciókkal bővítesz, vagy új (spin-off) terméket hozol létre.</small></p>

                    <h4 class="heading-3">Discovery workshopon kívül tudtok másban is, például UI designban vagy fejlesztésben segíteni?</h4>
                    <p><small>Igen! A szolgáltatási körünk jóval túlmutat a discovery workshopon. Igénybe veheted még termékstratégia, felhasználó kutatás, UX, UI design és szoftverfejlesztési szolgáltatásainkat is. Kérjük vedd figyelembe, hogy ezeket a szolgáltatásokat más árazással nyújtjuk.</small></p>

                    <h4 class="heading-3">Kaphatok-e pénzvisszatérítést?</h4>
                    <p><small>7 napos pénz-visszafizetési garanciát kínálunk. Ha a discovery workshopban foglaltakat nem találod relevánsnak a terméked számára, akkor a teljes befizetett összeget visszatérítjük.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Készen állsz?
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Kezdd el megvalósítani az ötletedet!
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-cobalt">
                        <span class="services__service__price">
                            €{{ config('site.prices.discovery.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.discovery.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.discovery.promo.name'))
                                {{ config('site.prices.discovery.promo.name') }}.
                            @endif
                                7 napos pénz-visszafizetési garancia.
                        </small>
                        <a class="btn has-margin-t15 is-large is-white" href="{{ config('site.prices.discovery.payment_url') }}?prefilled_promo_code={{ config('site.prices.discovery.promo.name') }}" target="_blank">
                            Foglald le most
                        </a>
                        <a class="has-text-underlined is-white" href="{{ localizedRoute('contact') }}">vagy írj</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
