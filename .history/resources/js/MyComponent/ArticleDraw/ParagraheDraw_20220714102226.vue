<template>
  <p :class="myClass" v-show="!enModification" @click="onActive()">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]" v-show="enModification" @focusout="enModification=false" ref="textarea">{{mmodel.txt}}</textarea>
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
        async onActive(){
            this.enModification=true;
            await nextTick();
            this.$refs.textarea.focus();
        }

    }
}
</script>

<style>

</style>
