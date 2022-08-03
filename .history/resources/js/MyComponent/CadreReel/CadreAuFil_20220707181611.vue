<template>
  <div>
    <div class="flex justify-between items-center pY-4  ">
        <div class="flex items-center">
            <titre-bloc class="border-teal-700">
                <h2 class="m-0">Au fil de l'actualité </h2>
            </titre-bloc>
            <material-icon nom="chevron_right" />
            <div class="text-neutral-500 "> informations recentes</div>
        </div>
        <div class="flex text-neutral-500">
            <!-- <span>Modifier</span>
            <material-icon nom="expand_more" /> -->

        </div>
    </div>
            <!-- <article-box><v-cadre imageSize="gmp" textSize="mm" paragrapheSize="gm" :pub="important[0]" /></article-box> -->

    <article-box espace="0" class="py-8 bg-white border-t"  v-for="pub in pubs">
        <h-cadre imageSize="mm" textSize="mm" paragrapheSize="gm" :pub="pub" />
    </article-box>


  </div>
</template>

<script>
import ArticleBox from '../Box/ArticleBox.vue';
import HCadre from '../Cadre/HCadre.vue';
import MaterialIcon from '../Icons/MaterialIcon.vue';
import TitreBloc from '../Text/TitreBloc.vue';
export default {
  components: { ArticleBox, HCadre, TitreBloc, MaterialIcon },
    data(){
        return {
            pubs:[
                 {
                    priorite:'1',
                    image:'images/msn/m_msn_2.jpeg',
                    titre:'Le Sénégal remporte  la coupe d\'afrique 2022',
                    text:"Apres un matche très tendu, le senegal fini de remporter sa première coupe d'afrique au tirage de penalty.",
                    infoShowType:'v',
                    infoSzie:'gp',
                    commentaire:20,
                    date:"il y'a 11mn"

                },
                {
                    priorite:'2',
                    image:'images/msn/m_msn_3.jpeg',
                    titre:"Tivaoune une ville religieuse",
                    text:"Tivaoune une ville religieuse du senegal, marqué par le Cheikh El hadj Malick SY qui etait un savant très connu",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:57,
                    date:"il y'a 1h"

                },
                {
                    priorite:'3',
                    image:'images/msn/m_msn_4.jpeg',
                    titre:'Une bonne période de récolte au centre du Senegal',
                    text:"La saison de pluies touche à sa fin, les agribulteurs recoltent leur produits d'une bonne saison avec des pluies abondante ",
                    infoShowType:'v',
                    infoSzie:'mp',
                    commentaire:10,
                    date:"il y'a 1h"
                },
                {
                    priorite:'4',
                    image:'images/msn/m_msn_1.jpeg',
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
