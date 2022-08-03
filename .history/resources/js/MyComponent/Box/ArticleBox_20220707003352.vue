<template>
  <div :class="myCssClass">
      <slot></slot>
  </div>
</template>

<script>
const staticClass="bg-white ";
export default {
    props:['estColler','espace'],
    computed:{
        myCssClass(){
            if(this.estColler){
                return staticClass;
            }
            else{
                let espace=(this.espace)?this.espace:0;
                return staticClass;//+' ;p-'+espace
            }
        }
    }
}
</script>

<style>

</style>
