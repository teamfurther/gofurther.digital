@extends('hu.site', ['showFooter' => false, 'showNav' => false])

@section('title', 'MVP zsebkalauz')
@section('description', 'Ez az anyag elkalauzol az MVP típusai között és tippeket ad arra, hogy mikor melyiket érdemes használni.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12-desktop">
                    <h1 class="hero-heading has-margin-b15">
                        <strong class="is-tangerine">MVP zsebkalauz</strong><br />
                        11 mód, hogy MVP-t építsünk.
                    </h1>
                    <h2 class="heading-5">
                        Ez az anyag elkalauzol az MVP típusai között és tippeket ad arra, hogy mikor melyiket érdemes használni.
                    </h2>
                </div>
            </div>
            <div class="columns has-margin-t60">
                <div class="column is-6-desktop">
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

                        <input name="source" type="hidden" value="freebie: mvp guide" />
                        <input name="freebie" type="hidden" value="mvp-guide-hu.pdf" />

                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-pearl" type="submit">
                            Letöltöm az ingyenes anyagot
                        </button>
                    </form>
                </div>
                <div class="column is-6-desktop has-text-right">
                    <img src="{{ asset('media/freebies/mvp-guide-mockup-hu.png') }}" alt="MVP zsebkalauz" />
                </div>
            </div>
        </div>
    </section>

    <section class="section is-cobalt">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop is-offset-2-desktop">
                    <h3 class="heading-2 is-white">Miben segít ez a kalauz?</h3>
                </div>
                <div class="column is-4-desktop">
                    <ul class="list has-discs is-white">
                        <li>hogy megismerkedj az MVP-kkel</li>
                        <li>hogy elkerüld a prototípuskészítés gyakori hibáit</li>
                        <li>hogy megismerd a különböző MVP típusokat és hogy mikor melyiket érdemes használni</li>
                        <li>hogy milyen metrikákat mérjünk prototípus tesztelés közben</li>
                        <li>hogy miként mérd a kíserletek sikerességét és ismerd meg jobban a célközönséged</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="heading-2 has-text-centered">Kinek ajánljuk ezt az anyagot?</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="face face--3"></div>
                    <h4 class="heading-4">Ötletgazdáknak</h4>
                    <p>Akik jobban megszeretnék ismerni a célközönségüket, továbbá minimalizálni szeretnék a startupokkal járó kockázatot.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="face face--1"></div>
                    <h4 class="heading-4">Product ownereknek</h4>
                    <p>Akik szeretnének egy költséghatékony módszert az új termékfunkciók tesztelésére.</p>
                </div>
                <div class="column has-text-centered has-padding-l30 has-padding-r30">
                    <div class="face face--5"></div>
                    <h4 class="heading-4">Vezetőknek</h4>
                    <p>Akik egy stabil vállalkozáson belüli új termékek fejlesztéséért felelnek.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column has-margin-b0 is-3-tablet is-offset-1-tablet is-2-desktop is-offset-2-desktop">
                    <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}">
                        <img src="{{ asset('media/blog/thumb-validation-in-product-development.png') }}" alt="Validáció a termékfejlesztésben" />
                    </a>
                </div>
                <div class="column is-7-tablet is-6-desktop">
                    <h3 class="heading-4 has-margin-b15">Ez is érdekelhet</h3>
                    <ul class="list has-bullets">
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'validacio-a-termekfejlesztesben']) }}">
                                    Validáció a termékfejlesztésben
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => '11-mod-hogy-mvp-t-epitsunk-1-resz']) }}">
                                    11 mód, hogy MVP-t építsünk
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'hogyan-merjuk-a-termekunk-sikeresseget']) }}">
                                    Hogyan mérjük a termékünk sikerességet?
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="{{ localizedRoute('blog.show', ['slug' => 'perszonak-a-termekfejlesztesben']) }}">
                                    Perszónák a termékfejlesztésben
                                </a>
                            </strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">Gy.I.K.</h3>

                    <h4 class="heading-3">Hasznos volt az anyag, de továbbra is vannak kérdéseim…</h4>
                    <p class="has-margin-b30">
                        <small>Ezt az anyagot csupán egy "puskának" szántuk, semmiképp nem egy kimerítő anyagnak. Ha szeretnél többet megtudni nézz bele a <a href="{{ localizedRoute('blog.tags.show', ['slug' => 'startup-es-termekfejlesztes']) }}">blogunkba</a> részletesebb cikkekért, vagy <a href="{{ localizedRoute('contact') }}">kérj</a> egy ingyenes konzultációt.</small>
                    </p>

                    <h4 class="heading-3">Miért kell megadni személyes adatokat a letöltéshez?</h4>
                    <p class="has-margin-b30">
                        <small>Sok munkát fektettünk abba, hogy minőségi anyagokat készítsünk számotokra. Azért kérjük a személyes adataid, hogy a jövőben további olyan anyagokat is tudjunk küldeni, amikről úgy gondoljuk, hogy érdekesek lehetnek számodra. Ne izgulj, minden adatot bizalmasan és az <a href="{{ localizedRoute('privacy') }}" target="_blank">adatvédelmi tájékoztatónak</a> megfelelően kezelünk. Ha nem szeretnél több ehhez hasonló ingyenes anyagot kapni, bármikor leiratkozhatsz majd.</small>
                    </p>

                    <h4 class="heading-3">Továbbküldhetem ezt az anyagot?</h4>
                    <p>
                        <small>Igen! Ez az anyag a <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">Creative Commons Attribution-ShareAlike 4.0 International</a> licensz alá van besorolva. Amíg megfelelően feltünteted a forrást, addig nyugodtan tovább terjesztheted az anyagot.</small>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection