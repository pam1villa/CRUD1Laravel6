@extends('menu')
@section('plantilla')
<div class="ui piled text container segment">
    <h1 class="center">Registro Proveedor></h1>
    <form action="ProveedorController.php" id="formproveedor"
    method="POST"
        <div class="ui raised form segment">
            <div class="field">
                <label class="ui blue ribbon label">Nombre</label>
                <input type="hidden" name="action" id="action" value="insert">
                <input placeholder="Nombre..." type="text" id="nombre" name="nombre">
        </div>
        <div class="field">
</div>


@endsection

