
<template>
    <!-- <div class="h-screen w-full flex flex-col justify-center items-center bg-neutral-100  ">
        <div class=" ">
                          <img src="images/lougarelogoV.png" alt="" class="h-[10rem] ml-16" >
              <div class="text-6xl pb-12 text-center">... </div>

              <div class="text-6xl pb-4">Dans Quelque Instant </div>

        </div>
    </div> -->
    <app-main class="">
        <div class="2xl:py-4 py-2 sm:py-10   sm:bg-white bg-neutral-100 px-2 sm:px-0 ">
            <container-box class="">

                <cadre-ala-une :alaunes="alaunes" />
            </container-box>
        </div>

        <div class="py-12">
            <container-box class=" ">
                 <div class=" h-64 bg-neutral-100 border ">
                </div>
            </container-box>
        </div>

        <div class="  pt-12 pb-12 bg-neutral-100 ">
            <!-- <cadre-favori /> -->
        </div>





        <div class="bg-neutral">

            <container-box class="py-5">

                <div class="grid grid-cols-12 gap-10">
                    <div class="col-start-1  col-end-9">
                        <!-- <cadre-au-fil /> -->
                    </div>
                    <div class="2xl col-start-9 col-end-13">

                    </div>

                </div>
            </container-box>

        </div>
        <div class="">
            <!-- <cadre-video-recente /> -->
        </div>
        <div class="">
            <!-- <cadtre-contact-us /> -->
        </div>


    </app-main>

</template>

<script>
import ContainerBox from '@/MyComponent/Box/ContainerBox.vue'
import AppMain from '@/Layouts/AppMain.vue'
import CadreAlaUne from '@/MyComponent/Cadre/CadreAlaUne.vue'
import BreakingNews from '@/MyComponent/Breaking/BreakingNews.vue'
import VCadre from '@/MyComponent/Cadre/VCadre.vue'
import ArticleBox from '@/MyComponent/Box/ArticleBox.vue'
import HCadre from '@/MyComponent/Cadre/HCadre.vue'
import InfoMenu from '@/MyComponent/Menu/InfoMenu.vue'
import HLsCadreGrouper from '@/MyComponent/Cadre/HLsCadreGrouper.vue'
import PubHCadre from '@/MyComponent/Cadre/PubHCadre.vue'
import NewsLetter from '@/MyComponent/CadreReel/NewsLetter.vue'
import PubVCadre from '@/MyComponent/Cadre/PubVCadre.vue'
import CadreFavori from '@/MyComponent/CadreReel/CadreFavori.vue'
import CadreVideoRecente from '@/MyComponent/CadreReel/CadreVideoRecente.vue'
import CadreAuFil from '@/MyComponent/CadreReel/CadreAuFil.vue'
import CadtreContactUs from '@/MyComponent/CadreReel/CadtreContactUs.vue'
export default {
  components: {  ContainerBox, AppMain, CadreAlaUne , BreakingNews, VCadre, ArticleBox, HCadre, InfoMenu, HLsCadreGrouper, PubHCadre, NewsLetter, PubVCadre, CadreFavori, CadreVideoRecente, CadreAuFil, CadtreContactUs },
  props:['alaunes'],
  data(){
      return {
          important: [
                {
                    priorite:'1',
                    image:'images/pub/a1.jpg',
                    titre:'Le Sénégal remporte  la coupe d\'afrique 2022',
                    text:"Apres un matche très tendu, le senegal fini de remporter sa première coupe d'afrique au tirage de penalty.",
                    infoShowType:'v',
                    infoSzie:'gp',
                    commentaire:20,
                    date:"il y'a 11mn"

                },
                {
                    priorite:'2',
                    image:'images/pub/a2.jpg',
                    titre:"Tivaoune une ville religieuse",
                    text:"Tivaoune une ville religieuse du senegal, marqué par le Cheikh El hadj Malick SY qui etait un savant très connu",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:57,
                    date:"il y'a 1h"

                },
                {
                    priorite:'3',
                    image:'images/pub/a3.jpg',
                    titre:'Une bonne période de récolte au centre du Senegal',
                    text:"La saison de pluies touche à sa fin, les agribulteurs recoltent leur produits d'une bonne saison avec des pluies abondante ",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:10,
                    date:"il y'a 1h"
                },
                {
                    priorite:'4',
                    image:'images/pub/a4.jpg',
                    titre:'10 minutes de bruit avec des ustensile de cuisines appliqué par les Sénégalais',
                    text:"Les sénégalais ont appliqué l'avis du dirgent de Pastef. Beaucoup d'entre eux réclament l'élevation des prix des denrés de premières néccesité",
                    infoShowType:'v',
                    infoSzie:'gp',
                    commentaire:89,
                    date:"il y'a 2h"



                },
                {
                    priorite:'5',
                    image:'images/pub/a5.jpg',
                    titre:'Totalenergies Marketing Sénégal Met Sa Nouvelle Gamme De Lubrifiants Pure Sur Le Marché',
                    text:"Total Energie propose sa nouvelle lubrifiant ecolo pure et durable",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'6',
                    image:'images/pub/a6.jpg',
                    titre:'Sadio met un but et améne les lions à la demi-final',
                    text:"Une equipe malienne tres defensive et resitant a tombé face au redoutable attaquant des lions de la téranga apres un 60 minutes de jeu",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:93,
                    date:"il y'a 3H"


                },
                {
                    priorite:'7',
                    image:'images/pub/a7.jpg',
                    titre:'Le liverpool perd son joueur clé',
                    text:"Sadio quitte les reds et rejoint le bayern de munich",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'8',
                    image:'images/pub/a9.jpg',
                    titre:'[ultimatum] une assemblé mis à l\'épreuve par les seneglais',
                    text:"Les senegalais reclament la criminalisation de l'homo et mettre la pression aux deputé de la régime",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'9',
                    image:'images/pub/a9.jpg',
                    titre:'Une belle image de vainqueur remplit le coeur des senagalais',
                    text:"Le senegal qui n\'a jamais gagné une coupe de football a reussi pour cette année de 2022 avec une équipe cohésive et talentueuse ",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'10',
                    image:'images//pub/a10.jpg',
                    titre:'Macky fait une sortie de 25 minutes sur lougaré TV',
                    text:"Le president du senegal a parlé de cherté de la vie , de l'education et des projet future du sénégal",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },

           ]
      };
  }

}
</script>

<style>

</style>
