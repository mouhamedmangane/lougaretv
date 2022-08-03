<template>
    <div>
        <input type="hidden" :name="name" v-model="value">
        <div class="w-8 h-8 rounded-full hover:border hover:border-primary"
             :style="{'background-color':value,}"
              @click="modalshow=true"
             >
        </div>
          <modal-couleur  v-if="modalshow" @clickClose="modalshow=false"/>

    </div>
</template>

<script>
export default {
    props:['name','value'],
    data(){
        return {
            modalshow:false;
        }
    },
    emits:['change'],
    methods:{

    },
    mounted(){
    }

}
</script>

<style>

</style>
