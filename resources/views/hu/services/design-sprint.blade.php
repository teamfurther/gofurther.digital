@extends('hu.site')

@section('title', 'Design Sprint')
@section('description', 'Egy 5 napos innovációs workshop, amelynek célja a felhasználók megértése, a döntéshozatal felgyorsítása és validált prototípusok készítése, hogy csökkentse a kockázatokat nagy értékű projektekben. Hónapok munkáját sűríti egyetlen hétbe.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-multiline is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Design Sprint
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Oldj meg nagy kihívásokat, csupán <strong class="is-cobalt">5 nap alatt!</strong>
                    </h1>
                    <div>
                        A Design Sprint egy innovációs workshop, amely a döntéshozatal felgyorsítását és validált prototípusok készítését teszi lehetővé, annak érdekében, hogy csökkentse a kockázatokat nagy értékű projektekben.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-cobalt">
                        <div class="services__service__benefits__badge">Előnyök</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Növeld a csapat összehangoltságát</li>
                            <li>Sűríts hónapoknyi munkát egyetlen hétbe</li>
                            <li>-100%: Felezd meg a fejlesztési költségeket</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.design-sprint.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.design-sprint.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.design-sprint.promo.name'))
                                {{ config('site.prices.design-sprint.promo.name') }}.
                            @endif
                            7 napos pénz-visszafizetési garancia.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-white" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
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
                        Mikor van szükséged egy <strong class="is-raspberry">Design Sprintre?</strong>
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
                            <h3 class="heading-4 has-margin-b5">Amikor új terméket vagy funkciókat tervezel fejleszteni</h3>
                            <p>A Design Sprint egy strukturált keretet biztosít, hogy gyorsan teszteld és finomítsd a koncepciókat. Korai felhasználói visszajelzést tesz lehetővé, így a megoldások valódi felhasználói igényeket oldanak meg.</p>
                            <p>Ideális a koncepciók validálására, mielőtt teljes fejlesztésbe vágnál, ezzel időt és erőforrásokat takarítva meg.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Amikor kritikus üzleti kihívásokkal szembesülsz</h3>
                            <p>Ha elakadtál, vagy gyorsan meg kell oldanod összetett problémákat, egy Design Sprint elősegíti a különböző területek közötti együttműködést, összehangolja a csapatot és új nézőpontokat, megoldásokat hoz.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Amikor gyors iterációra és visszajelzésre van szükséged</h3>
                            <p>A Design Sprint ideális a meglévő termékek finomítására a felhasználói visszajelzések alapján, segít azonosítani a problémás pontokat és hatékonyan optimalizálni a felhasználói élményt.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-10.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-raspberry" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                        Sprinteljünk együtt
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
                    <h3 class="heading-4">Workshop facilitátor</h3>
                    <p>Egy tapasztalt facilitátor, aki végigvezet az 5 napos workshop folyamatán.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Interaktív prototípusok</h3>
                    <p>Egy interaktív prototípus, amit valós felhasználókkal lehet tesztelni.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Visszajelzés valós ügyfelektől</h3>
                    <p>Felhasználói visszajelzések és adatok a prototípus teszteléséből, amelyek irányt mutatnak a további fejlesztéshez.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Termékfejlesztési terv</h3>
                    <p>Konkrét következő lépések a megoldás finomításához, megvalósításához vagy skálázásához a Sprint eredményei alapján.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="btn has-margin-t15 is-large is-cobalt" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                    Sprintelj előre
                </a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        Így néz ki az <strong class="is-raspberry">5 nap</strong>
                    </h2>
                </div>
            </div>
            <div class="columns">
                <div class="column is-8-tablet is-6-desktop is-offset-1-desktop">
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">1</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Hétfő: Kihívás meghatározása
                            </h3>
                            <p>A csapat összeül, hogy meghatározza a kihívást, feltérképezze a problémát, és kijelölje a Sprint konkrét fókuszát.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Kedd: Ötletelés és vázlatok készítése
                            </h3>
                            <p>A csapattagok egyénileg ötletelnek és vázolják a lehetséges megoldásokat. Ez ösztönzi az egyedi megoldásokat, hogy csoportgondolkodás alakulna ki.</p>
                            <p>Minden csapattag bemutatja a vázlatait, majd a csoport elkezdi leszűkíteni az ötleteket.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Szerda: A megoldás kiválasztása
                            </h3>
                            <p>A napot egy rakás megoldási javaslattal kezdjük. A csapat áttekinti ezeket, és egy strukturált folyamat révén döntéseket hoz. Ebédre a csoport elköteleződik egyetlen megoldás mellett, amelyet majd prototípusként kidolgoz.</p>
                            <p>Délután a csapat elkezdi elkészíteni a javasolt megoldás forgatókönyv-szerű ábrázolását.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Csütörtök: Prototípus készítése
                            </h3>
                            <p>A szerdán elkészített forgatókönyv alapján a designerünk segít összerakni egy interaktív prototípust, amit felhasználókkal lehet tesztelni. Nyugodtan foglalkozz a dolgaiddal, csak időnként egyeztetünk veled chaten keresztül.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">5</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Péntek: Felhasználói interjúk
                            </h3>
                            <p>A prototípust valós felhasználókkal teszteljük, hogy visszajelzéseket gyűjtsünk arról, hogy működik-e a megoldás, és hogyan lehetne javítani rajta.</p>
                            <p>A felhasználói reakciók és meglátások alapján a csapat finomíthatja a koncepciót, vagy dönthet úgy, hogy változtat, iterál, vagy továbbhalad az ötlettel.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-15.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-9.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-12.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Sprinteld le a versenytársakat
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Szervezzük meg együtt a következő Design Sprintedet!
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-text-centered is-cobalt">
                    <span class="services__service__price">
                        €{{ config('site.prices.design-sprint.default') }}
                    </span>
                        <span class="services__service__price-promo">
                        €{{ config('site.prices.design-sprint.promo.price') }}
                    </span>
                        <small class="is-block">
                            @if (config('site.prices.design-sprint.promo.name'))
                                {{ config('site.prices.design-sprint.promo.name') }}.
                            @endif
                            7 napos pénz-visszafizetési garancia.
                        </small>
                        <a class="btn is-white has-margin-t15 is-large" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
                            Foglald le most
                        </a>
                        <a class="has-text-underlined is-white" href="{{ localizedRoute('contact') }}">vagy írj</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6-desktop">
                    <h2 class="heading-1 has-margin-b60">
                        Töltd le <strong class="is-raspberry">Design Sprint 101</strong> útmutatónkat
                    </h2>

                    <form class="has-margin-t60" action="{{ localizedRoute('freebies.get') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                            <input class="form-control" name="name" placeholder="Hogyan szólítsunk (pl. Töhötöm)? *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                            <input class="form-control" name="email" placeholder="E-mail címed *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('privacy') ? 'has-error' : '' }} has-margin-b30">
                            <label class="form-label">
                                <span class="form-checkbox">
                                    <input name="privacy" type="checkbox" value="1" />
                                    <span></span>
                                </span>
                                {!! sprintf($privacyText ?? 'Elfogadom az <a href="%s" target="_blank">adatvédelmi szabályzatban</a> foglaltakat.', localizedRoute('privacy')) !!}
                            </label>
                        </div>

                        <input name="source" type="hidden" value="freebie: Design Sprint 101" />
                        <input name="freebie" type="hidden" value="design-sprint-101.pdf" />

                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-raspberry" type="submit">
                            Útmutató letöltése
                        </button>
                    </form>
                </div>
                <div class="column has-text-right is-5-tablet is-offset-1-tablet">
                    <img src="{{ asset('media/freebies/design-sprint-101-mockup.png') }}" alt="Design Sprint 101" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">Gy.I.K.</h3>

                    <h4 class="heading-3">Mennyibe kerül egy Design Sprint és mit tartalmaz?</h4>
                    <p class="has-margin-b30"><small>Egy Design Sprint most csak €{{ config('site.prices.designü-sprint.promo.price') }} és tartalmazza a facilitátort az 5 nap során, illetve a designert aki segít az interaktív prototípusok elkészítésében.</small></p>

                    <h4 class="heading-3">Segít egy Design Sprint egy már folyamatban lévő projekten?</h4>
                    <p class="has-margin-b30"><small>Abszolút! A Design Sprintek akkor is hasznosak, ha egy meglévő terméket újratervezel, nagyobb funkciókkal bővítesz, vagy új (spin-off) terméket hozol létre.</small></p>

                    <h4 class="heading-3">Tényleg szükséges, hogy egy Design Sprint 5 napos legyen?</h4>
                    <p class="has-margin-b30"><small>Igen is, meg nem is. Ha ez az első Design Sprint élményed, javasoljuk, hogy válaszd az 5 napos Sprintet. Ha a csapatod már vett részt korábban Sprinten, akkor vannak 4 napos és akár 3 napos verziók is (ha a második Sprint ugyanazon a projekten való iterálásra szól).</small></p>

                    <h4 class="heading-3">Offline kell megcsinálnunk a Sprintet?</h4>
                    <p class="has-margin-b30"><small>Nem. A legtöbb Sprintünket online végezzük olyan eszközök segítségével, mint a Miro, Figjam és Google Meet. Azonban, ha szeretnéd, megtarthatjuk a Sprintet az irodádban (az utazási költségek nincsenek benne), vagy a budapesti (Magyarország) vagy a temesvári (Románia) helyszíneinken.</small></p>

                    <h4 class="heading-3">Design Sprinten kívül tudtok másban is, például UI designban vagy fejlesztésben segíteni?</h4>
                    <p><small>Igen! A szolgáltatási körünk jóval túlmutat a Design Sprinten. Igénybe veheted még termékstratégia, felhasználó kutatás, UX, UI design és szoftverfejlesztési szolgáltatásainkat is. Kérjük vedd figyelembe, hogy ezeket a szolgáltatásokat más árazással nyújtjuk.</small></p>

                    <h4 class="heading-3">Kaphatok-e pénzvisszatérítést?</h4>
                    <p><small>7 napos pénz-visszafizetési garanciát kínálunk. Ha a Design Sprintben foglaltakat nem találod relevánsnak a terméked számára, akkor a teljes befizetett összeget visszatérítjük.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Innoválj már ma
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Készen állsz arra, hogy 5 nap alatt hónapokat ugorj előre?
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-cobalt">
                        <span class="services__service__price">
                            €{{ config('site.prices.design-sprint.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.design-sprint.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.design-sprint.promo.name'))
                                {{ config('site.prices.design-sprint.promo.name') }}.
                            @endif
                            7 napos pénz-visszafizetési garancia.
                        </small>
                        <a class="btn has-margin-t15 is-large is-white" href="{{ config('site.prices.design-sprint.payment_url') }}?prefilled_promo_code={{ config('site.prices.design-sprint.promo.name') }}" target="_blank">
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
