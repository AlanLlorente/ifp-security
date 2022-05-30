<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6"> 220275103_MP16_1A_C 2202_ASIR_MP16_Ciberseguridad y hacking ético_C </h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>220275103_MP16_1A_C (2202_ASIR_MP16_Ciberseguridad y hacking ético_C)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad">Presentación</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Planificación</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Calendario</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Contenidos y actividades</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Libro de referencia</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Material de referencia</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Unidad Formativa 1</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Unidad formativa 2</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Pruebas Finales de evaluación</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Comunicación</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Tablón de anuncios</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Envía correo al profesor</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Sesiones Online</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Videoconferencias</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Calificaciones</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coberseguridad/">Notas</Link>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>
<script>
import Layout from "../Resources/Layout";
import {Link} from "@inertiajs/inertia-vue3";
export default {
    components:{
        Layout,
        Link
    }
}
</script>
