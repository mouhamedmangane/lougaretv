<template>
       <div class="flex justify-between items-center py-4  mt-1 ">
        <div class="flex items-center">
            <titre-bloc class="border-rsdfsded-700  " >
                <h2 class="m-0 leading-none">A la Une  </h2>
            </titre-bloc>
            <material-icon nom="chevron_right" />
            <div class="text-neutral-500 "> Rubrique favorie</div>
        </div>
        <div class="flex text-neutral-500">
            <span class="mr-3">Jeudi 7 juil 2022</span>
             <material-icon nom="cloud" type="outlined" />

        </div>

    </div>
  <div class="grid grid-cols-12 gap-5 z-10  2xl:auto-rows-[minmax(105px, 105px)] " style="">
        <v-cadre-interne textSize="gm" :pub="une" class=" row-start-1 col-span-7 row-span-6  text-white  transition-all shadow-md " :tabuler="true"  imageSize="gm" :interne="true" >
            <div class="  pl-4 pr-31 text-sm py-4">
                 <h4 class="uppercase text-neutral-700  pb-2">Sur le même sujet</h4>
                 <ul>
                     <li class="pb-2">Sonko et adji sarr</li>
                     <li class="pb-2">Pastef bloqué pour les elections locales</li>
                 </ul>
             </div>
        </v-cadre-interne>

         <h-cadre textSize='mm' imageSize="mm" :pub="trois" limitTitre="48" limitParagraphe="116"  class="col-start-8 col-span-6 row-span-2  hover:m-1  transition-all" :activeInfo="false"  />
         <h-cadre textSize='mm' imageSize="mm" :pub="second" limitTitre="48" limitParagraphe="116"  class=" col-start-8 col-span-6 row-span-2  hover:m-1  transition-all" :activeInfo="false"  />
         <h-cadre textSize='mm' imageSize="mm" :pub="quatre" limitTitre="48" limitParagraphe="116"  class=" col-start-8 col-span-6 row-span-2  hover:m-1  transition-all" :interne="true"  />
         <!-- <h-cadre textSize='mm' imageSize="gm" :pub="cinq" limitTitre="48" limitParagraphe="116"  class=" col-start-10 col-span-3 row-span-2 shadow-md hover:m-1  transition-all" :interne="true"  /> -->
         <!-- <article-box espace="2" class=" col-start-8 col-span-3  row-span-1   hover:shadow-lg shadow  transition-all bg-white text-black"  v-for="pub in important"  >
            <h-cadre-titrer :pub="pub"  textSize='pm' imageSize="pm" limitTitre="76" class="" />
         </article-box> -->
                  <!-- <v-cadre-interne textSize='mm' imageSize="gm" :pub="six" limitTitre="48" limitParagraphe="116"  class=" col-start-10 col-span-3 row-span-2 shadow-md hover:m-1 row-start-5  transition-all" :interne="true"  /> -->

        <!-- <div class="col-start-8 col-span-5 row-span-2  row-start-5 bg-neutral-100 text-neutral-6OO border">
                <pub-v-cadre class="" src="images/testpub/v2.png" :estDebout="true"  :masquerText="false"   />
        </div> -->



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
  props:['alaunes'],
  data(){
    return {

    };
  },
  computed:{
      une(){
          return (this.alaunes[0])?this.alaunes[0]:this.createEmptyArticle();
      },
      trois(){
          return this.alaunes.slice(1,this.alaunes.length-1).map(function(x){
                  if(x) return x;
                  else return this.createEmptyArticle();
              });
      }
  },
  methods:{
      createEmptyArticle(){
          return
      }
  }
}
</script>

<style>

</style>
