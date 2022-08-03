<template>
  <titre-barre class="border-red-700 text-2xl text-bold">
    <slot></slot>
  </titre-barre>
</template>

<script>
import TitreBarre from './TitreBarre.vue'
export default {
  components: {TitreBarre },

}
</script>

<style>

</style>
