<template>
<div @click="onClick">
   <img  :src="mmodel.file" alt="" class="w-full" ref="img" />
  <input type="file" v-show="false" @change="onChange" ref="inputFile" />
</div>

</template>

<script>
import { onMounted } from '@vue/runtime-core';
export default {

    props:['mmodel'],
    data(){
        return {
            src:''
        };
    },
    emits:['changeFile'],
    methods:{
        onChange(event){

            this.$emit('changeFile',{file:event.target.files[0]});
            this.$refs.img=
        },
        onClick(event){
            this.$refs.inputFile.click();
        }
    },
    mounted(){

    }
}
</script>

<style>

</style>
