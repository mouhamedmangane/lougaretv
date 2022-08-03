<template>
    <div :class="{'z-20 flex justify-between  items-center relative  py-8  border-b-2 border-red-600 px-8 ':true,}">
        <div class="">
            <div class="relative ">
                <input type="text" class="w-72  pl-4 border-neutral-500 rounded-full">
                 <material-icon nom="search" class="text-2xl ml-2  absolute right-5 bottom-1 text-neutral-500" />

            </div>
        </div>
        <div class="pt-3 absolute top-1" style="left:calc(50% - 96.6px)">
            <a href="/" class="  ">
                    <app-logo  logoClass="h-[70px]"  :inverse="isSmall"/>
            </a>
        </div>
        <div class="flex justify-end items-center ">
                <material-icon-text  class="ml-2 mr-4  rounded-full px-4" materialicon='play_circle_filled' text="en direct" iconClass="text-2xl mr-1 black" textClass="font-medium text-xl  text-white"/>
                <!-- <material-icon nom="notifications" type="outlined" class="text-2xl ml-2 " /> -->
                <button class="ml-2  bg ">
                    <material-icon nom="person" type="outlined" class="text-2xl " />
                </button>


        </div>



    </div>
    <div :class="{ 'w-full  sticky top-0     z-20   transition-all    ':true,'text-black bg-white shadow-lg   ':isSmall,'   border-neutral-300':!isSmall}">
        <container-box :class="{'flex justify-center  items-center transition-all relative   bg-neutral-100':true}">
             <!-- <div :class="{'flex items-center  bg-white px-4 py-1 absolute  left-0  h-[54.5px]':true,' top-1  border-l  border-neutral-300':!isSmall,'top-0':isSmall} " style="border-radius:20px 0px 0px 20px;border-top-color:transparent;">
                    <a href="/" class=" ">
                        <app-logo  logoClass="h-12"  :inverse="isSmall"/>
                    </a>

            </div> -->
            <!-- <div class="w-32 text-right">
                <div class="">
                    <img src="images/icons/senegal.png" alt="" class="h-[16px] pl-3 " />
                </div>
            </div> -->
            <nav :class=" {'':isSmall,'':!isSmall,'':true}">
                <h2 class="text-masquer">Menu</h2>
                <ul class="list-none flex font-medium text-[18px]">
                    <menu-item v-for="text in elements"  :text="text" />
                    <li><more-item class="hover:underline " /></li>
                </ul>
            </nav>




        </container-box>
                    <!-- <breaking-news :active="activeBreaking" @clickClose="onCloseBreaking"/> -->

    </div>


</template>

<script>

import _ from 'lodash';
import ContainerBox from '../Box/ContainerBox.vue'
import BreakingNews from '../Breaking/BreakingNews.vue'
import MaterialIcon from '../Icons/MaterialIcon.vue'
import MaterialIconText from '../Icons/MaterialIconText.vue'
import AppLogo from './AppLogo.vue'
import MenuItem from './MenuItem.vue'
import MoreItem from './MoreItem.vue';

export default {
  components: { MenuItem, AppLogo, MaterialIcon, MaterialIconText, ContainerBox, BreakingNews, MoreItem },
    props:['nom'],
    data(){
        return{
            ticking:false,
            isSmall:false,
            activeBreaking:true,
            elements:[
                'News','Politique','Poeple','Religion','Société','Sport','Economie','Vidéos'
            ]
        }
    },

    methods:{
        onCloseBreaking(){
            this.activeBreaking=false;
        },
        changeScroll(position){
                if(position<=0){
                    this.isSmall=false;
                }
                else{
                    this.isSmall=true;
                }
                                    this.ticking=false;




        },
        onScrollWindow(){
            let position=window.pageYOffset;
            if(!this.ticking){
               let changeScroll=this.changeScroll;
                window.requestAnimationFrame(function(){
                    changeScroll(position);
                });

            }
            this.ticking=true;
            console.log('test');

        }



    },

    mounted(){
        window.addEventListener('scroll',this.onScrollWindow);
    }

}
</script>

<style>


</style>
