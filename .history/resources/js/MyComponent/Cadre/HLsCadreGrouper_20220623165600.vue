<template>
  <div class=" bg-white">
    <info-menu  class=" bg-sky-500 text-white " taille="4" classActive="bg-white text-sky-500 rounded-full" activeItem="Tout"/>
    <div>
        <h-ls-cadre :imageSize="imageSize" :textSize="textSize" :paragrapheSize="paragrapheSize" :infos="infos" :estColler="estColler" :inverser="inverser"/>
    </div>

</div>
</template>

<script>
import InfoMenu from '../Menu/InfoMenu.vue'
import HLsCadre from './HLsCadre.vue'
export default {
  components: { HLsCadre, InfoMenu },
    props:['infos','groupes','imageSize','textSize','paragrapheSize','estColler','inverser'],

}
</script>

<style>

</style>
