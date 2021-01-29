@extends('en.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">400</h1>
                    <p class="has-text-centered">Something's is wrong with your request.</p>
                    <p class="has-text-centered">We probably couldn't render this page, because some information is missing from your request. Why don't you head back to the <a href="{{ url('/') }}">homepage</a> and start over.</p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-info', [
        'headingText' => 'Maybe we can help you?'
    ])
@endsection
