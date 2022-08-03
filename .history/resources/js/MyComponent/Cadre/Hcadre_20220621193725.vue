<template>
    <div class="flex ">
        <div>
            <my-img="pub.image" alt="" class=" " :size="imageSize">
        </div>
        <div class="pl-[20px]">
            <div class="text-neutral-600 pb-1" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <div class="text-2xl  font-bold ">
                {{pub.titre}}
            </div>
            <paragraphe size='textSize' class="pt-2 text-neutral-800">
                {{pub.text}}
            </paragraĵe>
        </div>
    </div>
</template>

<script>
import MyImg from '../Images/MyImg.vue'
const classSizeConst={
    'pm':'lg:text-xs xl:text-[.9375rem] leading-[1.2] font-medium  ',
    'mm':'text-2xl  font-bold',
    'gm':'text-[2rem] leading-[1.2]'
}
export default {
  components: { MyImg },
    props:  ['pub',"textSize",'imageSize']
}
</script>

<style>

</style>
