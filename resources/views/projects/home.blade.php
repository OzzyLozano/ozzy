@extends('layouts.app')

@section('css-links')
  <link rel="stylesheet" href="{{ asset('css/projects.css') }}?v={{ filemtime(public_path('css/projects.css')) }}">
@endsection

@section('title', 'Proyectos')

@section('navbar')
  @include('partials.navbar.projects')
@endsection

@section('content')
  <section>
    <h2>Proyectos</h2>
  </section>
@endsection

@section('footer')
  @include('partials.footer.home')
@endsection
