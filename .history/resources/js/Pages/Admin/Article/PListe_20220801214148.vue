<template>
    <app-admin-layout class="bg-neutral-100">
        <admin-contained-box class="mx-2  bg-neutral-100 ">
            <!-- titre et toolbar -->
            <div class="pb-4 pt-4 flex justify-between items-center">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item txt="" icon="home" url="/lougare_npl/home" classItem="text-primary-600"/>
                        <breadcumb-item-final txt="Article" url="" class="text-neutral-600"/>
                    </breadcumb>
                </div>
                <div>
                    <search-input v-model="search"/>
                </div>
            </div>
        </admin-contained-box>

        <!-- toolbar -->
        <div class="bg-neutral-100 mx-4 px-4 border w-full" >
            <div class="flex justify-between border-y w-full py-2 ">
                <div class="flex" >

                    <simple-lien icon="add" txt="Nouveau"
                        class="bg-primary-600 text-sm text-white mx-2"
                        url="/lougare_npl/article/create"
                        type="submit" />

                    <simple-button icon="save" txt="Enregistrer"
                        class="enabled:bg-green-600 enabled:text-white  disabled:bg-transparent disabled:text-neutral-400 text-sm  mx-2"
                        @click="save()"
                        :disabled='!hasModification'
                        type="submit" />



                </div>
                <div class="" v-if="operation.lentgh">
                    <div class="flex justify-end mr-8">
                        <spinner />
                    </div>
                </div>

            </div>
        </div>

        <admin-contained-box class=" bg-neutral-100  mt-4 mx-2 2xl:flex  text-sm"   >
            <!-- content -->
            <ala-une-admin :alaunes="alaunes" @dropCase="dropCase($event)" class="self-start" @delAlaune="delAlaune($event)" />
            <div  class="bg-white p-4" >
                <table class="table-auto w-full">
                    <thead>
                        <tr class="border-b">
                            <th v-for="colName in columns" class="text-left p-4">
                                {{colName}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item, index) in liste" :key="item.article_id" class="py-1 even:bg-neutral-200 group"  >
                            <td class="p-4 min-w-24 w-24">
                                A-{{item.article_id}}
                            </td>
                            <td class="p-4">
                                <div class="">{{item.redacteur}}</div>
                            </td>
                            <td class="p-4"
                                draggable="true"
                                @dragstart="dragStart($event,index)"
                                @dragend="dragEnd($event,index)"
                                 >
                                <a class="flex items-center hover:underline hover:text-primary-600" :href="'/lougare_npl/article/'+item.article_id+'/edit'">
                                    <img :src="'/images_articles/'+item.article_id+'/'+item.image" alt="" class="w-12 h-12 rounded-full mr-2">
                                    <span v-bind:title="item.txt">
                                        <text-limit :text="item.txt"  maxLength="90" />
                                    </span>
                                </a>
                            </td>

                            <td class="p-4 w-min-[8rem]">
                                <div class="">{{item.date_fc}}</div>
                            </td>
                            <td class="p-4"> {{ item.date_fu}} </td>

                            <td class="text-center   ">
                                <span class="relative flex justify-center">
                                    <material-icon nom="more_horiz" class="group-hover:hidden pr-2"/>
                                    <span class="flex hidden group-hover:flex shadow-lg border bg-neutral-200 border-primary-600">
                                        <simple-button class="text-red  p-1 " icon="delete" @click="deleteRedacteur(item)"/>
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
        <div class="my-10 py-10" >

        </div>
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
import AlaUneAdmin from '@/MyComponent/Article/AlaUneAdmin.vue'
import TextLimit from '@/MyComponent/Text/TextLimit.vue'
import Spinner from '@/MyComponent/Spinner/Spinner.vue'

export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, BreadcumbItem, SearchInput, SimpleLien, MaterialIcon, AlaUneAdmin, TextLimit, Spinner},
  props:['alaunesInit'],
  data(){
      return {
          search:"",
          alaunes:this.alaunesInit,
          operation:'',
          message:'',
          hasModification:false,
          dragIndex:-1,
          page:1,
          limit:25,
          liste:[],
          columns:['N??','R??dacteur','Titre','D.Cr??e','D.Modifi??','Action'],
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
          let params='?page='+this.page+'&limit='+this.limit;
          axios.get('/lougare_npl/article/data/'+this.search+params)
          .then(res=>{
                console.log(res.data);

              if(res.data.status){
                  this.liste=res.data.data;
              }

          }).catch(err=>{
              console.log(err);
          });
      },
      deleteRedacteur(item){
          let ok=confirm("Etes vous s??re de vouloir supprimer la article : N??"+item.article_id);
          if(ok){
            axios.delete('/lougare_npl/article/'+item.article_id)
            .then(res=>{
                if(res.data.status){
                    this.getListe();
                }
            }).catch(err=>{

            });
          }

      },
      dragStart(event,i){
          this.dragIndex=i;
      },
      dragEnd(event){
          this.dragIndex=-1;
      },
      dropCase(event){
          if(event.dragIndex>-1){
              this.alaunes[event.dropIndex]=this.alaunes[event.dragIndex];
              this.alaunes[event.dragIndex]=null;
              this.hasModification=true;
          }
          else if(this.dragIndex>-1){
              this.alaunes[event.dropIndex]=this.liste[this.dragIndex];
              this.hasModification=true;
          }
      },
      delAlaune(event){
          if(event.index>=0){
              this.alaunes[event.index]=null;
          }
      },
      onQuit(e){
          if(this.hasModification){
               e.preventDefault();
                var confirmationMessage = "\o/";

                    e.returnValue = confirmationMessage;     // Gecko, Trident, Chrome 34+
                    return confirmationMessage;
          }
      },
      dataAlaune(){
          return  this.alaunes.map(function(x){
            if(x!=null)
                return x.article_id;
            return -1;
          });
      },
      save(){
          this.hasModification=true;
          axios.post('/lougare_npl/articles/storeAlaune',{'articleId':this.dataAlaune()})
          .then(res=>{
              if(res.status==true){
                  this.message="";
                  this.hasModification=false;
              }
              else{
                  this.message=res.message;
              }
          }).catch(err=>{
              alert("Impossible d'envoy??r les donn??es, Verifier votre connexion ");
          });

      }
  },
  mounted(){
      console.log('mouned');
      window.addEventListener('beforeunload',this.onQuit);
  }

}
</script>

<style>

</style>
