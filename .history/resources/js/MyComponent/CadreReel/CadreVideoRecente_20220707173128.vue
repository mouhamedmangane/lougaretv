<template>
    <div class="bg-black  text-white pt-6 pb-12">
        <container-box class="">
            <div class="py-4">
                <h2 class="text-2xl text-center">LES VIDEOS DU MOMENT</h2>
            </div>
            <div class="grid grid-cols-12 grid-rows-4 gap-8">
                <div class="col-span-9 row-start-1 row-span-full">
                    <iframe  width="100%"
                            class="h-full"
                            src="https://www.youtube.com/embed/w_LsYN9aEww"
                            title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <article-box espace="0" class="col-span-3  col-start-10 row-span-1 col-span-3 row-span-1 text-white "  v-for="pub in pubs"  >
                    <h-cadre-titrer :inverser="true" :pub="pub" :tabuler="true" textSize='pm' imageSize="pm" limitTitre="76" :disableParagraphe="true"/>
                </article-box>
            </div>
        </container-box>
    </div>
</template>

<script>
import ArticleBox from '../Box/ArticleBox.vue';
import ContainerBox from '../Box/ContainerBox.vue';
import HCadreTitrer from '../Cadre/HCadreTitrer.vue';
export default {
  components: { ArticleBox, HCadreTitrer, ContainerBox },
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
