<template>
    <div class="group" >

        <div class="relative ">
            <img :src="pub.image" alt="" class="w-full object-cover aspect-[3/2.1]">

        </div>
        <div :class="{'pl-4 pr-3':tabuler,'py-3':true}">
            <div class="text-neutral-600 pb-1" v-if="pub.etiquette">{{pub.etiquette}}</div>
            <div class="text-[2rem]  font-bold py-3 group-hover:underline">
                {{pub.titre}}
            </div>
            <p class="text-lg leading-[1.2]  font-[300] text-neutral-700">
                {{pub.text}}
            </p>



        </div>

    </div>

</template>

<script>
export default {
    props:  ['pub','tabuler']
}
</script>

<style>

</style>
