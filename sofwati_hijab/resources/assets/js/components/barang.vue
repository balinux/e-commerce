<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!--<span v-if="loading">loading Data . . . </span>-->
                <div v-if="loading"><h1>loading Data . . .</h1></div>  

                    <div class="panel panel-default" v-for='item in barang'>
                    <form>

                        <!--<router-link to="/galery">detail</router-link>-->
                        <button @click="detail()" class="btn btn-primary pull-right" ><router-link to="/galery">detail</router-link></button>                          
                        <button @click="editIt(item.id)" class="btn btn-success pull-right" >edit</button>                          
                        <button @click="deleteIt(item.id)" class="btn btn-danger pull-right" >del</button>                          
                               
                                <div v-show="!showIt(item.id)" class="panel-heading">{{item.name}}</div>
                                <div v-show="!showIt(item.id)" class="panel-heading">{{item.galery.length}} images</div>
                                
                                <input v-show="showIt(item.id)" style="width:200px" type="text" placeholder="name" class="form-control" v-model="itemEditData.name"> 

                                <div v-show="!showIt(item.id)" class="panel-body">
                                    {{item.stok}}
                                </div>
                                <input v-show="showIt(item.id)" type="text" class="form-control" v-model="itemEditData.stok" placeholder="stok">   

                                <button @click.prevent="updateIt(item.id)"type="submit" class="btn btn-primary btn-block" v-show="showIt(item.id)">OK</button>
                                <button @click="editForm=false" type="submit" class="btn btn-block" v-show="showIt(item.id)">NO!</button>
                    </form>    
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                barang:[],
                loading:false,
                editForm:"",
                itemEditData:{
                    name:'',
                    stok:'',
                    file:''
                }
            }
        },
        methods:{
            editIt(itemId){
                this.barang.forEach((item,i)=>{
                    if (item.id==itemId) {
                       this.itemEditData=item;
                    }
                });
                return this.editForm=itemId;
            },
            showIt(itemId){
                if (this.editForm==itemId) {
                    return true;
                }
                return false;
            },
            updateIt(itemId){
                axios.put('/barang/'+itemId, this.itemEditData)
                .then(response=>{
                    console.log(response);
                    this.editForm=false;
                    this.itemEditData="";
                    this.$route.push('/');
                })
                .catch(error=>{
                    console.log(error.response);
                })
            },
            deleteIt(itemId){
                let ok = confirm('delete data ini?');
                if (ok) {
                axios.delete('/barang/'+itemId)
                .then(response=>{
                    this.fetchIt();
                });
                }
            }
            ,
            fetchIt (){
                this.loading=true;
                // axios.get('barang').then((response)=>{console.log(response.data)});    
                axios.get('barang').then((response)=>{this.barang=response.data; this.loading=false});    
            }
        },
        mounted() {
            this.fetchIt();
            
            // this.loading = true;

            // var self = this;
            // axios.get('/barang').then(function(response){
            //     self.barang = response.data;
            // });
            
            // cara ke 2 fail
            // axios.get('barang').then((response)=>this.barang=response.data); 
            // this.loading = false;
            // console.log(response.data);
        }
    }
</script>
