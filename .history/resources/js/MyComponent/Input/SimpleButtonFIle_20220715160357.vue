<template>
<div @click="">
      <button class="py-1 px-4 flex items-center">
      <span v-if="icon" class="leading-none">
          <material-icon :nom="icon" class=" mr-2"/>
      </span>
      <span class="leading-none">{{txt}}</span>
  </button>
  <input type="file" v-show="false">
</div>

</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    props:['txt','icon'],
    emits:['changeFile'],
    methods:{
        onChange(){
            this.$emit('changeFile',)
        }
    }
}
</script>

<style>

</style>
