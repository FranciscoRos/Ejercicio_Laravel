@extends('layouts.app')
@section('content')
<h2>Contenido de Posts</h2>
<p>Aquí puedes ver todos los posts disponibles.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum deleniti provident aliquid dolore alias enim, officiis nisi a maxime nihil laboriosam ea autem, mollitia et unde illum hic sed molestias.</p>
<p>Más contenido de ejemplo para llenar la página de posts.</p>
<p>Buscaste el Post con id: {{  $id}} </p>
@endsection

@section('header')
    <h1 class="text-3xl font-bold underline">
        Bienvenido a la sección de Posts
    </h1>
    @section('title')
        Probando plantillas
    @endsection
    @section('tituloReal')
        Este es el título Real de los Posts
    @endsection
@endsection


@section('footer')
    Footer de los Posts
@endsection