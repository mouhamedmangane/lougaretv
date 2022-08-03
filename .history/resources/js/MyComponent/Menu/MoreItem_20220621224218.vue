<template>
   <li class="flex items-center py-2 px-3 font-medium text-[18px] hover:underline">
        <span href="">
            <span> Plus </span>
            <material-icon nom="expand_more" class="leading-6" />
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
