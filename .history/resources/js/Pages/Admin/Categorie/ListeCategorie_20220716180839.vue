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

            <div class="flex justify between">
                <div class="flex">
                                <simple-button icon="save" txt="Titre" class="bg-neutral-600 text-sm text-white mx-2" @click="addNewElement('draw_titre')" />

                </div>
            </div>
        </admin-contained-box>

    </app-admin-layout>
</template>

<script>
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import Breadcumb from '@/MyComponent/Breadcumb/Breadcumb.vue'
export default {
  components: { AppAdminLayout, AdminContainedBox, Breadcumb },

}
</script>

<style>

</style>
