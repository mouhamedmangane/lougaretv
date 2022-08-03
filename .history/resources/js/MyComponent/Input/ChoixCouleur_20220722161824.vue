<template>
<teleport to="body">
    <div  class="z-30">
        <input type="hidden" :name="name" v-model="color">
        <div class="w-8 h-8 rounded-full border-2 border-black hover:border-primary"
             :style="{'background-color':finalColor,}"
              @click="modalshow=true"
             >
        </div>

            <my-modal class="bg-white" v-model="modalshow" v-if="modalshow" titre="Choisir Couleur" >
                <select-couleur
                            @clickClose="onClickCloseModal"
                            class="bg-white" />
            </my-modal>

    </div>
          </teleport>

</template>

<script>
import MyModal from '../Modal/MyModal.vue';
import SelectCouleur from './SelectCouleur.vue';
export default {
  components: {  SelectCouleur, MyModal },
    props:['name','color','defaultColor'],
    data(){
        return {
            modalshow:false,
        }
    },
    computed:{
        finalColor(){
            return (this.color)?this.color:this.defaultColor;
        }
    },
    emits:['update:color'],
    methods:{
        onClickCloseModal(o){
            console.log(o);
            this.modalshow=false;
            this.$emit('update:color',o.color);

        }
    },
    mounted(){
    }

}
</script>

<style>

</style>
