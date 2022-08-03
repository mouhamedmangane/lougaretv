<template>
    <a :href="url" :class="[classItem,'']">
        <span v-if="icon">
            <material-icon :nom="icon" class="text-2xl"/>
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
