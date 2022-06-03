<template>
    <layout>
        <div class="mt-6 ml-4 px-4 text-2xl">
            <span class="mr-1 text-lime-600">Hola</span
            ><span class="text-sky-600">Alan!</span>
        </div>
        <div class="p-8">
            <div class="flex justify-between">
                <div class="mt-6">
                    <img
                        width="600"
                        height="320"
                        src="https://www.advertisementshout.com/wp-content/uploads/2021/07/rick_astley_youtube_1627540038486.jpg"
                        alt="imagen increible"
                    />
                    <img
                        width="600"
                        height="320"
                        src="https://i.ibb.co/SfyXBnp/enlaces.png"
                        alt="imagen no tan increible"
                    />
                </div>

                <div class="py-12 mr-60 ml-6">
                    <div class="bg-sky-600 w-96 ml-4">
                        <span
                            ><h3 class="text-white py-1 px-4">
                                Novedades
                            </h3></span
                        >
                    </div>
                    <div class="ml-6">
                        <div class="py-2">
                            <img
                                width="30"
                                height="30"
                                src="https://learn.content.blackboardcdn.com/3900.39.0-rel.24+5903d92/images/ci/ng/default_profile_avatar.svg"
                            />
                        </div>
                        <div class="py-2">
                            <span class="font-bold mr-1">Anuncios</span
                            ><span class="text-gray-500">(X)</span>
                        </div>
                        <div class="py-2">
                            <span class="font-bold mr-1"
                                >Libro de calificaciones</span
                            ><span class="text-gray-500">(X)</span>
                        </div>
                        <div class="py-2">
                            <span class="font-bold mr-1"
                                >Otro contenido nuevo</span
                            ><span class="text-gray-500">(X)</span>
                        </div>
                        <div class="py-2">
                            <span class="font-bold mr-1"
                                >Tablero de discusión</span
                            ><span class="text-gray-500">(X)</span>
                        </div>
                    </div>
                    <div class="text-gray-500 ml-4 py-6 px-26 text-xs pl-20">
                        Última actualización: X de junio de 2022 XX:XX
                    </div>
                    <div class="bg-sky-600 object-cover w-96 ml-4">
                        <span
                            ><h3 class="text-white py-1 px-4">
                                Eventos de la semana
                            </h3></span
                        >
                    </div>
                    <div class="mr-8">
                        <img
                            width="550"
                            height="320"
                            src="https://i.ibb.co/JqNL0gG/inferior.png"
                            alt="imagen increible"
                        />
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="ml-10 mb-8">
                    <iframe
                        width="450"
                        height="280"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                </div>
                <div></div>
            </div>
        </div>
    </layout>
</template>
<script>
import Layout from "./Resources/Layout";

export default {
    components: { Layout },
};
</script>
