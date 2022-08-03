<template>
    <!-- <div :class="{'z-20  ':true,}">
        <div class="w-full  bg-black text-white">
             <container-box :class="{'flex justify-between container mx-auto  items-center transition-all   ':true}">
                 <div class="flex w-4/12  items-center">
                    <a href="" class="underline text-sm">Lougaré Annonce</a>
                </div>





                <div class=" flex items-center  justify-end w-4/12">

                    <button class="mr-1 border-b">
                        <img src="images/icons/fb.png" alt="" class="h-[24px]"/>
                    </button>
                    <button class="mr-1 border-b">
                        <img src="images/icons/twt.png" alt="" class="h-[24px] pl-2 "/>
                    </button>
                    <button class="mr-1 border-b">
                        <img src="images/icons/you.png" alt="" class="h-[24px] pl-2" />
                    </button>
                </div>
            </container-box>
        </div>



    </div> -->
    <div :class="{ 'w-full  md:sticky top-0    z-20   transition-all   ':true,'text-black bg-white shadow-lg   ':isSmall,' text-black bg-white shadow-lg   border-neutral-300':!isSmall}">
        <container-box :class="{'relative flex justify-between container mx-auto  items-center transition-all relative   border-neutral-300':true}">
             <div :class="{'flex items-center   px-4 md:py-1 absolute  left-0  h-[54.5px]':true,'     border-neutral-300':!isSmall,'top-0':isSmall} " style="">
                    <a href="/" class=" ">
                        <app-logo  logoClass="md:h-12"  :inverse="isSmall"/>
                    </a>

            </div>
            <div class="md:w-72 2xl:w-32 text-right">
                <!-- <div class="">
                    <img src="images/icons/senegal.png" alt="" class="h-[16px] pl-3 " />
                </div> -->
            </div>
            <nav :class=" {'md:py-3':isSmall,'md:py-3':!isSmall,'md;py-3 absolute md:static top-[100%] left-0  w-full md:w-max  overflow-hidden transition-all bg-red-100 md:bg-transparent z-50':true,'h-[100vh - 40px] md:h-max':isDerouler,'h-0 md:h-max':!isDerouler}">
                <h2 class="text-masquer">Menu</h2>
                <ul class="list-none flex flex-col md:flex-row  font-medium text-[15px] flex-wrap">
                    <menu-item text="A la une" class=" border-white hover:underline"/>
                    <menu-item v-for="text in elements"  :text="text" />
                    <li><more-item class="hover:underline " /></li>
                </ul>
            </nav>

            <div class="flex justify-end items-center ">
                <material-icon-text  class="ml-2 mr-4 rounded-full px-4" materialicon='play_circle_filled' text="en direct" iconClass="text-2xl mr-1 text-white" textClass=" text-xl  text-white"/>
                <material-icon nom="search" class="text-2xl ml-2 " />
                <!-- <material-icon nom="notifications" type="outlined" class="text-2xl ml-2 " /> -->
                <button class="ml-2   rounded-full w-10 h-10  rounded-full   ">
                    <material-icon nom="person" type="outlined" class="text-2xl " />
                </button>

                <button class="ml-2 mr-4   rounded-full w-10 h-10  rounded-full  md:hidden " @click="derouler">
                    <material-icon nom="menu" type="outlined" class="text-2xl " />
                </button>


            </div>


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
            isDerouler:false,
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
                if(position<=50){
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
                    this.ticking=true;
            }
            this.ticking=true;
            console.log('test');

        },
        derouler(){
            this.isDerouler=!this.isDerouler;
        }



    },

    mounted(){
        window.addEventListener('scroll',this.onScrollWindow);
    }

}
</script>

<style>


</style>
