<template>
      <div class="fixed w-64  top-1/4 border shadow px-4" style="left:calc(50% - 8rem);">
          <div class="absolute right-1 top-2">
              <buttton>
                  <material-icon nom="close" />
              </buttton>
            <div>

            </div>
      </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'

import COLORS from 'tailwindcss/colors'

export default {
  components: { MaterialIcon },
  props:['modalValue'],
  emits:['update:modelValue'],
  data(){
      return {
          colors:COLORS,
          color:''
      }
  },
  methods:{
      onClickClose(color){
          this.color=color;
          this.$emit('clickClose',{color:color});
      }
  }

}
</script>

<style>

</style>
