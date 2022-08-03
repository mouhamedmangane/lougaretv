<template>
    <div>
        <input type="hidden" :name="name" v-model="value">
        <div class="w-8 h-8 rounded-full hover:border hover:border-primary" :style="{'background-color':value,}">
        </div>


    </div>
</template>

<script>
import COLORS from 'tailwindcss/colors'
export default {
    props:['name','value'],
    data(){
        return {
            colors:COLORS,
            modalshow:false;
        }
    },
    emits:['change'],
    methods:{

    },
    mounted(){
        console.log(COLORS);
    }

}
</script>

<style>

</style>
