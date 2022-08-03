<template>
  <p :class="myClass" v-show="!enModification" @click="onActive()">
      {{mmodel.txt}}
  </p>
  <textarea :class="['w-full',myClass]" v-show="enModification" @focusout="enModification=false" ref="textarea"  v-model="mmodel.txt" />
</template>

<script>
import { nextTick, onMounted } from 'vue'

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
              console.log(this.mmodel.txt)
            if(this.mmodel.position==0)
                this.mmodel.txt='Para';
            this.enModification=true;
            await nextTick();
            console.log(this.$refs.textarea);
            this.focus();

        },
        focus(){
             this.$refs.textarea.selectionStart=this.$refs.textarea.value.length;
            this.$refs.textarea.selectionEnd=this.$refs.textarea.value.length;
            this.$refs.textarea.focus();
        }

    },
    mounted(){
        console.log('mountedm');
        this.focus();
    }
}
</script>

<style>

</style>
