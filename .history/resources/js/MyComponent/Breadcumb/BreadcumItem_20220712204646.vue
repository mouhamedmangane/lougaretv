<template>
    <a :href="url">
        <span v-if="icon">
            <material-icon nom="icon"/>
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
        url:{
            type:String,
        },
        txt: {
            type:String,
        },
        icon:{
            type:String,

        }
  },
}
</script>

<style>

</style>
