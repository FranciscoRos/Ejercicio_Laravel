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
      <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-md m-5">
  <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      <tr class="hover:bg-gray-50">
        <td class="px-6 py-4"> @stack('tablita')</td>
      </tr>
    </tbody>
  </table>
</div>

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