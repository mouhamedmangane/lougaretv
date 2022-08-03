<template>
    <div>
            <input type="hidden" :name="name" v-model="value">
        <div v-for="(gcolor,gcolorIndex) in colors">
            <div v-for="(color,colorIndex) in gcolor" :class="['w-8 h-8','bg'+gcolorIndex+colorIndex]">

            </div>
        </div>
    </div>
</template>

<script>
import color from 'tailwindcss/colors'
export default {
    props:['name','value'],
    data(){
        return {
            colors:colors,
        }
    },
    emits:['change'],
    mounted(){
        console.log(color);
    }
}
</script>

<style>

</style>
