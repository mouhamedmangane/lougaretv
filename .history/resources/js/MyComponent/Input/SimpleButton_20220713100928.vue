<template>
  <button class="py-1 fpx-4 lex items-center">
      <span v-if="icon">
          <material-icon :nom="icon"/>
      </span>
      <span class="leading-none">{{txt}}</span>
  </button>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    props:['txt','icon']
}
</script>

<style>

</style>
