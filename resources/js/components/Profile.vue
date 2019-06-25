<template>
<form>
    <div class="form-row" style="font-size:16px">
        <div class="form-group col-md-6">
            <label for="codigo">Código : </label>
            <input type="text" class="form-control" id="codigo" value="102345">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" value="jaimepolarfuentes@gmail.com">
        </div>
        <div class="form-group col-md-6">
            <label for="nombre">Nombre :</label>
            <input type="text" class="form-control" id="nombre" value="Jaime Fredy">
        </div>
        <div class="form-group col-md-6">
            <label for="apellido">Apellido :</label>
            <input type="text" class="form-control" id="apellido" value="Polar Fuentes">
        </div>
        <div class="form-group col-md-6">
            <label for="telefono">Teléfono :</label>
            <input type="text" class="form-control" id="telefono" value="952643515">
        </div>
        <div class="form-group col-md-6">
            <label for="cargo">Cargo :</label>
            <select class="form-control form-control">
                <option selected>Guia</option>
                <option value="">Admin</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="telefono">Contraseña Anterior :</label>
            <div class="input-group">
            <input id="txtPassword_actual" type="Password" Class="form-control" value="12345678">
                <div class="input-group-append">
                    <button id="show_password_actual" class="btn btn-primary" type="button"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="telefono">Contraseña Nueva :</label>
            <div class="input-group">
                <input id="txtPassword_mod" type="Password" Class="form-control" value="12345678">
                <div class="input-group-append">
                    <button id="show_password_mod" class="btn btn-primary" type="button"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button class="btn btn-primary" style="font-size:20px" type="submit">Editar</button>
        <button class="btn btn-danger" style="font-size:20px" type="submit">Restablecer</button>
    </div>
</form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }


</script>
