<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6">220275000_01_TIC 2202_00_Espacio de secretaría académica_TIC</h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                <div v-if="$page.url === '/mi-ciclo/secretaria'">
                    <h1 class="text-3xl">Presentacion</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <div><h3 class="text-lg font-bold">¡Bienvenid@ al espacio de Secretaría Académica!</h3></div>
                        <div class="mt-6">
                            <p>Te damos la bienvenida al nuevo Espacio de Secretaría Académica Online. Aquí encontrarás toda la información sobre los trámites académicos que puedes realizar durante el curso. </p>
                            <p>Desde el apartado del menú izquierdo “Anuncios y Novedades” te iremos informando sobre los periodos de inicio/finalización de los trámites que puedes realizar, como por ejemplo las convalidaciones de los módulos. </p>
                            <p>También encontrarás disponible en el apartado “Trámites Académicos” una explicación más extensa sobre qué consiste cada trámite y cómo debes realizarlo. </p>
                            <h3 class="mt-3 font-semibold">¿Qué trámites puedes realizar con secretaría académica?</h3>
                            <ul class="list-disc">
                                <li class="ml-8">Becas MEC</li>
                                <li class="ml-8">Convalidaciones</li>
                                <li class="ml-8">Certificados de matricula y academicos</li>
                                <li class="ml-8">Documentacion matricula</li>
                                <li class="ml-8">Gestion documentacion matricula</li>
                                <li class="ml-8">Tramitacion de titulos</li>
                            </ul>
                            <p class="mt-3 font-semibold">Contactar:</p>
                            <p>e-mail: secretaria.online.tic@ifp.es</p>
                            <p>teléfono de atención al alumno: 93.291.27.00 en horario de 9:00-14:00 horas y 15:00-18:00 horas de lunes a jueves y viernes de 9:00-14:00 horas.</p>
                        </div>
                    </div>
                </div> <!-- okkk -->
                <div v-if="$page.url === '/mi-ciclo/secretaria/anuncios'">
                    <h1 class="text-3xl">Anuncios</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="font-bold"> Último día de solicitud convalidaciones: 1 de marzo</h3>
                        <p class="text-sm">Publicado el: martes 1 de marzo de 2022 09H57' CET</p>
                        <p class="mt-2">
                            Buenos días,
                            Te recordamos que hoy, martes 1 de marzo, finaliza el plazo de solicitud de convalidaciones de módulos teóricos.
                            Encontrarás toda la información sobre el trámite en el espacio de secretaría académica del campus virtual (2202_00_Espacio de secretaría académica_TIC), en el apartado "Convalidaciones” “solicitud de convalidaciones.
                            Recuerda que para que tu solicitud esté correctamente tramitada debes seguir ambos pasos que se indican en el apartado “solicitud de convalidaciones”.
                            No se resolverá ninguna convalidación enviada fuera del plazo establecido y que no siga los pasos indicados previamente.
                            La resolución la recibirás por correo electrónico del 14 al 18 de marzo.<br>
                            Un saludo.<br>
                            Alicia Martínez<br>
                        </p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="font-bold"> Fin solicitud convalidaciones: 1 de marzo</h3>
                        <p class="text-sm">Publicado el: viernes 25 de febrero de 2022 12H50' CET</p>
                        <p class="mt-2">
                            Buenos días,
                            Te recordamos que el próximo martes 1 de marzo finaliza el plazo de solicitud de convalidaciones de módulos teóricos.
                            Encontrarás toda la información sobre el trámite en el espacio de secretaría académica del campus virtual (2202_00_Espacio de secretaría académica_TIC), en el apartado "Convalidaciones” “solicitud de convalidaciones.
                            Recuerda que para que tu solicitud esté correctamente tramitada debes seguir los pasos que se indican en el apartado “solicitud de convalidaciones”.
                            No se resolverá ninguna convalidación enviada fuera del plazo establecido y que no siga los pasos indicados previamente.
                            La resolución la recibirás por correo electrónico del 14 al 18 de marzo.<br>
                            Un saludo.<br>
                            Secretaría académica ciclos área TIC<br>
                            Enlace del curso/Solicitud convalidaciones</p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="font-bold"> Solicitud convalidaciones: del 8 de febrero al 1 de marzo de 2022</h3>
                        <p class="text-sm">Publicado el: martes 8 de febrero de 2022 12H49' CET</p>
                        <p class="mt-2">
                            Publicado el: martes 8 de febrero de 2022 12H49' CET
                            Buenos días, bienvenido/a al espacio de secretaría académica!
                            Ya está disponible el formulario de solicitud de convalidaciones en el apartado de "convalidaciones- Solicitud de Convalidaciones” del aula virtual "Espacio de secretaría académica TIC". Antes de enviar tu solicitud revisa la información disponible en este apartado.
                            El período para presentar la solicitud finaliza el día 1 de marzo y las resoluciones se enviarán a través de correo electrónico del 14 al 18 de marzo.
                            No olvides adjuntar el expediente académico a través de campus y revisar la normativa que encontrarás en el mismo apartado. Allí se especifica toda la información sobre el trámite.
                            No se realizará ninguna convalidación fuera del plazo establecido.<br>
                            Un saludo.<br>
                            Maria Juncosa<br>
                            Secretaría académica ciclos área TIC<br>
                            Enlace del curso/Solicitud convalidaciones<br>
                        </p>
                    </div>
                </div> <!-- okk -->
                <div v-if="$page.url === '/mi-ciclo/secretaria/anuncios'">
                    Hola esto es un test para ver si funciona
                </div>
                <div v-if="$page.url === '/mi-ciclo/secretaria/solicitud-convalidaciones'">
                    <h1 class="text-3xl">Solicitud convalidaciones</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Periodo de solicitud: del 8 de febrero al 1 de marzo de 2022</h3>
                        <p>
                            Lee atentamente y sigue los siguientes pasos para formalizar tu solicitud.
                        </p>
                    </div>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">Importante:</h3>
                        <p>
                            Las resoluciones de convalidaciones directas se enviarán del día 14 al 18 de marzo.
                            Las resoluciones de convalidaciones singulares se enviarán a medida que el Departament d'Educació envíe las resoluciones a iFP.
                            No se tramitará ninguna convalidación fuera del plazo establecido y sin la petición expresa del alumno.
                            Es obligatorio que curses el módulo que solicitadas convalidar hasta el momento que en recibas la resolución de la convalidación por parte de secretaría académica.
                            En el apartado del menú de la izquierda, Estado solicitud convalidaciones podrás ver: <br>
                            <strong>RECIBIDO:</strong> Hemos recibido correctamente tu solcitud y expendiente <br>
                            <strong>EN TRÁMITE:</strong> Estamos trabajando en la resolución de tu solicitud <br>
                            <strong>DOC ERRÓNEA:</strong> El expediente adjuntado no cumple con los requisitos de la solicitud <br>
                            <strong>RESUELTO:</strong> La solicitud está resuelta y la recibirás por correo electrónico antes el 18 de marzo <br>
                        </p>
                    </div>
                </div> <!-- ok -->
                <div v-if="$page.url === '/mi-ciclo/secretaria/estado-convalidaciones'">
                    <h1 class="text-3xl">Mis calificaciones</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <table class="table-auto border-collapse border border-stale-700">
                            <thead>
                                <tr>
                                    <th>Elemento</th>
                                    <th>Actividad</th>
                                    <th>Calificacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Adjunta tu expediente</td>
                                    <td>15-mar-2022</td>
                                    <td>RESUELTO</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div > <!-- okkk -->
                <div v-if="$page.url === '/mi-ciclo/secretaria/certificados'">
                    <h1 class="text-3xl">Certificados academicos</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="font-semibold text-lg">
                            ¿Cómo puedo solicitar un certificado?
                        </h3>
                        <p class="mt-4"> Para poder solicitar un certificado, ya sea de notas o de matrícula, deberás contactar con Secretaría Académica Online, a través de secretaria.online.tic@ifp.es. Posteriormente, recibirás por correo electrónico el certificado solicitado.
                            Es importante que realices tu petición con un cierto margen de tiempo, ya que no se trata de un trámite inmediato.
                            No se enviará ningún certificado si no hemos recibido previamente toda tu documentación de matrícula.
                        </p>
                    </div>
                </div> <!-- ok -->
                <div v-if="$page.url === '/mi-ciclo/secretaria/documentacion'">
                    <h1 class="text-3xl">Documentacion de matricula</h1>
                    <div class="mt-6 hover:bg-gray-300 px-12 py-5">
                        <h3 class="text-lg font-bold">DOCUMENTACION NECESARIA PARA FORMALIZAR LA MATRICULA</h3>
                        <h3 class="mt-2 text-sky-600 font-semibold text-lg">Que documentacion debo aportar?</h3>
                        <p>Para formalizar oficialmente tu expediente en iFP online, si no lo has hecho ya, deberás aportar la siguiente documentación:</p>
                        <ul class="list-disc">
                            <li class="ml-8">Fotocopia del DNI/NIE/Pasaporte en vigor.</li>
                            <li class="ml-8">Fotocopia tarjeta sanitaria Seguridad Social. </li>
                            <li class="ml-8">Fotocopia compulsada del título oficial que da acceso al ciclo formativo en el que te has matriculado.  </li>
                            <li class="ml-8">
                                Fotocopia compulsada del expediente académico (notas) de los últimos estudios cursados. Este documento solo lo debes entregar en el caso que vayas a solicitar convalidaciones de módulos teóricos o la beca MEC.
                            </li>
                        </ul>
                        <h3 class="mt-4 text-sky-600 font-semibold text-lg">Que es una compulsa?</h3>
                        <p>La compulsa de un documento es un trámite administrativo que consiste en verificar que el documento original y su copia son iguales y no han sido modificados. Para realizar la compulsa siempre deberás presentar el documento orginal (título/ resguardo de título u homologación). </p>
                        <h3 class="mt-4 text-sky-600 font-semibold text-lg">¿Cómo y dónde compulsar mi documentación?</h3>
                        <p>Puedes compulsar tu título de acceso en una de las sedes de iFP Madrid o Barcelona. Solamente deberás presentar el documento original para que podamos realizar la fotocopia y compulsa gratuitamente.</p>
                        <p>También tienes la opción de compulsar tus documentos en el centro dónde cursaste los estudios, en un organismo público o una notaría y enviarla por correo ordinario a la siguiente dirección portal:</p>
                        <p>iFP (Innovación en Formación Profesional)
                            ATT: Secretaría Académica online
                            Avd Josep Tarradellas i Joan 171-177
                            08901 l'Hospitalet de Llobregat (Barcelona)</p>
                    </div>
                </div> <!-- okkk -->

            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>220275000_01_TIC (2202_00_Espacio de secretaría académica_TIC)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Secretaria Academica</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria">Presentacion</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria/anuncios">Anuncios y novedades</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Convalidaciones</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria/normativa">Normativa Convalidaciones</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria/solicitud-convalidaciones">Solicitud convalidaciones</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria/estado-convalidaciones">Estado solicitud convalidaciones</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Otros tramites academicos</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria/certificados">Certificados academicos</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm" href="/mi-ciclo/secretaria/documentacion">Documentacion de matricula</Link>
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
