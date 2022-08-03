<template>
<div @click="onClick">
   <img  :src="mmodel.file" alt="" class="w-full" ref="img" />
  <input type="file" v-show="false" @change="onChange" ref="inputFile" />
</div>

</template>

<script>
export default {

props:['mmodel'],
    emits:['changeFile'],
    methods:{
        onChange(event){

            this.$emit('changeFile',{file:event.target.files[0]});
        },
        onClick(event){
            this.$refs.inputFile.click();
        }
    }
}
</script>

<style>

</style>
