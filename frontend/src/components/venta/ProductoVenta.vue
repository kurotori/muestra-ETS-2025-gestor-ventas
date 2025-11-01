<script setup>
import { ref } from 'vue';

const productos = ref([
    {
        id: 0,
        nombre: 'Cubre webcam',
        precio: 50
    },
    {
        id: 1,
        nombre: 'Mini catapulta',
        precio: 150
    }
])

const productoSel = ref(0)
</script>

<template>
    <div class="datosProducto
            w-full h-fit
            grid grid-cols-[minmax(150px,2fr)_minmax(50px,1fr)_minmax(50px,1fr)_minmax(50px,1fr)] gap-1.5 

            ">
        <select v-model="productoSel" name="producto" id="producto" class="">
            <option v-for="producto in productos" :value="producto.id">{{ producto.nombre }}</option>
        </select>
        <input type="number" id="cantidad" class="">
        <span>{{ productos[productoSel].precio }}</span>
        <span>0</span>
    </div>
</template>

<style scoped>
input {
    /*margin-left: 5px;*/
    border-bottom: 1px solid black;
}

.datosProducto>* {
    text-align: center;
}
</style>