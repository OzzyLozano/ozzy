@extends('layouts.app')

@section('css-links')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ filemtime(public_path('css/home.css')) }}">
@endsection

@section('title', 'Inicio')

@section('navbar')
  @include('partials.navbar.home')
@endsection

@section('content')
  <section id="inicio" class="home">
    <aside>
      <img src="{{ asset('storage/home/me.jpeg') }}" alt="yo.jpg">
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
        <img src="{{ asset('storage/home/projects/coding.jpg') }}" alt="coding.jpg">
        <menu class="project-info">
          <a href="{{ route('projects.home') }}">Ver Proyectos</a>
        </menu>
      </div>
      <div class="vindex-icon-container">
        <img src="{{ asset('storage/home/projects/vindex.jpeg') }}" alt="vindex.jpg">
        <menu class="project-info">
          <a href="https://vindexabogados.org/" target="_blank">Vindex Abogados</a>
        </menu>
      </div>
      <div class="alerta-unida-icon-container">
        <img src="{{ asset('storage/home/projects/alerta_unida.png') }}" alt="alerta_unida.png">
        <menu class="project-info">
          <a href="#proyectos">Alerta Unida</a>
        </menu>
      </div>
      <div class="tlakamik-icon-container">
        <img src="{{ asset('storage/home/projects/tlakamik.png') }}" alt="tlakamik.png">
        <menu class="project-info">
          <a href="#proyectos">Tlakamik</a>
        </menu>
      </div>
    </section>
    <aside class="technologies">
      <p>
        <br> En estos proyectos, he aprendido y utilizado herramientas y tecnologías variadas, como lo son:<br><br>
      </p>
      <section class="dev-tools">
        <div class="tool">
          <img src="{{ asset('storage/home/icons/HTML5.png') }}" alt="html5.png">
          <p>HTML 5</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/home/icons/css-3.svg') }}" alt="css3.svg" style="margin:1rem;">
          <p>CSS 3</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/home/icons/javascript.png') }}" alt="javascript.png" style="margin:1rem;">
          <p>JavaScript</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/home/icons/laravel.png') }}" alt="laravel.png" style="margin:1rem;">
          <p>Laravel 12</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/home/icons/react-native.png') }}" alt="react-native.png">
          <p>ReactJS/React Native</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/home/icons/flutter.png') }}" alt="flutter.png" style="margin:1rem;">
          <p>Flutter</p>
        </div>
        <div class="tool">
          <img src="{{ asset('storage/home/icons/oracle-cloud.png') }}" alt="oracle-cloud.png">
          <p>Oracle Cloud Infrastructure</p>
        </div>
      </section>
      <p>
        <br>Además de uso de bases de datos relacionales, tales como SQLite, y PostgreSQL.<br>
      </p>
    </aside>
  </section>
  <section id="proyectos" class="projects">
    <div id="vindex" class="project card">
      <img src="{{ asset('storage/home/projects/vindex.jpeg') }}" alt="vindex.jpg">
      <h3 class="card-title">Vindex Abogados</h3>
      <p class="card-body">
        Vindex Abogados es un despacho jurídico en H. Matamoros Tamaulipas. <br>
        En este proyecto, se realizó una aplicación web que permite tener un registro digital de sus reportes, y permitir a través de la página que sus clientes accedan a su respectivo informe.
      </p>
      <a href="https://vindexabogados.org/" target="_blank" class="card-link">Ir a la página</a>
    </div>
    <div id="alerta-unida" class="project card">
      <img src="{{ asset('storage/home/projects/alerta_unida.png') }}" alt="alerta_unida.png">
      <h3 class="card-title">Alerta Unida</h3>
      <p class="card-body">
        Alerta Unida es un sistema de software que busca mejorar los tiempos de respuesta en situaciones de emergencia. Consta de una aplicación móvil con interfaz web que en conjunto permiten la administración y gestión de emergencias en tiempo real.
      </p>
      <a href="#proyectos" class="card-link">Ir a la página</a>
    </div>
    <div id="tlakamik" class="project card">
      <img src="{{ asset('storage/home/projects/tlakamik.png') }}" alt="tlakamik.png">
      <h3 class="card-title">Tlakamik</h3>
      <p class="card-body">
        Tlakamik fué un proyecto con el objetivo de centralizar y digitalizar, por medio de una aplicación móvil, la información de las rutas del transporte público en Matamoros Tamaulipas, debido a la dificultad de acceso a esta información.
      </p>
      <a href="#proyectos" class="card-link">Ir a la página</a>
    </div>
  </section>
@endsection

@section('footer')
  @include('partials.footer.home')
@endsection
