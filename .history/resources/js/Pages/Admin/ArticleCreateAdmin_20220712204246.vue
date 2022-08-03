<template>
  <app-admin-layout>
      <admin-contained-box>
        <div class="py-4 flex">
            <div class="">
                <breadcumb>
                    <breadcum-item url='lougare_npl/article' nom='Article'/>
                    <breadcumb-item-final txt="Nouveau Article"/>
                </breadcumb>
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
export default {
  components: { AppAdminLayout, AdminContainedBox, BreadcumItem, BreadcumbItemFinal },

}
</script>

<style>

</style>
