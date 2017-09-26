import Vue from 'vue'
import VueRouter from 'vue-router'

import list from './components/list.vue'
import add from './components/add.vue'
import adminHome from './components/admin/admin_home.vue'
import detail from './components/product/detail.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    routes :[
        {
            path:"/",
            component:list
        },
        {
            path:"/list",
            component:list
        },
        {
            path:"admin/home",
            component:adminHome
        },
        {
            path:"/add",
            component:add
        },
        {
            path:"/admin/home",
            component:adminHome
        },
        {
            path:"/product/detail/:productId",
            component:detail
        }
    ]
})

export default router