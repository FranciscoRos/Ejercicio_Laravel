{{-- 1. Le decimos a Blade que esta vista "extiende" o usa la plantilla base --}}
@extends('layouts.app')

{{-- 2. Definimos el título para esta página en específico --}}
@section('title', 'Página Penesito')

{{-- 3. Todo este bloque será inyectado donde pusimos @yield('content') --}}
@section('content')
  <h1>Llegaste a penesito</h1>

  <x-alert type="Success">
    <strong>¡Éxito!</strong> La operación se completó correctamente.
  </x-alert>
  
  <x-alert type="Danger">
    Hubo un error al procesar tu solicitud.
  </x-alert>

  <x-alert type="Warning">
    Cuidado, el disco está casi lleno.
  </x-alert>

  <x-alert>
    Esta es una alerta de información (es el 'default' que pusimos).
  </x-alert>
@endsection

{{-- 4. Este bloque se inyectará en el @yield('footer') --}}
@section('footer')
  {{-- Usamos el componente footer que ya tenías --}}
  <x-footer>
    Este es el contenido que va dentro del footer.
  </x-footer>
@endsection