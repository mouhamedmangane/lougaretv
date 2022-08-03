<template>
  <div :class="{'m-4 h-full w-full':true,'h-full':esDebout,'w-full':!estDebout}">
      <!-- <h3 class="text-center my-2" v-if="!masquerText">Publicité</h3> -->
      <img :src="src" class=" w-full h-full  object-cover mx-auto" alt="mjlk" />
  </div>
</template>

<script>
export default {
    props:['src','masquerText','estDebout']
}
</script>

<style>

</style>
