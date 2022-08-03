<template>
  <p :class="myClass">
      {{mmodel.txt}}
  </p>
</template>

<script>
export default {
    props:['mmodel'],
    computed:{
        myClass(){
            return this.mmodel.cssClass.join(' ');
        }
    }
}
</script>

<style>

</style>
