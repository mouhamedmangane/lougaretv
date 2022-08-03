<template>
    <app-admin-layout class="bg-neutral-100">
        <admin-contained-box class="mx-4 mt-4 bg-neutral-100 border">
            <!-- titre et toolbar -->
            <div class="py-4 mt-3 flex">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item txt="" icon="home" url="/lougare_npl/home" classItem="text-primary-600"/>
                        <breadcumb-item txt="Redacteur" url="/lougare_npl/redacteur" classItem="text-primary-600"/>
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
                </div>
                <div class="flex justify-end">

                </div>
            </div>
        </div>

        <admin-contained-box class="border mt-4 mx-4 yyy"  >
            <!-- content -->
            <div  class="bg-white shadow-md" >
                <redacteur-create  :redacteur="redacteur"  ref="formCreate" redirect="/lougare_npl/redacteur" :mode="mode" />
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
import RedacteurCreate from '@/MyComponent/Redacteur/RedacteurCreate.vue'
import BreadcumbItem from '@/MyComponent/Breadcumb/BreadcumbItem.vue'

export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, RedacteurCreate, BreadcumbItem},
  props:['redacteur','mode'],
  computed:{
      titre(){
          return (this.mode=="create")? 'Nouveau':this.redacteur.name;
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
