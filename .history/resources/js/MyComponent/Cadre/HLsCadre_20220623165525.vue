<template>
    <div class=" bg-white">
        <div class="    ">
            <article-box class=""  v-for="pub in infos" :estColler="estColler" >
                <h-cadre
                    :imageSize="imageSize"
                    :textSize="textSize"
                    :paragrapheSize="paragrapheSize"
                    :pub="pub"
                    :inverser="inverser"
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
  props:  ["textSize",'imageSize',"paragrapheSize",'infos','estColler','inverser'],
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
                    priorite:'4',
                    image:'images/2.png',
                    titre:'Revivez Votre émission Matinale Bet Set Du 13 Juin 2022 Invité Mame Makhtar Gueye',


                },
                {
                    priorite:'3',
                    image:'images/5.jpeg',
                    titre:'Totalenergies Marketing Sénégal Met Sa Nouvelle Gamme De Lubrifiants Pure Sur Le Marché',


                },
                {
                    priorite:'4',
                    image:'images/6.jpeg',
                    titre:'Cheikh Footstyle Un Génie Du Ballon "sadio Mané Mako…na Sénégalais Yi Bayi Xel Ci Sama…',


                },
                {
                    priorite:'3',
                    image:'images/pub4.jpeg',
                    titre:'[ultimatum] Nouvelles Révélations Dans La Coalition De Pape Djibril Fall (boubacar Ndiaye)',
                    text:""


                },
                {
                    priorite:'4',
                    image:'images/pub5.jpeg',
                    titre:'Alioune Sarr, Ministre Du Tourisme Et Des Transports Aériens : “nous Avons Le Devoir Hi"',
                    text:""


                },
                  {
                    priorite:'3',
                    image:'images/pub4.jpeg',
                    titre:'[ultimatum] Nouvelles Révélations Dans La Coalition De Pape Djibril Fall (boubacar Ndiaye)',
                    text:""


                },
                {
                    priorite:'4',
                    image:'images/pub5.jpeg',
                    titre:'Alioune Sarr, Ministre Du Tourisme Et Des Transports Aériens : “nous Avons Le Devoir Hi"',
                    text:""


                },
           ]
        };
    }
}
</script>

<style>

</style>
