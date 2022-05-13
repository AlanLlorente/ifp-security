<template>
  <layout>
      <div class="flex grid grid-cols-2 gap-4 justify-items-center place-content-center h-full w-full">
          <div class="w-80">
              <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                  <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                      <button
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide-to="0"
                          class="active"
                          aria-current="true"
                          aria-label="Slide 1"
                      ></button>
                      <button
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide-to="1"
                          aria-label="Slide 2"
                      ></button>
                      <button
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide-to="2"
                          aria-label="Slide 3"
                      ></button>
                  </div>
                  <div class="carousel-inner relative w-full overflow-hidden">
                      <div class="carousel-item active relative float-left w-full">
                          <img
                              src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                              class="block w-full"
                              alt="..."
                          />
                          <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                          </div>
                      </div>
                      <div class="carousel-item relative float-left w-full">
                          <img
                              src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                              class="block w-full"
                              alt="..."
                          />
                          <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                          </div>
                      </div>
                      <div class="carousel-item relative float-left w-full">
                          <img
                              src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                              class="block w-full"
                              alt="..."
                          />
                          <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                          </div>
                      </div>
                  </div>
                  <button
                      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="prev"
                  >
                      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="next"
                  >
                      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>
              <div>
                  Enlaces rapidos
              </div>
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
