<template>
  <h2 class="text-masquer">Lougaré Tv, Lien de la page d'accueil</h2>
  <img src="images/lougarelogo.png" alt="" :class="logoClass+' transition-all'" v-show="!inverse">
  <img src="images/lougarelogoV.png" alt="" :class="logoClass+' transition-all'" v-show="inverse">
</template>

<script>
export default {
    props:['logoClass','inverse']
}
</script>

<style>

</style>
