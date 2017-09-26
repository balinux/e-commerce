import VueRouter from 'vue-router';

let routes = [
    {
        path:'/',
        component:require('./components/Example')
    },
    {
        path:'/about',
        component:require('./components/About')
    },
    {
        path:'/bar',
        component:require('./components/bar')
    },
    {
        path:'/barang',
        component:require('./components/barang')
    },
    {
        path:'/create',
        component:require('./components/create')
    },
    {
        path:'/galery',
        component:require('./components/Galery')
    }
    
];

export default new VueRouter({
    routes
})