<template>
   <li class=" py-2 px-3 font-medium text-[18px] hover:underline">
        <span href="" class="flex items-center">
            <span> Plus </span>
            <material-icon nom="expand_more" class="leading-4" />
        </span>
        <div>
            <slot></slot>
        </div>
  </li>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },

}
</script>

<style>

</style>
