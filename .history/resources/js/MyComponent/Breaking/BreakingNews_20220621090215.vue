<template>
    <div class="bg-red-600 text-white py-4">
        <container-box class="flex justify-between">
           <div class="grow flex">
                <div>Breaking News</div>
                <div class="border-l- border-white mx-4"></div>
                <div> Test information breaking est tres coule </div>
           </div>
           <div class="grow-0 flex">
               <button class="">
                   <material-icon nom="close"/>
               </button>
           </div>
        </container-box>
    </div>
</template>

<script>
import ContainerBox from '../Box/ContainerBox.vue'
export default {
  components: { ContainerBox },

}
</script>

<style>

</style>
