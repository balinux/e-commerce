import Vue from 'vue'
import VueResource from 'vue-resource'
import App from './App.vue'
import Router from './router.js'

Vue.use(VueResource);

Vue.http.options.root = 'http://localhost:8000/'

new Vue({
  el: '#app',
  render: h => h(App),
  router:Router
})
