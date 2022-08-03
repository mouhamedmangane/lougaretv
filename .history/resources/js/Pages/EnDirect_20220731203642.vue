
<template>

    <app-main class="">
        <div class="w-full md:w-[980px] mx-auto mt-10 z-10">
            <h1 class="md:text-3xl text-lg px-4 md:px-0 font-bold uppercase ">Les élections Législatives En Direct</h1>
            <div class="flex justify-center mt-[1.5625rem] relative group cursor-pointer" @click="playVideo()">
                    <div class="absolute left-0 top-0 w-full h-full bg-neutral-100 flex justify-center items-center z-20" v-show="barrage">
                        <div class="p-5 bg-[rgba(224,224,224,0.5)] group-hover:bg-[rgba(224,224,224,0.3)] rounded-full">
                            <material-icon nom="play_arrow" class="text-8xl "  />
                        </div>
                    </div>
                    <iframe class="w-full aspect-[5.34/3] z-10"
                            :src="srcVideo"
                            frameborder="0"
                            id="player"
                            allow="autoplay"
                            allowfullscreen></iframe>

            </div>

            <div class="max-w-full bg-black overflow-x-auto py-4">
                <div class="flex flex-nowrap justify-start ">
                    <div v-for="(item,index) in videos" :class="{'flex-none w-48 mx-1':index==videoIndex}"  @click="changerVideo(index)">
                        <img :src="item.img" alt="" class="aspect-[3.2/2] h-32 object-cover">
                        <div class="pt-4 px-4 text-sm text-white">
                            {{ item.titre }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="pl-4 md:pl-12 ml-0 md:ml-12  mt-[1.6rem] text-base  md:text-xl ">
                <h2 class="font-bold">Regarder Lougaré TV : la chaine de tous les sénéglais</h2>
                <p class="mt-5 text-sm md:text-base ">
                    Lougaré Tv est une nouvelle télévison. Crée pour les Sénégalais, pour remttre la télévision à sa place. Actualités, documentaires
                    , technologies sont mise à votre disposition pour un Sénégal meilleur.
                </p>

                <p class="mt-5 text-base">
                    Lougaré Tv est composé de jounalistes talentueux, professionnels et qui aiment leurs métiérs. Il travaillent jour et nuil pour founir des
                    information de qualité au peuple Sénégalais.
                </p>

                <p class="mt-5 text-base">
                    Nous n'avons que le Sénégal. Vive le senégal, Lougaré TV SOUNOU MOMEL !
                </p>

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
          videoIndex:0,
          videos:[
              {
                  url:'https://www.youtube.com/embed/-PbAQAy0y5s?autoplay=1',
                  titre:"Elections Legislatives : Ahmed Aidara et Malick Gackou ont voté a l'école de 16 de Sahm Notaire...",
                  img:'/videos/1.png',
              },
              {
                  url:'https://www.youtube.com/embed/4YtaZKqoCRo?autoplay=1',
                  titre:"Eléctions legislatives : Néné fatoumata tall et Aliou Sall ont voté au Centre Banque Islamique...",
                  img:'/videos/2.png',
              },
              {
                  url:'https://www.youtube.com/embed/TBx2KWmeb3o?autoplay=1',
                  titre:"Elections législative 2022: le vote démare a 8h a l' école 16 de GUEDIAWAYE...",
                  img:'/videos/3.png',
              },
          ]
      };
  },
  computed:{
      srcVideo(){
          return this.videos[this.videoIndex].url;
      }
  },
  methods:{
      playVideo(){
          this.barrage=false;
          var player =  document.getElementById('player');
          player.getElementsByTagName('video')[0].play();


      },
      changerVideo(index){
          this.videoIndex=index;
      }
  }

}
</script>

<style>

</style>
