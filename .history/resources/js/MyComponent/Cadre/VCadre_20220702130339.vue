<template>
    <div :class="{'group':true,'relative':interne}"  >

        <my-img :src="pub.image" alt="" class=" " :size="iSize" />

        <div :class="{'pl-4 pr-3':tabuler,'py-3':true,'absolute bottom-0 bg-gradient-to-t from-neutral-900 ':interne}">
            <div :class="{' pb-1':true,'text-white':interne,}" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <titre-3 :size="textSize" class="py-3 group-hover:underline">
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
