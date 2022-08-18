@extends('menu')
@section('plantilla')

<div class="ui piled text container segment">
    <h1 class="center">Actualizar Proveedor></h1>
    <form action="{{ route('UpdateBdProveedor') }}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="¨{{$updateproveedor->nombre}}">
            </div>

            #Clave aleatoria que se genera cada que hago una solicitud de algo.
            TOKEN!<----
            <div class="field">
                <label class="ui blue ribbon label">Telefono</label>
                /*
                Etiqueta value="": sirve para:
                Valor que tengo en la variable p en la propiedad que se llama nombre
                */
                <input type="number" id="telefono" name="telefono" value="{{$updateproveedor->telefono}}">
            </div>

            <div class="field">
                <label class="ui blue ribbon label">Direccion</label>
                <input type="text" name="direccion" id="direccion" value="{{$updateproveedor->direccion}}" >
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Actualizar">
            </center>
        </div>
    </form>
</div>
@endsection