<script setup>
    import router from '../router';
    import { RouterLink } from 'vue-router';
</script>

<template>
    <div class="base
            w-screen h-[80vh]
            bg-fondo-030
            flex justify-center items-center">
        <div class="contenido
                w-7/10 h-7/10
                rounded-3xl border-fondo-100 border-2
                flex flex-col justify-evenly items-center
                bg-fondo-060
                ">
                
            <button @click="router.push({name:'nuevaVenta'})" 
                    class="btnNuevaVenta
                        w-1/4
                        bg-objetoA-080
                        hover:bg-objetoA-070 active:bg-objetoA-100
                        ">
                Nueva Venta
            </button>
            <button class="btnNuevoProducto
                        w-1/4
                        text-white
                        bg-objetoB-080
                        hover:bg-objetoB-070 active:bg-objetoB-100
                        ">
                Nuevo Producto
            </button>
        </div>
    </div>
</template>

<style scoped>
</style>