<template>  
<div class="container">
    <form class="form-horizontal" @submit.prevent="addBarang">
    <div class="form-group" >
      <label for="">add barang</label>
      <input type="text" name="" id="" v-model="barangData.name" class="form-control" placeholder="nama barang" aria-describedby="helpId">
      <input type="text" name="" id="" v-model="barangData.stok" class="form-control" placeholder="stok" aria-describedby="helpId">
      <button type="submit" class="btn btn-primary">submit</button>
    </div>
    </form>
</div>
   
</template>

<script>
export default{
    data() {
        return {
            barangData: {
                name:'',
                stok:''
            }
        }
    },
    methods:{
        addBarang(){
            this.$http.post("http://localhost:8000/api/barang", this.barangData)
                .then(response=>{
                    console.log(response);
                    this.barangData= "";
                    this.$router.push('/admin/home');
            });
        }
    }
}

</script>

<style>

</style>