@extends('en.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Further Newsletters Archive</h1>

                    <div class="newsletter-timeline">
                        <span class="newsletter-timeline__year">2020</span>
                        <ul class="newsletter-timeline__tree">
                            <li>
                                <img class="newsletter-timeline__image"
                                     src="{{ asset('media/newsletter/no3.png') }}" alt="Issue #3 - November 2020"
                                />
                                <div>
                                    <a class="newsletter-timeline__issue"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no3']) }}"
                                       target="_blank"
                                    >
                                        Issue #3 - November 2020
                                    </a>
                                    <a class="newsletter-timeline__title"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no3']) }}"
                                       target="_blank"
                                    >
                                        Is your software ready for next year?
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img class="newsletter-timeline__image"
                                     src="{{ asset('media/newsletter/no2.png') }}" alt="Issue #2 - October 2020"
                                />
                                <div>
                                    <a class="newsletter-timeline__issue"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no2']) }}"
                                       target="_blank"
                                    >
                                        Issue #2 - October 2020
                                    </a>
                                    <a class="newsletter-timeline__title"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no2']) }}"
                                       target="_blank"
                                    >
                                        October was a great month for start-up ideas!
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img class="newsletter-timeline__image"
                                     src="{{ asset('media/newsletter/no1.png') }}" alt="Issue #1 - September 2020"
                                />
                                <div>
                                    <a class="newsletter-timeline__issue"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no1']) }}"
                                       target="_blank"
                                    >
                                        Issue #1 - September 2020
                                    </a>
                                    <a class="newsletter-timeline__title"
                                       href="{{ localizedRoute('newsletter.show', ['issue' => 'no1']) }}"
                                       target="_blank"
                                    >
                                        We launched the Further newsletter!
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
