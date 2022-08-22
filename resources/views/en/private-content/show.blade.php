@extends('hu.site', ['bodyClass' => 'has-hero'])

@section('title', 'Private content')
@section('description', 'Please authenticate to access content.')

@section('content')
    <section class="hero is-raspberry">
        <h2 class="hero-heading">
            Private content.
        </h2>

        <form class="hero__form" action="{{ localizedRoute('private-content.verify') }}" method="POST">
            {{ csrf_field() }}

            <span class="hero__form__heading">Please enter your access code:</span>
            <div class="form-group {{ isset($errors) && $errors->has('code') ? 'has-error' : '' }}">
                <input class="form-control" autocomplete="off" name="code" placeholder="code" type="text" />
                <input name="referer" type="hidden" value="{{ request()->get('referer') }}" />
            </div>
        </form>
    </section>
@endsection
