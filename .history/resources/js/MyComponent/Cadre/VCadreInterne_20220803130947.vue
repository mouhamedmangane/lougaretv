<template>
    <div :class="{'group ':true,' relative':interne}"  >
        <my-img :src="'/images_articles/'+pub.article_id+'/'+pub.image" alt="" class="shadow " classImg=" rounded-lg sm:rounded-0 " :size="iSize" />
        <div class="bg-gradient-to-t from-black absolute w-full h-1/2 bottom-0 "></div>
        <div :class="{'sm;px-6 px-4':tabuler,'px-4':!tabuler,'py-3  absolute bottom-0  z-10 ':true}">
            <titre-3 :size="textSize" :class="{'text-white  hover:underline ':true,}">
                {{pub.txt}}
            </titre-3>
            <div class="">
               <span class=" my-3 inline-block px-2 text-xs py-[2px] " v-if="pub.article"
                      :style="{'color':pub.article.categorie.couleur_txt,'background-color':pub.article.categorie.couleur_fond}">
                   {{ pub.article.categorie_id}}
                </span>
            </div>
            <slot></slot>
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
