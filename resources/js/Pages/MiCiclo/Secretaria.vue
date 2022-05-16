<template>
    <layout>
        <div class="border-b-2 border-lime-400 py-2"><h3 class="ml-6">220275000_01_TIC 2202_00_Espacio de secretaría académica_TIC</h3></div>
        <div class="flex">
            <div class="w-3/4 p-4">
                asdfffffffff
            </div>
            <div class="w-1/4 h-screen border-l-2 border-gray-400 border-dotted p-4">
                <div><h3>220275000_01_TIC (2202_00_Espacio de secretaría académica_TIC)</h3></div>
                <div class="divide-y divide-gray-400">
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Secretaria Academica</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Presentacion</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Anuncios y novedades</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Becas curso 22/23</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Solicitud becas curso 22/23</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Convalidaciones</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Normativa Convalidaciones</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Solicitud convalidaciones</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Estado solicitud convalidaciones</Link>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-sky-600 text-lg">Otros tramites academicos</h3>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Certificados academicos</Link>
                        <Link class="block mt-2 hover:bg-gray-300 hover:rounded px-2 text-sm">Documentacion de matricula</Link>
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
