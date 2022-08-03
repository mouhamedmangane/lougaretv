<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-60 object-cover h-52 2xl:h-52 ">
        </div>
        <div class="pl-[20px]">
            <div class="text-2xl font-bold pb-2">
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
