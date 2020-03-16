<template>
    <div class="software-questionnaire">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="software-questionnaire__intro"
                         v-if="currentScreen === 'intro'"
                    >
                        <h1 class="software-questionnaire__heading">
                            Milyen szoftver segíthet a vállalkozásodon?
                        </h1>
                        <div class="software-questionnaire__body">
                            <p>{{ new Date().getFullYear() }}-ban még mindig Excel táblákat használtok ügyvitelre? A kollégák sokat hibáznak vagy folyton megcsúsznak a határidőkkel? Vagy egyszerűen túl sok az adminisztrációs teendő?</p>
                            <p>Töltsd ki ezt az <strong>5 perces</strong> kérdőívet és megmondjuk milyen eszközök állnak a rendelkezésedre, hogy ezen változtass!</p>
                        </div>
                        <a class="btn is-pearl" v-on:click="goto('question', 0)">Kezdés</a>
                    </div>
                    <div class="software-questionnaire__questions"
                         v-if="currentScreen === 'question'"
                    >
                        <div class="software-questionnaire__question"
                             v-if="currentQuestion === key"
                             v-for="(question, key) in questions"
                        >
                            <div class="software-questionnaire__heading">
                                <span v-html="question.question"></span> <span class="required" v-if="question.required">*</span>
                            </div>

                            <!-- Email -->
                            <div class="software-questionnaire__form-group"
                                 v-if="question.type === 'email'">
                                <input class="software-questionnaire__form-control" placeholder="Kezdd el írni…" type="email"
                                       v-model="answers[key]"
                                />
                            </div>

                            <!-- Multiple-choice -->
                            <ol class="software-questionnaire__options"
                                v-if="question.type === 'multiple-choice'"
                            >
                                <li class="software-questionnaire__option"
                                    v-bind:class="{ 'is-selected' : answers[key] && answers[key].indexOf(answer) !== -1 }"
                                    v-for="answer in question.answers"
                                    v-if="answer !== null"
                                    v-on:click="setAnswer(key, answer)"
                                >
                                    {{ answer }}
                                </li>
                            </ol>

                            <!-- Numeric -->
                            <div class="software-questionnaire__form-group"
                                 v-if="question.type === 'numeric'">
                                <input class="software-questionnaire__form-control" min="0" placeholder="Írjál be egy számot…" type="number"
                                       v-model="answers[key]"
                                />
                            </div>

                            <!-- Single-choice -->
                            <ol class="software-questionnaire__options"
                                v-if="question.type === 'single-choice'"
                            >
                                <li class="software-questionnaire__option"
                                    v-bind:class="{ 'is-selected' : answers[key] === answer }"
                                    v-for="answer in question.answers"
                                    v-if="answer !== null"
                                    v-on:click="setAnswer(key, answer)"
                                >
                                    {{ answer }}
                                </li>
                            </ol>

                            <!-- Tel -->
                            <div class="software-questionnaire__form-group"
                                 v-if="question.type === 'tel'">
                                <input class="software-questionnaire__form-control" placeholder="Kezdd el írni…" type="tel"
                                       v-model="answers[key]"
                                />
                            </div>

                            <!-- Text -->
                            <div class="software-questionnaire__form-group"
                                 v-if="question.type === 'text'">
                                <input class="software-questionnaire__form-control" placeholder="Kezdd el írni…" type="text"
                                       v-model="answers[key]"
                                />
                            </div>

                            <!-- Button -->
                            <a class="btn is-white"
                               v-bind:class="{ 'is-disabled' : question.required && answers[key] === null }"
                               v-on:click="currentQuestion === maxQuestions - 1
                                    ? goto('notice')
                                    : goto('question', getNextQuestionIndex())
                               "
                            >
                                Tovább
                            </a>
                        </div>
                    </div>
                    <div class="software-questionnaire__notice"
                         v-if="currentScreen === 'notice'"
                    >
                        <h1 class="software-questionnaire__heading">
                            Milyen szoftver segíthet a vállalkozásodon?
                        </h1>
                        <div class="software-questionnaire__body">
                            <p>Az eredmények megtekintésével hozzájárulsz, hogy kezeljük a személyes adataidat és beleegyezel, hogy ezeket az adatokat marketing célokra felhasználjuk.</p>
                            <p>Ígérjük, nem fogunk feleslegesen reklámot küldeni és bármikor kérheted, hogy ne írjunk már. Ha szeretnél több információt megtudni, arról hogyan kezeljük a személyes adataid, olvasd el az <a href="/hu/adatvedelmi-szabalyzat" target="_blank">adatvédelmi tájékoztatót</a>.</p>
                        </div>
                        <div class="software-questionnaire__form-group">
                            <label>
                                <div class="software-questionnaire__checkbox">
                                    <input type="checkbox" v-model="notice" />
                                    <span></span>
                                </div>
                                Hozzájárulok az adataim kezeléséhez
                            </label>
                        </div>
                        <a class="btn is-pearl"
                           v-bind:class="{ 'is-disabled' : !notice }"
                           v-on:click="goto('results'); getResults();"
                        >
                            Eredmények
                        </a>
                    </div>
                    <div class="software-questionnaire__results"
                         v-if="currentScreen === 'results' && topResults[0][1] > 0"
                    >
                        <h1 class="software-questionnaire__heading">
                            {{ results[topResults[0][0]].name }}
                        </h1>
                        <div class="software-questionnaire__body">
                            <p v-html="results[topResults[0][0]].description"></p>
                            <p v-if="results[topResults[0][0]].url">
                                <a class="btn is-white" target="_blank"
                                   v-bind:href="results[topResults[0][0]].url"
                                >
                                    {{ results[topResults[0][0]].name }}
                                </a>
                            </p>
                            <p v-html="results[topResults[0][0]].additional"
                               v-if="results[topResults[0][0]].additional"
                            ></p>
                        </div>
                        <h2 class="software-questionnaire__subheading">
                            Egyéb javasolt szoftver
                        </h2>
                        <div class="software-questionnaire__body"
                             v-if="topResults[1][1] > 0"
                        >
                            <ul class="list has-discs">
                                <li v-if="topResults[1][1] > 0">
                                    {{ results[topResults[1][0]].name }}
                                </li>
                                <li v-if="topResults[2][1] > 0">
                                    {{ results[topResults[2][0]].name }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="software-questionnaire__results"
                         v-if="currentScreen === 'results' && topResults[0][1] <= 0"
                    >
                        <h1 class="software-questionnaire__heading">
                            Nincs találat
                        </h1>
                        <div class="software-questionnaire__body">
                            Nem találtunk a paramétereknek megfelelő szoftver. Ez nem maradhat így, ezért hamarosan keresni fogunk emailen vagy telefon, hogy segítsünk a megfelelő szoftvert megtalálni!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        computed: {
            problemsSelected: function () {
                return this.answers[4] ? this.answers[4].length : 0;
            },
            questions: function () {
                return [
                    {
                        answers: [
                            'Szolgáltatás',
                            'Kiskereskedelem',
                            'Nagykereskedelem',
                            'Logisztika',
                            'Gyártás',
                            'Mezőgazdaság',
                            'Építőipar',
                            'Kitermelés'
                        ],
                        question: 'Milyen területen van a vállalkozásod?',
                        required: true,
                        show: true,
                        type: 'single-choice'
                    },
                    {
                        question: 'Hány ügyféllel dolgozol havi szinten?',
                        required: true,
                        show: true,
                        type: 'numeric'
                    },
                    {
                        question: 'Hány partnerrel és beszállítóval dolgozol?',
                        required: false,
                        show: true,
                        type: 'numeric'
                    },
                    {
                        question: 'Mekkora a céged létszáma?',
                        required: true,
                        show: true,
                        type: 'numeric'
                    },
                    {
                        answers: [
                            'Kevés a lead',
                            'Alacsony a konverzió',
                            'Alacsony az ügyfélelégedettség',
                            'Sok az adminisztratív teendő',
                            'Nehéz a döntéshozás (nincs elég adat)',
                            'Hiányosak vagy pontatlanok a jelentések és előrejelzések',
                            'Sok az emberi hiba',
                            'Nem átlátható a projektmenedzsment',
                            'Nehéz az új csapattagok betanítása',
                            'Nincs megosztva a tudás csapaton belül',
                            'Nem tudod követni az alkalmazottak teljesítményét',
                            this.answers[0] !== 'Szolgáltatás'
                                ? 'Nem átlátható a raktárkészlet és anyagmozgatás'
                                :  null,
                            ['Gyártás', 'Mezőgazdaság', 'Építőipar', 'Kitermelés'].indexOf(this.answers[0]) !== -1
                                ? 'Nem elég hatékony a termelés'
                                : null
                        ],
                        question: 'Melyik területekkel nem vagy elégedett?',
                        required: true,
                        show: true,
                        type: 'multiple-choice'
                    },
                    {
                        answers: [
                            'Csak direct sales',
                            'Inkább direct sales',
                            'Inkább online',
                            'Csak online'
                        ],
                        question: '<small>Kevés a lead</small>Hogyan értékesítetek inkább?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Kevés a lead') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen',
                            'Nem'
                        ],
                        question: '<small>Kevés a lead</small>Figyelitek és elemzitek a weboldal látogatóinak az adatait és viselkedését?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Kevés a lead') !== -1 && this.answers[5] !== 'Csak direct sales',
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen',
                            'Nem'
                        ],
                        question: '<small>Kevés a lead</small>Használtok-e automatizált marketing folyamatokat / értékesítési tölcséreket?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Kevés a lead') !== -1 && this.answers[5] !== 'Csak direct sales',
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen',
                            'Nem'
                        ],
                        question: '<small>Alacsony az ügyfélelégedettség</small>Méritek az ügyfélelégedettséget?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Alacsony az ügyfélelégedettség') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Nem jut elég idő az ügyfelekre',
                            'Nem megfelelő az ügyfélszolgálat',
                            this.answers[3] > 0 ? 'Az alkalmazottak teljesítménye miatt' : null,
                            this.answers[2] > 0 ? 'A beszállítók miatt' : null
                        ],
                        question: '<small>Alacsony az ügyfélelégedettség</small>Miért alacsony az ügyfélelégedettség?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Alacsony az ügyfélelégedettség') !== -1,
                        type: 'multiple-choice'
                    },
                    {
                        answers: [
                            'Dokumentumok elkészítése, menedzselése, keresése',
                            'Számlázás',
                            'Adatbevitel'
                        ],
                        question: '<small>Sok az adminisztratív teendő</small>Milyen feladatok veszik el a legtöbb időt?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Sok az adminisztratív teendő') !== -1,
                        type: 'multiple-choice'
                    },
                    {
                        answers: [
                            'Jellemző',
                            'Nem jellemző'
                        ],
                        question: '<small>Sok az adminisztratív teendő</small>Mennyire jellemző, hogy a projektek hasonló lépésekből állnak?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Sok az adminisztratív teendő') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Pénzügyi adatok',
                            'Vásárlói adatok',
                            'Marketing adatok',
                            this.answers[3] > 0 ? 'Teljesítmény (alkalmazottak)' : null,
                            ['Gyártás', 'Mezőgazdaság', 'Építőipar', 'Kitermelés'].indexOf(this.answers[0]) !== -1
                                ? 'Termelési adatok'
                                : null
                        ],
                        question: '<small>Nehéz a döntéshozás (nincs elég adat)</small>Milyen adatok hiányoznak ahhoz, hogy pontosabb döntéseket tudjál hozni?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Nehéz a döntéshozás (nincs elég adat)') !== -1,
                        type: 'multiple-choice'
                    },
                    {
                        answers: [
                            'Jellemző',
                            'Nem jellemző'
                        ],
                        question: '<small>Sok az emberi hiba</small>Mennyire jellemző a manuális adatbevitel?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Sok az emberi hiba') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Jellemző',
                            'Nem jellemző'
                        ],
                        question: '<small>Sok az emberi hiba</small>Mennyire jellemző az adatduplikáció (ugyanaz az adat több helyen - papír, Excel, egyéb szoftverek - is megtalálható)?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Sok az emberi hiba') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen, vannak',
                            'Nem, nincsenek'
                        ],
                        question: '<small>Sok az emberi hiba</small>Vannak-e kontrollpontok a folyamatokban ahol jóvá kell hagyni az eredményezett munkát?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Sok az emberi hiba') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen',
                            'Nem'
                        ],
                        question: '<small>Sok az emberi hiba</small>Megfelelő az alkalmazottak betanítása?',
                        required: false,
                        show: this.answers[4] && this.answers[4].indexOf('Sok az emberi hiba') !== -1,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Legfeljebb 1 hónap',
                            'Legfeljebb 3 hónap',
                            'Akár 6 hónap is'
                        ],
                        question: 'Milyen gyorsan szükséges a fentieken javítani?',
                        required: true,
                        show: true,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            '< 1.000.000 Ft.',
                            '1M és 3M Ft. között',
                            '3M és 10M Ft. között',
                            '> 10M Ft.'
                        ],
                        question: 'Mekkora büdzsét szánsz ezeknek a problémáknak a megoldására?',
                        required: true,
                        show: true,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen',
                            'Nem'
                        ],
                        question: 'Fontos-e, hogy a felhasználói felület magyar legyen?',
                        required: false,
                        show: true,
                        type: 'single-choice'
                    },
                    {
                        answers: [
                            'Igen',
                            'Nem'
                        ],
                        question: 'Fontos-e, hogy a szoftver mobil eszközökről is használható legyen?',
                        required: false,
                        show: true,
                        type: 'single-choice'
                    },
                    {
                        question: 'Név',
                        required: true,
                        show: true,
                        type: 'text'
                    },
                    {
                        question: 'Email',
                        required: true,
                        show: true,
                        type: 'email'
                    },
                    {
                        question: 'Telefonszám',
                        required: false,
                        show: true,
                        type: 'tel'
                    },
                    {
                        question: 'Cégnév',
                        required: false,
                        show: true,
                        type: 'text'
                    }
                ]
            }
        },
        created: function () {
            this.init();
        },
        data: function () {
            return {
                answers: [],
                answersNormalized: {},
                currentQuestion: null,
                currentScreen: 'intro',
                maxQuestions: 25,
                notice: false,
                results: {
                    billingo: {
                        additional: null,
                        description: 'A billing amellett, hogy az egyik legismertebb online számlázó program, sok egyéb kényelmi funkciót is kínál amik segítenek az adminisztráció csökkentésében és a pénzügyi adatok elemzésében.',
                        name: 'Billingo',
                        url: 'https://www.billingo.hu',
                    },
                    customBi: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/5-hasznos-adat-cegvezetoknek" target="_blank">Hogyan segíthet egy üzleti intelligencia szoftver? &#x2197;</a></li></ul>',
                        description: 'Bár léteznek dobozos business intelligence szoftverek, válaszaid alapján inkább egy testreszabott megoldást javasolnánk. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi üzleti intelligencia szoftver',
                        url: null,
                    },
                    customCrm: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/mikor-hasznaljunk-crm-rendszert" target="_blank">Mikor használjunk CRM rendszert? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-valasszuk-ki-a-megfelelo-crm-rendszert" target="_blank">Hogyan válaszd ki a megfelelő CRM rendszert? &#x2197;</a></li></ul>',
                        description: 'Bár léteznek dobozos CRM szoftverek, válaszaid alapján inkább egy testreszabott megoldást javasolnánk. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi CRM szoftver',
                        url: null,
                    },
                    customCrmDms: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-valasszuk-ki-a-megfelelo-crm-rendszert" target="_blank">Hogyan válaszd ki a megfelelő CRM rendszert? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-alakitsuk-at-cegunket-papirmentesse" target="_blank">Hogyan alakítsuk át cégünket papírmentessé? &#x2197;</a></li></ul>',
                        description: 'Válaszaid alapján úgy érezzük, hogy céged számára egy testreszabott CRM szoftver, dokumentummenedzsment funkciókkal kiegészítve volna a legmegfelelőbb. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi CRM és dokumentummenedzsment szoftver',
                        url: null,
                    },
                    customErp: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Válaszaid alapján úgy érezzük, hogy egy testreszabott megoldás volna a legmegfelelőbb céged számára. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi vállalatirányítási rendszer',
                        url: null,
                    },
                    customInventory: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Bár léteznek dobozos raktárkezelő szoftverek, válaszaid alapján inkább egy testreszabott megoldást javasolnánk. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi raktárkezelő rendszer',
                        url: null,
                    },
                    customPm: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Bár léteznek dobozos projektmenedzsment szoftverek, válaszaid alapján inkább egy testreszabott megoldást javasolnánk. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi projektmenedzsment szoftver',
                        url: null,
                    },
                    customProduction: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Bár léteznek dobozos termelésirányító és gyártáskövető szoftverek, válaszaid alapján inkább egy testreszabott megoldást javasolnánk. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Egyedi termelésirányító szoftver',
                        url: null,
                    },
                    customWiki: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Bár léteznek dobozos szoftverek amiket tudástárként is lehet használni, válaszaid alapján inkább egy testreszabott megoldást javasolnánk. Hamarosan keresni fogunk emailen vagy telefon, hogy részletesebben is felmerjük az igényeidet.',
                        name: 'Testreszabott tudástár',
                        url: null,
                    },
                    danubisoft: {
                        additional: null,
                        description: 'A Danubisoft teljes megoldást kínál a gyártó és termelő vállalatok számára. Érdekessége, hogy a többi termelésirányítási szoftverrel szemben, nem az iroda felül közelíti meg a folyamatokat, hanem a gyártósor felől.',
                        name: 'Danubisoft',
                        url: 'https://www.danubisoft.hu',
                    },
                    googleAnalytics: {
                        additional: null,
                        description: 'A Hotjar a legismertebb weboldal analitikai szoftver a piacon. Segítségével többek közt megtudhatod, hogy kik látogatják a honlapod és melyik oldalkat látogatják a leggyakrabban. Ha ezek alapján jól alakítod át az oldalt, lényegesen tudsz javítani az online leadek számán.',
                        name: 'Google Analytics',
                        url: 'https://analytics.google.com',
                    },
                    hotjar: {
                        additional: null,
                        description: 'A Hotjar a legprofibb viselkedéselemző szoftver a piacon. Segítségével megtudhatod, mit keresnek leginkább, merre kattintanak és mikor hagyják el az oldalt a honlapod látogatói. Ha a visszajelzések alapján jól alakítod át az oldalt, lényegesen tudsz javítani az online leadek számán.',
                        name: 'Hotjar',
                        url: 'https://www.hotjar.com',
                    },
                    hubspot: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/mikor-hasznaljunk-crm-rendszert" target="_blank">Mikor használjunk CRM rendszert? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-valasszuk-ki-a-megfelelo-crm-rendszert" target="_blank">Hogyan válaszd ki a megfelelő CRM rendszert? &#x2197;</a></li></ul>',
                        description: 'A Hubspot erőssége, hogy egyformán hasznos mind az értékesítési csapat számára, mind a marketing csapat számára, így akár egyetlen CRM segítségével minden ügyfélfolyamatot kezelhettek.',
                        name: 'Hubspot',
                        url: 'https://hubspot.com',
                    },
                    leadForensics: {
                        additional: null,
                        description: 'Ha direct sales technikákat is használunk értékesítésre, akkor a Lead Forensics egy nagyon hasznos eszköz lehet számunkra. Segítségével elemezhetünk minden névtelen látogatót aki megfordul a weboldalunkon és megtudhatjuk kapcsolati adataikat és vásárlási szokásaikat.',
                        name: 'Lead Forensics',
                        url: 'https://www.leadforensics.com',
                    },
                    mailchimp: {
                        additional: null,
                        description: 'Sokan úgy ismerik a a Mailchimpet mint egy hírlevélküldő szoftvert. Bár vitathatatlan, hogy továbbra is ez a fő funkciója, a Mailchimp mára egy teljeskörű marketing rendszerré nőtte ki magát, aminek segítségével lényegesen növelhetjük a leadek számát.',
                        name: 'Mailchimp',
                        url: 'https://mailchimp.com',
                    },
                    miniCrm: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/mikor-hasznaljunk-crm-rendszert" target="_blank">Mikor használjunk CRM rendszert? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-valasszuk-ki-a-megfelelo-crm-rendszert" target="_blank">Hogyan válaszd ki a megfelelő CRM rendszert? &#x2197;</a></li></ul>',
                        description: 'A MiniCRM az ország vezető CRM megoldása. Ha szükségünk van helyi támogatásra és magyar nyelvű felületekre, akkor csakis a MiniCRM jöhet szóba a dobozos szoftverek közül',
                        name: 'MiniCRM',
                        url: 'https://minicrm.hu',
                    },
                    monday: {
                        additional: null,
                        description: 'A Monday erőssége a flexibilitása. Különböző elemekből rakhatók össze táblázatok, műszerfalak és beszámolók amin keresztül a projekteket kezelhetjük.',
                        name: 'Monday',
                        url: 'https://monday.com',
                    },
                    naturasoft: {
                        additional: null,
                        description: 'A Naturasoft az ország egyik vezető ügyviteli rendszere. Számlázó és könyvelő programjaikon kívül egy robusztus raktárprogramot is fejlesztenek.',
                        name: 'Naturasoft Készletnyílvántartó',
                        url: 'https://www.naturasoft.hu',
                    },
                    navision: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'A Dynamics NAV (vagy Navision) a Microsoft válasza a vállalatirányítási igényekre. Jól illeszkedik a többi Microsoft termékhez, azonban ne számítsunk különösebb flexibilitásra és gyorsaságra ha testreszabott funkciókról van szó.',
                        name: 'Microsoft Dynamics NAV',
                        url: 'https://navision.hu',
                    },
                    odoo: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Az Odoo kétségkívül a legmodernebb (SaaS) vállalatirányítási rendszer a piacon. Egyetlen hátránya, hogy ha sok a felhasználónk, akkor rövid idő alatt nagyon drágává válhat a havi előfizetés.',
                        name: 'Odoo',
                        url: 'https://odoo.com',
                    },
                    odooInventory: {
                        additional: null,
                        description: 'Az Odoo kétségkívül a legmodernebb (SaaS) vállalatirányítási rendszer a piacon. Moduláris felépítésének köszönhetően a raktározási moduljuk egyedülállóan, vagy akár a beszerzési modullal együtt is használható.',
                        name: 'Odoo Inventory',
                        url: 'https://www.odoo.com/page/warehouse',
                    },
                    odooProduction: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-segit-egy-szoftver-a-termelesi-folyamatok-optimalizalasaban" target="_blank">Hogyan segíthet egy termelésirányítási szoftver? &#x2197;</a></li></ul>',
                        description: 'Az Odoo kétségkívül a legmodernebb (SaaS) vállalatirányítási rendszer a piacon. Moduláris felépítésének köszönhetően a termelésirányítási moduljuk egyedülállóan is használható.',
                        name: 'Odoo MRP',
                        url: 'https://www.odoo.com/page/mrp-cloud-software',
                    },
                    productive: {
                        additional: null,
                        description: 'A Productive úgy hírdeti magát, mint "az egyetlen szoftver ami egy sikeres ügynökség működtetéséhez szükséges". De a Productive több ennél. Értékesítésben és projektmenedzsmentben is segítségünkre lehet mind az adminisztratív tevékenységek csökkentésében, mind a döntéshozásban.',
                        name: 'Productive.io',
                        url: 'https://www.productive.io',
                    },
                    pipedrive: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/mikor-hasznaljunk-crm-rendszert" target="_blank">Mikor használjunk CRM rendszert? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-valasszuk-ki-a-megfelelo-crm-rendszert" target="_blank">Hogyan válaszd ki a megfelelő CRM rendszert? &#x2197;</a></li></ul>',
                        description: 'A Pipedrive elsősorban az értékesítő csapat munkáját segíti, olyan hasznos funkciókkal mint a testreszabható értékesítési csatornák és email integráció.',
                        name: 'Pipedrive',
                        url: 'https://www.pipedrive.com',
                    },
                    powerbi: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/5-hasznos-adat-cegvezetoknek" target="_blank">Hogyan segíthet egy üzleti intelligencia szoftver? &#x2197;</a></li></ul>',
                        description: 'A Power BI a Microsoft által fejlesztett üzleti intelligencia szoftver, amely segít az adatfeldolgozásban és elemzésben. Legnagyobb erőssége, hogy olyan riportokat generálhatunk vele, melyek megértéséhez nincs szükségünk adatelemző csapatra.',
                        description: '',
                        name: 'Microsoft Power BI',
                        url: 'https://powerbi.microsoft.com/',
                    },
                    riport: {
                        additional: null,
                        description: 'A R!port megteremti az összhangot a könyvelői munka és a cégvezetés között. Olyan pénzügyi beszámolókat generálhatunk vele, melyek alapján vezetőként döntéseket tudunk hozni és hosszú távú stratégiát építeni.',
                        name: 'R!port',
                        url: 'https://riport.co.hu',
                    },
                    salesforce: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/mikor-hasznaljunk-crm-rendszert" target="_blank">Mikor használjunk CRM rendszert? &#x2197;</a></li><li><a href="https://gofurther.digital/hu/blog/cikkek/hogyan-valasszuk-ki-a-megfelelo-crm-rendszert" target="_blank">Hogyan válaszd ki a megfelelő CRM rendszert? &#x2197;</a></li></ul>',
                        description: 'A Salesforce a CRM-ek svájci bicskája. Minden ügyfélszerzési és kapcsolattartási feladatot képes ellátni, azonban jóval hosszasabb a bevezetési és betanítási folyamat mint más CRM-ek esetében.',
                        name: 'Salesforce',
                        url: 'https://www.salesforce.com',
                    },
                    sap: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/egyedi-fejlesztes-vagy-dobozos-szoftver" target="_blank">Hogyan válassz dobozos szoftver és testreszabott megoldás között? &#x2197;</a></li></ul>',
                        description: 'Az SAP a világ vezető vállalatirányítási rendszere. Több száz tanácsadóval rendelkeznek és bármilyen problémára van egy szoftveres megoldásuk, azonban ne számítsunk különösebb flexibilitásra és gyorsaságra ha testreszabott funkciókról van szó.',
                        name: 'SAP',
                        url: 'https://www.sap.com/index.html',
                    },
                    sapi: {
                        additional: null,
                        description: 'A SalesAutopilot egy marketing automatizálási szoftver, amely segítségével automatizálhatók a vásárlási és háttérfolyamatok. Ez a automatizálás segít az ügyfélkiszolgálásban, az elégedettség növelésében, de akár a leadek számának növelésében is.',
                        name: 'SalesAutopilot',
                        url: 'https://www.salesautopilot.hu',
                    },
                    slack: {
                        additional: null,
                        description: 'A Slack egy rendkívüli kommunikációs eszköz amit a Furthernél is napi szinten használunk. Mintegy tudástárként működve rendszerezi és visszakereshetővé teszi a csapaton belüli kommunikációt és adatokat, de akár alap projektmenedzsment funkciókat is el tud látni.',
                        name: 'Slack',
                        url: 'https://slack.com',
                    },
                    szamlazz: {
                        additional: null,
                        description: 'A számlázz.hu amellett, hogy az ország egyik vezető online számlázója, sok egyéb kényelmi funkciót is kínál amik segítenek az adminisztráció csökkentésében és a pénzügyi adatok elemzésében.',
                        name: 'Számlázz.hu',
                        url: 'https://www.szamlazz.hu',
                    },
                    tableau: {
                        additional: '<ul class="list has-discs"><li><a href="https://gofurther.digital/hu/blog/cikkek/5-hasznos-adat-cegvezetoknek" target="_blank">Hogyan segíthet egy üzleti intelligencia szoftver? &#x2197;</a></li></ul>',
                        description: 'A Tableau az egyik legkiforrottabb üzleti intelligencia szoftver a piacon. Bármilyen adatot képes feldolgozni és segít ezeket megérteni és elemezni gyönyörű grafikonokon és beszámolókon.',
                        name: 'Tableau',
                        url: 'https://www.tableau.com',
                    },
                    trello: {
                        additional: null,
                        description: 'A Trello egy pofonegyszerű projektmenedzsment szoftver ami Kanban táblák működési elvét követi. Ha a projektek gyors rendszerezése és követése a cél, a Trello tökéletes választás lehet.',
                        name: 'Trello',
                        url: 'https://trello.com',
                    },
                    zendesk: {
                        additional: null,
                        description: 'Bár a Zendesk elsősorban egy ügyfélszolgálati és call-center szoftver, a Guide nevű moduljuk nagyszerűen használható tudástárként, ami elősegíti az új csapattagok betanítását és a csapaton belüli tudásmegosztást.',
                        name: 'Zendesk',
                        url: 'https://www.zendesk.com/guide',
                    }
                },
                scores: {},
                scorecard: {},
                topResults: []
            }
        },
        methods: {
            computeScore: function (software) {
                if (
                    this.problemsSelected > this.scorecard[software].problemsMax
                    || this.scorecard[software].problemsNeeded < this.scorecard[software].problemsMin
                ) {
                    return 0;
                }

                return this.scorecard[software].criteriaSum
                    / this.scorecard[software].criteriaCount * 4
                    * this.scorecard[software].xFurther
                    * this.scorecard[software].xClients
                    * this.scorecard[software].xSuppliers
                    * this.scorecard[software].xUsers
                    * this.scorecard[software].xLanguage
                    * this.scorecard[software].xMobile
                    * this.scorecard[software].xTime
                    * this.scorecard[software].xPrice
            },
            computeScores: function () {
                this.scores = {
                    billingo: this.computeScore('billingo'),
                    customBi: this.computeScore('customBi'),
                    customCrm: this.computeScore('customCrm'),
                    customCrmDms: this.computeScore('customCrmDms'),
                    customErp: this.computeScore('customErp'),
                    customInventory: this.computeScore('customInventory'),
                    customPm: this.computeScore('customPm'),
                    customProduction: this.computeScore('customProduction'),
                    customWiki: this.computeScore('customWiki'),
                    danubisoft: this.computeScore('danubisoft'),
                    googleAnalytics: this.computeScore('googleAnalytics'),
                    hotjar: this.computeScore('hotjar'),
                    hubspot: this.computeScore('hubspot'),
                    leadForensics: this.computeScore('leadForensics'),
                    mailchimp: this.computeScore('mailchimp'),
                    miniCrm: this.computeScore('miniCrm'),
                    monday: this.computeScore('monday'),
                    naturasoft: this.computeScore('naturasoft'),
                    navision: this.computeScore('navision'),
                    odoo: this.computeScore('odoo'),
                    odooInventory: this.computeScore('odooInventory'),
                    odooProduction: this.computeScore('odooProduction'),
                    productive: this.computeScore('productive'),
                    pipedrive: this.computeScore('pipedrive'),
                    powerbi: this.computeScore('powerbi'),
                    riport: this.computeScore('riport'),
                    salesforce: this.computeScore('salesforce'),
                    sap: this.computeScore('sap'),
                    sapi: this.computeScore('sapi'),
                    slack: this.computeScore('slack'),
                    szamlazz: this.computeScore('szamlazz'),
                    tableau: this.computeScore('tableau'),
                    trello: this.computeScore('trello'),
                    zendesk: this.computeScore('zendesk')
                };

                this.getTopResults();
            },
            computeScorecard: function () {
                this.scorecard = {
                    billingo: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pAdministration[2]
                            + this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pReports[0] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pHumanError[1] / 2
                            + this.answersNormalized.pHumanError[2],
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    customBi: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pDecisions[2]
                            + this.answersNormalized.pDecisions[3]
                            + this.answersNormalized.pDecisions[4]
                            + this.answersNormalized.pDecisions[5]
                            + this.answersNormalized.pReports[0],
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .9,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .8,
                        xUsers: 1
                    },
                    customCrm: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pLeads[0] / 2
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0] / 2
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pProjectManagement[0] / 2,
                        problemsMax: 7,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: this.answersNormalized.clients < 10000
                        ? 1
                        : this.answersNormalized.clients < 100000
                            ? .9
                            : .7,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: this.answersNormalized.suppliers < 100
                        ? 1
                        : this.answersNormalized.suppliers < 200
                            ? .9
                            : .6,
                        xPrice: .75,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .6,
                        xUsers: this.answersNormalized.users < 100
                        ? 1
                        : this.answersNormalized.users < 200
                            ? .9
                            : .7
                    },
                    customCrmDms: {
                        criteriaCount: 14.5,
                        criteriaSum: this.answersNormalized.pLeads[0] / 2
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0] / 2
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pAdministration[1]
                            + this.answersNormalized.pAdministration[2] / 2
                            + this.answersNormalized.pAdministration[3]
                            + this.answersNormalized.pAdministration[4] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pHumanError[1]
                            + this.answersNormalized.pHumanError[2]
                            + this.answersNormalized.pHumanError[3] / 2
                            + this.answersNormalized.pProjectManagement[0] / 2
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0],
                        problemsMax: 9,
                        problemsMin: 2,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                        ) / 4,
                        xClients: this.answersNormalized.clients < 10000
                        ? 1
                        : this.answersNormalized.clients < 100000
                            ? .9
                            : .7,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: this.answersNormalized.suppliers < 100
                        ? 1
                        : this.answersNormalized.suppliers < 200
                            ? .9
                            : .6,
                        xPrice: .7,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .6,
                        xUsers: this.answersNormalized.users < 100
                        ? 1
                        : this.answersNormalized.users < 200
                            ? .9
                            : .7
                    },
                    customErp: {
                        criteriaCount: 12,
                        criteriaSum: this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0],
                        problemsMax: 99,
                        problemsMin: 3,
                        problemsNeeded: (
                            this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .7,
                        xTime: .7,
                        xUsers: 1
                    },
                    customInventory: {
                        criteriaCount: 1,
                        criteriaSum: this.answersNormalized.pInventory[0],
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pInventory[0] / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .8,
                        xTime: .8,
                        xUsers: 1
                    },
                    customPm: {
                        criteriaCount: 6,
                        criteriaSum: this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pAdministration[4] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0],
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .95,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .75,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .6,
                        xUsers: 1
                    },
                    customProduction: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pProduction[0] === 4
                            && this.answersNormalized.pDecisions[5] === 4
                            && (
                                this.answersNormalized.pDecisions[1]
                                + this.answersNormalized.pDecisions[2]
                                + this.answersNormalized.pDecisions[3]
                                + this.answersNormalized.pDecisions[4]
                                + this.answersNormalized.pDecisions[5]
                            ) <= 8
                            ? this.answersNormalized.pDecisions[0]
                                + this.answersNormalized.pDecisions[5] * 3
                                + this.answersNormalized.pProduction[0]
                            : 0,
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .8,
                        xTime: .8,
                        xUsers: 1
                    },
                    customWiki: {
                        criteriaCount: 2,
                        criteriaSum: this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0],
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .8,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .8,
                        xUsers: 1
                    },
                    danubisoft: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pProduction[0] === 4
                            && this.answersNormalized.pDecisions[5] === 4
                            && (
                                this.answersNormalized.pDecisions[1]
                                + this.answersNormalized.pDecisions[2]
                                + this.answersNormalized.pDecisions[3]
                                + this.answersNormalized.pDecisions[4]
                                + this.answersNormalized.pDecisions[5]
                            ) <= 8
                            ? this.answersNormalized.pDecisions[0]
                                + this.answersNormalized.pDecisions[5] * 3
                                + this.answersNormalized.pProduction[0]
                            : 0,
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .8,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .8,
                        xTime: .8,
                        xUsers: 1
                    },
                    googleAnalytics: {
                        criteriaCount: 3,
                        criteriaSum: this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[3],
                        problemsMax: 1,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pLeads[0] / 4,
                        xClients: 1,
                        xFurther: .95,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    hotjar: {
                        criteriaCount: 3,
                        criteriaSum: this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[3],
                        problemsMax: 1,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pLeads[0] / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    hubspot: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pLeads[0] / 2
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0] / 2
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pProjectManagement[0] / 2,
                        problemsMax: 6,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: this.answersNormalized.clients < 5000
                            ? 1
                            : this.answersNormalized.clients < 20000
                                ? .9
                                : .7,
                        xFurther: .9,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: this.answersNormalized.suppliers < 50
                            ? 1
                            : this.answersNormalized.suppliers < 100
                                ? .9
                                : .6,
                        xPrice: this.answersNormalized.users.price > 1
                            ? Math.max(100 - this.answersNormalized.users * 3, 60) / 100
                            : .6,
                        xTime: 1,
                        xUsers: this.answersNormalized.users < 50
                            ? 1
                            : this.answersNormalized.users < 100
                                ? .9
                                : .6
                    },
                    leadForensics: {
                        criteriaCount: 2,
                        criteriaSum: this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pLeads[1],
                        problemsMax: 1,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pLeads[0] / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    mailchimp: {
                        criteriaCount: 3,
                        criteriaSum: this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4],
                        problemsMax: 1,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pLeads[0] / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    miniCrm: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pLeads[0] / 2
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0] / 2
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pProjectManagement[0] / 2,
                        problemsMax: 4,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: this.answersNormalized.clients < 1000
                            ? 1
                            : this.answersNormalized.clients < 10000
                                ? .9
                                : .7,
                        xFurther: .9,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: this.answersNormalized.suppliers < 20
                            ? 1
                            : this.answersNormalized.suppliers < 50
                                ? .9
                                : .6,
                        xPrice: Math.max(100 - this.answersNormalized.users, 60) / 100,
                        xTime: 1,
                        xUsers: this.answersNormalized.users < 10
                            ? 1
                            : this.answersNormalized.users < 30
                                ? .9
                                : .6
                    },
                    monday: {
                        criteriaCount: 4.5,
                        criteriaSum: this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pAdministration[4] / 2
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0],
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: .9,
                        xFurther: .9,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: Math.max(100 - this.answersNormalized.users * 3, 60) / 100,
                        xTime: 1,
                        xUsers: 1
                    },
                    naturasoft: {
                        criteriaCount: 1,
                        criteriaSum: this.answersNormalized.pInventory[0],
                        problemsMax: 4,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pInventory[0] / 4,
                        xClients: 1,
                        xFurther: .7,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: this.answersNormalized.mobile === 4 ? 0 : 1,
                        xSuppliers: this.answersNormalized.suppliers < 50
                            ? 1
                            : this.answersNormalized.suppliers < 100
                                ? .9
                                : .7,
                        xPrice: .9,
                        xTime: 1,
                        xUsers: this.answersNormalized.users < 10
                            ? 1
                            : this.answersNormalized.users < 20
                                ? .9
                                : .8
                    },
                    navision: {
                        criteriaCount: 12,
                        criteriaSum: this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0],
                        problemsMax: 99,
                        problemsMin: 3,
                        problemsNeeded: (
                            this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .7,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .6,
                        xTime: .8,
                        xUsers: 1
                    },
                    odoo: {
                        criteriaCount: 12,
                        criteriaSum: this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0],
                        problemsMax: 99,
                        problemsMin: 3,
                        problemsNeeded: (
                            this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .8,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .6,
                        xTime: .9,
                        xUsers: 1
                    },
                    odooInventory: {
                        criteriaCount: 1,
                        criteriaSum: this.answersNormalized.pInventory[0],
                        problemsMax: 4,
                        problemsMin: 1,
                        problemsNeeded: this.answersNormalized.pInventory[0] / 4,
                        xClients: 1,
                        xFurther: .8,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: Math.max(100 - this.answersNormalized.users, 50) / 100,
                        xTime: .9,
                        xUsers: 1
                    },
                    odooProduction: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pProduction[0] === 4
                        && this.answersNormalized.pDecisions[5] === 4
                        && (
                            this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pDecisions[2]
                            + this.answersNormalized.pDecisions[3]
                            + this.answersNormalized.pDecisions[4]
                            + this.answersNormalized.pDecisions[5]
                        ) <= 8
                        ? this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pDecisions[5] * 3
                            + this.answersNormalized.pProduction[0]
                        : 0,
                        problemsMax: 3,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .8,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: Math.max(100 - this.answersNormalized.users, 50) / 100,
                        xTime: .8,
                        xUsers: 1
                    },
                    productive: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pAdministration[4] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0],
                        problemsMax: 6,
                        problemsMin: 2,
                        problemsNeeded: (
                            this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .95,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: Math.max(100 - this.answersNormalized.users * 3, 60) / 100,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .8,
                        xUsers: 1
                    },
                    pipedrive: {
                        criteriaCount: 9,
                        criteriaSum: this.answersNormalized.pLeads[0] / 2
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pConversion[0] * 3
                            + this.answersNormalized.pCustomerSatisfaction[0] / 2
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pProjectManagement[0] / 2,
                        problemsMax: 4,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: this.answersNormalized.clients < 1000
                            ? 1
                            : this.answersNormalized.clients < 10000
                                ? .9
                                : .7,
                        xFurther: .9,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: this.answersNormalized.suppliers < 20
                            ? 1
                            : this.answersNormalized.suppliers < 50
                                ? .9
                                : .6,
                        xPrice: Math.max(100 - this.answersNormalized.users, 60) / 100,
                        xTime: 1,
                        xUsers: this.answersNormalized.users < 10
                            ? 1
                            : this.answersNormalized.users < 30
                                ? .9
                                : .6
                    },
                    powerbi: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pDecisions[2]
                            + this.answersNormalized.pDecisions[3]
                            + this.answersNormalized.pDecisions[4]
                            + this.answersNormalized.pDecisions[5]
                            + this.answersNormalized.pReports[0],
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .8,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .9,
                        xTime: 1,
                        xUsers: 1
                    },
                    riport: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pDecisions[1] === 4
                        && (
                            this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pDecisions[2]
                            + this.answersNormalized.pDecisions[3]
                            + this.answersNormalized.pDecisions[4]
                            + this.answersNormalized.pDecisions[5]
                        ) <= 8
                        ? this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pDecisions[1] * 3
                            + this.answersNormalized.pReports[0]
                        : 0,
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    salesforce: {
                        criteriaCount: 7,
                        criteriaSum: this.answersNormalized.pLeads[0] / 2
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0] / 2
                            + this.answersNormalized.pCustomerSatisfaction[2] / 2
                            + this.answersNormalized.pCustomerSatisfaction[3] / 2
                            + this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pDecisions[2] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pProjectManagement[0] / 2,
                        problemsMax: 7,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: this.answersNormalized.clients < 10000
                            ? 1
                            : this.answersNormalized.clients < 100000
                                ? .9
                                : .7,
                        xFurther: .8,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: this.answersNormalized.suppliers < 100
                            ? 1
                            : this.answersNormalized.suppliers < 200
                                ? .9
                                : .6,
                        xPrice: this.answersNormalized.users.price > 2
                            ? Math.max(100 - this.answersNormalized.users * 3, 60) / 100
                            : .6,
                        xTime: this.answersNormalized.deadline !== 1 ? 1 : .7,
                        xUsers: this.answersNormalized.users < 100
                            ? 1
                            : this.answersNormalized.users < 200
                                ? .9
                                : .6
                    },
                    sap: {
                        criteriaCount: 12,
                        criteriaSum: this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0],
                        problemsMax: 99,
                        problemsMin: 3,
                        problemsNeeded: (
                            this.answersNormalized.pConversion[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                            + this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                            + this.answersNormalized.pEmployeePerformance[0]
                            + this.answersNormalized.pInventory[0]
                            + this.answersNormalized.pProduction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .7,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .6,
                        xTime: .8,
                        xUsers: 1
                    },
                    sapi: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pLeads[2]
                            + this.answersNormalized.pLeads[4]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                            + this.answersNormalized.pCustomerSatisfaction[1],
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pLeads[0]
                            + this.answersNormalized.pCustomerSatisfaction[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    slack: {
                        criteriaCount: 3,
                        criteriaSum: this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pKnowledgeSharing[0] * 2,
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pProjectManagement[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .9,
                        xTime: 1,
                        xUsers: 1
                    },
                    szamlazz: {
                        criteriaCount: 5,
                        criteriaSum: this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pAdministration[2]
                            + this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pReports[0] / 2
                            + this.answersNormalized.pHumanError[0] / 2
                            + this.answersNormalized.pHumanError[1] / 2
                            + this.answersNormalized.pHumanError[2],
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                            + this.answersNormalized.pHumanError[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: 1,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    tableau: {
                        criteriaCount: 8,
                        criteriaSum: this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pDecisions[1]
                            + this.answersNormalized.pDecisions[2]
                            + this.answersNormalized.pDecisions[3]
                            + this.answersNormalized.pDecisions[4]
                            + this.answersNormalized.pDecisions[5]
                            + this.answersNormalized.pReports[0] * 2,
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pDecisions[0]
                            + this.answersNormalized.pReports[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .9,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .8,
                        xTime: 1,
                        xUsers: 1
                    },
                    trello: {
                        criteriaCount: 1.5,
                        criteriaSum: this.answersNormalized.pAdministration[0] / 2
                            + this.answersNormalized.pProjectManagement[0],
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pAdministration[0]
                            + this.answersNormalized.pProjectManagement[0]
                        ) / 4,
                        xClients: .9,
                        xFurther: .9,
                        xLanguage: 1,
                        xMobile: 1,
                        xSuppliers: .9,
                        xPrice: 1,
                        xTime: 1,
                        xUsers: 1
                    },
                    zendesk: {
                        criteriaCount: 2,
                        criteriaSum: this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0],
                        problemsMax: 2,
                        problemsMin: 1,
                        problemsNeeded: (
                            this.answersNormalized.pTraining[0]
                            + this.answersNormalized.pKnowledgeSharing[0]
                        ) / 4,
                        xClients: 1,
                        xFurther: .9,
                        xLanguage: this.answersNormalized.language === 4 ? 0 : 1,
                        xMobile: 1,
                        xSuppliers: 1,
                        xPrice: .8,
                        xTime: 1,
                        xUsers: .8
                    }
                };

                this.computeScores();
            },
            getNextQuestionIndex: function () {
                for (let i = this.currentQuestion + 1; i < this.maxQuestions; i++) {
                    if (this.questions[i].show) {
                        return i;
                    }
                }
            },
            getResults: function () {
                this.normalizeAnswers();
            },
            getTopResults: function () {
                let results = [];

                for (let key in this.scores) {
                    results.push([key, this.scores[key]]);
                }

                results.sort(function (a, b) {
                    return b[1] - a[1];
                });

                this.topResults = results.slice(0, 3);
            },
            goto: function (screen, question = null) {
                this.currentScreen = screen;
                this.currentQuestion = question;
            },
            init: function () {
                this.answers = new Array(this.maxQuestions).fill(null);
            },
            normalizeAnswers: function () {
                this.answersNormalized = {
                    clients: this.answers[1],
                    deadline: this.answers[17] === 'Legfeljebb 1 hónap'
                        ? 1
                        : this.answers[17] === 'Legfeljebb 3 hónap'
                            ? 2
                            : 3,
                    language: this.answers[19] && this.answers[19] === 'Igen' ? 4 : 0,
                    mobile: this.answers[20] && this.answers[20] === 'Igen' ? 4 : 0,
                    pAdministration: [
                        this.answers[4].indexOf('Sok az adminisztratív teendő') !== -1
                            ? 4
                            : 0,
                        this.answers[10] && this.answers[10] === 'Dokumentumok elkészítése, menedzselése, keresése' ? 4 : 0,
                        this.answers[10] && this.answers[10] === 'Számlázás' ? 4 : 0,
                        this.answers[10] && this.answers[10] === 'Adatbevitel' ? 4 : 0,
                        !this.answers[11] || this.answers[11] === 'Jellemző' ? 4 : 0
                    ],
                    pConversion: [
                        this.answers[4].indexOf('Alacsony a konverzió') !== -1
                            ? 4
                            : 0
                    ],
                    pCustomerSatisfaction: [
                        this.answers[4].indexOf('Alacsony az ügyfélelégedettség') !== -1
                            ? 4
                            : 0,
                        !this.answers[8] || this.answers[8] === 'Nem' ? 4 : 0,
                        this.answers[9] && this.answers[9] === 'Nem jut elég idő az ügyfelekre' ? 4 : 0,
                        this.answers[9] && this.answers[9] === 'Nem megfelelő az ügyfélszolgálat' ? 4 : 0,
                        this.answers[9] && this.answers[9] === 'Az alkalmazottak teljesítménye miatt' ? 4 : 0,
                        this.answers[9] && this.answers[9] === 'A beszállítók miatt' ? 4 : 0
                    ],
                    pDecisions: [
                        this.answers[4].indexOf('Nehéz a döntéshozás (nincs elég adat)') !== -1
                            ? 4
                            : 0,
                        this.answers[12] && this.answers[12] === 'Pénzügyi adatok' ? 4 : 0,
                        this.answers[12] && this.answers[12] === 'Vásárlói adatok' ? 4 : 0,
                        this.answers[12] && this.answers[12] === 'Marketing adatok' ? 4 : 0,
                        this.answers[12] && this.answers[12] === 'Teljesítmény (alkalmazottak)' ? 4 : 0,
                        this.answers[12] && this.answers[12] === 'Termelési adatok' ? 4 : 0
                    ],
                    pEmployeePerformance: [
                        this.answers[4].indexOf('Nem tudod követni az alkalmazottak teljesítményét') !== -1
                            ? 4
                            : 0
                    ],
                    pHumanError: [
                        this.answers[4].indexOf('Sok az emberi hiba') !== -1
                            ? 4
                            : 0,
                        !this.answers[13] || this.answers[13] === 'Jellemző' ? 4 : 0,
                        !this.answers[14] || this.answers[14] === 'Jellemző' ? 4 : 0,
                        !this.answers[15] || this.answers[15] === 'Nem, nincsenek' ? 4 : 0,
                        !this.answers[16] || this.answers[16] === 'Nem' ? 4 : 0,
                    ],
                    pInventory: [
                        this.answers[4].indexOf('Nem átlátható a raktárkészlet és anyagmozgatás') !== -1
                            ? 4
                            : 0
                    ],
                    pKnowledgeSharing: [
                        this.answers[4].indexOf('Nincs megosztva a tudás csapaton belül') !== -1
                            ? 4
                            : 0
                    ],
                    pLeads: [
                        this.answers[4].indexOf('Kevés a lead') !== -1
                            ? 4
                            : 0,
                        !this.answers[5]
                            ? 0
                            : this.answers[5] === 'Csak direct sales'
                            ? 4
                            : this.answers[5] === 'Inkább direct sales'
                                ? 3
                                : this.answers[5] === 'Inkább online'
                                    ? 1
                                    : 0,
                        !this.answers[5]
                            ? 0
                            : this.answers[5] === 'Csak online'
                            ? 4
                            : this.answers[5] === 'Inkább online'
                                ? 3
                                : this.answers[5] === 'Inkább direct sales'
                                    ? 1
                                    : 0,
                        !this.answers[6] || this.answers[6] === 'Nem' ? 4 : 0,
                        !this.answers[7] || this.answers[7] === 'Nem' ? 4 : 0
                    ],
                    pProduction: [
                        this.answers[4].indexOf('Nem elég hatékony a termelés') !== -1
                            ? 4
                            : 0
                    ],
                    pProjectManagement: [
                        this.answers[4].indexOf('Nem átlátható a projektmenedzsment') !== -1
                            ? 4
                            : 0
                    ],
                    pReports: [
                        this.answers[4].indexOf('Hiányosak vagy pontatlanok a jelentések és előrejelzések') !== -1
                            ? 4
                            : 0
                    ],
                    pTraining: [
                        this.answers[4].indexOf('Nehéz az új csapattagok betanítása') !== -1
                            ? 4
                            : 0
                    ],
                    price: this.answers[17] === '< 1.000.000 Ft.'
                        ? 1
                        : this.answers[17] === '1M és 3M Ft. között'
                            ? 2
                            : this.answers[17] === '3M és 10M Ft. között'
                                ? 3
                                : 4,
                    suppliers: this.answers[2],
                    users: this.answers[3],
                }

                this.computeScorecard();
            },
            setAnswer: function (question, answer) {
                if (this.questions[question].type === 'single-choice') {
                    this.$set(this.answers, question, answer);
                } else if (this.questions[question].type === 'multiple-choice') {
                    let answers = this.answers[question] ? this.answers[question] : [];

                    if (answers.indexOf(answer) !== -1) {
                        answers = answers.filter(function (value) {
                            return value !== answer;
                        });
                    } else {
                        answers.push(answer);
                    }
                    this.$set(this.answers, question, answers);
                }
            }
        }
    }
</script>
