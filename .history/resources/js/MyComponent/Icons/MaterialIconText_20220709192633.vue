<template>
  <div class="inline-block flex items-center">
      <span>
          <material-icon :class="['leading-none',iconClass]" :nom="materialicon"/>
        </span>
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
