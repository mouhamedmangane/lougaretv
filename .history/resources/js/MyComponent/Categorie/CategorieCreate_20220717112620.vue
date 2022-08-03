<template>
    <form action="">
        <div class="py-1 flex flex-col">
            <label for="id" class="" >Nom : </label>
            <input type="text" v-model="categorie.id">
        </div>
        <div class="py-1">
            <label for="">Nom</label>

        </div>
        <div class="py-1">
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
