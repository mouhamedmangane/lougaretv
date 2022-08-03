<template>
  <div class="py-8">
        <container-box>
             <div class="flex justify-between items-center pb-5 pt-1  ">
                <div class="flex items-center">
                    <titre-bloc class="border-blude-700">
                        <h2 class="m-0 leading-none">Contactez-nous  </h2>
                    </titre-bloc>
                    <!-- <material-icon nom="chevron_right" />
                    <div class="text-neutral-500 "> Rubrique favorie</div> -->
                </div>

            </div>
             <div class="flex text-neutral-500">
                    <div class="w-1/3 bg-white shadow-md flex p-5">
                            <div class="pr-4 py-4">
                                <material-icon nom="support_agent" class="text-[7rem]" />
                            </div>
                            <div>
                                <h4 class="text-xl font-bold py-4">Service Commercial</h4>
                                <p>
                                    <div class="">Tel : +221 77 160 55 40 - <br>+221 77 160 55 40</div>
                                    <div class="">Email : info@lougaretv.sn</div>
                                </p>
                            </div>
                    </div>
                    <div class="w-1/3 bg-white shadow-md flex p-5">
                            <div class="pr-4 py-4">
                                <material-icon nom="psychology"  :type="outilined" class="text-[7rem]" />
                            </div>
                            <div>
                                <h4 class="text-xl font-bold py-4">Directeur Publicaton</h4>
                                <p>
                                    <div class="">Tel : +221 77 160 55 40 - <br>+221 77 160 55 40</div>
                                    <div class="">Email : info@lougaretv.sn</div>
                                </p>
                            </div>
                    </div>
                </div>
        </container-box>

  </div>
</template>

<script>
import ContainerBox from '../Box/ContainerBox.vue'
import MaterialIcon from '../Icons/MaterialIcon.vue'
import TitreBloc from '../Text/TitreBloc.vue'
export default {
  components: { TitreBloc, MaterialIcon, ContainerBox },

}
</script>

<style>

</style>
