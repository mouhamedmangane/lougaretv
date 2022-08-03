<template>
  <titre-barre class=" text-3xl font-medium">
    <slot></slot>
  </titre-barre>
</template>

<script>
import TitreBarre from './TitreBarre.vue'
export default {
  components: {TitreBarre,},
  props:['classBarre'],

}
</script>

<style>

</style>
