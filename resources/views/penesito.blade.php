<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <title>Pnsito</title>
</head>
<body>
    <h1>Llegaste a penesito</h1>

    {{-- 
      Aquí usas tu componente. El texto de adentro se 
      convertirá en la variable $slot 
    --}}
    
    <x-alert type="Success">
      <strong>¡Éxito!</strong> La operación se completó correctamente.
    </x-alert>
    
    <x-alert type="Danger">
      Hubo un error al procesar tu solicitud.
    </x-alerts>

    <x-alert type="Warning">
      Cuidado, el disco está casi lleno.
    </x-alert>

    <x-alert>
      Esta es una alerta de información (es el 'default' que pusimos).
    </x-alert>

</body>
</html>