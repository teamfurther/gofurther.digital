@extends('hu.site', [
    'bodyClass' => 'has-transparent-header',
    'showContactForm' => false,
    'showFooter' => false
])

@section('content')
    <software-questionnaire></software-questionnaire>
@endsection