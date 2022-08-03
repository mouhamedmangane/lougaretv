<template>
    <div class="flex  items-center" >
    <form action="" class=" p-4 grid grid-cols-2 gap-4">

        <div class="col-start-1"><label for="id"  class="col-start-1" >Nom : </label></div>
        <div class="col-start-2"><input type="text" v-model="categorie.id" class="col-start-2"></div>

        <div class="col-start-1"><label for=""  >Choix Fond : </label></div>
        <div class="col-start-2"><choix-couleur name="couleur_fond" v-model:color="categorie.couleur_fond"/></div>

        <div class="col-start-1"><label for="" >Couleur txt : </label></div>
        <div class="col-start-2"><choix-couleur name="couleur_txt" v-model:color="categorie.couleur_txt" defaultColor="black" class="col-start-2" /></div>
    </form>
    <div class=""  >
        <div class="px-4 py-1 text-4xl ml-8" :style="{'background-color':categorie.couleur_fond,'color':categorie.couleur_txt}">
            {{categorie.id}}
        </div>
    </div>
    </div>
</template>

<script>
import ChoixCouleur from '@/MyComponent/Input/ChoixCouleur.vue'
import SimpleButton from '../Input/SimpleButton.vue'
export default {
  components: { ChoixCouleur, SimpleButton },
    props:['categorie',"idForm"],
    mounted(){

    }

}
</script>

<style>

</style>
