<template>
    <div>
        <div>
            <img :src="pub.image" alt="" class="w-full object-cover">
        </div>
        <div>
            <span class="text-4xl text-bold py-3">
                {{pub.titre}}
            </span>
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
