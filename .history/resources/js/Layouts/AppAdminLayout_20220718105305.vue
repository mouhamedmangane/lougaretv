<template>
  <div>
      <app-admin-menu class="bg-neutral-800 text-white" />
      <div class="flex">
          <div class="ml-2 mt-2" >
              <nav class="bg-red">
                <menu-vertical :items="liens"  :activeRouter="activeRouter"/>
               </nav>
          </div>

          <div class="grow">
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
                  url:'/lougare_npl/article'
              },
              {
                  nom:'Pages',
                  url:'/lougare_npl/pages'
              },
              {
                  nom:'Programme TV',
                  url:'/lougare_npl/programetv'
              },
              {
                  nom:'Publicité',
                  url:'/lougare_npl/publicite'
              },
              {
                  nom:'Cateogire',
                  url:'/lougare_npl/categorie'
              },
              {
                  nom:'Redacteur',
                  url:'/lougare_npl/redacteur'
              },

          ]
      }
  },
  computed:{
      activeRouter(){
          console.log(window.location.pathname);
          return window.location.pathname;
      }
  }
}
</script>

<style>

</style>
