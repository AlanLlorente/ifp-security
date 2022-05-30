<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2>"><h3 class="ml-6"> 220275103_00 2202_ASIR_00_Espacio de coordinación y tutoría_1A </h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas'">
                    <h1 class="text-3xl">Presentacion</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-700">¡Bienvenid@s!</h3>
                        <p>Hola, mi nombre es Javier Martín y seré vuestro profesor. Bienvenidos al módulo de Lenguaje de Marcas donde aprenderemos HTML,. XML, CSS para almacenar información y desarrollo de páginas web entre otros.
                            Debajo os dejo un video presentándome.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-700">Video de presentación del profesor del Módulo</h3>
                        <p>Descargar archivo de video: <span class="underline">Profesor_PresentacionesLenguajeMarcas.mp4 </span></p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/planificacion'">
                    <h1 class="text-3xl">Planificación</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Plan docente</h3>
                        <p>Archivos adjuntos:<span class="text-gray-700"> Archivo PlanDocenteLenguajeDeMarcasASYR.pdf (788,613 KB)</span> </p>
                        <p>En este espacio encontrarás el Plan docente, donde verás los datos del profesor y de la asignatura junto con el temario completo dividido por unidad formativa para que sepas todo lo que debes aprender durante el proceso en este módulo.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Cronograma</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Cronograma_Asignatura_ASIR_MP04_Lenguaje de marcas y sistemas de gestión de la información_C.pdf (418,354 KB)</span> </p>
                        <p>En este archivo podrás ver las fechas importantes de este módulo para que puedas organizarte. Con él podrás saber en todo momento cuando empieza cada  unidad, las fechas de entrega y los días de videoconferencia.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Evaluación</h3>
                        <p>Archivos adjuntos:<span class="text-gray-700">Archivo Modelo_de_Evaluacion.pdf (161,888 KB)</span> </p>
                        <p>Si tienes dudas sobre la evaluación de esta asignatura o quieres repasar algún aspecto te sugerimos leer este documento. Aquí encontrarás los aspectos más importantes para que sepas de que manera será evaluada esta asignatura.</p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/calendario'">
                    <h1 class="text-3xl">Calendario</h1>
                    <div class="mt-6">Lo sentimos, aun no hay ningun calendario disponible</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/libro'">
                    <h1 class="text-3xl">Libro de referencia</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Libro de referencia</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo ASIR MP04 Lenguajes de marcas.pdf (5,527 MB)</span></p>
                        <p>En este apartado podrás descargar el archivo correspondiente al libro de referencia del módulo</p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/uf1'">uf1</div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/uf2'">uf2</div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/uf3'">uf3</div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/material'">material</div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/pruebas'">pruebas</div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/tablon'">tablon</div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/correo-profesor'">
                    <h1 class="text-3xl"> Enviar mensaje de correo electrónico </h1>
                    <div class="mt-6">Lo sentimos aun no hay ningun contenido que mostrar</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/videoconferencias'">
                    <h1 class="text-3xl">Videoconferencias</h1>
                    <div class="mt-6">Lo sentimos aun no hay ningun contenido que mostrar</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/notas'">
                    <h1 class="text-3xl">Notas</h1>
                    <div class="mt-6">Lo sentimos aun no hay ningun contenido que mostrar.</div>
                </div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>220275103_MP04_1A_C (2202_ASIR_MP04_Lenguaje de marcas y sistemas de gestión de la información_C)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas">Presentación</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/planificacion">Planificación</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/calendario">Calendario</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Contenidos y actividades</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/libro">Libro de referencia</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/uf1">Unidad formativa 1</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/uf2">Unidad foramtiva 2</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/uf3">Unidad formativa 3</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/material">Material de referencia</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/pruebas">Pruebas finales de Evaluación</Link>
                    </div>
                    <div class="mt-4">
                       <h3 class="text-sky-600 text-lg">Comunicación</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/tablon">Tablón de anuncios</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/correo-profesor">Envía correo al profesor</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Sesiones Online</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/videoconferencias">Videoconferencias</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Notas</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/lenguaje-marcas/notas">Notas</Link>
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
