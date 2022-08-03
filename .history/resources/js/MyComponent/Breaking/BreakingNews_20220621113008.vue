<template>
    <div class="bg-red-700 text-white py-3 text-xl rounded-t-lg" v-show="actived">
        <container-box class="flex justify-between">
           <div class="grow flex items-center">
                <div class="font-bold">Breaking News</div>
                <div class="border-r border-white mx-4 h-full"></div>
                <div> Test information breaking est tres coule </div>
           </div>
           <div class="grow-0 flex items-center">
               <button class="" @click="close()">
                   <material-icon nom="close"/>
               </button>
           </div>
        </container-box>
    </div>
</template>

<script>
import ContainerBox from '../Box/ContainerBox.vue'
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { ContainerBox, MaterialIcon },
  props:{
      actived:{default:true},
  },
  methods:{
      close(){
          this.actived=false;
          return true;
      }
  }
}
</script>

<style>

</style>
