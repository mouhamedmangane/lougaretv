<template>
    <div class="bg-neutral-800 text-white  " style="height:calc(100vh - 59px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{'':true,'bg-primary-700':isActive(item.url)}" >
                <a :href="item.url" class="flex flex-col justify-center items-center hover:bg-primary-600 py-4 px-4 text-xs w-full inline-block" v-if="!item.disable">
                    <material-icon :nom="item.icon" type="outlined" />
                    <span class="mt-1 truncate">
                        {{ item.nom }}
                    </span>
                </a>
                 <span class=" flex flex-col justify-center items-center py-4 px-4  w-full inline-block bg-neutral-700 text-xs" v-if="item.disable">
                    <material-icon :nom="item.icon" type="outlined" />
                    <span class="mt-1 truncate">
                        {{ item.nom }}
                    </span>
                 </span>
            </li>
        </ul>
    </div>

</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue';
export default {
  components: { MaterialIcon },
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
