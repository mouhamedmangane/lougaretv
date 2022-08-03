<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-32 2xl:w-36 object-cover aspect-[3/2]">
        </div>
        <div class="pl-[10px]">
            <div class="lg:text-xs xl:text-base font-bold pb-2 tracking-tighter font-['Roboto, sans-serif']">
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
