<template>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Idioma</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre del Idioma</label>
                                <input type="text" class="form-control" placeholder="Idioma" v-model="idioma.nombre">
                                <small id="emailHelp" class="form-text text-muted">Registre nuevos Idiomas</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerar</button>
                            <button type="button" class="btn btn-primary" v-on:click="agregar">Guardar</button>                        </div>
                    </div>
                </div>
            </div>

        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Fecha Creación</th>
                <th>Fecha Modificación</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item, index) in idiomas" :key="index">
                <td>{{ item.id_idioma }}</td>
                <td>{{ item.nombre }}</td>
                <td>{{ item.created_at }}</td>
                <td>{{ item.updated_at }}</td>
                <td>
                    <button class="btn btn-primary">Modificar</button>
                    <button class="btn btn-danger">Cancelar</button>
                </td>
            </tr>
        </tbody>

    </table>
</template>

<script>
    export default {
        data(){
           return {
                idiomas: [],
                modoEditar: false,
                idioma: {nombre: ''}
            }
        },
        created(){
            axios.get('/admin/idiomaretornar').then(res=>{
                this.idiomas = res.data;
                console.log(this.idiomas);
            })
        },
        methods:{
            agregar(){
                if(this.idioma.nombre.trim() === ''){
                    alert('Debes completar todos los campos antes de guardar');
                    return;
                }

            }
        }
    }
</script>
