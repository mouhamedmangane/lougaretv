<template>
  <div>
      <app-admin-menu class="bg-primary-600 text-white" />
      <div class="flex">
          <div class="ml-2 mt-3" >
              <nav class="bg-red">
                <menu-vertical :items="liens"/>
               </nav>
          </div>
          <div>
              <slot></slot>
          </div>

      </div>
  </div>
</template>

<script>
import AppAdminMenu from '@/MyComponent/Menu/AppAdminMenu.vue'
import MenuVertical from '@/MyComponent/Menu/MenuVertical.vue'

export default {
  components: { AppAdminMenu, MenuVertical },
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
