<template>
    <div class="group" >
        <div class="relative ">
            <img :src="pub.image" alt="" class="w-full object-cover aspect-[3/2.1]">

        </div>
        <div :class="['px-3':tabuler,'py-3']">
            <div class="xl:text-[2rem] lg:text-3xl font-bold py-3 group-hover:underline">
                {{pub.titre}}
            </div>
            <p class="xl:text-lg leading-[1.2]  font-[300] text-neutral-700">
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
