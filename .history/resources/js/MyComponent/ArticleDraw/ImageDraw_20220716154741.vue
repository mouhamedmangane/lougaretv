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
             this.mmodel.src = window.URL.createObjectURL(event.target.files[0]);
             this.mmodel.name=
             this.mmodel.$file = event.target.files[0];
             console.log(this.mmodel.$file.name.split('.').pop());
        },
        onClick(event){
            this.$refs.inputFile.click();


        }
    },
    mounted(){
       this.$refs.inputFile.click();

    }
}
</script>

<style>

</style>
