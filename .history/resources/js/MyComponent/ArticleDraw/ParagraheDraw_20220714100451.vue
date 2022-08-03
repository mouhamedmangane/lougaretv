<template>
  <p :class="myClass" v-show="!enModification" @click="enModification=true,">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]" v-show="enModification" @focusout="enModification=false" ref="text">{{mmodel.txt}}</textarea>
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
    methods:{
        onActive(){
            this.enModification=true;
            this.$refs.text.focus();
        }
    }
}
</script>

<style>

</style>
