<template>
    <div class="" >
        <div class="relative">
            <img :src="pub.image" alt="" class="w-full object-cover h-[24rem] 2xl:h-[30rem]">
              <div class="absolute bottom-[-15px] left-1 bg-blue-600 text-white px-4 py-1">
                Politique
            </div>
        </div>
        <div>
            <div class="text-5xl font-bold py-5">
                {{pub.titre}}
            </div>
            <p class="">
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
