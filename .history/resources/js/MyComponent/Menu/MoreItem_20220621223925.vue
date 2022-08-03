<template>
   <li class="py-2 px-3 font-medium text-[18px] hover:underline">
        <a href="">
            Plus
            <material-icon nom="expand_more" />
        </a>
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
