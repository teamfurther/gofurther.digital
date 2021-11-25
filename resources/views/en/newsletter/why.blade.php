@extends('en.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Further Newsletter:<br />Why am I receiving this?</h1>
                    <p>
                        In case you received our newsletter, it is because at some point we probably had a (virtual) coffee together. It can also be because of any of the following reasons:
                    </p>
                    <ul class="list has-bullets has-margin-b60">
                        <li>we've done business together</li>
                        <li>you enquired about our services</li>
                        <li>you attended one of our events</li>
                        <li>you downloaded one of our publications</li>
                        <li>you subscribed to our mailing list</li>
                    </ul>
                    <p>
                        The Further newsletter is where we sharing original content, insights and news about digital transformation, emerging technologies, software development and startups. 1x a month, we don't want to bother you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'We\'d love to hear you out',
        'headingText' => 'Do you have any suggestions regarding our newsletter?'
    ])
@endsection
