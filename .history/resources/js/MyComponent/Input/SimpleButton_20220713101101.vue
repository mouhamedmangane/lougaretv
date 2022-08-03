<template>
  <button class="py-1 px-4 flex items-center">
      <span v-if="icon">
          <material-icon :nom="icon" class=" mr-2" style="line-height:1;"/>
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
