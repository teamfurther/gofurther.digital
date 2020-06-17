@extends('en.site', ['bodyClass' => 'has-hero project project--' . $slug])

@include(getLang() . '.projects.projects.' . $slug)