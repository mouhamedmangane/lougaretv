<template>
  <div class="flex bg-blue-600 text-white py-2 px-4">
    <div class="mr-2 p-1" v-for="item in itemApparent">{{item}}</div>
    <more-item v-if="canMore" >
        <ul class="list-none text-black">
            <li v-for="item in itemMasquer" class="p-2 px-3 shadow">{{item}}</li>
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
          return (this.taille)? this.items.slice(0,this.taille):this.items;
      },
      itemMasquer(){
          return (this.taille)?this.items.slice(this.taille-1,this.items.length):[];
      },
      canMore(){
          return this.taille && this.taille< this.items.length;
      }
  }

}
</script>

<style>

</style>
