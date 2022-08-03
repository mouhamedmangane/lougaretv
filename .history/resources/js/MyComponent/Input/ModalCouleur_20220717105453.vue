<template>
  <teleport to="body">
      <div class="fixed w-64  top[calc(50% - 8rem)] border shadow px-4">
          <div class="absolute right-1 top-2">
              <buttton>
                  <material-icon nom="close" />
              </buttton>
          </div>
          <div class="py-2 border-b">
              <h2 class="2xl"> Choix Couleur</h2>
          </div>
          <div></div>
      </div>
  </teleport>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'

import COLORS from 'tailwindcss/colors'

export default {
  components: { MaterialIcon },
  data(){
      return {
          colors:COLORS,
      }
  }

}
</script>

<style>

</style>
