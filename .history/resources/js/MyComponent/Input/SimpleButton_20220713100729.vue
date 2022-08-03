<template>
  <button class="py-1">
      <span v-if="icon">
          <material-icon :nom="icon"/>
      </span>
      <span>{{txt}}</span>
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
