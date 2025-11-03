<script setup>
    import { ref } from 'vue';

    const props = defineProps([
        'producto'
    ])

</script>
<template>
    <div>
        <div class="datosProducto
            w-full h-fit
            grid grid-cols-[minmax(150px,2fr)_minmax(50px,1fr)_minmax(50px,1fr)_minmax(50px,1fr)_50px] gap-1.5 
            ">
            <span class="producto">{{ producto.nombre }}</span>
            <span class="cantidad">{{ producto.cantidad }}</span>
            <span class="precio moneda">{{ producto.precio }}</span>
            <span class="subtotal moneda">{{ producto.subtotal }}</span>
            <div class="quitar">
            <div @click="quitarElemento" 
                class="quitarProducto
                    h-[25px] aspect-square
                    rounded-3xl
                    bg-red-200 text-black font-bold
                    hover:bg-red-500 hover:text-white hover:border-2 hover:border-black
                    cursor-pointer
                    ">
                -
            </div>
        </div>
        </div>
    </div>
</template>