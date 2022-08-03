<template>
  <div :class="{'p-4 bg-white shadow-md ':true,'mb-8':!estColler,'mb-px':estColler}">
      <slot></slot>
  </div>
</template>

<script>
export default {
    props:['estColler']
}
</script>

<style>

</style>
