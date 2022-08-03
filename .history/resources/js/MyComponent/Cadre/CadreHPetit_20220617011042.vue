<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-24 2xl:w-32 object-cover aspect-[3/2]">
        </div>
        <div class="pl-[10px]">
            <div class="lg:text-xs text-base font-bold pb-2 tracking-tighter">
                {{pub.titre}}
            </div>
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
