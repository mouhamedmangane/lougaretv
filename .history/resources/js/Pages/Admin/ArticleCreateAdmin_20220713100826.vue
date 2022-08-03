<template>
  <app-admin-layout>
      <admin-contained-box>
        <div class="py-4 flex">
            <div class=" ">
                <breadcumb>
                    <breadcum-item url='lougare_npl/article' txt='Article'/>
                    <breadcumb-item-final txt="Nouveau Article"/>
                </breadcumb>
                <div>
                    <simple-button icon="save" txt="Enregistrer" class="bg-blue-600 text-white" />
                    <simple-button icon="save" txt="Annuler" class="text-blue-700" />
                </div>
            </div>
            <div>

            </div>
        </div>
      </admin-contained-box>
  </app-admin-layout>
</template>

<script>
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import BreadcumItem from '@/MyComponent/Breadcumb/BreadcumItem.vue'
import BreadcumbItemFinal from '@/MyComponent/Breadcumb/BreadcumbItemFinal.vue'
import MaterialIcon from '@/MyComponent/Icons/MaterialIcon.vue'
import SimpleButton from '@/MyComponent/Input/SimpleButton.vue'
export default {
  components: { AppAdminLayout, AdminContainedBox, BreadcumItem, BreadcumbItemFinal, MaterialIcon, SimpleButton },

}
</script>

<style>

</style>
