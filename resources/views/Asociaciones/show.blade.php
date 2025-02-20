@extends('layouts.panel')

@section('content')
<div class="container">
    <h1>{{ $asociacion->nombre }}</h1>

    
    <h3>Academias asociadas</h3>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Academia</th>
                <th>Fecha Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asociacion->academias as $academia)
            <tr>
                <td>{{ $academia->nombre }}</td>
                <td>{{ $academia->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection