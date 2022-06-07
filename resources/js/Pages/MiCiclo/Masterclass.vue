<template> <layout>
    <div class="border-b-2 border-lime-400 py-2>"><h3 class="ml-6 py-1">masterclass_ifp_2021_22_tic masterclass_ifp_2021_22_tic </h3></div>
        <div class="flex"> <div class="w-3/4 p-4">
            <div v-if="$page.url === '/mi-ciclo/master-class'">
                    <h1 class="text-3xl">Inicio</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">VIDEOTECA MASTERCLASS</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Masterclass Ciberseguridad Deloitte. Si quieres la paz, prepárate para la ciberguerra, los desafíos de la sociedad digital y el riesgo cibernético</h3>
                        <video alt="video que muestra una masterclass de deloitte sobre la ciberseguridad"></video>
                    </div>
                </div>
            <div v-if="$page.url === '/mi-ciclo/master-class/anuncios'">
                    <h1 class="text-3xl">Anuncios</h1>
                </div>
            <div v-if="$page.url === '/mi-ciclo/master-class/masterclass'">
                    <h1 class="text-3xl">Blackboard Collaborate Ultra </h1>
                    <div class="mt-6">Lo sentimos aun no tenemos ninguna videoconferencia disponible</div>
                </div>
        </div>
        <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>masterclass_ifp_2021_22_tic (masterclass_ifp_2021_22_tic)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/master-class'}" href="/mi-ciclo/master-class">Inicio</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/master-class/anuncios'}" href="/mi-ciclo/master-class/anuncios">Anuncios</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Sesiones Online</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/master-class/masterclass'}" href="/mi-ciclo/master-class/masterclass">Masterclass</Link>
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
