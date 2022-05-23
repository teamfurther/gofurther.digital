@extends('en.site')

@include(getLang() . '.blog.posts.' . $path . '.' . $slug)
