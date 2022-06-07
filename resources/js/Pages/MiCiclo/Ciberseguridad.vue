<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6"> 220275103_MP16_1A_C 2202_ASIR_MP16_Ciberseguridad y hacking ético_C </h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad'">
                    <h1>Presentación</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">¡Bienvenid@s!</h3>
                        <iframe class="mt-2" width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">Foro de Presentación</h3>
                        <p>En este espacio encontrarás la primera actividad del módulo: Preséntate. A qué te dedicas, cuáles son tus intereses, qué expectativas tienes sobre el ciclo en general y sobre la asignatura en particular... De esta manera, estamos convencidos de que la distancia será más corta y conociéndonos un poco mejor te podremos acompañar de una manera más eficaz.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">¿Empezamos?</h3>
                        <p>Imagen de presentación Te invitamos a que te dirijas al margen derecho y en el link Planificación conozcas cómo se organiza el curso. <span class="text-lg text-red-700">¡Adelante!</span></p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/planificacion'">
                    <h1> Planificación </h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Plan docente</h3>
                        <p class="mt-1">Plan docente Archivos adjuntos:<span class="text-gray-700"> Archivo 16ASYRHacking.pdf (456,83 KB)</span></p>
                        <p class="mt-1">En este espacio encontrarás el Plan docente, donde verás los datos del profesor y de la asignatura junto con el temario completo dividido por unidad formativa para que sepas todo lo que debes aprender durante el proceso en este módulo.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Cronograma</h3>
                        <p class="mt-1">Archivos adjuntos:<span class="text-gray-700"> Archivo CronogramaASYR_Ciberseguridad_C.pdf (347,297 KB)</span></p>
                        <p class="mt-1">En este archivo podrás ver las fechas importantes de este módulo para que puedas organizarte. Con él podrás saber en todo momento cuando empieza cada  unidad, las fechas de entrega y los días de videoconferencia.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Evaluación</h3>
                        <p class="mt-1">Evaluación Archivos adjuntos:<span class="text-gray-700"> Achivo Evaluacion_ASYR_Ciberseguridad.pdf (289,127 KB)</span></p>
                        <p class="mt-1">Si tienes dudas sobre la evaluación de esta asignatura o quieres repasar algún aspecto te sugerimos leer este documento. Aquí encontrarás los aspectos más importantes para que sepas de que manera será evaluada esta asignatura.</p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/calendario'">
                    <h1 class="text-3xl">Calendario</h1>
                    <div class="mt-6">Lo sentimos, lo que estas buscando aun no esta disponible</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/libro'">
                    <h1 class="text-3xl">Libro de referencia</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Libro de referencia</h3>
                        <p class="mt-1">Archivos adjuntos: <span class="text-gray-700">Archivo Instrucciones Codigos RA-MA.PDF (2,832 MB)</span> </p>
                        <p class="mt-1">En este apartado podrás encontrar el libro de referencia del módulo. Recuerda <span class="font-bold">revisar todas las instrucciones</span> y seguir los pasos que adjuntamos a continuación en el PDF. Es importante que introduzcas el siguiente código del E-book: <span class="text-red-700">HCXOKPUAFEP</span></p>
                        <img class="mt-4" src="https://www.advertisementshout.com/wp-content/uploads/2021/07/rick_astley_youtube_1627540038486.jpg" alt="imagen increible">
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/material'">
                    <h1 class="text-3xl">Material de referencia</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">Contenidos de Ciberseguridad</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">Enlaces de interés</h3>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/uf1'">
                    <h1 class="text-3xl">Unidad formativa 1</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">UF2 - TEMA 1</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">UF2 - TEMA 2</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">UF2 - TEMA 3</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline">UF2 - TEMA 4</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Contenidos</h3>
                        <h3 class="text-xl text-lime-600">UF1: Ciberinteligencia y Ciberseguridad</h3>
                        <p class="mt-1">A través de esta UF conseguirás:</p>
                        <ul class="list-disc">
                            <li class="ml-8">Obtener propuestas de soluciones a Ciberataques detectados reconociendo el motivo y origen del ataque.</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Material Complementario UF1</h3>
                        <p class="mt-2">En este apartado podrás descargar el archivo correspondiente al material de la UF1.</p>
                        <h3 class="mt-2 text-blue-900">Material Obligatorio para ambas Videoconferencias de la UF1 </h3>
                        <ul class="mt-1 list-disc">
                            <li class="underline text-sm ml-8">Presentación videoconferencia UF1 descarga Ciberseguridad_UF1_II_v3.pdf</li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material obligatorio Primera Videoconferencia UF1</h3>
                        <ul class="mt-1 list-disc">
                            <li class="underline text-sm ml-8">HOWTO Instalación de la herramienta Autopsy, descarga aquí </li>
                            <li class="underline text-sm ml-8">Resumen de Informática forense, descarga aquí </li>
                            <li class="underline text-sm ml-8">CIB_M05_Informática forense.pdf  </li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material opcional Primera Videoconferencia UF1</h3>
                        <ul class="mt-1 list-disc">
                            <li class="underline text-sm ml-8">CIB_M01_Introducción.pdf  </li>
                            <li class="underline text-sm ml-8">CIB_M07_Reglamento General de Protección de Datos de la UE.pdf  </li>
                            <li class="underline text-sm ml-8">CIB_M08_Tendencias en ciberseguridad.pdf</li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material obligatorio Segunda Videoconferencia UF1:</h3>
                        <ul class="mt-1 list-disc">
                            <li class="underline text-sm ml-8">Análisis de riesgos en 6 pasos, descarga aquí</li>
                            <li class="underline text-sm ml-8">Ejemplo Plan de Contingencia, descarga aquí</li>
                            <li class="underline text-sm ml-8">CIB_M04_Auditorias de seguridad.pdf</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Videos</h3>
                        <p class="mt-4 text-sm">Instalación_autopsy_I</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="mt-4 text-sm">Instalación_autopsy_II</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="mt-4 text-sm">Metadatos de imagenes</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="mt-4 text-sm">Autopsy</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="mt-4 text-sm">Análisis de riesgos</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/uf2'">
                    <h1 class="text-3xl">Unidad formativa 2</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Material complementario UF2</h3>
                        <p class="mt-2">En este apartado podrás descargar el archivo correspondiente al material de la UF2.</p>
                        <h3 class="mt-2 text-blue-900">Material Obligatorio para ambas Videoconferencias de la UF2 </h3>
                        <ul class="mt-1 list-disc">
                            <li class='underline text-sm ml-8'>Presentación primera videoconferencia UF2, descargar Ciberseguridad_UF2_completo.pdf   </li>
                            <li class='underline text-sm ml-8'>Presentación Segunda videoconferencia UF2 (Herramientas), descargar aquí</li>
                            <li class='underline text-sm ml-8'>URLs interesantes, descarga aquí</li>
                            <li class='underline text-sm ml-8'>CIB_M03_Hacking ético.pdf  </li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material obligatorio Primera Videoconferencia UF2:</h3>
                        <ul class="mt-1 list-disc">
                            <li class='underline text-sm ml-8'>HOWTO instalación de NMAP, descarga aquí</li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material obligatorio Segunda Videoconferencia UF2:</h3>
                        <ul class="mt-1 list-disc">
                            <li class='underline text-sm ml-8'>HOWTO instalación WIRESHARK, descarga aquí</li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material opcional para ambas Videoconferencias UF2:</h3>
                        <ul class="mt-1 list-disc">
                            <li class='underline text-sm ml-8'>CIB_M02_Configuraciones de infraestructuras seguras.pdf  </li>
                            <li class='underline text-sm ml-8'>CIB_M06_Seguridad en servidores web.pdf  </li>
                            <li class='underline text-sm ml-8'>Tráfico de WIRESHARK, descargar TraficoContraseña.pcapng   </li>
                            <li class='underline text-sm ml-8'>Descargar HULK y PYTHON, descargar HULK.zip    </li>
                        </ul>
                        <h3 class="mt-2 text-blue-900">Material Videoconferencia de Cierre:</h3>
                        <ul class="mt-1 list-disc">
                            <li class='underline text-sm ml-8'>ASYR_MP16_Ciber_Temario_Examen_1aC_2aC.pdf</li>
                            <li class='underline text-sm ml-8'>Resumen_VC_Cierre_ihulk.pdf   ¡¡NUEVO!! </li>
                            <li class='underline text-sm ml-8'>Resumen_Videoconferencia_Cierre_Ciber_C.pdf  ¡¡NUEVO!!</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Videos</h3>
                        <p class="text-sm">Wireshark</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="text-sm">Nmap</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="text-sm">Google Hacking</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/tablon'">
                    <h1 class="text-3xl">Anuncios</h1>
                    <div class="mt-6">Lo sentimos, lo que estas buscando aun no esta disponible</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/correo-profesor'">
                    <h1 class="text-3xl">Enviar mensaje de correo electrónico </h1>
                    <div class="mt-6">Lo sentimos, actualmente nuestro servicio de email se encuentra bajo mantenimiento</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/videoconferencias'">
                    <h1 class="text-3xl">Blackboard Collaborate Ultra</h1>
                    <div class="mt-6">Lo sentimos, aun no tenemos ninguna videoconferencia planificada o guardada</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/ciberseguridad/notas'">
                    <h1 class="text-3xl">Mis calificaciones</h1>
                    <div class="mt-6">Lo sentimos, aun no hay ninguna nota disponible</div>
                </div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>220275103_MP16_1A_C (2202_ASIR_MP16_Ciberseguridad y hacking ético_C)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad'}" href="/mi-ciclo/ciberseguridad">Presentación</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/planificacion'}" href="/mi-ciclo/ciberseguridad/planificacion">Planificación</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/calendario'}" href="/mi-ciclo/ciberseguridad/calendario">Calendario</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Contenidos y actividades</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/libro'}" href="/mi-ciclo/ciberseguridad/libro">Libro de referencia</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/material'}" href="/mi-ciclo/ciberseguridad/material">Material de referencia</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/uf1'}" href="/mi-ciclo/ciberseguridad/uf1">Unidad Formativa 1</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/uf2'}" href="/mi-ciclo/ciberseguridad/uf2">Unidad formativa 2</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Comunicación</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/tablon'}" href="/mi-ciclo/ciberseguridad/tablon">Tablón de anuncios</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/correo-profesor'}"  href="/mi-ciclo/ciberseguridad/correo-profesor">Envía correo al profesor</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Sesiones Online</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/videoconferencias'}" href="/mi-ciclo/ciberseguridad/videoconferencias">Videoconferencias</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Calificaciones</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/ciberseguridad/notas'}" href="/mi-ciclo/ciberseguridad/notas">Notas</Link>
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
