<template>
  <div class="inline-block flex items-center">
      <span :class="['',textClass]">{{text}}</span>
      <span>
          <material-icon :class="['',iconClass]" :nom="materialicon"/>
        </span>

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
