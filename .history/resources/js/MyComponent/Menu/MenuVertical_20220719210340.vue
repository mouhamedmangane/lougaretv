<template>
    <div class="bg-neutral-800 text-white w-56 " style="height:calc(100vh - 59px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{' hover:bg-primary-400':true,'bg-primary-600':isActive(item.url)}" >
                <a :href="item.url" class="py-4 px-4  w-full inline-block" v-if="!item.disable">
                    {{ item.nom }}
                </a>
                 <span :href="item.url" class="py-4 px-4  w-full inline-block" v-if="!item.disable">
                    {{ item.nom }}
                 </span>
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
