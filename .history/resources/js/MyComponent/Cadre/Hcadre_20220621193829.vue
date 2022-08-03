<template>
    <div class="flex ">
        <div>
            <my-img="pub.image" alt="" class=" " :size="imageSize">
        </div>
        <div class="pl-[20px]">
            <div class="text-neutral-600 pb-1" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <titre-3 size='textSize' class="">
                {{pub.titre}}
            </titre-3>
            <paragraphe size='textSize' class="pt-2 text-neutral-800">
                {{pub.text}}
            </paragraphe>
        </div>
    </div>
</template>

<script>
import MyImg from '../Images/MyImg.vue'
import Paragraphe from '../Text/Paragraphe.vue'
import Titre3 from '../Text/Titre3.vue'
const classSizeConst={
    'pm':'lg:text-xs xl:text-[.9375rem] leading-[1.2] font-medium  ',
    'mm':'text-2xl  font-bold',
    'gm':'text-[2rem] leading-[1.2]'
}
export default {
  components: { MyImg, Titre3, Paragraphe },
    props:  ['pub',"textSize",'imageSize']
}
</script>

<style>

</style>
