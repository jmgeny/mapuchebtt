@extends('layouts.principal')

@section('titulo','MapucheBTT')

@section('content')
    <!-- Navigation -->
    {{-- @include('navbar') --}}

    <!-- Header -->
    @include('header')

    <!-- Portfolio Grid Section -->
    @include('portfolio')

    <!-- About Section -->
    @include('about')
    
    <!-- Contact Section -->
    @include('contact')

    <!-- Footer -->
    @include('footer')

@endsection