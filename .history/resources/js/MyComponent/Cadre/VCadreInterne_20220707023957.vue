<template>
    <div :class="{'group hover:shadow-2xl hocer:border transition-all':true,'relative':interne}"  >
        <div class="bg-gradient-to-t from-neutral-900 absolute w-full h-1/2 bottom-0"></div>
        <my-img :src="pub.image" alt="" class="shadow" :size="iSize" />
        <div :class="{'px-6':tabuler,'px-4':!tabuler,'py-3  absolute bottom-0  z-10 ':true}">
            <titre-3 :size="textSize" :class="{'text-white  ':true,}">
                {{pub.titre}}
            </titre-3>
            <div class="">
               <span class="text-white   my-3 inline-block rounded-full text-xs">Sport</span>
            </div>
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
