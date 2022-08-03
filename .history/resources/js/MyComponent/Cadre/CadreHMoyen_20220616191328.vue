<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-full w-60 object-cover h-48 2xl:h-60 ">
        </div>
        <div class="pl-[20px]">
            <div class="text-2xl text-bold py-3">
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
