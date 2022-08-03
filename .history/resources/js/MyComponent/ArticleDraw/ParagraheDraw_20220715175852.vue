<template>
  <p :class="myClass" v-show="!enModification" @click="onActive()">
      {{txt}} {{position}}
  </p>
  <textarea :class="['w-full',myClass]" v-show="enModification" @focusout="enModification=false" ref="textarea"  v-model="txt" />
</template>

<script>
import { nextTick, onMounted } from 'vue'

export default {
    props:['txt','cssClass','position'],
    data(){
        return {
            enModification:false,
        }
    },
    computed:{
        myClass(){
            console.log();
            return Object.values(this.cssClass).join(' ');
        }
    },
    methods:{
        onActive(){
            console.log(this.mmodel)
            this.enModification=true;
            console.log(this.txt);
            this.focus();

        },
        async focus(){
             await nextTick();
            this.$refs.textarea.selectionStart=this.$refs.textarea.value.length;
            this.$refs.textarea.selectionEnd=this.$refs.textarea.value.length;
            this.$refs.textarea.focus();
        }

    },
    mounted(){
        console.log('mountedm');

        this.onActive();
    }
}
</script>

<style>

</style>
