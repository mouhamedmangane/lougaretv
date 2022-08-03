<template>
  <div class="flex items-center justify-between  h-12 pr-4 pl-3 ">
      <div class="flex items-center ">
          <div>
              <div class="flex  items-center text-lg">
                                    <!-- <div class="mr-4">Admin</div> -->

                  <app-logo logoClass="sm:h-6" :inverse="true" />
              </div>
          </div>

      </div>
      <div class="flex justify-end">
            <button class="w-8 h-8 rounded-full bg-orange-700 text-white ">
                <material-icon nom="person" class="pt-1"/>
            </button>
      </div>


  </div>
</template>

<script>
import AdminContainedBox from '../Box/AdminContainedBox.vue'
import MaterialIcon from '../Icons/MaterialIcon.vue'
import AppLogo from './AppLogo.vue'
export default {
  components: { MaterialIcon, AdminContainedBox, AppLogo },


}
</script>

<style>

</style>
