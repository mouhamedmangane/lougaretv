<template>
  <p :class="myClass" v-show="!enModification" @click="onActive()">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]" v-show="enModification" @focusout="enModification=false" ref="textarea">{{mmodel.txt}}</textarea>
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
            console.log(this.$refs.textarea);

            this.$refs.textarea.selectionStart=this.$refs.textarea.innerHtml.length;
            this.$refs.textarea.selectionEnd=this.$refs.textarea.innerHtml.length;
            this.$refs.textarea.focus();
        }

    }
}
</script>

<style>

</style>
