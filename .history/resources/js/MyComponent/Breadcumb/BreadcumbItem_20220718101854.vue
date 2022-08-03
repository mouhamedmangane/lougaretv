<template>
    <a :href="url" :class="[classItem,'']">
        <span v-if="icon" class="align-middle">
            <material-icon :nom="icon" class=""/>
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
        classItem:{}
  },
  provide:['classItem'],

}
</script>

<style>

</style>
