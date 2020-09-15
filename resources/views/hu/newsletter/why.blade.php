@extends('hu.site')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="heading">Further hírlevél:<br />miért kaptam ezt a levelet?</h1>
                    <p>
                        Amennyiben megkaptad ezt a hírlevelet, az azért volt mert valamikor megittunk egy (virtuális) kávét együtt. Azért is lehet, mert az alábbi okok közül legalább az egyik érvényesült:
                    </p>
                    <ul class="list has-bullets has-margin-b60">
                        <li>dolgoztunk már együtt</li>
                        <li>érdeklődtél a szolgáltatásaink iránt</li>
                        <li>részt vettél egyik eseményünkön</li>
                        <li>letöltötted egyik kiadványunkat</li>
                        <li>feliratkoztál a levelezőlistánkra</li>
                    </ul>
                    <p>
                        A Further hírlevél az a hely, ahol eredeti tartalmakat fogunk megosztani, betekintéseket a mindennapjainkba, híreket digitális transzformációról, új technológiákról, szoftverfejlesztésről és start-upokról. Legfeljebb havonta 1x, mert nem szeretnénk zavarni téged.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include(getLang() . '.banners.contact', [
        'buttonText' => 'Írd meg nekünk',
        'headingText' => 'Van javaslatod a hírlevelünkkel kapcsolatban?'
    ])
@endsection
