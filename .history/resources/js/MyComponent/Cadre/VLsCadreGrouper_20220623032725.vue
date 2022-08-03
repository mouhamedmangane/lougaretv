<template>
  <div class=" bg-white">
    <info-menu  taille="3"/>
    <div>
        <h-ls-cadre :imageSize="imageSize" :textSize="textSize" :paragrapheSize="paragrapheSize" :infos="infos" />
    </div>

</div>
</template>

<script>
import HLsCadre from './HLsCadre.vue'
export default {
  components: { HLsCadre },
    props:['infos','groupes','imageSize','textSize','paragrapheSize'],

}
</script>

<style>

</style>
