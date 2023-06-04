import {createRouter, createWebHistory } from "vue-router";


import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Main from './components/Main.vue';

const router = createRouter({
    history: createWebHistory(),
    routes:
    [
    {
        name: 'login',
        path: '/',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'main',
        path: '/main',
        component: Main
    }
]
});

export default router;

// export default createRouter(options; {
//     history: createWebHistory(),
//     routes
// })