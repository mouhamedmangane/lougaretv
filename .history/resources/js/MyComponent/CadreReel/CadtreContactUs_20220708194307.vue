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
                <div class="flex text-neutral-500">
                    <div class="w-1/4 bg-white shadow-md flex p-5">
                            <material-icon nom="support_agent" class="text-3xl" />
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
