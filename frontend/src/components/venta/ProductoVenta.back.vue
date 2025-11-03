<script setup>
import { ref, reactive } from 'vue';

const emit = defineEmits([
    'enviarValores',
    'quitarElemento'
])

function enviarValores() {
    emit('enviarValores', detalle)
}

function quitarElemento(){
    emit('quitarElemento')
}

const detalle = reactive(
    {
        id: 0,
        cantidad: 0,
        subtotal: 0
    }
)

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
const prodCantidad = ref(0)
const prodSubTotal = defineModel()//ref(0)

const cambioProd = () => {
    detalle.subtotal = detalle.cantidad * productos.value[detalle.id].precio
    //console.log(productos.value[productoSel.value].precio)
    enviarValores()
}
</script>

<template>
    <div class="datosProducto
            w-full h-fit
            grid grid-cols-[minmax(150px,2fr)_minmax(50px,1fr)_minmax(50px,1fr)_minmax(50px,1fr)_50px] gap-1.5 

            ">
        <select v-model="detalle.id" name="producto" id="producto" class="" @change="cambioProd()">
            <option v-for="producto in productos" :value="producto.id">{{ producto.nombre }}</option>
        </select>
        <input type="number" id="cantidad" class="cantidad" value="0" v-model="detalle.cantidad" @change="cambioProd()">
        <span class="precio moneda">{{ productos[detalle.id].precio }}</span>
        <span class="subtotal moneda font-bold">
            {{ detalle.subtotal }}
        </span>
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