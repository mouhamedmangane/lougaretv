<template>
    <div :class="{'py-3':active,'h-0 invisible':!active,'bg-neutral-700 text-white  text-xl box-border transition-all ':true}"  >
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
  props:['active'],
  emits:['clickClose'],
  methods:{
      close(){
          this.$emit('clickClose');
      }
  }
}
</script>

<style>

</style>
