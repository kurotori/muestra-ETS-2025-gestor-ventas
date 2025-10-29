<template>
    <div class="base
            w-[100vw] h-[100vh]
            bg-slate-300

            ">
        <div class="encabezado
                h-[8vh] w-[100vw]
                border-b-1 border-b-black
                ">
            <h1 class=" encabezadoH
                  font-bold text-[5vh]

                  ">
                Nuevo Producto
            </h1>
        </div>
        <div class="cuerpo
                w-[100vw] h-[88vh]
                flex flex-row justify-center
                border-b-1 border-b-black
                ">
            <div class="formProducto
                h-1/4 w-3/4
                border-x border-slate-600
                grid grid-cols-2 grid-rows-2
                    ">
                <label for="nombre" class="text-center table-cell align-middle">Nombre del Producto:</label>
                <input id="nombre" v-model="producto.nombre" type="text" class="bg-white border-gray-500 border-b">

                <label for="valor" class="text-center align-middle">Precio:</label>
                <input id="valor" v-model="producto.valor" type="text" class="bg-white border-gray-500 border-b">

                <div class="flex col-span-2 justify-center">
                    <Link as="button"
                        method="post"
                        href="/productos/guardar"
                        :data="{producto}"
                        class="
                            w-1/3 h-[5vh]
                            rounded-2xl
                            bg-green-600 hover:bg-green-500 active:bg-green-800
                            text-white
                        ">
                        Agregar Producto
                    </Link>
                </div>

            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';
    import { reactive } from 'vue';
    const producto = reactive(
        {
            nombre:'',
            valor:''
        }
    );


</script>
<style scoped lang="css">

</style>
