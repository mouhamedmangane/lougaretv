
<template>

    <app-main class="">

        <div class="flex justify-center pt-6">
                <video src="https://www.youtube.com/embed/kV_VoNTSM6M" class="w-64 aspect-[3/2]">

                </video>
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
