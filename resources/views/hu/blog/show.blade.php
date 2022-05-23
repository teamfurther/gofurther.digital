@extends('hu.site')

@include(getLang() . '.blog.posts.' . $path . '.' . $slug)
