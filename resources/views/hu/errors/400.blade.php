@extends('en.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">400</h1>
                    <p class="has-text-centered">Valami gond van a kéréseddel.</p>
                    <p class="has-text-centered">Valószínüleg azért nem tudjuk ezt az oldalt megjeleníteni, mert hiányzik valami információ a kérésedből. Kérjük, térjél vissza a <a href="{{ url('/') }}">főoldalra</a> és kezd a keresést előlről.</p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-info', [
        'headingText' => 'Maybe we can help you?'
    ])
@endsection
