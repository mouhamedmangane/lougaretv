<template>
    <div>
            <input type="hidden" :name="name" v-model="value">
        <div v-for="(gcolorIndex,gcolor) in colors">
            <div v-for="(niveau,color) in gcolor" :class="['w-8 h-8',classColor(gcolor,color)]">

            </div>
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
        }
    },
    emits:['change'],
    methods:{
        classColor(bcolor,niveau){
            return 'bg-'+bcolor+'-'+niveau;
            console.log(bcolor);;
        }
    },
    mounted(){
        console.log(COLORS);
    }

}
</script>

<style>

</style>
