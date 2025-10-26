<html>
  <head>
    <title>@yield('title', 'Mi App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    
    <header>
      @yield(section: 'header')
      <title style="text-align: center; color: red;"  >@yield('title', 'Mi App')</title>
      <h1 style="text-align: center; color: red;"  >@yield('tituloReal', 'Mi App')</h1>
    </header>

    <main>
      @yield('content')
    </main>

    <aside>
      @yield('sidebar')
    </aside>

    <footer>
      @yield('footer' )
        <x-footer>
          Este es el contenido que va dentro del footer en la plantilla.
        </x-footer>
        @show
    </footer>
  </body>
</html>