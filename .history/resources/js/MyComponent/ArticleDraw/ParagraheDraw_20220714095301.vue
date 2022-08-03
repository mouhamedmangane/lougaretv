<template>
  <p :class="myClass">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]">
      {{mmodel.txt}}
  </textarea>
</template>

<script>
export default {
    props:['mmodel'],
    computed:{
        myClass(){
            console.log();
            return Object.values(this.mmodel.cssClass).join(' ');
        }
    }
}
</script>

<style>

</style>
