<template>
<div @click="onClick">
   <img  :src="mmodel.src" alt="" class="w-full apect[3/1.68]" ref="img" />
  <input type="file" v-show="false" @change="onChange" ref="inputFile" />
</div>

</template>

<script>

export default {
    props:['modelValue','pathImage'],
    data(){
        return {
            src:''
        };
    },
    emits:['update:modelValue'],
    methods:{
        onChange(event){
             this.mmodel.src = window.URL.createObjectURL(event.target.files[0]);
             let file=event.target.files[0];
             this.mmodel.name=file.name;
             let i=this.mmodel.position+ '.'+file.name.split('.').pop();
             this.mmodel.realname = i;
            //  file.name=this.mmodel.realname;
             this.mmodel.$file =file;
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
