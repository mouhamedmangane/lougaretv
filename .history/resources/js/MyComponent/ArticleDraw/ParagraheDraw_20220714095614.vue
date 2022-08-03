<template>
  <p :class="myClass" v-show="!enModification">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]" v-show="enModification" >
       {{mmodel.txt}}
  </textarea>
</template>

<script>
export default {
    props:['mmodel'],
    data(){
        return {
            enModification:false,
        }
    },
    computed:{
        myClass(){
            console.log();
            return Object.values(this.mmodel.cssClass).join(' ');
        }
    },
}
</script>

<style>

</style>
