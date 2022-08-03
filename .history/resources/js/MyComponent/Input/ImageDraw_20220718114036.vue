<template>
<div @click="onClick">
   <img  :src="src" alt="" class="" ref="img" v-bind="$attrs" @click="onClick" />
  <input type="image" v-show="false" @change="onChange" ref="inputFile"  />
</div>

</template>

<script>

export default {
    inheritAttrs: false,
    props:['modelValue','pathImage'],
    data(){
        return {
            src:this.pathImage,
        };
    },
    emits:['update:modelValue'],
    methods:{
        onChange(event){
             let file=event.target.files[0];
             this.src = window.URL.createObjectURL(file);
             this.emits('update:modelValue',{file:file});
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
