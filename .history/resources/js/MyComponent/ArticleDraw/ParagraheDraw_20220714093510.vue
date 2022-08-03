<template>
  <p :class="myClass">
      {{mmodel.text}}
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
