<template>
    <div class="flex">
        <div>
            <img :src="pub.image" alt="" class=" max-w-fit w-32 object-cover aspect-[3/2]">
        </div>
        <div class="pl-[20px]">
            <div class="text-base font-bold pb-2">
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
