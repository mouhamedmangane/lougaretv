<template>
    <app-admin-layout class="bg-neutral-100">
        <admin-contained-box class="mx-4 mt-4 bg-neutral-100 border">
            <!-- titre et toolbar -->
            <div class="py-4 mt-3 flex">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item txt="" icon="home" url="/lougare_npl/home" classItem="text-primary-600"/>
                        <breadcumb-item txt="Article" url="/lougare_npl/article" classItem="text-primary-600"/>
                        <breadcumb-item-final :txt="titre" class="text-neutral-600"/>
                    </breadcumb>
                </div>
                <div>

                </div>
            </div>
        </admin-contained-box>

        <!-- toolbar -->
        <div class="bg-neutral-100 mx-4 px-4 border" >
            <div class="flex justify between border-y w-full py-2 ">
                <div class="flex" >
                    <simple-button icon="save" txt="Enregistrerz"
                    class="bg-primary-600 text-sm text-white mx-2"
                    @click="onClickSave"
                     />
                     <simple-button icon="delete" txt="Supprimer" :disabled='(article.id)?false:"disabled"'
                    class="mx-2"
                    @click="onClickDelete"
                     />
                     <simple-lien icon="new" txt="Nouveau" url="/lougare_npl/article/create"
                     class="mx-2"
                    @click="onClickDelete"
                     />
                </div>
 
                <div class="flex justify-end">

                </div>
            </div>
        </div>

        <admin-contained-box class="border mt-4 yyy"  >
            <!-- content -->
            <div  class="" >
                <article-admin-create  :article="article"
                                       ref="formCreate"
                                       :categories="categories"
                                       :redacteurs="redacteurs"
                                       redirect="/lougare_npl/article"
                                       :mode="mode" />
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
import ArticleAdminCreate from '@/MyComponent/Article/ArticleAdminCreate.vue'

export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, BreadcumbItem, ArticleAdminCreate},
  props:['article','redacteurs','categories','mode'],
  computed:{
      titre(){
          return (this.mode=="create")? 'Nouveau':'N°'+this.article.id;
      }
  },

  methods:{
      onClickSave(){
          this.$refs.formCreate.submitForm();
      },
      deleteArticle(){
          let ok=confirm("Etes vous sûre de vouloir supprimer l'article: N°"+article.id.toUpperCase());
          if(ok){
                axios.delete('/lougare_npl/article/'+article.id)
                .then(res=>{
                    if(res.data.status){
                        window.location.href='/lougare_npl/article';
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
