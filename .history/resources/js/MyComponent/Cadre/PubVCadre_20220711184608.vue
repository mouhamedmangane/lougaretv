<template>
  <div :class="{'p-4  relative':true,'h-full':estDebout,'w-full':!estDebout}">

      <h3 class="absolute top-0 left-0" v-if="!masquerText">Publicité</h3>
      <img :src="src" :class="{'object-content mx-auto':true,'h-full':estDebout,'px-12':!estDebout}" alt="mjlk" />
  </div>
</template>

<script>
export default {
    props:['src','masquerText','estDebout']
}
</script>

<style>

</style>
