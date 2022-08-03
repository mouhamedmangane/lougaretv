<template>
    <div class="group  h-full" @click="onClick">
        <my-img :src="pub.image" alt="" :class="{'float-right':inverser,' float-left ':!inverser,'relative shadow i mr-2':true} " :size="imageSize" />
        <div :class=" {'relative  h-full ':true,'':inverser,'':!inverser}">
            <titre-3 :size='textSize' class="group-hover:underline ">
                <text-limit :text="pub.titre" :maxLength="limitTitre" />
            </titre-3>
            <span class=" rounded-full text-xs absolute bottom-0 " >societé</span>

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
