@extends('en.site')


@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">404</h1>
                    <p class="has-text-centered">We couldn't find the page you we're looking for.</p>
                    <p class="has-text-centered">This isn't good. Seems like you got lost&hellip; Why don't you head back to the <a href="{{ url('/') }}">homepage</a> and start over.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
