<template>
  <button class="py-1">
      <span v-if="icon">
          <material-icon :nom="icon">/
      </span>
      <span>{{txt}}</span>
  </button>
</template>

<script>
export default {
    props:['txt','icon']
}
</script>

<style>

</style>
