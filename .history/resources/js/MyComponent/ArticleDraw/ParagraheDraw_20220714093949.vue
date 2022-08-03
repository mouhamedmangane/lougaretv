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
            console.log(this.mmodel);
            return this.mmodel.cssClass.join(' ');
        }
    }
}
</script>

<style>

</style>
