<template>
  <div class="w-full py-2">
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
