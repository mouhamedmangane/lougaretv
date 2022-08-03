<template>
  <div class=" bg-white">
    <info-menu  class=" bg-sky-500 text-white " taille="3" classActive="bg-white text-sky-500" activeItem="sport"/>
    <div>
        <h-ls-cadre :imageSize="imageSize" :textSize="textSize" :paragrapheSize="paragrapheSize" :infos="infos" :estColler="estColler" />
    </div>

</div>
</template>

<script>
import InfoMenu from '../Menu/InfoMenu.vue'
import HLsCadre from './HLsCadre.vue'
export default {
  components: { HLsCadre, InfoMenu },
    props:['infos','groupes','imageSize','textSize','paragrapheSize','estColler'],

}
</script>

<style>

</style>
