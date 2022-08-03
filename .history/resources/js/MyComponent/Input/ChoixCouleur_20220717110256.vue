<template>
    <div>
        <input type="hidden" :name="name" v-model="value">
        <div class="w-8 h-8 rounded -ull" :style="{'background-color':value,}">
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

    },
    mounted(){
        console.log(COLORS);
    }

}
</script>

<style>

</style>
