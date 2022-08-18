@extends('menu')
@section('plantilla')

<div class="ui piled text container segment">
    <h1 class="center">Registro Proveedor></h1>
    <form action="{{ route('InsertProveedor') }}" method="POST">
    @csrf
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Nombre</label>
                <input placeholder="Nombre..." type="text" id="nombre" name="nombre">
            </div>

            {{-- #Clave aleatoria que se genera cada que hago una solicitud de algo.
            TOKEN!<---- --}}
            <div class="field">
                <label class="ui blue ribon label">Telefono</label>
                <input placeholder="Telefono..." type="number" id="telefono" name="telefono">
            </div>

            <div class="field">
                <label class="ui blue ribon label">Direccion</label>
                <input type="text" name="direccion" id="direccion" placeholder="Direccion...">
            </div>
            <center>
                <input type="submit" class="ui submit inverted blue button" id="guardar" value="Registrar">
            </center>
        </div>
    </form>
</div>
@endsection

 