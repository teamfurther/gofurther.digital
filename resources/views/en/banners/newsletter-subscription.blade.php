<section class="section">
    <div class="newsletter-box">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-7-desktop">
                    <form class="newsletter-box__form" id="newsletter-subscribe-form" action="{{ localizedRoute('newsletter.subscribe') }}" method="POST">
                        <h2 class="hero-heading">
                            {!! $headingText ?? 'Never miss the<br /><strong class="is-black">latest updates!</strong>' !!}
                        </h2>

                        {{ csrf_field() }}

                        <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                            <input class="form-control" name="name" placeholder="How shall we address you (e.g. Fionulla)? *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                            <input class="form-control" name="email" placeholder="Your email address *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('privacy') ? 'has-error' : '' }} has-margin-b30">
                            <label class="form-label">
                                <span class="form-checkbox">
                                    <input name="privacy" type="checkbox" value="1" />
                                    <span></span>
                                </span>
                                {!! sprintf($privacyText ?? 'I agree to the <a href="%s" target="_blank">privacy policy</a>.', localizedRoute('privacy')) !!}
                            </label>
                        </div>
                        <input name="source" type="hidden" value="{{ $source ?? 'blog' }}" />
                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-tangerine" type="submit">
                            {{ $buttonText ?? 'Subscribe' }}
                        </button>
                    </form>
                </div>
                <div class="column is-12-tablet is-4-desktop is-offset-1-desktop">
                    {!! $bodyText ?? '<p>Stay tuned for more original content, insights and news about digital transformation, emerging technologies, software development and start-ups.</p><p class="has-margin-b30">Our newsletter is sent once a month.</p>' !!}
                </div>
            </div>
        </div>
</div>
</section>