<template>
    <div class="" >
        <div class="relative">
            <img :src="pub.image" alt="" class="w-full object-cover aspect-[3/2]">
              <div class="absolute bottom-[-15px] left-3 bg-red-600 text-white px-4 py-1">
                Politique
            </div>
        </div>
        <div>
            <div class="text-5xl font-bold py-5">
                {{pub.titre}}
            </div>
            <p class="text-base 2xl:text-lg ">
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
