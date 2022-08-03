<template>
    <div class="flex ">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-60 2xl:w-68 object-cover aspect-[3/2] ">
        </div>
        <div class="pl-[20px]">
            <div class="text-xl  font-bold pb-2">
                {{pub.titre}}
            </div>
            <p class="text-sm  2xl:text-base">
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
