<template>
    <div>
            <input type="hidden" :name="name" v-model="value">
        <div v-for="color in color">

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
