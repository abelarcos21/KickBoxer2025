<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de PDF Entrenadores</title>
    <style>
        body { font-family: 'DejaVu Sans', sans-serif; margin: 20px; }
        h1 { 
            color: #2c3e50;
            text-align: center;
            font-size: 24px;
            margin-bottom: 25px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
            line-height: 1.4;
        }
        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .text-center { text-align: center; }
    </style>
</head>
<body>

    <h1>Reporte de Lista De Entrenadores - {{ now()->format('d/m/Y') }}</h1>

    <table>
        <thead>
            <tr>
                <th>Curp</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Año Nacimiento</th>
                <th>Fecha Nacimiento</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Nacionalidad</th>
                <th>Domicilio</th>
                <th>Colonia</th>
                <th>Municipio</th>
                <th>Código Postal</th>
                {{--<th>Estado</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Escolaridad</th>
                <th>Grado Kickboxing</th>--}}
            </tr>
        </thead>
        <tbody>
            @foreach ($entrenadores as $entrenador)
                <tr>
                    <td>{{ $entrenador->curp }}</td>
                    <td>{{ $entrenador->primer_nombre }}</td>
                    <td>{{ $entrenador->segundo_nombre }}</td>
                    <td>{{ $entrenador->apellido_paterno }}</td>
                    <td>{{ $entrenador->apellido_materno }}</td>
                    <td class="text-center">{{ $entrenador->año_nacimiento }}</td>
                    <td>{{ $entrenador->fecha_nacimiento->format('d/m/Y') }}</td>
                    <td class="text-center">{{ $entrenador->edad }}</td>
                    <td class="text-center">{{ $entrenador->genero }}</td>
                    <td>{{ $entrenador->nacionalidad }}</td>
                    <td>{{ $entrenador->domicilio }}</td>
                    <td>{{ $entrenador->colonia }}</td>
                    <td>{{ $entrenador->municipio }}</td>
                    <td class="text-center">{{ $entrenador->codigo_postal }}</td>
                    {{--<td>{{ $entrenador->estado }}</td>
                    <td>{{ $entrenador->correo }}</td>
                    <td>{{ $entrenador->telefono }}</td>
                    <td>{{ $entrenador->escolaridad }}</td>
                    <td class="text-center">{{ $entrenador->grado_kickboxing }}</td>--}}
                </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>

