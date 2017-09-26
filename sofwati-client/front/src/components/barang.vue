<template>  
<div class="container">
    <div class="jumbotron">

        <h1 class="display-3">Jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
            <div v-for = 'item in barang' >
                {{item.name}}
            </div>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
</div>
   
</template>

<script>
export default{
    data () {
        return {
            barang: []
        }
    },
    created(){
        this.$http.get("http://localhost:8000/barang")
            .then(response=> {
            //    console.log(response.data)
                this.barang = response.data
            });
        console.log('barang.vue berhasil terload load')
    }
}

</script>

<style>

</style>