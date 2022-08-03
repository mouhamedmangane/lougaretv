<template>
<div @click="onClick">
   <img  :src="mmodel.src" alt="" class="w-full" />
  <input type="file" v-show="false" @change="onChange" ref="inputFile" />
</div>

</template>

<script>
export default {

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
