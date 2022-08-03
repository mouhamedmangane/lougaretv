<template>
    <div :class="{'group relative':true}"  >
        <div class="relative">
            <my-img :src="pub.image" alt="" class=" shadow-md " :size="iSize" />
            <div :class="{'bg-teal-600 text-white absolute -bottom-2 min-w-32 w-32  shadow text-center left-5 text-sm z-20 px-2 py-1':true,}">Sport</div>

        </div>
        <div :class="{'pl-5 pr-3':tabuler,'py-3':true,' z-10 ':interne}">
            <titre-3 :size="textSize" :class="{'text-white px-3 pb-[3.3rem]':interne,'py-3':!interne,' group-hover:underline ':true,}">
                {{pub.titre}}
            </titre-3>
            <paragraphe :size="pSize" class="text-neutral-700" v-if="!interne && !disableParagraphe">
                {{pub.text}}
            </paragraphe>
        </div>
        <slot></slot>

    </div>

</template>

<script>
import MyImg from '../Images/MyImg.vue';
import Paragraphe from '../Text/Paragraphe.vue'
import Titre3 from '../Text/Titre3.vue'
export default {
  components: { Paragraphe, Titre3, MyImg },
    props:  ['pub','imageSize','tabuler',"textSize","paragrapheSize",'interne','disableParagraphe'],
    computed:{
        pSize(){
            return (this.paragrapheSize)?this.paragrapheSize : this.textSize;
        },
        iSize(){
            return (this.imageSize) ? this.imageSize : "gm";
        }
    }
}
</script>

<style>

</style>
