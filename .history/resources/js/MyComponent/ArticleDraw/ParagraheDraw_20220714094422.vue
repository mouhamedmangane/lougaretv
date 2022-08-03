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
            console.log(this.mmodel.cssValues);
            return this.mmodel.cssClass.values.join(' ');
        }
    }
}
</script>

<style>

</style>
