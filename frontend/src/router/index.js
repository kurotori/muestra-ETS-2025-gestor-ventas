import {createRouter, createWebHistory} from 'vue-router'
import Inicio from '../views/Inicio.vue'
import NuevaVenta from '../views/NuevaVenta.vue'

const router = createRouter(
    {
        history: createWebHistory(import.meta.env.BASE_URL),
        routes: [
            {
                path:"/",
                component: Inicio,
                name: 'inicio'
            },
            {
                path:"/ventas/nueva",
                component: NuevaVenta,
                name:'nuevaVenta'
            }
            
        ]
    }
)


export default router