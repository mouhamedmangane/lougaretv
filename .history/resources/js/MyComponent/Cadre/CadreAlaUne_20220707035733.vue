<template>
       <div class="flex justify-between items-center py-4 border-t  ">
        <div class="flex items-center">
            <titre-bloc class=" ">
                <h2 class="m-0">A la Une  </h2>
            </titre-bloc>
            <material-icon nom="chevron_right" />
            <div class="text-neutral-500 "> Rubrique favorie</div>
        </div>
        <div class="flex text-neutral-500">
            <span class="mr-3">Jeudi 7 juil 2022</span>
             <material-icon nom="cloud " />

        </div>

    </div>
  <div class="grid grid-cols-12 gap-4 z-10 " style=" grid-auto-rows: minmax(112px, 128px);">
        <v-cadre-interne textSize="gm" :pub="une" class=" row-start-1 col-span-6 row-span-3 shadow-md " :tabuler="true" :interne="true" />

         <v-cadre-interne textSize='mm' imageSize="gm" :pub="trois" limitTitre="48" limitParagraphe="116"  class=" col-span-3 row-span-2 shadow-md" :interne="true"  />

        <div class="col-start-10 col-span-3 row-span-4  shadow-inner bg-neutral-200">
            <div class="bg-white text-xs px-2 py-1  text-neutral-700 shadow text-end text-neutral-400 bg-neutral-200">
                                        <pub-v-cadre class="" src="images/testpub/v1.png"  />

            </div>
        </div>
        <article-box espace="2" class="col-span-3  row-span-1  "  v-for="pub in important"  >
            <h-cadre-titrer :pub="pub"  textSize='pm' imageSize="pm" limitTitre="76" />
        </article-box>


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
                image:'images/msn/g_msn1.jpeg',
                titre:'10 minutes de bruit avec des ustensile de cuisines appliqu?? par les S??n??galais',
                text:"lougar?? tv est une t??l??vison moderne qui repond au besoin des senegalais sur tous les plan important de ce pays qui est entrain d'??tre detruit par les medias populaire.",
                collection:{
                    nom:"Politique",
                    color:'bg-red-700'
                }
            },
            second:{
                 image:'images/msn/m_msn_1.jpeg',
                titre:'Une bonne p??riode de r??colte au centre du Senegal',
                text:"Une bonne p??riode de r??colte au centre du Senegal",
                collection:{
                    nom:"Economie",
                    color:'bg-emerald-700'
                }

            },
            trois:{
                 image:'images/pub/a7.jpg',
                titre:'Sadio regale les reds de liverpool',
                text:"Une bonne p??riode de r??colte au centre du Senegal",
                collection:{
                    nom:"Economie",
                    color:'bg-emerald-700'
                }

            },
           important: [
                {
                    priorite:'1',
                    image:'images/msn/p_msn_1.jpeg',
                    titre:'Sadio met un but et am??ne les lions ?? la demi-final',
                    text:"",
                    collection:{
                        nom:"Sport",
                        color:'bg-red-700'
                    }
                },
                {
                    priorite:'2',
                    image:'images/pub3.jpg',
                    titre:"Affaire Serigne Assane Mback?? Khelcom : Le t??moignage accabl",
                    text:"",
                    collection:{
                        nom:"Politique",
                        color:'bg-red-700'
                    }


                },
                {
                    priorite:'3',
                    image:'images/pub1.png',
                    titre:'Revivez Votre ??mission Matinale Bet Set Du 16 Juin 2022 Invit?? ',
                    text:"",
                    collection:{
                            nom:"Politique",
                            color:'bg-red-700'
                    }


                },
                {
                    priorite:'4',
                    image:'images/2.png',
                    titre:'Revivez Votre ??mission Matinale Bet Set Du 13 Juin 2022 Invit?? ',
                    text:"",
                    collection:{
                        nom:"Politique",
                        color:'bg-red-700'
                    }


                },
                // {
                //     priorite:'3',
                //     image:'images/5.jpeg',
                //     titre:'Totalenergies Marketing S??n??gal Met Sa Nouvelle Gamme De Lubrifiants Pure Sur Le March??',
                //     text:""


                // },
                // {
                //     priorite:'4',
                //     image:'images/6.jpeg',
                //     titre:'Cheikh Footstyle Un G??nie Du Ballon "sadio Man?? Mako???na S??n??galais Yi Bayi Xel Ci Sama???',
                //     text:""


                // },
                // {
                //     priorite:'3',
                //     image:'images/pub4.jpeg',
                //     titre:'[ultimatum] Nouvelles R??v??lations Dans La Coalition De Pape Djibril Fall (boubacar Ndiaye)',
                //     text:""


                // },
                // {
                //     priorite:'4',
                //     image:'images/pub5.jpeg',
                //     titre:'Alioune Sarr, Ministre Du Tourisme Et Des Transports A??riens : ???nous Avons Le Devoir Hi"',
                //     text:""


                // },

           ]
        };
    }
}
</script>

<style>

</style>
