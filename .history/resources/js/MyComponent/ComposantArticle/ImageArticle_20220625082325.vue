<template>
    <div class="bg-neutral-300">
        <div class="w-full h-48">

        </div>
        <img :src="m.url" :alt="m.titre" :class="[classBloc,' w-full']">
        <div class="p-3">
            {{m.titre}}
        </div>
    </div>

</template>

<script>
export default {
    props:['m'],
}
</script>

<style>

</style>
