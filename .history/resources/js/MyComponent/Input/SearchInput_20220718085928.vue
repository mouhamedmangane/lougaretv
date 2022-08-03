<template>
  <div class="">
      <input type="text" v-model="modelValue" class="pl-2 pr-8">
      <material-icon nom="search"/>
  </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
    props:['modelValue'],
    emits
        MaterialIcon:['update:modalValue'],
    methods:{
        onChange(e){
            this.$emit('update:modalValue', e.target.value)
        }
    }
}
</script>

<style>

</style>
