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
            console.log(this.mmodel.values);
            return this.mmodel.cssClass.values.join(' ');
        }
    }
}
</script>

<style>

</style>
