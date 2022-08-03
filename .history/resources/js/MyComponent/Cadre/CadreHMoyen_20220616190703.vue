<template>
    <div class="grid-row">
        <div>
            <img :src="pub.image" alt="" class="w-48 object-cover h-48 2xl:h-[60rem]">
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
