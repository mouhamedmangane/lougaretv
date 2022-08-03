<template>
<div @click="onClick">
   <img  :src="src" alt="" class="w-full h-[12rem] object-cover" ref="img" />
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
            this.mmodel.file=event.files[0];
             this.src=window.URL.createObjectURL(this.mmodel.file);
        },
        onClick(event){
            this.$refs.inputFile.click();
        }
    },
    mounted(){
        var reader = new FileReader();

        var imgtag = document.getElementById("myimage");
        imgtag.title = selectedFile.name;

        reader.onload = function(event) {
            imgtag.src = event.target.result;
        };

        reader.readAsDataURL(selectedFile);
    }
}
</script>

<style>

</style>
