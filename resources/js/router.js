import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Login from './components/login.vue';
import Signup from './components/signup.vue';
import Posts from './components/posts.vue';


const routes = [
    { path: '/login',component: Login},
    { path: '/signup',component: Signup},
    {
        path: '/posts',
        component: Posts,
        name: 'posts',
    },
]

const router = new VueRouter({
    routes,
})

export default router