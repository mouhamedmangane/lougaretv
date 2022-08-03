<template>
    <div class="group  h-full" @click="onClick">
        <my-img :src="pub.image" alt="" :class="{'float-right ml-2':inverser,' float-left mr-4':!inverser,'relative  ':true} " :size="imageSize" />
        <div :class=" {'relative  h-24 ':true,'':inverser,'':!inverser}">
            <titre-3 :size='textSize' class="group-hover:underline ">
                <text-limit :text="pub.titre" :maxLength="limitTitre" />
            </titre-3>
            <span class=" rounded-full text-xs absolute bottom-0 bg-red-700 px-2 " >societé</span>

        </div>
    </div>
</template>

<script>
import MyImg from '../Images/MyImg.vue'
import Paragraphe from '../Text/Paragraphe.vue'
import TextLimit from '../Text/TextLimit.vue'
import Titre3 from '../Text/Titre3.vue'
export default {
  components: { MyImg, Titre3, Paragraphe, TextLimit },
    props:  ['pub',"textSize",'imageSize',"paragrapheSize",'limitTitre','limitParagraphe','inverser'],
    computed:{
        pSize(){
            return (this.paragrapheSize)?this.paragrapheSize : this.textSize;
        },
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
