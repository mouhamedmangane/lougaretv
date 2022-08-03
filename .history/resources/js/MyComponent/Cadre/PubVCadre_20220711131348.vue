<template>
  <div :class="{'p-4 ':true,'h-full':estDebout,'w-full':!estDebout}">
      <!-- <h3 class="text-center my-2" v-if="!masquerText">Publicité</h3> -->
      <img :src="src" :class="{'object-cover mx-auto':true,'h-full':estDebout,'':!estDebout}" alt="mjlk" />
  </div>
</template>

<script>
export default {
    props:['src','masquerText','estDebout']
}
</script>

<style>

</style>
