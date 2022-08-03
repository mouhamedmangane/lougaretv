<template>
    <div :class="{'group':true,'relative':interne}"  >
        <div class="relative">
            <my-img :src="pub.image" alt="" class=" " :size="iSize" />
            <div :class="{'bg-red-700 text-white  px-3  ml-5 z-20 rounded-full':true,'absolute bottom-0 text-xs':interne}">Sport</div>

        </div>
        <div :class="{'pl-4 pr-3':tabuler,'py-3':true,' z-10 ':interne}">
            <titre-3 :size="textSize" :class="{'text-white px-3 pb-[3.3rem]':interne,'py-3':!interne,' group-hover:underline ':true,}">
                {{pub.titre}}
            </titre-3>
            <paragraphe :size="pSize" class="text-neutral-700" v-if="!interne">
                {{pub.text}}
            </paragraphe>
        </div>

    </div>

</template>

<script>
import MyImg from '../Images/MyImg.vue';
import Paragraphe from '../Text/Paragraphe.vue'
import Titre3 from '../Text/Titre3.vue'
export default {
  components: { Paragraphe, Titre3, MyImg },
    props:  ['pub','imageSize','tabuler',"textSize","paragrapheSize",'interne'],
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
