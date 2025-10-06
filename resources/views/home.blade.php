@extends('layouts.app')

@section('title', 'Inicio')

@section('navbar')
  @include('partials.navbar.home')
@endsection

@section('content')
  <section id="inicio" class="home">
    <aside>
      <img src="{{ asset('storage/me.jpeg') }}" alt="yo.jpg">
    </aside>
    <section class="introduction">
      <h1>Hola! Soy Oziel Lozano</h1>
      <p>
        Soy un desarrollador fullstack.<br><br>
        Estudié en el Instituto Tecnológico de Matamoros. Me especializo en crear aplicaciones web y móviles.
      </p>
    </section>
  </section>
  <section id="sobre-mi" class="about">
    <aside class="about-me">
      <p>
        A lo largo de mi trayecto he participado en distintos concursos, donde he tenido la oportunidad de mostrar los proyectos en los cuales he participado.<br><br>
      </p>
    </aside>
    <section class="projects-caroussel">
      <div class="projects-icon-container">
        <img src="{{ asset('storage/projects/coding.jpg') }}" alt="coding.jpg">
        <menu class="project-info">
          <a href="{{ route('projects.home') }}">Ver Proyectos</a>
        </menu>
      </div>
      <div class="vindex-icon-container">
        <img src="{{ asset('storage/projects/vindex.jpeg') }}" alt="vindex.jpg">
        <menu class="project-info">
          <a href="https://vindexabogados.org/" target="_blank">Vindex Abogados</a>
        </menu>
      </div>
      <div class="alerta-unida-icon-container">
        <img src="{{ asset('storage/projects/alerta_unida.png') }}" alt="alerta_unida.png">
        <menu class="project-info">
          <a href="">Alerta Unida</a>
        </menu>
      </div>
      <div class="tlakamik-icon-container">
        <img src="{{ asset('storage/projects/tlakamik.png') }}" alt="tlakamik.png">
        <menu class="project-info">
          <a href="">Tlakamik</a>
        </menu>
      </div>
    </section>
    <aside class="technologies">
      <p>
        <br> En estos proyectos, he aprendido y utilizado herramientas y tecnologías variadas, como lo son:<br><br>
      </p>
      <section class="dev-tools">
        <div class="tool">
          <img src="{{ asset('storage/icons/HTML5.png') }}" alt="html5.png">
          <p>HTML 5</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/icons/css-3.svg') }}" alt="css3.svg" style="margin:1rem;">
          <p>CSS 3</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/icons/javascript.png') }}" alt="javascript.png" style="margin:1rem;">
          <p>JavaScript</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/icons/laravel.png') }}" alt="laravel.png" style="margin:1rem;">
          <p>Laravel 12</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/icons/react-native.png') }}" alt="react-native.png">
          <p>ReactJS/React Native</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/icons/flutter.png') }}" alt="flutter.png" style="margin:1rem;">
          <p>Flutter</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/icons/oracle-cloud.png') }}" alt="oracle-cloud.png">
          <p>Oracle Cloud Infrastructure</p>
        </div>
      </section>
      <p>
        <br> Además de uso de bases de datos relacionales, tales como SQLite, y PostgreSQL.<br><br>
      </p>
    </aside>
  </section>
  <section id="proyectos" class="projects">
  </section>
@endsection

@section('footer')
  @include('partials.footer.home')
@endsection
