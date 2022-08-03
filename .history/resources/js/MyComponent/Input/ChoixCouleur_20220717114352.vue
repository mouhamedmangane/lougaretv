<template>
    <div>
        <input type="hidden" :name="name" v-model="color">
        <div class="w-8 h-8 rounded-full border-2 border-black hover:border-primary"
             :style="{'background-color':color,}"
              @click="modalshow=true"
             >
        </div>
        <teleport to="body">
            <modal-couleur  v-if="modalshow"
                            @clickClose="onClickCloseModal"
                            class="bg-white" />
        </teleport>

    </div>
</template>

<script>
import ModalCouleur from './ModalCouleur.vue'
export default {
  components: { ModalCouleur },
    props:['name','value','defaultColor'],
    data(){
        let color=(this.value)?this.value:this.defaultColor;
        return {
            modalshow:false,
            color:color,
        }
    },
    emits:['update:color'],
    methods:{
        onClickCloseModal(o){
            console.log(o);
            this.modalshow=false;
            this.color=o.color;
            this.$emit('update:color',color);

        }
    },
    mounted(){
    }

}
</script>

<style>

</style>
