@extends('menu')

@section('plantilla')

@if (empty(session('Guardado')))
    <?php echo"No deberia enviar el mensaje!!";?>
@else 
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            {{ session('guardado') }}
        </div>
    </div>
@endif

<table class="ui blue table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Acciones</th>
    </tr></thead>
    <tbody>
    
    @foreach ($objetoretornado as $proveedor)
            <tr>
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td>{{ $proveedor->direccion }}</td>
            <td>
            <a href="{{ route('DeleteProveedor', $proveedor->id) }}"><i class="delete icon"></i></a>
            <i class="sync icon"></i>
            <a href="{{ route('UpdateProveedor', $proveedor) }}"><i class="eye icon"></i></a>
            </td>
            </tr>
    @endforeach
    </tbody>
</table>

@endsection

