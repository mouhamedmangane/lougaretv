<template>
<div @click="onClick">
   <img  :src="src" alt="" class="object-cover" ref="img" v-bind="$attrs"  />
  <input type="file" v-show="false" @change="onChange" ref="inputFile" accept="image/png, image/jpeg">
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
             this.$emit('update:modelValue',file);
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
