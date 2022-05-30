<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2>"><h3 class="ml-6">2202_MOS_Online_Excel_O3</h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div  v-if="$page.url === '/mi-ciclo/mos'">
                    <h1 class="text-3xl">Presentación MOS Excel</h1>
                    <iframe style="border: none; max-width: 100%; max-height: 100vh;" src="https://sway.office.com/s/osPp7vfOFQ2tmWXo/embed" marginheight="0" marginwidth="0" max-width="100%" sandbox="allow-forms allow-modals allow-orientation-lock allow-popups allow-same-origin allow-scripts" scrolling="no" allowfullscreen="" mozallowfullscreen="" msallowfullscreen="" webkitallowfullscreen="" width="1200" height="900" frameborder="0"></iframe>
                </div>
                <div  v-if="$page.url === '/mi-ciclo/mos/calendario'">2</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/manual'">3</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/jasperactive'">5</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/practice-gmetrix'">6</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/tablon'">7</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/foro'">8</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/correo-profesor'">9</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/videoconferencias'">10</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/contenido'">11</div>
                <div  v-if="$page.url === '/mi-ciclo/mos/manual-acceso'">12</div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>2202_MOS_Excel_O3 (2202_MOS_Online_Excel_O3)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos">Presentación MOS Excel</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/calendario">Calendario</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Contenidos</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/manual">Manual pdf</Link>
                        <a target="_blank" class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="https://support.microsoft.com/es-es/office/aprendizajes-en-v%c3%addeo-de-excel-9bc05390-e94c-46af-a5b3-d7c22f6990bb?ui=es-es&rs=es-es&ad=es">Manual Interactivo</a>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/jasperactive">Jasperactive</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/practice-gmetrix">Practice test Gmetrix</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Actividades</h3>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Comunicación</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/tablon">Tablon de anuncios</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/foro">Foro Consultas</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/correo-profesor">Enviar e-mail</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Sesiones Online</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/videoconferencias">Videoconferencias</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/contenido">Contenido Videoconferencias</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/mos/manual-acceso">Manual acceso Videoconferencias</Link>
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
