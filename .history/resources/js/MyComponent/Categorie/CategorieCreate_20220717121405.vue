<template>
    <div class="flex  items-center">
    <form action="" class="border">
        <div class="py-1 flex flex-col">
            <label for="id" class="" >Nom : </label>
            <input type="text" v-model="categorie.id">
        </div>
        <div class="py-1 flex ">
            <label for="">Choix Fond</label>
            <choix-couleur name="couleur_fond" v-model:color="categorie.couleur_fond"/>
        </div>
        <div class="py-1 flex ">
            <label for="">Couleur txt</label>
            <choix-couleur name="couleur_txt" v-model:color="categorie.couleur_txt" defaultColor="black" />
        </div>
    </form>
    <div class="">
        <div class="px-4 text-4xl ml-8" :style="{'background-color':categorie.couleur_fond,'color':categorie.couleur_txt}">
            Test Text
        </div>
    </div>
    </div>
</template>

<script>
import ChoixCouleur from '@/MyComponent/Input/ChoixCouleur.vue'
export default {
  components: { ChoixCouleur },
    props:['categorie']
}
</script>

<style>

</style>
