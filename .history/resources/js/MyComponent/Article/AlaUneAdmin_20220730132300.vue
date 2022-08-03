<template>
    <div class="grid grid-cols-12 gap-4">
        <div class=" border relative bg-neutral-100 h-12" v-for="alaune in [1,2,3,4]">
            <img src="" alt="" class="h-16 w-100" >
        </div>
    </div>
</template>

<script>
export default {
    props:['alaunes'],
}
</script>

<style>

</style>
