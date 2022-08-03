<template>
  <div :class="{'flex justify-center items-center   relative':true,'h-full':estDebout,'w-full':!estDebout}">

      <h3 class="absolute top-0 left-4 px-2 bg-red-600 text-xs text-white border" v-if="!masquerText">Pub</h3>
      <div class="">
        <img :src="src" :class="{'object-content mx-auto':true,'h-full':estDebout,'px-12 py-8':!estDebout}" alt="mjlk" />
      </div>

  </div>
</template>

<script>
export default {
    props:['src','masquerText','estDebout']
}
</script>

<style>

</style>
