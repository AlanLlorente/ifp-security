<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6">2202_MOS_Online_Excel_O3</h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div v-if="$page.url === '/mi-ciclo/mos'">
                    <h1 class="text-3xl">Presentación MOS Excel</h1>
                    <iframe style="border: none; max-width: 100%; max-height: 100vh;" src="https://sway.office.com/s/osPp7vfOFQ2tmWXo/embed" marginheight="0" marginwidth="0" max-width="100%" sandbox="allow-forms allow-modals allow-orientation-lock allow-popups allow-same-origin allow-scripts" scrolling="no" allowfullscreen="" mozallowfullscreen="" msallowfullscreen="" webkitallowfullscreen="" width="1200" height="900" frameborder="0"></iframe>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/calendario'">
                    <h1 class="text-3xl">Calendario</h1>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/manual'">
                    <h1 class="text-3xl">Manual pdf</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="underline">MOAC Excel 2016</h3>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/jasperactive'">
                    <h1 class="text-3xl mb-6">Jasperactive</h1>
                    <iframe style="border: none; max-width: 100%; max-height: 100vh;" src="https://sway.office.com/s/bn2kUQQe7LswriIk/embed" marginheight="0" marginwidth="0" max-width="100%" sandbox="allow-forms allow-modals allow-orientation-lock allow-popups allow-same-origin allow-scripts" scrolling="no" allowfullscreen="" mozallowfullscreen="" msallowfullscreen="" webkitallowfullscreen="" width="1200" height="900" frameborder="0"></iframe>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/practice-gmetrix'">
                    <h1 class="mb-6 text-3xl">Practice test Gmetrix</h1>
                    <iframe style="border: none; max-width: 100%; max-height: 100vh;" src="https://sway.office.com/s/V0BhQci9QWqaDJXn/embed" marginheight="0" marginwidth="0" max-width="100%" sandbox="allow-forms allow-modals allow-orientation-lock allow-popups allow-same-origin allow-scripts" scrolling="no" allowfullscreen="" mozallowfullscreen="" msallowfullscreen="" webkitallowfullscreen="" width="1200" height="900" frameborder="0"></iframe>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/tablon'">7</div>
                <div v-if="$page.url === '/mi-ciclo/mos/foro'">
                    <h1 class="text-3xl">Tablero de discursion</h1>
                    <div class="mt-6">Lo sentimos, aun no hay ningun foro disponible</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/correo-profesor'">
                    <h1 class="text-3xl">Enviar e-mail</h1>
                    <div class="mt-6">Lo sentimos, actualmente nuestro servicio de email se encuentra bajo mantenimiento</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/videoconferencias'">
                    <h1 class="text-3xl"> Blackboard Collaborate Ultra </h1>
                    <div class="mt-6">Lo sentimos, aun no tenemos ninguna videoconferencia planificada o guardada</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/contenido'">
                    <h1 class="text-3xl">Contenido Videoconferencias</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="font-bold underline">Combinaciones de Teclado en excel</h3>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Configuración General Jasperactive</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Mensaje Activación Jasperactive.pdf (286,704 KB)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Configuración Regional Jasperactive</h3>
                        <p>Configuración Regional Jasperactive Archivos adjuntos: <span>Archivo Configuracion Regional.mp4 (6,906 MB)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Primera sesión – 22/03/2022 (19:30 – 21:00)</h3>
                        <p>Presentación del Curso<br>Contenidos que vamos a ver<br>Herramientas y recursos que vamos a utilizar</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Segunda sesión – 22/03/2022 (19:30 – 21:00)</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Segunda sesión.xlsx (149,138 KB)</span></p>
                        <h3 class="font-semibold">Qué es Excel y para qué sirve</h3>
                        <p>Partes de la ventana<br>Función del cuadro de nombre y de la barra de fórmulas<br class="bt-1">Los seis tipos de cursores y sus funciones<br class="mt-1">Formas de selección<br class="mt-1">Excel opera con variables en lugar de constantes<br class="mt-1">Archivos llamados Libros compuestos por hojas, extensión *.xlsx </p>
                        <h3 class="font-semibold">Presentando Excel en Jasperactive</h3>
                        <p>La primera lección de Excel en Jasperactive<br class="mt-1">Introducir texto<br class="mt-1">Introducir números<br class="mt-1">Introducir fechas<br></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Tercera sesión – 22/03/2022 (19:30 – 21:00)</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo 3 Tercera sesión.xlsx (146,469 KB)</span></p>
                        <p>Presentando Excel en Jasperactive<br class="mt-1">La primera lección de Excel en Jasperactive<br class="mt-1">Realizar varios ejercicios en Jasperactive<br class="mt-1">Cuadros de diálogo<br class="mt-1">Formatos y tipos de datos</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Cuarta sesión – 26/04/2022 (19:30 – 21:00)</h3>
                        <p>Archivos adjuntos:<span class="text-gray-700"> Archivo 4 Cuarta sesión.xlsx (469,979 KB)</span></p>
                        <p>Guardar libros<br class="mt-1">Crear un libro nuevo<br class="mt-1">Alternar entre libros<br class="mt-1">Cerrar un libro<br class="mt-1">Trabajar con el modo compatibilidad</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Quinta sesión – 26/04/2022 (19:30 – 21:00)</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Quinta sesión.xlsx (81,796 KB)</span></p>
                        <p>Editar celdas y deshacer cambios<br class="mt-1">Cortar, copiar y pegar datos<br class="mt-1">Usar Pegado especial<br class="mt-1">Copiar y mover celdas usando el ratón<br class="mt-1">Insertar y eliminar celdas<br class="mt-1">Ajustar las columnas y filas</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Sexta sesión – 17/05/2022 (20:00 – 21:30)</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Sexta sesión.xlsx (211,598 KB)</span></p>
                        <p>Ocultar/mostrar filas y columnas<br class="mt-1">Usar Autorrelleno y Relleno rápido<br class="mt-1">Cambiar el nombre de hojas de cálculos<br class="mt-1">Mover o copiar hojas de cálculo<br class="mt-1">Ocultar/mostrar hojas de cálculo<br class="mt-1">Agregar color a las pestañas de la hoja de cálculo</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Séptima sesión – 17/05/2022 (20:00 – 21:30)</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Séptima sesión.xlsx (42,468 KB)</span></p>
                        <p>Operadores matemáticos.<br class="mt-1">Hacer referencia a otras hojas de trabajo.<br class="mt-1">Usar la función Suma.<br></p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/mos/manual-acceso'">
                    <h1 class="text-3xl">Manual acceso Videoconferencias</h1>
                    <div class="px-12 py-5">
                        <h3 class="text-lg font-semibold mt-2">¿Cómo acceder a las sesiones online?</h3>
                        <p><span class="text-red-700 font-bold">Paso 1</span>. Accede a la opción <span class="text-sky-600 font-bold">Videoconferencias</span> desde el menú lateral derecho en la parte inferior.</p>
                        imagen
                        <p><span class="text-red-700 font-bold">Paso 2</span>. Haz clic en los <span class="text-sky-600 font-bold">tres puntitos</span> de la sesión que tienes programada para ese día (verás que pone en progreso).</p>
                        imagen
                        <p><span class="text-red-700 font-bold">Paso 3</span>. Selecciona la opción <span class="text-sky-600 font-bold">Unirse a la sesión</span></p>
                        imagen
                        <p><span class="text-red-700 font-bold">Paso 4</span>. Da permisos y configura el audio y el vídeo para la sesión (siempre deberás hacerlo).</p>
                        <p>Ten en cuenta que deberás<span class="font-bold"> deshabilitar el bloqueador de popups</span> para que no te desactive la configuración de audio y vídeo.</p>
                        <h3 class="text-lg font-semibold mt-6">¿Cómo participar en las sesiones online?</h3>
                        <p>Una vez accedes a la sesión te aparecerá una pantalla similar a ésta. Para poder <span class="text-sky-600 font-bold">enviar mensajes</span> accede a las herramientas de la sesión en la parte inferior derecha (color magenta)</p>
                        imagen
                        <p>Aparecerá el panel desplegado</p>
                        imagen
                        <p>Verás los distintos iconos para <span class="text-sky-600 font-bold">chatear, compartir contenido</span> (siempre que el moderador te de permisos) y configurar tu perfil.</p>
                        <p>En la parte inferior de la pantalla podrás <span class="text-sky-600 font-bold">activar/desactivar el micro y/o la cámara.</span></p>
                        imagen
                        <h3 class="text-lg font-semibold mt-6">¿Cómo acceder a las grabaciones de las sesiones online?</h3>
                        <p><span class="text-red-700">Paso 1</span>. Accede a la opción <span class="text-sky-600 font-bold">Videoconferencias</span> desde el menú lateral izquierdo en la parte inferior.</p>
                        imagen
                        <p><span class="text-red-700">Paso 2</span>. Haz clic en el <span class="text-sky-600 font-bold">menú superior izquierdo.</span></p>
                        imagen
                        <p><span class="text-red-700">Paso 3</span>. Selecciona la opción <span class="text-sky-600 font-bold">grabaciones</span></p>
                        <p><span class="text-red-700">Paso 4</span>. Aparecerá una lista con todas las grabaciones realizadas y podrás visualizar la del día que necesites.</p>
                        imagen
                        <h3 class="text-lg font-semibold mt-6">¿Cómo acceder a las grabaciones que no aparecen en la lista?</h3>
                        <p>Si quieres visualizar la <span class="font-bold">grabación de un día que no aparece en la lista</span> porque es de un período anterior realiza lo siguiente:</p>
                        <p><span class="text-red-700 font-bold">Paso 1</span>. Haz clic en <span class="text-sky-600 font-bold">Grabaciones recientes</span> a la derecha de la pantalla</p>
                        imagen
                        <p><span class="text-red-700 font-bold">Paso 2</span>. Selecciona la opción <span class="text-sky-600 font-bold">Grabaciones en el intervalo</span></p>
                        imagen
                        <p><span class="text-red-700 font-bold">Paso 3</span>. Especifica como fecha de inicio el primer día de las presentaciones que fue el 25/10/2021 hasta la fecha actual</p>
                        imagen
                       <p>¡Y te aparecerán todas las grabaciones!</p>
                    </div>

                </div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>2202_MOS_Excel_O3 (2202_MOS_Online_Excel_O3)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos'}" href="/mi-ciclo/mos">Presentación MOS Excel</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/calendario'}" href="/mi-ciclo/mos/calendario">Calendario</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Contenidos</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/manual'}"  href="/mi-ciclo/mos/manual">Manual pdf</Link>
                        <a target="_blank" class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="https://support.microsoft.com/es-es/office/aprendizajes-en-v%c3%addeo-de-excel-9bc05390-e94c-46af-a5b3-d7c22f6990bb?ui=es-es&rs=es-es&ad=es">Manual Interactivo</a>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/jasperactive'}" href="/mi-ciclo/mos/jasperactive">Jasperactive</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/practice-gmetrix'}" href="/mi-ciclo/mos/practice-gmetrix">Practice test Gmetrix</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Actividades</h3>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Comunicación</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/tablon'}" href="/mi-ciclo/mos/tablon">Tablon de anuncios</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/foro'}" href="/mi-ciclo/mos/foro">Foro Consultas</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/corre-profesor'}" href="/mi-ciclo/mos/correo-profesor">Enviar e-mail</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Sesiones Online</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/videoconferencias'}" href="/mi-ciclo/mos/videoconferencias">Videoconferencias</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/contenido'}" href="/mi-ciclo/mos/contenido">Contenido Videoconferencias</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" :class="{'bg-gray-300 rounded': $page.url == '/mi-ciclo/mos/manual-acceso'}" href="/mi-ciclo/mos/manual-acceso">Manual acceso Videoconferencias</Link>
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
