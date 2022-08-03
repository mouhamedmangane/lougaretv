<template>
  <p :class="myClass" v-if="!enModification" @click="onActive()">
      {{mmodel.txt}}
  </p>
  <input :class="['w-full',myClass]" v-if="enModification" @focusout="enModification=false" ref="textarea" value="{{mmodel.txt}}"/>
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
