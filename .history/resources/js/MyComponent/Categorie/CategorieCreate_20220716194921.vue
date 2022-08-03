<template>
    <form action="">
        <div class="py-1">
            <label for="id">Nom</label>
            <input type="text" v-model="categorie.id">
        </div>
        <div class="py-1">
            <label for="">Nom</label>
            <input type="text" v-model="categorie.couleur_txt">
        </div>
        <div class="py-1">
            <choix-couleur name="couleur_fond" :value="categorie.couleur_fond"/>
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
