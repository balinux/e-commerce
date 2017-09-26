<template>
  <div id="app">
    <navbar></navbar>
        <div class="container">
          <headerweb></headerweb>
          <router-view></router-view>          
        </div>
  </div>
</template>

<script>
import navbar from './components/navbar.vue'
import headerweb from './components/headerweb.vue'
import list from './components/list.vue'
export default {
  components:{
    'headerweb':headerweb,
    'navbar':navbar,
    'list':list
  },
  
  name: 'app',

  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      author:'balinux'
    }
  },
  created() {
    this.$http.get('http://127.0.0.1:8000/barang')
    .then(response => {
      console.log(response)
    });
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
