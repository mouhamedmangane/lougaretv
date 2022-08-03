<template>
  <div>
      <app-admin-menu />
      <div>
          <slot></slot>
      </div>
  </div>
</template>

<script>
import AppAdminMenu from '@/MyComponent/Menu/AppAdminMenu.vue'

export default {
  components: { AppAdminMenu },
}
</script>

<style>

</style>
