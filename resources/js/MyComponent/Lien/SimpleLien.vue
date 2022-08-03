<template>
  <a class="py-1 px-4 flex items-center" :href="url">
      <span v-if="icon" class="leading-none">
          <material-icon :nom="icon" class=" mr-2"/>
      </span>
      <span class="leading-none">{{txt}}</span>
  </a>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    props:['txt','icon','url']
}
</script>

<style>

</style>
