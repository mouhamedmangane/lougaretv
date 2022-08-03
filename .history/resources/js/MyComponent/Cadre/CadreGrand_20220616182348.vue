<template>
    <div>
        <div>
            <img src="image" alt="" class="w-full object-cover">
        </div>
        <div>
            <span class="text-4xl text-bold py-3">
                {{titre}}
            </span>
            <p class="">
                {{text}}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    props:  ['image','titre','text']
}
</script>

<style>

</style>
