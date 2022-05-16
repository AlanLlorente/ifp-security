<template>
    <layout>
        <div class="flex p-4">
            <div class="w-3/4 p-4">
                <div class="bg-sky-600 py-1 px-2"><h3 class="text-white">Mis modulos</h3></div>
                <div>
                    <h3 class="text-xs mt-2 tex-gray-700">Cursos en os que usted es: Estudiante</h3>
                    <div class="divide-y divide-y-400 mt-2">
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo/secretaria">2202_00_Espacio de secretaría académica_TIC</Link>
                            <h3 class="text-xs text-gray-700">Profesor: No hay profesores</h3>
                        </div>
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo-/coordinacion">2202_ASIR_00_Espacio de coordinación y tutoría_1A</Link>
                            <h3 class="text-xs text-gray-700">Profesor: Javier Martin Martin;</h3>
                        </div>
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo/lenguaje-marcas">2202_ASIR_MP04_Lenguaje de marcas y sistemas de gestión de la información_C</Link>
                            <h3 class="text-xs text-gray-700">Profesor: Javier Martin Martin;</h3>
                        </div>
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo/ciberseguridad">2202_ASIR_MP16_Ciberseguridad y hacking ético_C</Link>
                            <h3 class="text-xs text-gray-700">Olimpia_Olguin Tinoco</h3>
                        </div>
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo/mos">2202_MOS_Online_Excel_O3</Link>
                            <h3 class="text-xs text-gray-700">Mariano Gallego Nieto;</h3>
                        </div>
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo/master-class">masterclass_ifp_2021_22_tic</Link>
                            <h3 class="text-xs text-gray-700">Profesor: Francisco Fernández Yuste;  Elena Merino Jular;  Coordinación Online Empresa;  Bruno Rico Montesinos;  Francisco Yuste Garcia;</h3>
                        </div>
                        <div>
                            <Link class="font-semibold py-2 text-sm" href="/mi-ciclo/recursos">Recursos adicionales online DAM-DAW</Link>
                            <h3 class="text-xs text-gray-700">Profesor: Profesor IFP Online;</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/4 p-4">
                <div class="bg-sky-600 py-1 px-2"><h3 class="text-white">Organizaciones</h3></div>
                <div>
                    <h3 class="text-xs text-gray-700 mt-2">Organizaciones en las que participa: Alumni</h3>
                    <div class="divide-y divide-gray-400 mt-2">
                        <div><h3 class="font-semibold py-2 text-sm">1809_Competencias Profesionales</h3></div>
                        <div><h3 class="font-semibold py-2 text-sm">1909 Competencias ingles</h3></div>
                        <div><h3 class="font-semibold py-2 text-sm">1909 Competencias profesionales</h3></div>
                        <div><h3 class="font-semibold py-2 text-sm">1809_Competencias ingles</h3></div>
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
    components: {Layout, Link}
}
</script>
