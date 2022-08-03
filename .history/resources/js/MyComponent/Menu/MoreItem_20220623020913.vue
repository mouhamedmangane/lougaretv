<template>
   <span class="inline-block group py-2 px-3  hover:underline relative">
        <span href="" class="flex items-center">
            <span> Plus </span>
            <material-icon nom="expand_more" class="leading-4" />
        </span>
        <div :class="['absolute hidden group-hover:inline-block z-40',classDeroulante] ">
            <slot></slot>
        </div>
  </span>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
  props:['position'],
  computed:{
      classDeroulante(){
          if(this.position=="left"){
              return '-left-0 top-0';
          }
          else if(this.position=='right'){
              return '-right-0 top-0';
          }
          else if (this.position == "top"){
              return '-top-0 left-auto right-auto';
          }
          else{
              return 'left-0 top-full';
          }
      }
  }

}
</script>

<style>

</style>
