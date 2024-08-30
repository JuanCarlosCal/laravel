<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar instructores</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container d-flex justify-content-center bg-light border border-dark p-5 my-5 w-50 rounded-1">
    <form action="{{ route('instructors.store') }}" method="POST">
    <h1 class="text-uppercase fw-bold pb-3">Insertar instructores</h1>
         @csrf
         @method('POST')
        <label for="documento" class="fw-semibold">Documento:</label>
        <input type="number" id="documentoIdentidad" name="documentoIdentidad" placeholder="Ingrese documento">
        <br><br>

        <label for="primerNombre" class="fw-semibold">Primer Nombre:</label>
        <input type="text" id="primerNombre" name="primerNombre" placeholder="Ingrese primer nombre">
        <br><br>

        <label for="asignatura" class="fw-semibold">Asignatura:</label>
        <input type="text" id="asignatura" name="asignatura" placeholder="Ingrese asignatura">
        <br><br>

        <input type="submit"  class="rounded-2 bg-primary fw-semibold" value="Enviar">
    </form>
    </div>
</body>
</html>