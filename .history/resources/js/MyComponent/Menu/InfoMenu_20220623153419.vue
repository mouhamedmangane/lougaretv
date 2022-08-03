<template>
  <div class="flex py-2 px-4 items-center">
    <div :class="{'mr-2 p-1':true,classActive:isActive(item)}" v-for="item in itemApparent">{{item}}</div>
    <more-item v-if="canMore" >
        <ul class="list-none text-black bg-white border">
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
  props:['taille','items',"activeItem",'classActive'],
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
  },
  methods:{
      isActive(item){
          return (this.activeItem)?this.activeItem==item:false;
      }
  }

}
</script>

<style>

</style>
