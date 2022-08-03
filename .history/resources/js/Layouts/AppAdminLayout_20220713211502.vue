<template>
  <div>
      <app-admin-menu class="bg-primary-600 text-white" />
      <div class="flex">
          <div>
              <nav>
                <menu-vertical items="items"/>
                </nav>
          </div>
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
