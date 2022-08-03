<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-46 object-cover h-42 2xl:h-48 ">
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
