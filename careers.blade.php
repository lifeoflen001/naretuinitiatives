@extends('layouts.app')

@section('title', 'Naretu Initiatives')


@section('content')
    {{-- header --}}
    @include('partials.header')


    {{-- main content --}} 
    @yield('content')
    
    <!-- slider Area Start-->