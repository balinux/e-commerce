<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">About </div>

                    <div class="panel-body" >
                        <p>{{about.body}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                about:[]
            }
        },
        mounted(){
            axios.get('about').then(
                (response)=>this.about=response.data
            );
            console.log(response.data);
        }
    }
</script>
