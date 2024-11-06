@extends('hu.site')

@section('title', 'UX Audit Service')
@section('description', 'A UX audit folyamat során megvizsgáljuk a digitális termékedet, azonosítva a szűk keresztmetszeteket és használhatósági problémákat.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        UX Audit
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Növeld a <strong class="is-tangerine">konverziót</strong> és ügyfél <strong class="is-tangerine">elégedettséget.</strong>
                    </h1>
                    <div>
                        A UX audit folyamat során megvizsgáljuk a digitális termékedet, azonosítva a szűk keresztmetszeteket és használhatósági problémákat. Végül egy akciótervet adunk át ami azonnali hatással lesz a termékedre.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-tangerine">
                        <div class="services__service__benefits__badge">Előnyök</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>36%-al jobb konverzió</li>
                            <li>71%-al kisebb lemorzsolódás</li>
                            <li>15%-al kevesebb ügyfélszolgálati megkeresés</li>
                            <li>Applikáció, SaaS vagy weboldal esetében is alkalmazható</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.ux-audit.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ux-audit.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ux-audit.promo.name'))
                                {{ config('site.prices.ux-audit.promo.name') }}.
                            @endif
                            7 napos pénz-visszafizetési garancia.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
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
                        Szükséged van egy <strong class="is-pearl">UX auditra?</strong>
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        Ez jól hangzik, de tényleg szükséged van egy UX auditra? Amennyiben az alábbiakkal szembesülsz, akkor a válasz igen.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">A felhasználóid nem töltenek elég időt az oldalon</h3>
                            <p>Ha a felhasználók nem interakciónálnak az oldaladdal vagy kevesebb időt töltenek el ott az elvártnál.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">A felhasználóid nem vásárolnak</h3>
                            <p>Ha sok pénzt költesz el arra, hogy új felhasználók látogassanak a weboldaladra vagy töltsék le az applikációd, viszont nem tudod őket fizetős felhasználóvá konvertálni.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Az ügyfélszolgálat folyamatosan foglalt</h3>
                            <p>Ha az ügyfélszolgálati csapatod a kapacitása határán van, az azt jelentheti, hogy a felhasználóid nem elégedettek vagy a termékben nem találják amit keresnek.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-pearl has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">A számok elmaradnak az elvárttól</h3>
                            <p>Ha több metrika is lehangoló képet fest és nem tudod, hogy ezt mi okozza.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-16.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-11.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-pearl" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                        Kérd a UX auditodat ma
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
                        <strong class="is-tangerine">Sikertörténetek</strong> ügyfeleinktől:
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
                    <h3 class="heading-4">Felhasználói visszajelzések</h3>
                    <p>Ügyfélinterjúk és használhatósági tesztek során valós felhasználói visszajelzést szerzünk.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-small is-tangerine"></div>
                    <h3 class="heading-4">Átdolgozott felhasználói élmény térkép</h3>
                    <p>A visszajelzések alapján készítünk egy új felhasználói élmény térképet (user journey map).</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-raspberry is-small"></div>
                    <h3 class="heading-4">Tökéletesített navigáció</h3>
                    <p>A használhatósági tesztek és card sorting technika segítségével egy friss információ architektúrát állítunk fel.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="avatar is-cobalt is-small"></div>
                    <h3 class="heading-4">Akcióterv</h3>
                    <p>A folyamat végén egy riportot készítünk ami tartalmazza az összes észrevételt, lehetőséget és javaslatot.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-tangerine" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                        Rendeld meg a UX auditot
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        A <strong class="is-tangerine">UX audit</strong> folyamat
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
                                Felkészülés
                            </h3>
                            <p>Azzal kezdünk, hogy megismerjük a termékedet, üzleti céljaid, a csapatod és legfőképpen a felhasználóidat. Perszónákat készítünk, összeállítjuk a kérdéssort a felhasználói interjúkhoz és beidőzítjük az interjúkat. Ezzel párhuzamosan telepítjük azokat az analitikai eszközöket amik értékes adatokat fognak nekünk szolgáltatni.</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Analízis
                            </h3>
                            <p>Felhasználói interjúkat és használhatósági teszteket végzünk a vásárlókkal, hogy kvalitatív adatokat szerezzünk. Közben figyeljük az analitikákat, hogy olyan kvantitatív adatokat találjünk ami alátámasztja a megszerzett információt. A UX csapatunk megvizsgálja a terméket, design hibákat és inkonszisztenciákat keresve.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Riportálás
                            </h3>
                            <p>Az összes észrevételt struktúráljuk, javítási lehetőségeket keresünk és összeállítunk egy rögtön bevethető akciótervet.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                        <img src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-9.jpg') }}" alt="Further team" />
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
                        Ne veszíts több ügyfelet!
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Legyen jobb konverziód és tarts meg könnyebben az ügyfeleket.
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-text-centered is-tangerine">
                    <span class="services__service__price">
                        €{{ config('site.prices.ux-audit.default') }}
                    </span>
                        <span class="services__service__price-promo">
                        €{{ config('site.prices.ux-audit.promo.price') }}
                    </span>
                        <small class="is-block">
                            @if (config('site.prices.ux-audit.promo.name'))
                                {{ config('site.prices.ux-audit.promo.name') }}.
                            @endif
                            7 napos pénz-visszafizetési garancia.
                        </small>
                        <a class="btn has-margin-t15 is-large" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                            Több bevételt akarok
                        </a>
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
                        Töltsd le egy <strong class="is-pearl">minta</strong> auditot
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

                        <input name="source" type="hidden" value="freebie: ux audit sample" />
                        <input name="freebie" type="hidden" value="ux-audit-sample.pdf" />

                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-pearl" type="submit">
                            Minta letöltése
                        </button>
                    </form>
                </div>
                <div class="column has-text-right is-5-tablet is-offset-1-tablet">
                    <img src="{{ asset('media/freebies/ux-audit-sample.png') }}" alt="UX audit minta" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">Gy.I.K.</h3>

                    <h4 class="heading-3">Mennyibe kerül egy UX audit és mit tartalmaz?</h4>
                    <p class="has-margin-b30"><small>Egy átfogó UX audit most csak €{{ config('site.prices.ux-audit.promo.price') }} és tartalmazza a versenytárs és trend elemzést, felhasználói interjúkat, heurisztikus elemzést és a használhatóság javítására tett javaslatokat.</small></p>

                    <h4 class="heading-3">Használhatom a UX auditot egy már folyamatban lévő projektre?</h4>
                    <p class="has-margin-b30"><small>Természetesen! A UX audit célja, hogy projektedet egy folyamatos fejlesztési pályára állítsa.</small></p>

                    <h4 class="heading-3">UX auditon kívül tudtok másban is, például kutatásban vagy UI designban segíteni?</h4>
                    <p><small>Igen! A UX audit a szolgáltatásunk első lépése. Igénybe veheted még termékstratégia, felhasználó kutatás, UX, UI design és szoftverfejlesztési szolgáltatásainkat is. Kérjük vedd figyelembe, hogy ezeket a szolgáltatásokat más árazással nyújtjuk.</small></p>

                    <h4 class="heading-3">Kaphatok-e pénzvisszatérítést?</h4>
                    <p><small>7 napos pénz-visszafizetési garanciát kínálunk. Ha az auditban foglalt javaslatokat nem találod relevánsnak a terméked számára, akkor a teljes befizetett összeget visszatérítjük.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-1 has-margin-b15">
                        Készen állsz?
                    </h3>
                    <h4 class="heading-5 has-margin-b0">
                        Kérj egy auditot ma az applikációd, SaaS terméked vagy weboldalad számára.
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-tangerine">
                        <span class="services__service__price">
                            €{{ config('site.prices.ux-audit.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ux-audit.promo.price') }}
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ux-audit.promo.name'))
                                {{ config('site.prices.ux-audit.promo.name') }}.
                            @endif
                            7 napos pénz-visszafizetési garancia.
                        </small>
                        <a class="btn has-margin-t15 is-large" href="{{ config('site.prices.ux-audit.payment_url') }}?prefilled_promo_code={{ config('site.prices.ux-audit.promo.name') }}" target="_blank">
                            Kérd a UX auditodat ma
                        </a>
                        <a class="has-text-underlined is-white" href="{{ localizedRoute('contact') }}">vagy írj</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
