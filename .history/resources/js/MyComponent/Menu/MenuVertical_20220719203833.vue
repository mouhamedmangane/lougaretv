<template>
    <div class="bg-neutral-800 text-white w-56 " style="height:calc(100vh - 59px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{'py-4 px-4 hover:bg-primary-400':true,'bg-primary-600':isActive(item.url)}" >
                <a :href="item.url" class="py-4 px-4  w-full">
                    {{ item.nom }}
                </a>
            </li>
        </ul>
    </div>

</template>

<script>
export default {
    props:['items','activeRouter'],
    methods:{
        isActive(url){
            if(window.location.pathname.indexOf(url)==0)
                return true;
            return false;
        }
    }
}
</script>

<style>

</style>
