<template>
  <div class="flex items-center">
      <div class=" flex item-center">
          <material-icon :class="['leading-none',iconClass]" :nom="materialicon"/>
      </div>
      <span :class="['leading-none',textClass]">{{text}}</span>
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
