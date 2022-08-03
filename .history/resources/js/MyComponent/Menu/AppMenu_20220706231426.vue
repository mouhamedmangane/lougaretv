<template>
    <div :class="{'z-20  ':true,}">
        <div class="w-full  bg-black text-white">
             <container-box :class="{'flex justify-between container mx-auto  items-center transition-all   ':true}">
                 <div class="flex w-4/12  items-center">
                    <a href="" class="underline text-sm">Lougaré Annonce</a>
                </div>

                <!-- <div class="w-4/12  flex justify-center">
                    <a href="/" class=" ">
                        <app-logo  logoClass="h-12"  />
                    </a>
                </div> -->

                  <div class="flex justify-center w-4/12">
                    <material-icon-text  class="ml-2 mr-4" materialicon='play_circle_filled' text="En direct" iconClass="text-2xl text-black mr-1" textClass="font-medium text-xl"/>
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



    </div>
    <div :class="{ 'w-full  sticky top-0  mb-2 z-20   transition-all  mt-2 ':true,'text-black bg-white shadow-lg':isSmall,'text-black bg-neutral-100  ':!isSmall}">
        <container-box :class="{'flex justify-between container mx-auto  items-center transition-all    border-neutral-300':true}">
             <div class="flex items-center">
                    <a href="/" class=" ">
                        <app-logo  logoClass="h-10"  :inverse="isSmall"/>
                    </a>
                    <div class="">
                        <img src="images/icons/senegal.png" alt="" class="h-[16px] pl-3 " />
                    </div>
            </div>
            <nav class="py-3 ">
                <h2 class="text-masquer">Menu</h2>
                <ul class="list-none flex font-medium text-[16px]">
                    <menu-item v-for="text in elements"  :text="text" />
                    <!-- <li><more-item class="hover:underline " /></li> -->
                </ul>
            </nav>

            <div class="flex justify-end items-center ">
                <button class="ml-2   rounded-full ">
                    <material-icon nom="person" type="outlined" class="text-2xl " />
                </button>

                <material-icon nom="notifications" type="outlined" class="text-2xl ml-2 " />

                <material-icon nom="search" class="text-2xl ml-2 " />



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
            activeBreaking:true,
            elements:[
                'News','Politique','Poeple','Religion','Société','Sport','Economie','Technologie    ','Afrique','International','Vidéos'
            ]
        }
    },

    methods:{
        onCloseBreaking(){
            this.activeBreaking=false;
        },
        changeScroll(position){
                if(position<=35){
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
