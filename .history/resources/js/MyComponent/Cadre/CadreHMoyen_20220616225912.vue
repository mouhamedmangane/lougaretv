<template>
    <div class="flex ">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-72 object-cover aspect-[3/2] ">
        </div>
        <div class="pl-[20px]">
            <div class="text-2xl font-bold pb-2">
                {{pub.titre}}
            </div>
            <p class="text-base">
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
