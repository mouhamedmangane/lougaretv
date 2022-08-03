<template>
    <div class="group" >
        <div class="relative ">
            <img :src="pub.image" alt="" class="w-full object-cover aspect-[3/2]">
              <div class="2xl:text-base text-xs absolute bottom-[-15px] left-3 bg-red-600 text-white px-4 py-1">
                Politique
            </div>
        </div>
        <div class="py-3 px-3">
            <div class="xl:text-[2rem] lg:text-3xl font-bold py-3 group-hover:underline">
                {{pub.titre}}
            </div>
            <p class="xl:text-lg  font-light">
                {{pub.text}}
            </p>
        </div>

    </div>

</template>

<script>
export default {
    props:  ['pub']
}
</script>

<style>

</style>
