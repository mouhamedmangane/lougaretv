<template>
<div @click="onClick">
   <img  :src="src" alt="" class="w-full h-[12rem] object-cover" ref="img" />
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
            this.mmodel.file=event.files[0];
             this.src=window.URL.createObjectURL(this.mmodel.file);
        },
        onClick(event){
            this.$refs.inputFile.click();
        }
    },
    mounted(){
        this.src=window.URL.createObjectURL(this.mmodel.file);
    }
}
</script>

<style>

</style>
