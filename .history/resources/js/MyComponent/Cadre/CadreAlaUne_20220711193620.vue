<template>
       <div class="flex justify-between items-center py-4  mt-1 ">
        <div class="flex items-center">
            <titre-bloc class="border-rsdfsded-700  " >
                <h2 class="m-0 leading-none">A la Une  </h2>
            </titre-bloc>
            <!-- <material-icon nom="chevron_right" />
            <div class="text-neutral-500 "> Rubrique favorie</div> -->
        </div>
        <div class="flex text-neutral-500">
            <span class="mr-3">Jeudi 7 juil 2022</span>
             <material-icon nom="cloud" type="outlined" />

        </div>

    </div>
  <div class="grid grid-cols-12 gap-5 z-10  mt-2" style=" grid-auto-rows: minmax(112px, 112px);">
        <v-cadre textSize="gm" :pub="une" class=" row-start-1 col-span-6 row-span-6  hover:m-1  transition-all border" :tabuler="true"  >
            <div class="  pl-4 pr-31 text-sm py-4">
                 <h4 class="uppercase text-neutral-700  pb-2">Sur le même sujet</h4>
                 <ul>
                     <li class="pb-2">Sonko et adji sarr</li>
                     <li class="pb-2">Pastef bloqué pour les elections locales</li>
                 </ul>
             </div>
        </v-cadre>

         <v-cadre-interne textSize='mm' imageSize="gm" :pub="trois" limitTitre="48" limitParagraphe="116"  class="col-start-7 col-span-3 row-span-2 shadow-md hover:m-1  transition-all" :interne="true"  />
         <v-cadre-interne textSize='mm' imageSize="gm" :pub="second" limitTitre="48" limitParagraphe="116"  class=" col-start-7 col-span-3 row-span-2 shadow-md hover:m-1  transition-all" :interne="true"  />
         <v-cadre-interne textSize='mm' imageSize="gm" :pub="quatre" limitTitre="48" limitParagraphe="116"  class=" row-start-1 col-start-10 col-span-3 row-span-2 shadow-md hover:m-1  transition-all" :interne="true"  />
         <article-box espace="2" class=" col-start-10 col-span-3  row-span-1   hover:shadow-lg shadow  transition-all "  v-for="pub in important"  >
            <h-cadre-titrer :pub="pub"  textSize='pm' imageSize="pm" limitTitre="76" />
         </article-box>
        <div class="col-start-7 col-span-6 row-span-2  bg-neutral-100 text-neutral-6OO border">
            <!-- <span class="text-neutral-700">PuB</span> -->
            <pub-v-cadre class="bg-white" src="images/testpub/h2.jpeg" :estDebout="false"  :masquerText="false"   />
        </div>



  </div>

</template>

<script>
import ArticleBox from '../Box/ArticleBox.vue';
import MaterialIcon from '../Icons/MaterialIcon.vue';
import TitreBloc from '../Text/TitreBloc.vue';
import HCadre from './HCadre.vue';
import HCadreTitrer from './HCadreTitrer.vue';
import PubVCadre from './PubVCadre.vue';
import VCadre from './VCadre.vue';
import VCadreInterne from './VCadreInterne.vue';



export default {
  components: { VCadre, HCadre, ArticleBox, VCadreInterne, HCadreTitrer, PubVCadre, MaterialIcon, TitreBloc,},

    data(){
        return {
            une:{
                image:'images/pub/a4.jpg',
                titre:'10 minutes de bruit avec des ustensile de cuisines appliqué par les Sénégalais',
                text:"lougaré tv est une télévison moderne qui repond au besoin des senegalais sur tous les plan important de ce pays qui est entrain d'être detruit par les medias populaire.",
                collection:{
                    nom:"Politique",
                    color:'bg-red-700'
                }
            },
            second:{
                 image:'images/pub/a5.jpg',
                titre:'Une bonne période de récolte au centre du Senegal',
                text:"Une bonne période de récolte au centre du Senegal",
                collection:{
                    nom:"Economie",
                    color:'bg-emerald-700'
                }

            },
            trois:{
                 image:'images/pub/a7.jpg',
                titre:'Sadio regale les reds de liverpool',
                text:"Une bonne période de récolte au centre du Senegal",
                collection:{
                    nom:"Economie",
                    color:'bg-emerald-700'
                }

            },
            quatre:{
                 image:'images/pub/a16.jpg',
                titre:'Les pecheur reclame l\'arret des bateaux chinois',
                text:"Les pecheur reclame l'arret des bateaux chinois",
                collection:{
                    nom:"Economie",
                    color:'bg-emerald-700'
                }

            },
           important: [
                {
                    priorite:'1',
                    image:'images/pub/a6.jpg',
                    titre:'Sadio met un but et améne les lions à la demi-final',
                    text:"",
                    collection:{
                        nom:"Sport",
                        color:'bg-red-700'
                    }
                },
                {
                    priorite:'2',
                    image:'images/pub/a17.jpg',
                    titre:"Affaire Serigne Assane Mbacké Khelcom : Le témoignage accabl",
                    text:"",
                    collection:{
                        nom:"Politique",
                        color:'bg-red-700'
                    }


                },
                // {
                //     priorite:'3',
                //     image:'images/msn/p_msn_3.jpeg',
                //     titre:'Revivez Votre émission Matinale Bet Set Du 16 Juin 2022 Invité ',
                //     text:"",
                //     collection:{
                //             nom:"Politique",
                //             color:'bg-red-700'
                //     }


                // },
                // {
                //     priorite:'4',
                //     image:'images/2.png',
                //     titre:'Revivez Votre émission Matinale Bet Set Du 13 Juin 2022 Invité ',
                //     text:"",
                //     collection:{
                //         nom:"Politique",
                //         color:'bg-red-700'
                //     }


                // },
                // {
                //     priorite:'3',
                //     image:'images/5.jpeg',
                //     titre:'Totalenergies Marketing Sénégal Met Sa Nouvelle Gamme De Lubrifiants Pure Sur Le Marché',
                //     text:""


                // },
                // {
                //     priorite:'4',
                //     image:'images/6.jpeg',
                //     titre:'Cheikh Footstyle Un Génie Du Ballon "sadio Mané Mako…na Sénégalais Yi Bayi Xel Ci Sama…',
                //     text:""


                // },
                // {
                //     priorite:'3',
                //     image:'images/pub4.jpeg',
                //     titre:'[ultimatum] Nouvelles Révélations Dans La Coalition De Pape Djibril Fall (boubacar Ndiaye)',
                //     text:""


                // },
                // {
                //     priorite:'4',
                //     image:'images/pub5.jpeg',
                //     titre:'Alioune Sarr, Ministre Du Tourisme Et Des Transports Aériens : “nous Avons Le Devoir Hi"',
                //     text:""


                // },

           ]
        };
    }
}
</script>

<style>

</style>
