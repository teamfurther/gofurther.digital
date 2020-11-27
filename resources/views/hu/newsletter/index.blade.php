@extends('hu.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Hírlevél archívum</h1>

                    <div class="newsletter-timeline">
                        <span class="newsletter-timeline__year">2020</span>
                        <ul class="newsletter-timeline__tree">
                            <li>
                                <img class="newsletter-timeline__image"
                                     src="{{ asset('media/newsletter/no3.png') }}" alt="3. kiadás - 2020 november"
                                />
                                <div>
                                    <a class="newsletter-timeline__issue"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no3']) }}"
                                       target="_blank"
                                    >
                                        3. kiadás - 2020 november
                                    </a>
                                    <a class="newsletter-timeline__title"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no3']) }}"
                                       target="_blank"
                                    >
                                        Készen állnak a szoftvereid az új évre?
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img class="newsletter-timeline__image"
                                     src="{{ asset('media/newsletter/no2.png') }}" alt="2. kiadás - 2020 október"
                                />
                                <div>
                                    <a class="newsletter-timeline__issue"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no2']) }}"
                                       target="_blank"
                                    >
                                        2. kiadás - 2020 október
                                    </a>
                                    <a class="newsletter-timeline__title"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no2']) }}"
                                       target="_blank"
                                    >
                                        Október a startupokról szólt!
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img class="newsletter-timeline__image"
                                     src="{{ asset('media/newsletter/no1.png') }}" alt="1. kiadás - 2020 szeptember"
                                />
                                <div>
                                    <a class="newsletter-timeline__issue"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no1']) }}"
                                       target="_blank"
                                    >
                                        1. kiadás - 2020 szeptember
                                    </a>
                                    <a class="newsletter-timeline__title"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no1']) }}"
                                       target="_blank"
                                    >
                                        Elindult a Further hírlevél!
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription', [
        'source' => 'archive'
    ])
@endsection
