<template>
  <div class="m-4 h-full">
      <!-- <h3 class="text-center my-2" v-if="!masquerText">Publicité</h3> -->
      <img :src="src" class="h-full w-full object-cover mx-auto" alt="mjlk" />
  </div>
</template>

<script>
export default {
    props:['src','masquerText']
}
</script>

<style>

</style>
