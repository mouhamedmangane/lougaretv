<template>
  {{finalText}}
</template>

<script>
export default {
    props:['text','maxLength'],
    computed:{
        finalText(){
            if(this.text.length >  this.maxLength){
                return this.text.substring(0,this.maxLength)+' ...';
            }
            else{
                return text;
            }
        }
    }
}
</script>

<style>

</style>
