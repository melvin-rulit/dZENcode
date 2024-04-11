import './bootstrap';

import {createApp} from 'vue'
import {createRouter, createWebHashHistory} from 'vue-router'

import App from './components/App.vue'
import ComentsList from "./components/coments/ComentsList.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        {
            path: '/',
            component: ComentsList
        },
    ],
})

createApp(App).use(router).mount('#app')
