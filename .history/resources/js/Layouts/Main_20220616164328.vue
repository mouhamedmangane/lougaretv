<template>
  <div>
    <app-menu/>
    <div>
       <slot></slot>
    </div>
  </div>
</template>

<script>
import AppMenu from '@/MyComponent/Menu/AppMenu.vue'
export default {
  components: { AppMenu },

}
</script>

<style>

</style>
