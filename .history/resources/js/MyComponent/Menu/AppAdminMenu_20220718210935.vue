<template>
<admin-contained-box class=" border-b ">
  <div class="flex items-center justify-between ">
      <div class="flex items-center ">
          <div>
              <div class="font-bold text-xl">
                  LOUGARE TV
              </div>
          </div>

      </div>
      <div class="flex justify-end">
            <button class="w-8 h-8 rounded-full bg-orange-700 text-white ">
                <material-icon nom="person" class="pt-1"/>
            </button>
      </div>


  </div>
</admin-contained-box>
</template>

<script>
import AdminContainedBox from '../Box/AdminContainedBox.vue'
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon, AdminContainedBox },


}
</script>

<style>

</style>
