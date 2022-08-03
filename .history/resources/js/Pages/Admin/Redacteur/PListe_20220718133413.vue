<template>
    <app-admin-layout class="bg-neutral-100">
        <admin-contained-box class="mx-2 mt-4 bg-neutral-100 ">
            <!-- titre et toolbar -->
            <div class="py-4 mt-3 flex justify-between">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item txt="" icon="home" url="/lougare_npl/home" classItem="text-primary-600"/>
                        <breadcumb-item-final txt="Redacteur" url="" class="text-neutral-600"/>
                    </breadcumb>
                </div>
                <div>
                    <search-input v-model="search"/>
                </div>
            </div>
        </admin-contained-box>

        <!-- toolbar -->
        <div class="bg-neutral-100 mx-4 px-4 border" >
            <div class="flex justify between border-y w-full py-2 ">
                <div class="flex" >
                    <simple-lien icon="save" txt="Nouveau"
                    class="bg-primary-600 text-sm text-white mx-2"
                    url="/lougare_npl/redacteur/create"
                    type="submit" />
                </div>
                <div class="flex justify-end">

                </div>
            </div>
        </div>

        <admin-contained-box class=" mt-4 mx-2"  >
            <!-- content -->
            <div  class="bg-white p-4" >
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th v-for="colName in columns" class="text-left p-4">
                                {{colName}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in liste" :key="item.id" class="py-1 even:bg-neutral-200 group">
                            <td class="p-4">
                                <div class="w-12 h-12 rounded-full">
                                    <img :src="'/images/redacteurs/'+item.image" alt="">
                                </div>
                            </td>
                            <td class="p-4">
                                <div class="">{{item.name}}</div>
                            </td>
                            <td class="p-4">
                                <div class="">{{item.email}}</div>
                            </td>
                            <td class="p-4"> {{ item.date_f}} </td>
                            <td class="p-4">
                                <div class="  border text-center py-1"
                                     :style="{'background-color':getColor(item.couleur_fond,'white'),'color':getColor(item.couleur_txt,'black')}"
                                    >{{item.id}}
                                </div>
                            </td>
                            <td class="text-center  2xl:w-48 w-32 ">
                                <span class="relative flex justify-center">
                                    <material-icon nom="more_horiz" class="group-hover:hidden pr-2"/>
                                    <span class="flex hidden group-hover:flex shadow-lg border bg-neutral-200 border-primary-600">
                                        <simple-button class="text-red mr-1 p-1 px-1" icon="delete" @click="deleteRedacteur(item.id)"/>
                                        <simple-lien class="text-red p-1 px-1" icon="edit" :url="'/lougare_npl/redacteur/'+item.id+'/edit'"/>
                                    </span>
                                </span>
                            </td>
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
import BreadcumbItem from '@/MyComponent/Breadcumb/BreadcumbItem.vue'
import axios from 'axios'
import SearchInput from '@/MyComponent/Input/SearchInput.vue'
import SimpleLien from '@/MyComponent/Lien/SimpleLien.vue'
import MaterialIcon from '@/MyComponent/Icons/MaterialIcon.vue'

export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, BreadcumbItem, SearchInput, SimpleLien, MaterialIcon},
  props:['redacteur'],
  data(){
      return {
          search:"",
          liste:[],
          columns:['Image','Nom','Email','Date','Action'],
      }
  },
  created(){
      this.getListe();
  },
  watch:{
      search(newSearch,olSearch){
          if(newSearch!= olSearch)
            this.getListe();
      }
  },
  methods:{
      getColor(couleur,defaultColor){
          return (couleur)?couleur:defaultColor;
      },
      getListe(){
          console.log('eeeeeeeeeeeeeeee');
          axios.get('/lougare_npl/redacteur/data/'+this.search)
          .then(res=>{
              if(res.data.status){
                  this.liste=res.data.data;
                  console.log(this);
              }

          }).catch(err=>{

          });
      },
      deleteRedacteur(id){
          let ok=confirm("Etes vous sûre de vouloir supprimer la redacteur : "+id.toUpperCase());
          if(ok){
            axios.delete('/lougare_npl/redacteur/'+id)
            .then(res=>{
                if(res.data.status){
                    this.getListe();
                }
            }).catch(err=>{

            });
          }

      }
  },

}
</script>

<style>

</style>
