<template>
    <div>
        <!-- Button trigger modal -->
        <div style="float:left">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                        + Tambah Barang
                        </button>
        </div>
    
        <table class="table">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>id</th>
                    <th>nama barang</th>
                    <th>stok</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="list in barang">
                    <td scope="row">{{list.id}}</td>
                    <td>{{list.name}}</td>
                    <td>{{list.stok}}</td>
                    <td><button type="button" @click.prevent="deleteIt(list.id)" class="btn btn-danger btn-flat">delete</button></td>
                    <td><button type="button" data-toggle="modal" data-target="#modelEdit" class="btn btn-primary btn-flat">edit</button></td>
    
                    <!-- Modal Tambah-->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    <h4 class="modal-title" id="modelTitleId">Tambah barang</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" @submit.prevent="addBarang">
                                        <div class="form-group">
                                            <input type="text" name="" id="" v-model="barangData.name" class="form-control" placeholder="nama barang" aria-describedby="helpId">
                                            <input type="text" name="" id="" v-model="barangData.stok" class="form-control" placeholder="stok" aria-describedby="helpId">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" @click.prevent="addBarang" data-dismiss="modal" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <!-- Modal edit-->
                    <div class="modal fade" id="modelEdit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    <h4 class="modal-title" id="modelTitleId">Edit barang</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" >
                                        <div class="form-group">
                                            <input type="text" name="" id="" v-model="barangData.name" class="form-control" placeholder="nama barang" aria-describedby="helpId">
                                            <input type="text" name="" id="" v-model="barangData.stok" class="form-control" placeholder="stok" aria-describedby="helpId">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" @click.prevent="editBarang(list.id)" data-dismiss="modal" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                barang: [],
                barangData: {
                    name: '',
                    stok: ''
                }
            }
        },
        methods: {
            deleteIt(listId) {
                let ok = confirm("delete data ini?");
                if (ok) {
                    this.$http.delete('http://localhost:8000/api/barang/' + listId)
                        .then(response => {
                            this.loadIt()
                        })
                }
            },
            editBarang(listId){
                let ok = confirm("yakin akan mengupdate Data?");
                if (ok) {
                    this.$http.put('http://localhost:8000/api/barang/update/'+listId, this.barangData)
                        .then(response=>{
                            this.loadIt(),
                            this.barangData = " " 
                        })
                }
            },
            addBarang() {
                this.$http.post('http://localhost:8000/api/barang', this.barangData)
                    .then(response => {
                        this.barangData = ""
                        this.loadIt(),
                        this.barangData = " "
                    })
            },
            loadIt() {
                this.$http.get("http://localhost:8000/barang")
                    .then(response => {
                        return this.barang = response.data
                    })
            }
        },
        created() {
            this.loadIt()
        }
    }
</script>

<style>
    
</style>