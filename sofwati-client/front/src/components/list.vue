<template>
<div class="row">

            <div class="col-lg-4 col-md-6 mb-4" v-for="item in barang" >
              <div class="card h-100">
              <router-link 
              :to="'product/detail/'+item.id">
                <a href="#"><img class="card-img-top" src="http://127.0.0.1:8000/image/HVi2922PkRLdDsFMN.jpeg" alt=""></a>
              </router-link>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{item.name}}</a>
                  </h4>
                  <h5>stok: {{item.stok}}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                <a name="" id="" class="btn btn-primary" href="#" role="button">order</a>
                </div>
              </div>
            </div>


          </div>
</template>

<script>

export default{
    data(){
        return{
            barang:[]
        }
    },
    
    created(){
        this.$http.get("http://localhost:8000/barang")
            .then(response=>{
                // console.log(response.data)
                this.barang = response.data
            })
    }

}
</script>

<style>

</style>