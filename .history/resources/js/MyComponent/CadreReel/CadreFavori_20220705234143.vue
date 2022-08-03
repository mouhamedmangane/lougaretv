<template>
<container-box>
    <div>
        <titre-bloc>
            <h2>Société</h2>
        </titre-bloc>
    </div>
    <div class="grid grid-cols-12 gap-4">
        <v-cadre  :pub="pubs[0]" textSize="mm" imageSize="mmp" class="bg-white shadow row-span-full col-span-4" :tabuler="true" />

        <h-cadre v-for="pub in pubs" :pub="pub" textSize="mm" imageSize="mmp" class="bg-white shadow ci"  />
    </div>
</container-box>


</template>

<script>
import ContainerBox from '../Box/ContainerBox.vue';
import HCadre from '../Cadre/HCadre.vue';
import VCadre from '../Cadre/VCadre.vue';
import TitreBloc from '../Text/TitreBloc.vue';
export default {
  components: { VCadre, TitreBloc, ContainerBox, HCadre },
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
