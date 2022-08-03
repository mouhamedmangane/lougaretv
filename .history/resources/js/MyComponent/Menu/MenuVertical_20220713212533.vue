<template>
    <div>
        <ul class="list-none">
            <li class="" v-for="item in items">
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
