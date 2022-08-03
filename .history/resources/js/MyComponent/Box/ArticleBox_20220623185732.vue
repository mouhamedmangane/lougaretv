<template>
  <div :class="{'p-5 bg-white shadow- ':true,'mb-7':!estColler,'mb-px':estColler}">
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
