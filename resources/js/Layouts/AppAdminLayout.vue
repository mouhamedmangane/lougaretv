<template>
  <div class="h-screen ">
      <app-admin-menu class="bg-primary-700 text-white sticky top-0 z-20"  />
      <div class="flex relative z-10">
          <div class=" bg-red " >
              <nav class="">
                <menu-vertical :items="liens"  :activeRouter="activeRouter"/>
               </nav>
          </div>

          <div class="grow overflow-y-auto " style="height:calc(100vh - 48px);max-height:calc(100vh - 48px);">
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
                  icon:'description'
              },
              {
                  nom:'Pages',
                  url:'/lougare_npl/pages',
                  disable:true,
                  icon:'layers'
              },
              {
                  nom:'TV',
                  url:'/lougare_npl/programetv',
                  disable:true,
                  icon:'live_tv'
              },
              {
                  nom:'Publicité',
                  url:'/lougare_npl/publicite',
                  disable:true,
                  icon:'featured_video'
              },
              {
                  nom:'Cateogire',
                  url:'/lougare_npl/categorie',
                  disable:false,
                  icon:'category'
              },
              {
                  nom:'Redacteur',
                  url:'/lougare_npl/redacteur',
                  disable:false,
                  icon:'engineering'
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
    .text-masquer {
    clip: rect(1px,1px,1px,1px);
    -webkit-clip-path: inset(100%);
    clip-path: inset(100%);
    margin: 0;
    position: absolute!important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    word-wrap: normal!important;
    white-space: nowrap;
}
</style>
