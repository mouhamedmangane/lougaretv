<template>
  <app-admin-layout>
      <admin-contained-box>
          <!-- titre et toolbar -->
        <div class="py-4 flex">
            <div class=" ">
                <breadcumb class="text-2xl">
                    <breadcum-item url='lougare_npl/article' txt='Article'/>
                    <breadcumb-item-final txt="Nouveau Article" class="text-primary-600"/>
                </breadcumb>
                <div class="flex my-4">
                    <simple-button icon="save" txt="Enregistrer" class="bg-primary-600 text-white" />
                    <simple-button  txt="Annuler" class="text-primary-600" />
                </div>
            </div>
            <div>

            </div>
        </div>

        <!-- formulaire -->
        <div class="flex ">
            <div class="w-1/2 border">
                <div>
                    <input type="text" v-model="titre" placeholder="titre" class="border w-full py-2">
                </div>
                <div>
                    <textarea name="" row="4">
                    </textarea>
                </div>
            </div>

        </div>
      </admin-contained-box>

  </app-admin-layout>
</template>

<script >
import AppAdminLayout from '@/Layouts/AppAdminLayout.vue'
import AdminContainedBox from '@/MyComponent/Box/AdminContainedBox.vue'
import BreadcumItem from '@/MyComponent/Breadcumb/BreadcumItem.vue'
import BreadcumbItemFinal from '@/MyComponent/Breadcumb/BreadcumbItemFinal.vue'
import MaterialIcon from '@/MyComponent/Icons/MaterialIcon.vue'
import SimpleButton from '@/MyComponent/Input/SimpleButton.vue'


export default {
  components: { AppAdminLayout, AdminContainedBox, BreadcumItem, BreadcumbItemFinal, MaterialIcon, SimpleButton },
  props:{
      titre:String,
  }
}
</script>

<style>

</style>
