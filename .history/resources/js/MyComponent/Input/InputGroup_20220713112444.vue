<template>
  <div class="w-full">
      <div v-if="labelText">
          {{labelText}}
      </div>
      <div>
          <slot></slot>
      </div>
  </div>
</template>

<script>
export default {
    props:['labelText']
}
</script>

<style>

</style>
