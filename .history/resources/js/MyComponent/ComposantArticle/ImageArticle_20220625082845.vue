<template>
    <div class="bg-neutral-300">
        <div class="w-full min-h-48">
                    <img :src="m.url" :alt="m.titre" :class="[classBloc,' w-full']">

        </div>
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
