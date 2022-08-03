<template>

    <input type="hidden" v-model="couleur_fond">
</template>

<script>
import color from 'tailwindcss/colors'
export default {
    props:['name','value'],
    mounted(){
        console.log(color);
    }
}
</script>

<style>

</style>
