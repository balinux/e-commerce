<template>

<div class="jumbotron">
    <h1 class="display-3">{{barangData.name}}</h1>
    <p class="lead">{{barangData.stok}}</p>
    
    <img :src="'http://localhost:8000/image/'+Image.name" class="img-thumbnail" alt="no image">
    <hr class="my-2">
    <p>More info</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
    </p>
</div>
</template>

<script>
export default{
    data() {
        return {
            barangData: [],
            Image:[]

        }
    },
    created(){
      this.getData(),  
      this.getImage()
    },
    methods:{
        getData(){
            this.$http.get('http://localhost:8000/api/barang/' + this.$route.params.productId)
                .then(response=>{
                     console.log(response.data)
                     this.barangData = response.data
                })
        },
        getImage(){
            this.$http.get('http://localhost:8000/api/thumb/' + this.$route.params.productId)
                .then(response=>{
                     console.log(response.data)
                     this.Image=response.data[0]
                })
        }
    }
}

</script>

<style>

</style>