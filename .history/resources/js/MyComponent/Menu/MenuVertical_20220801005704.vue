<template>
    <div class="bg-neutral-800 text-white w-20  " style="height:calc(100vh - 48px);">
        <ul class="list-none">
            <li v-for="item in items" :class="{'px-4':true,'bg-primary-700':isActive(item.url)}" >
                <a :href="item.url" class="flex flex-col justify-center items-center hover:bg-primary-600 py-4 px-4 text-xs w-full inline-block" v-if="!item.disable">
                    <material-icon :nom="item.icon" type="outlined" />
                    <span class="mt-1 mx-1 truncate" >
                        {{ item.nom }}
                    </span>
                </a>
                 <span class="  flex flex-col  items-center   w-full inline-block bg-neutral-700 text-xs truncate" v-if="item.disable">
                    <material-icon :nom="item.icon" type="outlined" />
                    <div class="mt-1 flex-none justify-self-start self-start">
                        {{ item.nom }}
                    </div>
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
