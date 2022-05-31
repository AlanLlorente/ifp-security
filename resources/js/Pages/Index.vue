<template>
  <layout>
      <h1 class="mt-4 ml-4 text-3xl"><span class="text-lime-600">Hola </span><span class="text-sky-600">Alan!</span></h1>
      <div class="flex grid grid-cols-2 gap-4 justify-items-center place-content-center h-full w-full space-y-32">
          <div class="w-80">
              <img src="https://www.advertisementshout.com/wp-content/uploads/2021/07/rick_astley_youtube_1627540038486.jpg" alt="imagen increible">
          </div>
          <div class="w-80">
              <div class="bg-sky-600"><h3 class="text-white px-4 py-2">Novedades</h3></div>
              <div class="flex justify-between mt-2">
                  <div><img class="rounded-full h-6 w-6" src="https://learn.content.blackboardcdn.com/3900.39.0-rel.24+5903d92/images/ci/ng/default_profile_avatar.svg"></div>
                  <div>Editar configuracion</div>
                  <div>Acciones</div>
              </div>
              <div class="mt-2">
                  <div>Anuncios</div>
                  <div>Otro contenido nuevo</div>
                  <div>Tablero de discursion</div>
              </div>
          </div>
          <div>
              <iframe width="160" height="315" src="https://www.youtube.com/embed/PQgVanDy-Ao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="w-80">
              <div class="bg-sky-600"><h3 class="text-white px-4 py-2">Eventos de la semana</h3></div>
              <div class="mt-8">
                <table class="table-auto">
                   <tbody>
                    <tr>
                        <td>12 de Junio</td>
                        <td>CIBER_C_ENTREGA_UF2</td>
                    </tr>
                    <tr>
                        <td>16 Junio</td>
                        <td>LIMITE ENTREGA LENGUAJE DE MARCAS</td>
                    </tr>
                    <tr>
                        <td>17 Junio</td>
                        <td>CONFERENCIA CIBERSEGURIDAD</td>
                   </tr>
                    <tr>
                        <td>30 Junio</td>
                        <td>DESPLIEGUE SERVIDOR</td>
                    </tr>
                   </tbody>
                </table>
              </div>
          </div>
      </div>
  </layout>
</template>
<script>
import Layout from "./Resources/Layout";

export default{
    components: {Layout}
}
</script>
