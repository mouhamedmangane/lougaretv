<template>
  <div>
        <div class="flex justify-between items-center pb-5 pt-1  ">
            <div class="flex items-center">
                <titre-bloc class="border-blude-700">
                    <h2 class="m-0 leading-none">Contactez-nous  </h2>
                </titre-bloc>
                <material-icon nom="chevron_right" />
                <div class="text-neutral-500 "> Rubrique favorie</div>
            </div>
            <div class="flex text-neutral-500">
                <span>Modifier</span>
                <material-icon nom="expand_more" />
            </div>
        </div>
  </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
import TitreBloc from '../Text/TitreBloc.vue'
export default {
  components: { TitreBloc, MaterialIcon },

}
</script>

<style>

</style>
