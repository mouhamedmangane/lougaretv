<template>
      <div class="fixed w-64  top-1/4 border shadow px-4" style="left:calc(50% - 8rem);">
          <div class="absolute right-1 top-2">
              <buttton @click="onClickClose">
                  <material-icon nom="close" />
              </buttton>
            <div class="">
                <material-icon :nom="iconTitre" v-if="iconTitre" />
                <span>{{titre}}</span>
            </div>
            <div>
                <slot></slot>
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
