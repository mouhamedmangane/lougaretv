
<template>

    <app-main class="">
        <div class="w-[980px] mx-auto mt-10">
            <h1 class="text-3xl font-bold uppercase">Les élections Législatives En Direct</h1>
            <div class="flex justify-center mt-[1.5625rem]">
                    <iframe class="w-full aspect-[5.34/3]"
                            src="https://www.youtube.com/embed/kV_VoNTSM6M"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
            </div>
            <div class="pl-10 mt-[1.5625rem]">

            </div>
        </div>


    </app-main>

</template>

<script>
import AppMain from '@/Layouts/AppMain.vue';
import ContainerBox from '@/MyComponent/Box/ContainerBox.vue';

export default {
  components: {AppMain, ContainerBox   },
  data(){
      return {
          url:''
      };
  }

}
</script>

<style>

</style>
