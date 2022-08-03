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
    data(){
      return {
          liens:[
              {
                  nom:'Article',
                  url:'lougare_npl/article'
              },
              {
                  nom:'Pages',
                  url:'lougare_npl/pages'
              },
              {
                  nom:'Programme TV',
                  url:'lougare_npl/programetv'
              },
              {
                  nom:'Publicité',
                  url:'lougare_npl/publicite'
              },

          ]
      }
  },
}
</script>

<style>

</style>
