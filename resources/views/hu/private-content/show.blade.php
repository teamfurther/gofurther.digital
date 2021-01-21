@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('title', 'Zárt tartalom')
@section('description', 'Jelentkezzen be a tartalom megtekintéséhez.')

@section('content')
    <section class="hero is-raspberry">
        <h2 class="hero-heading">
            Zárt tartalom.
        </h2>
        <form class="hero__form" action="{{ localizedRoute('private-content.verify') }}" method="POST">
            {{ csrf_field() }}

            <span class="hero__form__heading">Adja meg a hozzáférési kódot:</span>
            <div class="form-group {{ isset($errors) && $errors->has('code') ? 'has-error' : '' }}">
                <input class="form-control" autocomplete="off" name="code" placeholder="kód" type="text" />
                <input name="referer" type="hidden" value="{{ request()->get('referer') }}" />
            </div>
        </form>
    </section>
@endsection
