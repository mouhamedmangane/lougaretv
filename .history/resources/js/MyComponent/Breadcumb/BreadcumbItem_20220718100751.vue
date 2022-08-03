<template>
    <a :href="url" :class="[classItem,'flex itemd-center']">
        <span v-if="icon">
            <material-icon :nom="icon"/>
        </span>
        <span>{{txt}}</span>
    </a>
    <span class="px-3">
        /
    </span>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
  props:{
        url:{},
        txt:{},
        icon:{},
  },
  provide:['classItem'],

}
</script>

<style>

</style>
