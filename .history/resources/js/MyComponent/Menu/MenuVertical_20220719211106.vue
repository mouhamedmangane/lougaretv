<template>
    <div class="bg-neutral-800 text-white w-56 " style="height:calc(100vh - 59px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{'':true,'bg-primary-700':isActive(item.url)}" >
                <a :href="item.url" class="  hover:bg-primary-700 py-4 px-4  w-full inline-block" v-if="!item.disable">
                    {{ item.nom }}
                </a>
                 <span class="py-4 px-4  w-full inline-block bg-neutral-500" v-if="item.disable">
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
