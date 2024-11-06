@extends('hu.site')

@section('title', 'Unlimited UI Design Subscription')
@section('description', 'Clean, intuitive user interfaces that make your digital products pop. We focus on what matters most: easy navigation, engaging visuals, and a seamless user experience.')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Végtelen UI Design feliratkozás
                    </h5>
                    <h1 class="heading-1 has-margin-b5">
                        Csúcsminőségű <strong class="is-tangerine">UX/UI designerek</strong> egy alkalmazott költségének töredékéért.
                    </h1>
                    <div>
                        Férj hozzá azonnal a korlátlan designhoz. Nincs több időpazarlás megbízhatatlan szabadúszókkal vagy hosszadalmas alkalmazási folyamatokkal.
                    </div>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <div class="services__service__benefits is-tangerine">
                        <div class="services__service__benefits__badge">Előnyök</div>
                        <ul class="services__service__benefits__list has-margin-b30">
                            <li>Korlátlan óra, feladat és módosítás</li>
                            <li>Kérj ma, kapj designokat holnap</li>
                            <li>Alkalmazotti minőség 60%-os költségen</li>
                            <li>Szüneteltesd vagy mondd le bármikor</li>
                        </ul>
                        <span class="services__service__price">
                            €{{ config('site.prices.ui-design.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ui-design.promo.price') }} / hó
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ui-design.promo.name'))
                                {{ config('site.prices.ui-design.promo.name') }}.
                            @endif
                            Pénzvisszafizetési garancia.
                        </small>
                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large" href="#plans">
                                Előfizetési csomagok
                            </a>
                            <div class="services__service__alert">Csak {{ config('site.prices.ui-design.spots') }} hely maradt</div>
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
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        Hogyan műkodik a <strong class="is-pearl">korlátlan UI design</strong>?
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
                                Fizess elő
                            </h3>
                            <p>...és azonnali hozzáférést kapsz korlátlan mennyiségben világszínvonalú designerekhez</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">2</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Küldd be a design feladatokat
                            </h3>
                            <p>Hozzáférést kapsz a projektmenedzsment eszközünkhöz, ahol feltöltheted és priorizálhatod a design feladataidat</p>
                        </div>
                    </div>
                    <div class="columns has-margin-b60 is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">3</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Kapd meg a designokat 2 napon belül
                            </h3>
                            <p>Az átlagos tervezési időnk 2 nap. Küldj be egy feladatot reggel, és kapd meg másnap.</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-2-mobile is-1-tablet">
                            <div class="list-hero">4</div>
                        </div>
                        <div class="column is-10-mobile is-11-tablet">
                            <h3 class="heading-4">
                                Módosíts vagy hagyj jóvá
                            </h3>
                            <p>Amikor a feladat elkészült, megosztjuk veled a design fájlt. Kérj módosításokat megjegyzések hozzáadásával, vagy töltsd fel a következő feladatodat!</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-offset-1-desktop">
                    <div class="slides is-vertical">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Further team" />
                        <img class="is-hidden-mobile" src="{{ asset('img/team-8.jpg') }}" alt="Further team" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns has-margin-b60 is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h5 class="heading-5 has-margin-b0 is-uppercase">
                        Nincs több fejfájás
                    </h5>
                    <h2 class="heading-1 has-margin-b5">
                        Viszlát<br /><strong class="is-raspberry">megbízhatatlan szabadúszók</strong>
                    </h2>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Megbízhatatlan és nem kommunikáló szabadúszók</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Aggodalom a design minősége miatt</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Hosszú átfutási idők</h3>
                </div>
            </div>
            <div class="columns has-margin-b60 is-reversed is-vcentered">
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <h2 class="heading-1 has-margin-b5">
                        ...és <strong class="is-raspberry">hosszadalmas alkalmazási</strong> folyamatok
                    </h2>
                </div>
                <div class="column is-12-tablet is-6-desktop">
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Több száz önéletrajz és portfólió átnézése</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Költséges toborzási díjak</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Hosszadalmas betanítás és mentorálás</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">❌</span> Fizetett szabadságok és betegnapok</h3>
                </div>
            </div>
            <div class="columns has-margin-b60 is-vcentered">
                <div class="column is-12-tablet is-6-desktop">
                    <h2 class="heading-1 has-margin-b5">
                        Hello <strong class="is-pearl">végtelen design előfizetés</strong>
                    </h2>
                </div>
                <div class="column is-12-tablet is-5-desktop is-offset-1-desktop">
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Jobb konverzió, kevesebb lemorzsolódás 👉 megnövekedett bevétel</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Tiszta, intuitív felhasználói felületek</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Korlátlan design emberóra, egyszerre egy feladat</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Zökkenőmentes felhasználói élmény</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Hatékony kommunikáció, rövid átfutási idők</h3>
                    <h3 class="heading-5 has-margin-b5"><span class="has-margin-r15">✅</span> Senior UX/UI designer-ek 60%-os költségen</h3>
                </div>
            </div>
            <div class="columns">
                <div class="column has-text-centered">
                    <a class="btn has-margin-t15 is-large is-pearl" href="#plans">
                        Mutasd a csomagokat
                    </a>
                </div>
            </div>
        </div>
    </section>
§
    <section class="section is-dark">
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
                        <img class="testimonial__picture has-margin-r15" src="{{ asset('img/testimonials-carlo-santone.png') }}" alt="OnePageLink Carlo Santone testimonial" />
                        <blockquote class="testimonial__content">
                            <p>Nyitottak és barátságosak, mindig elegendő időt adnak, hogy felvázold az igényeidet, amikre okos és logikus megoldásokat javasolnak. Elégedettek vagyunk azzal, amit a Furtherrel közösen építettünk, illetve hogy továbbra is színvonalas kreatív megoldásokat alkalmazunk, amint a terméket finomítjuk.</p>
                            <cite class="testimonial__author">Carlo SANTONE, OnePageLink</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="plans">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b60 has-text-centered">
                        Válaszd ki <strong class="is-pearl">prémium</strong> design csomagodat
                    </h2>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column is-6-tablet is-4-widescreen">
                    <div class="services__service__plan">
                        <h3 class="services__service__plan__title">Single Csomag</h3>
                        <div class="has-margin-b15">Kisebb ügynökségeknek vagy korai fázisú startupoknak és SaaS-oknak</div>

                        <div class="services__service__plan__price">€{{ config('site.prices.ui-design.promo.price') }} / month</div>

                        <div class="services__service__plan__items__title">Mit tartalmaz</div>
                        <ul class="services__service__plan__items">
                            <li>Egyszerre feltölthető feladatok: végtelen</li>
                            <li>1x nyitott feladat 🚀</li>
                            <li>Sürgős feladat: 1 feladat / hónap</li>
                            <li>1x UX designer</li>
                            <li>Átfutás: 2 nap</li>
                            <li>Napi kommunikáció: Slack, Figma, PM eszköz</li>
                            <li>kéthetente meeting</li>
                            <li>Dedikált projekt menedzser</li>
                            <li class="is-empty">&nbsp;</li>
                        </ul>

                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-tangerine" href="#schedule">
                                Időpontot kérek
                            </a>
                            <a class="has-text-underlined is-grey" href="{{ localizedRoute('contact') }}">Inkább írok</a>
                        </div>
                    </div>
                </div>
                <div class="column is-6-tablet is-4-widescreen">
                    <div class="services__service__plan">
                        <h3 class="services__service__plan__title">Duo Csomag</h3>
                        <div class="has-margin-b15">Nagyobb ügynökségeknek és növekedési fázisú startupoknak és SaaS-oknak</div>

                        <div class="services__service__plan__price">€{{ config('site.prices.ui-design-duo.default') }} / month</div>

                        <div class="services__service__plan__items__title">Mit tartalmaz</div>
                        <ul class="services__service__plan__items">
                            <li>Egyszerre feltölthető feladatok: végtelen</li>
                            <li>2x nyitott feladat 🚀🚀</li>
                            <li>Sürgős feladat: 3 feladat / hónap</li>
                            <li>1x UX designer</li>
                            <li>1x termék designer</li>
                            <li>Átfutás: 2 nap</li>
                            <li>Napi kommunikáció: Slack, Figma, PM eszköz</li>
                            <li>hetente meeting</li>
                            <li>Dedikált projekt menedzser</li>
                        </ul>

                        <div class="has-items-centered has-margin-t15 is-flex">
                            <a class="btn has-margin-r15 is-large is-tangerine" href="#schedule">
                                Időpontot kérek
                            </a>
                            <a class="has-text-underlined is-grey" href="{{ localizedRoute('contact') }}">Inkább írok</a>
                        </div>
                    </div>
                </div>
                <div class="column is-4-widescreen">
                    <div class="services__service__plan has-margin-b60">
                        <h3 class="services__service__plan__title">1 hetes próbaidő</h3>
                        <div class="has-margin-b15">Még nem vagy biztos benne? Próbáld ki korlátlan design szolgáltatásunkat 1 hétig!</div>

                        <div class="services__service__plan__price has-margin-b0">€{{ config('site.prices.ui-design-trial.default') }} / hét</div>
                    </div>
                    <h2 class="heading-2 has-margin-b15 has-text-centered">Egyedi igények?</h2>
                    <div class="has-text-centered">
                        <p>Igényeidhez igazított egyedi design projektet is kérhetsz!</p>

                        <a class="btn is-block" href="{{ localizedRoute('contact') }}">
                            Írj nekünk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h3 class="heading-2">Gy.I.K.</h3>

                    <h4 class="heading-3">Hogy néz ki a folyamat?</h4>
                    <p class="has-margin-b5"><small>1. Küldd be a feladataidat a projektmenedzsment eszközünkbe.</small></p>
                    <p class="has-margin-b5"><small>2. Visszaigazoljuk a feladatokat és elkezdjük a munkát, egyszerre egy feladaton dolgozva.</small></p>
                    <p class="has-margin-b5"><small>3. Megkapod a kész terveket.</small></p>
                    <p class="has-margin-b30"><small>4. Kérj módosításokat vagy hagyd jóvá, és lépj a következő feladatra.</small></p>

                    <h4 class="heading-3">Miért ne alkalmazzak inkább egy teljes munkaidős designert?</h4>
                    <p class="has-margin-b30"><small>Egy teljes munkaidős senior designer költsége több mint 50 ezer euró a legtöbb európai országban. Ehhez jön még a toborzás, a betanítás, a képzés és a szoftverlicencek költsége. Fizetned kell a szabadságokat és a betegnapokat. Folyamatosan foglalkoztatnod kell őket. Nem tudod (vagy legalábbis nem kellene) őket azonnali hatállyal elbocsátani. Folytassuk?</small></p>

                    <h4 class="heading-3">Milyen gyorsan kapom meg a design terveket?</h4>
                    <p class="has-margin-b30"><small>A designok várhatóan két munkanapon belül, vagy annál rövidebb időn belül elkészülnek. Ha a Csillagrombolót szeretnéd megtervezni, akkor külön egy reális becslést fogunk adni.</small></p>

                    <h4 class="heading-3">Mit jelent a korlátlan módosítás?</h4>
                    <p class="has-margin-b30"><small>A korlátlan módosítások biztosításával arra törekszünk, hogy maximális elégedettséget nyújtsunk. A design szubjektív és azt elérni, hogy mindenki elégedett legyen, időt igényel. Ha változtatásokat szeretnél a designon, jelezd nekünk, örömmel módosítunk és finomítunk, amíg a dizájn pontosan megfelel az igényeidnek.</small></p>

                    <h4 class="heading-3">Mit lehet megtervezni a korlátlan UI design előfizetéseddel?</h4>
                    <p class="has-margin-b30"><small>Bármilyen tervezési anyagot el tudunk készíteni, amely a termék vagy szolgáltatás felhasználói felületeivel kapcsolatos. Drótvázak, high-fidelity prototípusok, interaktív komponensek vagy elemtervek, sőt akár egész design systemeket is.</small></p>

                    <h4 class="heading-3">Gyártotok branding vagy közösségi média kreatív anyagokat is?</h4>
                    <p class="has-margin-b30"><small>Csapatunk a web- és mobilalkalmazások UX és UI tervezésére specializálódott. Ha olyan tervezési munkára van szükséged, ami nem a tervezőcsapatunk hatáskörébe tartozik, ajánlunk neked egy partnert és még a feladat projektmenedzsmentjét is leveszük a válladról.</small></p>

                    <h4 class="heading-3">Dolgoztok-e külsős designerekkel?</h4>
                    <p class="has-margin-b5"><small>Nem. Egy ügynökség vagyunk, állandó munkatársakkal, akik ugyanazokon az értékeken osztoznak. Nincsenek szabadúszók vagy ideiglenes munkatársak közöttünk.</small></p>
                    <p class="has-margin-b30"><small>Ha ennél is gyorsabb átfutásra van szükséged, vagy olyan tervezési munkára, ami meghaladja a házon belüli csapatunk hatáskörét (lásd a fenti kérdést), előzetes értesítéssel igénybe vehetünk külső erőforrásokat.</small></p>

                    <h4 class="heading-3">Módosíthatom az előfizetési csomagomat?</h4>
                    <p><small>Igen. Az új csomag a következő hónaptól lesz érvényes.</small></p>
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
                        Iratkozz fel ma, kapd meg a design terveidet holnap.
                    </h4>
                </div>
                <div class="column is-4-desktop">
                    <div class="services__service__benefits has-margin-b30 has-text-centered is-tangerine">
                        <span class="services__service__price">
                            €{{ config('site.prices.ui-design.default') }}
                        </span>
                        <span class="services__service__price-promo">
                            €{{ config('site.prices.ui-design.promo.price') }} / hó
                        </span>
                        <small class="is-block">
                            @if (config('site.prices.ui-design.promo.name'))
                                {{ config('site.prices.ui-design.promo.name') }}.
                            @endif
                            Pénzvisszafizetési garancia.
                        </small>
                        <a class="btn has-margin-t15 is-large" href="#schedule">
                            Időpontot kérek
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-dark" id="schedule">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="heading-1 has-margin-b15 has-text-centered">
                        Indíts el <strong class="is-pearl">végtelen design</strong> előfizetésedet
                    </h2>
                    <h4 class="heading-5 has-text-centered">
                        Foglalj időpontot egy 30 perces beszélgetésre, hogy kiderüljön, illünk-e egymáshoz
                    </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/peterilles/unlimited-design-pre-discovery?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:320px;height:700px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Calendly inline widget end -->
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-form')
@endsection
