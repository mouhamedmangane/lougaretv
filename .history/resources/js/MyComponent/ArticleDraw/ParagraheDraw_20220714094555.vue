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
            console.log();
            return Object.values(this.mmodel.cssClass)s.join(' ');
        }
    }
}
</script>

<style>

</style>
