<template>
<container-box>
    <div class="flex justify-between items-center mb-4">
        <div class="flex items-center">
            <titre-bloc class=" ">
                <h2 class="m-0">Société  </h2>
            </titre-bloc>
            <material-icon nom="chevron_right" />
            <div class="text-sm text-neutral-500 ml-4"> Rubrique favorie</div>
        </div>
        <div>
            Modifer
        </div>

    </div>
    <div class="grid grid-cols-12 grid-rows-2 gap-4">
        <v-cadre-interne  :pub="pubs[0]" textSize="mm" imageSize="gm" class=" row-span-full col-span-3"  :interne="true"/>
        <div class="col-span-3 row-span-full col-start-10">

        </div>
        <article-box espace="2" class="col-span-3  row-span-1 col-span-3 row-span-1 bg-white shadow p-2"  v-for="pub in pubs"  >
            <h-cadre-titrer :pub="pub"  textSize='pm' imageSize="pm" limitTitre="76" />
        </article-box>

    </div>
</container-box>


</template>

<script>
import ContainerBox from '../Box/ContainerBox.vue';
import HCadre from '../Cadre/HCadre.vue';
import HCadreTitrer from '../Cadre/HCadreTitrer.vue';
import VCadre from '../Cadre/VCadre.vue';
import VCadreInterne from '../Cadre/VCadreInterne.vue';
import MaterialIcon from '../Icons/MaterialIcon.vue';
import TitreBloc from '../Text/TitreBloc.vue';
export default {
  components: { VCadre, TitreBloc, ContainerBox, HCadre, HCadreTitrer, VCadreInterne, MaterialIcon },
    data(){
        return {
            pubs:[
                 {
                    priorite:'1',
                    image:'images/pub/a9.jpg',
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
            ]
        };
    }
}
</script>

<style>

</style>
