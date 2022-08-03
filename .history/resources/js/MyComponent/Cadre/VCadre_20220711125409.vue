<template>
    <div :class="{'group relative text-black':true}"  >
        <div class="bottom-0 absolute w-full h-1/2 bg-gradient-to-t from-black  via-neutral-700 to-transparent  z-10 "></div>
        <div class="relative">
            <my-img :src="pub.image" alt="" class="" :size="iSize" />
            <!-- <div :class="{'bg-red-700 text-white absolute bottom-0 text-xs z-20 rounded-full':true,}">Sport</div> -->

        </div>
        <div :class="{'pl-4 pr-3':tabuler,'py-3 z-30':true,' z-30 ':interne}">
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
