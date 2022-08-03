<template>
<div @click="onClick">
      <button class="py-1 px-4 flex items-center">
      <span v-if="icon" class="leading-none">
          <material-icon :nom="icon" class=" mr-2"/>
      </span>
      <span class="leading-none">{{txt}}</span>
  </button>
  <input type="file" v-show="false" @change="onChange" ref="inputFile">
</div>

</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    props:['txt','icon'],
    emits:['changeFile'],
    methods:{
        onChange(event){
            this.$emit('changeFile',{file:event.target.value});
        },
        onClick(event){
            this.$refs.inputFile.click();
        }
    }
}
</script>

<style>

</style>
