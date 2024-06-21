@extends('hu.site')

@section('title', 'UX Audit Service')
@section('description', 'A UX audit folyamat során megvizsgáljuk a digitális termékedet, azonosítva a szűk keresztmetszeteket és használhatósági problémákat.')

@section('content')
    <section class="section is-tangerine">
        <div class="container">
            <div class="columns">
                <div class="column is-12-desktop">
                    <h1 class="hero-heading has-margin-b15">
                        UX <strong class="is-white">Audit</strong>
                    </h1>
                    <h5 class="heading-5 is-white">
                        Jobb felhasználói élmény az üzleti célok érdekében. A UX audit folyamat során megvizsgáljuk a digitális termékedet, azonosítva a szűk keresztmetszeteket és használhatósági problémákat. Végül egy akciótervet adunk át ami azonnali hatással lesz a termékedre.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Szükséged van rá?
                    </h2>
                    <h4 class="heading-5 has-margin-b60 has-text-centered">
                        Ez jól hangzik, de tényleg szükséged van egy UX auditra? Amennyiben az alábbiakkal szembesülsz, akkor a válasz igen.
                    </h4>
                </div>
            </div>
            <div class="columns is-reversed-tablet">
                <div class="column is-6-desktop is-offset-1-desktop is-8-tablet">
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">A felhasználóid nem töltenek elég időt az oldalon</h3>
                            <p>Ha a felhasználók nem interakciónálnak az oldaladdal vagy kevesebb időt töltenek el ott az elvártnál.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">A felhasználóid nem vásárolnak</h3>
                            <p>Ha sok pénzt költesz el arra, hogy új felhasználók látogassanak a weboldaladra vagy töltsék le az applikációd, viszont nem tudod őket fizetős felhasználóvá konvertálni.</p>
                        </div>
                    </div>
                    <div class="is-flex has-margin-b30">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
                        <div>
                            <h3 class="heading-4 has-margin-b5">Az ügyfélszolgálat folyamatosan foglalt</h3>
                            <p>Ha az ügyfélszolgálati csapatod a kapacitása határán van, az azt jelentheti, hogy a felhasználóid nem elégedettek vagy a termékben nem találják amit keresnek.</p>
                        </div>
                    </div>
                    <div class="is-flex">
                        <div class="list-hero is-raspberry has-padding-r60">↪</div>
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
        </div>
    </section>

    <section class="section">
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
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        A <strong class="is-raspberry">UX audit</strong> folyamat
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
                <div class="column is-10-tablet is-offset-1-tablet is-8-widescreen is-offset-2-widescreen">
                    <h2 class="hero-heading">
                        <strong class="is-tangerine">Sikertörténetek</strong> ügyfeleinktől:
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-b90">
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

    @include(getLang() . '.banners.contact-form')
@endsection
