<template>
    <div>
        <input type="hidden" :name="name" v-model="value">
        <div class="w-8 h-8 rounded-full border hover:border-primary"
             :style="{'background-color':value,}"
              @click="modalshow=true"
             >
        </div>
        <teleport to="body">
            <modal-couleur  v-if="modalshow"
                            @clickClose="onClickClose"
                            class="bg-white" />
        </teleport>

    </div>
</template>

<script>
import ModalCouleur from './ModalCouleur.vue'
export default {
  components: { ModalCouleur },
    props:['name','value'],
    data(){
        return {
            modalshow:false
        }
    },
    emits:['change'],
    methods:{
        onClickCloseModal(event,o){
            modalshow=false;
            this.value=o.color;
        }
    },
    mounted(){
    }

}
</script>

<style>

</style>
