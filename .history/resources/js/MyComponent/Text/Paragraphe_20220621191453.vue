<template>
  <p :class="[classText]">

  </p>
</template>

<script>
const classTextConst={
    'pm':'',
    'mm':'',
    'gm':''
}
export default {
    props:['size'],
    computed:{
        classText(){
            return classTextConst[this.size];
        }
    }
}
</script>

<style>

</style>
