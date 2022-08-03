<template>
    <div>
        <input type="hidden" :name="name" v-model="value">
        <div class="w-8 h-8">

        </div>
        <div v-for="(gcolorIndex,gcolor) in COLORS" class="flex">
            <div v-for="color in gcolorIndex" class="w-8 h-8" :style="{background:color}" >

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
            color:this.value
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
