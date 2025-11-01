<script setup>
import { ref, reactive } from 'vue';
import Cuerpo from '../components/base/Cuerpo.vue';
import Encabezado from '../components/base/Encabezado.vue';
import ProductoVenta from '../components/venta/ProductoVenta.vue';

const carrito = reactive({
    productos: [],
    total: 0
})

const agregarAlCarrito = () => {
    carrito.productos.push(
        {
            id: carrito.productos.length,
            cantidad: 0,
            subtotal: 0
        }
    )
    console.log(carrito.value)
}

function obtenerSubtotal(valor, idElemento) {
    //console.log("recibido",valor, "de", idElemento)
    carrito.productos[idElemento] = valor
    //console.log("objeto ", carrito.productos[idElemento])
    calcularTotal()
}

const calcularTotal = () => {
    carrito.total = 0
    carrito.productos.forEach(producto => {
        console.log(producto.subtotal)
        carrito.total += producto.subtotal
    });
    //console.log(total)
}

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

            <div class="detalle
                    w-full h-9/10
                    mt-2.5
                    border border-fondo-100
                    bg-white
                    rounded-2xl
                    ">
                <div class="detalleProductos
                        ">
                    <div class="listaDetalleProductos
                            h-fit
                            py-2.5
                            flex flex-col items-center
                            ">
                        <div class="datosProducto
                                w-95/100 h-fit
                                grid grid-cols-[minmax(150px,2fr)_minmax(50px,1fr)_minmax(50px,1fr)_minmax(50px,1fr)] gap-1.5 
                            ">
                            <span class="font-bold">Producto</span>
                            <span>Cantidad</span>
                            <span>Precio</span>
                            <span class="font-bold text-orange-500">SubTotal</span>
                        </div>

                        <div class="carrito 
                                w-95/100" @change="calcularTotal()">
                            <ProductoVenta v-for="producto in carrito.productos"
                                @enviar-valores="obtenerSubtotal($event, producto.id)" :key="producto.id">
                                <!-- // v-model="producto.subtotal"> */ -->
                            </ProductoVenta>
                        </div>


                    </div>
                    <div class="botoneraDetalleProductos
                            ">
                        <div @click="agregarAlCarrito()" class="btnAgregarProd
                                relative
                                flex justify-around items-center
                                w-[20vw] h-[5vh]
                                rounded-2xl
                                border-black border-2
                                text-center
                                m-1.5 p-2.5
                                hover:bg-black hover:text-white
                                cursor-pointer
                            ">
                            <span class="material-symbols-outlined 
                                    h-[25px] aspect-square
                                    left-0 right-auto
                                ">
                                add
                            </span>
                            <span>
                                Agregar Producto
                            </span>
                        </div>
                    </div>
                    <div class="pieDetalleProductos
                            flex justify-end
                            h-[5vh] w-95/100
                            mx-[2.5%]
                            ">
                        <span class="total moneda
                                w-1/5
                                border-t-2 border-t-black
                                font-bold text-2xl text-center
                                ">
                            {{ carrito.total }}
                        </span>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <a @click="calcularTotal()">actualizar</a>
</template>

<style scoped>
.datosProducto>span {
    text-align: center;
    border-bottom: 1px solid grey;
}

.carrito>div:nth-child(even) {
    background-color: rgb(186, 203, 228);
}
</style>