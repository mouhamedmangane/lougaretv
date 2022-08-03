<template>
    <div class="flex ">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-6_ 2xl:w-68 object-cover aspect-[3/2.1] ">
        </div>
        <div class="pl-[20px]">
            <div class="text-2xl  font-bold ">
                {{pub.titre}}
            </div>
            <p class="text-base font-light pt-2">
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
