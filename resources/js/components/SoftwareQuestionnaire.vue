<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="software-questionnaire">
                    <div class="software-questionnaire__intro"
                         v-if="currentScreen === 'intro'"
                    >
                        <h1 class="software-questionnaire__heading">Milyen szoftver segíthet a vállalkozásodon?</h1>
                        <div class="software-questionnaire__body">
                            <p>{{ new Date().getFullYear() }}-ban még mindig Excel táblákat használtok ügyvitelre? A kollégák sokat hibáznak vagy folyton megcsúsznak a határidőkkel? Vagy egyszerűen túl sok az adminisztrációs teendő?</p>
                            <p>Ha a fentiek közül bármelyik kijelentés igaz a vállalkozásodra, akkor töltsd ki ezt a kérdőívet és megmondjuk milyen eszközök állnak a rendelkezésedre, hogy ezen változtass!</p>
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
                                {{ question.question }} <span v-if="question.required">*</span>
                            </div>

                            <!-- Single-choice -->
                            <ol class="software-questionnaire__options"
                                v-if="question.type === 'single-choice' || question.type === 'multiple-choice'"
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

                            <!-- Numeric -->
                            <div class="form-group" v-if="question.type === 'numeric'">
                                <input class="form-control" placeholder="1" type="number"
                                       v-model="answers[key]"
                                />
                            </div>

                            <a class="btn is-white"
                               v-bind:class="{ 'is-disabled' : question.required && answers[key] === null }"
                               v-on:click="goto('question', currentQuestion + 1)"
                            >
                                Tovább
                            </a>
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
                        type: 'single-choice'
                    },
                    {
                        question: 'Hány ügyféllel dolgozol havi szinten?',
                        required: true,
                        type: 'numeric'
                    },
                    {
                        question: 'Hány partnerrel és beszállítóval dolgozol?',
                        required: true,
                        type: 'numeric'
                    },
                    {
                        question: 'Mekkora a céged létszáma?',
                        required: true,
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
                        type: 'multiple-choice'
                    }
                ]
            }
        },
        data: function () {
            return {
                answers: new Array(4).fill(null),
                currentQuestion: null,
                currentScreen: 'intro'
            }
        },
        methods: {
            goto: function (screen, question = null) {
                this.currentScreen = screen;
                this.currentQuestion = question;
            },
            setAnswer: function (question, answer) {
                if (this.questions[question].type === 'single-choice') {
                    this.$set(this.answers, question, answer);
                }
            }
        }
    }
</script>
