
<template>

    <app-main class="">
        <container-box>
            <h1>LES ELECTIONS LEGISLATIVE EN DIRECT</h1>
            <div class="flex justify-center pt-6">
                    <iframe width="560"
                            height="315"
                            src="https://www.youtube.com/embed/kV_VoNTSM6M"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
            </div>
        </container-box>


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
