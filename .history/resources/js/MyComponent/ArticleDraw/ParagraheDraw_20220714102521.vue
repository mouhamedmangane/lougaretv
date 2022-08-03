<template>
  <p :class="myClass" v-if="!enModification" @click="onActive()">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]" v-if="enModification" @focusout="enModification=false" ref="textarea">{{mmodel.txt}}</textarea>
</template>

<script>
import { nextTick } from 'vue'

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
