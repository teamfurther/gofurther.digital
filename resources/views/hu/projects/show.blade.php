@extends('hu.site', ['bodyClass' => 'has-hero project project--' . $slug])

@include(getLang() . '.projects.projects.' . $slug)