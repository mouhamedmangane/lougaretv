
<template>

    <app-main class="">
        <div class="w-[980px] mx-auto mt-10">
            <h1 class="text-3xl font-bold uppercase">Les élections Législatives En Direct</h1>
            <div class="flex justify-center mt-[1.5625rem] relative group cursor-pointer" @click="playVideo()">
                    <div class="absolute left-0 top-0 w-full h-full bg-neutral-100 flex justify-center items-center z-20" v-show="barrage">
                        <div class="p-5 bg-[rgba(224,224,224,0.5)] group-hover:bg-[rgba(224,224,224,0.3)] rounded-full">
                            <material-icon nom="play_arrow" class="text-8xl "  />
                        </div>
                    </div>
                    <iframe class="w-full aspect-[5.34/3] z-10"
                            src="https://www.youtube.com/embed/kV_VoNTSM6M"
                            title="YouTube video player"
                            frameborder="0"
                            id="iframe"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
            </div>
            <div class="pl-12 ml-12 mt-[1.6rem]  text-xl">
                <h2 class="font-bold">Regarder Lougaré TV : la chaine de tous les sénéglais</h2>
            </div>
        </div>


    </app-main>

</template>

<script>
import AppMain from '@/Layouts/AppMain.vue';
import ContainerBox from '@/MyComponent/Box/ContainerBox.vue';
import MaterialIcon from '@/MyComponent/Icons/MaterialIcon.vue';

export default {
  components: {AppMain, ContainerBox, MaterialIcon   },
  data(){
      return {
          url:'',
          barrage:true,
      };
  },
  methods:{
      playVideo(){
          this.barrage=false;
          let iframe=document.getElementById('iframe');
          iframe.contentWindow.document.querySelector('video').play();


      }
  }

}
</script>

<style>

</style>
