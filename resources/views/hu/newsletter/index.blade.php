@extends('hu.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Hírlevél archívum</h1>

                    <div class="newsletter-timeline">
                        @foreach($issuesByYear as $year => $issues)
                            <span class="newsletter-timeline__year">{{ $year }}</span>
                            <ul class="newsletter-timeline__tree">
                                @foreach($issues as $issue)
                                    <li>
                                        <img class="newsletter-timeline__image"
                                             src="{{ asset('media/newsletter/' . $issue['number'] . '.png') }}"
                                             alt="{{ $issue['issue'] }}"
                                        />
                                        <div>
                                            <a class="newsletter-timeline__issue"
                                               href="{{ localizedRoute('newsletter.show', [
                                            'issue' => $issue['number'],
                                            'year' => $year
                                       ]) }}"
                                               target="_blank"
                                            >
                                                {{ $issue['issue'] }}
                                            </a>
                                            <a class="newsletter-timeline__title"
                                               href="{{ localizedRoute('newsletter.show', [
                                            'issue' => $issue['number'],
                                            'year' => $year
                                       ]) }}"
                                               target="_blank"
                                            >
                                                {{ $issue['title'] }}
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.newsletter-subscription', [
        'source' => 'archive'
    ])
@endsection
