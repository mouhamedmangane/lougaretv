<template>
    <div class="bg-neutral-800 text-white w-56 " style="height:calc(100vh - 59px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{'py-4 px-4 hover:bg-primary-600':true,'bg-primary-600':activeRouter.indexOf(item.url)==0}" >
                <a :href="item.url">
                    {{ item.nom }}
                </a>
            </li>
        </ul>
    </div>

</template>

<script>
export default {
    props:['items','activeRouter'],
}
</script>

<style>

</style>
