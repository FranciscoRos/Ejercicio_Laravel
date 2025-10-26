<!DOCTYPE html>
<html lang="es">
<head>
        <script src="https://cdn.tailwindcss.com"></script>

  <meta charset="UTF-8">
  <title>Pnsito</title>
</head>
<body>
  <h1>Llegaste a penesito</h1>
  <p>Llegó la variable: {{ $varia }}</p>

  <br><br>
  <x-alert>
    
    <x-slot name="content">Cuidado vienen los nazis</x-slot>
    <x-slot name="title">Advertencia amigo: </x-slot>
  </x-alert>

  
</body>
</html>