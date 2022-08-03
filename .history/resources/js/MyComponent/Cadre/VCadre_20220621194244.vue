<template>
    <div class="group" >

        <div class="relative ">
            <img :src="pub.image" alt="" class="w-full object-cover aspect-[3/2.1]">

        </div>
        <div :class="{'pl-4 pr-3':tabuler,'py-3':true}">
            <div class="text-neutral-600 pb-1" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <titre-3 size="textSize" class="py-3 group-hover:underline">
                {{pub.titre}}
            </titre-3>
            <paragraphe size="textSize" class="text-neutral-700">
                {{pub.text}}
            </paragraphe>



        </div>

    </div>

</template>

<script>
import Paragraphe from '../Text/Paragraphe.vue'
import Titre3 from '../Text/Titre3.vue'
export default {
  components: { Paragraphe, Titre3 },
    props:  ['pub','tabuler',"textSize"],
}
</script>

<style>

</style>
