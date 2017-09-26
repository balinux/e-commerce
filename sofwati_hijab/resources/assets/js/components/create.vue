<template>
  <form class="form-horizontal" @submit.prevent="addBarang">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">nama barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="nama barang" v-model="barangData.name">
      <span class="text-danger">{{errors.name?errors.name[0]:""}}</span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="stok" v-model="barangData.stok">
      <span class="text-danger">{{errors.stok?errors.stok[0]:""}}</span>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Tambah</button>
    </div>
  </div>
</form>
</template>

<script>
    export default {
        data() {
          return{
            barangData:{
              name:'',
              stok:''
            },
            errors:{

            }
          }
        },

        methods:{
          addBarang(){
            axios.post('/barang',this.barangData)
            .then(response=>{
              this.barangData = "";
              this.errors = "";
              this.$router.push('/barang');
            })
            .catch(error=>{console.log(error.response);
              this.errors = error.response.data;
            })
          }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>