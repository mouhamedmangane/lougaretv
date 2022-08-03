<template>


          <div class="flex justify-center py-4 ">
              <div class="border">
                  <div v-for="(gcolorIndex,gcolor) in colors" class="flex">
                    <button v-for="color in gcolorIndex"
                            @click="onClickClose(color)"
                            class="w-4 h-4"
                            :style="{background:color}" >
                    </button>
                </div>
              </div>

          </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'

import COLORS from 'tailwindcss/colors'

export default {
  components: { MaterialIcon },
  emits:['clickClose'],
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
