<footer style="background-color: #333; color: white; padding: 20px; text-align: center;">
  <div class="grid grid-cols-2 gap-4 p-4">
    {{-- Columna Izquierda --}}
    <div>
      <h1>Bienvenido al footer</h1>
      <h3><a href="#">About us</a></h3>
    </div>

    {{-- Columna Derecha (en blanco por ahora) --}}
    <div >
  
      Tú me escribiste esto: {{ $slot }}
    </div>
  </div>
</footer>