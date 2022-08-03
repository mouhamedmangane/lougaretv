<template>
    <div class=" bg-white">
        <div>
            <article-box class="shadow pt-30">
                <h-cadre
                    v-for="pub in infos"
                    :imageSize="imageSize"
                    :textSize="textSize"
                    :paragrapheSize="paragrapheSize"
                    :pub="pub"
                    class=""

                 />
            </article-box>

        </div>

    </div>
</template>

<script>
import ArticleBox from '../Box/ArticleBox.vue';
import HCadre from './HCadre.vue';
export default {
  components: { ArticleBox, HCadre },
  props:  ["textSize",'imageSize',"paragrapheSize",'infos'],
    data(){
        return {
            infos: [
                {
                    priorite:'1',
                    image:'images/pub1.jpg',
                    titre:'Manifestation de Yaw : suivez la déclaration de Barthelémy DIAS',
                    text:""
                },
                {
                    priorite:'2',
                    image:'images/pub3.jpg',
                    titre:"Affaire Serigne Assane Mbacké Khelcom : Le témoignage accablant du père d'une des victimes",
                    text:""


                },
                {
                    priorite:'3',
                    image:'images/pub1.png',
                    text:""


                },
                {
                    priorite:'4',
                    image:'images/2.png',
                    text:""


                },
                {
                    priorite:'3',
                    image:'images/5.jpeg',
                    text:""


                },
                {
                    priorite:'4',
                    image:'images/6.jpeg',
                    text:""


                },
                {
                    priorite:'3',
                    image:'images/pub4.jpeg',
                    text:""


                },
                {
                    priorite:'4',
                    image:'images/pub5.jpeg',
                    text:""


                },

           ]
        };
    }
}
</script>

<style>

</style>
