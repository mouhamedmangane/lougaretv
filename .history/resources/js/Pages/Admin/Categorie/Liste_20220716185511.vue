<template>
    <app-admin-layout>
        <admin-contained-box class="">
            <!-- titre et toolbar -->
            <div class="py-4 flex">
                <div class=" ">
                    <breadcumb class="text-2xl">
                        <breadcumb-item-final txt="Categorie" class="text-primary-600"/>
                    </breadcumb>
                    <div class="flex my-4">
                        <simple-button icon="save" txt="Enregistrer" class="bg-primary-600 text-white"  @click="valider()"/>
                        <simple-button  txt="Annuler" class="text-primary-600" />
                    </div>
                </div>
                <div>

                </div>
            </div>

            <!-- toolbar -->
            <div class="flex justify between">
                <div class="flex">
                    <simple-button icon="save" txt="Nouveau" class="bg-neutral-600 text-sm text-white mx-2"  />
                </div>
                <div class="flex justify-end">

                </div>
            </div>

            <!-- content -->
            <div>

            </div>
            <div>
                <create-categorie />
            </div>


        </admin-contained-box>

    </app-admin-layout>
</template>

<script>
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import Breadcumb from '@/MyComponent/Breadcumb/Breadcumb.vue'
import CreateCategorie from './CreateCategorie.vue'
export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb, CreateCategorie },
  props:['list'],
}
</script>

<style>

</style>
