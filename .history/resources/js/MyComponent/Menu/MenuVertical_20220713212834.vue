<template>
    <div class="bg-neutral-900 text-white" style="height:calc(100vh - 59 px);">
        <ul class="list-none">
            <li v-for="item in items" class="py-1" >
                <a :href="item.url">
                    {{ item.nom }}
                </a>
            </li>
        </ul>
    </div>

</template>

<script>
export default {
    props:['items'],
}
</script>

<style>

</style>
