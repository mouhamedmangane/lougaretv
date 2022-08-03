<template>
  <div class="h-screen ">
      <app-admin-menu class="bg-neutral-800 text-white sticky top-0 z-20"  />
      <div class="flex relative z-10">
          <div class=" bg-red w-16 fixed top-10 left-0" >
              <nav class="">
                <menu-vertical :items="liens"  :activeRouter="activeRouter"/>
               </nav>
          </div>

          <div class="mlw-full">
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
                  url:'/lougare_npl/article',
                  disable:false,
              },
              {
                  nom:'Pages',
                  url:'/lougare_npl/pages',
                  disable:true,
              },
              {
                  nom:'Programme TV',
                  url:'/lougare_npl/programetv',
                  disable:true,
              },
              {
                  nom:'Publicité',
                  url:'/lougare_npl/publicite',
                  disable:true,
              },
              {
                  nom:'Cateogire',
                  url:'/lougare_npl/categorie',
                  disable:false,
              },
              {
                  nom:'Redacteur',
                  url:'/lougare_npl/redacteur',
                  disable:false,
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
