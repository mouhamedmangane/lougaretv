<template>
    <div v-if="m.videotype=='integre'">
        <div v-html="m.lien">

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
