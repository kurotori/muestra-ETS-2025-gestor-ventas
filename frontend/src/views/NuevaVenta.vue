<script setup>
import Cuerpo from '../components/base/Cuerpo.vue';
import Encabezado from '../components/base/Encabezado.vue';


</script>

<template>
    <div class="base
            w-screen h-[80vh]
            bg-fondo-030
            flex justify-center items-center">
        <div class="contenido
                w-9/12 h-fit
                rounded-3xl
                p-5
                bg-fondo-060
                ">
            <h2 class="border-b border-b-black">
                Nueva Venta
            </h2>

            <div class="
                    w-full h-9/10
                    mt-2.5
                    border border-fondo-100
                    bg-white
                    rounded-2xl
                    detalle">
                <div class="btnAgregarProd
                        w-[20vw] h-[5vh]
                        rounded-2xl
                        border-black border-2
                        text-center
                        m-1.5
                        hover:bg-black hover:text-white
                        
                        ">
                    <span class="material-symbols-outlined h-2.5 ">
                        add
                    </span>
                    <span class="h-full inline-block align-middle">Agregar Producto</span> 
                </div>
            </div>

        </div>
    </div>
</template>