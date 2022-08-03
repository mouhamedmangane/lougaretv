<template>
    <div class="bg-neutral-800 text-white  " style="height:calc(100vh - 59px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{'':true,'bg-primary-700':isActive(item.url)}" >
                <a :href="item.url" class="flex flex-col hover:bg-primary-600 py-4 px-4  w-full inline-block" v-if="!item.disable">
                    <material-icon :nom="item.icon" />
                    {{ item.nom }}
                </a>
                 <span class="py-4 px-4  w-full inline-block bg-neutral-700" v-if="item.disable">
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
