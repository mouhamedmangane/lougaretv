<template>
    <div class="d-flex">
        <div>
            <img :src="pub.image" alt="" class="w-full object-cover h-[24rem] 2xl:h-[30rem]">
        </div>
        <div>
            <div class="text-4xl text-bold py-3">
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
