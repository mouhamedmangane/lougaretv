<template>
    <div class="fixed top-0 left-0 w-full h-full" style="background-color:rgba(0,0,0,0.5);">
      <div class="mx-auto  border shadow px-4 bg-white" style="margin-top:5%;">
        <div class="absolute right-1 top-2">
            <buttton @click="onClickClose">
                <material-icon nom="close" />
            </buttton>
        </div>
        <div class="text-2xl border-b">
            <material-icon :nom="iconTitre" v-if="iconTitre" />
            <span>{{titre}}</span>
        </div>
        <div class="">
            <slot></slot>
        </div>
      </div>
    </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'


export default {
  components: { MaterialIcon },
  props:['titre','iconTitre','modelValue'],
  emits:['update:modelValue'],
  methods:{
      onClickClose(){
          this.$emit('update:modelValue',false);
      }
  }

}
</script>

<style>

</style>
