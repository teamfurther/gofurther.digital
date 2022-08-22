<section class="section">
    <div class="contact__homepage">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-6-widescreen">
                    <h2 class="hero-heading">
                        Let's start something <strong class="is-black">together!</strong>
                    </h2>

                    <p class="has-margin-b30">Do you have an idea, project or partnership proposal?<br />We're always willing and ready to listen to any request. So, if you like our work and you want to discuss, just grab your phone or keyboard and contact us.</p>

                    <div class="h-card vcard">
                        <div class="p-tel tel">
                            <a href="tel:{{ str_replace(' ', '', config('site.contact.phone-1')) }}" class="value"
                               data-gtm-click='{ "show": { "event_category": "number", "event_label": "call" } }'
                            >
                                HU: {{ config('site.contact.phone-1') }}
                            </a>
                        </div>
                        <div class="p-tel tel">
                            <a href="tel:{{ str_replace(' ', '', config('site.contact.phone-2')) }}" class="value"
                               data-gtm-click='{ "show": { "event_category": "number", "event_label": "call" } }'
                            >
                                RO: {{ config('site.contact.phone-2') }}
                            </a>
                        </div>
                        <div class="u-email email">
                            <a href="mailto:{{ config('site.contact.email') }}" class="value"
                               data-gtm-click='{ "show": { "event_category": "email", "event_label": "send" } }'
                            >
                                {{ config('site.contact.email') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column is-12-tablet is-6-widescreen">
                    <form class="contact__form" id="contact-form" action="{{ localizedRoute('contact.send') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                            <input class="form-control" name="name" placeholder="Your name *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('company') ? 'has-error' : '' }}">
                            <input class="form-control" name="company" placeholder="Company name or website" type="text" value="{{ old('company') }}" autocomplete="organization" tabindex="2" />
                        </div>
                        <div class="is-pulled-left">
                            <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                                <input class="form-control" name="email" placeholder="Your email address *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                            </div>
                        </div>
                        <div class="is-pulled-right">
                            <div class="form-group {{ isset($errors) && $errors->has('phone') ? 'has-error' : '' }}">
                                <input class="form-control" name="phone" placeholder="Your phone number" type="text" value="{{ old('phone') }}" autocomplete="tel" tabindex="4" />
                            </div>
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('message') ? 'has-error' : '' }}">
                            <textarea class="form-control" name="message" placeholder="Message *" rows="5" tabindex="5" required>{{ old('message') }}</textarea>
                        </div>
                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-tangerine" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>