import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Login from './components/login.vue';
import Signup from './components/signup.vue';
import Posts from './components/posts.vue';


const routes = [
    { path: '/login',component: Login, name: 'login'},
    { path: '/signup',component: Signup, name: 'signup'},
    {
        path: '/',
        component: Posts,
        name: 'posts',
    },
]

const router = new VueRouter({
    routes,
})

export default router
