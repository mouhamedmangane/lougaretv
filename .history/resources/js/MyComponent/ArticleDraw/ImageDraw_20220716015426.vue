<template>
<div @click="onClick">
   <img  :src="mmodel.src" alt="" class="w-full h-[12rem] object-cover" ref="img" />
  <input type="file" v-show="false" @change="onChange" ref="inputFile" />
</div>

</template>

<script>

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
             this.mmodel.file = window.URL.createObjectURL(event.target.files[0]);
        },
        onClick(event){
            this.$refs.inputFile.click();


        }
    },
    mounted(){
        // this.$refs.inputFile.value=this.mmodel.file;

    }
}
</script>

<style>

</style>
