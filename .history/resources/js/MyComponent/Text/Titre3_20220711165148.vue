<template>
  <h3 :class="[classText,'']">
      <slot></slot>
  </h3>
</template>

<script>
const classTextConst={
    'pm':'text-sm  leading-5 font-medium  ',
    'mm':'text-xl leading-[1.2] font-medium',
    'gm':'text-[32px] leading-[1.2] font-bold'
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
