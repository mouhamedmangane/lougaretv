<template>
<div @click="onClick">
   <img  :src="mmodel.src" alt="" class="w-full aspect-[3/2] object-cover" ref="img" />
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
