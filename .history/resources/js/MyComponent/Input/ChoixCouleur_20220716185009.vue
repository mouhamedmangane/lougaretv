<template>
    <div>
            <input type="hidden" :name="name" v-model="value">

    </div>
</template>

<script>
import color from 'tailwindcss/colors'
export default {
    props:['name','value'],
    emits:['change'],
    mounted(){
        console.log(color);
    }
}
</script>

<style>

</style>
