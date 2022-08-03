<template>
    <div v-if="m.videoType=='integre'" class="my-3">
        <div v-html="m.url">

        </div>
    </div>
</template>

<script>
export default {
    props:['m']
}
</script>

<style>

</style>
