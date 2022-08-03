<template>
  <div class="relative">
      <input type="text" v-model="thisModel" class="pl-2 pr-8" @change="onChange">
      <material-icon nom="search" class="absolute top-2 right-3" />
  </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
  data(){
      return{
          thisModel:this.modelValue,
      }
  },
    props:['modelValue'],
    emits:['update:modelValue'],
    methods:{
        onChange(e){
            console.log('ffsdf');
            this.$emit('update:modelValue', e.target.value)
        }
    }
}
</script>

<style>

</style>
