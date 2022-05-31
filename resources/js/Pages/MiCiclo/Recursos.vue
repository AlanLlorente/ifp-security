<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6">Recursos_IFP_online_DAW-DAM Recursos adicionales online DAM-DAW</h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div v-if="$page.url === '/mi-ciclo/recursos'">
                    <h1 class="text-3xl"> ¿Qué encontrarás en este espacio?</h1>
                    <div class="mt-6">En este espacio encontrarás recursos y materiales adicionales a los contenidos del aula que te ayudarán en tus estudios.</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/recursos/material'">
                    <h1 class="text-3xl">Material recursos</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="underline text-lg font-bold">DAM/DAW</h3>
                        <h3 class="font-semibold mt-4">Videos</h3>
                        <p>Videotutoriales asociados a los diferentes módulos del ciclo <br>Videoconferencias conceptos sobre Bigdata</p>
                        <h3 class="font-semibold mt-4">Artículos</h3>
                        <p>Ciberseguridad - Articulos revista Harvard Deusto <br>Desing Thinking - Articulos revista Harvard Deusto</p>
                        <h3 class="font-semibold mt-4">Inglés</h3>
                        <p>English for IT</p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/recursos/tablon'">
                    <h1 class="text-3xl">Anuncios</h1>
                </div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>Recursos_IFP_online_DAW-DAM (Recursos adicionales online DAM-DAW)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/recursos">¿Qué encontrarás en este espacio?</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/recursos/material">Material recursos</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/recursos/tablon">Tablon de alertas</Link>
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
    components: {
        Layout,
        Link
    }
}
</script>
