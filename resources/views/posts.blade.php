<html lang="es">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <h1>Bienvenido a los post</h1>

    {{-- Verificamos si existe el argumento 'id' --}}
    @if(isset($id))
        <h2>Has llegado al post con ID: {{ $id }}</h2>
        {{-- Aquí podrías mostrar más información del post --}}
    @else
        <h2>Llegaste a post sin argumentos <?=$id?> </h2>
        {{-- Mensaje para cuando no hay argumentos --}}
    @endif
<?=$id?> 
    {{-- Puedes agregar más lógica Blade aquí según lo que necesites --}}
</html>