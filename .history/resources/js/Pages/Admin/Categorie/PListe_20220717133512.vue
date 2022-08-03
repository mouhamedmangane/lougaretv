<template>
    <app-admin-layout>
        <admin-contained-box class="mx-4 mt-4 bg-neutral-100 border">
            <!-- titre et toolbar -->
            <div class="py-4 mt-3 flex">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item-final txt="Categorie" class="text-primary-600"/>
                    </breadcumb>
                </div>
                <div>

                </div>
            </div>
        </admin-contained-box>

        <!-- toolbar -->
        <div class="bg-neutral-100 mx-4 px-4 border">
            <div class="flex justify between border-y w-full py-2 ">
                <div class="flex">
                    <simple-button icon="save" txt="Nouveau" class="bg-neutral-600 text-sm text-white mx-2"  />
                </div>
                <div class="flex justify-end">

                </div>
            </div>
        </div>

        <admin-contained-box class="border mt-4 mx-4 bg-neutral-100 ">
            <!-- content -->
            <div  >
                <categorie-create  :categorie="categorie"/>
            </div>
            <div>
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
export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, BreadcumbItemFinal, SimpleButton, CategorieCreate},
  props:['list','categorie'],
}
</script>

<style>

</style>
