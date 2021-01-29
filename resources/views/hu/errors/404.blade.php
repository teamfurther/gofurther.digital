@extends('hu.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">404</h1>
                    <p class="has-text-centered">Az oldal nem található.</p>
                    <p class="has-text-centered">Ennek az lehet az oka, hogy az URL hibásan lett begépelve vagy az oldal elköltözött/törölve lett. Kérjük, térjél vissza a <a href="{{ url('/') }}">főoldalra</a> és kezd a keresést előlről.</p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-info', [
        'headingText' => 'Segíthetünk?'
    ])
@endsection
