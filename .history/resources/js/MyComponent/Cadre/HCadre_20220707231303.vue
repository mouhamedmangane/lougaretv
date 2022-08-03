<template>
    <div class="flex group  relative" @click="onClick">
        <div :class="{'relative':true,'order-2':inverser,'order-1':!inverser} ">
            <my-img :src="pub.image" alt=""  :size="imageSize" />
            <div :class="['absolute bottom-1 -left-4 bg-red  px-3 py-1 text-sm',pub.color]" v-if="pub.categorie">
                {{pub.categorie}}
            </div>
        </div>
        <div :class=" ['order-1 py-6 grow',espaceText]">
            <div class="text-neutral-600 pb-1" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <titre-3 :size='textSize' class="group-hover:underline">
                <text-limit :text="pub.titre" :maxLength="limitTitre" />
            </titre-3>
            <div class="pt-4 flex text-xs">
                <span>Il y'a 3 minutes</span>
                <span class="mx-4">6</span>
                <span class="">165 lecture</span>
            </div>
            <paragraphe :size='pSize' class="pt-2 text-neutral-900 ">
                <text-limit :text="pub.text" :maxLength="limitParagraphe" />
            </paragraphe>
        </div>
        <div class="absolute bottom-0 flex items-center text-neutral-500 text-xs">
            <div class="flex items-center">
                <img src="images/pub3.jpg" alt="" class="w-8 h-8 rounded-full mr-2">
                <span>M Ndiaye</span>
            </div>
            <div class="flex items-center ml-4">
                <material-icon nom="question_answer" class="mr-2" />
            </div>
            <span>12 Commentaires</span>
        </div>
    </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
import MyImg from '../Images/MyImg.vue'
import Paragraphe from '../Text/Paragraphe.vue'
import TextLimit from '../Text/TextLimit.vue'
import Titre3 from '../Text/Titre3.vue'
export default {
  components: { MyImg, Titre3, Paragraphe, TextLimit, MaterialIcon },
    props:  ['pub',"textSize",'imageSize',"paragrapheSize",'limitTitre','limitParagraphe','inverser','espace',],
    computed:{
        pSize(){
            return (this.paragrapheSize)?this.paragrapheSize : this.textSize;
        },
        espaceText(){
            let p=(this.inverser)?'pr-':'pl-';
            let e=(this.espace)?this.espace:4;
            return p+e;
        }
    },
    methods:{
        onClick(){
            window.location.href='/detail';
        }
    }
}
</script>

<style>

</style>
