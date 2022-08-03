<template>
  <p :class="[classText,'']">
      <slot></slot>
  </p>
</template>

<script>
const classTextConst={
    'pm':'text-sm',
    'mm':'text-base font-light',
    'gm':'text-lg  font-[300]'
}
export default {
    props:['size'],
    computed:{
        classText(){
            return classTextConst[this.size];
        }
    }
}
</script>

<style>

</style>
