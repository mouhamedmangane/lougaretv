<template>
    <div>
        <div>
            <img :src="pub.image" alt="" class="w-full object-cover h-[24rem] 2xl:h-[30rem]">
        </div>
        <div>
            <div class="text-5xl font-bold py-4">
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
