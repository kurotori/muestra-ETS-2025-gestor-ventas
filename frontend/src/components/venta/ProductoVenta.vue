<script setup>
    import { ref } from 'vue';

    const productos = ref([])
</script>

<template>
    <div class="datosProducto
            w-full h-fit
            border-black border-b
            ">
        <select name="producto" id="producto">
            <option value="cosa1">Cosa 1</option>
        </select>
    </div>
</template>

<style scoped></style>