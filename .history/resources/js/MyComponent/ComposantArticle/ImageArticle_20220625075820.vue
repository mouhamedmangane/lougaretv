<template>
    <div class="bg-neutral-300">
        <img :src="model.url" :alt="model.titre" :class="[classBloc,' w-full']">
        <div class="p-3">
            {{model.titre}}
        </div>
    </div>

</template>

<script>
export default {
    props:['model'],
}
</script>

<style>

</style>
