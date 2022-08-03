<template>
    <div class=" bg-white">
        <info-menu  taille="3"/>
        <div>
            <article-box><h-cadre
            v-for="pub in important"
                imageSize="pm"
                textSize="pm"
                paragrapheSize="pm"
                :pub="pub" />
            </article-box>

        </div>

    </div>
</template>

<script>
import InfoMenu from '../Menu/InfoMenu.vue';
export default {
  components: { InfoMenu },
  props:['infos'],
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
