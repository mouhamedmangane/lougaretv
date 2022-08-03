<template>
    <app-admin-layout class="bg-neutral-100">
        <admin-contained-box class="mx-4 mt-4 bg-neutral-100 border">
            <!-- titre et toolbar -->
            <div class="py-4 mt-3 flex justify-between">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item txt="Categorie" url="" class="text-primary-600"/>
                        <breadcumb-item-final txt="Nouveau" class=""/>
                    </breadcumb>
                </div>
                <div>
                    <search-input/>
                </div>
            </div>
        </admin-contained-box>

        <!-- toolbar -->
        <div class="bg-neutral-100 mx-4 px-4 border" >
            <div class="flex justify between border-y w-full py-2 ">
                <div class="flex" >
                    <simple-lien icon="save" txt="Nouveau"
                    class="bg-primary-600 text-sm text-white mx-2"
                    url="/lougare_npl/create"
                    type="submit" />
                </div>
                <div class="flex justify-end">

                </div>
            </div>
        </div>

        <admin-contained-box class="border mt-4 mx-4 yyy"  >
            <!-- content -->
            <div  class="bg-white" >
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Couleur text</th>
                            <th>Couleur_fond</th>
                            <th>Date</th>
                            <th>Preview</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in liste" :key="item.id">
                            <td>{{id}}</td>
                            <td class="w-8 h-8 border rounded-full" :style="{'background-color':getColor(item.couleur_txt,'black')}"></td>
                            <td class="w-8 h-8 border rounded-full" :style="{'background-color':getColor(item.couleur_fond,'white')}"></td>
                            <td>{{item.date}}</td>
                            <td>
                                <div class="px-3 w-8 h-8 border w-8 h-8 border"
                                     :style="{'background-color':getColor(item.couleur_fond,'white'),'color':getColor(item.couleur_txt,'black')}"
                                    >{{item.id}}
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div >
            </div>
        </admin-contained-box>

    </app-admin-layout>
</template>

<script>
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import Breadcumb from '@/MyComponent/Breadcumb/Breadcumb.vue'
import BreadcumbItemFinal from '@/MyComponent/Breadcumb/BreadcumbItemFinal.vue'
import SimpleButton from '@/MyComponent/Input/SimpleButton.vue'
import CategorieCreate from '@/MyComponent/Categorie/CategorieCreate.vue'
import BreadcumbItem from '@/MyComponent/Breadcumb/BreadcumbItem.vue'
import { createApp } from "vue";
import axios from 'axios'

export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, CategorieCreate, BreadcumbItem},
  props:['initList','categorie'],
  data(){
      return {
          search:"",
          liste:[],
      }
  },

  watch:{
      search(newSearch,olSearch){
          this.getListe();
      }
  },
  methods:{
      getColor(couleur,defaultColor){
          return (couleur)?couleur:defaultColor;
      },
      getListe(){
          axios.get('/lougare_npl/categorie/data')
          .then(res=>{
              if(res.data.status){
                  this.liste=this.res.data.data;
              }

          }).catch(err=>{

          });
      }
  },

}
</script>

<style>

</style>
