<template>
    <div :class="{'group':true,'relative':interne}"  >

        <my-img :src="pub.image" alt="" class=" " :size="iSize" />
        <div :class="{'bg-red-700 text-white py-1 px-3  ml-4 z-20 mt-2 rounded-full':true,'absolute bottom-0':interne}">Sport</div>
        <div :class="{'pl-4 pr-3':tabuler,'py-3':true,'absolute bottom-0 bg-gradient-to-t from-neutral-900 z-10':interne}">
            <div :class="{' pb-1':true,'text-white':interne,'text-neutral-600':!interne}" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <titre-3 :size="textSize" :class="{'text-white px-3':interne,'py-3 group-hover:underline ':true,}">
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
