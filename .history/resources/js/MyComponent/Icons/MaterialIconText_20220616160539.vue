<template>
  <div class="inline-block">
      <material-icon :class="['',iconClass]" :nom="materialicon"/>
      <span :class="['',textClass]">{{text}}</span>
  </div>
</template>

<script>
import MaterialIcon from './MaterialIcon.vue'
export default {
  components: { MaterialIcon },
  props:['materialicon','text','textClass','iconClass'],

}
</script>

<style>

</style>
