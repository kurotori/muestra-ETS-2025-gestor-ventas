<script setup>
import { ref } from 'vue';

const productos = ref([])
</script>

<template>
    <div class="datosProducto
            w-95/100 h-fit
            flex flex-row 
            ">
        <select name="producto" id="producto" class=" flex-2">
            <option value="cosa1">Cosa 1</option>
            <option value="cosa2">Cosa 2</option>
        </select>
        <input type="number" id="cantidad" class="flex-1">
        <input type="number" id="precio">
        <input type="number" id="subtotal">
    </div>
</template>

<style scoped>
input {
    margin-left: 5px;
    border-bottom: 1px solid black;
}
</style>