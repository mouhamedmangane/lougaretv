
<template>

    <app-main class="">

        <div class="flex justify-center pt-6">
                <iframe width="560"
                        height="315"
                        src="https://www.youtube.com/embed/kV_VoNTSM6M"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
        </div>


    </app-main>

</template>

<script>
import AppMain from '@/Layouts/AppMain.vue';

export default {
  components: {AppMain   },
  data(){
      return {
          url:''
      };
  }

}
</script>

<style>

</style>
