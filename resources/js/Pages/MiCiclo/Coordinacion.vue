<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6"> 220275103_00 2202_ASIR_00_Espacio de coordinación y tutoría_1A </h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div v-if="$page.url === '/mi-ciclo/coordinacion'">
                    <h1 class="text-3xl">Presentacion</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Saludo de tu tutor</h3>
                        <div class="mt-6">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                       <h3 class="txt-lg font-bold">Presentacion del cliclo</h3>
                        <div class="mt-6">
                            <p>Archivos adjuntos: <span class="text-gray-700">Presentacion ASYR.ppt (9.641MB)</span></p>
                        </div>
                    </div>
                </div> <!-- OKKKK -->
                <div v-if="$page.url === '/mi-ciclo/coordinacion/planificacion'">
                    <h1 class="text-3xl">Planificacion del cliclo</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Guia del ciclo</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo GuiaASYR primero.pdf (1,307 MB)</span> </p>
                        <p>Aquí te encontrarás con el primer archivo orientador en este ciclo que han emprendido. Podrás ver aquí la descripción general, competencias profesionales, una breve descripción de cada módulo y conocerás a tus profesores.<br> ¡Esperamos que sea de tu interés!</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Itenerario</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo ItinerarioASYR1.pdf (134,917 KB)</span></p>
                        <p>Aquí podrás encontrar el resumen de los módulos que cursarás a lo largo del ciclo. Descarga el archivo para tener los datos más puntuales de esta parte del curso. </p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Planificacion del ciclo</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo Cronograma 1º ASIR.pdf (83,806 KB)</span></p>
                        <p>Aquí podrás descargar las planificaciones generales del semestre.
                            Verás la duración de cada unidad formativa de los módulos que vas cursar junto con las fechas clave.
                            Podrás identificar las fechas límite de las entregas de las actividades de cada módulo para ir organizando el semestre a nivel personal.
                            <br>¡Esperamos que te ayude con tu planificación!
                        </p>
                    </div>
                </div> <!-- OKKKK -->
                <div v-if="$page.url === '/mi-ciclo/coordinacion/fechas-clave'">
                    <h1 class="text-3xl">Fechas clave alumnos</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Calendario fechas clave</h3>
                        <img class="mt-6" src="https://www.advertisementshout.com/wp-content/uploads/2021/07/rick_astley_youtube_1627540038486.jpg" alt="imagen increible">
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/tramites'">
                    <h1 class="text-3xl">Trámites</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Trámites</h3>
                        <p>Con secretaría podrás ir realizar todas las gestiones y trámites relacionados con el ciclo:</p>
                        <ul class="list-disc">
                            <li class="ml-8">Convalidaciones</li>
                            <li class="ml-8">Becas</li>
                            <li class="ml-8">Solicitud de títulos</li>
                            <li class="ml-8">Certíficados</li>
                            <li class="ml-8">Expedientes</li>
                        </ul>
                        <p class="underline">Encontrarás toda la información en el aula virtual de secretaría académica. También puedes contactar a través de <span class="text-sky-600">secretaria.online@ifp.es</span></p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/instrucciones'">
                    <h1 class="text-3xl">Instrucciones pruebas de evaluación final </h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <img src="https://www.advertisementshout.com/wp-content/uploads/2021/07/rick_astley_youtube_1627540038486.jpg" alt="imagen increible">
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/normativa'">
                    <h1 class="text-3xl">Normativa</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Normativa</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo 21_22_Normativa de evaluación LOE iFP online.pdf (237,686 KB)</span></p>
                        <p>Aquí puedes descargarte la normativa vigente para la evaluación en general. Podrás revisar en este documento:</p>
                        <ul class="list-disc">
                            <li class="ml-8">Cómo supervisar las unidades formativas y módulos</li>
                            <li class="ml-8">Nuestro modelo de evaluación</li>
                            <li class="ml-8">Seguimiento de la evaluaci´pon continua</li>
                            <li class="ml-8">Evaluación final</li>
                            <li class="ml-8">Convocatorias a examen</li>
                            <li class="ml-8">Calificación</li>
                        </ul>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Normativa iFP - Pruebas de evaluación final</h3>
                        <img class="mt-2" src="https://www.advertisementshout.com/wp-content/uploads/2021/07/rick_astley_youtube_1627540038486.jpg" alt="imagen increible">
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/calendario'">
                    <h1 class="text-3xl">Calendario pruebas finales</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Calendario</h3>
                        <p>Archivos adjuntos: <span class="text-gray-700">Archivo 1ª Convocatoria .pdf (110,396 KB)</span></p>
                        <p>En el documento adjunto tienes las fechas de las pruebas finales presenciales para que puedas organizarte con la suficiente antelación y agendarte los días.</p>
                        <div class="mt-2 bg-blue-300 py-4 px-6">
                            <h3 class="underline font-bold"> Importante: </h3>
                            <p>Es imprescindible, para poder realizar las pruebas finales presenciales, inscribirte dentro del espacio "Inscripción pruebas finales"</p>
                        </div>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/inscripcion'">
                    <h1 class="text-3xl"> Inscripciones pruebas finales </h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Inscripciones a las pruebas finales de evaluación</h3>
                        <p>El período para inscribirte a las pruebas finales de evaluación comprenderá entre el 5 y el 21 de abril. </p>
                        <p class="mt-1"> En este mismo espacio encontrarás el enlace para poder inscribirte.<br>
                            <span class="underline">FORMULARIO INSCRIPCIÓN PRIMERA CONVOCATORIA PRUEBAS FINALES</span> <br>
                            <span class="font-semibold">Recuerda que sin previa inscripción no podrás presentarte a las pruebas finales. No podemos hacer ninguna excepción.</span><span class="text-red-700"> Si no realizas el formulario en el plazo establecido deberás presentarte directamente a segunda convocatoria.</span></p>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/sedes'">
                    <h1 class="text-3xl">Sedes de pruebas finales</h1>
                    <div class="mt-6 hover:bg-grat-300 px-12 py-5">
                        <h3 class="text-lg font-bold text-sky-600">Direcciones de las sedes de las pruebas finales de evaluación</h3>
                        <p>Las pruebas finales de evaluación se realizarán en las siguientes sedes:</p>
                        <p class="underline font-bold">Primera convocatoria – 28 y 29 de mayo</p>
                        <ul class="list-disc">
                            <li class="ml-8"><span class="text-sky-600 font-bold">Barcelona</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">iFP Hospitalet - Planeta formación y universidades</span> - Avinguda de Josep Tarradellas i Joan, 177, L'Hospitalet de Llobregat, Barcelona </li>
                                    <li class="ml-8"><span class="font-bold">iFP Sants</span> - Carrer de Llança, 51, Barcelona</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Gijón</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">Grupo Ilabora</span> - C/Azcárraga número 16 Bajo en Gijón (Asturias)</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Las palmas</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">Instituto Focan</span> - C/ Bravo Murillo, 38 Las Palmas de Gran Canaria </li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Logroño</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">ADR Formación</span> - Vara de Rey 41 bis, 1º of. 6 26002 Logroño (La Rioja) </li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Madrid</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">iFP</span> – Alcalá – C/ de Alcalá, 472, Madrid </li>
                                    <li class="ml-8"><span class="font-bold">iFP</span> – Julián Camarillo – C/ de Julián Camarillo, 6A, Madrid</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Murcia</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">CEM</span> - C/ la flota, 10, C.P. 30008, MURCIA</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Santiago de compostela</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">TESDAI</span> - Avda. Rosalía de Castro, 42, bajo, 15701, Santiago de Compostela</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Sevilla</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">UNED</span> - Calle Jericó Nº10, Sevilla </li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Valencia</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">LINK Formación</span> – Calle Maestro Sosa 32-34 </li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Málaga</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">KEOPS Formación</span> - C/ Alcalde José María Corona, 2-4, 29004 Málaga</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Alicante</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">EDI</span> - C/ Rafael Asín, 25 entlo., 03010 Alicante</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Bilbao</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">CIPSA</span> - C/ Rafaela Ibarra, 10  48014 Bilbao</li>
                                </ul>
                            </li>
                            <li class="ml-8"><span class="text-sky-600 font-bold">Zaragoza</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">SYSTEM FORMACIÓN</span> - C/ Escoriaza y Fabro, 105,  50010 Zaragoza</li>
                                </ul>
                            </li>
                        </ul>
                        <p class="underline font-bold">Segunda convocatoria - 18 y 19 de junio</p>
                        <ul class="list-disc">
                            <li class="ml-8 "><span class="text-sky-600 font-bold">Barcelona</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">iFP Hospitalet - Planeta formación y universidades</span> - Avinguda de Josep Tarradellas i Joan, 177, L'Hospitalet de Llobregat, Barcelona </li>
                                    <li class="ml-8"><span class="font-bold">iFP Sants</span> - Carrer de Llança, 51, Barcelona</li>
                                </ul>
                            </li>
                            <li class="ml-8 "><span class="text-sky-600 font-bold">Madrid</span>
                                <ul class="list-disc">
                                    <li class="ml-8"><span class="font-bold">iFP – Alcalá</span> – C/ de Alcalá, 472, Madrid</li>
                                    <li class="ml-8"><span class="font-bold">iFP – Julián Camarillo</span> – C/ de Julián Camarillo, 6A, Madrid </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/mensaje-tutor'">
                    <h1 class="text-3xl">Enviar mensaje de correo electrónico</h1>
                    <div class="mt-6">Lo sentimos, por el momento el servicio de mensajeria no se encuentra disponible</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/videoconferencias'">
                    <h1 class="text-3xl">Blackboard Collaborate Ultra</h1>
                    <div class="mt-6">Lo sentimos aun no hay contenido que mostrar.</div>
                </div>
                <div v-if="$page.url === '/mi-ciclo/coordinacion/anuncios'">
                    <h1 class="text-3xl">Anuncios</h1>
                    <div class="mt-6">Lo sentimos, lo que estas buscando aun no esta disponible</div>
                </div>
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>220275103_00 (2202_ASIR_00_Espacio de coordinación y tutoría_1A)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Inicio</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion">Presentacion</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/planificacion">Planficiacion del ciclo</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/fechas-clave">Fechas clave alumnos</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Secretaria academica</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/tramites">Tramites</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Evaluacion</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/instrucciones">Instrucciones pruebas de evaluacion final</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/normativa">Normativa</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/calendario">Calendario pruebas finales</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/inscripcion">Incripcion pruebas finales</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/sedes">Sedes de pruebas finales</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Comunicacion</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/mensaje-tutor">Mensaje al tutor</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/videoconferencias">Videoconferencias</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/coordinacion/anuncios">Anuncios y novedades</Link>
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
