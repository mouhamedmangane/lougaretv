<template>
      <div class="fixed w-64  top-1/4 border shadow px-4" style="left:calc(50% - 8rem);">
          <div class="absolute right-1 top-2">
              <buttton>
                  <material-icon nom="close" />
              </buttton>
          </div>
          <div class="py-2 border-b">
              <h2 class="2xl"> Choix Couleur</h2>
          </div>
          <div class="flex justify-center py-4">
              <div>
                  <div v-for="(gcolorIndex,gcolor) in colors" class="flex">
                    <button v-for="color in gcolorIndex"
                            @click="onClickClose(color)"
                            class="w-4 h-4"
                            :style="{background:color}" >
                    </button>
                </div>
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
