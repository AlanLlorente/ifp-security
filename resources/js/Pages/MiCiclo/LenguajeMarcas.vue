<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6"> 220275103_MP04_1A_C 2202_ASIR_MP04_Lenguaje de marcas y sistemas de gestión de la información_C </h3></div>
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
                        <iframe class="mt-4" width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/uf1'">
                    <h1 class="text-3xl">Unidad Formativa 1</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-sky-600 text-lg font-bold">Contenidos</h3>
                        <p class="mt-1">En esta Unidad Formativa aprenderás:</p>
                        <ul class="list-disc">
                            <li class="ml-8">Reconoce las características de lenguajes de marcas analizando e interpretando fragmentos de código</li>
                            <li class="ml-8">Utiliza lenguajes de marcas para la transmisión de información a través de la web analizando la estructura de los documentos e identificando los elementos</li>
                            <li class="ml-8">Establece mecanismos de validación para documentos XML utilizando métodos para definir la sintaxis y la estructura</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lime-600 text-lg font-bold">Enlaces de interés y descargas:</h3>
                        <p class="mt-1">A través de estos sitios web podrás descargar recursos que te servirán para la puesta en marcha de nuestras actividades:</p>
                        <p class="mt-1">Java:<span class="underline text-sky-600"> https://www.java.com/es/download/</span> (es necesario descargarlo e instalarlo para poder usar la herramienta BaseX)</p>
                        <p class="mt-1">XML Copy Editor: <span class="underline text-sky-600"> https://xml-copy-editor.sourceforge.io/ (Editor XML)</span></p>
                        <p class="mt-1">JDK:<span class="underline text-sky-600"> https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html </span> (Kit de desarrollo Java para usar la herramienta BaseX)</p>
                        <p class="mt-1">Base X:<span class="underline text-sky-600"> https://basex.org/ (Gestor de Bases de datos XML)</span></p>
                        <p class="mt-1">Dolibarr: <span class="underline text-sky-600">https://www.dolibarr.es/ (ERP)</span></p>
                        <p class="mt-1">WebERP: <span class="underline text-sky-600">https://www.weberp.org/ (ERP)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">Videotutoriales</h3>
                        <p class="mt-1">En esta sección tendrás disponibles todos los videotutoriales de la Unidad Formativa. Podrás visualizarlos online o descargártelos en tu dispositivo móvil, tablet u ordenador.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">1. Reconocimiento de las características del lenguaje de marcas</h3>
                        <ul class="list-decimal">
                            <li class="ml-8">Clasificación.</li>
                            <li class="ml-8">XML: estructura y sintaxis.</li>
                            <li class="ml-8">Etiquetas.</li>
                            <li class="ml-8">Herramientas de edición.</li>
                            <li class="ml-8">Elaboración de documentos XML bien formados.</li>
                            <li class="ml-8">Utilización de espacios de nombres en XML.</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">2. Utilización de lenguajes de marcas en entornos web</h3>
                        <ul class="list-decimal">
                            <li class="ml-8">Identificación de etiquetas y atributos de HTML.</li>
                            <li class="ml-8">XHTML: diferencias sintácticas y estructurales con HTML.</li>
                            <li class="ml-8">Versiones de HTML y de XHTML.</li>
                            <li class="ml-8">Herramientas de diseño web.</li>
                            <li class="ml-8">Hojas de estilo.</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">3. Definición de esquemas y vocabularios en XML</h3>
                        <ul class="list-decimal">
                            <li class="ml-8">Utilización de métodos de definición de documentos XML.</li>
                            <li class="ml-8">Creación de descripciones.</li>
                            <li class="ml-8">Asociación con documentos XML.</li>
                            <li class="ml-8">Validación.</li>
                            <li class="ml-8">Herramientas de creación y validación.</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Videoconferencias</h3>
                        <p class="mt-1">En esta sección podrás descargarte todos los recursos de cada una de las videoconfererencias de la Unidad Formativa. </p>
                        <p class="mt-1">Al finalizar la videoconferencia se subirá el proyecto explicado en esta sección. </p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline text-sky-600">Videoconferencia 1</h3>
                        <p class="mt-1">Accede a la sección y descargarte el proyecto de la videoconferencia.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline text-sky-600">Videoconferencia 2</h3>
                        <p class="mt-1">Accede a la sección y descargarte el proyecto de la videoconferencia.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline text-red-700">Reto 1 UF 1</h3>
                        <p class="mt-1">Aquí encontrarás el enunciado del Reto 1. El reto supone un <span class="font-semibold">10% de la nota de la Unidad Formativa de la evaluación contínua. </span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline text-red-700">Reto 2 UF1</h3>
                        <p class="mt-1">Aquí encontrarás el enunciado del Reto 1. El reto supone un <span class="font-semibold">10% de la nota de la Unidad Formativa de la evaluación contínua. </span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold underline text-red-700">Ejercicio evaluable Teorico-práctico UF1</h3>
                        <p class="mt-1"> En esta sección podrás descargarte el enunciado de ejercicio evaluable en formato PDF y DOC. También se incluye una plantilla del formato de los ficheros del ejercicio y un ejemplo de un fichero zip con la nomenglatura del fichero a entregar. Este ejercicio supone un <span class="font-semibold">80% de la nota de la evaluación continua de la UF1.</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-red-700">Solución retos y ejercicio evaluable UF 1</h3>
                        <p>En esta sección podréis descargar los videos explicativos de los retos y ejercicio evaluable de la UF1</p>
                        <p>Espero que os sirvan de ayuda.</p>
                        <p>Un saludo.</p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/uf2'">
                    <h1 class="text-3xl">Unidad Formativa 2</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-sky-600 text-lg font-bold">Contenidos</h3>
                        <p class="mt-1">En esta Unida Formativa aprenderás</p>
                        <ul class="list-disc">
                            <li class="ml-8">A generar canales de contenidos analizando y utilizando tecnologías de sindicación</li>
                            <li class="ml-8">A realizar conversiones sobre documentos XML utilizando técnicas y herramientas de procesamiento</li>
                            <li class="ml-8">A gestionar información en formato XML analizando y utilizando tecnologías de almacenamiento y lenguajes de consulta</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lime-600 text-lg font-bold">Enlaces de interés y descargas:</h3>
                        <p class="mt-1">A través de estos sitios web podrás descargar recursos que te servirán para la puesta en marcha de nuestras actividades:</p>
                        <p class="mt-1">Java:<span class="underline text-sky-600"> https://www.java.com/es/download/</span> (es necesario descargarlo e instalarlo para poder usar la herramienta BaseX)</p>
                        <p class="mt-1">XML Copy Editor: <span class="underline text-sky-600"> https://xml-copy-editor.sourceforge.io/ (Editor XML)</span></p>
                        <p class="mt-1">JDK:<span class="underline text-sky-600"> https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html </span> (Kit de desarrollo Java para usar la herramienta BaseX)</p>
                        <p class="mt-1">Base X:<span class="underline text-sky-600"> https://basex.org/ (Gestor de Bases de datos XML)</span></p>
                        <p class="mt-1">Dolibarr: <span class="underline text-sky-600">https://www.dolibarr.es/ (ERP)</span></p>
                        <p class="mt-1">WebERP: <span class="underline text-sky-600">https://www.weberp.org/ (ERP)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">Videotutoriales</h3>
                        <p class="mt-1">En esta sección tendrás disponibles todos los videotutoriales de la Unidad Formativa. Podrás visualizarlos online o descargártelos en tu dispositivo móvil, tablet u ordenador.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5"></div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/uf3'"></div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/material'">
                    <h1 class="text-3xl">Material de referencia</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-red-700">Presentación del módulo</h3>
                        <iframe class="mt-1" width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p class="mt-2">Descargar archivo de video: <span class="underline">PresentacionDelModulo_.mp4</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">Presentación módulo Lenguaje de Marcas</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Presentación Modulo_Lenguaje_de_marcas_04.pdf (755,532 KB)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">Lenguaje de Marcas (Documentacion Videotutoriales).pdf</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Lenguaje de Marcas (Documentacion Videotutoriales).pdf (2,556 MB)</span> </p>
                        <p>Documentación en PDF que aparece en los videotutoriales.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">Apuntes Generales XSD</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo EjemplosXSD.zip (1,626 KB)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-lime-600">Ejercicios online de repaso (con solución)</h3>
                        <p>Ejercicios online de repaso (con solución) Archivos adjuntos: <span class="text-gray-700">Archivo Ejercicios_con_Solucion_Lenguaje_de_Marcas.docx (6,772 KB)</span> </p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-red-700">ExamenesPrimeraConvocatoria_Lenguaje_De_Marcas</h3>
                        <p>Documento de referencia para el temario y tipos de preguntas de los examenes de Lenguaje de Marcas de la primera convocatoria</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-red-700">Examen_de_prueba_Lenguaje_de_Marcas_Con_Soluciones</h3>
                        <p>Archivos adjuntos: <span class="tex-gray-700">Archivo Examenes_De_Prueba_Lenguaje_De_Marcas.zip (612,673 KB)</span></p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-red-700">Examen de prueba 2 UF1 (con soluciones y sin soluciones)</h3>
                        <p>En esta sección encontraréis un segundo examen de prueba para practicar. Os recomiendo primero realizar el examen con el fichero sin soluciones y tras realizarlo revisar las soluciones. Si tenéis dudas envíarme un correo electrónico para ayudaros.</p>
                        <p class="mt-1">Un saludo y espero que os sirva de ayuda.</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-red-700">Examen de prueba 2 UF2 (con soluciones y sin soluciones)</h3>
                        <p>En esta sección encontraréis un segundo examen de prueba para practicar. Os recomiendo primero realizar el examen con el fichero sin soluciones y tras realizarlo revisar las soluciones. Si tenéis dudas envíarme un correo electrónico para ayudaros.</p>
                        <p class="mt-1">Un saludo y espero que os sirva de ayuda.</p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/lenguaje-marcas/tablon'">
                    <h1 class="text-3xl">Anuncios</h1>
                    <div class="mt-6">Lo sentimos, lo que estas buscando aun no esta disponible</div>
                </div>
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
