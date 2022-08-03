<template>
  <div class="flex bg-blue-600 text-white py-2 px-4">
    <div class="mr-2 p-1" v-for="item in items">{{item}}</div>
    <more-item >
        <ul>
            <li>Afrique</li>
            <li>International</li>
            <li>Santé</li>
            <li>Santé</li>
        </ul>
    </more-item>

    </div>
</template>

<script>
import MoreItem from './MoreItem.vue'
export default {
  components: { MoreItem },
  data(){
      return {
          items:['Sport','Politique','Poeple','Religion','Société','Vidéo']
      }
  }

}
</script>

<style>

</style>
