<template>
  {{finalText}}
</template>

<script>
export default {
    props:['text','maxLength'],
    computed:{
        finalText(){
            if(this.maxLength && this.text.length >  this.maxLength){
                return this.text.substring(0,this.maxLength)+' ...';
            }
            else{
                return this.text;
            }
        }
    }
}
</script>

<style>

</style>
