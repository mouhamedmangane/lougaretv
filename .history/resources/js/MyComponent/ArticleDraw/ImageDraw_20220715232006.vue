<template>
<div @click="onClick">
   <img  :src="mmodel.src" alt="" class="w-full">
  <input type="file" v-show="false" @change="onChange" ref="inputFile">
</div>

</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    props:['mmodel'],
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
