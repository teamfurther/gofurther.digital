<section class="section">
    <div class="newsletter-box">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-12-tablet is-7-desktop">
                    <form class="newsletter-box__form" id="newsletter-subscribe-form" action="{{ localizedRoute('newsletter.subscribe') }}" method="POST">
                        <h2 class="hero-heading">
                            {!! $headingText ?? '<strong>Friss tartalmak,</strong><br />havonta 1x.' !!}
                        </h2>

                        {{ csrf_field() }}

                        <div class="form-group {{ isset($errors) && $errors->has('name') ? 'has-error' : '' }}">
                            <input class="form-control" name="name" placeholder="Hogyan szólítsunk (pl. Töhötöm)? *" type="text" value="{{ old('name') }}" autocomplete="name" tabindex="1" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('email') ? 'has-error' : '' }}">
                            <input class="form-control" name="email" placeholder="E-mail címed *" type="email" value="{{ old('email') }}" autocomplete="email" tabindex="3" required />
                        </div>
                        <div class="form-group {{ isset($errors) && $errors->has('privacy') ? 'has-error' : '' }} has-margin-b30">
                            <label class="form-label">
                                <span class="form-checkbox">
                                    <input name="privacy" type="checkbox" value="1" required />
                                    <span></span>
                                </span>
                                {!! sprintf($privacyText ?? 'Elfogadom az <a href="%s" target="_blank">adatvédelmi szabályzatban</a> foglaltakat.', localizedRoute('privacy')) !!}
                            </label>
                        </div>
                        <input name="source" type="hidden" value="{{ $source ?? 'blog' }}" />
                        {!! Honeypot::generate('honeypotname', 'honeypottime') !!}
                        <button class="btn is-large is-tangerine" type="submit">
                            {{ $buttonText ?? 'Feliratkozom' }}
                        </button>
                    </form>
                </div>
                <div class="column is-12-tablet is-4-desktop is-offset-1-desktop">
                    {!! $bodyText ?? '<p>Havonta  eredeti tartalmakat és híreket osztunk meg digitális transzformációról, új technológiákról, szoftverfejlesztésről és start-upokról.</p><p class="has-margin-b30">Iratkozz fel, hogy ne maradj le a friss tartalmakról!</p>' !!}
                </div>
            </div>
        </div>
</div>
</section>