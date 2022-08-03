<template>
    <app-admin-layout class="bg-neutral-100">
        <admin-contained-box class="mx-4  bg-neutral-100 ">
            <!-- titre et toolbar -->
            <div class="pb-4 pt-1 mt-3 flex">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item txt="" icon="home" url="/lougare_npl/home" classItem="text-primary-600"/>
                        <breadcumb-item txt="Categorie" url="/lougare_npl/categorie" classItem="text-primary-600"/>
                        <breadcumb-item-final :txt="titre" class="text-neutral-600"/>
                    </breadcumb>
                </div>
                <div>

                </div>
            </div>
        </admin-contained-box>

        <!-- toolbar -->
        <div class="bg-neutral-100 mx-4 px-4 " >
            <div class="flex justify between border w-full py-2 ">
                <div class="flex" >
                    <simple-button icon="save" txt="Enregistrerz"
                    class="bg-primary-600 text-sm text-white mx-2"
                    @click="onClickSave"
                     />
                </div>
                <div class="flex justify-end">

                </div>
            </div>
        </div>

        <admin-contained-box class=" mt-4 mx-2 yyy"  >
            <!-- content -->
            <div  class="bg-white shadow-md " >
                    <div>
                        <categorie-create  :categorie="categorie"  ref="formCreate" redirect="/lougare_npl/categorie" :mode="mode" />
                    </div>
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

export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, CategorieCreate, BreadcumbItem},
  props:['categorie','mode'],
  computed:{
    titre(){
        return (this.mode=="create")? 'Nouveau':this.categorie.id;
    }
  },
  methods:{
      onClickSave(){
          this.$refs.formCreate.submitForm();
      }
  }

}
</script>

<style>

</style>
