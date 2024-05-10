<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>

<body>
    <h1>Registro</h1>
    <div>
        <form action="{{ url('/cliente') }}" method="POST">
            @csrf
            <div>
                <label for=""> Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="nombre" require />
            </div>
            <div>
                <label for=""> Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="apellido" require />
            </div>
            <div>
                <label for=""> Edad</label>
                <input type="text" id="edad" name="edad" placeholder="edad" require />
            </div>
            <div>
                <label for=""> Telefono</label>
                <input type="text" id="telefono" name="telefono" placeholder="telefono" require />
            </div>
            <div>
                <label for=""> Dirección</label>
                <input type="text" id="direccion" name="direccion" placeholder="direccion" require />
            </div>

            <div>
                <label for=""> correo</label>
                <input type="text" id="correo" name="correo" placeholder="correo" require />
            </div>
            <div>
                <button type="submit" value="">Guardar Datos</button>
            </div>
        </form>
    </div>
</body>

</html>
{{-- php artisan serve
  php artisan migrate
  php artisan make:model nombre -mcr
  --}}
