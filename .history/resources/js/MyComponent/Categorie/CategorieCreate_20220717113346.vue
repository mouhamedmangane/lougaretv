<template>
    <form action="">
        <div class="py-1 flex flex-col">
            <label for="id" class="" >Nom : </label>
            <input type="text" v-model="categorie.id">
        </div>
        <div class="py-1 flex flex-col">
            <label for="">ChoixFond</label>
            <choix-couleur name="couleur_fond" :value="categorie.couleur_fond"/>
        </div>
        <div class="py-1 flex flex-col">
            <label for="">Couleur txt</label>
            <choix-couleur name="couleur_txt" :value="categorie.couleur_txt" defaultColor="black" />
        </div>
    </form>
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
