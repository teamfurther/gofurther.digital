@extends('en.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="heading">Coming Soon</h1>
                    <p class="has-text-centered">We are working hard on bringing you great content,<br />so please check in later to see what this page will have in store for you.</p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact-info', [
        'headingText' => 'Maybe we can help you in the meantime?'
    ])
@endsection
