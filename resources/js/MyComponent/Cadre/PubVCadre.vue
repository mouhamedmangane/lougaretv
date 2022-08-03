<template>
  <div :class="{'flex justify-center items-center   relative':true,'h-full':estDebout,'w-full':!estDebout}">

      <h3 class="absolute top-0 right-0 px-2 bg-red-600 text-xs text-white border" v-if="!masquerText">Pub</h3>
      <div class="h-full w-full">
        <img :src="src" :class="{'object-contain mx-auto':true,'h-full py-4':estDebout,'px-8 py-8':!estDebout}" alt="mjlk" />
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
