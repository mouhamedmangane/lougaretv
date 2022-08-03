<template>
  <div class="flex bg-blue-600 text-white py-2 px-4">
    <div class="mr-2 p-1" v-for="item in items">{{item}}</div>
    <more-item >
        <ul>
            <li>Afrique</li>
            <li>International</li>
            <li>Fait Divers</li>
        </ul>
    </more-item>

    </div>
</template>

<script>
import { computed } from '@vue/runtime-core'
import MoreItem from './MoreItem.vue'
export default {
  components: { MoreItem },
  props:['taille'],
  data(){
      return {
          items:['Sport','Politique','Poeple','Religion','Société','Vidéo']
      }
  },
  computed:{
      itemApparent(){
          return this.items.subarray(0,this.taille);
      },
      itemMasquer(){
          return this.items.subarray(this.taille-1,this.items.length);
      }
  }

}
</script>

<style>

</style>
