<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-32 2xl:w-36 object-cover aspect-[3/2]">
        </div>
        <div class="pl-[10px]">
            <div class="lg:text-xs xl:text-[.9375rem] font-medium leading-5  ">
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
