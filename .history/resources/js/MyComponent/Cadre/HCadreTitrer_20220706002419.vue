<template>
    <div class="group  relative h-full" @click="onClick">
        <my-img :src="pub.image" alt="" :class="{'float-right':inverser,' float-left ':!inverser,'relative shadow':true} " :size="imageSize" />
        <div :class=" {' h-full':true,']pr-2':inverser,'pl-2':!inverser}">
            <titre-3 :size='textSize' class="group-hover:underline  grow'">
                <text-limit :text="pub.titre" :maxLength="limitTitre" />
            </titre-3>
            <div class="px-2 rounded-full text-xs absolute bottom-0 " >societé</div>

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
