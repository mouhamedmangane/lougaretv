
<template>
    <app-main class="">
        <div class="bg-neutral-100 pt-3 pb-5 shdow">
            <container-box class="">
                <cadre-ala-une />
            </container-box>
        </div>

        <div class=" pt-5 pb-12 bg--100">
            <cadre-favori />
        </div>
        <div class="">
            <cadre-video-recente />
        </div>


        <div class="bg-neutral">

            <container-box class="py-5">
                    <!-- <info-menu  class=" bg-neutral-800 text-white sticky-[120px]" taille="6" classActive="bg-white text-neutral-800 rounded-full" activeItem="Tout"/> -->

                <div class="grid grid-cols-12 gap-10">
                    <div class="col-start-1  col-end-9">
                        <cadre-au-fil />
                    </div>
                    <div class="2xl col-start-9 col-end-13">
                        <!-- <h-ls-cadre-grouper :infos="important" imageSize="pm" textSize="pm"  :estColler="true" class=""/> -->
                        <!-- <news-letter class="bg-white p-5 mt-4" />
                        <pub-v-cadre class="pt-4" src="images/testpub/v1.png" s  /> -->

                    </div>

                </div>
            </container-box>

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
export default {
  components: {  ContainerBox, AppMain, CadreAlaUne , BreakingNews, VCadre, ArticleBox, HCadre, InfoMenu, HLsCadreGrouper, PubHCadre, NewsLetter, PubVCadre, CadreFavori, CadreVideoRecente, CadreAuFil },
  data(){
      return {
          important: [
                {
                    priorite:'1',
                    image:'images/pub/a1.jpg',
                    titre:'Le S??n??gal remporte  la coupe d\'afrique 2022',
                    text:"Apres un matche tr??s tendu, le senegal fini de remporter sa premi??re coupe d'afrique au tirage de penalty.",
                    infoShowType:'v',
                    infoSzie:'gp',
                    commentaire:20,
                    date:"il y'a 11mn"

                },
                {
                    priorite:'2',
                    image:'images/pub/a2.jpg',
                    titre:"Tivaoune une ville religieuse",
                    text:"Tivaoune une ville religieuse du senegal, marqu?? par le Cheikh El hadj Malick SY qui etait un savant tr??s connu",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:57,
                    date:"il y'a 1h"

                },
                {
                    priorite:'3',
                    image:'images/pub/a3.jpg',
                    titre:'Une bonne p??riode de r??colte au centre du Senegal',
                    text:"La saison de pluies touche ?? sa fin, les agribulteurs recoltent leur produits d'une bonne saison avec des pluies abondante ",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:10,
                    date:"il y'a 1h"
                },
                {
                    priorite:'4',
                    image:'images/pub/a4.jpg',
                    titre:'10 minutes de bruit avec des ustensile de cuisines appliqu?? par les S??n??galais',
                    text:"Les s??n??galais ont appliqu?? l'avis du dirgent de Pastef. Beaucoup d'entre eux r??clament l'??levation des prix des denr??s de premi??res n??ccesit??",
                    infoShowType:'v',
                    infoSzie:'gp',
                    commentaire:89,
                    date:"il y'a 2h"



                },
                {
                    priorite:'5',
                    image:'images/pub/a5.jpg',
                    titre:'Totalenergies Marketing S??n??gal Met Sa Nouvelle Gamme De Lubrifiants Pure Sur Le March??',
                    text:"Total Energie propose sa nouvelle lubrifiant ecolo pure et durable",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'6',
                    image:'images/pub/a6.jpg',
                    titre:'Sadio met un but et am??ne les lions ?? la demi-final',
                    text:"Une equipe malienne tres defensive et resitant a tomb?? face au redoutable attaquant des lions de la t??ranga apres un 60 minutes de jeu",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:93,
                    date:"il y'a 3H"


                },
                {
                    priorite:'7',
                    image:'images/pub/a7.jpg',
                    titre:'Le liverpool perd son joueur cl??',
                    text:"Sadio quitte les reds et rejoint le bayern de munich",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'8',
                    image:'images/pub/a9.jpg',
                    titre:'[ultimatum] une assembl?? mis ?? l\'??preuve par les seneglais',
                    text:"Les senegalais reclament la criminalisation de l'homo et mettre la pression aux deput?? de la r??gime",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'9',
                    image:'images/pub/a9.jpg',
                    titre:'Une belle image de vainqueur remplit le coeur des senagalais',
                    text:"Le senegal qui n\'a jamais gagn?? une coupe de football a reussi pour cette ann??e de 2022 avec une ??quipe coh??sive et talentueuse ",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:123,
                    date:"il y'a 2h 30mn"


                },
                {
                    priorite:'10',
                    image:'images//pub/a10.jpg',
                    titre:'Macky fait une sortie de 25 minutes sur lougar?? TV',
                    text:"Le president du senegal a parl?? de chert?? de la vie , de l'education et des projet future du s??n??gal",
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
