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
                return staticClass+' p-'+espace;
            }
        }
    }
}
</script>

<style>
    .my-shadow{
        box-shadow: 0 0.03rem 0.09rem rgb(0 0 0 / 11%), 0 0.16rem 0.36rem rgb(0 0 0 / 13%);
    }
</style>
